<!DOCTYPE html>
<html>
<head>
  <title>Form Received</title>
  <link rel="stylesheet" type="text/css" href="css/assignment2.css">
</head>
<body background="logo.png">
<img src="logo.png" width="100px" height="100px">
<div id="title"><h1>!!! Shinchan Fan Page !!!</h1></div>
<div id="mortagephp">
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$cinfo = $_POST['cinfo'];
$cdetail = $_POST['cdetail'];
$city = $_POST['location'];
$comment = $_POST['comment'];

$name = $firstname." ".$lastname;

if(empty($name))
{
  echo "Please go back and enter full name";
  echo "</body></html>";
  exit;
}
if(empty($cinfo))
{
  echo "Please go back and fill up the contact details";
  echo "</body></html>";
  exit;
}
if(empty($cdetail))
{
  echo "Please go back and fill up fully the contact details";
  echo "</body></html>";
  exit;
}
if(empty($comment))
{
  echo "Please fill out the comment";
  echo "</body></html>";
  exit;
}

echo "Hello $name ,<br />we will contact you through $cinfo <br /> and the details you provided is: $cdetail <br />and you're from $city <br />";

echo "<textarea rows='12' cols='50' disabled='disabled'>";
echo $comment;
echo "</textarea>";


?>


</div>
</body>
</html>