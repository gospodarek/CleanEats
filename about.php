<?php  
     //Set values for header  
     $page_title = "About";  
    
   
     //Load header  
	include_once('./includes/header.php'); ?> 
	
<?php 

	//Set values for content  
 	$current_page = "about"; 
 	
 	//Load content template
 	include_once('./includes/content.php'); ?>      			
    			<div id="content">
					<p>Welcome to my website!</p>
					<p>Each unique and knitted with a lot of love! I can also create custome designs based on your requests. Whatever you are looking for, I am sure I can create it.</p>
					<p>We welcome you to take a look at our website and condos. Please let us know if you have any questions or comments. </p>
					<p>Have a great day!</p>
					<p id="signature" class="special-color">Downtown Denver Rentals</p>
				</div><!-- end "content"-->
				
	<?php include_once('./includes/footer.php'); ?>  
