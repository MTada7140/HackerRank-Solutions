<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                 Kangaroo
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d %d",$x1,$v1,$x2,$v2);

$sameplace=false;
if($x2<$x1 && $v2==$v1|| $x2>$x1 && $v2==$v1){;}else{
$numTrial=($x2-$x1) % ($v1-$v2);
if($x2>$x1 && $v2>$v1 || $x2<$x1 && $v2<$v1){;} else {
if($numTrial==0){
    $numJumps=($x2-$x1) / ($v1-$v2);
    $Position1=$x1+$v1*$numJumps;
    $Position2=$x2+$v2*$numJumps;
        if($Position1==$Position2){        $sameplace=true;}
    }
}
}
if($sameplace){echo 'YES';}else{echo 'NO';}
?>

