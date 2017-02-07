<!DOCTYPE html>
<html>
<head>
  <title>form submitted</title>
</head>
<body>


<?php
$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$server    = $_SERVER['DOCUMENT_ROOT'];
$filename  = $server . "/logs/entries.txt";
$rtnmsg    = addtofile($filename, $firstname, $lastname);
print $rtnmsg;

function addtofile($filename, $firstname, $lastname)
{
    $file = fopen($filename, 'a');

    if ($file) {
        $output = $firstname . '|' . $lastname . '|' . "\n";
        fwrite($file, $output);
        fclose($file);
        $msg = "<h3>$firstname $lastname added to file</h3>";
    } else {
        $msg = "FIle not opened";
    }
    return $msg;
}

function readtofile($filename)
{
    $mytable = "\n <table border=1>";
    $mytable .= "<tr>";
    $mytable .= "<th>Firstname</th>";
    $mytable .= "<th>Lastname</th>";
    $mytable .= "</tr>\n\n";
    $file    = fopen($filename, 'r');
    $counter = 0;
    $count   = count(file($filename));

    for ($i = 1; $i <= $count; $i++) {
        $string              = fgets($file);
        list($fname, $lname) = explode('|', $string);
        $counter++;
        $remainder = $counter % 2;
        if ($remainder == 0) {
            $style = "style='background-color:red'";
        } else {
            $style = "style='background-color:white'";
        }

        $mytable .= "<tr $style>";
        $mytable .= "<td>$fname</td>";
        $mytable .= "<td>$lname</td>";
        $mytable .= "</tr>\n";
    }
    fclose($file);
    $mytable .="</table>";

    return array($counter, $mytable);
}

list($counter, $mytable) = readtofile($filename);
print "<h3>The rows in this table is $counter</h3>";
print "$mytable";

?>

</body>
</html>