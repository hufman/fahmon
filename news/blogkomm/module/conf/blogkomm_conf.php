<?php

/* you can change these variables, change the value but keep away from the ";"*/
 // allow (1) or disallow hmtl (0)
 $html           =0; 
 
 // if html disallowed: autoparse "http://blah.com" into a clickable link? (1)
 $url_parse      =0; 
 
 // here you have to set your blog-start-page 
 $blog_home_url  ="http://fahmon.net/news/";     
 
 // and the linktext for it below the form  
 $blog_home_link ="&lt;&lt; home";     
 
 // to be set for the homepage link [H] in the comments
 $targetWin      ="_blank"; 
 
 // Input Fiels Size (cols) in Form-Field
 $form_cols      ="60"; 
 
 // Textarea rows) in Form-Field
 $form_rows      ="10"; 
 
 // if you want to remember your user set it to "1" but make sure you got the additional
 // code in your blog-template for further instructions see readme-file or howto on blogkomm.com
 $user_mem       =1; 
 
 // set the language (en, de, fr, pt, es, ... see blogkomm/module/language/xx.php for other languages)
 // please send translated languagefiles to holger@blogkomm.com 
 $language       ="en";
 
 // set to 1 if you want to give other blogger the chance to link directly to posted comments "permalink-feature"
 $permalink      =1;
 
 // set to 1 if you want to distinguish between your comments by "commentsMod" class in blogkomm.css
 $conf_CssMod      =1;
 
 //admin settings
 //the admin-login is http://www.your-domain.com/..your-blog-directory../blogkomm/index.php
 $_username      ="uncle_fungus";  
 $_password      ="ihrg6ti5y";   
 
 //Moderate Comments
 $conf_mod      =0;   
 
 // you will get an e-mail notification (1) or don't (0)
 $notify         =1; 
 
 // if you want to use the blogkomm-discuss feature turn this to "1", if not turn it to 0
 $forum          =1; 
 
 $mail_valid     =0; 
 // here you can set the time difference between your server and your "real" location (-x) or (+x)
 $timeDiff=0; 
 
 // choose between european date format "eu", international iso-like (yyyy-mm-dd) "int" or US-format "us"
 $dateForm       ="int"; 
 
 // set it to 24 if you want the time to be displayed like 13:14 instead of 1:14 pm
 $timeForm       ="24"; 
 
 
 
 // Gravatar Support (see http://gravatar.com);
 $conf_grav              ="0"; 
 $conf_grav_rating       =""; 
 $conf_grav_border       =""; 
 $conf_grav_size         ="40"; 
 $conf_grav_default      ="http://fahmon.net/news/"; 
 
 
 // captcha Support (see http://en.wikipedia.org/wiki/Captcha);
 $conf_captcha              =1; 
 $conf_captcha_start        =1; 
 $conf_captcha_length       =5;
 $conf_captcha_path        ="/news/blogkomm/module/blogkomm_captcha.php"; 
 $conf_captcha_junk        ="bab%eekte%%kftkbka6bh%%ba%ttwttetbaeftek%a%bax$kxaaw6%ekee6x$6twtaxftt$xta6a%akeath6xtxaefxx$xk$xf%xfawfbaf6aebb$%ktxhttaxx$whh6t"; 
?>
