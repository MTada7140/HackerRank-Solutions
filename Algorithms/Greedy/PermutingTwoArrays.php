<?php
/*//////////////////////////////////////////////////////
///       Permuting Two Arrays
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$q);
for($cases=1;$cases<=$q;$cases++){
    fscanf($_fp,"%d %d",$n,$k);
    $a=explode(" ",trim(fgets($_fp)));sort($a);
    $b=explode(" ",trim(fgets($_fp)));sort($b);
    $result="YES";
    for($i=0;$i<$n;$i++){
        if($a[$i]+$b[$n-$i-1]<$k){$result="NO";break 1;}        
    }
    echo $result."\n";
}
?>