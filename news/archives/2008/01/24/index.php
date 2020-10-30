<?php
 if (isset($rem)) { 
     setcookie ("blogKo_name", $comm_name,time()+1209600); 
     setcookie ("blogKo_mail", $comm_e_mail,time()+1209600); 
     setcookie ("blogKo_www", $comm_website,time()+1209600); 
     } 
 if (!isset($button)) { 
     $comm_name = $_COOKIE["blogKo_name"]; 
     $comm_e_mail = $_COOKIE["blogKo_mail"]; 
     $comm_website = $_COOKIE["blogKo_www"]; 
     }
     session_start();
?>
<?php
echo("<?xml ");
echo("version=\"1.0\" encoding=\"utf-8\"?>");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="application/php; charset=utf-8" />
<meta name="generator" content="NanoBlogger 3.3" />
<meta name="robots" content="all" />
<meta name="revisit-after" content="31 days" />

<title>January  24, 2008 Archives | FahMon News</title>

<link rel="stylesheet" href="../../../../styles/nb_fahmon.css" type="text/css" media="all" />
<link rel="stylesheet" href="../../../../styles/print.css" type="text/css" media="print" />
<link rel="stylesheet" href="../../../../blogkomm/blogkomm.css" type="text/css" />
<link rel="shortcut icon" href="../../../../images/favicon.ico" />
	<!--[if lt IE 7]>
	<style>
	.TopNavigation ul
{
	margin-left:100px;
}
	</style>
	<![endif]-->
<link rel="alternate" type="application/atom+xml"
title="Atom 1.0"
href="../../../../atom.xml"
/>
<link rel="alternate" type="application/rss+xml"
title="RSS 2.0"
href="../../../../rss.xml"
/>

</head>

<body>
<div id="BodyWrapper">
<div id="MainContainer">
<div class="TopNavigation">
<ul>
<li><a href="http://fahmon.net">Home</a></li>
<li><a href="../../../..//../../download.html">Download</a></li>
<li><a href="../../../..//../../screenshots.html">Screenshots</a></li>
<li><a href="../../../..//../../about.html">About</a></li>
<li class="Selected"><a href="../../../..//../../news/">News</a></li>
<li><a href="http://trac.fahmon.net">Support &amp; Development</a></li>
</ul>
</div>
<br />
<div class="box_full">
<div id="main">
<div id="container" class="clearfix">
	<div id="header" class="clearfix">
		<h1><a href="../../../../index.php" accesskey="1">FahMon News</a></h1>
		<span class="description">News and development of FahMon</span>
	</div>
	<div id="altcontent">
		<div id="wrap">
			<a id="top"></a>
			<h2>January  24, 2008 Archives</h2>
			<div id="menu">
				<a href="../../../../index.php">Main</a> &#62;
				<a href="../../../../archives/index.php">Archives</a> &#62;
				<a href="../../../../archives/2008/index.php">2008</a> &#62;
				<a href="../../../../archives/2008/01/index.php">01</a> &#62;
				<br />
<a href="../../../../archives/2008/01/19/index.php">&#60;</a>
				24
<a href="../../../../archives/2008/01/25/index.php">&#62;</a>
			</div>
			<div class="archives">
				<div class="item">
	<a id="e2008-01-24T07_54_51.txt"></a>
	<h2 class="date">Thu Jan 24 07:54:51 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">FahMon-2.3.2beta ready for translating</h3>
		<div class="item-description">
			This is just to trigger the translations RSS feed. For the full release info see: <a 
href="http://fahmon.net/news/archives/2008/01/24/index.html#e2008-01-24T07_51_17.txt">FahMon 2.3.2beta 
ready for testing</a>.
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2008/01/24/index.php#e2008-01-24T07_54_51.txt">Permanent Link</a>
| Categories: <!-- Translations --><a href="../../../../archives/translations/index.php">Translations</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2008/01/24/index.php#e2008-01-24T07_54_51.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/01/24/index.php#e2008-01-24T07_54_51.txt', PHP_URL_PATH); 
 $blog_id='e2008-01-24T07_54_51.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
<div class="item">
	<a id="e2008-01-24T07_51_17.txt"></a>
	<h2 class="date">Thu Jan 24 07:51:17 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">FahMon 2.3.2beta ready for testing</h3>
		<div class="item-description">
			<p>This is an unsupported beta release of FahMon to check a number of bug fixes to allow me to close 
various support tickets.</p>
<p>The specific behaviour that needs testing is as follows:</p>
<ul>
<li>Do 50 frame DGromacs WUs now report PPD and ETA correctly?
<li>Does reloading client information still cause high CPU usage in Windows?
<li>Does FahMon still enter a state that uses 100% CPU time when left running for several days on Windows?
<li>Do client locations still get corrupted when monitoring large (> ~30) numbers of clients (Windows or 
Linux)?
</ul>
<p>If you test this release please comment on the above bugs using the bug tracking system.</p>
<p>For the full list of changes so far please refer top the changelog for this release, and also check the 
tickets that have been reported for this release <a 
href="http://trac.fahmon.net/query?status=new&status=assigned&status=reopened&status=closed&group=status&milestone=2.3.2&order=priority">here</a></p>
<p>One bug that has not yet been fixed is ticket #77 where the web output is displayed incorrectly in IE 
7. This will be fixed in the official release.</p>
<br />
<p>This release also represents the an opportunity for translators to update the translation files ready 
for the official release. This time there are only very minor changes to the files required.<br/>
Any budding web designers may want to try out the templating system in this release too</p>
<b>Download:</b>
<a href="http://fahmon.net/downloads/testing/FahMon-2.3.2beta.zip">Windows</a>
<a href="http://fahmon.net/downloads/testing/FahMon-2.3.2beta.tar.bz2">Linux/Source</a>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2008/01/24/index.php#e2008-01-24T07_51_17.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../../archives/development/index.php">Development</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2008/01/24/index.php#e2008-01-24T07_51_17.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/01/24/index.php#e2008-01-24T07_51_17.txt', PHP_URL_PATH); 
 $blog_id='e2008-01-24T07_51_17.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
			</div>
		</div>
	</div>
</div>
<div id="footer" style="clear:both;">
	<div class="menu">
		<a href="#top">&#47;&#92;</a><br />
	</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
