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
echo("version=\"1.0\" encoding=\"utf-8\"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content=
"HTML Tidy for Linux/x86 (vers 11 February 2007), see www.w3.org" />
<meta http-equiv="Content-Type" content=
"application/php; charset=utf-8" />
<title>Releases Archives | FahMon News</title>
<link rel="stylesheet" href="../../styles/nb_fahmon.css" type=
"text/css" media="all" />
<link rel="stylesheet" href="../../styles/print.css" type=
"text/css" media="print" />
<link rel="stylesheet" href="../../blogkomm/blogkomm.css" type=
"text/css" />
<link rel="shortcut icon" href="../../images/favicon.ico" />
<link rel="alternate" type="application/atom+xml" title=
"Atom 1.0: Releases" href=
"../../archives/releases/index-atom.xml" />
<link rel="alternate" type="application/rss+xml" title=
"RSS 2.0: Releases" href="../../archives/releases/index-rss.xml" />
</head>
<body>
"); ?&gt; <!--[if lt IE 7]>
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
<li><a href="../..//../../download.html">Download</a></li>
<li><a href="../..//../../screenshots.html">Screenshots</a></li>
<li><a href="../..//../../about.html">About</a></li>
<li class="Selected"><a href="../..//../../news/">News</a></li>
<li><a href="http://trac.fahmon.net">Support &amp;
Development</a></li>
</ul>
</div>
<br />
<div class="box_full">
<div id="main">
<div id="container" class="clearfix">
<div id="header" class="clearfix">
<h1><a href="../../index.php" accesskey="1">FahMon News</a></h1>
<span class="description">News and development of
FahMon</span></div>
<div id="altcontent"><a id="top" name="top"></a>
<h2>Releases Archives</h2>
<div id="menu"><a href="../../index.php">Main</a> &gt; <a href=
"../../archives/index.php">Archives</a> &gt;<br />
Releases</div>
<div class="archives"><a href=
"../../archives/2010/11/index.php">2010-11</a> - <a class="link"
href=
"../../archives/2010/11/12/index.php#e2010-11-12T12_55_55.txt">FahMon
2.3.99.4 Released</a> - <!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2010/10/index.php">2010-10</a> - <a class=
"link" href=
"../../archives/2010/10/19/index.php#e2010-10-19T17_39_30.txt">FahMon
2.3.99.3 Released</a> - <!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2010/10/index.php">2010-10</a> - <a class=
"link" href=
"../../archives/2010/10/17/index.php#e2010-10-17T16_09_52.txt">FahMon
2.3.99.2 Released</a> - <!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2009/04/index.php">2009-04</a> - <a class=
"link" href=
"../../archives/2009/04/06/index.php#e2009-04-06T08_59_32.txt">FahMon
2.3.99.1 Released</a> - <!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2009/04/index.php">2009-04</a> - <a class=
"link" href=
"../../archives/2009/04/03/index.php#e2009-04-03T17_34_38.txt">FahMon
2.3.99 Released</a> - <!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2008/11/index.php">2008-11</a> - <a class=
"link" href=
"../../archives/2008/11/04/index.php#e2008-11-04T18_05_18.txt">FahMon
2.3.4 Released</a> - <!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2008/11/index.php">2008-11</a> - <a class=
"link" href=
"../../archives/2008/11/01/index.php#e2008-11-01T13_11_52.txt">FahMon
2.3.3 Released</a> - <!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2008/04/index.php">2008-04</a> - <a class=
"link" href=
"../../archives/2008/04/11/index.php#e2008-04-11T17_50_09.txt">FahMon
2.3.2b Released.</a> - <!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2008/02/index.php">2008-02</a> - <a class=
"link" href=
"../../archives/2008/02/16/index.php#e2008-02-16T07_37_10.txt">FahMon
2.3.2a Released. Now with OS X Support!</a> - 
<!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2008/02/index.php">2008-02</a> - <a class=
"link" href=
"../../archives/2008/02/08/index.php#e2008-02-08T16_07_42.txt">FahMon
2.3.2 released</a> - <!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2008/01/index.php">2008-01</a> - <a class=
"link" href=
"../../archives/2008/01/08/index.php#e2008-01-08T07_28_31.txt">Project
data fix for p3906</a> - <!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2007/11/index.php">2007-11</a> - <a class=
"link" href=
"../../archives/2007/11/05/index.php#e2007-11-05T15_30_21.txt">Fedora
and SUSE packages for 2.3.1 up</a> - <!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2007/10/index.php">2007-10</a> - <a class=
"link" href=
"../../archives/2007/10/30/index.php#e2007-10-30T18_52_08.txt">Ubuntu
and PCLinuxOS packages for 2.3.1 up</a> - <!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2007/10/index.php">2007-10</a> - <a class=
"link" href=
"../../archives/2007/10/30/index.php#e2007-10-30T14_06_27.txt">FahMon
2.3.1 Released</a> - <!-- Releases --><a href=
"../../archives/releases/index.php">Releases</a><br /></div>
<div class="pagenav" align="center"></div>
</div>
</div>
<div id="footer" style="clear:both;">
<div class="menu"><a href="#top">/\</a><br /></div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
