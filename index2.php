<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());

/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: mkeith, frostc, dclarke
 *    
 *******************************************************************************/

	$localVersion = false;
	
	# Define these here, or in _projectCommon.php for site-wide values
	$pageKeywords	= "eclipse, project, eclipselink, persistence";
	$pageAuthor		= "Doug Clarke";
	$pageTitle 		= "EclipseLink Home";
	
	ob_start();
?>
Note: In some cases, for your request to get through, you will need to set a User Agent before calling the parser script.
2. Source code of class.myatomparser.php

This class is by no means the be-all and end-all of Atom parsing. It's designed to be simple, functional and easily customisable. Any feedback would be welcome.

File: class.myatomparser.php
<?PHP   # Original PHP code by Chirp Internet: www.chirp.com.au   # Please acknowledge use of this code by including this header.   class myAtomParser   {     # keeps track of current and preceding elements     var $tags = array();     # array containing all feed data     var $output = array();     # return value for display functions     var $retval = "";     var $encoding = array();     # constructor for new object     function myAtomParser($file)     {       # instantiate xml-parser and assign event handlers       $xml_parser = xml_parser_create("");       xml_set_object($xml_parser, $this);       xml_set_element_handler($xml_parser, "startElement", "endElement");       xml_set_character_data_handler($xml_parser, "parseData");       # open file for reading and send data to xml-parser       $fp = @fopen($file, "r") or die("<b>myAtomParser Error:</b> Could not open URL $file for input");       while($data = fread($fp, 4096)) {         xml_parse($xml_parser, $data, feof($fp)) or die(           sprintf("myAtomParser: Error <b>%s</b> at line <b>%d</b><br>",           xml_error_string(xml_get_error_code($xml_parser)),           xml_get_current_line_number($xml_parser))         );       }       fclose($fp);       # dismiss xml parser       xml_parser_free($xml_parser);     }     function startElement($parser, $tagname, $attrs)     {       if($this->encoding) {         # content is encoded - so keep elements intact         $tmpdata = "<$tagname";         if($attrs) foreach($attrs as $key => $val) $tmpdata .= " $key=\"$val\"";         $tmpdata .= ">";         $this->parseData($parser, $tmpdata);       } else {         if($attrs['HREF'] && $attrs['REL'] && $attrs['REL'] == 'alternate') {           $this->startElement($parser, 'LINK', array());           $this->parseData($parser, $attrs['HREF']);           $this->endElement($parser, 'LINK');         }         if($attrs['TYPE']) $this->encoding[$tagname] = $attrs['TYPE'];         # check if this element can contain others - list may be edited         if(preg_match("/^(FEED|ENTRY)$/", $tagname)) {           if($this->tags) {             $depth = count($this->tags);             list($parent, $num) = each($tmp = end($this->tags));             if($parent) $this->tags[$depth-1][$parent][$tagname]++;           }           array_push($this->tags, array($tagname => array()));         } else {           # add tag to tags array           array_push($this->tags, $tagname);         }       }     }     function endElement($parser, $tagname)     {       # remove tag from tags array       if($this->encoding) {         if(isset($this->encoding[$tagname])) {           unset($this->encoding[$tagname]);           array_pop($this->tags);         } else {           if(!preg_match("/(BR|IMG)/", $tagname)) $this->parseData($parser, "</$tagname>");         }       } else {         array_pop($this->tags);       }     }     function parseData($parser, $data)     {       # return if data contains no text       if(!trim($data)) return;       $evalcode = "\$this->output";       foreach($this->tags as $tag) {         if(is_array($tag)) {           list($tagname, $indexes) = each($tag);           $evalcode .= "[\"$tagname\"]";           if(${$tagname}) $evalcode .= "[" . (${$tagname} - 1) . "]";           if($indexes) extract($indexes);         } else {           if(preg_match("/^([A-Z]+):([A-Z]+)$/", $tag, $matches)) {             $evalcode .= "[\"$matches[1]\"][\"$matches[2]\"]";           } else {             $evalcode .= "[\"$tag\"]";           }         }       }       if(isset($this->encoding['CONTENT']) && $this->encoding['CONTENT'] == "text/plain") {         $data = "<pre>$data</pre>";       }       eval("$evalcode .= '" . addslashes($data) . "';");     }     # display a single feed as HTML     function display_feed($data, $limit)     {       extract($data);       if($TITLE) {         # display feed information         $this->retval .= "<h1>";         if($LINK) $this->retval .= "<a href=\"$LINK\" target=\"_blank\">";         $this->retval .= stripslashes($TITLE);         if($LINK) $this->retval .= "</a>";         $this->retval .= "</h1>\n";         if($TAGLINE) $this->retval .= "<P>" . stripslashes($TAGLINE) . "</P>\n\n";         $this->retval .= "<div class=\"divider\"><!-- --></div>\n\n";       }       if($ENTRY) {         # display feed entry(s)         foreach($ENTRY as $item) {           $this->display_entry($item, "FEED");           if(is_int($limit) && --$limit <= 0) break;         }       }     }     # display a single entry as HTML     function display_entry($data, $parent)     {       extract($data);       if(!$TITLE) return;       $this->retval .=  "<p><b>";       if($LINK) $this->retval .=  "<a href=\"$LINK\" target=\"_blank\">";       $this->retval .= stripslashes($TITLE);       if($LINK) $this->retval .= "</a>";       $this->retval .=  "</b>";       if($ISSUED) $this->retval .= " <small>($ISSUED)</small>";       $this->retval .=  "</p>\n";       if($AUTHOR) {         $this->retval .=  "<P><b>Author:</b> " . stripslashes($AUTHOR['NAME']) . "</P>\n\n";       }       if($CONTENT) {         $this->retval .=  "<P>" . stripslashes($CONTENT) . "</P>\n\n";       } elseif($SUMMARY) {         $this->retval .=  "<P>" . stripslashes($SUMMARY) . "</P>\n\n";       }     }     function fixEncoding($input, $output_encoding)     {       if(!function_exists('mb_detect_encoding')) return $input;       $encoding = mb_detect_encoding($input);       switch($encoding) {         case 'ASCII':         case $output_encoding:           return $input;         case '':           return mb_convert_encoding($input, $output_encoding);         default:           return mb_convert_encoding($input, $output_encoding, $encoding);       }     }     # display entire feed as HTML     function getOutput($limit=false, $output_encoding='UTF-8')     {       $this->retval = "";       $start_tag = key($this->output);       switch($start_tag) {         case "FEED":           foreach($this->output as $feed) $this->display_feed($feed, $limit);           break;         default:           die("Error: unrecognized start tag '$start_tag' in getOutput()");       }       return $this->fixEncoding($this->retval, $output_encoding);     }     # return raw data as array     function getRawOutput($output_encoding='UTF-8')     {       return $this->fixEncoding($this->output, $output_encoding);     }   } ?>
<link rel="stylesheet" type="text/css" href="/eclipselink/resources/local.css" />
<div class="logoBanner"><a href="/eclipselink"><img src="/eclipselink/images/logo.png" /></a></div>
<div id="bigbuttons">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<div class="bigbuttonsAbout">
					<a href="/projects/project_summary.php?projectid=rt.eclipselink"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="/projects/project_summary.php?projectid=rt.eclipselink">Project Summary</a>, 
						<a href="/eclipselink/releases">Releases</a>, <br/>
						<a href="/eclipselink/team/">Committers</a> and more...
					</span>
				</div>
			</td>
			<td>
				<div class="bigbuttonsDocumentation">
					<a href="http://wiki.eclipse.org/EclipseLink/Documentation_Center"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="http://wiki.eclipse.org/EclipseLink/Documentation_Center">Doc Center</a>,
						<a href="/eclipselink/api/index.php"> Java Docs</a>,
						<a href="http://wiki.eclipse.org/EclipseLink/Examples"> Examples</a>,
						<a href="http://wiki.eclipse.org/EclipseLink/FAQ"> FAQ</a>, <br/>
						<a href="/eclipselink/releases/2.2.0.php">2.2.0 New and Noteworthy</a>
					</span>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="bigbuttonsCommunity">
					<a href="/eclipselink/community.php"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="http://wiki.eclipse.org/EclipseLink">Wiki</a>,
						<a href="/forums/index.php/f/111/"> Newsgroup</a>,<br/>
						<a href="http://dev.eclipse.org/mhonarc/lists/eclipselink-users/maillist.html">User Mailing List</a>
					</span>
				</div>
			</td>
			<td>
				<div class="bigbuttonsDownloads">
					<a href="/eclipselink/downloads/"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="/eclipselink/releases">Releases</a>,
						<a href="/eclipselink/downloads">Latest Release</a>,
						<a href="/eclipselink/downloads/milestones.php">Milestone Builds</a>, 
						<a href="/eclipselink/downloads/nightly.php">Nightly Builds</a>, and
						<a href="http://wiki.eclipse.org/EclipseLink/Maven">Maven</a>, 
					</span>
				</div>
			</td>
		</tr>
	</table>
</div>

<div id="midcolumn">
	
	<div class="homeitem3col">
		<h2>EclipseLink Project</h2>
		<p>
			The EclipseLink project delivers a comprehensive open-source Java persistence solution addressing relational, XML, and database web services.
		</p>
	</div>

 
	<div class="homeitem3col">
			<h3>Getting Started</h3>
			<p>
				Select a persistence service and learn more about how to
				get started developing with EclipseLink.
			</p>
		<table width="100%">
		<tr>
			<td width="33% align="center">
				<a href="jpa.php">
				<font size=+4>Object-Relational Mapping<br/>JPA</font><br/>
				<img src="/eclipselink/images/Eclipselink_jpa.png" border="0" /><br/>
				</a>
			</td>
			<td width="33% align="center">
				<a href="moxy.php">
				<font size=+4>Object-XML Binding<br/>JAXB and SDO</font><br/>
				<img src="/eclipselink/images/Eclipselink_moxy.png" border="0" /><br/>
				</a>
			</td>
			<td width="33% align="center">
				<a href="dbws.php">
				<font size=+4>Database Wed Services<br/>JAX-WS and JAX-RS</font><br/>
				<img src="/eclipselink/images/Eclipselink_dbws.png" border="0" /><br/>
				</a>
			</td>
		</tr>
		</table>
	</div>

	<div class="section">
			<h3>Learn More</h3>
	</div>
	
	<div class="section">
			<h3>Project News</h3>
			 <?PHP include "class.myatomparser.php"; 
			 
			 # where is the feed located? 
			 $url = "http://www.google.com/reader/public/atom/user%2F07143176758151169030%2Fbundle%2FEclipseLink"; 
			 
			 # create object to hold data and display output
			 $atom_parser = new myAtomParser($url); 
			 
			 $output = $atom_parser->getOutput(); # returns string containing HTML 
			 echo $output; ?>
	</div>

</div>

<div id="rightcolumn">

		<div class="sideitem">
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'eclipselink',
  interval: 6000,
  title: '',
  subject: 'Follow EclipseLink',
  width: 'auto',
  height: 300,
  theme: {
    shell: {
      background: '#8ec1da',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    toptweets: true,
    behavior: 'default'
  }
}).render().start();
</script>
		</div>
		
		<div class="sideitem">
			<h6>Blogs</h6>
			<ul>
			    <li><a href="http://eclipselink.blogspot.com">EclipseLink</a></li>
			    <li><a href="http://java-persistence.blogspot.com">Java Persistence</a></li>
			</ul>
		</div>

		<div class="sideitem">
			<h6>EclipseLink Powered</h6>
			<ul>
				<li><a href="http://glassfish.java.net/">GlassFish Server</a></li>
				<li><a href="http://www.oracle.com/technetwork/middleware/toplink/overview/index.html">Oracle TopLink</a></li>
				<li><a href="http://www.oracle.com/technetwork/middleware/weblogic/index.html">Oracle WebLogic Server</a></li>
			</ul>
		</div>

</div>

<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>