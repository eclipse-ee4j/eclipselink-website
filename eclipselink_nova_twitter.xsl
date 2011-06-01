<?xml version="1.0" encoding="utf-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
	version="1.0">

	<xsl:template match="/sections">
		<div id="midcolumn">

			<xsl:apply-templates select="section[@class='title']"
				mode="title" />
			<xsl:apply-templates select="section[@class='main']"
				mode="main" />
			<xsl:apply-templates select="section[@class='none']"
				mode="none" />
		</div>

		<div id="rightcolumn">
			<xsl:apply-templates select="section[@class='sideitem']"
				mode="sideitem" />
		</div>

		<script type="text/javascript">
			var gaJsHost = (("https:" ==
			document.location.protocol) ?
			"https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost +
			"google-analytics.com/ga.js'
			type='text/javascript'%3E%3C/script%3E"));
</script>
		<script type="text/javascript">
			var pageTracker =
			_gat._getTracker("UA-1608008-2");
			pageTracker._initData();
			pageTracker._trackPageview();
</script>

	</xsl:template>

	<xsl:template match="section" mode="none">
		<xsl:if test="@anchor">
			<a>
				<xsl:attribute name="name">
						<xsl:value-of select="@anchor" />
					</xsl:attribute>
			</a>
		</xsl:if>
		<xsl:apply-templates select="description" mode="body" />
		<ul>
			<xsl:apply-templates />
		</ul>
	</xsl:template>

	<xsl:template match="section" mode="title">
		<div class="homeitem">
			<xsl:apply-templates select="description" mode="body" />
		</div>
	</xsl:template>

	<xsl:template match="section" mode="main">
		<div class="homeitem3col">
			<xsl:if test="@anchor">
				<a>
					<xsl:attribute name="name">
						<xsl:value-of select="@anchor" />
					</xsl:attribute>
				</a>
			</xsl:if>
			<h3>
				<xsl:value-of select="@name" />
			</h3>
			<xsl:apply-templates select="description" mode="body" />
			<ul>
				<xsl:apply-templates />
			</ul>
		</div>
	</xsl:template>

	<xsl:template match="section" mode="sideitem">

		<div class='sideitem' style="text-align:center">
			<xsl:apply-templates select="description" mode="body" />
			<xsl:apply-templates />
			<!-- 
			<p />
			<h6 style="text-align:center">
				<a href="http://wiki.eclipse.org/EclipseLink">
					Search Wiki
					</a>
				<br />

				<form action="http://www.google.com/cse" id="cse-search-box">
					<input type="hidden" name="cx" value="002128250543942842320:qffgtrd2s3k" />
					<input type="text" name="q" size="25" maxlength="2048" />
					<input type="image" name="sa" alt="Search"
						src="http://dev.eclipse.org/custom_icons/system-search-bw.png" />
				</form>
			</h6>
			 -->
			 <br/>
			 			<script src="http://widgets.twimg.com/j/1/widget.js"></script>
			<link href="http://widgets.twimg.com/j/1/widget.css" type="text/css" rel="stylesheet">
			<script>
				new TWTR.Widget({
				  search: 'eclipselink',
				  id: 'twtr-search-widget',
				  loop: true,
				  title: 'What\'s being said about...',
				  subject: 'EclipseLink',
				  width: 'auto',
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
			</link>
			<br/><font size=-1>Follow: <a href="http://twitter.com/doug_clarke">Doug Clarke</a> (co-lead)
			<br/>Follow: <a href="http://twitter.com/shaunmsmith">Shaun Smith</a></font>
			 
		</div>

	</xsl:template>

	<xsl:template match="section">
		<li>
			<xsl:choose>
				<xsl:when test="@name and @link">
					<a>
						<xsl:attribute name="href">
							<xsl:value-of select="@link" />
						</xsl:attribute>
						<xsl:value-of select="@name" />
					</a>
					<br />
				</xsl:when>
				<xsl:otherwise>
					<xsl:if test="@name">
						<div class="sectiontitle">
							<xsl:value-of select="@name" />
						</div>
					</xsl:if>
				</xsl:otherwise>
			</xsl:choose>
			<xsl:choose>
				<xsl:when test="@image">
					<span class="sectionimage">
						<img>
							<xsl:attribute name="src">
								<xsl:value-of select="@image" />
							</xsl:attribute>
						</img>
					</span>
					<xsl:apply-templates mode="body" />
					<div class="clearall" />
				</xsl:when>
				<xsl:otherwise>
					<xsl:apply-templates mode="body" />
				</xsl:otherwise>
			</xsl:choose>
		</li>
	</xsl:template>

	<xsl:template match="item">
		<xsl:choose>
			<xsl:when test="@link and @title">
				<li>
					<a>
						<xsl:attribute name="href">
							<xsl:value-of select="@link" />
						</xsl:attribute>
						<xsl:value-of select="@title" />
					</a>
					<xsl:if test="*|text()">
						<br />
						<xsl:apply-templates mode="body" />
					</xsl:if>
				</li>
			</xsl:when>
			<xsl:otherwise>
				<xsl:if test="@title">
					<div class="infoboxsubtitle">
						<xsl:value-of select="@title" />
					</div>
				</xsl:if>
				<xsl:if test="*|text()">
					<li>
						<xsl:apply-templates mode="body" />
					</li>
				</xsl:if>
			</xsl:otherwise>
		</xsl:choose>
	</xsl:template>

	<xsl:template match="description" mode="body">
		<p>
			<xsl:apply-templates mode="body" />
		</p>
	</xsl:template>

	<xsl:template match="*|@*|text()" mode="body">
		<xsl:copy>
			<xsl:apply-templates select="*|@*|text()" mode="body" />
		</xsl:copy>
	</xsl:template>

	<xsl:template match="*|@*|text()" />



</xsl:stylesheet>
