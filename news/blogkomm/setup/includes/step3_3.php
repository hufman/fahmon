<? 

 
 // filling empty checkboxes
 
 if (!isset($_POST[conf_html]))      $_POST[conf_html]=0;
 if (!isset($_POST[conf_notify]))    $_POST[conf_notify]=0;
 if (!isset($_POST[conf_mailvalid])) $_POST[conf_mailvalid]=0;
 if (!isset($_POST[conf_urlparse]))  $_POST[conf_urlparse]=0;
 if (!isset($_POST[conf_usermem]))   $_POST[conf_usermem]=0;
 if (!isset($_POST[conf_mailvalid])) $_POST[conf_mailvalid]=0;
 if (!isset($_POST[conf_discuss]))   $_POST[conf_discuss]=0;
 if (!isset($_POST[conf_permalink])) $_POST[conf_permalink]=0;
 if (!isset($_POST[conf_CssMod]))      $_POST[conf_CssMod]=0;
 if (!isset($_POST[conf_mod]))       $_POST[conf_mod]=0;
 if (!isset($_POST[conf_email_hide]))$_POST[conf_email_hide]=0;
 if (!isset($_POST[conf_grav]))      $_POST[conf_grav]=0;
 if (!isset($_POST[conf_captcha]))      $_POST[conf_captcha]=0; 

 // create config file
 
 $configString[] = "<?php";
 $configString[] = "";
 $configString[] = "/* you can change these variables, change the value but keep away from the \";\"*/";
 $configString[] = " // allow (1) or disallow hmtl (0)";
 $configString[] = " \$html           =".$_POST['conf_html']."; ";
 $configString[] = " ";
 $configString[] = " // if html disallowed: autoparse \"http://blah.com\" into a clickable link? (1)";
 $configString[] = " \$url_parse      =".$_POST['conf_urlparse']."; ";
 $configString[] = " ";
 $configString[] = " // here you have to set your blog-start-page ";
 $configString[] = " \$blog_home_url  =\"".$_POST['conf_homelink']."\";     ";
 $configString[] = " ";
 $configString[] = " // and the linktext for it below the form  ";
 $configString[] = " \$blog_home_link =\"".htmlentities($_POST['conf_homelink_des'])."\";     ";
 $configString[] = " ";     
 $configString[] = " // to be set for the homepage link [H] in the comments";
 $configString[] = " \$targetWin      =\"".$_POST['conf_targetwin']."\"; ";
 $configString[] = " ";
 $configString[] = " // Input Fiels Size (cols) in Form-Field";
 $configString[] = " \$form_cols      =\"".$_POST['conf_form_cols']."\"; ";
 $configString[] = " ";
 $configString[] = " // Textarea rows) in Form-Field";
 $configString[] = " \$form_rows      =\"".$_POST['conf_form_rows']."\"; ";
 $configString[] = " ";
 $configString[] = " // if you want to remember your user set it to \"1\" but make sure you got the additional";
 $configString[] = " // code in your blog-template for further instructions see readme-file or howto on blogkomm.com";
 $configString[] = " \$user_mem       =".$_POST['conf_usermem']."; ";
 $configString[] = " ";
 $configString[] = " // set the language (en, de, fr, pt, es, ... see blogkomm/module/language/xx.php for other languages)";
 $configString[] = " // please send translated languagefiles to holger@blogkomm.com ";
 $configString[] = " \$language       =\"".$_POST['conf_lang']."\";";
 $configString[] = " ";
 $configString[] = " // set to 1 if you want to give other blogger the chance to link directly to posted comments \"permalink-feature\"";
 $configString[] = " \$permalink      =".$_POST['conf_permalink'].";";
 $configString[] = " ";
 $configString[] = " // set to 1 if you want to distinguish between your comments by \"commentsMod\" class in blogkomm.css";
 $configString[] = " \$conf_CssMod      =".$_POST['conf_CssMod'].";";
 $configString[] = " ";
 $configString[] = " //admin settings";
 $configString[] = " //the admin-login is http://www.your-domain.com/..your-blog-directory../blogkomm/index.php";
 $configString[] = " \$_username      =\"".$_POST['conf_username']."\";  ";
 $configString[] = " \$_password      =\"".$_POST['conf_password']."\";   ";
 $configString[] = " ";
 $configString[] = " //Moderate Comments";
 $configString[] = " \$conf_mod      =".$_POST['conf_mod'].";   ";
 $configString[] = " ";
 
 $configString[] = " // you will get an e-mail notification (1) or don't (0)";
 $configString[] = " \$notify         =".$_POST['conf_notify']."; ";
 $configString[] = " ";
 $configString[] = " // if you want to use the blogkomm-discuss feature turn this to \"1\", if not turn it to 0";
 $configString[] = " \$forum          =".$_POST['conf_discuss']."; ";
 $configString[] = " ";
 $configString[] = " \$mail_valid     =".$_POST['conf_mailvalid']."; ";
 $configString[] = " // here you can set the time difference between your server and your \"real\" location (-x) or (+x)";
 $configString[] = " \$timeDiff=".$_POST['conf_time_diff']."; ";
 $configString[] = " ";
 $configString[] = " // choose between european date format \"eu\", international iso-like (yyyy-mm-dd) \"int\" or US-format \"us\"";
 $configString[] = " \$dateForm       =\"".$_POST['conf_dateform']."\"; ";
 $configString[] = " ";
 $configString[] = " // set it to 24 if you want the time to be displayed like 13:14 instead of 1:14 pm";
 $configString[] = " \$timeForm       =\"".$_POST['conf_timeform']."\"; ";
 $configString[] = " ";
 $configString[] = " ";
 $configString[] = " ";
 $configString[] = " // Gravatar Support (see http://gravatar.com);";
 $configString[] = " \$conf_grav              =\"".$_POST['conf_grav']."\"; ";
 $configString[] = " \$conf_grav_rating       =\"".$_POST['conf_grav_rating']."\"; ";
 $configString[] = " \$conf_grav_border       =\"".$_POST['conf_grav_border']."\"; ";
 $configString[] = " \$conf_grav_size         =\"".$_POST['conf_grav_size']."\"; ";
 $configString[] = " \$conf_grav_default      =\"".$_POST['conf_grav_default']."\"; ";
 $configString[] = " ";
 $configString[] = " ";
 $configString[] = " // captcha Support (see http://en.wikipedia.org/wiki/Captcha);";
 $configString[] = " \$conf_captcha              =".$_POST['conf_captcha']. "; ";
 $configString[] = " \$conf_captcha_start        =".$_POST['conf_captcha_start']."; ";
 $configString[] = " \$conf_captcha_length       =5;";
 $configString[] = " \$conf_captcha_path        =\"".$_POST['conf_captcha_path']."\"; ";
 $configString[] = " \$conf_captcha_junk        =\"".$_POST['conf_captcha_junk']."\"; ";
 
 $configString[] = "?>";
 
 if ($fp = fopen($config_file_path."/blogkomm_conf.php", "w")) {
	    foreach($configString as $line) {
     	  fwrite($fp, $line."\n");
        }
    }

?>

<h2>Step 2: Configuration</h2>

<? if (is_file($config_file_path."/blogkomm_conf.php")){?>

   <p>That went well. The configuration file was written. You can manually edit the file in "blogkomm/module/conf/" or run the setup again.</p>
   <p>Within the next step blogkomm will be included in your blog-template</p>
   <?}?>

 
  <form method="post" action="index.php">
   <fieldset class="nav">
	 <legend>Setup-Steps</legend>
      <label>include code in blog-template, proceed to Step <input type="submit" name="step" label="next" value="3"/></label>
      <label>Run the setup again to reconfigure the script or <input type="submit" name="step" value="finish"/></label>
 </fieldset>
 </form>
