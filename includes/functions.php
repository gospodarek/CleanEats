<?php
function truncate($value,$length,$id)
{
	if(strlen($value)>$length)
	{
		$value=substr($value,0,$length);
		$n=0;
		while(substr($value,-1)!=chr(32))
		{
			$n++;
			$value=substr($value,0,$length-$n);
		}
		$value=$value." ...<a href='show.php?id=$id'>more</a>";
	}
	return $value;
}



function open_db()
{
	$dbhost="localhost";
	$dbuser="root";
	
	$con = mysql_connect($dbhost, $dbuser);
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	mysql_select_db("blog", $con);
}
function process_form()
{
		print "Form submitted successfully: <br>Your name is <b>".$_POST['visitorName']."</b> and your email is <b>".$_POST['email']."</b><br>";
}	
	
?>

<?php
/*function validate(form)
{
	rules: 
	{
		firstname: "required",
		lastname: "required",
		email: 
		{
			required: true,
			email: true,
		},
		messages: 
		{
			firstname: "Enter your firstname",
			lastname: "Enter your lastname",
			email: 
			{
				required: "Please enter a valid email address",
				minlength: "Please enter a valid email address",
			}
		}
	
	}	
	
	// the errorPlacement has to take the table layout into account
	errorPlacement: function(error, element) {
		if ( element.is(":radio") )
			error.appendTo( element.parent().next().next() );
		else if ( element.is(":checkbox") )
			error.appendTo ( element.next() );
			else
				error.appendTo( element.parent().next() );
		},
		// specifying a submitHandler prevents the default submit, good for the demo
		submitHandler: function() {
			alert("submitted!");
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("checked");
		}
	});

}*/
?>