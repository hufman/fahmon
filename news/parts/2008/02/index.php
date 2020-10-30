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
| <a class="link" href="../../../archives/2008/02/16/index.php#e2008-02-16T13_00_04.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../archives/development/index.php">Development</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2008/02/16/index.php#e2008-02-16T13_00_04.txt#comments" target="_blank" >Comments</a>//-->
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
| <a class="link" href="../../../archives/2008/02/16/index.php#e2008-02-16T07_37_10.txt">Permanent Link</a>
| Categories: <!-- Releases --><a href="../../../archives/releases/index.php">Releases</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2008/02/16/index.php#e2008-02-16T07_37_10.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/02/16/index.php#e2008-02-16T07_37_10.txt', PHP_URL_PATH); 
 $blog_id='e2008-02-16T07_37_10.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
<div class="item">
	<a id="e2008-02-11T12_06_33.txt"></a>
	<h2 class="date">Mon Feb 11 12:06:33 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">Comments system added</h3>
		<div class="item-description">
			<p>I'm trying out a comment system for the news section of the site, so feel free to use it if you 
will.<br />The captcha can sometimes appear completely unreadable, so I recommend you refresh the page 
until it is readable and <i>then</i> start writing your comments.<br />Hopefully I can get that fixed.</p>
<p>The software powering the comments is a nifty set of php scripts called <a 
href="http://blogkomm.com/">blogkomm</a> which I've integrated into nanoblogger.</p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../archives/2008/02/11/index.php#e2008-02-11T12_06_33.txt">Permanent Link</a>
| Categories: <!-- Website --><a href="../../../archives/website/index.php">Website</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2008/02/11/index.php#e2008-02-11T12_06_33.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/02/11/index.php#e2008-02-11T12_06_33.txt', PHP_URL_PATH); 
 $blog_id='e2008-02-11T12_06_33.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
<div class="item">
	<a id="e2008-02-11T12_00_45.txt"></a>
	<h2 class="date">Mon Feb 11 12:00:45 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">New/updated translations available</h3>
		<div class="item-description">
			<p>The download page has been updated with links to the v2.3.2 translations for Portuguese (pt_PT) and 
German (de_DE). Thanks to Mark Gerber for the German translation.</p>
<p>Installation for Windows is simple, but for Linux it can be a bit more tricky. Read the wiki page 
linked on the download page for precise instructions.</p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../archives/2008/02/11/index.php#e2008-02-11T12_00_45.txt">Permanent Link</a>
| Categories: <!-- Translations --><a href="../../../archives/translations/index.php">Translations</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2008/02/11/index.php#e2008-02-11T12_00_45.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/02/11/index.php#e2008-02-11T12_00_45.txt', PHP_URL_PATH); 
 $blog_id='e2008-02-11T12_00_45.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
<div class="item">
	<a id="e2008-02-08T16_07_42.txt"></a>
	<h2 class="date">Fri Feb  8 16:07:42 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">FahMon 2.3.2 released</h3>
		<div class="item-description">
			<p>At long last FahMon 2.3.2 is now available!<br />To download this version visit the download page.</p>
<p>For a comprehensive list of changes please view the changelog which is linked to from the home page 
and the download page.</p>
<p>Here's a brief overview of what's new in this release:</p>
<ul>
<li>Lots of bug fixes in this release to make FahMon more stable, there should be
  far fewer instances of FahMon crashing for no apparent reason, and CPU usage
  whilst reloading clients has been decreased.
<li>Several bits of data are now retreived using core code from qd (Queue Dumper)
  <a href="http://linuxminded.xs4all.nl/?target=software-qd-tools.plc">
  http://linuxminded.xs4all.nl/?target=software-qd-tools.plc</a>.
<li>Web output is now completely configurable thanks to a new templating system
  which allows you to create custom output pages.
<li>Documentation should now be much more understandable.
</ul>
<p>Several translation updates were missed for this version, so if you notice missing translations 
whilst using FahMon and feel like updating them, send them along to me and I'll incorporate them into 
the builds on the website.</p>
<p>As always if you find any bugs in FahMon please report them using <a href="http://trac.fahmon.net/">
trac.<a/></p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../archives/2008/02/08/index.php#e2008-02-08T16_07_42.txt">Permanent Link</a>
| Categories: <!-- Releases --><a href="../../../archives/releases/index.php">Releases</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2008/02/08/index.php#e2008-02-08T16_07_42.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/02/08/index.php#e2008-02-08T16_07_42.txt', PHP_URL_PATH); 
 $blog_id='e2008-02-08T16_07_42.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
