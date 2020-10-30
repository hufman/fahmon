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

<title>January  26, 2008 Archives | FahMon News</title>

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
			<h2>January  26, 2008 Archives</h2>
			<div id="menu">
				<a href="../../../../index.php">Main</a> &#62;
				<a href="../../../../archives/index.php">Archives</a> &#62;
				<a href="../../../../archives/2008/index.php">2008</a> &#62;
				<a href="../../../../archives/2008/01/index.php">01</a> &#62;
				<br />
<a href="../../../../archives/2008/01/25/index.php">&#60;</a>
				26
<a href="../../../../archives/2008/01/31/index.php">&#62;</a>
			</div>
			<div class="archives">
				<div class="item">
	<a id="e2008-01-26T17_29_56.txt"></a>
	<h2 class="date">Sat Jan 26 17:29:56 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">FahMon-2.3.2beta2 ready for testing</h3>
		<div class="item-description">
			<p>This is the second unsupported beta for FahMon 2.3.2 to test a number of new bug fixes.</p>
<p>The main bug fixed in this beta is the crash bug when project data is missing. A number of bugs related 
to the web output translations have also been fixed, but the WebApp output is still incompatible with IE7 
at this time.</p>
<p>There have been two reports of a bug relating to the manual timezone setting but I cannot replicate 
the bug so it needs to be tested more thoroughly.<br />The bug reports state that the manual timezone 
setting is not restored across restarts of FahMon, and that while the setting does not affect the 
effective PPD or ETA calculations resulting in incorrect information being displayed.</p>
<p>To reliably test this version please make sure that you trash prefs.dat beforehand (or install the 
beta to a separate location), and as always report bugs using trac: <a 
href="http://trac.fahmon.net/">http://trac.fahmon.net</a>.</p>
<b>Download:</b>
<a href="http://fahmon.net/downloads/testing/FahMon-2.3.2beta2.zip">Windows</a>
<a href="http://fahmon.net/downloads/testing/FahMon-2.3.2beta2.tar.bz2">Linux/Source</a>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2008/01/26/index.php#e2008-01-26T17_29_56.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../../archives/development/index.php">Development</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2008/01/26/index.php#e2008-01-26T17_29_56.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/01/26/index.php#e2008-01-26T17_29_56.txt', PHP_URL_PATH); 
 $blog_id='e2008-01-26T17_29_56.txt';
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
