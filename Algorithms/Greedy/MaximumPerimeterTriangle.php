<?php
/*//////////////////////////////////////////////////////
///       Maximum Perimeter Triangle
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
$sticks=explode(" ",trim(fgets($_fp)));
fclose($_fp);
$possibleSides=array();
for($i=0;$i<$n-2;$i++){
    for($j=$i+1;$j<$n-1;$j++){
        for($k=$j+1;$k<$n;$k++){
            if(checkTriangle($sticks[$i],$sticks[$j],$sticks[$k])){
                $id=count($possibleSides);
                $possibleSides[$id][1]=$sticks[$i];    
                $possibleSides[$id][2]=$sticks[$j];    
                $possibleSides[$id][3]=$sticks[$k];    
            }
        }
    }
}
if(count($possibleSides)==0){
    $result=-1;
}else{
    $output=array();
    $output=maximumPerimeter($possibleSides,$output);
    if(count($output)==1){
        $result=$output[0][1]." ".$output[0][2]." ".$output[0][3];
    }else{
        $maxSide=0;$maxMinSide=0;
        for($ll=0;$ll<count($output);$ll++){
            if($output[$ll][3]>$maxSide){
                $result=$output[$ll][1]." ".$output[$ll][2]." ".$output[$ll][3];
                $maxMinSide=[$ll][1];$maxSide=$output[$ll][3];
            }elseif($output[$ll][3]==$maxSide){
                if($maxMinSide<$output[$ll][1]){
                    $maxMinSide=$output[$ll][1];
                    $result=$output[$ll][1]." ".$output[$ll][2]." ".$output[$ll][3];
                }
            }
        }
    }
}
echo $result;

function checkTriangle($a,$b,$c){
    if($a+$b>$c&&$a+$c>$b&&$b+$c>$a){return true;}else{return false;}
}
function maximumPerimeter($input){
    $maxPeri=0;
    for($i=0;$i<count($input);$i++){
        $temp=$input[$i][1]+$input[$i][2]+$input[$i][3];
        if($maxPeri<$temp){
            unset($output);
            sort($input[$i]);
            $output[0][1]=$input[$i][0];
            $output[0][2]=$input[$i][1];
            $output[0][3]=$input[$i][2];
            $maxPeri=$temp;
        } elseif($maxPeri==$temp){
            sort($input[$i]);
            $id=count($output);
            $output[$id][1]=$input[$i][0];
            $output[$id][2]=$input[$i][1];
            $output[$id][3]=$input[$i][2];
        }
    }
    return $output;
}
?>