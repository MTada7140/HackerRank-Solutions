<?php
/*//////////////////////////////////////////////////////////////////////////////////
///             Find the Median
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$n =trim(fgets($_fp));
$ser = explode(" ",trim(fgets($_fp)));
sort($ser);
$temp=floor($n/2);
echo $ser{$temp};
?>
