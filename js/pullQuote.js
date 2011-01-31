// When the page is ready...
$(document).ready(
   function()
   {
 
	   	// Easy Pullquotes by Mike Jolley
                // Go through each span element with a classname of "pullquote"
		$('span.pullquote').each(function() {
                        // Get the text of the span
			text = $(this).text();
                        // Get rid of unwanted charactors
			text=text.replace( /\((.*)\)/gi, " " );
                        // Check if this is to be a right or left pull quote and output it
			if ($(this).is(".right")) 
				$(this).parent().before('<blockquote class="pullquote right"><p>&quot;'+ text +'&quot;</p></blockquote>');
			else
				$(this).parent().before('<blockquote class="pullquote"><p>&quot;'+ text +'&quot;</p></blockquote>');
		});
                // End pull quote code
   }
);