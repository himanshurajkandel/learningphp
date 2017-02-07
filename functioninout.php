<?php
$in_name = $_POST['name'];
$in_hours = $_POST['hours'];
$in_birth = $_POST['birth'];

$retrnmsg = doValidation($in_name, $in_hours, $in_birth);

if($retrnmsg == '')
{
  displaypage($in_name, $in_hours, $in_birth);
}
else
{
  print $retrnmsg;
  print "<br />Go back and try again";
}

//dovalidation function

function doValidation($name, $hours, $birth)
{
  $errmsg = '';

  if(empty($name))
  {
    $errmsg .= "<br />You must enter a name";
  }

  if(empty($hours))
  {
    $errmsg .= "<br />You must enter hours";
  }
  else
  {
    if(!is_numeric($hours))
    {
      $errmsg .="<br />Hours must me in numbers";
    }
  }

  if(empty($birth))
  {
    $errmsg .= "<br />You must enter your birth date";
  }
  else
  {
    if(!is_numeric($birth))
    {
      $errmsg .="<br />Birth year must be in numbers";
    }
    else
    {
      $length = strlen($birth);

      if($length != 4)
      {
        $errmsg .="<br /> Birth year has four digits";
      }
    }
  }

  return $errmsg;
}

//displaypage function

function displaypage($name, $hours, $birth)
{
  $currentyear = date('Y');
  $age = $currentyear - $birth;
  $years_slept = ($hours/24) * $age;

  print "<p>Your name is $name and you have";
  print "spent $years_slept years sleeping</p>";

  if($age > 50 || $years_slept > 9)
  {
    print "Better do retirement";
    print "You've spent your life sleeping";
  }
  else
  {
    print "<p>Time is on your side really";
    print "Yes, i mean it to you</p>";
  }

  print "<p> - End - </p>";
}

?>