<?php
/*//////////////////////////////////////////////////////
///       Marc's Cakewalk
//////////////////////////////////////////////////////*/
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$calories_temp = fgets($handle);
$calories = explode(" ",$calories_temp);
array_walk($calories,'intval');
// your code goes here
rsort($calories);
$sum=0;
for($i=0;$i<count($calories);$i++){
    $sum+=$calories{$i}*pow(2,$i);
}
echo $sum;
?>