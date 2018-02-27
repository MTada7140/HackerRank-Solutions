<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Cut the sticks
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

$smallest=1000;
$numAfterStep=$n;

while($numAfterStep>0){
echo($numAfterStep."\n");$numAfterStep=0;$smallest=1000;
    for($i=0;$i<$n;$i++){
        if($arr[$i]<$smallest && $arr[$i]>0){$smallest=$arr[$i];}  
    }
    for($i=0;$i<$n;$i++){
        if($arr[$i]>0){
        $arr[$i]=$arr[$i]-$smallest;}
        if($arr[$i]>0){$numAfterStep++;}  
    }
}
?>

