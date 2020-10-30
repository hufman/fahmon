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

<title>February  16, 2008 Archives | FahMon News</title>

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
			<h2>February  16, 2008 Archives</h2>
			<div id="menu">
				<a href="../../../../index.php">Main</a> &#62;
				<a href="../../../../archives/index.php">Archives</a> &#62;
				<a href="../../../../archives/2008/index.php">2008</a> &#62;
				<a href="../../../../archives/2008/02/index.php">02</a> &#62;
				<br />
<a href="../../../../archives/2008/02/11/index.php">&#60;</a>
				16
<a href="../../../../archives/2008/04/11/index.php">&#62;</a>
			</div>
			<div class="archives">
				<div class="item">
	<a id="e2008-02-16T13_00_04.txt"></a>
	<h2 class="date">Sat Feb 16 13:00:04 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">Important info for users running 2.3.2a on Windows</h3>
		<div class="item-description">
			<p>It has come to my attention that the system tray icon restore behaviour is still broken in this 
release, and may in fact actually be worse than previous versions.<br />I believe this is actually due 
to a broken compile, as the code added did work during testing. Unfortunately I cannot release a 
recompiled build until early next week as I have to create a fresh Virtual Machine of XP and the 
FahMon build environment owing to my current VM now being broken beyond all usefulness.</p>
<p>If you do experience significant problems with the current build of 2.3.2a, switch back to 2.3.2 
until I can recompile 2.3.2a correctly again.</p>
Download: <a href="/downloads/FahMon_2.3.2.zip">2.3.2 Zip file</a>&nbsp;|&nbsp;<a 
href="/downloads/FahMon-2.3.2-Installer.exe">2.3.2 Installer</a>
<p>Please note: This issue does <i>not</i> affect Linux or OS X users.</p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2008/02/16/index.php#e2008-02-16T13_00_04.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../../archives/development/index.php">Development</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2008/02/16/index.php#e2008-02-16T13_00_04.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/02/16/index.php#e2008-02-16T13_00_04.txt', PHP_URL_PATH); 
 $blog_id='e2008-02-16T13_00_04.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
<div class="item">
	<a id="e2008-02-16T07_37_10.txt"></a>
	<h2 class="date">Sat Feb 16 07:37:10 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">FahMon 2.3.2a Released. Now with OS X Support!</h3>
		<div class="item-description">
			<p>FahMon 2.3.2a is now available for download. See the download page for details on how to get it.</p>
<p>For a comprehensive list of changes please view the changelog which is linked to from the home page 
and the download page.</p>
<p>What's new in this release:</p>
<ul>
<li>The endian-swap bug has been squashed so you can now monitor PPC Macs from Windows again.
<li>Several annoying Windows bugs have been squashed, so FahMon now restores it's frame state from the 
system tray and taskbar correctly.
<li><b>FahMon now runs on Mac OS X!</b>
</ul>
<p>My thanks to several members of Team Mac OS X who helped test and debug the OS X verison.</p>
<p>Several translation updates were missed for this version, so if you notice missing translations 
whilst using FahMon and feel like updating them, send them along to me and I'll incorporate them into 
the builds on the website.</p>
<p>As always if you find any bugs in FahMon please report them using <a href="http://trac.fahmon.net/">
trac.</a></p>
<p>Now some eye-candy:</p>
<img src='/news/images/osx1.png' />&nbsp;<img src='/news/images/osx2.png' />
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2008/02/16/index.php#e2008-02-16T07_37_10.txt">Permanent Link</a>
| Categories: <!-- Releases --><a href="../../../../archives/releases/index.php">Releases</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2008/02/16/index.php#e2008-02-16T07_37_10.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/02/16/index.php#e2008-02-16T07_37_10.txt', PHP_URL_PATH); 
 $blog_id='e2008-02-16T07_37_10.txt';
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
