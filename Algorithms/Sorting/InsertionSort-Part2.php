<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Insertion Sort - Part 2
//////////////////////////////////////////////////////////////////////////////////*/ 
function insertionSort2(&$a,$value,$pos){
    if($a[$pos-1]>$value){    
        $a[$pos]=$a[$pos-1];
        return false;
    }else{
            $a[$pos]=$value;
            return true;
    }
}
$fp = fopen("php://stdin", "r");


fscanf($fp, "%d", $m);
$temp = trim(fgets($fp));
$arr = explode(' ',$temp);

for($i = 1; $i < $m; $i++){
    $value=$arr[$i];
    for($j = $i; $j >= 0; $j--){    
        $res=insertionSort2($arr,$value,$j);
        if($res){break 1;}
    }
    foreach($arr as $value){echo $value." ";}
    echo "\n";
}
?>
