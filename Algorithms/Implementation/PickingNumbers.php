<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Picking Numbers
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');
//
sort($a);
$compA = array();
$compA{0}{0} = $a{0};$compA{1}{0} = 1;$j= 0;
for($i = 1;$i<$n;$i++){
    if($compA{0}{$j}==$a{$i}){
       $compA{1}{$j}++;
    } else {
       $j++;
       $compA{0}{$j}=$a{$i};
       $compA{1}{$j}=1;
    }
}

$maxNum = 0;
if(count($compA{0}==1)){
    $maxNum = $compA{1}{0};
}
for($i = 0;$i<count($compA{0})-1;$i++){
    if($compA{0}{$i+1}-$compA{0}{$i}==1){
        $temp = $compA{1}{$i+1} + $compA{1}{$i};
    } else {
        $temp = $compA{1}{$i};
    }
    if($temp>$maxNum){
        $maxNum=$temp;
    }
}
echo $maxNum;
?>

