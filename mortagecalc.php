<!DOCTYPE html>
<html>
<head>
  <title>Mortage Calc</title>
   <link rel="stylesheet" type="text/css" href="css/assignment2.css">
</head>
<body background="logo.png">
<img src="logo.png" width="100px" height="100px">
<div id="title"><h1>!!! Shinchan Fan Page !!!</h1></div>



<?php
$salary = $_POST['salary'];
$interest = $_POST['interest'];
$month = ($salary/$interest)/12;

if(empty($salary))
{
  echo "<span style='color:red'><h2>Please go back and input the salary</h2></span>";
  echo "</body></html>";
  exit;
}
else
{
  if(!is_numeric($salary))
  {
    echo "<span style='color:red'><h2>Insert numbers not text</h2></span>";
    echo "</body></html>";
    exit;    
  }
}

if(empty($interest))
{
  echo "<span style='color:red'><h2>Please go back and input the interest</h2></span>";
  echo "</body></html>";
  exit;
}
else
{
  if(!is_numeric($interest))
  {
    echo "<span style='color:red'><h2>Insert numbers not text</h2></span>";
    echo "</body></html>";
    exit;
  }
}

echo "<span style='color:red'><h2>Your monthly interest is $month</h2></span>";
?>
</body>
</html>
