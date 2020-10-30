<?php
/* This file is part of blogkomm 2.3 beta 2 
 * http://blogkomm.com 
 * This software is licensed under the CC-GNU GPL (http://creativecommons.org/licenses/GPL/2.0/)
 * okt 09,  2005
 *
 */


include("conf/blogkomm_conf.php");
include("blogkomm_show_functions.php");
$captcha	= captcha();

/*
 * captcha taken from drupal (http://drupal.org/), 
 * http://www.pwntcha.net/test.html passed test, so let's see how long 
 *
 */





function _captcha_font_list() {
  $fontdir = "ttf-fonts";
  /*
   * upload free ttf-fonts in the ttf-fonts-directory
   * blogkomm/module/ttf-fonts
   * make sure the font includes all numbers and letters
   *
   */
  $filelist = array();
  if ($handle = opendir($fontdir)) {
    while ($file = readdir($handle)) {
      if (preg_match("/\.ttf$/i",$file) == 1)
        $filelist[] = $fontdir.'/'.$file;
    }
    closedir($handle);
  }

  return $filelist;
}

/**
* Prints an image containing a captcha code.
*/
    // there are a few hard coded functions I'd like to eliminate here,
    // but for the time being we'll let them be.

    //if we don't have GD2 functions, we can't generate the image
    if (!function_exists('imagecreatetruecolor')) return;

    // Set headers
    header('Expires: Mon, 01 Jan 1997 05:00:00 GMT');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
    
    header('Content-type: image/png');

    // set up image, the first number is the width and the second is the height
    $im = imagecreatetruecolor(80, 30);

    // creates two variables to store color
    $background = imagecolorallocate($im, rand(180, 250), rand(180, 250), rand(180, 250));
    $foreground = imagecolorallocate($im, rand(0, 80), rand(0, 80), rand(0, 80));

    // fill image with bgcolor
    imagefill($im, 0, 0, $background);

    // Get truetype font list
    $fonts = _captcha_font_list();

    // writes string
    if (function_exists(imagettftext) && count($fonts) > 0) {

      // write text using a truetype font
      $charSize = 12;        // font size
      $charWidth = 0;        // width of previous character
      $x = 10;               // initial x position
      $y = 15;

      // iterate over characters
      for ($i=0;$i<strlen($captcha);$i++) {
        // define angle and position of character based on previous character dimension
        $x += ($charWidth * rand(1.0, 1.0));
        $y += rand(-1,1);
        $charAngle = rand(-1,1);
        //$charSize += rand(-4,2);
        $char = substr($captcha,$i,1);

        // select random font
        $font = $fonts[rand(0,count($fonts)-1)];

        // draw character
        imagettftext($im,$charSize,$charAngle,$x,$y,$foreground,$font,$char);

        // capture character dimensions to increment x position
        $bbox = imagettfbbox($charSize,$charAngle,$font,$char);
        $charWidth = max($bbox[0],$bbox[2],$bbox[4],$bbox[6]) - min($bbox[0],$bbox[2],$bbox[4],$bbox[6]);
      }
    }

    else {
      // write text using a built-in font
      $x = 10;
      $y = 0;

      for ($i=0;$i<strlen($captcha);$i++) {
        imagestring($im,5,$x,$y,substr($captcha,$i,1),$foreground);
        $x += rand(10,15);
        $y += rand(-1,1);
      }

    }

    // strikethrough
    imageline($im, rand(0, 120), rand(0, 120), rand(0, 120), rand(0, 120), $foreground);

    // rotate only if function is defined (many PHP installations have this function missing)
    if (function_exists('imagerotate')) {
      $im2 = imagerotate($im,rand(-10,15),$background);
      imagedestroy($im);
      $im = $im2;
    }
    
    // add cloud only if function is defined (many PHP installations have this function missing)
    if (function_exists('imagecolorallocatealpha')) {
      $middleground = imagecolorallocatealpha($im, rand(160, 200), rand(160, 200), rand(160, 200), 80);

      // random shapes
      for ($x=0; $x<50;$x++) {
        imageline($im, rand(0, 120), rand(0, 120), rand(0, 120), rand(0, 120), $middleground);
        imageellipse($im, rand(0, 120), rand(0, 120), rand(0, 120), rand(0, 120), $middleground);
      }
    }
    
    //output to browser
    Imagepng($im);
    Imagedestroy($im);
?>