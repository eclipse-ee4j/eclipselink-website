<?php

  $theme = "Nova";
	
	$Nav->setLinkList(null);
	$Nav->addCustomNav("About This Project", "/projects/project_summary.php?projectid=rt.eclipselink", "_self", 1);
	
	$Nav->addNavSeparator("EclipseLink", "/eclipselink/index-2.php");
	$Nav->addCustomNav("JPA", "/eclipselink/jpa.php", "_self", 2);
	$Nav->addCustomNav("MOXy", "/eclipselink/moxy.php", "_self", 2);
	$Nav->addCustomNav("SDO", "/eclipselink/sdo.php", "_self", 2);
	$Nav->addCustomNav("JPA", "/eclipselink/jpa.php", "_self", 2);
  
 	$Nav->addNavSeparator("Downloads", "/eclispelink/downloads/index.php");
	$Nav->addCustomNav("1.0.2", "/eclipselink/downloads/index.php", "_self", 2);
	$Nav->addCustomNav("1.1 Milestones", "/eclipselink/downloads/milestones.php", "_self", 2);
	$Nav->addCustomNav("Maven", "http://wiki.eclipse.org/EclipseLink/Maven", "_self", 2);
	
	$Nav->addNavSeparator("Community", "/eclipselink/community.php");
	$Nav->addCustomNav("Newsgroup", "/newsportal/thread.php?group=eclipse.rt.eclipselink", "_self", 2);
	$Nav->addCustomNav("Users Mailing List", "https://dev.eclipse.org/mailman/listinfo/eclipselink-users", "_self", 2);

	$Nav->addNavSeparator("Documentation", "http://wiki.eclipse.org/EclipseLink/UserManual");
	$Nav->addCustomNav("User Guide", "http://wiki.eclipse.org/EclipseLink/UserManual", "_self", 2);
	$Nav->addCustomNav("User Guide - JPA", "http://wiki.eclipse.org/EclipseLink/UserManual", "_self", 3);
	$Nav->addCustomNav("Search User Guide", "http://www.google.com/coop/cse?cx=016171230611334810008%3A8qajdsud9zq&hl=en", "_self", 2);
	$Nav->addCustomNav("API (JavaDocs)", "/eclipselink/api/latest/index.html", "_self", 2);
	$Nav->addCustomNav("EclipseLink Wiki", "http://wiki.eclipse.org/EclipseLink", "_self", 2);

	$Nav->addNavSeparator("Project", "http://wiki.eclipse.org/EclipseLink/UserManual");
	$Nav->addCustomNav("Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=eclipselink", "_self", 2);
	$Nav->addCustomNav("Road Map", "http://wiki.eclipse.org/EclipseLink/RoadMap", "_self", 2);
	$Nav->addCustomNav("News", "/eclipselink/news.php", "_self", 2);
	$Nav->addCustomNav("Team", "/eclipselink/team/", "_self", 2);

  
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
