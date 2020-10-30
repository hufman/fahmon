<a name="add_<?php echo $blog_id?>"></a>
<?php if ($conf_mod==1 && isset($done) && $_SESSION['logged'] != "True") {?>
<?php echo "<a id=\"a".bin2hex(date('g:ia', mktime(date("H")+$timeDiff,date("i"),date("s"),date("m"),date("d"),date("Y"))))."\" name=\"a".bin2hex(date('g:ia', mktime(date("H")+$timeDiff,date("i"),date("s"),date("m"),date("d"),date("Y"))))."\"></a>";?>
<div class="blogkcomments">
 <div class="blogkrow">
	<strong style="color: red"><? echo msg('thanks')?></strong><br/>
		<?php echo msg('comment_reviewed') ?>
    </div>
</div>
 <?}?>
<?php if ($forum!=1){?>	
<form method="post" name="comm" action="<?php echo $_SERVER['PHP_SELF']?>?show_id=<?echo $blog_id;?><?if (isset($QUERY_STRING)){echo "&amp;".$QUERY_STRING;}?>#add_<?echo $blog_id;?>">
<?php }?>
  <div class="blogkbox">
	<div class="blogkrow">
	<strong><?php echo msg('add_comment')?></strong><br/>
      <span class="blogkLeftClmn"><?php echo msg('name')?></span><span class="blogkRightClmn"><input type="text" name="comm_name" value="<?php if (isset($preview) || isset($edit)){echo stripslashes($pre_daten[3]);} elseif (!isset($edit) && !isset($preview)) {echo $comm_name;}?>" size="<?echo $form_cols?>" tabindex="1" maxlength="60"/></span>
    </div>
    <div class="blogkrow">
      <span class="blogkLeftClmn"><?php echo msg('e-mail')?></span><span class="blogkRightClmn"><input type="text" name="comm_e_mail" value="<?php if (isset($preview) || isset($edit)){echo stripslashes($pre_daten[4]);} elseif (!isset($edit) || !isset($preview)) {echo $comm_e_mail;}?>" size="<?echo $form_cols?>" tabindex="2" maxlength="60"/></span>
    </div>
    <div class="blogkrow">
      <span class="blogkLeftClmn"><?php echo msg('website')?></span><span class="blogkRightClmn"><input type="text" name="comm_website"  value="<?php if (isset($edit) || isset($preview)){ echo stripslashes($pre_daten[5]);} elseif (!isset($preview) || !isset($edit)) {echo $comm_website;} if ($comm_website==""){$comm_website="http://"; echo $comm_website;}?>" size="<?echo $form_cols?>" maxlength="60" tabindex="3" /></span>
    </div>
   <?php if ($conf_captcha==1 and $_SESSION['logged'] != "True"){?>
	<div class="blogkrow">
	    <span class="blogkLeftClmn"><?php echo msg('captcha')?></span><span class="blogkRightClmn">
 <img src="<?php echo $conf_captcha_path?>" class="captcha" alt="captcha, sorry" title="please reload page if you can not read"/>
<input type="text" name="captcha_input" value="<?php echo $_POST["captcha_input"]; if (isset($preview)) {echo $pre_daten[10];}?>" size="5" tabindex="4" maxlength="<?php echo $conf_captcha_length; ?>"/></span>
	</div>
   <?php }?>
    <div class="blogkrow">
      <span class="blogkLeftClmn"><?php echo msg('comment')?></span><span class="blogkRightClmn">
      <textarea name="comm_eintrag_raw" rows="<?php echo $form_rows?>" cols="<?php echo $form_cols-1?>" tabindex="4"><?php 
      	if (isset($preview) || isset($edit)) {
           
           switch ($html)
           	{
           	case "0":
           		$pre_daten[6] = br2nl($pre_daten[6]);
           		echo trim(strip_tags(stripslashes($pre_daten[6])));
           		break;
           	case "1":
           		echo  trim(stripslashes($pre_daten[6]));
           		break;
           	case "2":
           	    if (isset($preview)) {
           			$pre_daten[9] = br2nl($pre_daten[9]);
           			echo  trim(stripslashes($pre_daten[9]));
           			}
           		if (isset($edit)) {
           		    echo  trim(stripslashes($pre_daten[6]));
           		    }	
       			break;
           	}	
      	
           } 
           elseif (!isset($edit) || !isset($preview)) {
           echo trim(stripslashes($_POST["comm_eintrag_raw"]));
           }?></textarea>
           <br/>
           <input type="submit" name="button" value="<?echo msg('button_submit')?>" />
           <?php if ($_SESSION['logged'] != "True"){?><input type="submit" name="button" value="<?echo msg('button_preview')?>"/><br/><?}?>
		</span>
	</div>
	<div class="blogkrow">
	 <?php // checkbox: is cookie-function enabled? 

	    if ($user_mem==1){?><input type="checkbox" name="rem" value="1" checked="checked"/><?echo msg('remember_me')?><br/><?}?><?php if ($forum==1){?><input type="checkbox" name="notify_comment" value="1S" <?php if (strlen($pre_daten[7])>2) echo "checked=\"checked\"";?>/><?echo msg('discuss')?><br/><?}?>
		  <div align="center"><?php echo msg('privacy') ?>,<br />
		  <?php 
		  if 	 ($url_parse==1) 
		     	    echo msg('url_parse').", <br />" ;
		  if ($html==0)
		  			echo msg('html_not_permitted');
		  elseif ($html==2) 
		            echo msg('textile_permitted');
		  elseif ($html==1) 
		     echo msg('html_permitted');
		  ?>
		 </div>
		 <?php if ($conf_mod==1) {?><div align="center">
		 <?php echo msg('comment_reviewed') ?></div><?php }?>
	</div>
 </div>
 <div><a href="<?php echo $blog_home_url ?>"><?php echo $blog_home_link ?></a></div>
 <? if (isset($edit)) {?><input type="Hidden" name="post_edit" value="<?php echo $edit?>" /><?}?>
</form>