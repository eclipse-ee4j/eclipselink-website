<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseLink Community";
	$pageKeywords	= "EclipseLink, Eclipse, Persistence";
	$pageAuthor		= "Doug Clarke";
		
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
			<div align="center">
				<img src="/eclipselink/images/eclipselink.jpg" border="0"/>
			</div>
		<div class="homeitem3col">
			<h3>Newsgroup</h3>
			<table border="0"> 
        		<tr>
        		<td valign="top">
        			<img border="0" src="/eclipselink/images/community.jpg">
        		</td>
		        <td>
			        The EclipseLink Newsgroup is the main forum for user questions and support.
			    </td> 
				</tr>
			</table>
			<ul>
				<li>
	                <a href="news://news.eclipse.org/eclipse.technology.eclipselink">
					News Reader Access</a>, for instructions see the <a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">Webmaster FAQ</a>
				</li>
				<li>
					<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.eclipselink">Web Access</a>,
					registration is <a href="http://www.eclipse.org/newsgroups/register.php">required</a>. 
				</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Mailing Lists</h3>
			<table border="0"> 
        		<tr>
        		<td valign="top">
        			<img border="0" src="/eclipselink/images/image-email.gif">
        		</td>
		        <td>
			       	Contributors should subscribe to the dev mailing list.
			    </td> 
				</tr>
			</table>
			<ul> 
				<!-- <li>
	                <a href="http://dev.eclipse.org/mailman/listinfo/eclipselink-announce">
					eclipselink-announce@eclipse.org:</a> major releases and events
					<a href="http://dev.eclipse.org/mhonarc/lists/eclipselink-announce/maillist.html">[archive]</a>
				</li> -->
				<li>
	                <a href="http://dev.eclipse.org/mailman/listinfo/eclipselink-users">
					eclipselink-users@eclipse.org:</a> User questions and discussions
					<a href="http://dev.eclipse.org/mhonarc/lists/eclipselink-users/maillist.html">[archive]</a>
				</li>
				<li>
	                <a href="http://dev.eclipse.org/mailman/listinfo/eclipselink-dev">
					eclipselink-dev@eclipse.org:</a> developer discussions and planning
					<a href="http://dev.eclipse.org/mhonarc/lists/eclipselink-dev/maillist.html">[archive]</a>
				</li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Bugzilla</h3>
			<table border="0"> 
	        	<tr>
	        		<td valign="top">
	        			<a href="/eclipselink/bugs"><img border="0" src="/eclipselink/images/bug-report.png"></a>
	        		</td>
			        <td>
				        <p>The preferred way of reporting and discussing defects and enhancement requests is via <a href="/eclipselink/bugs">Bug Reports</a>.
				    </td> 
				</tr>
			</table>
		</div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
