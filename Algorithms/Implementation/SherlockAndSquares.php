<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Sherlock and Squares
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
for($i=1;$i<=$n;$i++){
    fscanf($_fp,"%d %d",$a,$b);
    echo floor(sqrt($b))-ceil(sqrt($a))+1;echo "\n";
}
?>
