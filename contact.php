<?php  
     //Set values for header  
     $page_title = "Contact";  
    
   
     //Load header  
	include_once('./includes/header.php'); 
?> 	

<?php 

	//Set values for content  
 	$current_page = "contact"; 
 	
 	//Load content template
 	include_once('./includes/content.php'); 
 ?>  
    			
    <div id="content">
    	<form name="contactForm" method="post" action="" id="contactForm" > 
			<fieldset>
				<legend>To contact us, please complete the form and submit.</legend>
					<table>
						<tr class="row"> 
							<td><label for="visitorName">Name:</label></td> 
							<td><input type="text" id="visitorName" name="visitorName" /></td> 
						</tr>
						<tr class="row"> 
							<td><label for="email">Email:</label></td> 
							<td><input type="text" id="email" name="email" /></td> 
						</tr> 
						<tr class="row"> 
		  					<td><label for="telephone">Telephone:  </label></td> 
		  					<td><input type="text" id="telephone" name="telephone" /></td> 
						</tr> 
						<tr> 
		  					<td>Your preferred method of contact: </td> 
		  					<td>
		  						<input type="radio" name="preferred" id="emailPref" value="Email"  />
		  						<label for="emailPref">Email</label>
		  						<input type="radio" name="preferred" id="phonePref" value="Telephone" />				  																		
		  						<label for="phonePref">Telephone</label>

		  					</td> 
						</tr>
						<tr>
							<td><label for="marketing" >How did you hear about us?</label></td>
							<td><select name="marketing" id="marketing" class="required" >
							<option value="">--Select an option--</option> 
								<option value="friend" >Friend</option>
								<option value="search">Internet Search</option>
								<option value="magazine" >Magazine</option>
								<option value="other" >Other</option>
							</select></td>
						</tr>
						<tr>
							<td colspan="2">
		 						<p>Your message:<br /> 
		          					<textarea name="message" cols="39" rows="6"> 
		                  			</textarea> 
		     			 		</p> 
							</td> 
						</tr>
						<tr>
							<td><label for="newsletter">Would you like to receive our monthly newsletter?</label></td>
							<td><input type="checkbox" id="newsletter" name="newsletter" value="yes" />Yes
								<input type="checkbox" id="newsletter" name="newsletter" value="no" /> No</td>
						</tr>
						<tr>
							<td colspan="2" id="submit">
								<input type="submit" value="Send Message" />
							</td> 

						</tr>	
				</table>
			</fieldset>
		</form> <!-- end of form--> 
    	<div id="results"><div>

    			
	</div><!-- end "content"-->
				
<?php include_once('./includes/footer.php'); ?>  

