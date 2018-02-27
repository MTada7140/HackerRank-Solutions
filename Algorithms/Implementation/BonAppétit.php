<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                 Bon Appétit
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d %d",$n,$k);
$rawData=trim(fgets($_fp));
$c=explode(" ",$rawData);
$AnnaCharged=trim(fgets($_fp));
fclose($_fp);
//
$AnnaCorrectShare=0;
//
for($i=0;$i<$n;$i++){
  if($i==$k){$AnnaCorrectShare+=0;}else{$AnnaCorrectShare+=$c[$i]/2;}      
}
$diff=$AnnaCharged-$AnnaCorrectShare;
//
if($diff==0){echo 'Bon Appetit';}else{echo $diff;}
?>
