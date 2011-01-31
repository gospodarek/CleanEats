<?php  
     //Set values for header  
     $page_title = "Trying to eat clean one day at a time";  
    
   
     //Load header  
	include_once('./includes/header.php'); ?> 
	
	<?php 
	
		//Set values for content  
	 	$current_page = "home"; 
	 	
	 	//Load content template
	 	include_once('./includes/content.php'); ?>  
 
	    		<div id="content">
    			<?php
					
					//include('./includes/config.php');
					//include('./includes/open_db.php');
					open_db();
				
					$result = mysql_query("SELECT * FROM posts ORDER BY postID DESC ");
					if (!$result) 
					{
    					die("Query to show fields from table failed");
					}					
					$num=mysql_numrows($result);
					$i=0;
					while ($i < $num) 
					{
						$title2=mysql_result($result, $i, "title");
						$date=mysql_result($result, $i, "date");
						$date_formatted=date("F d, Y", strtotime($date));
						$body=mysql_result($result, $i, "body");
						$id=mysql_result($result, $i, "postID");
						$body2=truncate($body, 200, $id);
						$photo=$title2;

						if ($i == 3) 
						  echo "<div class=\"hidden\">";
						  
						echo "<h1>$title2</h1>";
						echo "<h3 class='entry'>by Admin on $date_formatted</h3>\n";	
						echo "<img class ='photo' src='images/$photo.jpg' alt='$photo' />";
						echo "<p>$body2</p>\n";
						echo "<hr /><br />\n";
						$i++;
					}
					if ($num >= 3) 
					  echo "</div>\n";
								
					mysql_close();

				?> 
				
				<div id="more"><a href="#">See older posts</a></div>
				<?php echo "<script language=\"javascript\">
					$('#more').click(function(){
					$('.hidden').css(\"display\",\"block\"); 
    					});

				</script>";?>		
				
				</div><!-- end "content"-->
				
				<?php include_once('./includes/footer.php'); ?>  
