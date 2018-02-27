<?php
/*//////////////////////////////////////////////////////
///       Max Min
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
fscanf($_fp,"%d",$k);
for($i=0;$i<$n;$i++){
    fscanf($_fp,"%d",$list[$i]);    
}
fclose($_fp);
$diff=array();
sort($list);
for($i=0;$i<=$n-$k;$i++){
    $diff[count($diff)]=abs($list[$i+$k-1]-$list[$i]);
}
$ans=10000000000;
foreach($diff as $value){
    if($ans>$value){$ans=$value;}
}
echo $ans;
?>