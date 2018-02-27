<?php
/*//////////////////////////////////////////////////////
///       Jim and the Orders
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
for($i=1;$i<=$n;$i++){
    fscanf($_fp,"%d %d",$t[$i],$d[$i]);
    $customerLine[$i]=($t[$i]+$d[$i]).".".$i;
}
sort($customerLine);
foreach($customerLine as $value){
    $result=explode(".",$value);
    echo $result[1]." ";
}
?>