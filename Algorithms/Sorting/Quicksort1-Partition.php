<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Quicksort 1 - Partition
//////////////////////////////////////////////////////////////////////////////////*/ 
function  dividePartition( &$ar) {
    $pivot=$ar[0];
    $left =array();
    $right=array();$p=array();
    for($i=0;$i<count($ar);$i++){
        if($ar[$i]>$pivot){
            $right[count($right)+1]=$ar[$i];
        }
        elseif($ar[$i]==$pivot){
            $p[count($p)+1]=$ar[$i];
        } else{
            $left[count($left)+1]=$ar[$i];
        }
    }
    $temp = array_merge($left, $p);
    $temp = array_merge($temp, $right);
    $ar   = $temp;
    return;
}

$fp = fopen("php://stdin", "r");

fscanf($fp, "%d", $m);
$ar = explode(' ', trim(fgets($fp)));

dividePartition($ar);
foreach($ar as $value){echo $value." ";}

?>

