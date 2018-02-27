<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                The Hurdle Race
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$height_temp = fgets($handle);
$height = explode(" ",$height_temp);
array_walk($height,'intval');
// your code goes here
rsort($height);
if($height{0}-$k<=0){
    $ans = 0;
} else {
    $ans = $height{0}-$k;
}
echo $ans;
?>
