<!DOCTYPE html>
<html>
<head>
  <title>Submitting Datas</title>
</head>
<body>
<table border="1">
<tr>
<th>FirstName</th>
<th>LastName</th>
</tr>
<?php // writing to file
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
if(empty($firstname || $lastname))
{
  echo "Go back and fill it again \n";
  exit;
}
$document = $_SERVER['DOCUMENT_ROOT'];
$filename = $document.'/demo.tours/projectdemo/logs/names.log';
$file = fopen($filename, 'a');
$store = $firstname."|".$lastname."|"."\n";
fwrite($file, $store);
fclose($file);
?>
<?php //reading from file
$fileopen = fopen($filename, 'r');
$count = count(file($filename));
$cnt = 0;
for ($i=1; $i <=$count ; $i++) 
{ 
  $line = fgets($fileopen);// read one line from the filez
  list($firstname,$lastname)=explode('|', $line);
  $cnt++;
  $remainder = $cnt % 2;
  if($remainder == 0)
  {
    $style = " style='background-color:red'";
  }
  else{
    $style = "   style='background-color:white'";
  }
print "<tr $style>";
print "<td>$firstname</td>";
print "<td>$lastname</td>";
print "</tr>";
}
fclose($fileopen);
?>
</table>
</body>
</html>
