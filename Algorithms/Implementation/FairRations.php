<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Fair Rations
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$N);
$B_temp = fgets($handle);
$B = explode(" ",$B_temp);
array_walk($B,'intval');
for($ii=0;$ii<$N;$ii++){
    $inputLine[$ii] = trim(preg_replace("#(?<!\r)\n#", '', $B[$ii]));
}
foreach($inputLine as $key => $value){
    if($value%2==1){
        $newArray[]= $key;
    }    
}

$numberOfLoafs=0;$k=0;
if(empty($newArray)){$y=true;}else{
if(count($newArray)%2==1){$y=false;}else{
    for($i=0;$i<count($newArray)-1;$i=$i+2){
        if($newArray[$i+1]-$newArray[$i]>2){
            for($j=1;$j<$newArray[$i+1]-$newArray[$i]-1;$j=$j+2){
                $newNewArray[$k]=$newArray[$i]+$j;
                $newNewArray[$k+1]=$newArray[$i]+$j+1;
                $k=count($newNewArray);$numberOfLoafs+=2;
            }
        }
    }
if(!empty($newNewArray)){
    $newNewNewArray=array_merge($newArray,$newNewArray);
    sort($newNewNewArray);
    } else {$newNewNewArray=$newArray;}
    for($i=0;$i<count($newNewNewArray)-1;$i=$i+2){
        $y=true;
        $numberOfLoafs+=pow(2,$newNewNewArray[$i+1]-$newNewNewArray[$i]);
    }
}
}
//print_r($newNewNewArray);

if($y)
{echo $numberOfLoafs;}else{echo "NO";}
?>


