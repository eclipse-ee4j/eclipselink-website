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
 * Contributors: mkeith, frostc, dclarke, rsapir
 *    
 *******************************************************************************/

	$localVersion = false;
	
	# Define these here, or in _projectCommon.php for site-wide values
	$pageKeywords	= "eclipse, project, eclipselink, persistence";
	$pageAuthor		= "Doug Clarke";
	$pageTitle 		= "EclipseLink 2.4 Documentation";
	
	ob_start();
?>
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
						<a href="/eclipselink/documentation/2.4/index.php">Doc Center</a>,
						<a href="/eclipselink/api/2.4/index.html"> Java Docs</a>,
						<a href="http://wiki.eclipse.org/EclipseLink/Examples"> Examples</a>,
						<a href="http://wiki.eclipse.org/EclipseLink/FAQ"> FAQ</a>, <br/>
						<a href="/eclipselink/releases/2.4.php">2.4 New and Noteworthy</a>
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
		<h2>EclipseLink 2.4 Documentation</h2>
			<ul>
				<li><a href="http://www.eclipse.org/eclipselink/releases/2.4.php">Release Notes</a></li>
				<li><a href="http://wiki.eclipse.org/EclipseLink/Installing_and_Configuring_EclipseLink">Installation and Configuration</a></li>
				<li><a href="http://www.eclipse.org/eclipselink/api/2.4/index.html">Java Docs</a></li>
				<li><a href="2.4/jpa/extensions/toc.htm">JPA Extensions Reference</a></li>
			</ul>
	</div>

 
	<div class="section">
			<h3>Guides</h3>
			<ul>
				<li><a href="http://wiki.eclipse.org/EclipseLink/UserGuide/JPA">EclipseLink JPA</a></li>
				<li><a href="2.4/jpa/extensions/toc.htm">EclipseLink JPA Extensions</a></li>

				<li><a href="http://wiki.eclipse.org/EclipseLink/UserGuide/MOXy">EclipseLink MOXy</a></li>

				<li><a href="http://wiki.eclipse.org/EclipseLink/UserGuide/JPA/Advanced_JPA_Development/NoSQL">EclipseLink NoSQL</a></li>

				<li><a href="http://wiki.eclipse.org/Category:SDO">EclipseLink SDO</a></li>

				<li><a href="http://wiki.eclipse.org/Category:DBWS">EclipseLink DBWS</a></li>
			</ul>
	</div>


	<div class="section">
			<h3>Documentation Searches</h3>
			<p>Use this search engine to easily search <strong>all</strong> EclipseLink content hosted on eclipse.org. You can use the refinement tabs to narrow your search scope.</p>
			  <div id="elsearch" align="left">
				<div id="cse" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en'});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
      '016171230611334810008:ob2bbia9swa', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.setAutoComplete(true);
    customSearchControl.draw('cse', options);
  }, true);
</script>
<link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" />
				</div>
			</div>
</div>

<div id="rightcolumn">

		<div class="sideitem">
			<h6>EclipseLink Search</h6>
			<p>Use this search engine to easily find EclipseLink content (doc, examples, Javadoc, and more!).</p>

<div id="cse-search-form" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en', style : google.loader.themes.SHINY});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
      '016171230611334810008:ob2bbia9swa', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.setAutoComplete(true);
    options.enableSearchboxOnly("http://www.google.com/cse?cx=016171230611334810008:ob2bbia9swa");
    customSearchControl.draw('cse-search-form', options);
  }, true);
</script>

			
		</div>



		<div class="sideitem">
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'eclipselink',
  interval: 6000,
  title: 'What is being said about...',
  subject: 'EclipseLink',
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
			    <li><a href="http://onpersistence.blogspot.com">On Persistence</a></li>
			    <li><a href="http://bdoughan.blogspot.com">Java XML Binding</a></li>
			</ul>
		</div>

</div>

<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>