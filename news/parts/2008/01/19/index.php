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
| <a class="link" href="../../../../archives/2008/01/19/index.php#e2008-01-19T19_05_59.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../../archives/development/index.php">Development</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2008/01/19/index.php#e2008-01-19T19_05_59.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2008/01/19/index.php#e2008-01-19T19_05_59.txt', PHP_URL_PATH); 
 $blog_id='e2008-01-19T19_05_59.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
