<?php
$firstname = $_POST['name'];
$position = $_POST['section']; 
$comments = $_POST['comments'];
$slc = $_POST['slc'];
$plustu = $_POST['plustu'];
$bbs = $_POST['bbs'];
$gender = $_POST['egender'];

print "Congratulations! <p> <span style ='color:red';><b>$firstname </b></span>you have written your name</p>";
print "You are from section <b><span style = 'color : red';>$position </span></b>";
print "<p>";
print "<b>";
print "<textarea name='comments' rows='7' cols='100' disabled='disabled'>";
print $comments;
print "</textarea>";
print "</b>";
print "</p>";
print "Degrees you've earned are : $slc , $plustu , $bbs";
print "<p> Congratulations for being $gender </p>";
?>