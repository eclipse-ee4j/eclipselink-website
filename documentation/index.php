<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());

/*******************************************************************************
 * Copyright (c) 2009-2023 Eclipse Foundation and others.
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
<div id="midcolumn">
	
	<div class="homeitem3col">
		<h2>EclipseLink Documentation Center</h2>
			<ul>
				<li><form action="../"><label for="ReleaseNotes">Release Notes</label>
<select name="ReleaseNotes">
    <option selected="selected" value="http://www.eclipse.org/eclipselink/releases/4.0.php">4.0</option>
    <option value="http://www.eclipse.org/eclipselink/releases/3.0.php">3.0</option>
    <option value="http://www.eclipse.org/eclipselink/releases/2.7.php">2.7</option>
    <option value="http://www.eclipse.org/eclipselink/releases/2.6.php">2.6</option>
    <option value="http://www.eclipse.org/eclipselink/releases/2.5.php">2.5</option>
    <option value="http://www.eclipse.org/eclipselink/releases/2.4.php">2.4</option>
</select>
<input type="button" onclick="window.open(this.form.ReleaseNotes.options[this.form.ReleaseNotes.selectedIndex].value,'_top')" value="Go">
</form>
				</li>
				<li><form action="../"><label for="JavaDocs">Java Docs</label>
<select name="JavaDocs">
    <option selected="selected" value="http://www.eclipse.org/eclipselink/api/4.0/index.html">4.0</option>
    <option value="http://www.eclipse.org/eclipselink/api/3.0/index.html">3.0</option>
    <option value="http://www.eclipse.org/eclipselink/api/2.7/index.html">2.7</option>
    <option value="http://www.eclipse.org/eclipselink/api/2.6/index.html">2.6</option>
    <option value="http://www.eclipse.org/eclipselink/api/2.5/index.html">2.5</option>
    <option value="http://www.eclipse.org/eclipselink/api/2.4/index.html">2.4</option>
</select>
<input type="button" onclick="window.open(this.form.JavaDocs.options[this.form.JavaDocs.selectedIndex].value,'_top')" value="Go">
</form>
				</li>
				<li>
<form action="../"><label for="solutions">Installation and Configuration</label>
  <select name="Installation">
    <option value="http://www.eclipse.org/eclipselink/documentation/4.0/solutions/install.htm" selected="selected"> 4.0 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/3.0/solutions/install.htm"> 3.0 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.7/solutions/install.htm"> 2.7 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.6/solutions/install.htm"> 2.6 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.5/solutions/install.htm"> 2.5 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.4/solutions/install.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.Installation.options[this.form.Installation.selectedIndex].value,'_top')" value="Go">
</form>
				</li>
				<li><a href="http://wiki.eclipse.org/EclipseLink/XSDs" title="XSDs">XML Schemas (XSDs)</a></li>
			</ul>
	</div>

 
	<div class="section">
			<h3>Guides</h3>
			<ul>
				<li>
<form action="../"><label for="Concepts">Understanding EclipseLink (Concepts Guide)</label>
  <select name="Concepts">
    <option value="http://www.eclipse.org/eclipselink/documentation/4.0/concepts/concepts.html" selected="selected"> 4.0 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/3.0/concepts/toc.htm"> 3.0 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.7/concepts/toc.htm"> 2.7 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.6/concepts/toc.htm"> 2.6 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.5/concepts/toc.htm"> 2.5 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.4/concepts/toc.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.Concepts.options[this.form.Concepts.selectedIndex].value,'_top')" value="Go">
</form>
 				</li>
				
				<li>
<form action="../"><label for="solutions">EclipseLink Solutions Guide</label>
  <select name="Solutions">
    <option value="http://www.eclipse.org/eclipselink/documentation/4.0/solutions/solutions.html" selected="selected"> 4.0 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/3.0/solutions/toc.htm"> 3.0 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.7/solutions/toc.htm"> 2.7 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.6/solutions/toc.htm"> 2.6 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.5/solutions/toc.htm"> 2.5 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.4/solutions/toc.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.Solutions.options[this.form.Solutions.selectedIndex].value,'_top')" value="Go">
</form>
				</li>
				
				<li>
<form action="../"><label for="solutions">EclipseLink JPA Extensions Reference</label>
  <select name="JPA">
    <option value="http://www.eclipse.org/eclipselink/documentation/4.0/jpa/extensions/jpa-extensions.html" selected="selected"> 4.0 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/3.0/jpa/extensions/toc.htm"> 3.0 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.7/jpa/extensions/toc.htm"> 2.7 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.6/jpa/extensions/toc.htm"> 2.6 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.5/jpa/extensions/toc.htm"> 2.5 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.4/jpa/extensions/toc.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.JPA.options[this.form.JPA.selectedIndex].value,'_top')" value="Go">
</form>
				</li>

				<li>
<form action="../"><label for="solutions">Developing JAXB Applications Using EclipseLink MOXy</label>
  <select name="MOXy">
    <option value="http://www.eclipse.org/eclipselink/documentation/4.0/moxy/moxy.html" selected="selected"> 4.0 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/3.0/moxy/toc.htm"> 3.0 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.7/moxy/toc.htm"> 2.7 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.6/moxy/toc.htm"> 2.6 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.5/moxy/toc.htm"> 2.5 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.4/moxy/toc.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.MOXy.options[this.form.MOXy.selectedIndex].value,'_top')" value="Go">
</form>
				</li>

				<li>
<form action="../"><label for="solutions">EclipseLink NoSQL</label>
  <select name="nosql">
    <option value="4.0/concepts/concepts.html#understanding-non-relational-data-sources" selected="selected"> 4.0 </option>
    <option value="3.0/concepts/nosql.htm"> 3.0 </option>
    <option value="2.7/concepts/nosql.htm"> 2.7 </option>
    <option value="2.6/concepts/nosql.htm"> 2.6 </option>
    <option value="2.5/concepts/nosql.htm"> 2.5 </option>
    <option value="2.4/jpa/extensions/a_nosql.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.nosql.options[this.form.nosql.selectedIndex].value,'_top')" value="Go">
</form>
				</li>

				<li>
<form action="../"><label for="solutions">Developing Persistence Architectures Using EclipseLink Database Web Services</label>
  <select name="dbws">
    <option value="http://www.eclipse.org/eclipselink/documentation/4.0/dbws/dbws.html" selected="selected"> 4.0 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/3.0/dbws/toc.htm"> 3.0 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.7/dbws/toc.htm"> 2.7 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.6/dbws/toc.htm"> 2.6 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.5/dbws/toc.htm"> 2.5 </option>
    <option value="http://www.eclipse.org/eclipselink/documentation/2.4/dbws/toc.htm"> 2.4 </option>
  </select>
  <input type="button" onclick="window.open(this.form.dbws.options[this.form.dbws.selectedIndex].value,'_top')" value="Go">
</form>
				</li>
			</ul>
	</div>


	<div class="section">
			<h3 id="elsearches">EclispeLink Documentation Search</h3>
<table border="0" cellspacing="0" cellpadding="5" width="100%">
  <tr>
    <td><p>Search <strong>all</strong> Eclipselink documentation:</p>
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

<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>
