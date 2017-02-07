<!DOCTYPE html>
<html>
<head>
  <title>Loading an array from file</title>
</head>
<body>
<?php
$teammember = array();
$document = $_SERVER['DOCUMENT_ROOT'];
$filename = $document."/logs/entries.txt";
$file = fopen($filename, 'r');
$len = count(file($filename));
for ($i=1; $i <=$len ; $i++) { 
 $string = fgets($file);
 list($fname, $lname) = explode('|', $string);
 array_push($teammember, $fname);
}
sort($teammember);
?>

<?php
$counter = 0;
foreach ($teammember as $element) {
      $counter++;
      print "<br />".$counter.":".$element;
}
?>
</body>
</html>