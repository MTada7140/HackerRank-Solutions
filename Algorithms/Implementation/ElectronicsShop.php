<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                 Electronics Shop
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin", "r");
function getMoneySpent($keyboards, $drives, $s){
    $leftMoney = 0; $minLeft = 9999999; 
    for($i = 0;$i<count($keyboards);$i++){
        $leftMoney = $s - $keyboards{$i};
        if($leftMoney>0){
            for($j = 0;$j<count($drives);$j++){
                $leftMoney2 = $leftMoney - $drives{$j};
                if($leftMoney2>=0 && $minLeft > $leftMoney2){
                    $minLeft = $leftMoney2;
                }
            }
        }
    }
    if($minLeft==9999999){
        $moneySpent = -1;
    } else {
        $moneySpent = $s - $minLeft;
    } 
    return $moneySpent;
}

fscanf($handle,"%d %d %d",$s,$n,$m);
$keyboards_temp = fgets($handle);
$keyboards = explode(" ",$keyboards_temp);
$keyboards = array_map('intval', $keyboards);
$drives_temp = fgets($handle);
$drives = explode(" ",$drives_temp);
$drives = array_map('intval', $drives);
//  The maximum amount of money she can spend on a keyboard and USB drive, or -1 if she can't purchase both items
$moneySpent = getMoneySpent($keyboards, $drives, $s);
echo $moneySpent . "\n";

?>
