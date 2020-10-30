<h2>Step 3: Template changes</h2>
<p>by adding the following code-snippets to your template you will make blogkomm work in your blog.</p>

<h3>Adding the blogkomm-script to your template</h3>
    
<p>Login to blogger.com, go on "template" and look for the <code>&lt;blogger&gt;</code> part:</p>

<pre class="codesnippet"><code>
  &lt;Blogger&gt;
    &lt;BlogDateHeader&gt;
 &lt;h4&gt;&lt;$BlogDateHeaderDate$&gt;&lt;/h4&gt;
    &lt;/BlogDateHeader&gt;
    &lt;$BlogItemBody$&gt;&lt;br /&gt;
    &lt;small&gt;posted by &lt;$BlogItemAuthorNickname$&gt; on 
    &lt;$BlogItemDateTime$&gt;&lt;/small&gt;&lt;br /&gt;&lt;br /&gt;</code></pre>
     <p>Before closing the  &lt;/Blogger&gt; element paste this piece of code:</p> 


 <p>
  <textarea cols="80" rows="10">
&lt?php
 <? if (is_dir($postpages_path)) {echo "&#36post_url='&lt;&#36;BlogItemPermalinkURL&#36;&gt;';";} else {echo "&#36post_url='&lt;&#36;BlogItemArchiveFileName&#36&gt;';";}?> 
 $blog_id='<$BlogItemNumber$>';
 $blog_mail='<$BlogItemAuthorEmail$>';
 define (BK_PATH, "<?echo BK_PATH?>");
 include (BK_PATH."/module/blogkomm_show_link.php");
?&gt;

&lt;/Blogger&gt; 

</textarea> 
 </p>
 
<p>Finally, don't forget to make sure that your publishing settings are now publishing to a <code>.php</code> file!</p>
<p>For example, if you are using Blogger and you were publishing to &quot;blog.html&quot;, 
   Login to Blogger and change your publishing settings (Blog Filename) to publish to <code>&quot;blog.php&quot;</code>.</p>
   <p>If your Blog Filename has been <code>index.html</code> or <code>index.htm</code> make sure you rename or delete it manually with your ftp-software.</p>
<p>Publish your entire blog to make sure everything is working correctly. You may need to alter your template a bit in order to get the comment links exactly where you would like them to appear.</p>
<p><strong>Archive-pages note:</strong><br/>
  If you want to keep your old comments of a different system, just don't republish the archive pages.</p>

<h3>Optional Steps</h3>

<p>blogkomm should now work for you (<span style="color: red">without admin-feature</span>). Anyway, paste the following lines to your template in order to make everything perfect with recent comments, admin-tool integration, user-remember integration and CSS-Styles. <strong>You will have to publish your entire blog (with post pages)</strong> everytime you make changes.</p>


<h4>User remembering (form auto fill),checking Login-Status for admin-feature</h4>
<p>Add the following code on the <strong>very first</strong> char in your template.</p>


<p>
 <textarea cols="80" rows="14">&lt;?php
 if (isset($rem)) { 
     setcookie ("blogKo_name", $comm_name,time()+1209600); 
     setcookie ("blogKo_mail", $comm_e_mail,time()+1209600); 
     setcookie ("blogKo_www", $comm_website,time()+1209600); 
     } 
 if (!isset($button)) { 
     $comm_name = $_COOKIE["blogKo_name"]; 
     $comm_e_mail = $_COOKIE["blogKo_mail"]; 
     $comm_website = $_COOKIE["blogKo_www"]; 
     }
     session_start();
?&gt;</textarea>
<pre class="codesnippet"><code>&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
  &lt;title&gt;this is my blog-title&lt;/title&gt;</code></pre>
</p>


<h4>Adding blogkomm-stylesheet to your template</h4>

<p>By adding the following lines into the <code>&lt;head&gt; ... &lt;/head&gt; </code>section in your template you will have the blogkomm-boxes appear in the correct form.</p> 

<p>However, if you would like integrate blogkomm into your existing stylesheet, simply open up <code>blogkomm.css</code> and copy the style code into your exisiting template right before closing the <code>&lt;/style&gt;</code> element. You can then edit it as you see fit.</p>

<p>
<textarea cols="80" rows="3">
&lt;link rel="stylesheet" href="<?echo $blog_dir;?>blogkomm/blogkomm.css" type="text/css"&gt;
</textarea>
</p>


<h4>Adding blogkomm-recent-comments to your template</h4>

<p>By adding the following lines to your template you will have the last three comments appearing in your sidebar.</p>

<p>
  <textarea cols="80" rows="7">
&lt;?php  
  define (COMMENTS_PATH, "<?echo BK_PATH?>/comments.txt");
  include ("<?echo BK_PATH?>/module/blogkomm_recent_comments_sidebar.php"); ?&gt;
  </textarea> 
 </p>

  <form method="post" action="index.php">
   <fieldset class="nav">
	 <legend>Setup-Steps</legend>
        <label>Run the setup again to reconfigure the script or <input type="submit" name="step" value="finish"/></label>
 </fieldset>
 </form>


