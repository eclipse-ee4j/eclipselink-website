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
 * Contributors: mkeith, frostc
 *    
 *******************************************************************************/

	$localVersion = false;
	
	# Define these here, or in _projectCommon.php for site-wide values
	$pageKeywords	= "eclipse, project, gemini, modules, osgi, enterprise";
	$pageAuthor		= "Mike Keith";
	$pageTitle 		= "Gemini Home";
	
	ob_start();
?>
<div id="content-header">
	<a id="content-logo" href="/gemini">
		<img src="/eclipselink/images/logo.jpg"/>
	</a>
</div>
<div id="bigbuttons">
	<h3>Primary Links</h3>
	<ul>
		<li><a id="buttonDownload" 		href="/gemini/gemini/download.php" 			title="Download">Module Downloads</a></li>
		<li><a id="buttonDocumentation" href="/gemini/gemini/documentation.php" 	title="Documentation">Tutorials, Examples, Reference Documentation</a></li>
		<li><a id="buttonSupport" 		href="/gemini/gemini/support.php" 			title="Support">Forum</a></li>
		<li><a id="buttonInvolved" 		href="/gemini/gemini/getting_involved.php" 	title="Getting Involved">SVN, Workspace Setup, Wiki, Committers</a></li>
	</ul>
</div>

<div id="midcolumn">
	<h2>Gemini - Enterprise Modules Project</h2>
	<h4>Making the world thinner... one module at a time</h4>
	
	<div class="section">
		<p class="left">
			The Enterprise Modules Project (Gemini) is all about modular implementations 
			of Java EE technology. It provides the ability for users to consume individual modules as needed,
			without requiring unnecessary additional runtime pieces.
		</p>
		<p class="right">
			The modules currently run on the OSGi framework and leverage the OSGi bundle model
			of packaging and lifecycle activation.
		</p>
	</div>

	<div class="section" id="screencast">
		<object width="640" height="10"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /></object>
	</div>

<!-- 
<div id="screencast">
<object width="640" height="480"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id=8260921&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=DBD7EF&amp;fullscreen=1" /><embed src="http://vimeo.com/moogaloop.swf?clip_id=8260921&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=DBD7EF&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="480"></embed></object>
</div>
-->

<!-- 
<h3>...and yet powerful</h3>
-->
 
	<div id="modularity" class="section">
		<h4>Modularity</h4>
		<p>Each of the sub-projects is packaged as a separate and standalone module.</p>
	</div>

	<div id="independence" class="section">
		<h4>Independence</h4>
		<p>Most of the subproject modules are downloadable and executable independently from the others.</p>
	</div>

	<div id="free" class="section">
		<h4>Free and Easy</h4>
		<p>Like everything else at Eclipse, getting started is as easy as downloading and trying it out!</p>
	</div>

	<div id="more" class="section">
		<h4>Find out more</h4>
		<ul>
			<li><a href="http://wiki.eclipse.org/Gemini">Gemini Wiki</a></li>
			<li><a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153">Gemini Forum</a></li>  
			<li><a href="https://dev.eclipse.org/mailman/listinfo/gemini-dev">Developer Mailing List</a></li>
			<li><a href="/projects/project_summary.php?projectid=rt.gemini">About This Project</a></li>
		</ul>
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