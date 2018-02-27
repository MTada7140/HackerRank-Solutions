<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                 Day of the Programmer
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin", "r");
function solve($year){
    $months=array(31,28,31,30,31,30,31,31,30,31,30,31);
    if(leapYear($year)){ 
        $months{1}=29;
    } elseif($year==1918){
        $months{1}=15;
    } else { 
        $months{1}=28;
    }
    $restDay=256;$i=0;
    while($restDay>0 && $i<12){
        $restDay=$restDay-$months{$i};$i++;
    }
    $ansDay=$restDay+$months{$i-1};$ansMonth=$i;
    if($ansDay<10){
        $ansDay = '0'.$ansDay;
    }
    if($ansMonth<10){
        $ansMonth = '0'.$ansMonth;
    }
    $ans=$ansDay.".".$ansMonth.".".$year;
    return $ans;
}
function leapYear($yr){
    if($yr<1918){
        if($yr%4==0){
            return true;
        } else {
            return false;
        } 
    } else {
        if($yr%400==0){
            return true;
        } elseif($yr%100==0){
            return false;
        } elseif($yr%4==0){
            return true;
        }
    }
}

fscanf($handle, "%d",$year);
$result = solve($year);
echo $result . "\n";

?>

