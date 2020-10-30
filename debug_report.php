<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Uncle,Fungus,Uncle_Fungus,uncle,fungus,fah,FAH,F@H,f@h,folding,wxwidgets,information,work-unit,fahmon" />
	<meta name="description" content="The cross-platform Folding@home client monitor" />
	<meta name="robots" content="index,follow" />
	<link rel="shortcut icon" href="./images/favicon.ico" />
	<title>Debug Report | FahMon</title>
	<link href="css/fahmon.css" rel="stylesheet" type="text/css" />
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
<li><a href="download.html">Download</a></li>
<li><a href="screenshots.html">Screenshots</a></li>
<li><a href="about.html">About</a></li>
<li><a href="news/">News</a></li>
<li><a href="http://trac.fahmon.net">Support &amp; Development</a></li>
</ul>
</div>
<br />
<div class="box_full">
<div id="main">
<h2>Submit a debug report for FahMon</h2>
<?PHP
if (isset($_POST['submitted'])) {
	if (isset($_FILES['debug_report']) && ($_FILES['debug_report']['error'] != 4 )) {
		$salt = md5(uniqid(time()));
		if (move_uploaded_file($_FILES['debug_report']['tmp_name'], "/home/salamander/webapps/fahmon/debug_reports/" . "[". $salt . "]" . $_FILES['debug_report']['name'] )) {
			?>
			<h3>The debug report has been sucessfully uploaded.</h3>
			<p>Please create a ticket in trac and include a link to the report here: <a href="http://fahmon.net/debug_reports/<? echo("[". $salt . "]" . $_FILES['debug_report']['name']);  ?>">debug report</a></p>
			<?PHP
			//unlink("/home/salamander/webapps/fahmon/debug_reports/" . "[". $salt . "]" . $_FILES['debug_report']['name']);
		} else {
			?>
			<p>Upload failed</p>
			<?PHP
		}
	} else {
	?>
	<p>No file was submitted, or there was an error with the file.</p>
	<?PHP
	}
} else {
?>
<p>To help improve FahMon, please use this form to submit the report files automatically generated when FahMon crashes.</p>
<form enctype="multipart/form-data" action="debug_report.php" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="524288" />
Debug report file:&nbsp;<input type="file" name="debug_report" style="height:20px;"/><br/><br/>
<input type="hidden" name="submitted" value="TRUE" />
<input type="submit" name="submit" value="Send debug report" style="height:20px;"/>
</form>
<?
}
?>
</div>
</div>
</div>
</div>
</body>
</html>
