<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageKeywords	= "EclipseLink Java Persistence JPA";
$pageAuthor		= "Shaun Smith, Doug Clarke based on work by Bob Fraser";

$root = $_SERVER['DOCUMENT_ROOT'];
require_once ($root . '/eclipselink/common_nova.php');

# Generate the web page
// Load the XML source
$xml = DOMDocument::load('index.xml');

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
$maincontent
		<div class="sideitem">
			<div align="left" id="twtr-search-widget"></div>
			<script src="http://widgets.twimg.com/j/1/widget.js"></script>
			<link href="http://widgets.twimg.com/j/1/widget.css" type="text/css" rel="stylesheet">
			<script>
				new TWTR.Widget({
				  search: 'eclipselink',
				  id: 'twtr-search-widget',
				  loop: true,
				  title: 'What\'s being said about...',
				  subject: 'EclipseLink',
				  width: 240,
				  height: 400,
				  theme: {
				    shell: {
				      background: '#002E62',
				      color: '#ffffff'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#444444',
				      links: '#002E62'
				    }
				  }
				}).render().start();
			</script>
			<br/><font size=-1>Follow: <a href="http://twitter.com/doug_clarke">Doug Clarke</a> (co-lead)
			<br/>Follow: <a href="http://twitter.com/shaunmsmith">Shaun Smith</a></font>
		</div>

EOHTML;
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
