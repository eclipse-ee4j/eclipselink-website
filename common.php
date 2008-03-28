<?php

  $theme = "Phoenix";
	
  require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
  $projectInfo = new ProjectInfo("technology.eclipselink");
  $projectInfo->generate_common_nav( $Nav );

	function add2users() {
	   global $Nav;
		 $Nav->addCustomNav("Community", "/eclipselink/community.php", "", 2);
		 $Nav->addCustomNav("Team Blog", "http://eclipselink.blogspot.com", "", 2);
		 $Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/EclipseLink", "", 2);
		 $Nav->addCustomNav("Users Mailing List", "https://dev.eclipse.org/mailman/listinfo/eclipselink-users", "", 2);
		 $Nav->addCustomNav("User Guide (wiki)", "http://wiki.eclipse.org/EclipseLink/UserManual", "", 2);
	}   
	
	function add2contributors() {
	   global $Nav;
		 $Nav->addCustomNav("EclipseLink Team", "http://www.eclipse.org/eclipselink/team", "", 2);
	}
	
	$projectInfo->generate_common_nav( $Nav, "add2users", NULL, "add2contributors" );

	#*****************************************************************************
	#
	# common.php
	#
	# Author: 		Lawrence Mandel, IBM
	# Last updated:	2005-12-21
	#
	# Description: Contains common functions used on the WTP site.
	#
	#
	#****************************************************************************
 function &read_file($file_name) {
	$fp = fopen($file_name, "r");
	$file_contents = fread($fp, filesize($file_name));
	fclose($fp);
	return $file_contents;
}

?>
