<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Absolute Permutation
//////////////////////////////////////////////////////////////////////////////////*/ 
$permutation=array();
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$n,$k);
    for($i=1;$i<=$n;$i++){
        if($k==0){$permutation[$i]=$i;}
        else {  if($k>=1 && $n%2>0){$permutation[1]=-1;break 1;}    
                if($n==1){$permutation[1]=1+$k;break 1;}
                if($k>=1 && $n%($k*2)>0){$permutation[1]=-1;break 1;}
                $permutation[$i]=$i+$k*pow(-1,floor(($i-1)/$k));
             }
    }
for($i = 1; $i <= $n; $i++){
echo $permutation[$i]." ";if($permutation[1]==-1){break 1;}
}
echo "\n";
unset($permutation);
}
fclose($handle);
?>
