<!DOCTYPE html>
<html>
<head>
  <title>entries</title>
</head>
<body>
<table border="1">
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Contact</th>
  <th>Details</th>
  <th>City</th>
<?php
$document = $_SERVER['DOCUMENT_ROOT'];
$filename = $document."/logs/entries.txt";
$file = fopen($filename, 'r');
$count = count(file($filename));
$counter = 0;
  for ($i=1; $i <=$count; $i++) { 
      $strings = fgets($file);
      $counter++;
      $remainder = $counter % 2;
      if($remainder == 0)
      {
        $style = "style='background-color:gray'";
      }
      else
      {
        $style = "style='background-color:white'";
      }
      list($fna,$lna,$con,$det,$city) = explode('|', $strings);
  echo "<tr $style>";
  echo "<td>".$fna."</td>";
  echo "<td>".$lna."</td>";
  echo "<td>".$con."</td>";
  echo "<td>".$det."</td>";
  echo "<td>".$city."</td>";
  echo "</tr>";

  }
?>

</table>
</body>
</html>