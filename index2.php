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
<div id="content-header">
	<a id="content-logo" href="/eclipselink">
		<img src="/eclipselink/images/logo.png"/>
	</a>
</div>
<div id="bigbuttons">
	<h3>Primary Links</h3>
	<ul>
		<li><a id="buttonDownload" 		href="/eclipselink/downloads" 			title="Download">Downloads</a></li>
		<li><a id="buttonDocumentation" href="http://wiki.eclipse.org/EclipseLink/Documentation_Center" 	title="Documentation">Tutorials, Examples, Documentation</a></li>
		<li><a id="buttonSupport" 		href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.rt.eclipselink" 			title="Support">Forum</a></li>
		<li><a id="buttonInvolved" 		href="/gemini/gemini/getting_involved.php" 	title="Getting Involved">SVN, Workspace Setup, Wiki, Committers</a></li>
	</ul>
</div>

<div id="midcolumn">
	
	<div class="section">
		<h2>EclipseLink Project</h2>
		<p>
			The EclipseLink project delivers a comprehensive open-source Java persistence solution addressing relational, XML, and database web services.
		</p>
	</div>

 
	<div class="section">
			<h3>Getting Started</h3>
			<p>
				Select a persistence service and learn more about how to
				get started developing with EclipseLink.
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

	<div class="section">
			<h3>Learn More</h3>
	</div>
	
	<div class="section">
			<h3>Project News</h3>
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
			<br/><font size=-1>Follow: <a href="http://twitter.com/doug_clarke">Doug Clarke</a>
			</font>
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