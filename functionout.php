<?php
print displaymsg();
function displaymsg()
{
  $name = $_POST['name'];
  $display = "Hi ".$name." How are you?";
  return $display;
}