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

<title>Development Archives | FahMon News</title>

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
<link rel="alternate" type="application/atom+xml"
title="Atom 1.0: Development"
href="../../archives/development/index-atom.xml"
/>
<link rel="alternate" type="application/rss+xml"
title="RSS 2.0: Development"
href="../../archives/development/index-rss.xml"
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
		<a id="top"></a>
		<h2>Development Archives</h2>
		<div id="menu">
			<a href="../../index.php">Main</a> &#62;
			<a href="../../archives/index.php">Archives</a> &#62;
			<br />
			Development
		</div>
		<div class="archives">
			<a href="../../archives/2008/06/index.php">2008-06</a> -
<a class="link" href="../../archives/2008/06/16/index.php#e2008-06-16T11_48_49.txt">Upcoming developments and contributions</a>
- <!-- Development --><a href="../../archives/development/index.php">Development</a>
<br />
<a href="../../archives/2008/02/index.php">2008-02</a> -
<a class="link" href="../../archives/2008/02/16/index.php#e2008-02-16T13_00_04.txt">Important info for users running 2.3.2a on Windows</a>
- <!-- Development --><a href="../../archives/development/index.php">Development</a>
<br />
<a href="../../archives/2008/01/index.php">2008-01</a> -
<a class="link" href="../../archives/2008/01/31/index.php#e2008-01-31T06_20_26.txt">FahMon-2.3.2beta3 ready for testing</a>
- <!-- Development --><a href="../../archives/development/index.php">Development</a>
<br />
<a href="../../archives/2008/01/index.php">2008-01</a> -
<a class="link" href="../../archives/2008/01/26/index.php#e2008-01-26T17_29_56.txt">FahMon-2.3.2beta2 ready for testing</a>
- <!-- Development --><a href="../../archives/development/index.php">Development</a>
<br />
<a href="../../archives/2008/01/index.php">2008-01</a> -
<a class="link" href="../../archives/2008/01/25/index.php#e2008-01-25T12_54_12.txt">Known bugs in 2.3.2beta</a>
- <!-- Development --><a href="../../archives/development/index.php">Development</a>
<br />
<a href="../../archives/2008/01/index.php">2008-01</a> -
<a class="link" href="../../archives/2008/01/24/index.php#e2008-01-24T07_51_17.txt">FahMon 2.3.2beta ready for testing</a>
- <!-- Development --><a href="../../archives/development/index.php">Development</a>
<br />
<a href="../../archives/2008/01/index.php">2008-01</a> -
<a class="link" href="../../archives/2008/01/19/index.php#e2008-01-19T19_05_59.txt">Web templating system</a>
- <!-- Development --><a href="../../archives/development/index.php">Development</a>
<br />
<a href="../../archives/2007/11/index.php">2007-11</a> -
<a class="link" href="../../archives/2007/11/17/index.php#e2007-11-17T10_34_27.txt">Stability updates</a>
- <!-- Development --><a href="../../archives/development/index.php">Development</a>
<br />
<a href="../../archives/2007/10/index.php">2007-10</a> -
<a class="link" href="../../archives/2007/10/15/index.php#e2007-10-15T13_06_49.txt">OS X Port in development</a>
- <!-- Development --><a href="../../archives/development/index.php">Development</a>
<br />
<a href="../../archives/2007/10/index.php">2007-10</a> -
<a class="link" href="../../archives/2007/10/05/index.php#e2007-10-05T09_08_52.txt">Latest development release</a>
- <!-- Development --><a href="../../archives/development/index.php">Development</a>
<br />
		</div>
		<div class="pagenav" align="center">
			
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
