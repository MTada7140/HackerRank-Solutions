<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Repeated String
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$s);
fscanf($handle,"%ld",$n);

$length=strlen($s);
$ss = substr_count($s,"a");

$numberOfIteration=floor($n/$length);
$answer=0;

$lastStringLength=$n-$numberOfIteration*$length;

$answer=$ss*$numberOfIteration+substr_count(substr($s,0,$lastStringLength),"a");
echo $answer;
?>
