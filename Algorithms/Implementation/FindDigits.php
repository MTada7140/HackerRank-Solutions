<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Find Digits
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d",$n);
    $numberOfLoop=ceil(log10($n));
    $temp=$n;
    for($i=1;$i<=$numberOfLoop;$i++){
        $digit[$i]=$temp%10;$temp=floor($temp/10);
    }
    $numberOfDivisible=0;
    for($i=1;$i<=$numberOfLoop;$i++){
    if($digit[$i]>0){
        if($n % $digit[$i] == 0){
                $numberOfDivisible++;
            }
        }
    }
    echo $numberOfDivisible."\n";
}

?>

