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
	$pageAuthor		= "Rick Sapir";
	$pageTitle 		= "EclipseLink Documentation Center";
	
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
						<a href="https://projects.eclipse.org/projects/rt.eclipselink/who">Committers</a> and more...
					</span>
				</div>
			</td>
			<td>
				<div class="bigbuttonsDocumentation">
					<a href="eclipselink/documentation/index.php"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="/eclipselink/api/2.5/index.html"> Java Docs</a>,
						<a href="http://wiki.eclipse.org/EclipseLink/Examples"> Examples</a>,
						<a href="http://wiki.eclipse.org/EclipseLink/FAQ"> FAQ</a>, <br/>
						<a href="/eclipselink/releases/2.5.php">2.5 New and Noteworthy</a>
					</span>
				</div>
			</td>
			<td>
				<div class="bigbuttonsCommunity">
					<a href="/eclipselink/community.php"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="http://wiki.eclipse.org/EclipseLink">Wiki</a>,
						<a href="/forums/index.php/f/111/">User Forum</a>,<br/>
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
		<h2>EclipseLink Documentation Center</h2>
			<ul>
				<li><form action="../"><label for="ReleaseNotes">Release Notes</label>
<select name="ReleaseNotes">
    <option disabled="disabled" value="http://www.eclipse.org/eclipselink/releases/2.6.php">2.6</option>
    <option selected="selected" value="http://www.eclipse.org/eclipselink/releases/2.5.php">2.5 (Current)</option>
    <option value="http://www.eclipse.org/eclipselink/releases/">Older releases</option>
</select>
<input type="button" onclick="window.open(this.form.ReleaseNotes.options[this.form.ReleaseNotes.selectedIndex].value,'_top')" value="Go">
</form>
				</li>
				<li><form action="../"><label for="JavaDocs">Java Docs</label>
<select name="JavaDocs">
    <option disabled="disabled" value="http://www.eclipse.org/eclipselink/api/2.6/index.html">2.6</option>
    <option selected="selected" value="http://www.eclipse.org/eclipselink/api/2.5/index.html">2.5 (Current)</option>
    <option value="http://www.eclipse.org/eclipselink/api/">Older releases</option>
</select>
<input type="button" onclick="window.open(this.form.JavaDocs.options[this.form.JavaDocs.selectedIndex].value,'_top')" value="Go">
</form>
				</li>
				<li><a href="http://wiki.eclipse.org/EclipseLink/XSDs" title="XSDs">XML Schemas (XSDs)</a></li>
				<li>
<form action="../"><label for="solutions">Installation and Configuration</label>
  <select name="Installation">
    <option value="http://www.eclipse.org/eclipselink/documentation/2.6/solutions/install.htm" disabled="disabled"> 2.6 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.5/solutions/install.htm" selected="selected"> 2.5 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.4/solutions/install.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.Installation.options[this.form.Installation.selectedIndex].value,'_top')" value="Go">
</form>
				</li>
			</ul>
	</div>

 
	<div class="section">
			<h3>Guides</h3>
			<ul>
				<li>
<form action="../"><label for="Concepts">Understanding EclipseLink (Concepts Guide)</label>
  <select name="Concepts">
    <option value="http://www.eclipse.org/eclipselink/documentation/2.6/concepts/toc.htm" disabled="disabled"> 2.6 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.5/concepts/toc.htm" selected="selected"> 2.5 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.4/concepts/toc.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.Concepts.options[this.form.Concepts.selectedIndex].value,'_top')" value="Go">
</form>
 				</li>
				
				<li>
<form action="../"><label for="solutions">EclipseLink Solutions Guide</label>
  <select name="Solutions">
    <option value="http://www.eclipse.org/eclipselink/documentation/2.6/solutions/toc.htm" disabled="disabled"> 2.6 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.5/solutions/toc.htm" selected="selected"> 2.5 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.4/solutions/toc.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.Solutions.options[this.form.Solutions.selectedIndex].value,'_top')" value="Go">
</form>
				</li>
				
				<li>
<form action="../"><label for="solutions">EclipseLink JPA Extensions Reference</label>
  <select name="JPA">
    <option value="http://www.eclipse.org/eclipselink/documentation/2.6/jpa/extensions/toc.htm" disabled="disabled"> 2.6 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.5/jpa/extensions/toc.htm" selected="selected"> 2.5 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.4/jpa/extensions/toc.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.JPA.options[this.form.JPA.selectedIndex].value,'_top')" value="Go">
</form>
				</li>

				<li>
<form action="../"><label for="solutions">Developing JAXB Applications Using EclipseLink MOXy</label>
  <select name="MOXy">
    <option value="http://www.eclipse.org/eclipselink/documentation/2.6/moxy/toc.htm" disabled="disabled"> 2.6 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.5/moxy/toc.htm" selected="selected"> 2.5 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.4/moxy/toc.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.MOXy.options[this.form.MOXy.selectedIndex].value,'_top')" value="Go">
</form>
				</li>

				<li>
<form action="../"><label for="solutions">EclipseLink NoSQL</label>
  <select name="nosql">
    <option value="2.6/concepts/nosql.htm" disabled="disabled"> 2.6 </option>
    <option value="2.5/concepts/nosql.htm" selected="selected"> 2.5 </option>
    <option value="2.4/jpa/extensions/a_nosql.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.nosql.options[this.form.nosql.selectedIndex].value,'_top')" value="Go">
</form>
				</li>

				<li>
<form action="../"><label for="solutions">EclipseLink SDO</label>
  <select name="sdo">
    <option value="http://www.eclipse.org/eclipselink/moxy.php" disabled="disabled"> 2.6 </option>
    <option value="http://www.eclipse.org/eclipselink/moxy.php" selected="selected"> 2.5 </option>
    <option value="http://wiki.eclipse.org/Category:SDO"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.sdo.options[this.form.sdo.selectedIndex].value,'_top')" value="Go">
</form>				
				</li>

				<li>
<form action="../"><label for="solutions">Developing Persistence Architectures Using EclipseLink Database Web Services</label>
  <select name="dbws">
    <option value="http://www.eclipse.org/eclipselink/documentation/2.6/dbws/toc.htm" disabled="disabled"> 2.6 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.5/dbws/toc.htm" selected="selected"> 2.5 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.4/dbws/toc.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.dbws.options[this.form.dbws.selectedIndex].value,'_top')" value="Go">
</form>
				</li>
			</ul>
	</div>


	<div class="section">
			<h3 id="elsearches">EclispeLink Documentation Searches</h3>
<table border="0" cellspacing="0" cellpadding="5" width="100%">
  <tr>
    <td>
		<p><strong>JPA</strong> documentation:</p>
		<form action="http://www.google.com/cse" id="cse-search-box">
			<div>
				<input type="hidden" name="cx" value="016171230611334810008:y5kxq4rqd8s" />
				<input type="text" name="q" />
				<input type="submit" name="sa" value="Search" />
			</div>
		</form>
		<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=en"></script></td>
	</td>
    <td>
		<p><strong>MOXy&nbsp;(JAXB)</strong> documentation:</p>
        <form action="http://www.google.com/cse" id="cse-search-box">
			<div>
				<input type="hidden" name="cx" value="016171230611334810008:brtjnxzsfyg" />
				<input type="text" name="q" />
				<input type="submit" name="sa" value="Search" />
			</div>
		</form>
		<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=en"></script>
	</td>
    <td><p><strong>DBWS</strong> documentation:</p>
		<form action="http://www.google.com/cse" id="cse-search-box">
			<div>
				<input type="hidden" name="cx" value="016171230611334810008:nnjaqkoh3mq" />
				<input type="text" name="q" />
				<input type="submit" name="sa" value="Search" />
			</div>
		</form>
		<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=en"></script></td>
		<link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" />
	</td>
  </tr>
  <tr><td>&nbsp;</td></tr>
  <tr>
    <td>
		<p><strong>Concepts</strong> guide:</p>
		<form action="http://www.google.com/cse" id="cse-search-box">
			<div>
				<input type="hidden" name="cx" value="016171230611334810008:mdbgdwjv8zu" />
				<input type="text" name="q" />
				<input type="submit" name="sa" value="Search" />
			</div>
		</form>
		<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=en"></script></td>
	</td>
    <td>
		<p><strong>Solutions</strong> guide:</p>
        <form action="http://www.google.com/cse" id="cse-search-box">
			<div>
				<input type="hidden" name="cx" value="016171230611334810008:enkkfjmsqju" />
				<input type="text" name="q" />
				<input type="submit" name="sa" value="Search" />
			</div>
		</form>
		<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=en"></script>
	</td>
    <td>
	</td>
  </tr>
  <tr><td>&nbsp;</td></tr>
  <tr>
    <td><p><strong>All</strong> Eclipselink documentation:</p>
		<form action="http://www.google.com/cse" id="cse-search-box">
			<div>
				<input type="hidden" name="cx" value="016171230611334810008:ob2bbia9swa" />
				<input type="text" name="q" />
				<input type="submit" name="sa" value="Search" />
			</div>
		</form>
		<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=en"></script></td>
		<link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" />
	</td>
  </tr>
</table>
			
	</div>
</div>
<div id="rightcolumn">

		<div class="sideitem">
			<h6>EclipseLink Search</h6>

<div id="cse-search-form" style="width: 240px;">Loading</div>
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
