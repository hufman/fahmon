<div class="item">
	<a id="e2008-01-26T17_29_56.txt"></a>
	<h2 class="date">Sat Jan 26 17:29:56 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">FahMon-2.3.2beta2 ready for testing</h3>
		<div class="item-description">
			<p>This is the second unsupported beta for FahMon 2.3.2 to test a number of new bug fixes.</p>
<p>The main bug fixed in this beta is the crash bug when project data is missing. A number of bugs related 
to the web output translations have also been fixed, but the WebApp output is still incompatible with IE7 
at this time.</p>
<p>There have been two reports of a bug relating to the manual timezone setting but I cannot replicate 
the bug so it needs to be tested more thoroughly.<br />The bug reports state that the manual timezone 
setting is not restored across restarts of FahMon, and that while the setting does not affect the 
effective PPD or ETA calculations resulting in incorrect information being displayed.</p>
<p>To reliably test this version please make sure that you trash prefs.dat beforehand (or install the 
beta to a separate location), and as always report bugs using trac: <a 
href="http://trac.fahmon.net/">http://trac.fahmon.net</a>.</p>
<b>Download:</b>
<a href="http://fahmon.net/downloads/testing/FahMon-2.3.2beta2.zip">Windows</a>
<a href="http://fahmon.net/downloads/testing/FahMon-2.3.2beta2.tar.bz2">Linux/Source</a>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2008/01/26/index.php#e2008-01-26T17_29_56.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../../archives/development/index.php">Development</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2008/01/26/index.php#e2008-01-26T17_29_56.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/01/26/index.php#e2008-01-26T17_29_56.txt', PHP_URL_PATH); 
 $blog_id='e2008-01-26T17_29_56.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
