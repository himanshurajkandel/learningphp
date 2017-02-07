<!DOCTYPE html>
<html>
<head>
  <title>Reading files</title>
</head>
<body>
<?php
$document = $_SERVER['DOCUMENT_ROOT'];
$filename =$document.'/demo.tours/projectdemo/css/assignment2.css';
$lines = count(file($filename));
$fp = fopen($filename,'r');  //open the file for reading

for ($i=1; $i <= $lines ; $i++) 
{ 

$line = fgets($fp);// read one line from the file
$newline = trim($line);
print "<span style='color:red'>".$newline."</span><br />";

}

fclose($fp);

?>
</body>
</html>