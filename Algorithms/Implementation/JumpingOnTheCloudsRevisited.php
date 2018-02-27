<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Sequence Equation
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$c_temp = fgets($handle);
$c = explode(" ",$c_temp);
array_walk($c,'intval');

$finish=false;
$remainEnergy=100;

while(!$finish){
    $nextNoOfCloud=($curNo+$k)%$n;
    if($c[$nextNoOfCloud]==0){$remainEnergy-=1;}else{$remainEnergy-=3;}
    if($nextNoOfCloud==0){$finish=true;break;} 
    $curNo=$nextNoOfCloud;

}
echo $remainEnergy;
?>

