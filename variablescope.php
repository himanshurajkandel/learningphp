<!DOCTYPE html>
<html>
<head>
  <title>Variable Scope</title>
</head>
<body>
<?php 
$institution = "Pokhara Engineering Collge";



 doreturn();

print $harke1;
function doreturn()
{
$class ="harke";

$getclass = functionnew($class);
print $getclass;
}

function functionnew($a_class)
{
  global $harke1;
  $harke1 = "I am harke";

if($a_class == 'harke')
{
  $nam = "yesko nam harke ho";
  $arko = "yesko nam shyam ho";
}
print $nam;
print $arko;
return $nam;
return $arko;
}




?>

</body>
</html>