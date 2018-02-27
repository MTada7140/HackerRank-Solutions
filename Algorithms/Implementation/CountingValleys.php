<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                 Counting Valleys
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
$rawData = trim(fgets($_fp));
$n       = $rawData;
$rawData = trim(fgets($_fp));
$steps   = $rawData;
//
$valleys = 0;$level = 0;$startValley = 0;
for($i = 0;$i<$n;$i++){
    $oneStep = substr($steps,$i,1);
    if($oneStep == 'U'){
        $level++;
        if($level==0){
            $startValley = 0;
        }
    } else {
        $level--;
        if($level==-1 && $startValley == 0){
            $startValley = 1;
            $valleys++;
        }
    }
}
echo $valleys;
?>
