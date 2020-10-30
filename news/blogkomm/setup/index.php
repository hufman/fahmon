<?php 
/* This file is part of blogkomm 2.2 
 * (c) 2001,02,03,04 Holger Kreis, Cologne Germany 
 * http://blogkomm.com 
 * This software is licensed under the CC-GNU GPL (http://creativecommons.org/licenses/GPL/2.0/)
 * june 18,  2005
 *
 * Please place a permanent link on your site to: http://www.blogkomm.com. thankyou. 
 */


 session_name('BKSETUP');
 session_start();
 if(!isset($_SESSION["BKSETUP"]) or !isset($_POST["step"])){
   $_SESSION["BKSETUP"]=1;
   }
 else {
   $_SESSION["BKSETUP"]=$_POST["step"];
   }
 
 // defining paths
 $current_path_arr = pathinfo(dirname(__FILE__));
 $blogkomm_path_arr= pathinfo(dirname(dirname(__FILE__)));
 
 define("BK_DIR",  $blogkomm_path_arr["basename"]);  
 define("SETUP_DIR",  $current_path_arr["basename"]);  
 define ("BK_PATH", $current_path_arr["dirname"]);
 $blog_path        = dirname(dirname(dirname(__FILE__)))."/";
 $blog_dir         = str_replace(BK_DIR."/".SETUP_DIR, "", dirname($_SERVER['PHP_SELF']));
 $config_file_path = BK_PATH."/module/conf";
 $comments_path    = BK_PATH."/comments.txt";
 $lang_path        = BK_PATH."/module/language";
 
 
 
 
// checking permissions  
  if (!is_writable(BK_PATH)) {
    $check_bk[]= array("red","\"".BK_DIR."\"-directory is not writable. Please change the permissions with your FTP-Client");
    $recheck=true;
    }
 if (!is_writeable($comments_path)) {
    $check_bk[] = array("red","\"".BK_DIR."/comments.txt\" is not writeable. Please change the permissions with your FTP-Client");
    $recheck=true;
    } 

 if (!is_readable($config_file_path)) {
        $check_bk[]= array("red","\"".BK_DIR."/module/conf/\" is not readable. Please change the permissions with your FTP-Client");
        $recheck=true;
       }
 /*
 let's wait for php5 running on windows
 
 if (!is_executable($config_file_path)) {
        $check_bk[]= array("red","\"".BK_DIR."/module/conf/\" is not executable. Please change the permissions with your FTP-Client");
        $recheck=true;
       } 
 */
 if (!is_writeable($config_file_path)) {
    $check_bk[]= array("red","\"".BK_DIR."/module/conf/\" is not writeable. Please change the permissions with your FTP-Client");
    $recheck=true;
    }
  
 if (file_exists($config_file_path."/blogkomm_conf.php")) {
    $check_bk[]= array("#F48300","You want to change your configuration? The configuration-file exists already");
    $update=true;
  }

 if (!is_writeable($config_file_path."/blogkomm_conf.php") and $update==true) {
    $check_bk[]= array("red","\"".BK_DIR."/module/conf/blogkomm_conf.php\" is not writeable. Please change the permissions with your FTP-Client");
    $recheck=true;
    } 
 
 if (!is_readable($lang_path)) {
    $check_bk[]= array("red","The language-directory is not readable. Please change the permissions with your FTP-Client");
    $recheck=true;
    }
    

    
    if ($debug==1){
    echo"<pre>";
    print_r($check_bk);
    echo "</pre>";
    echo sizeof($check_bk);
    
    }
 
 
 //checking if user update or setup first time
 if (file_exists($config_file_path."/blogkomm_conf.php") and ($_SESSION['logged'] != "True") and $_SESSION["BKSETUP"]!=3 ){
    $_SESSION["BKSETUP"]="exit";
    include_once($config_file_path."/blogkomm_conf.php");
 } 
 // form submitted?
 if ($_POST['Submitted'] == "True") {

    if ($_POST['username'] == $_username && $_POST['password'] == $_password) {

      $_SESSION['logged']   = "True";
      $_SESSION['username'] = $_username;
      //okay let's update the config file
      $_SESSION["BKSETUP"]  =1;

    } 
 }
 
 
 
 // checking for post-pages    
 $year=date(Y, time());
 $postpages_path=$blog_path.$year;
 $postpages= is_dir($postpages_path);
 //debug-mode for support
 if ($debug==1){
 echo "<ul>
        <li><strong>BK_PATH:</strong> ".BK_PATH."</li>
        <li><strong>blog_path:</strong> ".$blog_path."</li>
        <li><strong>blog_dir:</strong> ".$blog_dir."</li>
        <li><strong>postpages_path:</strong> ".$postpages_path."</li>
        <li><strong>postpages_true??</strong> ".$postpages."</li>
        <li><strong>config_file_path:</strong> ".$config_file_path."</li>
        <li><strong>lang_path:</strong> ".$lang_path."</li>
        <li><strong>comments_path:</strong> ".$comments_path."</li>
       </ul>"; }
?>

<?include("includes/head.php")?>
<body>
<div id="container">

<?
/* handle each step */
switch ($_SESSION["BKSETUP"]) {
 case "exit":
    include("includes/step3_1.php");
    break;
 case 1:
    include("includes/step3_1.php");
    break;
 case "finish":
    include("includes/step3_1.php");
    break;
 case "reload":
    include("includes/step3_1.php");
    break;
 case "Step 2":
    include("includes/step3_2.php");
    break;
 case "ok":
    include("includes/step3_3.php");
    break;
 case "code snippets":
    include("includes/step3_4.php");
    break;
 case 3:
    include("includes/step3_4.php");
    break;
   }
?>
</div>

</body>
</html>