<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$yearnow = date('Y');
$fullname = "$firstname $lastname";
$dob = $age - $yearnow;
echo "Hi <b>$fullname</b> , your dob year is <b>$dob</b>";
?>

