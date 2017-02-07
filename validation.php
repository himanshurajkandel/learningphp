<?php
$name = $_POST['name'];
$hour = $_POST['sleep'];
$dob = $_POST['dob'];

$length = strlen($dob);

if(empty($name))
{
  print "<p>you must enter name</p>";
  exit;
}

if(empty($hour))
{
  print "<p>you must enter your slept hour</p>";
  exit;
}
else
{
  if(!is_numeric($hour))
  {
    print"<p>Don't insert text, insert numbers in slept hours</p>";
    exit;
  }
}
if(empty($dob))
{
  print"<p>Enter your dob<p>";
  exit;
}
else
{
  if(!is_numeric($dob))
  {
    print"<p>Enter numbers in dob</p>";
    exit;
  }
  else
  {
    if($length != 4)
    {
      print"<p>your birth year have 4 numbers</p>";
      exit;
    }

  }
}

$currentyear = date('Y');
$age = $currentyear - $dob;
$yearspent = ($hour/24) * $age;
print"<p>your name is $name</p>";
print "<p> Spend $yearspent years in sleeping";
print "<p>You're $age years old";

if($age >50 && $yearspent > 9)
{
  print"<p>better start for retirement</p>";
}
else
{
  print"<p>time is on your side ! really";
}
?>