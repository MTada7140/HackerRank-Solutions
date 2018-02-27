<?php
/*//////////////////////////////////////////////////////
///       Mark and Toys
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d %d",$n,$K);
$price=explode(" ",trim(fgets($_fp)));
sort($price);
$toyCount=0;
for($i=0;$i<$n;$i++){
    if($K>=$price[$i]){$toyCount++;$K-=$price[$i];}else{break;}
}
echo $toyCount;
?>