<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                 Migratory Birds
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin", "r");
function migratoryBirds($n, $ar) {
    $result = array(0,0,0,0,0,0);
    for($i=0;$i<$n;$i++){
        $result{$ar{$i}}++;
    }
    $ans = 0;$max = 0;
    for($i=1;$i<=5;$i++){
        if($max<$result{$i}){
            $max = $result{$i};$ans = $i;
        }
    }
    return $ans;
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = migratoryBirds($n, $ar);
echo $result . "\n";

?>

