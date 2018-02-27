<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Sequence Equation
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle=fopen ("php://stdin", "r");
$rawdata=trim(fgets($handle));
$n = $rawdata;
$rawdata=trim(fgets($handle));
$p = explode(" ",$rawdata);
$q = array();
for($i=0;$i<$n;$i++){
    $q{$p{$i}}=$i+1;
}
for($i=1;$i<=$n;$i++){
    $ans=$q{$q{$i}};
    echo $ans."\n";
}
?>

