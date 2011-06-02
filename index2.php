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
 * Contributors: Doug Clarke
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseLink - Home";
	$pageKeywords	= "Eclipse, EclipseRT, EclipseLink, Persistence, Home";
	$pageAuthor		= "Doug Clarke";
			
	ob_start();
?>
	<div id="midcolumn">
		<div class="logo"><img src="/eclipselink/images/logo.jpg" alt="EclipseLink"/></div>
		<p>
			The EclipseLink project delivers a comprehensive open-source Java persistence solution addressing relational, XML, and database web services.  
		</p>
		<table width="100%">
		<tr>
			<td width="33% align="center">
				<a href="jpa.php">
				<img src="/eclipselink/images/Eclipselink_jpa.png" border="0" />
				</a>
			</td>
			<td width="33% align="center">
				<a href="moxy.php">
				<img src="/eclipselink/images/Eclipselink_moxy.png" border="0" />
				</a>
			</td>
			<td width="33% align="center">
				<a href="dbws.php">
				<img src="/eclipselink/images/Eclipselink_dbws.png" border="0" />
				</a>
			</td>
		</tr>
		</table>
		
		<h3>Learn More</h3><ul><li><a href="http://eclipse.dzone.com/articles/introducing-eclipselink">Introducing EclipseLink (Eclipse Zone)</a><br>
			<em>June 30, 2008</em>
		</li></ul></div><div class="homeitem3col"><h3>Project News</h3><ul><li><a href="http://www.eclipse.org/eclipselink/downloads">EclipseLink 2.1.3 Released</a><br>

			<em>April 15, 2011</em>
		</li><li><div class="sectiontitle">EclipseLink 2.2.0 Released</div>
			<em>Feb 22, 2011</em>
		</li><li><div class="sectiontitle">EclipseLink 2.1.2 Released</div>
			<em>Dec 13, 2010</em>
		</li><li><div class="sectiontitle">EclipseLink 2.1.1 Released</div>

			<em>Aug 26, 2010</em>
		</li><li><div class="sectiontitle">EclipseLink 2.1.0 Released</div>
			<em>June 23, 2010</em>
		</li><li><div class="sectiontitle">EclipseLink 2.0.2 Released</div>
			<em>April 21, 2010</em>
		</li><li><div class="sectiontitle">EclipseLink 2.0.1 Released</div>

			<em>Feb 17, 2010</em>
		</li><li><a href="http://blog.springsource.com/2009/12/16/spring-framework-3-0-goes-ga/">Spring 3.0 goes GA with EclipseLink 2.0</a><br>
			<em>Dec 12, 2009</em>
		</li><li><div class="sectiontitle">EclipseLink 2.0.0 Released</div>
			<em>Dec 10, 2009</em>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/EclipseLink">Wiki</a></li>
			</ul>
		</div>

		<div class="sideitem">
			<h6>Blogs</h6>
			<ul>
			    <li><a href="http://eclipselink.blogspot.com">EclipseLink</a></li>
			    <li><a href="http://java-persistence.blogspot.com">Java Persistence</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Presentations</h6>
			<ul>
				<li><a href="http://live.eclipse.org/node/937">Virgo Webinar, 31 August 2010</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Virgo Powered</h6>
			<ul>
				<li><a href="http://github.com/PouzinSociety/tinos">Oracle TopLink</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<div align="left" id="twtr-search-widget"></div>
			<script src="http://widgets.twimg.com/j/1/widget.js"></script>
			<link href="http://widgets.twimg.com/j/1/widget.css" type="text/css" rel="stylesheet">
			<script>
				new TWTR.Widget({
				  search: 'eclipselink',
				  id: 'twtr-search-widget',
				  loop: true,
				  title: 'What\'s being said about...',
				  subject: 'EclipseLink',
				  width: 'auto',
				  height: 400,
				  theme: {
				    shell: {
				      background: '#002E62',
				      color: '#ffffff'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#444444',
				      links: '#002E62'
				    }
				  }
				}).render().start();
			</script>
			<br/><font size=-1>Follow: <a href="http://twitter.com/doug_clarke">Doug Clarke</a>
			</font>
		</div>
	</div>

	
<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>