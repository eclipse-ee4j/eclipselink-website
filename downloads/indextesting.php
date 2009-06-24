<?php                                                                                                                                                                                                                                           require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");  $App    = new App();    $Nav    = new Nav();    $Menu   = new Menu();       include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
ini_set("error_reporing", E_ALL); ini_set("display_errors", "on");

$pageKeywords   = "Eclipse Persistence EclipseLink Download";
$pageAuthor     = "Doug Clarke based on work by Bob Fraser";

$root = $_SERVER['DOCUMENT_ROOT'];
require_once ($root . 'www.eclipse.org/eclipselink/common_nova.php');

# Generate the web page
// Load the XML source
$xml = DOMDocument::load('www.eclipse.org/eclipselink/downloads/indextesting.xml');

//Set the page title
$xpath = new DOMXPath($xml);
$titleNode = $xpath->query("/sections/attribute::title")->item(0);
$pageTitle = ($titleNode != null) ? $titleNode->nodeValue : "eclipse.org eclipselink download page";

// Load the XSL source
$xsl = DOMDocument::load($root . 'www.eclipse.org/eclipselink/eclipselink_nova_2_column.xsl');

// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules

$maincontent = $proc->transformToXML($xml);
$html = <<<EOHTML
$maincontent
EOHTML;
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
