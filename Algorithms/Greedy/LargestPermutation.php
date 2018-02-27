<?php
/*//////////////////////////////////////////////////////
///       Largest Permutation
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d %d",$n,$k);
$p=explode(" ",trim(fgets($_fp)));
    for($i=0;$i<$n;$i++){
        $index[$p[$i]]=$i;
    }
    for($i=0;$i<$n && $k>0;$i++){
        if($p[$i]==$n-$i){
            continue;
        }
        $p[$index[$n-$i]]=$p[$i];
        $index[$p[$i]]=$index[$n-$i];
        $p[$i]=$n-$i;
        $index[$n-$i]=$i;
        $k--;
    }
foreach($p as $value){echo $value." ";}
?>