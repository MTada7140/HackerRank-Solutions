<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Climbing the Leaderboard
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin", "r");
fscanf($handle, "%i",$n);
$scores_temp = fgets($handle);
$scores = explode(" ",$scores_temp);
$scores = array_map('intval', $scores);
fscanf($handle, "%i",$m);
$alice_temp = fgets($handle);
$alice = explode(" ",$alice_temp);
$alice = array_map('intval', $alice);
// Write Your Code Here
$newScore=array();
$newScore{0}=$scores{0};$j=0;
for($i=1;$i<count($scores);$i++){
    if($newScore{$j}>$scores{$i}){
        $j++;$newScore{$j}=$scores{$i};
    }
}
//print_r($newScore);echo "<br>";
$newAlice=$alice;
rsort($newAlice);
    $i=0;$j=0;$rank=array();
    while($j<count($newScore)){
        if($newAlice{$i}>=$newScore{$j}){
            $rank{$newAlice{$i}}=$j+1;$i++;
        } else {
            $j++;
        }
    }
//    print_r($rank);echo "<br>";
    $sur=count($newAlice)-$i;//echo " sur ".$sur."  ";
    if($sur > 0){
        for($k=$i;$k<count($alice);$k++){
            $rank{$newAlice{$k}}=$j+1;
        }
    }
    for($i=0;$i<count($alice);$i++){    
    echo $rank{$alice{$i}}."\n";}
?>
