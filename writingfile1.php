<?php

$file = fopen("newfile.txt", "w") or die("Unable to open file!");
$name = "Harke \n";
fwrite($file, $name);
$name1 = "Twake \n";
fwrite($file, $name1);
fclose($file);
?>