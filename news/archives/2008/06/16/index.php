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

<title>June  16, 2008 Archives | FahMon News</title>

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
			<h2>June  16, 2008 Archives</h2>
			<div id="menu">
				<a href="../../../../index.php">Main</a> &#62;
				<a href="../../../../archives/index.php">Archives</a> &#62;
				<a href="../../../../archives/2008/index.php">2008</a> &#62;
				<a href="../../../../archives/2008/06/index.php">06</a> &#62;
				<br />
<a href="../../../../archives/2008/04/11/index.php">&#60;</a>
				16
<a href="../../../../archives/2008/11/01/index.php">&#62;</a>
			</div>
			<div class="archives">
				<div class="item">
	<a id="e2008-06-16T11_48_49.txt"></a>
	<h2 class="date">Mon Jun 16 11:48:49 CDT 2008</h2>
	<div class="blogbody">
		<h3 class="title">Upcoming developments and contributions</h3>
		<div class="item-description">
			<p>I'm writing this news post mainly to let members of the community know what's going on with FahMon development-wise, since there have been no new announcements since 
April.</p>
<b>Developments</b>
<p>For those of you who are not aware, FahMon is coded entirely in my spare time, which recently I have had virtually none of (writing theses was the main culprit). 
However, I'm about to start a major drive to get various bits of core code in FahMon up to scratch and more stable.<br />There are already a number of GUI enhancements in 
svn including re-organised menus (for those who were confused about the lack of a "client" menu), configurable columns in the main view and the ability to hide the "WU 
Information" panel. There may be a few more tweaks to the GUI being made of the next few days to try and make the whole thing a little slicker than in the current 
release.<br />After finishing the GUI updates I'll be taking a look at the innards of the monitoring code, and possibly re-writing major portions of it to increase 
stability, and compatibility (mainly with SMP clients inside Virtual Machines).</p>
<p>I also hope to be able to put together some build-bots to automatically compile the latest svn code to ease the testing process.</p>
<b>Contributing</b>
<p>There are a number of ways that you can help contribute to the development of FahMon, and only 1 of them requires you to have any programming knowledge:</p>
<ul>
<li>Bug reporting. This is <i>very</i> important to help improve FahMon, because unless I know a bug exists, I can't fix it.
<li>Ideas for features. You guys might come up with something I had'nt thought of.
<li>Code contributions. I welcome any patches to code, from typos to new functions.
<li>Monetary donations. There's a paypal link on the homepage. There's no obligation, but if you want to donate, the facility is there.
</ul>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2008/06/16/index.php#e2008-06-16T11_48_49.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../../archives/development/index.php">Development</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2008/06/16/index.php#e2008-06-16T11_48_49.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/06/16/index.php#e2008-06-16T11_48_49.txt', PHP_URL_PATH); 
 $blog_id='e2008-06-16T11_48_49.txt';
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
