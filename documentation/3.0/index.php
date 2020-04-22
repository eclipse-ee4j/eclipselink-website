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
	$pageKeywords	= "eclipse, project, eclipselink, persistence, jpa, jaxb, moxy, ox, or, j2eee";
	$pageAuthor		= "Rick Sapir";
	$pageTitle 		= "EclipseLink 3.0 Documentation";
	
	ob_start();
?>
<div class="logoBanner"><a href="/eclipselink"><img src="/eclipselink/images/logo.png" /></a></div>
<div id="midcolumn">
	
	<div class="homeitem3col">
		<h2>EclipseLink 3.0.x Documentation</h2>
			<ul>
				<li><a href="https://www.eclipse.org/eclipselink/releases/3.0.php">Release Notes</a></li>
				<li><a href="solutions/install.htm">Installation and Configuration</a></li>
				<li> <a href="http://www.eclipse.org/eclipselink/api/3.0/index.html"> Java Docs</a></li>
			</ul>
	</div>
 
	<div class="section">
			<h3>Guides</h3>
			<ul>
				<li><a href="concepts/toc.htm">Understanding EclipseLink (Concepts Guide)</a></li>
				
				<li><a href="solutions/toc.htm">EclipseLink Solutions Guide</a></li>
				
				<li><a href="jpa/extensions/toc.htm">EclipseLink JPA Extensions Reference</a></li>

				<li><a href="moxy/toc.htm">Developing JAXB Applications Using EclipseLink MOXy</a></li>

				<li><a href="concepts/nosql.htm">EclipseLink NoSQL</a></li>

				<li><a href="http://www.eclipse.org/eclipselink/moxy.php">EclipseLink SDO</a></li>

				<li><a href="dbws/toc.htm">Developing Persistence Architectures Using EclipseLink Database Web Services</a></li>
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

<div id="rightcolumn">

		<div class="sideitem">
			<h6>Blogs</h6>
			<ul>
			    <li><a href="http://eclipselink.blogspot.com">EclipseLink</a></li>
			    <li><a href="http://java-persistence.blogspot.com">Java Persistence</a></li>
			    <li><a href="http://onpersistence.blogspot.com">On Persistence</a></li>
			    <li><a href="http://bdoughan.blogspot.com">Java XML Binding</a></li>
			    <li><a href="http://javarelated.com/">Javarelated.com</a></li>
			</ul>
		</div>

</div>

<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>
