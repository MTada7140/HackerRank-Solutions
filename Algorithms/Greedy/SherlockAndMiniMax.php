<?php
/*//////////////////////////////////////////////////////
///       Sherlock and MiniMax
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
$array=explode(" ",trim(fgets($_fp)));
fscanf($_fp,"%d %d",$p,$q);
fclose($_fp);
$maxMin=0;$ans=0;
sort($array);
$maxInterval=0;$ans=0;
for($i=0;$i<$n-1;$i++){
    if($array[$i] >= $p&&$array[$i+1]<=$q){
        $temp=floor(($array[$i+1]-$array[$i])/2);
        if($maxInterval<$temp){
            $ans=floor(($array[$i]+$array[$i+1])/2);
            $maxInterval=$ans-$array[$i];
        }
    } elseif($array[$i] <= $p && $array[$i+1]>=$p){
        if(floor(($array[$i+1]+$array[$i])/2)<$p){
            $temp=($array[$i+1]-$p);
            $tempAns=$p;
        }else{
            $temp=floor(($array[$i+1]-$array[$i])/2);
            $tempAns=floor(($array[$i]+$array[$i+1])/2);
        }
            if($maxInterval<$temp){
            $ans=$tempAns;
            $maxInterval=$ans-$array[$i];
        }
    } elseif($array[$i] <= $q && $array[$i+1]>=$q){
        if(floor(($array[$i+1]+$array[$i])/2)>$q){
            $temp=($q-$array[$i]);
            $tempAns=$q;
        }else{
            $temp=floor(($array[$i+1]-$array[$i])/2);
            $tempAns=floor(($array[$i]+$array[$i+1])/2);
        }
            if($maxInterval<$temp){
            $ans=$tempAns;
            $maxInterval=$ans-$array[$i];
        }
    }
}
$lowerInterval=0;
$upperInterval=0;
if($p<$array[0]){$lowerInterval=($array[0]-$p);}
if($q>$array[$n-1]){$upperInterval=($q-$array[$n-1]);}
if($lowerInterval>=$maxInterval && $lowerInterval>=$upperInterval){
    $ans=$p;
}elseif($upperInterval>$maxInterval && $upperInterval>$lowerInterval){
    $ans=$q;
}
echo $ans;
?>