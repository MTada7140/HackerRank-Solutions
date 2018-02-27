<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Non-Divisible Subset
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf ( $_fp , '%d %d',$n,$k );
$raw_data=fgets($_fp);
$arr=explode(" ",$raw_data);
fclose($_fp);

$comb=array();
$maxsize=$n;

for($i=0;$i<$n;$i++){
    $index=$arr[$i] % $k;
    $comb[$index][1]++;    
}
if($comb[0][1]>1){$maxsize=$maxsize-$comb[0][1]+1;}
for($i=1;$i<=floor($k/2);$i++){
    if($i*2==$k && $comb[$i][1]>1){$maxsize=$maxsize-$comb[$i][1]+1;break;}
    if($comb[$i][1]>0 && $comb[$k-$i][1]>0){
        if($comb[$i][1]>$comb[$k-$i][1]){$maxsize=$maxsize-$comb[$k-$i][1];}else{$maxsize=$maxsize-$comb[$i][1];}
    }
}
echo $maxsize;
?>
