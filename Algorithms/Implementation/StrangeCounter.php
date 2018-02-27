<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Strange Counter
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);

$initPitch=3;
$modPitch=2;
$nextGen=$initPitch;
$accumGen=$initPitch;

$finish=false;
while(!$finish){
   if($accumGen+1>$t){
       $finish=true;break;
   } 
   $nextGen=$nextGen*2;
   $accumGen+=$nextGen;
}
$curPos=$accumGen-$t+1;
echo $curPos;
?>
