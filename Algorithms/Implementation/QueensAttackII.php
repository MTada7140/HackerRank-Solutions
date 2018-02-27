<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Queen's Attack II
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
fscanf($handle,"%d %d",$rQueen,$cQueen);
$distance=array(10000000,10000000,10000000,10000000,10000000,10000000,10000000,10000000);
for($a0 = 0; $a0 < $k; $a0++){
    fscanf($handle,"%d %d",$rObstacle,$cObstacle);
    // your code goes here
    $rDist=$rObstacle-$rQueen;
    $cDist=$cObstacle-$cQueen;
    if($rDist==0 && $cDist>0){
        if($distance{0}>$cDist){
            $distance{0}=$cDist;
        }
    } elseif($rDist==0 && $cDist<0){
        if($distance{1}>abs($cDist)){
            $distance{1}=abs($cDist);
        }
    } elseif($cDist==0 && $rDist<0){
        if($distance{3}>abs($rDist)){
            $distance{3}=abs($rDist);
        }
    } elseif($cDist==0 && $rDist>0){
        if($distance{2}>$rDist){
            $distance{2}=$rDist;
        }
    } elseif(abs($cDist)==abs($rDist) && $rDist>0 && $cDist>0){
        if($distance{4}>$rDist){
            $distance{4}=$rDist;
        }
    } elseif(abs($cDist)==abs($rDist) && $rDist<0 && $cDist>0){
        if($distance{5}>$cDist){
            $distance{5}=$cDist;
        }
    } elseif(abs($cDist)==abs($rDist) && $rDist>0 && $cDist<0){
        if($distance{6}>$rDist){
            $distance{6}=$rDist;
        }
    } elseif(abs($cDist)==abs($rDist) && $rDist<0 && $cDist<0){
        if($distance{7}>abs($rDist)){
            $distance{7}=abs($rDist);
        }
    }
}
//print_r($distance);echo "\n";
echo calcSpace($n,$cQueen,$rQueen,$distance);

function calcSpace($n,$cq,$rq,$dist){
    $res=0;
    for($i=0;$i<8;$i++){
        if($dist{$i}<10000000){$res+=$dist{$i}-1;}else{
            switch ($i) {
                case 0:
                    $res+=$n-$cq;break;
                case 1:
                    $res+=$cq-1;break;
                case 2:
                    $res+=$n-$rq;break;
                case 3:
                    $res+=$rq-1;break;
                case 4:
                    $res+=min($n-$cq,$n-$rq);break;
                case 5:
                    $res+=min($n-$cq,$rq-1);break;
                case 6:
                    $res+=min($cq-1,$n-$rq);break;
                case 7:
                    $res+=min($cq-1,$rq-1);break;
            }
        }
    }
    return $res;
}
?>

