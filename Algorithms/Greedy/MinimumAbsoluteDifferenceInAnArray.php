<?php
/*//////////////////////////////////////////////////////
///       Minimum Absolute Difference in an Array
//////////////////////////////////////////////////////*/
$handle = fopen ("php://stdin", "r");
function minimumAbsoluteDifference($n, $arr) {
    // Complete this function
    $ans = 1000000;
    sort($arr);
    for($i= 0;$i<$n-1;$i++){
            $temp=abs($arr{$i}-$arr{$i+1});
            if($ans>$temp){
                $ans=$temp;
            }
    }
    return $ans;
}

fscanf($handle, "%i",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);
$result = minimumAbsoluteDifference($n, $arr);
echo $result . "\n";

?>
