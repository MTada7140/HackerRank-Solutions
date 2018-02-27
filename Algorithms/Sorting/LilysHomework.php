<?php
/*//////////////////////////////////////////////////////////////////////////////////
///            Lily's Homework
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin", "r");
function lilysHomework($arr) {
    // Complete this function
    $atimes=0;
    $dtimes=0;
    $copyArr=$arr;
    $idx=array();
    for($i=0;$i< count($arr);$i++){
        $idx[$arr[$i]]=$i;
    }
    $copyIdx=$idx; sort($arr);$aArr=$arr;rsort($arr);$dArr=$arr;$arr=$copyArr;
    for($i=0;$i< count($arr);$i++){
        if( $aArr[$i]!=$arr[$i]){
            $atimes++;
            $temp                 = $arr[$i];
            $arr[$i]              = $aArr[$i];
            $temp2                = $idx[$aArr[$i]];
            $arr[$idx[$aArr[$i]]] = $temp;
            $idx[$temp]           = $temp2;
            $idx[$aArr[$i]]       = $i;
        }
        if( $dArr[$i]!=$copyArr[$i]){
            $dtimes++;
            $temp                         = $copyArr[$i];
            $copyArr[$i]                  = $dArr[$i];
            $temp2                        = $copyIdx[$dArr[$i]];
            $copyArr[$copyIdx[$dArr[$i]]] = $temp;
            $copyIdx[$temp]               = $temp2;
            $copyIdx[$dArr[$i]]           = $i;
        }

    }
    return min($atimes,$dtimes);    
}

fscanf($handle, "%i",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);
$result = lilysHomework($arr);
echo $result . "\n";

function flat($arr,$name){
    $line="Arry '".$name."' = ";
    foreach($arr as $k => $v){
        $line.="(".$k.") ".$v." / ";        
    }
    echo $line."\n";
    return;
}
?>

