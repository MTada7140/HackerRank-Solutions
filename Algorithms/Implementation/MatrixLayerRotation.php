<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Matrix Layer Rotation
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d %d %d",$n,$m,$r);
for($i=0;$i<$n;$i++){
    $rawData    = fgets($_fp);
    $rawArray   = explode(" ",$rawData);
    for($j=0;$j<$m;$j++){
        $inputArray[$i][$j] = trim(preg_replace("#(?<!\r)\n#", '' , $rawArray[$j]));
    }
}
fclose($_fp);
//
if($n<$m){$depthOfArray=$n/2;}else{$depthOfArray=$m/2;}
//
for($i=0;$i<$depthOfArray;$i++){
    $workingArray[0]=($n+$m-2-4*$i)*2;
    storeOnePerimeter($workingArray,$inputArray,$n,$m,$i);
    rotateArray($workingArray,$r);
    $newArray[$i]=$workingArray;
    unset($workingArray);
}

$decodedArray=array();
decodeArray($newArray,$n,$m,$depthOfArray,$decodedArray);
//print_r($decodedArray);
for($i  = 0 ; $i < $n; $i++){
    for($j  = 0 ; $j < $m; $j++){
        echo $decodedArray[$i][$j]." ";
    }
echo "\n";
}    
echo "\n";

function storeOnePerimeter(&$target,$input,$n,$m,$depth){
    for($i=0;$i<$target[0];$i++){
        if($i<$n-$depth*2-1){
            $target[$i+1]=$input[$i+$depth][$depth];
//            echo "case1 ".$i." ".$target[$i+1]." ".($i+$depth)." ".$depth."\n";
        }
        if($i>=$n-$depth*2-1 && $i<$n+$m-$depth*4-2){
            $target[$i+1]=$input[$n-$depth-1][$i-$n+$depth*3+1];
//            echo "case2 ".$i." ".$target[$i+1]." ".($n-$depth-1)." ".($i-$n+$depth*3+1)."\n";
        }
        if($i>=$n+$m-$depth*4-2 && $i<$n*2+$m-$depth*6-3){
            $target[$i+1]=$input[$n-2-($i-($n+$m-$depth*5-1))][$m-$depth-1];
//            echo "case3 ".$i." ".$target[$i+1]." ".($n-2-($i-($n+$m-$depth*5-1)))." ".($m-$depth-1)."\n";
        }
        if($i>=$n*2+$m-$depth*6-3){
            $target[$i+1]=$input[$depth][$target[0]-$i+$depth];
//            echo "case4 ".$i." ".$target[$i+1]." ".($depth)." ".($target[0]-$i+$depth)."\n";
        }
    }
    return;
}
function rotateArray(&$target,$r){
    $length=$target[0];
    $countOfRotate=$r%($length);
    for($i=1;$i<=$length;$i++){
        $temp[$i]=$target[$i];
        if($countOfRotate>=$i){
            $target[$i]=$target[$length-$countOfRotate+$i];
        } else {
            $target[$i]=$temp[$i-$countOfRotate];            
        }
    }
    return;
}

function decodeArray($input,$n,$m,$depth,&$output){
    for($i=0;$i<$depth;$i++){
        for($j=1;$j<=$input[$i][0];$j++){
        if($j < $n-$i*2){    
            $row=$j-1+$i;$col=$i;//echo $i." ".$j." ".$row." ".$col."\n";
        }
        if($j >= $n-$i*2 && $j < $n-$i*2+$m-$i*2-1){ 
            $row=$n-1-$i;$col=$j-$n+$i*3;//echo $i." ".$j." ".$row." ".$col."\n";
        }
        if($j >= $n-$i*2+$m-$i*2-1 && $j < 2*$n-$i*4+$m-$i*2-2){ 
            $row=2*$n+$m-5*$i-$j-2;$col=$m-1-$i;//echo $i." ".$j." ".$row." ".$col."\n";
        }
        if($j >= 2*$n-$i*4+$m-$i*2-2){  
            $row=$i;$col=$input[$i][0]-$j+1+$i;//echo $i." ".$j." ".$row." ".$col."\n";
        }            
            $output[$row][$col]=$input[$i][$j];
        }
    }
    return;
}                
?>
