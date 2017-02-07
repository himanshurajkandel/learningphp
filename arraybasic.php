<?php
$teammember = array();
for ($i=1; $i <=5 ; $i++) { 
$membername = "member".$i;
$member = $_POST[$membername];
$array_index = $i -1;
$teammember[$array_index] = $member;
print "<br />".$i.":".$teammember[$array_index];
}
?>

<?php
$teammember = array();
for ($i=1; $i <=5 ; $i++) { 
$membername = "member".$i;
$member = $_POST[$membername];
array_push($teammember, $member);
$array_index = $i -1;
print "<br />".$i.":".$teammember[$array_index];
}
?>

