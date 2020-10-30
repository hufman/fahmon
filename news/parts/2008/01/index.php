<div class="item">
	<a id="e2008-01-31T06_20_26.txt"></a>
	<h2 class="date">Thu Jan 31 06:20:26 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">FahMon-2.3.2beta3 ready for testing</h3>
		<div class="item-description">
			<p>This is the third and hopefully final unsupported beta for FahMon 2.3.2 to clear up some additional 
reported bugs.</p>
<p>This release fixes an issue with the download time and effective rate calculations which were being 
translated by incorrect amounts from UTC by the timezone logic. An issue which caused FahMon to crash at 
the end of perculiar WUs have also been dealt with.</p>
<p>Assuming this beta is stable, and I can get all the outstanding translations back in a timely fashion, 
2.3.2 should be released publicly sometime next week. There are a number of documentation files that need 
to be altered in the meantime.</p>
<p>As always, report bugs in this release using trac: <a 
href="http://trac.fahmon.net/">http://trac.fahmon.net</a>.</p>
<b>Download:</b>
<a href="http://fahmon.net/downloads/testing/FahMon-2.3.2beta3.zip">Windows</a>
<a href="http://fahmon.net/downloads/testing/FahMon-2.3.2beta3.tar.bz2">Linux/Source</a>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../archives/2008/01/31/index.php#e2008-01-31T06_20_26.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../archives/development/index.php">Development</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2008/01/31/index.php#e2008-01-31T06_20_26.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/01/31/index.php#e2008-01-31T06_20_26.txt', PHP_URL_PATH); 
 $blog_id='e2008-01-31T06_20_26.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
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
| <a class="link" href="../../../archives/2008/01/26/index.php#e2008-01-26T17_29_56.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../archives/development/index.php">Development</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2008/01/26/index.php#e2008-01-26T17_29_56.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/01/26/index.php#e2008-01-26T17_29_56.txt', PHP_URL_PATH); 
 $blog_id='e2008-01-26T17_29_56.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
<div class="item">
	<a id="e2008-01-25T12_54_12.txt"></a>
	<h2 class="date">Fri Jan 25 12:54:12 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">Known bugs in 2.3.2beta</h3>
		<div class="item-description">
			There have been a couple of reports of undocumented bugs in the 2.3.2beta release which have now been 
fixed in SVN. It is likely that a beta2 will be released in the near future to check that these bugs are 
no longer present.
<ul>
<li>FahMon will crash if the project database doesn't contain project info for a WU it is monitoring.
<li>The simple web output erroneously adds an extra "points" string to the credit field.
<li>Several text items on all web output files cannot be translated.
</ul>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../archives/2008/01/25/index.php#e2008-01-25T12_54_12.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../archives/development/index.php">Development</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2008/01/25/index.php#e2008-01-25T12_54_12.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/01/25/index.php#e2008-01-25T12_54_12.txt', PHP_URL_PATH); 
 $blog_id='e2008-01-25T12_54_12.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
<div class="item">
	<a id="e2008-01-24T07_54_51.txt"></a>
	<h2 class="date">Thu Jan 24 07:54:51 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">FahMon-2.3.2beta ready for translating</h3>
		<div class="item-description">
			This is just to trigger the translations RSS feed. For the full release info see: <a 
href="http://fahmon.net/news/archives/2008/01/24/index.html#e2008-01-24T07_51_17.txt">FahMon 2.3.2beta 
ready for testing</a>.
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../archives/2008/01/24/index.php#e2008-01-24T07_54_51.txt">Permanent Link</a>
| Categories: <!-- Translations --><a href="../../../archives/translations/index.php">Translations</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2008/01/24/index.php#e2008-01-24T07_54_51.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/01/24/index.php#e2008-01-24T07_54_51.txt', PHP_URL_PATH); 
 $blog_id='e2008-01-24T07_54_51.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
<div class="item">
	<a id="e2008-01-24T07_51_17.txt"></a>
	<h2 class="date">Thu Jan 24 07:51:17 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">FahMon 2.3.2beta ready for testing</h3>
		<div class="item-description">
			<p>This is an unsupported beta release of FahMon to check a number of bug fixes to allow me to close 
various support tickets.</p>
<p>The specific behaviour that needs testing is as follows:</p>
<ul>
<li>Do 50 frame DGromacs WUs now report PPD and ETA correctly?
<li>Does reloading client information still cause high CPU usage in Windows?
<li>Does FahMon still enter a state that uses 100% CPU time when left running for several days on Windows?
<li>Do client locations still get corrupted when monitoring large (> ~30) numbers of clients (Windows or 
Linux)?
</ul>
<p>If you test this release please comment on the above bugs using the bug tracking system.</p>
<p>For the full list of changes so far please refer top the changelog for this release, and also check the 
tickets that have been reported for this release <a 
href="http://trac.fahmon.net/query?status=new&status=assigned&status=reopened&status=closed&group=status&milestone=2.3.2&order=priority">here</a></p>
<p>One bug that has not yet been fixed is ticket #77 where the web output is displayed incorrectly in IE 
7. This will be fixed in the official release.</p>
<br />
<p>This release also represents the an opportunity for translators to update the translation files ready 
for the official release. This time there are only very minor changes to the files required.<br/>
Any budding web designers may want to try out the templating system in this release too</p>
<b>Download:</b>
<a href="http://fahmon.net/downloads/testing/FahMon-2.3.2beta.zip">Windows</a>
<a href="http://fahmon.net/downloads/testing/FahMon-2.3.2beta.tar.bz2">Linux/Source</a>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../archives/2008/01/24/index.php#e2008-01-24T07_51_17.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../archives/development/index.php">Development</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2008/01/24/index.php#e2008-01-24T07_51_17.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/01/24/index.php#e2008-01-24T07_51_17.txt', PHP_URL_PATH); 
 $blog_id='e2008-01-24T07_51_17.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
<div class="item">
	<a id="e2008-01-19T19_05_59.txt"></a>
	<h2 class="date">Sat Jan 19 19:05:59 CST 2008</h2>
	<div class="blogbody">
		<h3 class="title">Web templating system</h3>
		<div class="item-description">
			<p>In order to fix some serious bugs in the web output system (and the rather stupid object code it 
generated), I've adapted it to use a templating system.</p>
<p>This makes it easier to fix bugs in the pages generated, like the current IE7 rendering issue with 
the fancy output page. Another upside of this is that now you, the end user, can make your own 
templates and make the output pages appear just how you want them.</p>
<p>For the moment you can still only generate 3 pages, and the template filenames are fixed, but you 
can still edit the predefined template as you see fit. Future revisions may allow you to specify the 
template file to use for the output page. Also, if you make a particularly nice output page, submit it 
in a ticket and I'll consider including it with the next FahMon release.</p>
<p>Template files are stored within the templates subdirectory of your FahMon installation on Windows, 
and you can edit these directly. On Linux, the templates are installed to /usr/share/fahmon/templates 
or /usr/local/share/fahmon/templates by default. However, if you want to modify these, make a new 
directory inside your .fahmon/ config folder called "templates" and copy them there.</p>
<p>To check out these modifications now, checkout the latest revision from svn (source only). To learn how 
to use the templates, have a look at this file: <a href="http://trac.fahmon.net/browser/trunk/TEMPLATE_SYNTAX?format=raw">http://trac.fahmon.net/browser/trunk/TEMPLATE_SYNTAX?format=raw</a>.</p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../archives/2008/01/19/index.php#e2008-01-19T19_05_59.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../archives/development/index.php">Development</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2008/01/19/index.php#e2008-01-19T19_05_59.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/01/19/index.php#e2008-01-19T19_05_59.txt', PHP_URL_PATH); 
 $blog_id='e2008-01-19T19_05_59.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
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
| <a class="link" href="../../../archives/2008/01/08/index.php#e2008-01-08T07_28_31.txt">Permanent Link</a>
| Categories: <!-- Releases --><a href="../../../archives/releases/index.php">Releases</a>
<!--<a href="../../../../cgi-bin/cgicomment.cgi?article=archives/2008/01/08/index.php#e2008-01-08T07_28_31.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/01/08/index.php#e2008-01-08T07_28_31.txt', PHP_URL_PATH); 
 $blog_id='e2008-01-08T07_28_31.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
