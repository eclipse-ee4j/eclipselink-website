<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2006 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Doug Clarke (Oracle)- initial conversion to PHP using Nova
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseLink Home";
	$pageKeywords	= "Eclipse, EclipseLink, java persistence, jpa, jaxb, sdo";
	$pageAuthor		= "Doug Clarke";

	require_once ($root . '/eclipselink/common_nova.php');
	ob_start();
?>

	<div id="midcolumn">
			<h1>EclipseLink</h1>
			<p style="text-align:justify">
				The Eclipse Persistence Services Project (EclipseLink)
				delivers a comprehensive open-source Java persistence
				solution. EclipseLink focuses on standards with advanced
				features, performance and scalability for enterprise
				software developers across data sources, formats, and
				containers.
			</p>
	
	<div class='homeitem'>
		<h3>Getting Started</h3>
		<p>
				Select a persistence service and learn more about how to
				get started developing with EclipseLink.
			</p>
			<table width="100%">
				<tr>
					<td>
						<a href="/eclipselink/jpa.php">
							Object-Relational
						</a>
						using EclipseLink JPA
					</td>
				</tr>
				<tr>
					<td>
						<a href="/eclipselink/moxy.php">
							Object-XML Binding
						</a>
						using EclipseLink MOXy
					</td>
				</tr>
				<tr>
					<td>
						<a href="/eclipselink/sdo.php">
							Service Data Objects
						</a>
						using EclipseLink SDO
					</td>
				</tr>
				<tr>
					<td>
						<a href="/eclipselink/dbws.php">
							Web Services for RDBMS
						</a>
						using EclipseLink DBWS
					</td>
				</tr>
				<tr>
					<td>
						<a href="/eclipselink/eis.php">
							Non-Relational
						</a>
						using EclipseLink EIS
					</td>
				</tr>
			</table>
		</div>
		
		<div class='homeitem'>
			<h3>Learn More</h3>

			<li><a href="http://eclipse.dzone.com/articles/introducing-eclipselink">Introducing EclipseLink (Eclipse Zone)</a></li>
			<em>June 30, 2008</em>

			<li><a href="http://wiki.eclipse.org/EclipseLink/Presentations">Conference Presentations</a></li>
			<em>June 30, 2008</em>
		</div>

		<div class='homeitem'>
			<h3>Project News</h3>
			
			<li><a href="/eclipselink/downloads">EclipseLink 1.0.2 Released</a></li><em>Oct 29, 2008</em>
			<li><a href="/eclipselink/downloads"EclipseLink 1.0.1 Released</a></li><em>Sept 09, 2008</em>
			<li><a href="/eclipselink/news.php">News Archive</a></li>
		</div>

	</section>
		
	</div>
	
	<div id="rightcolumn">
		<div class='sideitem'>
		</div>
	
	</div> 
	
<?php
	$html = ob_get_contents();
	ob_end_clean();
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>