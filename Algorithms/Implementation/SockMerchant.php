<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                 Sock Merchant
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$c_temp = fgets($handle);
$c = explode(" ",$c_temp);
array_walk($c,'intval');

$numberOpPairs=0;

for($i=0;$i<$n;$i++){
    for($j=$i+1;$j<$n;$j++){
        if($c[$i]==$c[$j] && $c[$i]>0){
            $numberOpPairs++;
            $c[$i]=0;
            $c[$j]=0;
        }
    } 
}
echo $numberOpPairs;
?>
