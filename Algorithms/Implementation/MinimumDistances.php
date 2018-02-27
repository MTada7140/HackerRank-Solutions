<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Minimum Distances
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$A_temp = fgets($handle);
$A = explode(" ",$A_temp);
array_walk($A,'intval');
for($ii=0;$ii<$n;$ii++){
    $inputArray[$ii] = trim(preg_replace("#(?<!\r)\n#", '', $A[$ii]));
}
foreach($inputArray as $key => $value){
    $newArray[$key][key]=$key;
    $newArray[$key][value]=$value;
}
foreach ($newArray as $user) {
    $values[] = $user['value'];
}
array_multisort($values, SORT_ASC, $newArray);
//print_r($newArray);
$minDistance=5000;
for($ii=0;$ii<$n-1;$ii++){
    if($newArray[$ii][value]==$newArray[$ii+1][value]){
        $temp=abs($newArray[$ii][key]-$newArray[$ii+1][key]);
        if($temp<$minDistance){
            $minDistance=$temp;
        }
    }
}
if($minDistance==5000){
    $minDistance=-1;
}
echo $minDistance;
?>
