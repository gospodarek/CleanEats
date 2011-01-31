<?php  
     //Set values for header  
     $page_title = "Products";  
    
   
     //Load header  
	include_once('./includes/header.php'); 
?> 
	
<?php 

	//Set values for content  
 	$current_page = "products"; 
 	
 	//Load content template
 	include_once('./includes/content.php'); 
 ?>  

    			
	<div id="content">
		<h1>Products I love!</h1>
		<p>When I discover great products, I love to share them with my readers. Here are a few.</p>
		
		<div id="products">
			<ul>
				<li>Saladacco</li>
				<img class="photo" src="images/saladacco2.jpg" alt="saladacco tool" />
				<p>Wow, this is a neat tool and one that is crucial to eating clean, especially if you desire eating raw. My favorit thing to do is run raw zuchinnis through this puppy to get spaghetti-like zucchini noodles. Top it with a clean tomato sauce and you have low-carb, high-fiber, CLEAN spaghetti!</p>

			<li>SodaStream Water Seltzerer</li>
			 <img class="photo" src="images/seltzer.jpg" alt="saladacco tool" />
			 <p>OK, I have a confession. I don't like having addictions and certainly don't like owning up to them, but safe to say, I am addicted to this item and have been for the past year. If I had to choose one item I could not give up, this would be it. If I'm at home, I am using it. </p>
			 
			 <li>Garlic Tool</li>
				<img class="photo" src="images/garlic2.jpg" alt="saladacco tool" />
				<p>If you use a lot of garlic, this a super handy tool. I used to buy pre-minced garlic until I didn't like the thought of the chemicals that helped keep it usable for so long. On the other hand, I really loathed peeling the garlic from their stubborn shells.</p>
				<p>On a recent trip to Germany, my sister-in-law pulled out this tool and proceeding to show me how to remove the garlic from their skin with ease an without stinking up your fingers for the next 2 days. Simply put the garlic into the tube, roll and voila!</p>




			</ul>
		</div><!-- end of nav -->
	</div><!-- end "content"-->
				
<?php include_once('./includes/footer.php'); ?>  
