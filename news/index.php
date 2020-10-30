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
?><?php
echo("<?xml ");
echo("version=\"1.0\" encoding=\"utf-8\"?>");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content=
"HTML Tidy for Linux/x86 (vers 11 February 2007), see www.w3.org" />
<meta http-equiv="Content-Type" content=
"application/php; charset=utf-8" />
<meta name="generator" content="NanoBlogger 3.3" />
<meta name="robots" content="all" />
<meta name="revisit-after" content="31 days" />
<title>FahMon News</title>
<link rel="stylesheet" href="./styles/nb_fahmon.css" type=
"text/css" media="all" />
<link rel="stylesheet" href="./styles/print.css" type="text/css"
media="print" />
<link rel="stylesheet" href="./blogkomm/blogkomm.css" type=
"text/css" />
<link rel="shortcut icon" href="./images/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0"
href="./rss.xml" />
<link rel="alternate" type="application/atom+xml" title="Atom 1.0"
href="./atom.xml" />
</head>
<body>
<!--[if lt IE 7]>
        <style>
        .TopNavigation ul
{
        margin-left:100px;
}
        </style>
        <![endif]-->
<div id="BodyWrapper">
<div id="MainContainer">
<div class="TopNavigation">
<div style="position:absolute; right:0; z-index:2"><img src=
"http://static.delicious.com/img/delicious.small.gif" height="10"
width="10" alt="Delicious" /> <a href="http://delicious.com/save"
onclick=
"window.open('http://delicious.com/save?v=5&amp;noui&amp;jump=close&amp;url='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent(document.title), 'delicious','toolbar=no,width=550,height=550'); return false;">
Bookmark on Delicious</a></div>
<ul>
<li><a href="http://fahmon.net">Home</a></li>
<li><a href=".//../../download.html">Download</a></li>
<li><a href=".//../../screenshots.html">Screenshots</a></li>
<li><a href=".//../../about.html">About</a></li>
<li class="Selected"><a href=".//../../news/">News</a></li>
<li><a href="http://trac.fahmon.net">Support &amp;
Development</a></li>
</ul>
</div>
<br />
<div class="box_full">
<div id="main">
<div id="container" class="clearfix">
<div id="header" class="clearfix">
<h1><a href="./index.php" accesskey="1">FahMon News</a></h1>
<span class="description">News and development of
FahMon</span></div>
<div id="links">
<div class="calendar">
<table border="0" cellspacing="4" cellpadding="0" summary=
"Calendar">
<caption class="calendarhead"><a href=
"./archives/2010/11/index.php">November 2010</a></caption>
<tr>
<th><span class="calendarday">Su</span></th>
<th><span class="calendarday">Mo</span></th>
<th><span class="calendarday">Tu</span></th>
<th><span class="calendarday">We</span></th>
<th><span class="calendarday">Th</span></th>
<th><span class="calendarday">Fr</span></th>
<th><span class="calendarday">Sa</span></th>
</tr>
<tr>
<td></td>
<td><span class="calendar">1</span></td>
<td><span class="calendar">2</span></td>
<td><span class="calendar">3</span></td>
<td><span class="calendar">4</span></td>
<td><span class="calendar">5</span></td>
<td><span class="calendar">6</span></td>
</tr>
<tr>
<td><span class="calendar">7</span></td>
<td><span class="calendar">8</span></td>
<td><span class="calendar">9</span></td>
<td><span class="calendar">10</span></td>
<td><span class="calendar">11</span></td>
<td><span class="calendar"><a href=
"./archives/2010/11/12/index.php#e2010-11-12T12_55_55.txt">12</a></span></td>
<td><span class="calendar">13</span></td>
</tr>
<tr>
<td><span class="calendar">14</span></td>
<td><span class="calendar">15</span></td>
<td><span class="calendar">16</span></td>
<td><span class="calendar">17</span></td>
<td><span class="calendar">18</span></td>
<td><span class="calendar">19</span></td>
<td><span class="calendar">20</span></td>
</tr>
<tr>
<td><span class="calendar">21</span></td>
<td><span class="calendar">22</span></td>
<td><span class="calendar">23</span></td>
<td><span class="calendar">24</span></td>
<td><span class="calendar">25</span></td>
<td><span class="calendar">26</span></td>
<td><span class="calendar">27</span></td>
</tr>
<tr>
<td><span class="calendar">28</span></td>
<td><span class="calendar">29</span></td>
<td><span class="calendar">30</span></td>
</tr>
</table>
</div>
<!--<div class="sidetitle">
articles
</div>
<div class="side">

</div>-->
<div class="sidetitle">recent comments</div>
<div class="side"><?php
  define (COMMENTS_PATH, "/home/salamander/webapps/fahmon/news/blogkomm/comments.txt");
  include ("/home/salamander/webapps/fahmon/news/blogkomm/module/blogkomm_recent_comments_sidebar.php");
?></div>
<div class="sidetitle">Links</div>
<div class="side"><a href="./index.php">Main</a><br />
<!-- add more links below this line --></div>
<div class="sidetitle">Recent Entries</div>
<div class="side"><a href=
"./archives/2010/11/12/index.php#e2010-11-12T12_55_55.txt">FahMon
2.3.99.4 Released</a><br />
<a href=
"./archives/2010/10/19/index.php#e2010-10-19T17_39_30.txt">FahMon
2.3.99.3 Released</a><br />
<a href=
"./archives/2010/10/17/index.php#e2010-10-17T16_09_52.txt">FahMon
2.3.99.2 Released</a><br />
<a href=
"./archives/2009/04/06/index.php#e2009-04-06T08_59_32.txt">FahMon
2.3.99.1 Released</a><br />
<a href=
"./archives/2009/04/03/index.php#e2009-04-03T17_34_38.txt">FahMon
2.3.99 Released</a><br />
<a href=
"./archives/2009/01/17/index.php#e2009-01-17T09_35_13.txt">FahMon
IRC Channel now online</a><br />
<a href=
"./archives/2008/11/04/index.php#e2008-11-04T18_05_18.txt">FahMon
2.3.4 Released</a><br />
<a href=
"./archives/2008/11/01/index.php#e2008-11-01T13_11_52.txt">FahMon
2.3.3 Released</a><br />
<a href=
"./archives/2008/06/16/index.php#e2008-06-16T11_48_49.txt">Upcoming
developments and contributions</a><br />
<a href=
"./archives/2008/04/11/index.php#e2008-04-11T17_50_09.txt">FahMon
2.3.2b Released.</a><br /></div>
<div class="sidetitle">Categories</div>
<div class="side"><a href=
"./archives/development/index.php">Development</a> (10)<br />
<a href="./archives/releases/index.php">Releases</a> (14)<br />
<a href="./archives/translations/index.php">Translations</a>
(5)<br />
<a href="./archives/website/index.php">Website</a> (7)<br /></div>
<div class="sidetitle">Archives</div>
<div class="side"><a href="./archives/index.php">Archive
Index</a><br />
<a href="./archives/2010/index.php">2010</a> (3)<br />
<a href="./archives/2009/index.php">2009</a> (3)<br />
<a href="./archives/2008/index.php">2008</a> (16)<br />
<a href="./archives/2007/index.php">2007</a> (14)<br />
<!-- <a href="./archives/2010/11/index.php">November 2010</a> (1)<br />
<a href="./archives/2010/10/index.php">October 2010</a> (2)<br />
<a href="./archives/2009/04/index.php">April 2009</a> (2)<br />
<a href="./archives/2009/01/index.php">January 2009</a> (1)<br />
<a href="./archives/2008/11/index.php">November 2008</a> (2)<br />
<a href="./archives/2008/06/index.php">June 2008</a> (1)<br />
<a href="./archives/2008/04/index.php">April 2008</a> (1)<br />
<a href="./archives/2008/02/index.php">February 2008</a> (5)<br />
<a href="./archives/2008/01/index.php">January 2008</a> (7)<br />
<a href="./archives/2007/11/index.php">November 2007</a> (2)<br />
<a href="./archives/2007/10/index.php">October 2007</a> (12)<br /> --></div>
<div class="sidetitle">Syndicate</div>
<div class="side">Site (<a href="./rss.xml" class=
"feed-small">RSS</a>, <a href="./atom.xml" class=
"feed-small">Atom</a>)<br />
Development (<a href="./archives/development/index-rss.xml" class=
"feed-small">RSS</a>, <a href=
"./archives/development/index-atom.xml" class=
"feed-small">Atom</a>)<br />
Releases (<a href="./archives/releases/index-rss.xml" class=
"feed-small">RSS</a>, <a href="./archives/releases/index-atom.xml"
class="feed-small">Atom</a>)<br />
Translations (<a href="./archives/translations/index-rss.xml"
class="feed-small">RSS</a>, <a href=
"./archives/translations/index-atom.xml" class=
"feed-small">Atom</a>)<br />
Website (<a href="./archives/website/index-rss.xml" class=
"feed-small">RSS</a>, <a href="./archives/website/index-atom.xml"
class="feed-small">Atom</a>)<br /></div>
<div class="sidetitle">Contact</div>
<div class="side"><a href="mailto:andrew_s@fahmon.net">Andrew
Schofield</a></div>
<div class="sidetitle">Weblog Status</div>
<div class="side"><!-- Total categories:: 4<br /> -->
Total entries: 36<br />
Last entry: Fri Nov 12 12:55:55 CST 2010<br />
Last updated: Fri Nov 12 13:09:44 CST 2010</div>
</div>
<div id="content">
<div id="wrap"><a id="top" name="top"></a>
<div class="blog">
<div class="item"><a id="e2010-11-12T12_55_55.txt" name=
"e2010-11-12T12_55_55.txt"></a>
<h2 class="date">Fri Nov 12 12:55:55 CST 2010</h2>
<div class="blogbody">
<h3 class="title">FahMon 2.3.99.4 Released</h3>
<div class="item-description">
<p>FahMon 2.3.99.4 is now available for download. Please see the
download page for details on how to get it.</p>
<p>For a comprehensive list of changes please view the changelog
which is linked to from the homepage.</p>
<p>What's new in this release</p>
<ul>
<li>New core support and fixed parsing of others.</li>
<li>Pause detection works properly now.</li>
<li>Update available window will show version numbers on subsequent
updates.</li>
<li>Benchmarks database now stored in xml format.</li>
</ul>
<p>As always if you find any bugs in the FahMon please report them
using <a href="http://trac.fahmon.net/">trac</a></p>
</div>
</div>
<div class="posted"><br />
Posted by <span class="item-creator">Andrew Schofield</span> |
<a class="link" href=
"./archives/2010/11/12/index.php#e2010-11-12T12_55_55.txt">Permanent
Link</a> | Categories: <!-- Releases --><a href=
"./archives/releases/index.php">Releases</a> 
<!--<a href="./../cgi-bin/cgicomment.cgi?article=archives/2010/11/12/index.php#e2010-11-12T12_55_55.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2010/11/12/index.php#e2010-11-12T12_55_55.txt', PHP_URL_PATH); 
 $blog_id='e2010-11-12T12_55_55.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?></div>
</div>
<div class="item"><a id="e2010-10-19T17_39_30.txt" name=
"e2010-10-19T17_39_30.txt"></a>
<h2 class="date">Tue Oct 19 17:39:30 CDT 2010</h2>
<div class="blogbody">
<h3 class="title">FahMon 2.3.99.3 Released</h3>
<div class="item-description">
<p>FahMon 2.3.99.3 is now available for download. Please see the
download page for details on how to get it.</p>
<p>For a comprehensive list of changes please view the changelog
which is linked to from the homepage.</p>
<p>What's new in this release</p>
<ul>
<li>New core support.</li>
<li>Fixed Windows Vista/7 DEP/C++ runtime crash</li>
<li>Fixed projects.dat not deleting on Windows</li>
</ul>
<p>As always if you find any bugs in the FahMon please report them
using <a href="http://trac.fahmon.net/">trac</a></p>
</div>
</div>
<div class="posted"><br />
Posted by <span class="item-creator">Andrew Schofield</span> |
<a class="link" href=
"./archives/2010/10/19/index.php#e2010-10-19T17_39_30.txt">Permanent
Link</a> | Categories: <!-- Releases --><a href=
"./archives/releases/index.php">Releases</a> 
<!--<a href="./../cgi-bin/cgicomment.cgi?article=archives/2010/10/19/index.php#e2010-10-19T17_39_30.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2010/10/19/index.php#e2010-10-19T17_39_30.txt', PHP_URL_PATH); 
 $blog_id='e2010-10-19T17_39_30.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?></div>
</div>
<div class="item"><a id="e2010-10-17T16_09_52.txt" name=
"e2010-10-17T16_09_52.txt"></a>
<h2 class="date">Sun Oct 17 16:09:52 CDT 2010</h2>
<div class="blogbody">
<h3 class="title">FahMon 2.3.99.2 Released</h3>
<div class="item-description">
<p>FahMon 2.3.99.2 is now available for download. Please see the
download page for details on how to get it.</p>
<p>For a comprehensive list of changes please view the changelog
which is linked to from the homepage.</p>
<p>What's new in this release</p>
<ul>
<li>New core support.</li>
<li>Fixed thread-safety issues.</li>
<li>Projects database now stored in xml format.</li>
</ul>
<p>As always if you find any bugs in the FahMon please report them
using <a href="http://trac.fahmon.net/">trac</a></p>
</div>
</div>
<div class="posted"><br />
Posted by <span class="item-creator">Andrew Schofield</span> |
<a class="link" href=
"./archives/2010/10/17/index.php#e2010-10-17T16_09_52.txt">Permanent
Link</a> | Categories: <!-- Releases --><a href=
"./archives/releases/index.php">Releases</a> 
<!--<a href="./../cgi-bin/cgicomment.cgi?article=archives/2010/10/17/index.php#e2010-10-17T16_09_52.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2010/10/17/index.php#e2010-10-17T16_09_52.txt', PHP_URL_PATH); 
 $blog_id='e2010-10-17T16_09_52.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?></div>
</div>
<div class="item"><a id="e2009-04-06T08_59_32.txt" name=
"e2009-04-06T08_59_32.txt"></a>
<h2 class="date">Mon Apr 6 08:59:32 CDT 2009</h2>
<div class="blogbody">
<h3 class="title">FahMon 2.3.99.1 Released</h3>
<div class="item-description">
<p>FahMon 2.3.99.1 is now available for download. Please see the
download page for details on how to get it.</p>
<p>For a comprehensive list of changes please view the changelog
which is linked to from the homepage.</p>
<p>What's new in this release</p>
<ul>
<li>Fixed a nasty crash-bug which affected Windows users monitoring
linux clients. This also cleans up some behaviour that affects all
platforms</li>
</ul>
<p>As always if you find any bugs in the FahMon please report them
using <a href="http://trac.fahmon.net/">trac</a></p>
</div>
</div>
<div class="posted"><br />
Posted by <span class="item-creator">Andrew Schofield</span> |
<a class="link" href=
"./archives/2009/04/06/index.php#e2009-04-06T08_59_32.txt">Permanent
Link</a> | Categories: <!-- Releases --><a href=
"./archives/releases/index.php">Releases</a> 
<!--<a href="./../cgi-bin/cgicomment.cgi?article=archives/2009/04/06/index.php#e2009-04-06T08_59_32.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2009/04/06/index.php#e2009-04-06T08_59_32.txt', PHP_URL_PATH); 
 $blog_id='e2009-04-06T08_59_32.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?></div>
</div>
<div class="item"><a id="e2009-04-03T17_34_38.txt" name=
"e2009-04-03T17_34_38.txt"></a>
<h2 class="date">Fri Apr 3 17:34:38 CDT 2009</h2>
<div class="blogbody">
<h3 class="title">FahMon 2.3.99 Released</h3>
<div class="item-description">
<p>FahMon 2.3.99 is now available for download. Please see the
download page for details on how to get it.</p>
<p>For a comprehensive list of changes please view the changelog
which is linked to from the homepage.</p>
<p>A bit of what's new in this release:</p>
<ul>
<li>Removed WU info panel from default view.</li>
<li>Lots of performance changes.</li>
<li>You can now monitor clients via FTP and HTTP.</li>
<li>You can upload web output to an FTP server automatically.</li>
</ul>
<p><b>What happened to 2.4.0?</b><br />
As a result of the performance and memory fixes, a previously
infrequent crash-bug has increased in prevalence and will take more
time to fix. Since this is still unlikely to occur often I'm
releasing the current code as it stands. 2.4.0 will be released as
soon as this crash-bug is fixed.</p>
<p>As always if you find any bugs in FahMon please report them
using <a href="http://trac.fahmon.net/">trac</a></p>
</div>
</div>
<div class="posted"><br />
Posted by <span class="item-creator">Andrew Schofield</span> |
<a class="link" href=
"./archives/2009/04/03/index.php#e2009-04-03T17_34_38.txt">Permanent
Link</a> | Categories: <!-- Releases --><a href=
"./archives/releases/index.php">Releases</a> 
<!--<a href="./../cgi-bin/cgicomment.cgi?article=archives/2009/04/03/index.php#e2009-04-03T17_34_38.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2009/04/03/index.php#e2009-04-03T17_34_38.txt', PHP_URL_PATH); 
 $blog_id='e2009-04-03T17_34_38.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?></div>
</div>
<div class="item"><a id="e2009-01-17T09_35_13.txt" name=
"e2009-01-17T09_35_13.txt"></a>
<h2 class="date">Sat Jan 17 09:35:13 CST 2009</h2>
<div class="blogbody">
<h3 class="title">FahMon IRC Channel now online</h3>
<div class="item-description">
<p>For those of you wanting online support or to discuss the
development of FahMon, there is now an official IRC channel on
freenode.net at #fahmon.<br />
<a href="irc://freenode.net/%23fahmon">Join #fahmon on freenode in
your IRC client</a><br />
<a href=
"http://widget.mibbit.com/?server=irc.freenode.net&amp;channel=%23fahmon">
Join #fahmon on freenode with the mibbit web IRC client</a></p>
</div>
</div>
<div class="posted"><br />
Posted by <span class="item-creator">Andrew Schofield</span> |
<a class="link" href=
"./archives/2009/01/17/index.php#e2009-01-17T09_35_13.txt">Permanent
Link</a> | Categories: <!-- Website --><a href=
"./archives/website/index.php">Website</a> 
<!--<a href="./../cgi-bin/cgicomment.cgi?article=archives/2009/01/17/index.php#e2009-01-17T09_35_13.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2009/01/17/index.php#e2009-01-17T09_35_13.txt', PHP_URL_PATH); 
 $blog_id='e2009-01-17T09_35_13.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?></div>
</div>
<div class="item"><a id="e2008-11-04T18_05_18.txt" name=
"e2008-11-04T18_05_18.txt"></a>
<h2 class="date">Tue Nov 4 18:05:18 CST 2008</h2>
<div class="blogbody">
<h3 class="title">FahMon 2.3.4 Released</h3>
<div class="item-description">
<p>FahMon 2.3.4 is now available for download. Please see the
download page for details on how to get it.</p>
<p>For a comprehensive list of changes please view the changlog
which is linked to from the homepage.</p>
<p>What's new in this release:</p>
<ul>
<li>This version fixes the nasty bug in 2.3.3 which cause clients
to fail to update after non-specific periods of time. This was
caused by a typo in the update queue handler which now works
properly.</li>
<li>CPU usage has been reduced slightly when refreshing clients
thanks to a re-worked message logger.</li>
<li>clientstab.txt is now tab-delimited. This has no effect on
FahMon, but may break compatibility with other tools that read this
file.</li>
</ul>
<p>As always if you find any bugs in FahMon please report them
using <a href="http://trac.fahmon.net/">trac</a></p>
</div>
</div>
<div class="posted"><br />
Posted by <span class="item-creator">Andrew Schofield</span> |
<a class="link" href=
"./archives/2008/11/04/index.php#e2008-11-04T18_05_18.txt">Permanent
Link</a> | Categories: <!-- Releases --><a href=
"./archives/releases/index.php">Releases</a> 
<!--<a href="./../cgi-bin/cgicomment.cgi?article=archives/2008/11/04/index.php#e2008-11-04T18_05_18.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/11/04/index.php#e2008-11-04T18_05_18.txt', PHP_URL_PATH); 
 $blog_id='e2008-11-04T18_05_18.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?></div>
</div>
<div class="item"><a id="e2008-11-01T13_11_52.txt" name=
"e2008-11-01T13_11_52.txt"></a>
<h2 class="date">Sat Nov 1 13:11:52 CDT 2008</h2>
<div class="blogbody">
<h3 class="title">FahMon 2.3.3 Released</h3>
<div class="item-description">
<p>FahMon 2.3.3 is now available for download. Please see the
download page for details on how to get it.</p>
<p>For a comprehensive list of changes please view the changelog
which is linked to from the home page.</p>
<p>What's new in this release:</p>
<ul>
<li>The client list view has been made much more configurable and
additional columns can be added with a right click on the column
title.</li>
<li>You can now completely hide the WU Info panel on the right hand
side of the main FahMon window.</li>
<li>Clients can now be managed from the main menu instead of a
right click menu in the clients list.</li>
<li>Clients can now be manually disabled if you don't want FahMon
to monitor them.</li>
<li>Paused clients can now be detected and shouldn't register as
*hung*.</li>
<li>A number of debilitating bugs that affected GPU monitoring have
been fixed.</li>
<li>FahMon on Windows now follows MS guidelines for storage of
settings. This means no more problems with UAC on Vista when
downloading project updates.</li>
</ul>
<p>Special thanks go to John Daiker for providing a number of
patches to improve GPU2 support as well as fixing the
"quick-refresh" crash bug.</p>
<p>As always if you find any bugs in FahMon please report them
using <a href="http://trac.fahmon.net">trac</a></p>
</div>
</div>
<div class="posted"><br />
Posted by <span class="item-creator">Andrew Schofield</span> |
<a class="link" href=
"./archives/2008/11/01/index.php#e2008-11-01T13_11_52.txt">Permanent
Link</a> | Categories: <!-- Releases --><a href=
"./archives/releases/index.php">Releases</a> 
<!--<a href="./../cgi-bin/cgicomment.cgi?article=archives/2008/11/01/index.php#e2008-11-01T13_11_52.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/11/01/index.php#e2008-11-01T13_11_52.txt', PHP_URL_PATH); 
 $blog_id='e2008-11-01T13_11_52.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?></div>
</div>
<div class="item"><a id="e2008-06-16T11_48_49.txt" name=
"e2008-06-16T11_48_49.txt"></a>
<h2 class="date">Mon Jun 16 11:48:49 CDT 2008</h2>
<div class="blogbody">
<h3 class="title">Upcoming developments and contributions</h3>
<div class="item-description">
<p>I'm writing this news post mainly to let members of the
community know what's going on with FahMon development-wise, since
there have been no new announcements since April.</p>
<b>Developments</b>
<p>For those of you who are not aware, FahMon is coded entirely in
my spare time, which recently I have had virtually none of (writing
theses was the main culprit). However, I'm about to start a major
drive to get various bits of core code in FahMon up to scratch and
more stable.<br />
There are already a number of GUI enhancements in svn including
re-organised menus (for those who were confused about the lack of a
"client" menu), configurable columns in the main view and the
ability to hide the "WU Information" panel. There may be a few more
tweaks to the GUI being made of the next few days to try and make
the whole thing a little slicker than in the current release.<br />
After finishing the GUI updates I'll be taking a look at the
innards of the monitoring code, and possibly re-writing major
portions of it to increase stability, and compatibility (mainly
with SMP clients inside Virtual Machines).</p>
<p>I also hope to be able to put together some build-bots to
automatically compile the latest svn code to ease the testing
process.</p>
<b>Contributing</b>
<p>There are a number of ways that you can help contribute to the
development of FahMon, and only 1 of them requires you to have any
programming knowledge:</p>
<ul>
<li>Bug reporting. This is <i>very</i> important to help improve
FahMon, because unless I know a bug exists, I can't fix it.</li>
<li>Ideas for features. You guys might come up with something I
had'nt thought of.</li>
<li>Code contributions. I welcome any patches to code, from typos
to new functions.</li>
<li>Monetary donations. There's a paypal link on the homepage.
There's no obligation, but if you want to donate, the facility is
there.</li>
</ul>
</div>
</div>
<div class="posted"><br />
Posted by <span class="item-creator">Andrew Schofield</span> |
<a class="link" href=
"./archives/2008/06/16/index.php#e2008-06-16T11_48_49.txt">Permanent
Link</a> | Categories: <!-- Development --><a href=
"./archives/development/index.php">Development</a> 
<!--<a href="./../cgi-bin/cgicomment.cgi?article=archives/2008/06/16/index.php#e2008-06-16T11_48_49.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/06/16/index.php#e2008-06-16T11_48_49.txt', PHP_URL_PATH); 
 $blog_id='e2008-06-16T11_48_49.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?></div>
</div>
<div class="item"><a id="e2008-04-11T17_50_09.txt" name=
"e2008-04-11T17_50_09.txt"></a>
<h2 class="date">Fri Apr 11 17:50:09 CDT 2008</h2>
<div class="blogbody">
<h3 class="title">FahMon 2.3.2b Released.</h3>
<div class="item-description">
<p>FahMon 2.3.2b is now available for download. See the download
page for details on how to get it.</p>
<p>For a comprehensive list of changes please view the changelog
which is linked to from the home page and the download page.</p>
<p>What's new in this release:</p>
<ul>
<li>Several behavioural fixes to dialogs and a number of visual
fixes including displaying fractional deadlines correctly.</li>
<li>Windows now maximises from the System tray correctly.
Finally.</li>
<li>A number of performance and behaviour tweaks to the OS X
build.</li>
<li>GPU2 core support.</li>
</ul>
<p>Special thanks go to Mark Gerby (Gerby19) for helping me debug
and test some of the Windows bugs</p>
<p>To activate GPU2 support you may need to update the project list
from the "FahMon" menu.</p>
<p>As always if you find any bugs in FahMon please report them
using <a href="http://trac.fahmon.net/">trac.</a></p>
</div>
</div>
<div class="posted"><br />
Posted by <span class="item-creator">Andrew Schofield</span> |
<a class="link" href=
"./archives/2008/04/11/index.php#e2008-04-11T17_50_09.txt">Permanent
Link</a> | Categories: <!-- Releases --><a href=
"./archives/releases/index.php">Releases</a> 
<!--<a href="./../cgi-bin/cgicomment.cgi?article=archives/2008/04/11/index.php#e2008-04-11T17_50_09.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/04/11/index.php#e2008-04-11T17_50_09.txt', PHP_URL_PATH); 
 $blog_id='e2008-04-11T17_50_09.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?></div>
</div>
</div>
</div>
<div class="pagenav" align="center"></div>
</div>
</div>
<div id="footer" style="clear:both;">
<div class="metainfo">powered by $EDITOR, bash, cat, grep, sed, and
<a href="http://nanoblogger.sourceforge.net">nb 3.3</a></div>
<div class="menu"><a href="#top">/\</a><br /></div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
