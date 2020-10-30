<?php
/* This file is part of blogkomm 2.3 beta 2 
 * http://blogkomm.com 
 * This software is licensed under the CC-GNU GPL (http://creativecommons.org/licenses/GPL/2.0/)
 * okt 09,  2005
 *
 */

 
define("COMM_FILE", BK_PATH."/comments.txt");
include_once(BK_PATH."/module/conf/blogkomm_conf.php");
include_once(BK_PATH."/module/language/$language.php");
include_once(BK_PATH."/module/blogkomm_show_functions.php");
$num=0;
$show_id	= $_GET["show_id"];
$done		= $_GET["done"];
$preview	= $_GET["preview"];
$edit		= $_GET["edit"];
$delete		= $_GET["delete"];
$button		= $_POST["button"];
?>

<?php

// the performance trick ... $open isn't set yet when the newest post is parsed:
// that means we open the file and write into the fcontents-array. then set $open to 1

       if (!isset($open) && !isset($preview) || isset($done)){    // open the usual text file
          $fp = fopen(COMM_FILE, 'a+');
	      $fcontents = file(COMM_FILE);
	      $open=1;
       }  
         
       elseif (!isset($open) && isset($preview)){  // open the preview text file
	        $fp = fopen(COMM_FILE.".new", "a+");
	        $fcontents = file(COMM_FILE.".new");
	        unlink(COMM_FILE.".new");
	        $open=1;	 
	   }
    
       elseif (!isset($open) && isset($edit)){
             $fp = fopen(COMM_FILE, 'a+');
	         $fcontents = file(COMM_FILE);
	         $open=1;
       }//open endif

?>
<a name="bk_<?echo $blog_id;?>"></a>




<?php if ($blog_id == $show_id)
	{?>
	<span class="blogkommlink">[ <a class="blogkommlink" <?if (!isset($done)){?>href="javascript:history.back()"<?} else {?>href="javascript:history.go(-2)"<?}?>><?echo msg('hide_comments')?></a> ]</span>
<?php if ($forum==1){?>
    <form method="post" name="comm" action="<?echo $_SERVER['PHP_SELF']?>?show_id=<?echo $blog_id;?>#add_<?echo $blog_id;?>">
	<?}?>
<?php }?>
<?php // starting to loop everything
    $style=0;
    for ($i = 0 ; $i <=sizeof($fcontents); $i++){
        
        $daten = explode(" | ", $fcontents[$i]);
        // reading the preview data (the last entry of the array) to have it in the form to be edited again
        
        if (isset($edit) && $i==$edit && $blog_id==$show_id){
		   $pre_daten = explode(" | ", $fcontents[$i]);
		   include (BK_PATH."/module/blogkomm_show_comments.php");    
		   break;
		}		
		if (isset($preview) && $blog_id==$show_id){
	       $pre_daten = explode(" | ", $fcontents[$i]);
		   include (BK_PATH."/module/blogkomm_show_comments.php");    
		   break;
		}
		//if mod_review is not set or admin mode, show comments or count
        if ($daten[9]==0 || !isset($daten[9]) || $_SESSION['logged']=="True"){ 
           if ($blog_id==$daten[0]  &&  ($show_id)==$daten[0] and !isset($edit)){
		      include (BK_PATH."/module/blogkomm_show_comments.php");       
              $style++;
              }
              elseif ($blog_id==$daten[0]){
              $num=$num+1;
            }
         }
    }
        
 //  link:  number of comments

  if  ($blog_id != $show_id && $num >1) {?>
  <span class="blogkommlink">[ <a class="blogkommlink" href="<?echo $post_url?>?show_id=<?echo $blog_id;?>#bk_<?echo $blog_id;?>"><?echo str_replace("%number%",$num, msg('some_comments'))?></a> ]</span>
  <?php } //  link:  if there are no comments so far
  if   ($blog_id != $show_id && $num == 0 ) {?>
	  <span class="blogkommlink">[ <a class="blogkommlink" href="<?echo $post_url?>?show_id=<?echo $blog_id;?>#bk_<?echo $blog_id;?>"><?echo msg('no_comments')?></a> ]</span>
    <?php } //  link:  if there is only one comment
if   ($blog_id != $show_id && $num ==1) {?>
     <span class="blogkommlink">[ <a class="blogkommlink" href="<?echo $post_url?>?show_id=<? echo $blog_id;?>#bk_<?echo $blog_id;?>"><?echo msg('one_comment')?></a> ]</span>
    <?php
}
?>



<?php  // form  
if ($blog_id == $show_id){
   include (BK_PATH."/module/blogkomm_form_comments.php");    
   }

// if one of the buttons was pressed and the page reloads, then do all the stuff in do_comments.php
	
if (isset($button) && $blog_id == $show_id) {
	require_once(BK_PATH."/module/blogkomm_do_comments.php"); 
	$comm_name        =trim($_POST["comm_name"]);
	$comm_e_mail      =trim($_POST["comm_e_mail"]);
	$comm_website     =trim($_POST["comm_website"]);
	$comm_eintrag_raw =trim($_POST["comm_eintrag_raw"]);
	$eingabe= array($comm_name,$comm_e_mail,$comm_website,$comm_eintrag_raw,$notify_comment);
	comments_eingaben($eingabe);     //switch to the other file 
    } elseif (isset ($del)){
    require_once(BK_PATH."/module/blogkomm_do_comments.php");
    delete_comments($del, $blog_id);  
    } elseif (isset ($mod)){
    require_once(BK_PATH."/module/blogkomm_do_comments.php");
    moderate_comments($mod, $blog_id); 
} 
?>