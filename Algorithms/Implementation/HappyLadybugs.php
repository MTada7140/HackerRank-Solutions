<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Happy Ladybugs
//////////////////////////////////////////////////////////////////////////////////*/ 
$test="ABCDEFGHIJKLMNOPQRSTUVWXYZ_";
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$Q);
for($a0 = 0; $a0 < $Q; $a0++){
    fscanf($handle,"%d",$n);
    fscanf($handle,"%s",$b);
    $prev=-1;
for($i=0;$i<$n;$i++){
    if($i<$n-1 && substr($b,$i,1 !="_")){
        if($prev>=$i-1 && substr($b,$i,1)==substr($b,$i+1,1)){
            $prev=$i+1;
        }
    } else {
        if($prev==$i){
            $y=true;$board[26]=100;
        }
    }
    $board[strpos($test,substr($b,$i,1))]++;
}

foreach($board as $key => $value) {
    if($value==1 && $key!=26)
    {$y=false;break;}
    else {$y=true;}
}
    if($y && $board[26]>0){echo "YES\n";} else {echo "NO\n";}
unset($board);$prev=-1;
}

?>

