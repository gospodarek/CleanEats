<?php

function myTruncate($string, $limit, $break=".", $url) 
{ 
	if(strlen($string) <= $limit) 
	return $string; 
	
	if(false !== ($breakpoint = strpos($string, $break, $limit))) 
	{ 
		if($breakpoint < strlen($string) - 1) 
		{
			 $string = substr($string, 0, $breakpoint); 
		} 
	$string=$string." ...<a href='$url'><em>more</em></a>";
	} 
	return $string; 
}

?>


<?php
function truncate($value,$length,$url)
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
		$value=$value." ...<a href='$url'><em>more</em></a>";
	}
	return $value;
}