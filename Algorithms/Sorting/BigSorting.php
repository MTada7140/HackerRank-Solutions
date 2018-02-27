<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Big Sorting
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$unsorted = array();
for($unsorted_i = 0; $unsorted_i < $n; $unsorted_i++){
   fscanf($handle,"%s",$unsorted[]);
}
// your code goes here
$arr2 = array();
for($unsorted_i = 0; $unsorted_i < $n; $unsorted_i++){
   $arr2{$unsorted_i} = strlen($unsorted{$unsorted_i});
}
//print_r($arr2);
array_multisort($arr2,$unsorted);
for($unsorted_i = 0; $unsorted_i < $n; $unsorted_i++){
   echo $unsorted{$unsorted_i}."\n";
}

?>

