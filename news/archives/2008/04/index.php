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

<title>April 2008 Archives | FahMon News</title>

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
<div style="position:absolute; right:0; z-index:2"><img src="http://static.delicious.com/img/delicious.small.gif" height="10" width="10" alt="Delicious" />
<a href="http://delicious.com/save" onclick="window.open('http://delicious.com/save?v=5&amp;noui&amp;jump=close&amp;url='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent(document.title), 'delicious','toolbar=no,width=550,height=550'); return false;"> Bookmark on Delicious</a></div>
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
<caption class="calendarhead">April 2008</caption>
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
<td></td> <td></td>        
<td><span class="calendar">1</span></td>
<td><span class="calendar">2</span></td>
<td><span class="calendar">3</span></td>
<td><span class="calendar">4</span></td>
<td><span class="calendar">5</span></td>
</tr>
<tr>
        
<td><span class="calendar">6</span></td>
<td><span class="calendar">7</span></td>
<td><span class="calendar">8</span></td>
<td><span class="calendar">9</span></td>
<td><span class="calendar">10</span></td>
<td><span class="calendar"><a href="../../../archives/2008/04/11/index.php#e2008-04-11T17_50_09.txt">11</a></span></td>
<td><span class="calendar">12</span></td>
        
</tr>
<tr>
    
<td><span class="calendar">13</span></td>
<td><span class="calendar">14</span></td>
<td><span class="calendar">15</span></td>
<td><span class="calendar">16</span></td>
<td><span class="calendar">17</span></td>
<td><span class="calendar">18</span></td>
<td><span class="calendar">19</span></td>
    
</tr>
<tr>
    
<td><span class="calendar">20</span></td>
<td><span class="calendar">21</span></td>
<td><span class="calendar">22</span></td>
<td><span class="calendar">23</span></td>
<td><span class="calendar">24</span></td>
<td><span class="calendar">25</span></td>
<td><span class="calendar">26</span></td>
    
</tr>
<tr>
 
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
			<h2>April 2008 Archives</h2>
			<div id="menu">
				<a href="../../../index.php">Main</a> &#62;
				<a href="../../../archives/index.php">Archives</a> &#62;
				<a href="../../../archives/2008/index.php">2008</a> &#62;
				<br />
<a href="../../../archives/2008/02/index.php">&#60;</a>
				04
<a href="../../../archives/2008/06/index.php">&#62;</a>
			</div>
			<div class="archives">
				<div class="item">
	<a id="e2008-04-11T17_50_09.txt"></a>
	<h2 class="date">Fri Apr 11 17:50:09 CDT 2008</h2>
	<div class="blogbody">
		<h3 class="title">FahMon 2.3.2b Released.</h3>
		<div class="item-description">
			<p>FahMon 2.3.2b is now available for download. See the download page for details on how to get it.</p>

<p>For a comprehensive list of changes please view the changelog which is linked to from the home page and the download page.</p>

<p>What's new in this release:</p>
<ul>
<li>Several behavioural fixes to dialogs and a number of visual fixes including displaying fractional deadlines correctly.
<li>Windows now maximises from the System tray correctly. Finally.
<li>A number of performance and behaviour tweaks to the OS X build.
<li>GPU2 core support.
</ul>
<p>Special thanks go to Mark Gerby (Gerby19) for helping me debug and test some of the Windows bugs</p>
<p>To activate GPU2 support you may need to update the project list from the "FahMon" menu.</p>
<p>As always if you find any bugs in FahMon please report them using <a href="http://trac.fahmon.net/">
trac.</a></p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../archives/2008/04/11/index.php#e2008-04-11T17_50_09.txt">Permanent Link</a>
| Categories: <!-- Releases --><a href="../../../archives/releases/index.php">Releases</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2008/04/11/index.php#e2008-04-11T17_50_09.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/04/11/index.php#e2008-04-11T17_50_09.txt', PHP_URL_PATH); 
 $blog_id='e2008-04-11T17_50_09.txt';
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
