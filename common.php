<?php

  $theme = "Phoenix";
	
  require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
  $projectInfo = new ProjectInfo("technology.maya");
  $projectInfo->generate_common_nav( $Nav );

	function add2users() {
	   global $Nav;
		 $Nav->addCustomNav("Maya Wiki", "http://wiki.eclipse.org/index.php/Maya", "", 2);
		 $Nav->addCustomNav("Downloads", "/maya/downloads.php", "", 2);
	}   
	
	function add2contributors() {
	   global $Nav;
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
