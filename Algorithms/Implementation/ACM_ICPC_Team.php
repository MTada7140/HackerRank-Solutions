<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               ACM ICPC Team
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$m);
$topic = array();
for($topic_i = 0; $topic_i < $n; $topic_i++){
   fscanf($handle,"%s",$topic[]);
}
$maxTopic=0;$pairCount=0;
for($i=0;$i<$n-1;$i++){
    for($j=$i+1;$j<$n;$j++){
        $result=($topic[$i] | $topic[$j]);
        $temp = countTopic($result);
        if($temp>$maxTopic){
            $maxTopic=$temp;$pairCount=1;
        } else {
            if($temp==$maxTopic){
                $pairCount++;
            }
        }
    }
}
    echo $maxTopic."\n".$pairCount;

function countTopic($a){
    $count=0;
    for($i=0;$i<strlen($a);$i++){
        if(substr($a,$i,1)=='1'){$count++;}
    }
    return $count;
}
?>

