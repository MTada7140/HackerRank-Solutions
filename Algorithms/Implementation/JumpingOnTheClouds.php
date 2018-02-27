<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Jumping on the Clouds
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$c_temp = fgets($handle);
$c = explode(" ",$c_temp);
array_walk($c,'intval');

$numberOfSteps=0;
$curNum=0;


while($curNum<$n-1){
    $numberOfSteps++;
    if($c[$curNum+2]==0 && $curNum+2<=$n-1){$curNum=$curNum+2;}else{$curNum++;}
}


echo $numberOfSteps;
?>

