<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Ema's Supercomputer
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$panel=array();
fscanf($_fp,"%d %d",$n,$m);
for($j=0;$j<$n;$j++){
fscanf($_fp,"%s",$grid);
    for($k=0;$k<$m;$k++){
        $panel[$j][$k]=('G' == substr($grid,$k,1) )? 1 : 0;
    }
}
fclose($_fp);

if($n>$m){
    $potential      =   $m;
    $maxyOffset     =   $n  -  $m;
    if($m%2==0){$maxxOffset=1;$maxyOffset++;}else{$maxxOffset=0;}
}else{
    $potential      =   $n;
    $maxxOffset     =   $m  -  $n;
    if($n%2==0){$maxyOffset=1;$maxxOffset++;}else{$maxyOffset=0;}    
}

if($potential%2==0){
    $maxRim=$potential/2-1;
    $maxLength=$potential-1;
    }else{
        $maxRim=floor($potential/2);
        $maxLength=$potential;
    }

$already=array();
$foundAlready=array();
$case=-1;
$orgMaxRim=$maxRim;

for($w=0;$w<=$maxxOffset;$w++){
for($v=0;$v<=$maxyOffset;$v++){
    $maxRim=$orgMaxRim;$case++;
    for($u=0;$u<2;$u++){
        for($i=$maxRim;$i>-1;$i--){
            if($u==0){
            $result=judge($panel,$i,$n,$m,$already,$v,$w);
            } else {
            $result=judge($panel,$i,$n,$m,$already,0,0);
            }
            if($result){
                    $foundAlready[$case][$u]      =   $already;
                    $maxRim=$i;break 1;
            }
        }
    }
unset($already);
}
}

$orgMaxRim=$foundAlready[0][0][3]-1;
$maxyOffset+=2;$maxxOffset+=2;
unset($already);

for($w=0;$w<=$maxxOffset;$w++){
for($v=0;$v<=$maxyOffset;$v++){
    $maxRim=$orgMaxRim;$case++;
    for($u=0;$u<2;$u++){
        for($i=$maxRim;$i>-1;$i--){
            if($u==0){
            $result=judge($panel,$i,$n,$m,$already,$v,$w);
            } else {
            $result=judge($panel,$i,$n,$m,$already,0,0);
            }
            if($result){
                $foundAlready[$case][$u]      =   $already;
                $maxRim=$i;break 1;
            }
        }
    }
unset($already);
}
}

$answer=1;$tmpAnswer=1;
for($i=0;$i<=$case;$i++){
    for($j=0;$j<2;$j++){
    $tmpAnswer*=$foundAlready[$i][$j][0];
    }
    if($answer<$tmpAnswer){$answer=$tmpAnswer;}
    $tmpAnswer=1;    
}
echo $answer; //final output

////////////////////////////////////////////////////////
///     function : judge                             ///
///     input    : $n,$m(number of rows and columns),///
///                $panel(array of test case),       ///
///                $init(size of cross to find)      ///
///     output   : $already(found cross data)        ///
////////////////////////////////////////////////////////
function judge(&$panel,$init,$n,$m,&$already,$yoffset,$xoffset){
    for( $i = $init+$yoffset; $i < $n-$init; $i++ ){
        for($k=$init+$xoffset;$k<$m-$init;$k++){
            $tmpRow=0;$tmpCol=0;
            for($j=$i-$init;$j<$i+$init+1;$j++){
                if(!empty($already)){
                    if(  $k==$already[2] && $j>=$already[1]-$already[3] && $j<=$already[1]+$already[3]
                      || $j==$already[1] && $k>=$already[2]-$already[3] && $k<=$already[2]+$already[3]     ){
                        break 1;
                    }
                }
                $tmpRow+=$panel[$j][$k];
            }
            for($j=$k-$init;$j<$k+$init+1;$j++){
                if(!empty($already)){
                    if(  $i==$already[1] && $j>=$already[2]-$already[3] && $j<=$already[2]+$already[3]
                      || $j==$already[2] && $i>=$already[1]-$already[3] && $i<=$already[1]+$already[3]    ){
                        break 1;
                    }
                }
                $tmpCol+=$panel[$i][$j];
            }
            if($tmpRow==$init*2+1 && $tmpCol==$init*2+1 ){
                $already[0]=$init*4+1;
                $already[1]=$i;
                $already[2]=$k;
                $already[3]=$init;
                return true;
            }
        }
    }
    return false;
}
?>
