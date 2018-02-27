<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Closest Numbers
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$n   = trim(fgets($_fp));
$ser = explode(" ",trim(fgets($_fp)));
sort($ser);
$minNum = 100000000;
$pairs = array();
for($i=0;$i<$n-1;$i++){
    $temp=abs($ser{$i}-$ser{$i+1});
    if($temp<$minNum){
        $pairs = array();$minNum=$temp;
    }
    if($temp==$minNum){
        $pairs{count($pairs)}=$ser{$i};$pairs{count($pairs)}=$ser{$i+1};
    } 
}
for($i=0;$i<count($pairs);$i++){
    if($i==0){
        echo $pairs{$i};
    } else {
        echo " ".$pairs{$i};
    }
}
?>
