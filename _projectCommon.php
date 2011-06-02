<?php

/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	# Set the theme for your project's web pages.
	# See http://eclipse.org/phoenix/
	$theme = "Nova";
	

	# Define your project-wide Navigation here
	# This appears on the left of the page if you define a left nav
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	
	# If you want to override the eclipse.org navigation, uncomment below.
	# $Nav->setLinkList(array());
	
	# Break the navigation into sections
	$Nav->addNavSeparator("EclipseLink Home", 	"/eclipselink" "_self", 3);
	$Nav->addCustomNav("About EclipseLink", "http://www.eclipse.org/projects/project_summary.php?projectid=rt.eclipseilnk",    	"_self", 3);

	$Nav->addNavSeparator("Releases", "/eclipselink/releases", "_self", 3);
	$Nav->addCustomNav("2.2.0", "/eclipselink/releases/2.2.0.php", "_self", 3);
	$Nav->addCustomNav("Downloads", "/eclipselink/downloads", "_self", 3);

	$Nav->addCustomNav("Documentation", "http://wiki.eclipse.org/EclipseLink/Documentation_Center", "_self", 3);
	$Nav->addCustomNav("Doc Center (wiki)", "http://wiki.eclipse.org/EclipseLink/Documentation_Center", "_self", 3);
	$Nav->addCustomNav("Java Docs", "/eclipselink/api/latest", "_self", 3);
	
	
	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;
	
	# If you have Google Analytics code, use it here
	$App->SetGoogleAnalyticsTrackingCode("UA-1608008-2");
?>