<?php

# Set the theme for your project's web pages.
# See the Committer Tools "How Do I" for list of themes
# https://dev.eclipse.org/committers/
# Optional: defaults to system theme
# miasma
$theme = "Phoenix";
$App->AddExtraHtmlHeader("<link rel=\"stylesheet\" type=\"text/css\" href=\"/eclipselink/eclipselink-phoenix.css\">\n");

# Define your project-wide Nav bars here.
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
# these are optional
#
# We have folding menus.  Second level (anything with a ... below) has a _projectCommon.php that overrides this one.
# It is up to you to keep all these files in sync.
$Nav->addNavSeparator("EclipseLink", 	"/eclipselink/main.php");
$Nav->addCustomNav("Downloads",     "/eclipselink/main.php", "_self", 2);

?>
