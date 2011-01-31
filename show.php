<?php  
     //Set values for header  
     $page_title = "Show Recipe";  
    
   
     //Load header  
	include_once('./includes/header.php'); 
?> 
	
<?php 

	//Set values for content  
 	$current_page = "recipes"; 
 	
 	//Load content template
 	include_once('./includes/content.php'); 
 ?>  

    	<div id="content">
			<?php
				
				$id=$_GET['id'];
				$id = mysql_real_escape_string($id);

				open_db();
				
				$result = mysql_query("SELECT * FROM posts WHERE postID='".$id."'");
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
					$body=mysql_result($result, $i, "body");
					$photo=$title2;
						
					$i++;
				}
				mysql_close();

			?> 		
								
				<h1><?php echo $title2; ?></h1>					
				<h3 class="entry">by Liab on <?php echo $date; ?></h3>
				<img class="photo" src="images/<?php echo $photo ?>.jpg" alt="<?php echo $photo ?>" />

				<p><?php echo $body; ?></p>
				
				<hr>
				
				
		</div><!-- end "content"-->
			
<?php include_once('./includes/footer.php'); ?>  
