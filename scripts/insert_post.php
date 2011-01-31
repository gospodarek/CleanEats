<?php

$title=$_POST['title'];
$date=$_POST['date'];
$body=$_POST['body'];
$database="blog";

$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("blog", $con);

$sql="INSERT INTO posts (title, date, body)
VALUES
('$title', curdate(), '$body')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
?> 