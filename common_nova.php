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
	
	$Nav->addNavSeparator("EclipseLink Project", "/eclipselink/index.html");
	$Nav->addCustomNav("Plan", "/projects/project-plan.php?projectid=rt.eclipselink", "_self", 2);

 	$Nav->addNavSeparator("Downloads", "/eclipselink/downloads/index.php");
	$Nav->addCustomNav("2.6.0", "/eclipselink/downloads/index.php#2.4", "_self", 2);
	$Nav->addCustomNav("Previous", "/eclipselink/downloads/previous_releases.php", "_self", 2);

	$Nav->addNavSeparator("Documentation", "/eclipselink/documentation/");
	$Nav->addCustomNav("Doc Center", "/eclipselink/documentation/", "_self", 2);
	$Nav->addCustomNav("FAQ", "http://wiki.eclipse.org/EclipseLink/FAQ", "_self", 2);
	$Nav->addCustomNav("API (JavaDocs)", "/eclipselink/api/index.php", "_self", 2);
	$Nav->addCustomNav("EclipseLink Wiki", "http://wiki.eclipse.org/EclipseLink", "_self", 2);

	$Nav->addNavSeparator("Community", "/eclipselink/community.php");
	$Nav->addCustomNav("User Forum", "/newsportal/thread.php?group=eclipse.rt.eclipselink", "_self", 2);
	$Nav->addCustomNav("Users Mailing List", "http://dev.eclipse.org/mhonarc/lists/eclipselink-users/maillist.html", "_self", 2);

  
 function &read_file($file_name) {
	$fp = fopen($file_name, "r");
	$file_contents = fread($fp, filesize($file_name));
	fclose($fp);
	return $file_contents;
}

?>
