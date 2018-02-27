<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                 Drawing Book
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin", "r");
function solve($n, $p){
    $fp = 0;$lp = 0;
    if($n%2==0){
        $lastPageContains=1;   
    } else{
        $lastPageContains=2;
    }
    $pageReached=false;
    $i = 0;
    while(!$pageReached){
        if($i == 0){
            $fp = 1;$lp = $n - $lastPageContains + 1;
        } else {
            $fp += 2;$lp -= 2;
        }
        if($fp >= $p || $lp <= $p){
            $pageReached = true;
        }
        $i++;
    }
    return $i-1;
}

fscanf($handle,"%d",$n);
fscanf($handle,"%d",$p);
$result = solve($n, $p);
echo $result . "\n";

?>
