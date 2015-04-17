<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageKeywords	= "EclipseLink 2.4 release";
$pageAuthor		= "Peter Krogh, Shaun Smith, Doug Clarke based on work by Bob Fraser";

$root = $_SERVER['DOCUMENT_ROOT'];

# Generate the web page
// Load the XML source
$xml = DOMDocument::load('2.4.xml');

//Set the page title
$xpath = new DOMXPath($xml);
$titleNode = $xpath->query("/sections/attribute::title")->item(0);
$pageTitle = ($titleNode != null) ? $titleNode->nodeValue : "eclipse.org eclipselink page";

// Load the XSL source
$xsl = DOMDocument::load($root . '/eclipselink/eclipselink_nova.xsl');

// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules

$maincontent = $proc->transformToXML($xml);
$html = <<<EOHTML
<div class="logoBanner"><a href="/eclipselink"><img src="/eclipselink/images/logo.png" /></a></div>
$maincontent
EOHTML;
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
