<?php  
     //Set values for header  
     $page_title = "Search Recipes";  
    
   
     //Load header  
	include_once('./includes/header.php'); ?> 
	
<?php 

	//Set values for content  
 	$current_page = "recipes"; 
 	
 	//Load content template
 	include_once('./includes/content.php'); ?>  
    			
		<div id="content">
			<?php

				$search=$_GET['search'];
				$search = mysql_real_escape_string($search);
				
				open_db();
				
				$result = mysql_query("SELECT * FROM posts WHERE body LIKE'%".$search."%'");
				if (!$result) 
				{
					die("Query to show fields from table failed");
				}
				if (mysql_numrows($result)==0)
				{
					echo "No results matched your search criteria at this time.";
				}	
								
				$num=mysql_numrows($result);
				$i=0;
				while ($i < $num) 
				{
					$title2=mysql_result($result, $i, "title");
					$date=mysql_result($result, $i, "date");
					$body=mysql_result($result, $i, "body");
					$id=mysql_result($result, $i, "postID");						
					$i++;?>
					<h1><a href="show.php?id=<?php echo $id; ?>"><?php echo $title2; ?></a></h1>					
					<hr><?php
				}
				mysql_close();

			?> 		
				
		</div><!-- end "content"-->
				
<?php include_once('./includes/footer.php'); ?>  
