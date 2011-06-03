<?php

/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: frostc
 *    
 *******************************************************************************/

	# Set the theme for your project's web pages.
	# See http://eclipse.org/phoenix/
	$theme = "Nova";

	# Define keywords, author and title here, or in each PHP page specifically
	$pageKeywords		= "eclipselink, persistence, jpa, jaxb";
	$pageAuthor		= "Doug Clarke";
	$pageTitle 		= "EclipseLink";

	
	# To define additional CSS or other pre-body headers
	$App->AddExtraHtmlHeader('<link media="screen" rel="stylesheet" type="text/css" href="/eclipselink/resources/local.css"/>');
	
	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;
	
	# If you have Google Analytics code, use it here
	$App->SetGoogleAnalyticsTrackingCode("UA-1608008-2");
?>