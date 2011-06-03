<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageKeywords	= "";
$pageAuthor		= "Doug Clarke based on work by Bob Fraser";

$root = $_SERVER['DOCUMENT_ROOT'];
require_once ($root . '/eclipselink/common_nova.php');

# Generate the web page
// Load the XML source
$xml = DOMDocument::load('community.xml');

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
<div id="bigbuttons">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<div class="bigbuttonsAbout">
					<a href="/projects/project_summary.php?projectid=rt.eclipselink"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="/projects/project_summary.php?projectid=rt.eclipselink">Project Summary</a>, 
						<a href="/eclipselink/releases">Releases</a>, <br/>
						<a href="/eclipselink/team/">Committers</a> and more...
					</span>
				</div>
			</td>
			<td>
				<div class="bigbuttonsDocumentation">
					<a href="http://wiki.eclipse.org/EclipseLink/Documentation_Center"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="http://wiki.eclipse.org/EclipseLink/Documentation_Center">Doc Center</a>,
						<a href="/eclipselink/api/index.php"> Java Docs</a>,
						<a href="http://wiki.eclipse.org/EclipseLink/Examples"> Examples</a>,
						<a href="http://wiki.eclipse.org/EclipseLink/FAQ"> FAQ</a>, <br/>
						<a href="/eclipselink/releases/2.2.0.php">2.2.0 New and Noteworthy</a>
					</span>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="bigbuttonsCommunity">
					<a href="/eclipselink/community.php"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="http://wiki.eclipse.org/EclipseLink">Wiki</a>,
						<a href="/forums/index.php/f/111/"> Newsgroup</a>,<br/>
						<a href="http://dev.eclipse.org/mhonarc/lists/eclipselink-users/maillist.html">User Mailing List</a>
					</span>
				</div>
			</td>
			<td>
				<div class="bigbuttonsDownloads">
					<a href="/eclipselink/downloads/"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="/eclipselink/releases">Releases</a>,
						<a href="/eclipselink/downloads">Latest Release</a>,
						<a href="/eclipselink/downloads/milestones.php">Milestone Builds</a>, 
						<a href="/eclipselink/downloads/nightly.php">Nightly Builds</a>, and
						<a href="http://wiki.eclipse.org/EclipseLink/Maven">Maven</a>, 
					</span>
				</div>
			</td>
		</tr>
	</table>
</div>
$maincontent
EOHTML;
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
