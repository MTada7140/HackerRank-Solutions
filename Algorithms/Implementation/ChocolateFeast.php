<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Chocolate Feast
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d %d",$n,$c,$m);
    $noOfChocolate=floor($n/$c);
    $noOfWrapper  =$noOfChocolate;
    $finish=false;
    while(!$finish){
        $leftOver     =$noOfWrapper % $m;
        $noOfAddition  =  floor($noOfWrapper/$m);
        //echo "wrapper= ".$noOfWrapper." leftOver= ".$leftOver." \n";
        $noOfChocolate += $noOfAddition;
        $noOfWrapper   =  $noOfAddition+$leftOver;
        $noOfAddition=0;$leftOver=0;
        if($noOfWrapper<$m){
            $finish=true;
        } 
    }
    echo $noOfChocolate."\n";
}

?>
