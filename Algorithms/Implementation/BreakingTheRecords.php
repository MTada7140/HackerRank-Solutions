<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                 Breaking the Records
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin", "r");
function getRecord($s){
    $res = array();
    $highScore=$s{0};$lowScore=$s{0};$highTimes=0;$lowTimes=0;
    for($i=1;$i<count($s);$i++){
        if($highScore<$s{$i}){
            $highScore=$s{$i};$highTimes++;
        }
        if($lowScore>$s{$i}){
            $lowScore=$s{$i};$lowTimes++;
        }        
    }
    $res{0}=$highTimes;$res{1}=$lowTimes;
    return $res;
}

fscanf($handle,"%d",$n);
$s_temp = fgets($handle);
$s = explode(" ",$s_temp);
$s = array_map('intval', $s);
$result = getRecord($s);
echo implode(" ", $result)."\n";
?>
