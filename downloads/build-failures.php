<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
if($_GET['debug']) {
    ini_set("error_reporing", E_ALL); ini_set("display_errors", "on");
}
// This page should remain unlinked and unsearchable
$pageKeywords	= "eric"; 
$pageAuthor		= "Eric Gwin based upon work by Doug Clarke (download.php)";

$root = $_SERVER['DOCUMENT_ROOT'];
require_once ($root . '/eclipselink/common.php');

# Generate the web page
// Load the XML source
$xml = DOMDocument::load('http://download.eclipse.org/rt/eclipselink/build-failures.xml');

//Set the page title
$xpath = new DOMXPath($xml);
$titleNode = $xpath->query("/sections/attribute::title")->item(0);
$pageTitle = ($titleNode != null) ? $titleNode->nodeValue : "eclipse.org eclipselink build failure debugging page";

// Load the XSL source
$xsl = DOMDocument::load($root . '/eclipselink/eclipselinkpage.xsl');

// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules

$maincontent = $proc->transformToXML($xml);
$html = <<<EOHTML
$maincontent
EOHTML;
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>