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

<title>February  11, 2008 Archives | FahMon News</title>

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
<div style="position:absolute; right:0; z-index:2"><img src="http://static.delicious.com/img/delicious.small.gif" height="10" width="10" alt="Delicious" />
<a href="http://delicious.com/save" onclick="window.open('http://delicious.com/save?v=5&amp;noui&amp;jump=close&amp;url='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent(document.title), 'delicious','toolbar=no,width=550,height=550'); return false;"> Bookmark on Delicious</a></div>
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
			<h2>February  11, 2008 Archives</h2>
			<div id="menu">
				<a href="../../../../index.php">Main</a> &#62;
				<a href="../../../../archives/index.php">Archives</a> &#62;
				<a href="../../../../archives/2008/index.php">2008</a> &#62;
				<a href="../../../../archives/2008/02/index.php">02</a> &#62;
				<br />
<a href="../../../../archives/2008/02/08/index.php">&#60;</a>
				11
<a href="../../../../archives/2008/02/16/index.php">&#62;</a>
			</div>
			<div class="archives">
				<div class="item">
	<a id="e2008-02-11T12_06_33.txt"></a>
	<h2 class="date">Mon Feb 11 12:06:33 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">Comments system added</h3>
		<div class="item-description">
			<p>I'm trying out a comment system for the news section of the site, so feel free to use it if you 
will.<br />The captcha can sometimes appear completely unreadable, so I recommend you refresh the page 
until it is readable and <i>then</i> start writing your comments.<br />Hopefully I can get that fixed.</p>
<p>The software powering the comments is a nifty set of php scripts called <a 
href="http://blogkomm.com/">blogkomm</a> which I've integrated into nanoblogger.</p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2008/02/11/index.php#e2008-02-11T12_06_33.txt">Permanent Link</a>
| Categories: <!-- Website --><a href="../../../../archives/website/index.php">Website</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2008/02/11/index.php#e2008-02-11T12_06_33.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/02/11/index.php#e2008-02-11T12_06_33.txt', PHP_URL_PATH); 
 $blog_id='e2008-02-11T12_06_33.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
<div class="item">
	<a id="e2008-02-11T12_00_45.txt"></a>
	<h2 class="date">Mon Feb 11 12:00:45 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">New/updated translations available</h3>
		<div class="item-description">
			<p>The download page has been updated with links to the v2.3.2 translations for Portuguese (pt_PT) and 
German (de_DE). Thanks to Mark Gerber for the German translation.</p>
<p>Installation for Windows is simple, but for Linux it can be a bit more tricky. Read the wiki page 
linked on the download page for precise instructions.</p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2008/02/11/index.php#e2008-02-11T12_00_45.txt">Permanent Link</a>
| Categories: <!-- Translations --><a href="../../../../archives/translations/index.php">Translations</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2008/02/11/index.php#e2008-02-11T12_00_45.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/02/11/index.php#e2008-02-11T12_00_45.txt', PHP_URL_PATH); 
 $blog_id='e2008-02-11T12_00_45.txt';
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
