<?php
/* This file is part of blogkomm 2.3 beta 2 
 * http://blogkomm.com 
 * This software is licensed under the CC-GNU GPL (http://creativecommons.org/licenses/GPL/2.0/)
 * okt 9,  2005
 *
 */

	
function urls_clickable($comm_eintrag) 
   { /* originally by someone at php.net "preg_replace-functions", 
        including "-"divided URLS, parameters, arguments,
        added attribut rel="nofollow", further information: 
        http://www.google.com/googleblog/2005/01/preventing-comment-spam.html
     */
    global $comm_eintrag, $targetWin;
	$comm_eintrag = preg_replace ( '/(?<!<a href=\")((http|ftp)+(s)?:\/\/[^<>\s]+)/i', '<a href="$1" rel="nofollow" target="[targetWin]">$1</a>', $comm_eintrag);
	$comm_eintrag = str_replace("[targetWin]", $targetWin, $comm_eintrag);
    return $comm_eintrag;
}

	


function comments_eingaben($eingabe)
    {	global $mail_valid, $conf_captcha;
    
        if ($conf_captcha == 1){ 
            $captcha	= captcha();
            if ($_POST["captcha_input"] != $captcha and $_SESSION['logged'] != "True") {
            	 echo "<div style=\"color: red\"><strong>please try again to enter code, reload page if not readable</strong></div>";  	
                 exit;
        		}
        	
        }
    
    
	    if ($eingabe[0] == "" ){
                  echo "<div style=\"color: red\"><strong>".msg('enter_name')."</strong></div>";  
                  $okay=0; 
                  }
		elseif ($eingabe[1] == "" || (!strstr($eingabe[1],"@")) || (!strstr($eingabe[1],".")) and $mail_valid==1){
                             
                  echo "<div style=\"color: red\"><strong>".msg('enter_e-mail')."</strong></div>";  
                  
                  $okay=0; 
                  }
		elseif ($eingabe[3] == "" ){
                  echo "<div style=\"color:red\"><strong>".msg('enter_comment')."</strong></div>";  
                  $okay=0;
                  }
        elseif (substr_count($eingabe[3], "http://")> 2 ){
                 // exclude comments that look like spam (more than 2 links in one comment
                 exit;      
        }
		else 
              
              {
                comments_einlesen();  // einlesen (german): read in comments                                                    
              }
 	 } 

function reload($status)
{
      global $blog_id, $zeit;
      $fertig=$post_url."?".$status."=1&show_id=".$_GET[show_id]."#a".bin2hex($zeit);
      echo "<script>";
      echo "document.location.replace(\"$fertig\")";         // jump to the first page
      echo "</script>";
}



function comments_einlesen()
{
      global $blog_id, $blog_mail,$comm_name,$comm_e_mail,$comm_website,$comm_eintrag_raw,$comm_eintrag,$dateForm,$forum, $notify,$html,$timeDiff,$timeForm, $button, $tell, $file_name, $SERVER_NAME, $SCRIPT_NAME, $notify_comment, $url_parse,$id, $post_url, $post_edit, $zeit,$conf_mod;
         //print_r($GLOBALS);
         if ($timeForm=="24"){
	      $zeit=date('H:i', mktime(date("H")+$timeDiff,date("i"),date("s"),date("m"),date("d"),date("Y")))."h";
          }	else {
          $zeit=date('g:ia', mktime(date("H")+$timeDiff,date("i"),date("s"),date("m"),date("d"),date("Y")));
		  $stamp=time();
          }
      if ($dateForm=="eu"){
          $datum= date('d.m.Y',mktime(date("H")+$timeDiff,date("i"),date("s"),date("m"),date("d"),date("Y")));
	      }
      elseif($dateForm=="us"){
          $datum= date('m.d.Y',mktime(date("H")+$timeDiff,date("i"),date("s"),date("m"),date("d"),date("Y")));
		  }
      elseif($dateForm=="int"){
          $datum= date('Y-m-d',mktime(date("H")+$timeDiff,date("i"),date("s"),date("m"),date("d"),date("Y")));
		  }
      if ($button==msg('button_preview')) {   // here to choose in which textfile the data is stored
	      $fp = fopen(COMM_FILE.".new", "a+");
		  } else {
          $fp = fopen(COMM_FILE, 'a+');
		  }
       // look for serverconfiguration "get_magic_quotes_gpc"
     
       function proofAddSlashes($comm_eintrag)
       {
          global $comm_eintrag;
          if (get_magic_quotes_gpc()==1) {
              return $comm_eintrag;
              } else {
              return AddSlashes($comm_eintrag);
              }
        } 
       // showing html or don't?
      
       if ($html==1){
	      $comm_eintrag= $comm_eintrag_raw;
          $comm_eintrag = str_replace ("\n"," ", $comm_eintrag);
          $comm_eintrag = str_replace ("\r","<br/>", $comm_eintrag);
          $comm_eintrag = nl2br($comm_eintrag);
          #proofAddSlashes($comm_eintrag);
        
        } elseif ($html==2){
	      $comm_eintrag= $comm_eintrag_raw;
          $textile = new Textile;
          # uncomment next line if you want only textile handling html
          # $comm_eintrag = strip_tags($comm_eintrag);
          $comm_eintrag = $textile->TextileThis($comm_eintrag);
          // killing linebreaks to keep comments.txt readable

          //$comm_eintrag = nl2br($comm_eintrag);
          $comm_eintrag = str_replace ("\n"," ", $comm_eintrag);
          $comm_eintrag = str_replace ("\r"," ", $comm_eintrag);

          //killing linebreaks for preview attachement
          $comm_eintrag_raw = nl2br($comm_eintrag_raw);
          $comm_eintrag_raw = str_replace ("\n","", $comm_eintrag_raw);
          $comm_eintrag_raw = str_replace ("\r","", $comm_eintrag_raw);
          
          #proofAddSlashes($comm_eintrag);
        
        } else {
          $comm_eintrag = htmlspecialchars(strip_tags($comm_eintrag_raw),ENT_QUOTES);
          $comm_eintrag = str_replace ("\n"," ", $comm_eintrag);
          $comm_eintrag = str_replace ("\r","<br/>", $comm_eintrag);
          $comm_name    = htmlspecialchars(strip_tags($comm_name), ENT_QUOTES);
          $comm_e_mail  = htmlspecialchars(strip_tags($comm_e_mail), ENT_QUOTES);
          $comm_website = htmlspecialchars(strip_tags($comm_website), ENT_QUOTES);
          #proofAddSlashes($comm_eintrag);
		}
			
		// Submit Comment
		
		if ($button==msg('button_submit') && !isset($post_edit)) // here to choose again if "preview" or "ok" to know where to go on
			{
			if ($notify==1){
			
           		$comm_eintrag_mail=br2nl(stripslashes($comm_eintrag_raw)); 
		   		$subject  	 = "a new blogKomment by $comm_name";
		   		$headers 	 = "From: blogKomm@".$_SERVER['SERVER_NAME']."\nReply-To: blogKomm@".$_SERVER['SERVER_NAME'];			  
				$text		 = "$comm_name wrote: $comm_eintrag_mail\n\nCheck out the post at\n$post_url?show_id=$blog_id#a".bin2hex($zeit)."\n\n$datum, $zeit, IP:[$_SERVER[REMOTE_ADDR]], Website: $comm_website, e-Mail: $comm_e_mail";
				mail($blog_mail, $subject, $text , $headers);
				} 
				
			if ($forum==1 and isset($_POST['tell'])){
            	
            	$comm_eintrag_mail= br2nl(stripslashes($comm_eintrag_raw));  
		   		$subject  	     = "a new blogKomment at http://$SERVER_NAME";
		   		$headers    	 = "From: blogKomm@".$_SERVER['SERVER_NAME']."\nReply-To: blogKomm@".$_SERVER['SERVER_NAME']."\n";
		   		foreach($_POST[tell] as $value){ 
       		   		$headers        .= "Bcc:".base64_decode($value)."\r\n";			            }
				$text		     = "You are notified that $comm_name posted a comment:\n\n$comm_eintrag_mail\n\nCheck out the discussion at\n$post_url?show_id=$blog_id#a".bin2hex($zeit)."\nplease do not reply to this mail.";
            	mail($blog_mail,$subject,$text,$headers);
				}
				
				
				
			if ($html==0 and $url_parse==1){
				urls_clickable($comm_eintrag); // jump to function 
				}
            $eintrag = $blog_id." | ".$datum." | ".$zeit." | ".$comm_name." | ".$comm_e_mail." | ".$comm_website." | ".$comm_eintrag;
          
			//forum=2 (Notify if others post)
			if (isset($notify_comment)){
				$eintrag .=" | ".base64_encode($comm_e_mail)." | ";
				} 
				else {
				$eintrag .=" |  | ";
				}
		    //adding the URL of single entry
		    $eintrag .= $post_url." | ";
		    
		    //adding review status (1) if moderate is on
		    if ($conf_mod==1 and $_SESSION['logged'] != "True") {
		       $review=1;
		       $eintrag .= $review." | \n";
		       } else
		       $eintrag .= " \n";
		       
		    
			fputs($fp, $eintrag, strlen($eintrag));
        	fclose($fp);
            //print_r($eintrag);
        	unset($eingabe, $comm_e_mail,$comm_name, $comm_website, $comm_eintrag);
	        reload("done");
		    } 
			
		// Preview Comment
		
		
		
		elseif ($button==msg('button_preview') && !isset($post_edit)){
			$eintrag = $blog_id." | ".$datum." | ".$zeit." | ".$comm_name." | ".$comm_e_mail." | ".$comm_website." | ".$comm_eintrag;
            //forum=2 (Notify if others post)
			if (isset($notify_comment)){
				$eintrag .=" | ".base64_encode($comm_e_mail)." | ";
				} 
				else {
				$eintrag .=" |  | ";
				}
		    //adding the URL of single entry
		    $eintrag .= $post_url." | ";
		    
        	$eintrag .= $comm_eintrag_raw." | ";
        	$eintrag .= $_POST["captcha_input"]." | \n";
        	fputs($fp, $eintrag, strlen($eintrag));
        	fclose($fp);
 		    reload("preview");
 			}
		
			
		// Edit Comment
		
		
		
		elseif (isset($_SESSION['logged']) && isset($post_edit)) {
		    flock($fp, 1) or die("can't lock.");
		    $new = fopen(COMM_FILE.".new", "w");
            flock($new, 2) or die("can't lock.");
            $fcontents = file(COMM_FILE);        // reading array
            $id_sum = sizeof($fcontents);         // how many lines in comments.txt
            $daten = explode(" | ", $fcontents[$post_edit]);
            
            $fcontents[$post_edit]= $daten[0]." | ".$daten[1]." | ".$daten[2]." | ".$comm_name." | ".$comm_e_mail." | ".$comm_website." | ".$comm_eintrag."\n";
            if ($html==0 and $url_parse==1){
				urls_clickable($comm_eintrag); // jump to function 
				}
            $fcontents[$post_edit] = $blog_id." | ".$datum." | ".$zeit." | ".$comm_name." | ".$comm_e_mail." | ".$comm_website." | ".$comm_eintrag;
			//forum=2 (Notify if others post)
			if (isset($notify_comment)){


				$fcontents[$post_edit] .=" | ".$comm_e_mail." | ";
				} 
				else {
				$fcontents[$post_edit] .=" |  | ";
				}
		    //adding the URL of single entry
		    $fcontents[$post_edit] .= $post_url." | ";
		    //adding review status (0)
		    $review=0;
		    $fcontents[$post_edit] .= $review." | \n";
		                 
            //print_r($fcontents[$edit]);  
            
            for ($i = 0; $i <= $id_sum; $i++) {
                $edited=$fcontents[$i];
                fputs($new, $edited);
             };                                    // writes data in comments.txt.new
             //unset ($fcontents[$edit]);
             //print_r($fcontents);  
             fclose($fp); 
             // trash old file
             unlink(COMM_FILE);
             rename(COMM_FILE.".new", COMM_FILE);
             fclose($new); 
             reload("done");
		     }
  }
  
  function delete_comments()
       {
       global $del;
        if (isset($_SESSION['logged'])){
		     
		     $old = fopen(COMM_FILE, "r");
             flock($old, 1) or die("can't lock.");
             $new = fopen(COMM_FILE.".new", "w");
             flock($new, 2) or die("can't lock.");
             $fcontents = file(COMM_FILE);        // reading array
		     $id_sum = sizeof($fcontents);         // how many lines in comments.txt
             //print_r($fcontents);
             unset ($fcontents[$del]);
             for ($i = 0; $i <= $id_sum; $i++) {
                 $daten=$fcontents[$i];
                 fputs($new, $daten);
             }                                    // writes data in comments.txt.new

             fclose($old); 
             # Alte Datei wegwerfen.
             unlink(COMM_FILE);
             rename(COMM_FILE.".new", COMM_FILE);
             fclose($new);
             unset($fcontents);                       // unset array to display the new file
             reload("done");
		 }

      }  
  
  function moderate_comments()
       {
       global $mod;
        if (isset($_SESSION['logged'])){
		     
		     $old = fopen(COMM_FILE, "r");
             flock($old, 1) or die("can't lock.");
             $new = fopen(COMM_FILE.".new", "w");
             flock($new, 2) or die("can't lock.");
             $fcontents = file(COMM_FILE);        // reading array
		     $id_sum = sizeof($fcontents);         // how many lines in comments.txt
             //build array
             $daten = explode(" | ", $fcontents[$mod]);
             array_splice ($daten,9,1, "0"); 
             $fcontents[$mod]= implode(" | ",$daten);
             for ($i = 0; $i <= $id_sum; $i++) {
                 $reviewed=$fcontents[$i];
                 fputs($new, $reviewed);
             }                                    // writes data in comments.txt.new
             fclose($old); 
             # Alte Datei wegwerfen.
             //unlink(COMM_FILE);
             rename(COMM_FILE.".new", COMM_FILE);
             fclose($new);
             unset($fcontents);                   // unset array to display the new file
             reload("done");
		 }
      }  
?>
  