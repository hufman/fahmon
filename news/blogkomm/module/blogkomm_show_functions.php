<?php
/* This file is part of blogkomm 2.3 beta 2 
 * http://blogkomm.com 
 * This software is licensed under the CC-GNU GPL (http://creativecommons.org/licenses/GPL/2.0/)
 * okt 09,  2005
 *
 */
 
if ($html==2)
   require_once('classTextile.php');


function msg($s) {
               global $messages;
               if (isset($messages[$s])) {
                   return $messages[$s];
                } 
           }
           
function captcha() {
        global $conf_captcha_start,$conf_captcha_length,$conf_captcha_junk ;
        /* can not work with uniqid, as string must not be changed after posting 
         * saaving in a session is also not making sense if blogkomm should 
         * work with one line included code in the template
         * solution: see $conf_capture_junk
         */
         
        $conf_captcha_code	 = $_SERVER['REMOTE_ADDR'];
        
        /* conf_captcha_junk is created randomly during setup
         * as a 128char string as input hidden, see conf-file
         */
        
        $conf_captcha_code	.= $conf_captcha_junk; 
        $captcha = $conf_captcha_code;
       
		$captcha	= substr(md5($conf_captcha_code), $conf_captcha_start,$conf_captcha_length); 
		$captcha    = str_replace ("l", "2", "$captcha");
		$captcha    = str_replace ("1", "a", "$captcha");
		$captcha    = str_replace ("j", "3", "$captcha");
		$captcha    = str_replace ("J", "x", "$captcha");
		$captcha    = str_replace ("o", "4", "$captcha");
		$captcha    = str_replace ("O", "5", "$captcha");
		$captcha    = str_replace ("0", "8", "$captcha");
		$captcha    = str_replace ("7", "9", "$captcha");
       
        return $captcha;
}

function hex_encode ($comm_e_mail) // by http://www.neokraft.net
              {
                $comm_e_mail = bin2hex($comm_e_mail); 
                $comm_e_mail = chunk_split($comm_e_mail, 2, '%'); 
                $comm_e_mail = '%'.substr($comm_e_mail, 0, strlen($comm_e_mail) - 1); 
                return $comm_e_mail; 
           }
function decode_array($tell_them){
      
      foreach($tell_them as $value){ 
              $tell_them_item[] = base64_decode($value); 
      } 
      $tell_them = implode(",", $tell_them_item);
      echo $tell_them;
}

function gravatar($gravatar_e_mail) {
	global  $conf_grav, $conf_grav_rating, $conf_grav_border, $conf_grav_size, $conf_grav_default; 
	$out = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($gravatar_e_mail);
	if($conf_grav_rating && $conf_grav_rating != '')
		$out .= "&amp;rating=".$conf_grav_rating;
	if($conf_grav_size && $conf_grav_size != '')
		$out .="&amp;size=".$conf_grav_size;
	if($conf_grav_default && $conf_grav_default != '')
		$out .= "&amp;default=".urlencode($conf_grav_default);
	if($conf_grav_border && $conf_grav_border != '')
		$out .= "&amp;border=".$conf_grav_border;
	echo $out;
}

function br2nl($str) {
   //taken from php.net
   $str = preg_replace("/(\r\n|\n|\r)/", "", $str);
   return preg_replace("=<br */?>=i", "\n", $str);
}


?>