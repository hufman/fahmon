<div class="item">
	<a id="e2007-10-15T13_06_49.txt"></a>
	<h2 class="date">Mon Oct 15 13:06:49 CDT 2007</h2>
	<div class="blogbody">
		<h3 class="title">OS X Port in development</h3>
		<div class="item-description">
			<p>Given that the wxWigets library is supposed to be a platform independent API, and since FahMon already 
exists for Windows and Linux, why can't it exist for OS X too?</p>
<p>Well the answer is, it can!</p>
<p>Thanks to some prodding from Shello from P@F, I've started modifying the platform dependent 
portions of FahMon to be compatible with OS X, using a Mac that I've been able to get my hands on. 
Shello has also graciously offered to help in this regard with his Mac.</p>
<p>Currently the state of the port is quite early on. The source compiles and runs on OS X, but there 
are still a large number of bugs, mainly due to the difference in the way OS X handles application 
frames etc. Some of the bugs at the moment seem to be a bit strange in their behaviour, like crashing 
when you right-click the client list for example.</p>
<p>I'm fairly confident that these can be resolved in short order though, once I understand what is 
causing the problem.</p>
<p>The OS X conversion is taking place in parallel to the existing Windows and Linux versions, so if I 
accidentally break something in the OS X build, it won't affect the Windows or Linux versions until 
the conversion is complete, by which time everything should work.</p>
<p>Here's a little screenshot of what it looks like so far:</p>
<img src="http://fahmon.net/images/fahmon_osx.png" />
<p>Once the conversion becomes a little more stable I'll start releasing binary test builds, but at 
the moment given it's infancy and instability, the only way you can access it is from the svn 
repository.</p>
<pre>svn co http://fahmon.net/branches/mactest FahMon_mac</pre>
<p>To actually compile FahMon, you'll need Xcode and wxWidgets compiled as a static library (only 
required for build-time, not run-time). The best place to find information on how to get this is on 
the <a href="http://www.wxwidgets.org/wiki/index.php/Getting_started_on_OS_X">wxWidgets wiki</a><br 
/>After that it's just a case of 
running<pre>./configure
make
make FahMon.app</pre>At which point you should have a FahMon application bundle!</p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2007/10/15/index.php#e2007-10-15T13_06_49.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../../archives/development/index.php">Development</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2007/10/15/index.php#e2007-10-15T13_06_49.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2007/10/15/index.php#e2007-10-15T13_06_49.txt', PHP_URL_PATH); 
 $blog_id='e2007-10-15T13_06_49.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
<div class="item">
	<a id="e2007-10-15T12_41_20.txt"></a>
	<h2 class="date">Mon Oct 15 12:41:20 CDT 2007</h2>
	<div class="blogbody">
		<h3 class="title">Prerelease build ready for translating</h3>
		<div class="item-description">
			<p>FahMon version 2.3.1pre is now ready for translators to update the translations ready for the 
upcoming 2.3.1 release.</p>
<p>For existing translations there are an additional 20 strings that need translating.</p>
<p>If FahMon doesn't exist in in your native language, and you'd like it to, now is an excellent time 
to start translating it.</p>
<p>The links to use are:<br />Windows <a 
href="http://fahmon.net/downloads/testing/FahMon-2.3.1pre.zip">http://fahmon.net/downloads/testing/FahMon-2.3.1pre.zip</a><br 
/>Linux <a 
href="http://fahmon.net/downloads/testing/FahMon-2.3.1pre.tar.bz2">http://fahmon.net/downloads/testing/FahMon-2.3.1pre.tar.bz2</a></p>
<p>The information you'll need for submitting translations etc, can be found <a 
href="http://trac.fahmon.net/wiki/TranslatingFahMon">here</a>.</p>
<p>I'm quite happy for non-translators to use these builds, however, they are not, and never will be 
supported in any way (and you'll be missing any updated or new translations).<br />If you want to stay 
supported, wait until the official release is announced.</p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2007/10/15/index.php#e2007-10-15T12_41_20.txt">Permanent Link</a>
| Categories: <!-- Translations --><a href="../../../../archives/translations/index.php">Translations</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2007/10/15/index.php#e2007-10-15T12_41_20.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2007/10/15/index.php#e2007-10-15T12_41_20.txt', PHP_URL_PATH); 
 $blog_id='e2007-10-15T12_41_20.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
