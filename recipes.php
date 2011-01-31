<?php  
     //Set values for header  
     $page_title = "Recipes";  
    
   
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
		<p>Search by the following list of ingredients:</p>
		<div id="food_list">
		<ul>
				<li><a href="search.php?search=chicken">chicken</a></li>
				<li><a href="search.php?search=turkey">turkey</a></li>
				<li><a href="search.php?search=curry">curry</a></li>
				<li><a href="search.php?search=onion">onion</a></li>
				<li><a href="search.php?search=lentils">lentils</a></li>
				<li><a href="search.php?search=basil">basil</a></li>
				<li><a href="search.php?search=oatmeal">oatmeal</a></li>
				<li><a href="search.php?search=tomato">tomato</a></li>

		</ul>
	</div><!-- end "content"-->
	
				
<?php include_once('./includes/footer.php'); ?>  
