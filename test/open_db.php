<?php 

$con = mysql_connect($dbhost, $dbuser);
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	mysql_select_db("blog", $con);

?>