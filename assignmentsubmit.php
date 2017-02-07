<!DOCTYPE html>
<html>
<head>
  <title>Document Submitted !!!</title>
</head>
<style>
#title
{
  background-color: #00FFE5;
  position: absolute;
  top:25px;
  left:300px;
  padding: 15px;
}
</style>
<body>
<div id="title">
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$cdetail = $_POST['cdetail'];
$cinfo = $_POST['cinfo'];
$city = $_POST['city'];
$comment = $_POST['comment'];
if(empty($firstname || $lastname || $cdetail || $cinfo || $city || $comment))
{
  exit;
}
$document = $_SERVER['DOCUMENT_ROOT'];
$filename = $document."/logs/entries.txt";
$file = fopen($filename, 'a');
$strings = $firstname.'|'.$lastname.'|'.$cdetail.'|'.$cinfo.'|'.$city.'|' ."\n";
fwrite($file, $strings);
fclose($file);

echo "Hello $firstname $lastname ,<br />we will contact you through $cdetail <br /> and the details you provided is: $cinfo <br />and you're from $city <br />";

echo "<textarea rows='12' cols='50' disabled='disabled'>";
echo $comment;
echo "</textarea>";



?>
</div>
</body>
</html>