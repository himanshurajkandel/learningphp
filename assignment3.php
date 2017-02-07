<!DOCTYPE html>
<html>
<head>
  <title>Sumbit Form</title>
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
</head>
<body>
<div id="title">
<form method="post" action="assignmentsubmit.php">
<p>Firstname : <br />
<input type="text" name="firstname">
</p>
<p>Lastname : <br />
<input type="text" name="lastname">
</p>
<p>Contact : 
<input type="radio" name="cdetail" value="phone">Phone
<input type="radio" name="cdetail" value="email">Email<br />
<input type="text" name="cinfo">
</p>
<p>City : <br />
<select name="city">
<?php
$document = $_SERVER['DOCUMENT_ROOT'];
$filename = $document."/logs/city.txt";
print $filename;
$file = fopen($filename, 'r');
$count = count(file($filename));
for ($i=0; $i <$count ; $i++) { 
$fileget = fgets($file);
echo "<option value=".$fileget.">".$fileget."</option>";
}
fclose($fileget);
?>
</select></p>
<p>Comments : <br />
<textarea name="comment" rows="15" cols="50"></textarea>
</p>
<input type="submit" name="submit">
</div>
</form>
<p> <a href="assignment3admin.php">For admin use only:</a></p>
</body>
</html>

