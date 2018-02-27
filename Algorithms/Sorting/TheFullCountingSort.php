<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              The Full Counting Sort
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);

for($i=0;$i<100;$i++){
    $sumArray[$i][0]=0;
}
for($i=0;$i<$n;$i++){
$inputData=explode(" ",trim(fgets($_fp)));
if(array_key_exists($inputData[0], $sumArray)){
        $sumArray[$inputData[0]][0]++;
            $sumArray[$inputData[0]][$sumArray[$inputData[0]][0]]=$inputData[1];
            
    }else{
        $sumArray[$inputData[0]][0]=1;
        
    }
    setStringToArray($inputData[0],$inputData[1],$sumArray,$n,$i);
}
fclose($_fp);
//print_r($sumArray);
for($i=0;$i<count($sumArray);$i++) {
    if($sumArray[$i][0]>0){
        for($j=1;$j<=$sumArray[$i][0];$j++){
            echo $sumArray[$i][$j]." ";
        }
    }
}

function setStringToArray($index,$str,&$sum,$n,$i){
    if($i>=$n/2){
        $sum[$index][$sum[$index][0]]=$str; return;
    } else {
        $sum[$index][$sum[$index][0]]='-'; return;
    }   
}
?>
