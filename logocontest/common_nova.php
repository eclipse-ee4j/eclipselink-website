<?php

  $theme = "Nova";
	
	$Nav->setLinkList(null);
	$Nav->addCustomNav("About This Project", "/projects/project_summary.php?projectid=rt.eclipselink", "_self", 1);
	
	$Nav->addNavSeparator("EclipseLink", "/eclipselink/index.php");
  
 	$Nav->addNavSeparator("Downloads", "/eclispelink/downloads/index.php");
	$Nav->addCustomNav("1.1", "/eclipselink/downloads/index.php#1.1", "_self", 2);
	$Nav->addCustomNav("1.0.2", "/eclipselink/downloads/index.php#1.0.2", "_self", 2);
	$Nav->addCustomNav("Milestones", "/eclipselink/downloads/milestones.php", "_self", 2);
	$Nav->addCustomNav("Maven", "http://wiki.eclipse.org/EclipseLink/Maven", "_self", 2);
	
	$Nav->addNavSeparator("Community", "/eclipselink/community.php");
	$Nav->addCustomNav("News", "/eclipselink/news.php", "_self", 2);
	$Nav->addCustomNav("Newsgroup", "/newsportal/thread.php?group=eclipse.rt.eclipselink", "_self", 2);
	$Nav->addCustomNav("Users Mailing List", "http://dev.eclipse.org/mhonarc/lists/eclipselink-users/maillist.html", "_self", 2);
	$Nav->addCustomNav("Team", "/eclipselink/team/", "_self", 2);

	$Nav->addNavSeparator("Documentation", "http://wiki.eclipse.org/EclipseLink/UserGuide");
	$Nav->addCustomNav("FAQ", "http://wiki.eclipse.org/EclipseLink/FAQ", "_self", 2);
	$Nav->addCustomNav("User Guide", "http://wiki.eclipse.org/EclipseLink/UserManual", "_self", 2);
	$Nav->addCustomNav("Search User Guide", "http://www.google.com/coop/cse?cx=016171230611334810008%3A8qajdsud9zq&hl=en", "_self", 2);
	$Nav->addCustomNav("API (JavaDocs)", "/eclipselink/api/latest/index.html", "_self", 2);
	$Nav->addCustomNav("EclipseLink Wiki", "http://wiki.eclipse.org/EclipseLink", "_self", 2);

	$Nav->addNavSeparator("Project");
	$Nav->addCustomNav("Plan", "/projects/project-plan.php?projectid=rt.eclipselink", "_self", 2);
	$Nav->addCustomNav("Timeline", "/projects/timeline/index.php?projectid=rt.eclipselink", "_self", 2);
	$Nav->addCustomNav("Releases", "http://wiki.eclipse.org/EclipseLink/Release", "_self", 2);

  
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
