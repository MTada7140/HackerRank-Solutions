<?php
/*//////////////////////////////////////////////////////
///       Team Formation
//////////////////////////////////////////////////////*/
error_reporting(E_ERROR | E_PARSE);
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$t = trim(fgets($_fp));
for($a0 = 0;$a0<$t;$a0++){
    $members=explode(" ",trim(fgets($_fp)));
    $n=$members{0};
    if($n==0){
        echo $n."\n";
    }
    $group=array();
    
    array_shift($members);
    sort($members);$skills=array();
    for($i= 0;$i<$n;$i++){
        if(isset($skills{$members{$i}})){
            $skills{$members{$i}}++;
        } else {
            $skills{$members{$i}}=1;
        }
    }
//    
    $flevel=-10000000000; // store the level of previous record
    $groupPos=0;          // first position of group to be added
    $fnumP=0;             // store the previous number of contestants 
    foreach($skills as $level => $numP ){
        if($flevel + 1 == $level){
            if($fnumP == $numP){
                for($i=0;$i<$numP;$i++){
                    $group{$i+$groupPos}++;
                }
            } elseif($fnumP > $numP) {
                $groupPos += $fnumP-$numP;
                for($i=0;$i<$numP;$i++){
                    $group{$i+$groupPos}++;
                }
            } else {
                for($i=0;$i<$fnumP;$i++){
                    $group{$i+$groupPos}++;
                }
                for($i=0;$i<$numP-$fnumP;$i++){
                    $group[]=1;
                }
            }
        } else {
            $groupPos=count($group);
            for($i=0;$i<$numP;$i++){
                $group[]=1;
            }
        }
        $flevel=$level;$fnumP=$numP;
    }
    if($n>0){echo min($group)."\n";}    
}
?>