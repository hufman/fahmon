<?php 
/* This file is part of blogkomm 2.2 
 * (c) 2001,02,03,04 Holger Kreis, Cologne Germany 
 * http://blogkomm.com 
 * This software is licensed under the CC-GNU GPL (http://creativecommons.org/licenses/GPL/2.0/)
 * june 18,  2005
 *
 * Please place a permanent link on your site to: http://www.blogkomm.com. thankyou. 
 */



session_start();

include_once("module/conf/blogkomm_conf.php");

// form submitted?
if ($_POST['Submitted'] == "True") {

    if ($_POST['username'] == $_username && $_POST['password'] == $_password) {

      $_SESSION['logged'] = "True";
      $_SESSION['username'] = $_username;
    } 
}
echo <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>blogkomm, admin-login</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <style type="text/css">
    @import url("blogkomm.css");
  </style>
 </head>
<body>
<div id="container">
<div class="blogkbox">
  	<div class="blogkrow">blogkomm 2.3: Admin-Login</div> 
    <div class="blogkrow"></div> 
</div>

EOD;
if ($_SESSION['logged'] != "True") {
?>

<form method="post" action="<?php  echo $_SERVER['PHP_SELF'] ?>">
<div class="blogkbox">
  	<div class="blogkrow">
	  <span class="blogkLeftClmn">username</span><span class="blogkRightClmn"><?php  echo "<input type=\"text\" name=\"username\"  />"; ?></span>
    </div>
    <div class="blogkrow">
	  <span class="blogkLeftClmn">password</span><span class="blogkRightClmn"><?php  echo "<input type=\"password\" name=\"password\"  /><br /><input type=\"hidden\" name=\"Submitted\" value=\"True\" /><input type=\"Submit\" name=\"Submit\" /> <br/><br/><a href=\"".$blog_home_url."\">Your weblog</a>";?></span>
    </div> 
    <div class="blogkrow"></div> 
</div>
</form>
</div>
<?php  }
else
{?>
<div class="blogkbox">
  	<div class="blogkrow"><?php 
    echo "You are logged in as: <strong>" . $_SESSION['username'] . "</strong><br/><a href=\"" . $_SERVER['PHP_SELF'] . "?mode=logout\">Logout</a><br /><br />You will find <strong style=\"color: red\">\"adminstration-links\"</strong> behind each comment in <a href=\"".$blog_home_url."\">your weblog</a>";?>
</div>
</div>    
<?php  }

// Logout
if ($_GET['mode'] == "logout") {
    // Start the session
    session_start();
    $_SESSION = array();
    session_destroy();
    echo "<META HTTP-EQUIV=\"refresh\" content=\"1; URL=" . $_SERVER['PHP_SELF'] . "\">";
}
?>
</div>
</body>
</html>
