<?php  
       echo "<div "; if ($conf_CssMod !=0 and $daten[4]==$blog_mail) echo "class=\"blogkcomments commentsMod\">"; elseif($style % 2) echo "class=\"blogkcomments commentsEven\">";   else echo "class=\"blogkcomments commentsOdd\">";?>
	   <?php if ($forum==1 and $daten[7] != ""){?><input type="hidden" name="tell[]" value="<? echo $daten[7];?>"/><?}?> 
	   <?php echo "<a id=\"a".bin2hex($daten[2])."\" name=\"a".bin2hex($daten[2])."\"></a>";?>
	   
	   <?php if (isset($preview)) // here is the preview alternative happening
          {?>
	      <div class="blogkrow">
				<strong>preview:</strong><br/>
					<input type="hidden" name="$_POST[tell]" value="<? echo $_POST[tell]?>"/>
		  </div>
          <?} elseif ($_SESSION['logged'] == "True" && isset($edit)){?>
          <div class="blogkrow">
			   <strong style="color: red">Admin-Mode:</strong><br/>
          </div>
          <?}?>
          <div class="blogkrow">
				 <?php if ($conf_grav==1){?><img src="<?php gravatar($daten[4])?>" alt="gravatar" class="gravatar"/><?}?><? echo stripslashes($daten[6]); // the comment ?>
          </div>
		  <div class="blogkrow">
					<?php if (strstr($daten[5],".")){ echo "<a href=\"".$daten[5]."\" class=\"bkVisitor\" target=\"".$targetWin."\">".$daten[3]."</a>"; } else { echo "<span class=\"bkVisitor\">".$daten[3]."</span>";}?>, <? echo $daten[1].", ".$daten[2];?><?php if ($daten[4] != "" and strstr($daten[4],"@") and $_SESSION['logged'] == "True"){?> [<a href="mailto:<? echo $daten[4]?>">@</a>]<?}?><? if ($permalink==1){ echo " <a href=\"".$daten[8]."?show_id=".$blog_id."#a".bin2hex($daten[2])."\">#</a>";}?>
					<?php if ($_SESSION['logged'] != "" && !isset($edit)){
					
          		              echo "<div align=\"center\">";
          		              echo "<a style=\"color: red\" title=\"blow it away\" href=\"".$daten[8]."?show_id=".$blog_id."&amp;del=".$i."#a".bin2hex($daten[2])."\" onclick=\"javascript:confirm('you really want to delete this comment?')\">delete</a> |";
		                      echo " <a style=\"color: red\" title=\"edit in form below\" href=\"".$daten[8]."?show_id=".$blog_id."&amp;edit=".$i."#a".bin2hex($daten[2])."\">edit</a>"; 
		                      
		                      if ($_SESSION['logged'] != "" && !isset($edit) && $daten[9]==1){
		                         echo " | <a style=\"color: red\" title=\"show comment for everyone\" href=\"".$daten[8]."?show_id=".$blog_id."&amp;mod=".$i."#a".bin2hex($daten[2])."\">approve</a>"; 
		                        }
		                      echo "</div>";
		                  }?>
		  </div>
	    </div>