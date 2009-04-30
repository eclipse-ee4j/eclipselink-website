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
  
	$Nav->addNavSeparator("Documentation", "http://wiki.eclipse.org/EclipseLink/UserGuide");
	$Nav->addCustomNav("FAQ", "http://wiki.eclipse.org/EclipseLink/FAQ", "_self", 2);
	$Nav->addCustomNav("User Guide", "http://wiki.eclipse.org/EclipseLink/UserManual", "_self", 2);
	$Nav->addCustomNav("Search User Guide", "http://www.google.com/coop/cse?cx=016171230611334810008%3A8qajdsud9zq&hl=en", "_self", 2);
	$Nav->addCustomNav("API", "/eclipselink/api/index.php", "_self", 2);
	$Nav->addCustomNav("API (latest)", "/eclipselink/api/latest/index.html", "_self", 2);
	$Nav->addCustomNav("EclipseLink Wiki", "http://wiki.eclipse.org/EclipseLink", "_self", 2);
	$Nav->addCustomNav("Search Wiki", "http://www.google.com/coop/cse?cx=002128250543942842320%3Aqffgtrd2s3k&hl=en", "_self", 2);

 	$Nav->addNavSeparator("Downloads", "/eclipselink/downloads/index.php");
	$Nav->addCustomNav("1.1.0", "/eclipselink/downloads/index.php#1.1.0", "_self", 2);
	$Nav->addCustomNav("Previous Releases", "/eclipselink/downloads/previous_releases.php", "_self", 2);
	$Nav->addCustomNav("Milestones", "/eclipselink/downloads/milestones.php", "_self", 2);
	$Nav->addCustomNav("Maven", "http://wiki.eclipse.org/EclipseLink/Maven", "_self", 2);	

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
