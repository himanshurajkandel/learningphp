<?php
$txt = 'a';
$mystring1 = 'harke';
$mystring2 = 'yrs';

$pos1 = stripos($mystring1, $txt);
$pos2 = stripos($mystring2, $txt);

if($pos1 !== false)
{
  echo "The string $txt was found in $mystring1 at position $pos1 <br />";
}
if($pos2 === false)
{
  echo "The string $txt was not found in $mystring2";
}



?>