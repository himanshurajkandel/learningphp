<!DOCTYPE html>
<html>
<head>
  <title>sorted arrays</title>
</head>
<body>
<?php
$teammember = array(); //new array
//load the array
for ($i = 1; $i <= 5; $i++) {
  $membername = "member".$i;
  $member = $_POST[$membername];

  if(!empty($member))
  {
    array_push($teammember, $member);
  }
}
sort($teammember);
?>
<?php
$counter = 0;

foreach ($teammember as $element)
{
  $counter++;
  print "\n".$counter.":".$element."\n";
}




?>

</body>
</html>