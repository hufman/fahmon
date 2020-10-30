<?php
/* This file is part of blogkomm 2.3 beta 2 
 * http://blogkomm.com 
 * This software is licensed under the CC-GNU GPL (http://creativecommons.org/licenses/GPL/2.0/)
 * okt 09,  2005
 *
 */

	
// you can change these variables, change the value but keep away from the ";"
$number_recent=3;              // the number of newest, recent comments (shown at the top of the commentssection)
$recent_comments_words=5;      // change the number of words that are shown in the teaser
$permalink=1;                  // set to 1 if you want to give other blogger the chance to
                               // link directly to posted comments "permalink-feature

$read_all="read all";          // link-text "alles lesen", "lisez" in your language      
     
// but not these:

$comments_file=COMMENTS_PATH;
$num=0;
$fp = fopen($comments_file, 'a+');
$recent_fcontents = file($comments_file);


  /** 
  * Cut string to given words number. 
  * 
  * Example: 
  *  Êecho cutWords ( 'This, of course, is not the real copy for this advertisement', 2 ); 
  * 
  * @authorÊÊStephan Six 
  * @param string $str ( String to be cut ) 
  * @param integer $maxWords ( Words limit ) 
  * @param string $tail ( String to be appended ) 
  * @return string 
  */ 


 function cutWords ( $str = '', $maxWords = 1, $tail = '...' ) 
     { 
       // Regex pattern to find a given amount of word boundaries: 
      $pattern = sprintf ( '/^((.+?\b){%s}).*/', 2 * $maxWords - 1 ); 
      
      // Build the new String ( using $pattern ): 
     $newString = preg_replace ( $pattern, '$1', $str ); 
      
      // If $newString is different to $str then $newString appended with $tail will be returned, 
     // otherwise the orginal $str will be returned: 
      return $newString != $str ? $newString . $tail : $str; 
     } 


	
$rec_sum=0;
for ($rec = sizeof($recent_fcontents)-1; $rec>=0; $rec--)
    {
    
	$recent_all = explode(" | ", $recent_fcontents[$rec]);
    $longtext= strip_tags(stripslashes($recent_all[6]));           
    
     // exclude all invisible/approved comments depending on login status
     // increasing $rec_sum if conditions are true
     
     if ($recent_all[9]!=1 or $_SESSION['logged']=="True"){ 
        $rec_sum++;
        if ($rec_sum<=$number_recent){
	        echo "<div class=\"blogkcommentsrecent\">";
	        echo cutWords($longtext,$recent_comments_words)." <a href=\"".$recent_all[8]."?show_id=".$recent_all[0]."#a".bin2hex($recent_all[2])."\">".$read_all."</a><br/>".$recent_all[1]; echo " by <strong>".$recent_all[3]."</strong>"; echo ", ".$recent_all[2];
            echo "</div>";
        }
      }
    }	
?>