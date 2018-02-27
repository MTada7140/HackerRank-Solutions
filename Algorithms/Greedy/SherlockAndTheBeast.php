<?php
/*//////////////////////////////////////////////////////
///       Sherlock and The Beast
//////////////////////////////////////////////////////*/
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d",$n);
    if($n<3||$n==4||$n==7){
        $result=-1;
    }elseif($n%3==0){
            $result=makeInt(5,$n);
        }elseif($n%3==2){
                $result=makeInt(5,$n-5).makeInt(3,5);
            }elseif($n%3==1){
                     $result=makeInt(5,$n-10).makeInt(3,10);
                }
    echo $result."\n";
    }

function makeInt($digit,$length){
    $res="";
    for($i=1;$i<=$length;$i++){
        $res.=$digit;
    }
    return $res;
}
?>
