<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Equalize the Array
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
$rawData=fgets($_fp);
fclose($_fp);
$inputArray=explode(" ",$rawData);
for($i=0;$i<$n;$i++){
    $inputArray[$i] = trim(preg_replace("#(?<!\r)\n#", '' , $inputArray[$i]));
}
sort($inputArray);
$prev=0;
$l=0;
$count=array();
for($i=0;$i<$n;$i++){
    if($inputArray[$i]==$prev){$count[$l]++;}else{$l++;$count[$l]++;$prev=$inputArray[$i];}
}
$maxNum=0;
$sum=0;
for($i=0;$i<=$l;$i++){
    if($count[$i]>$maxNum){$maxNum=$count[$i];}
}
echo ($n-$maxNum);
?>
