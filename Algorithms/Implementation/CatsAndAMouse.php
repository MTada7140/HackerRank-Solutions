<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                 Cats and a Mouse
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle,"%d %d %d",$x,$y,$z);
    $distA = abs($z - $x);$distB = abs($z - $y); 
    if($distA == $distB){
        echo "Mouse C"."\n";
    } elseif ($distA < $distB){
        echo "Cat A"."\n";
    } else {
        echo "Cat B"."\n";
    }
}

?>

