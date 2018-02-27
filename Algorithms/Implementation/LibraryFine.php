<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Library Fine
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$d1,$m1,$y1);
fscanf($handle,"%d %d %d",$d2,$m2,$y2);

$str1=$d1.'-'.$m1.'-'.$y1;
$str2=$d2.'-'.$m2.'-'.$y2;
$dateReturned=date_create_from_format("j-m-Y",$str1);
$dateExpected=date_create_from_format("j-m-Y",$str2);

if($dateReturned<=$dateExpected){
    $fine=0;
} else {
    if($y1>$y2){
        $fine=10000;
    } else {
        if($m1>$m2){
            $fine=500*($m1-$m2);
        } else{
               $fine=15*($d1-$d2);
        }
    }    
}

echo $fine;
?>
