<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Circular Array Rotation
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$n,$k,$q);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');
for($i=0;$i<$n;$i++){
    if($k>$n){$k=$k % $n;}
    if($i<$k){
        $newArray[$i]=trim(preg_replace("#(?<!\r)\n#", '', $a[$n-$k+$i]));  
    } else {
        $newArray[$i]=trim(preg_replace("#(?<!\r)\n#", '', $a[$i-$k]));
    }
}
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle,"%d",$m);
    echo $newArray[$m]."\n";
}
?>

