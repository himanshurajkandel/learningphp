<!DOCTYPE html>
<html>
<head>
  <title>Recursive Program</title>
</head>
<body>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<?php
//Gathering Data 

if (isset($_POST['item1']))
{
  $item1 = $_POST['item1'];
}else{
  $item1='';
}

if (isset($_POST['item2']))
{
  $item2 = $_POST['item2'];
}else{
  $item2 = '';
}

if (isset($_POST['amount1']))
{
  $amount1 = $_POST['amount1'];
}else{
  $amount1 = '';
}

if (isset($_POST['amount2']))
{
  $amount2 = $_POST['amount2'];
}else{
  $amount2 = '';
}

$display ='';
$total ='';
$err = '';

$display = "<table border='1'>\n";
$display .="<tr>";
$display .="<th>Item</th>";
$display .="<th>Amount</th>";
$display .="</tr>\n";

$display .="<tr>";
$display .="<td><input type='text' name='item1' value='".$item1."'></td>";
$display .="<td><input type='text' name='amount1' value='".$amount1."'></td>";

if(!empty($amount1))
{
  if(is_numeric($amount1))
  {
    $total += $amount1;
  }
  else
  {
    $err++;
    $display .="<td style='color:red'>Ammount is not numeric</td>";
  }
}

$display .= "</tr> \n";

$display .="<tr>";
$display .="<td><input type='text' name='item2' value='".$item2."'></td>";
$display .="<td><input type='text' name='amount2' value='".$amount2."'></td>";

if(!empty($amount2))
{
  if(is_numeric($amount2))
  {
    $total += $amount2;
  }
  else
  {
    $err++;
    $display .="<td style='color:red'>Ammount is not numeric</td>";
  }
}

$display .= "</tr> \n";
$display .="</table>";
$display .="<br /><input type='submit' name='submit' value='clickme'>";

if($err>0)
{
  $display .="<p style='color:red'>Number of errors are $err</p>";
}
else{
  $display .="<p style='color:red'>Total ammount $total</p>";
}

print $display;

?>




</form>
</body>
</html>