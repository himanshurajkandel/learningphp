
<?php
echo "<h1>Team Members are </h1> \n";
for ($i=1; $i <=5 ; $i++) { 
    $membername = "member".$i ;
    $member = $_POST[$membername];

echo "Team member ".$i." is ".$member." <br />";

}
?>