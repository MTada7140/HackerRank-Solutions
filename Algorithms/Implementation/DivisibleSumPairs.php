<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                 Divisible Sum Pairs
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');

$numberOfCombination=0;

for($i=0;$i<$n;$i++){
    for($j=$i+1;$j<$n;$j++){
        $result=($a[$i]+$a[$j]) % $k;
        if($result==0){
            $numberOfCombination++;
        }
    }
}
echo $numberOfCombination;
?>
