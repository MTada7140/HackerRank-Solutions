<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                 Birthday Chocolate
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin", "r");
function solve($n, $s, $d, $m){
    $passNum=0;
    for($i=0;$i<$n-$m+1;$i++){
        $tot=0;
        for($j=0;$j<$m;$j++){
                $tot+=$s{$i+$j};
        }
        if($tot==$d){
            $passNum++;
        }
    }
    return $passNum;
}

fscanf($handle, "%d",$n);
$s_temp = fgets($handle);
$s = explode(" ",$s_temp);
$s = array_map('intval', $s);
fscanf($handle, "%d %d", $d, $m);
$result = solve($n, $s, $d, $m);
echo $result . "\n";
?>
