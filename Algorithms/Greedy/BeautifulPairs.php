<?php
/*//////////////////////////////////////////////////////
///       Beautiful Pairs
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
$a=explode(" ",trim(fgets($_fp)));
$b=explode(" ",trim(fgets($_fp)));
$countOfPairs=0;
$markB=array();
for($i=0;$i<$n;$i++){
    for($j=0;$j<$n;$j++){
        if($a[$i]==$b[$j]){$countOfPairs++;$b[$j]=-1;break 1;}
    }
}
if($countOfPairs<$n)
{echo $countOfPairs+1;}else{echo $countOfPairs-1;}
?>