<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
if($_GET['debug']) {
    ini_set("error_reporing", E_ALL); ini_set("display_errors", "on");
}
$pageKeywords	= "Eclipse Persistence EclipseLink Download";
$pageAuthor		= "Doug Clarke based on work by Bob Fraser";

$root = $_SERVER['DOCUMENT_ROOT'];


# Generate the web page
// Load the XML source
$xml = DOMDocument::load('http://download.eclipse.org/rt/eclipselink/nightly.xml');

//Set the page title
$xpath = new DOMXPath($xml);
$titleNode = $xpath->query("/sections/attribute::title")->item(0);
$pageTitle = ($titleNode != null) ? $titleNode->nodeValue : "eclipse.org eclipselink download page";

// Load the XSL source
$xsl = DOMDocument::load($root . '/eclipselink/eclipselink_nova.xsl');

// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules

$maincontent = $proc->transformToXML($xml);
$html = <<<EOHTML
$maincontent
EOHTML;
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
