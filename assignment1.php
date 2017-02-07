<html>
<head>
  <title>Thanks For Submission</title>
</head>
<body>
<h3>Thank you lovers </h3>
<img src="logo.png" width="100px" height="100px">
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contact =  $_POST['cinfo'];
$contacttext = $_POST['contact'];
$location = $_POST['location'];
$comment = $_POST['comments'];
$fullname = "$firstname $lastname";
echo "<p>Hello !<h3><span style='color:red'>$fullname</span></h3> <br />Thanks for signing up the form</p>";
print "<p>\r We hereby contacting you on <span style='color:red'>$contact</span> through <span style='color:red'>$contacttext</span> </p>";
print "<p>We are happy to let you know that, we are making fan page for <span style='color:red'>$location </span> city</p>";
print "<textarea name='comment'disabled='disabled' rows='12' cols='50'>";
print $comment;
print "</textarea>";
?>
</body>
</html>

