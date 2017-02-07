<?php
$document = $_SERVER['DOCUMENT_ROOT'];
$filename = $document."/logs/city.txt";


function displayfile($a_file)
{
  $count = count(file($a_file));
  $strings = fopen($a_file, 'r');
  for ($i=1; $i <=$count ; $i++) { 

  $lines = fgets($strings);
  print "Entries are ".$lines."<br />";
  
  }
  fclose($strings);
}

displayfile($filename);


?>