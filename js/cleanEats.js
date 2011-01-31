function setFocus()
{
	var myText = $('#visitorName');
	myText.focus();
}		

$(document).ready(function(){
	setFocus();
	$("a[rel^='prettyPhoto']").prettyPhoto();

	$('#contactForm').validate({
		rules: {
			visitorName: 'required',
			email: {
				required:true,
				email:true
				},
			preferred: 'required',
			marketing: 'required',
			newsletter: 'required'
	},//end of rules
	messages: {
		email: {
			email: "Please enter a valid email address"
			},
		newsletter: {
			required: "Please check yes or no."
			}
	},//end of messages
	errorPlacement: function(error, element) { 
       if ( element.is(":radio") || element.is(":checkbox")) {
          error.appendTo( element.parent()); 
        } else {
          error.insertAfter(element);
        }
    }//end errorPlacement
    //submitHandler: function(form) {
      //  jQuery(form).ajaxSubmit({target: "#result"});
    //}

	});//end of validate
});//end of document.ready()
