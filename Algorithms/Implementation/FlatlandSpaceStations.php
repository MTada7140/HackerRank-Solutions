<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Flatland Space Stations
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$m);
$c_temp = fgets($handle);
$input = explode(" ",$c_temp);
array_walk($input,'intval');

sort($input);
for($i=0;$i<=$m-1;$i++){
    $c[$i][0]=$input[$i];
}
for($i=0;$i<=$m-1;$i++){
    if($i==0) {
        $c[0][1]=$c[0][0];
}
    if($i==$m-1) {
        $c[$i][2]=$n-$c[$i][0]-1;
}
    if($i>0 && $i<=$m-1) {
        $c[$i][1]=floor(($c[$i][0]-$c[$i-1][0])/2);
        $c[$i-1][2]=$c[$i][1];
    }
}
$maxDistance=0;
for($i=0;$i<$m;$i++){
    if($c[$i][1]>$maxDistance){$maxDistance=$c[$i][1];}
    if($c[$i][2]>$maxDistance){$maxDistance=$c[$i][2];}
}
echo $maxDistance;
?>
