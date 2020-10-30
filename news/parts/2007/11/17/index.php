<div class="item">
	<a id="e2007-11-17T10_34_27.txt"></a>
	<h2 class="date">Sat Nov 17 10:34:27 CST 2007</h2>
	<div class="blogbody">
		<h3 class="title">Stability updates</h3>
		<div class="item-description">
			<p>Starting with FahMon 2.3.2, several pieces of data crucial to FahMon's operation will now be 
obtained directly from queue.dat, since this is the only reliable source for these data.</p>
<p>To this end, some of the core code from qd has been ported into FahMon to access data from the 
queue in a tried and trusted fashion.</p>
<p>My thanks go to Dick Howell and Bas Couwenberg for this code.</p>
<p>With the introduction of qd into FahMon, the messages windows now displays the following licence text 
upon startup:</p>
<pre>FahMon <version> is licenced under the GNU GPL v2
Copyright (C) 2003-2007 Francois Ingelrest
Copyright (C) 2007 Andrew Schofield
   
FahMon contains code from qd, also licenced under the GNU GPL v2
Copyright (C) 2002-2005 Richard P. Howell IV.
Copyright (C) 2005-2007 Sebastiaan Couwenberg</pre>
<p>The overall upshot of these changes is that FahMon should be much more stable, and no longer crash 
or mangle machine names when monitoring large numbers of clients.</p>
		</div>
	</div>

	<div class="posted">
		<br />Posted by <span class="item-creator">Andrew Schofield</span>
| <a class="link" href="../../../../archives/2007/11/17/index.php#e2007-11-17T10_34_27.txt">Permanent Link</a>
| Categories: <!-- Development --><a href="../../../../archives/development/index.php">Development</a>
<!--<a href="../../../../../cgi-bin/cgicomment.cgi?article=archives/2007/11/17/index.php#e2007-11-17T10_34_27.txt#comments" target="_blank" >Comments</a>//-->
<?php
 $post_url=parse_url('http://fahmon.net/news/archives/2007/11/17/index.php#e2007-11-17T10_34_27.txt', PHP_URL_PATH); 
 $blog_id='e2007-11-17T10_34_27.txt';
 $blog_mail='andrew_s@fahmon.net';
 define (BK_PATH, "/home/salamander/webapps/fahmon/news/blogkomm");
 include (BK_PATH."/module/blogkomm_show_link.php");
?>
	</div>
</div>
