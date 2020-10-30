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

<title>2009 Archives | FahMon News</title>

<link rel="stylesheet" href="../../styles/nb_fahmon.css" type="text/css" media="all" />
<link rel="stylesheet" href="../../styles/print.css" type="text/css" media="print" />
<link rel="stylesheet" href="../../blogkomm/blogkomm.css" type="text/css" />
<link rel="shortcut icon" href="../../images/favicon.ico" />
	<!--[if lt IE 7]>
	<style>
	.TopNavigation ul
{
	margin-left:100px;
}
	</style>
	<![endif]-->

</head>

<body>
<div id="BodyWrapper">
<div id="MainContainer">
<div class="TopNavigation">
<div style="position:absolute; right:0; z-index:2"><img src="http://static.delicious.com/img/delicious.small.gif" height="10" width="10" alt="Delicious" />
<a href="http://delicious.com/save" onclick="window.open('http://delicious.com/save?v=5&amp;noui&amp;jump=close&amp;url='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent(document.title), 'delicious','toolbar=no,width=550,height=550'); return false;"> Bookmark on Delicious</a></div>
<ul>
<li><a href="http://fahmon.net">Home</a></li>
<li><a href="../..//../../download.html">Download</a></li>
<li><a href="../..//../../screenshots.html">Screenshots</a></li>
<li><a href="../..//../../about.html">About</a></li>
<li class="Selected"><a href="../..//../../news/">News</a></li>
<li><a href="http://trac.fahmon.net">Support &amp; Development</a></li>
</ul>
</div>
<br />
<div class="box_full">
<div id="main">
<div id="container" class="clearfix">
	<div id="header" class="clearfix">
		<h1><a href="../../index.php" accesskey="1">FahMon News</a></h1>
		<span class="description">News and development of FahMon</span>
	</div>
	<div id="altcontent">
		<div id="wrap">
			<a id="top"></a>
			<h2>2009 Archives</h2>
			<div id="menu">
				<a href="../../index.php">Main</a> &#62;
				<a href="../../archives/index.php">Archives</a> &#62;
				<br />
<a href="../../archives/2008/index.php">&#60;</a>
				2009
<a href="../../archives/2010/index.php">&#62;</a>
			</div>
			<div class="archives">
				<a id="date"></a>
<strong>Browse by date</strong>
<div>
<a href="../../archives/2009/04/index.php">April 2009</a> (2)<br />
<a href="../../archives/2009/01/index.php">January 2009</a> (1)<br />
</div>
<br />
<a id="entry"></a>
<strong>Browse by entry</strong>
<div>
<a href="../../archives/2009/04/index.php">2009-04</a>
- <a href="../../archives/2009/04/06/index.php#e2009-04-06T08_59_32.txt">FahMon 2.3.99.1 Released</a>
- <!-- Releases --><a href="../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2009/04/index.php">2009-04</a>
- <a href="../../archives/2009/04/03/index.php#e2009-04-03T17_34_38.txt">FahMon 2.3.99 Released </a>
- <!-- Releases --><a href="../../archives/releases/index.php">Releases</a><br />
<a href="../../archives/2009/01/index.php">2009-01</a>
- <a href="../../archives/2009/01/17/index.php#e2009-01-17T09_35_13.txt">FahMon IRC Channel now online</a>
- <!-- Website --><a href="../../archives/website/index.php">Website</a><br />
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
