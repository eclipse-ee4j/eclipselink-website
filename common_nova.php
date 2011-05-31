<?php
	#*****************************************************************************
	#
	# common_nova.php
	#
	# Author: 		Doug Clarke & Peter Krogh, Oracle
	# Last updated:	2009-03-11
	#
	# Description: Contains common functions and left navigation for EclipseLink site using the Nova template.
	#
	#
	#****************************************************************************

  $theme = "Nova";
	
	$Nav->setLinkList(null);
	
	$Nav->addNavSeparator("EclipseLink Project", "/eclipselink/index.php");
	$Nav->addCustomNav("Project Summary", "/projects/project_summary.php?projectid=rt.eclipselink", "_self", 2);
	$Nav->addCustomNav("JPA", "/eclipselink/jpa.php", "_self", 2);
	$Nav->addCustomNav("MOXy", "/eclipselink/moxy.php", "_self", 2);
	$Nav->addCustomNav("SDO", "/eclipselink/sdo.php", "_self", 2);
	$Nav->addCustomNav("DBWS", "/eclipselink/dbws.php", "_self", 2);
  

 	$Nav->addNavSeparator("Releases", "/eclipselink/releases/index.php");
	$Nav->addCustomNav("2.2.0", "/eclipselink/releases/2.2.0.php", "_self", 2);
	$Nav->addCustomNav("All", "/eclipselink/releases/index.php", "_self", 2);

 	$Nav->addNavSeparator("Downloads", "/eclipselink/downloads/index.php");
	$Nav->addCustomNav("2.2.0", "/eclipselink/downloads/index.php#2.2.0", "_self", 2);
	$Nav->addCustomNav("Previous", "/eclipselink/downloads/previous_releases.php", "_self", 2);
	$Nav->addCustomNav("Milestones", "/eclipselink/downloads/milestones.php", "_self", 2);
	$Nav->addCustomNav("Maven", "http://wiki.eclipse.org/EclipseLink/Maven", "_self", 2);	

	$Nav->addNavSeparator("Documentation", "http://wiki.eclipse.org/EclipseLink/Documentation_Center");
	$Nav->addCustomNav("Doc Center", "http://wiki.eclipse.org/EclipseLink/Documentation_Center", "_self", 2);
	$Nav->addCustomNav("FAQ", "http://wiki.eclipse.org/EclipseLink/FAQ", "_self", 2);
	$Nav->addCustomNav("API (JavaDocs)", "/eclipselink/api/index.php", "_self", 2);
	$Nav->addCustomNav("EclipseLink Wiki", "http://wiki.eclipse.org/EclipseLink", "_self", 2);

	$Nav->addNavSeparator("Community", "/eclipselink/community.php");
	$Nav->addCustomNav("News", "/eclipselink/news.php", "_self", 2);
	$Nav->addCustomNav("Newsgroup", "/newsportal/thread.php?group=eclipse.rt.eclipselink", "_self", 2);
	$Nav->addCustomNav("Users Mailing List", "http://dev.eclipse.org/mhonarc/lists/eclipselink-users/maillist.html", "_self", 2);
	$Nav->addCustomNav("Team", "/eclipselink/team/", "_self", 2);


	$Nav->addNavSeparator("Project");
	$Nav->addCustomNav("Plan", "/projects/project-plan.php?projectid=rt.eclipselink", "_self", 2);
	$Nav->addCustomNav("Timeline", "/projects/timeline/index.php?projectid=rt.eclipselink", "_self", 2);
	$Nav->addCustomNav("Releases", "http://wiki.eclipse.org/EclipseLink/Release", "_self", 2);

  
 function &read_file($file_name) {
	$fp = fopen($file_name, "r");
	$file_contents = fread($fp, filesize($file_name));
	fclose($fp);
	return $file_contents;
}

?>
