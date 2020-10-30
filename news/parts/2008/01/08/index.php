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
