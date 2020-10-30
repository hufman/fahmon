
<h2>Step 1: Setup is checking your webserver</h2>
    
   <ul>
     <li>Your domain is at: <strong>http://<? echo $_SERVER["HTTP_HOST"]?></strong></li>
     <li>Your blog is at: http://<? echo $_SERVER["HTTP_HOST"]?> <strong> <? echo $blog_dir ?></strong></li>
     <li>Post-pages feature at blogger.com seems to be <? if ($postpages==true) {echo "<strong>enabled</strong>";} else {echo "<strong>disabled</strong>";}?> <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=3" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> </li>
     
     <? 
     for($i=(sizeof($check_bk)-1);$i>=0;$i--){?>
     <li><strong style="color:<? echo $check_bk[$i][0]?>"><? echo $check_bk[$i][1]?></strong></li>
     <?}
     ?>
   </ul>

<?
if ($_SESSION["BKSETUP"]=="exit"){?>
<p>The Setup found out, that you have run the setup once. For security reasons you have to login with your admin password first</p>

<form method="post" action="index.php">
  <fieldset class="nav">
	 <legend>Setup-Steps</legend>
      <label>Username <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=1" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> <? echo "<input type=\"text\" name=\"username\"  />"; ?></label>
    <label>Password<? echo "<input type=\"password\" name=\"password\"  /><br /><input type=\"hidden\" name=\"Submitted\" value=\"True\" /></label><input type=\"submit\" name=\"Submit\" />"; ?>
    </fieldset> 
</form>

<? }
else
{?>

<p>If you see no <strong style="color:red">red warnings</strong> <a target="_blank" href="http://www.blogkomm.com/help/index.php?id=2" onclick="window.open(this.href, 'popupwindow', 'width=520,height=420,scrollbars,resizable'); return false;" class="pophelp">?</a> and the paths are correct, everything should be fine. Proceed to blogkomm-configuration, Step 2</p> 
<p>
 <form method="post" action="index.php">
  <fieldset class="nav">
	 <legend>Setup-Steps</legend><? if ($recheck==true){?><label><input type="submit" name="reload" value="reload" onsubmit="location.reload() "/><strong style="color: red">check again</strong></label><?}?>
	 <label><input type="submit" name="step" <? if ($recheck==true){ echo "disabled=\"disabled\""; }?> value="Step 2"/>configure blogkomm on the next page</label><? if ($update==true){?><label><input type="submit" name="step" value="code snippets"/>skip configuration and proceed to template editing</label> <?}?> 
 </fieldset>
 </form>
</p>
<?}?>
