<?php
$name = $_POST['name'];
$dob = $_POST['dob'];

if ($name == 'harke')
{
  print"<p>You are instructor</p>";
}
else
{
  if($name > "H")
  {
    print"<p>your name comes after H</p>";
  }
  elseif($name == "H")
  {
    print"<p>your name comes in H</p>";
  }
  else
  {
    print"<p>your name comes before H</p>";
  }
}
if($dob < 1998)
{
  print"<p>you were born before 1998</p>";
}
elseif($dob == 1998)
{
  print"<p>you were born in 1998</p>";
}
else
{
  print"<p>you were born after 1998</p>";
}
?>