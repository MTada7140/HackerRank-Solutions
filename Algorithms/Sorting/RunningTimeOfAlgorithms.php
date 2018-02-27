<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Running Time of Algorithms
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
function insertionSort(&$arr){
    $count=0;
   for($i=1;$i<count($arr);$i++){
      $val = $arr[$i];
      $j = $i-1;
      while($j>=0 && $arr[$j] > $val){
         $arr[$j+1] = $arr[$j];$count++;
         $j--;
      }
      $arr[$j+1] = $val;
   }
    return $count;
}
 
$handle = fopen ("php://stdin","r");
$t = trim(fgets($handle));
$arr = explode(" ", fgets($handle));

echo insertionSort($arr);
?>
