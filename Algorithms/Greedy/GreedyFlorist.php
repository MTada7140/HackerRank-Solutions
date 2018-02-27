<?php
/*//////////////////////////////////////////////////////
///       Greedy Florist
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d %d",$n,$k);
$price=explode(" ",trim(fgets($_fp)));
//print_r($price);
rsort($price);
$totalCost=0;
$factor=1;
$noOfVisit=$k;
foreach($price as $value){
    $totalCost+=$value * $factor;
    $noOfVisit--;
    if($noOfVisit==0){
        $factor++;
        $noOfVisit=$k;
    }
}
echo $totalCost;
?>