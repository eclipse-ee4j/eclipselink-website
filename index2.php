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
		<div class="logo">
			<img src="/eclipselink/images/logo.jpg" alt="EclipseLink"/>
		</div>
		<div class="homeitem">
		<p>
			The EclipseLink project delivers a comprehensive open-source Java persistence solution addressing relational, XML, and database web services.  
		</p>
		</div>
		
		<div class="homeitem3col">
			<h3>Getting Started</h3>
			<p>
				Select a persistence service and learn more about how to
				get
				started developing with EclipseLink.
			</p>
		<table width="100%">
		<tr>
			<td width="33% style="text-align:center">
				<a href="jpa.php">
				<img src="/eclipselink/images/Eclipselink_jpa.png" border="0" /><br/>
				<h5>Object-Relational</h5>
				</a>
			</td>
			<td width="33% style="text-align:center">
				<a href="moxy.php">
				<img src="/eclipselink/images/Eclipselink_moxy.png" border="0" /><br/>
				<h5>Object-XML</h5>
				</a>
			</td>
			<td width="33% style="text-align:center">
				<a href="dbws.php">
				<img src="/eclipselink/images/Eclipselink_dbws.png" border="0" /><br/>
				<h5>DB Web Services</h5>
				</a>
			</td>
		</tr>
		</table>
		</div>

	<div class="homeitem3col">
		<h3>Learn More</h3>
		<ul>
			<li><a href="http://eclipse.dzone.com/articles/introducing-eclipselink">Introducing EclipseLink (Eclipse Zone)</a> - 
			<i>June 30, 2008</i></li>
		</ul>

	</div>

	<div class="homeitem3col">
		<h3>Project News</h3>
		
		<ul>
		<li><a href="http://www.eclipse.org/eclipselink/downloads">EclipseLink 2.1.3 Released</a> - 
			<i>April 15, 2011</i></li>
		</ul>

	</div>
		
			
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
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
			<br/><font size=-1>Follow: <a href="http://twitter.com/doug_clarke">Doug Clarke</a>
			</font>
		</div>
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
	
<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>