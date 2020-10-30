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

<title>October  30, 2007 Archives | FahMon News</title>

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
			<h2>October  30, 2007 Archives</h2>
			<div id="menu">
				<a href="../../../../index.php">Main</a> &#62;
				<a href="../../../../archives/index.php">Archives</a> &#62;
				<a href="../../../../archives/2007/index.php">2007</a> &#62;
				<a href="../../../../archives/2007/10/index.php">10</a> &#62;
				<br />
<a href="../../../../archives/2007/10/22/index.php">&#60;</a>
				30
<a href="../../../../archives/2007/10/31/index.php">&#62;</a>
			</div>
			<div class="archives">
				<div class="item">
	<a id="e2007-10-30T18_52_08.txt"></a>
	<h2 class="date">Tue Oct 30 18:52:08 CDT 2007</h2>
	<div class="blogbody">
		<h3 class="title">Ubuntu and PCLinuxOS packages for 2.3.1 up</h3>
		<div class="item-description">
			<p>I've just posted some precompiled binary pacakges for both PCLinuxOS, and Ubuntu (i386 and amd64).</p>
<p>The ubuntu packages were produced on 7.10 (gutsy) so they might not work on 7.04 (feisty). Judging by the wxgtk library used, I suspect they won't.</p>
<p>I did plan on releasing the SUSE and Fedora RPMs at the same time, but my SUSE installation is in the middle of a major system update, and my Fedora box appears to 
have dropped off the network for some reason, so I'm going to have to go and work out what it's doing before I can make any fc7 packages.</p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2007/10/30/index.php#e2007-10-30T18_52_08.txt">Permanent Link</a>
| Categories: <!-- Releases --><a href="../../../../archives/releases/index.php">Releases</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2007/10/30/index.php#e2007-10-30T18_52_08.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2007/10/30/index.php#e2007-10-30T18_52_08.txt', PHP_URL_PATH); 
 $blog_id='e2007-10-30T18_52_08.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
<div class="item">
	<a id="e2007-10-30T14_06_27.txt"></a>
	<h2 class="date">Tue Oct 30 14:06:27 CDT 2007</h2>
	<div class="blogbody">
		<h3 class="title">FahMon 2.3.1 Released</h3>
		<div class="item-description">
			<p>The latest and greatest version of FahMon has just been released, after several rounds of testing 
and breaking (thanks to all who tested various features). You can get to the most up-to-date version 
of FahMon by going to the download page, which now uses static links which automatically resolve to 
the latest version available.</p>
<p>The download page also has a link to the comprehensive changelog.</p>
<p>Things to look out for in this version are:</p>
<ul>
<li>Simplified how you add clients: Drag and drop the client folder into the client list, fill in the 
name, and away you go.
<li>Export to Web: A new "WebApp" module has been added which presents you with various ways of publishing 
the FahMon output to either webpages, or static text files. The Web Application option exports a fancy 
javascript powered webpage which mimics the FahMon interface.
<li>Update checking: FahMon can now check if a newer version is available online. This can be done 
automatically on startup, or manually from the FahMon menu 
</ul>
<p>If you find any bugs with this version, please use trac, the online project manager to report them. 
<a href="http://trac.fahmon.net.">http://trac.fahmon.net/</a></p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2007/10/30/index.php#e2007-10-30T14_06_27.txt">Permanent Link</a>
| Categories: <!-- Releases --><a href="../../../../archives/releases/index.php">Releases</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2007/10/30/index.php#e2007-10-30T14_06_27.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2007/10/30/index.php#e2007-10-30T14_06_27.txt', PHP_URL_PATH); 
 $blog_id='e2007-10-30T14_06_27.txt';
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
