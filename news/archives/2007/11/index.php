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

<title>November 2007 Archives | FahMon News</title>

<link rel="stylesheet" href="../../../styles/nb_fahmon.css" type="text/css" media="all" />
<link rel="stylesheet" href="../../../styles/print.css" type="text/css" media="print" />
<link rel="stylesheet" href="../../../blogkomm/blogkomm.css" type="text/css" />
<link rel="shortcut icon" href="../../../images/favicon.ico" />
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
href="../../../atom.xml"
/>
<link rel="alternate" type="application/rss+xml"
title="RSS 2.0"
href="../../../rss.xml"
/>

</head>

<body>
<div id="BodyWrapper">
<div id="MainContainer">
<div class="TopNavigation">
<ul>
<li><a href="http://fahmon.net">Home</a></li>
<li><a href="../../..//../../download.html">Download</a></li>
<li><a href="../../..//../../screenshots.html">Screenshots</a></li>
<li><a href="../../..//../../about.html">About</a></li>
<li class="Selected"><a href="../../..//../../news/">News</a></li>
<li><a href="http://trac.fahmon.net">Support &amp; Development</a></li>
</ul>
</div>
<br />
<div class="box_full">
<div id="main">
<div id="container" class="clearfix">
	<div id="header" class="clearfix">
		<h1><a href="../../../index.php" accesskey="1">FahMon News</a></h1>
		<span class="description">News and development of FahMon</span>
	</div>
	<div id="links">
		<div class="calendar">
			<table border="0" cellspacing="4" cellpadding="0" summary="Calendar">
<caption class="calendarhead">November 2007</caption>
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
<td></td> <td></td> <td></td> <td></td>    
<td><span class="calendar">1</span></td>
<td><span class="calendar">2</span></td>
<td><span class="calendar">3</span></td>
</tr>
<tr>
          
<td><span class="calendar">4</span></td>
<td><span class="calendar"><a href="../../../archives/2007/11/05/index.php#e2007-11-05T15_30_21.txt">5</a></span></td>
<td><span class="calendar">6</span></td>
<td><span class="calendar">7</span></td>
<td><span class="calendar">8</span></td>
<td><span class="calendar">9</span></td>
<td><span class="calendar">10</span></td>
          
</tr>
<tr>
    
<td><span class="calendar">11</span></td>
<td><span class="calendar">12</span></td>
<td><span class="calendar">13</span></td>
<td><span class="calendar">14</span></td>
<td><span class="calendar">15</span></td>
<td><span class="calendar">16</span></td>
<td><span class="calendar"><a href="../../../archives/2007/11/17/index.php#e2007-11-17T10_34_27.txt">17</a></span></td>
    
</tr>
<tr>
    
<td><span class="calendar">18</span></td>
<td><span class="calendar">19</span></td>
<td><span class="calendar">20</span></td>
<td><span class="calendar">21</span></td>
<td><span class="calendar">22</span></td>
<td><span class="calendar">23</span></td>
<td><span class="calendar">24</span></td>
    
</tr>
<tr>
   
<td><span class="calendar">25</span></td>
<td><span class="calendar">26</span></td>
<td><span class="calendar">27</span></td>
<td><span class="calendar">28</span></td>
<td><span class="calendar">29</span></td>
<td><span class="calendar">30</span></td>
   
</tr>
</table>
		</div>
	</div>
	<div id="content">
		<div id="wrap">
			<a id="top"></a>
			<h2>November 2007 Archives</h2>
			<div id="menu">
				<a href="../../../index.php">Main</a> &#62;
				<a href="../../../archives/index.php">Archives</a> &#62;
				<a href="../../../archives/2007/index.php">2007</a> &#62;
				<br />
<a href="../../../archives/2007/10/index.php">&#60;</a>
				11
<a href="../../../archives/2008/01/index.php">&#62;</a>
			</div>
			<div class="archives">
				<div class="item">
	<a id="e2007-11-17T10_34_27.txt"></a>
	<h2 class="date">Sat Nov 17 10:34:27 CST 2007</h2>
	<div class="blogbody">
		<h3 class="title">Stability updates</h3>
		<div class="item-description">
			<p>Starting with FahMon 2.3.2, several pieces of data crucial to FahMon's operation will now be 
obtained directly from queue.dat, since this is the only reliable source for these data.</p>
<p>To this end, some of the core code from qd has been ported into FahMon to access data from the 
queue in a tried and trusted fashion.</p>
<p>My thanks go to Dick Howell and Bas Couwenberg for this code.</p>
<p>With the introduction of qd into FahMon, the messages windows now displays the following licence text 
upon startup:</p>
<pre>FahMon <version> is licenced under the GNU GPL v2
Copyright (C) 2003-2007 Francois Ingelrest
Copyright (C) 2007 Andrew Schofield
   
FahMon contains code from qd, also licenced under the GNU GPL v2
Copyright (C) 2002-2005 Richard P. Howell IV.
Copyright (C) 2005-2007 Sebastiaan Couwenberg</pre>
<p>The overall upshot of these changes is that FahMon should be much more stable, and no longer crash 
or mangle machine names when monitoring large numbers of clients.</p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../archives/2007/11/17/index.php#e2007-11-17T10_34_27.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../archives/development/index.php">Development</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2007/11/17/index.php#e2007-11-17T10_34_27.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2007/11/17/index.php#e2007-11-17T10_34_27.txt', PHP_URL_PATH); 
 $blog_id='e2007-11-17T10_34_27.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
<div class="item">
	<a id="e2007-11-05T15_30_21.txt"></a>
	<h2 class="date">Mon Nov  5 15:30:21 CST 2007</h2>
	<div class="blogbody">
		<h3 class="title">Fedora and SUSE packages for 2.3.1 up</h3>
		<div class="item-description">
			<p>Precompiled binaries are now available for both Fedora Core 7 and SUSE 10.2 AMD64</p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../archives/2007/11/05/index.php#e2007-11-05T15_30_21.txt">Permanent Link</a>
| Categories: <!-- Releases --><a href="../../../archives/releases/index.php">Releases</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2007/11/05/index.php#e2007-11-05T15_30_21.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2007/11/05/index.php#e2007-11-05T15_30_21.txt', PHP_URL_PATH); 
 $blog_id='e2007-11-05T15_30_21.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
			</div>
			<div class="pagenav" align="center">
				
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
