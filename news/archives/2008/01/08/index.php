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

<title>January  08, 2008 Archives | FahMon News</title>

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
			<h2>January  08, 2008 Archives</h2>
			<div id="menu">
				<a href="../../../../index.php">Main</a> &#62;
				<a href="../../../../archives/index.php">Archives</a> &#62;
				<a href="../../../../archives/2008/index.php">2008</a> &#62;
				<a href="../../../../archives/2008/01/index.php">01</a> &#62;
				<br />
<a href="../../../../archives/2007/11/17/index.php">&#60;</a>
				08
<a href="../../../../archives/2008/01/19/index.php">&#62;</a>
			</div>
			<div class="archives">
				<div class="item">
	<a id="e2008-01-08T07_28_31.txt"></a>
	<h2 class="date">Tue Jan  8 07:28:31 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">Project data fix for p3906</h3>
		<div class="item-description">
			Since psummary appears to be displaying data that doesn't adhere to the "standard" we have come to expect 
for reporting the number of frames for p3906, I've created a mini psummary page that will allow you to 
update FahMon's internal project database with the "correct" data for this project.
<ul>
<li>Download 3906fix.html from <a href="http://fahmon.net/downloads/fixes/3906fix.html">http://fahmon.net/downloads/fixes/3906fix.html</a> (Right click on the link and choose "save as". In IE, make sure the filename extension is "html" and NOT "htm")
<li>Open up FahMon's preference dialog and go to the advanced tab.
<li>Select the option to use a local file, and choose the 3906fix.html file you just downloaded.
<li>Press OK
<li>Manually update the project list, by using "Download New Projects" from the FahMon menu. This will 
then load the local 3906fix.html file and update the internal database with the correct data.
<li>Go back to the preferences dialog and deselect the local file option, this will ensure that your project database can still be updated correctly from psummary. Please note that if FahMon has to update the database from psummary you will need to repeat this process as it will overwrite the corrected values.
</ul>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2008/01/08/index.php#e2008-01-08T07_28_31.txt">Permanent Link</a>
| Categories: <!-- Releases --><a href="../../../../archives/releases/index.php">Releases</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2008/01/08/index.php#e2008-01-08T07_28_31.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/01/08/index.php#e2008-01-08T07_28_31.txt', PHP_URL_PATH); 
 $blog_id='e2008-01-08T07_28_31.txt';
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
