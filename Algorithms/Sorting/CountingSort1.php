<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Counting Sort 1
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
$inputData=trim(fgets($_fp));
fclose($_fp);
for($i=0;$i<100;$i++){
    $sumArray[$i]=0;
}
seperateArray($inputData,$sumArray);
foreach($sumArray as $value){echo $value." ";}

function seperateArray($string,&$sum){
$offset=0;
$finish=false;
while(!$finish){
    $res=preg_match("[\D|\Z]", $string, $matchList, PREG_OFFSET_CAPTURE,$offset);
    if($res===false){
        $finish=true;
    }else{
        $charLocation = $matchList[0][1];
        $item=substr($string,$offset,$charLocation-$offset);
        $offset=$charLocation+1;//echo "item= ".$charLocation;
        if($item>=0){
            if(array_key_exists($item, $sum)){
                $sum[$item]++;    
            }else{
                $sum[$item]=1;
            }
        }
    }
}
return;
}
?>
