<?php
/*//////////////////////////////////////////////////////
///       Priyanka and Toys
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d %d",$n,$k);
$weight=explode(" ",trim(fgets($_fp)));sort($weight);
$cost=0;
$prev=-1000;
foreach($weight as $value){
    if($value>=$prev && $value<=$prev+4){;}else{
        $cost++;$prev=$value;
    }
}
echo $cost;
?>