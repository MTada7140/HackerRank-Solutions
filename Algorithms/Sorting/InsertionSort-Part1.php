<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Insertion Sort - Part 1
//////////////////////////////////////////////////////////////////////////////////*/ 
function insertionSort(&$a,$value,$pos){
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
$ar = array();
$s=trim(fgets($fp));
$ar = explode(" ", $s);
$p=$ar[$m-1];
$res=false;
for($i=count($ar)-1;$i >=0 ;$i--){
    $res=insertionSort($ar,$p,$i);
    foreach($ar as $value){echo $value." ";}
    echo "\n";
    if($res){break;}
}
?>
