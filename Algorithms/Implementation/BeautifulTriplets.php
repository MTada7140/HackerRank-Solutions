<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Beautiful Triplets
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d %d",$n,$d);
$rawData=fgets($_fp);
$inputArray = explode(" ",$rawData);
for($i=0;$i<$n;$i++){
   $inputArray[$i] = trim(preg_replace("#(?<!\r)\n#", '' , $inputArray[$i]));
}
//if (in_array("Irix", $os))
$numberofTriplets=0;
for($i=0;$i<$n;$i++){
    if (in_array($inputArray[$i]+$d, $inputArray) && 
        in_array($inputArray[array_search($inputArray[$i]+$d, $inputArray)]+$d, $inputArray)){
        $numberofTriplets++;
    }
}
echo $numberofTriplets;
?>
