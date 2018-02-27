<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Intro to Tutorial Challenges
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$V);
fscanf($_fp,"%d",$n);
$input=trim(fgets($_fp));
$a=explode(" ",$input);
$res=array_search($V,$a);
echo $res;
?>
