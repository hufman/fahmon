Hi blogkomm user!

blogkomm works now with post-pages _and_ monthly archive pages. so if you want to get the advantages of the new integrated admin feature, just run the setup script. the snippet will be generated as needed.

if you plan to update the script:

1. make a backup of your comments.txt file
2. make a backup of your blogkomm.css file

3. upload all files, xchange files of step (1) and (2)
4. run the setup-script at "http://yourdomain.com/..yourblogdirectory../blogkomm/setup/"

5. configure blogkomm for your needs, set password, user, functions
6. and paste the new snippet into your template.



7. i added new classes in blogkomm.css: 

.bkVisitor{
   font-weight: bold;
   text-decoration: none;
   }
img.gravatar {
	float: left;
	margin-top: 4px;
	margin-right: 8px;
	padding: 2px;
	border: 1px solid #ccc;
}

paste them into your css files.
change and paste these classes:

/*Box around the comments*/
div.blogkcomments
    {
    width: 300px; 
    /*background:#f1f1f1;*/
    margin: 15px 2px 15px 2px;
    padding-top: 5px;
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
    }

/*even rows*/

.commentsEven
   {
    background:#fff;
    border-top:thin dotted #999;
	border-bottom:thin dotted #999;
   }

/*odd rows*/
.commentsOdd
   {
    background:#f1f1f1;
    border-top:thin dotted #999;
	border-bottom:thin dotted #999;
   }

/*moderators blog author rows*/
.commentsMod
   {
    background:#e9e9e9;
    border-top:thin dotted #333;
	border-bottom:thin dotted #333;
   }

    
div.blogkcomments:hover
    {
    background:#fff;
    color:#333;
	border-top:thin dotted #333;
	border-bottom:thin dotted #333;
    }
/*Box around the comments End*/




7. business as usual, republish


