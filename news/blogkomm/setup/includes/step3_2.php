<?
//open and read language directory for selectbox
if (is_readable($lang_path)) {
  $handle=opendir($lang_path);
  $l=0;
  while (false !==($file = readdir($handle))) {
    if ($file != "." && $file != ".."){
      $lang[$l]=str_replace(".php", "", $file);
      $l++;
     }
  }
  closedir($handle);

} 

// function to generate random strings 
function RandomString($length=32)   { 
  $randstr=''; 
  srand((double)microtime()*1000000); 
  //our array add all letters and numbers if you wish
  $chars = array ( 'a','b','w','$','e','f','h','x','%','6','k','t'); 
  for ($rand = 0; $rand <= $length; $rand++) 
  	{ 
		$random = rand(0, count($chars) -1); 
		$randstr .= $chars[$random]; 
	} 
	return $randstr; 
} 
?>



<h2>Step 2: Configuration</h2>
    
<p>Please configure blogkomm for your needs. You can update your configuration, too. The config-file <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=4" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> will be overwritten</p>

<form method="post" name="bk_config" action="index.php">
   <fieldset>
	 <legend>Presentation</legend>
	 <label for="conf_html">Allow / Disallow HTML / Textile  <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=5" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> 
	 	<select name="conf_html" id="conf_html" />
	    	<option value="0" selected>no html</option>
	    	<option value="1">allow html</option>
	    	<option value="2">use Textile</option>
	   	</select>
      </label>
      
	 <label for="Auto-Link URLs">Auto-Link URLs if HTML disallowed <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=6" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a>	    <input type="checkbox" name="conf_urlparse" id="conf_urlparse" value="1" onClick="document.bk_config.conf_html.checked = false"/>
     </label>
     
	 <label for="Input-Fields Columns">Input-Fields-Size (Textarea-Columns) 
	   <input type="text" name="conf_form_cols" id="conf_form_cols" size="3" value="20" />
     </label>
     
	 <label for="Textarea Rows">Textarea Rows 
	   <input type="text" name="conf_form_rows" id="conf_form_rows" size="3" value="10" />
     </label>

     
     <label for="Your blog-start-page">Your Blog URL
	   <input type="text" name="conf_homelink" id="conf_homelink" value="http://<? echo $_SERVER["HTTP_HOST"].$blog_dir ?>" />
     </label>
     
     
     <label for="Blog URL Link-Text">Blog URL Link-Text <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=7" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> <input type="text" name="conf_homelink_des" id="conf_homelink_desc" value="&lt;&lt; home" />
     </label>
     
     <label for="Links open in">Links open in <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=8" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a>
       <select name="conf_targetwin" id="conf_targetwin"/>
	    <option value="_blank" selected>_blank</option>
	    <option value="_self">_self</option>
	    <option value="_top">_top</option>
	   </select>
      </label>
      <label for="Remember Users with Cookies">Remember Users with Cookies <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=9" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> 
	    <input type="checkbox" name="conf_usermem" id="conf_usermem" value="1" checked="checked" /> 
     </label>
     
     <label for="Interface Language">Interface Language <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=10" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> 
	   <select name="conf_lang"  id="conf_lang" />
	    <?
	    for($i=(sizeof($lang)-1);$i>=1;$i--)
	    {
	    $lang_val[$i]=$lang[$i];
	    if ($lang[$i]=="en"){$lang_val[$i]="en\" selected ";}
	    echo "<option value=\"".$lang_val[$i]."\">".$lang[$i]."</option>\n";
	    }
	    ?>
	    </select>
     </label> 
     
     <label for="provide permalink">Comments can have a permalink (unique URL) <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=11" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> <input type="checkbox" name="conf_permalink" id="conf_permalink" value="1" checked="checked" />
     </label>
     <label for="CSS commentsMod">CSS commentsMod class for Post-Authors comments <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=17" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> <input type="checkbox" name="conf_CssMod" id="conf_CssMod"  value="1"/>
     </label>
   </fieldset>
    
   <fieldset>
	 <legend>Administration and Configuration <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=12" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> </legend>
     <label for="username">Username
	   <input type="text" name="conf_username" id="conf_username" value="admin"/>
     </label>
     <label for="password">Password (preset to "admin")
	   <input type="password" name="conf_password" id="conf_password" value="admin"/>
     </label>
      <label for="Comments Moderation">Comments Moderation <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=15" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> 
	    <input type="checkbox" name="conf_mod" id="conf_mod" value="1" />
     </label>
     <label for="Captchas">Captchas <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=18" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> <a target="_blank" href="http://en.wikipedia.org/wiki/Captcha" onclick="window.open(this.href, 'popupwindow', 'width=720,height=420,scrollbars,resizable'); return false;" class="pophelp">wikipedia</a> 
	    <input type="checkbox" name="conf_captcha" id="conf_captcha" value="1" <?php if (!extension_loaded('gd')) {echo "disabled=\"disabled\" title=\"You need the GD-Lib installed on your server which is not\"";} else {echo "checked=\"checked\"";} ?>/></label>
	  <label for="Captcha Start Count">Captcha Start Count<select name="conf_captcha_start"  id="conf_captcha_start" />
	    <option>1</option>
	    <option>2</option>
	    <option>3</option>
	    <option>4</option>
	    <option>5</option>
	    <option>6</option>
	    <option>7</option>
	    <option>8</option>
	    <option>9</option>
	    <option>10</option>
	    <option>11</option>
	    <option>12</option>
	    <option>13</option>
	    <option>14</option>
	    <option>15</option>
	    </select>
     </label>
    <input name="conf_captcha_junk" id="conf_captcha_junk" type="hidden" value="<? echo RandomString(128)?>"/></label>
    
 	<input name="conf_captcha_path" id="conf_captcha_path" type="hidden" value="<?php echo $blog_dir.BK_DIR?>/module/blogkomm_captcha.php"/></label>
  
   </fieldset>
   <fieldset>
	 <legend>Notification Services <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=13" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> </legend>
	 
	  <label for="yes">Do you want to receive a notification mail<br/> if someone posts a comment?<input type="checkbox" name="conf_notify" value="1" id="conf_notify" checked="checked" /></label>
	 <label for="yes">Discuss-Feature: Commenters may leave their e-mail<br /> to be alerted if other users comment<input type="checkbox" name="conf_discuss" value="1" id="conf_discuss" checked="checked"/></label>
     <label for="Mail-Validation">Mail-Validation<input type="checkbox" name="conf_mailvalid" value="1" id="conf_mailvalid" /></label>
   
   </fieldset>
   <fieldset>
	 <legend>Time/Date Settings  <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=14" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> </legend>
	  <label for="time-zone">time-zone offset
	   <select name="conf_time_diff"  id="conf_time_diff" />
	    <option>+8</option>
	    <option>+7</option>
	    <option>+6</option>
	    <option>+5</option>
	    <option>+4</option>
	    <option>+3</option>
	    <option>+2</option>
	    <option>+1</option>
	    <option selected>0</option>
	    <option>-1</option>
	    <option>-2</option>
	    <option>-3</option>
	    <option>-4</option>
	    <option>-5</option>
	    <option>-6</option>
	    <option>-7</option>
	    <option>-8</option>
      </select>
     </label> 

     <label for="time-format">Timestamp Format (AM/PM/24)
	   <select name="conf_timeform"  id="conf_timeform" />
	    <option value="12" selected>12</option>
	    <option value="24">24</option>
	  </select>
     </label>
	 <label for="date-format">Date Format
	   <select name="conf_dateform"  id="conf_dateform" />
	    <option value="eu" selected>dd/mm/yy</option>
	    <option value="us">mm/dd/yy</option>
	    <option value="int">yyyy-mm-dd</option>
	   </select>
     </label> 
   </fieldset>
      <fieldset>
	 <legend>Gravatar  <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=16" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> </legend>
	  <label for="Enable Gravatars">Enable Gravatars 	    <input type="checkbox" name="conf_grav" id="conf_grav" value="1" />
     </label>
     <label for="Gravatar Rating">Gravatar Rating
	  <select name="conf_grav_rating"  id="conf_grav_rating" />
	    <option value="" selected>default</option>
	    <option value="G">G</option>
	    <option value="PG">PG</option>
	    <option value="R">R</option>
	    <option value="R">X</option>
	   </select>
     </label>
     <label for="Gravatar Size">Gravatar Size
	  <select name="conf_grav_size" id="conf_grav_size" />
	    <option value="20">20px</option>
	    <option value="40" selected>40px</option>
	    <option value="80">80px</option>
	   </select>
     </label>
     <label for="Gravatar Border (Color)">Gravatar Border-Color (#)<input type="text" name="conf_grav_border" id="conf_grav_border" size="7" value=""/></label>
     <label for="Gravatar Default Image">Gravatar Default-Image-URL<input type="text" name="conf_grav_default" id="conf_grav_default" size="20" value="http://<? echo $_SERVER["HTTP_HOST"].$blog_dir ?>"/></label>
    </fieldset>
    <fieldset class="nav">
	  <legend>Setup-Steps</legend>
	  <label>write data to file?<input type="submit" name="step" value="ok"/></label>
    </fieldset>
</form>

