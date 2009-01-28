<?php

  $theme = "Nova";
	
  require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
  $projectInfo = new ProjectInfo("rt.eclipselink");
  
	$Nav->addNavSeparator("EclipseLink", "/eclipselink/");
	$Nav->addCustomNav("JPA", "/eclipselink/jpa.php", "_self", 3);
	$Nav->addCustomNav("MOXy", "/eclipselink/moxy.php", "_self", 3);
	$Nav->addCustomNav("SDO", "/eclipselink/sdo.php", "_self", 3);
	$Nav->addCustomNav("JPA", "/eclipselink/jpa.php", "_self", 3);
  
  
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
