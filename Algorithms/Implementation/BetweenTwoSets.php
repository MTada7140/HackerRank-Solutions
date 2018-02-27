<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                 Between Two Sets
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$m);
$a_temp = trim(fgets($handle));
$a = explode(" ",$a_temp);
array_walk($a,'intval');
sort($a);                              
$b_temp = trim(fgets($handle));
$b = explode(" ",$b_temp);
array_walk($b,'intval');
sort($b);                              
          
$lcma = calcLcm($a);
$gcdb = calcGcd($b);
$ans = 0;$finish = false;$multiplyer = 0;
while(!$finish){
    $multiplyer++;
    $temp = $multiplyer*$lcma;
    if($temp>$gcdb){
        $finish=true;
    } elseif($gcdb%$temp==0){
        $ans++;
    }
}
echo $ans;

function calcLcm($arr){
    $result=$arr[0];
    for($i=1;$i<count($arr);$i++){
        $result=findLcm($arr[$i],$result);
    }
    return $result;
}
function calcGcd($arr){
    $result=$arr[0];
    for($i=1;$i<count($arr);$i++){
        $result=findGcd($arr[$i],$result);
    }
    return $result;
}

function findLcm($a,$b){
    $temp=findGcd($a,$b);
    return $a*$b/$temp;
}                      
function findGcd($a,$b){
    if($a<$b){$min=$a;$max=$b;} else {$min=$b;$max=$a;}
    for($i=1;$i<=floor($min/2);$i++){
        if($min%$i==0){
            $denom=$min/$i;
            if($max%$denom==0){
                return $denom;
            }
        }
    }
    return 1;
}
?>
