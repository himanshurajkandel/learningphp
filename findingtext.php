<!DOCTYPE html>
<html>
<head>
  <title>Searching Done</title>
</head>
<body>
<?php
$teammember = array();

$teammember[0] = 'Harke -Captain';
$teammember[1] = 'Sakar -:Batsman';
$teammember[2] = 'Vishal -:Batsman';
$teammember[3] = 'laxman :-Bowler';
$teammember[4] = 'himanshu -:Batsman';
$teammember[5] = 'sonam :-Bowler';
$teammember[6] = 'Sagar -:Batsman';
$teammember[7] = 'Harke :-Bowler';
$teammember[8] = 'Prem -:Batsman';
$teammember[9] = 'asis :-Bowler';

$search = $_POST['search'];

if (!empty($search)) {
    print "Searching for name that contains <b>$search</b> <br />";

    foreach ($teammember as $member) 
    {
        $membernew = str_replace(':', '', $member);
        $pos       = stripos($membernew, '-');

        if ($pos === false) {
            // "not in the list";
        } else {
            $membernew = substr($membernew, 0, $pos);
            $membernew = trim($membernew);
            $pos2      = stripos($membernew, $search);

            if ($pos2 === false) {
                // "Not in the list";
            } else {
                print "Member Found : <b>$membernew</b> </br>";
            }
        }
    }

}

?>
</body>
</html>