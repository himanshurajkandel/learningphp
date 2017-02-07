<?php
$city = $_POST['city'];
/* if($city != pokhara)
{
  print "you are living in dirt!";
}
else
{
  print " you are living in heaven";
} */
/* print $city;
if(!($city == 'nepalgunj' || $city == 'kathmandu'))
{
  print "you are living in heaven";
}
else
{
  print " you are living in dirt";
}*/

print $city;
if($city != 'nepalgunj' && $city != 'kathmandu')
{
  print "you are living in heaven";
}
else
{
  print " you are living in dirt";
}

?>