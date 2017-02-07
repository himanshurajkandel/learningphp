<?php
  $name = $_POST['name'];
  $year = $_POST['year'];
  $slept = $_POST['slept'];

  $date1 = date('Y');

  $age = $date1- $year ;

  $yearslept = ($slept/24)* $age;

  $agetodays = $age * 365 ;
  
  $daysslept = ($slept/24) * $agetodays;

  print "<h1>Hi $name , you're $age years old and you slept <span style=color:red><i>$yearslept <i></span>years till now</h1> ";
  
  print "<h1> And you've wasted <span style=color:red><i> $daysslept </i></span> days sleeping ! Time to wake up :) ";
  
  if ($age > 18)
  {
    print "<h1>Timi thulo vaisakyeu</h1>";
    
    if ($slept > 8) 
    {
      print"<h3> Sadhai sutne, uthne kaile?</h3>";
    }
    else
    {
      print "<h3> Ho ! aba uthera kehi garera dekhaunu parcha</h3>";
    }
  }
  else
  {
    print"<h1>timi bachhai chhau</h1>";

    if($slept > 12)
    {
      print "<h3> Yo ta atinai bhayena ra bhai/bahini</h3>";
    }
    else
    {
      print "<h3>Hune biruwa ko chillo paat</h3>";
    }
  }
?>