<!DOCTYPE html>
<html>
<head>
  <title>Thank you !!!</title>
</head>
<body>
<?php

$fp = fopen("toolkits.log",'a') or die("no permision");

for ($i=1; $i <=6 ; $i++) 

{ 
  $tool = "tool".$i;
  $toolname = $_POST[$tool];

  if(empty($toolname))
  {
    continue;
  }

  print "Tools you needed are:".$toolname."<br />";

  $outputline = "\n Tools:".$toolname."\n \r";
fwrite($fp, $outputline);

}
fclose($fp);

?>
</body>
</html>
