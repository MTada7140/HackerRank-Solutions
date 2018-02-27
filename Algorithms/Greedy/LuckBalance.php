<?php
/*//////////////////////////////////////////////////////
///       Luck Balance
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d %d",$n,$k);
$sum=0;$importance=0;$impArray=array();
for($i=1;$i<=$n;$i++){
    fscanf($_fp,"%d %d",$luck,$imp);
    $sum+=$luck;$importance+=$imp;
    if($imp==1){$impArray[count($impArray)]=$luck;}
}
fclose($_fp);
sort($impArray);
for($i=0;$i<$importance-$k;$i++){
   $sum-=$impArray[$i]*2;
}
echo $sum."\n";
?>