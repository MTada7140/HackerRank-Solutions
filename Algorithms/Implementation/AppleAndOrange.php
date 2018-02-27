<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Apple and Orange
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$s,$t);
fscanf($handle,"%d %d",$a,$b);
fscanf($handle,"%d %d",$m,$n);
$apple_temp = fgets($handle);
$apple = explode(" ",$apple_temp);
array_walk($apple,'intval');
$numberApple=0;
for($ii=0;$ii<$m;$ii++){
    $apple[$ii] = trim(preg_replace("#(?<!\r)\n#", '', $apple[$ii]));
    $temp=$apple[$ii]+$a;
    if($temp>=$s && $temp<=$t){$numberApple++;}
}
echo $numberApple."\n";
$numberOrange=0;
$orange_temp = fgets($handle);
$orange = explode(" ",$orange_temp);
array_walk($orange,'intval');
for($ii=0;$ii<$n;$ii++){
     $orange[$ii] = trim(preg_replace("#(?<!\r)\n#", '', $orange[$ii]));    
    $temp=$orange[$ii]+$b;
    if($temp>=$s && $temp<=$t){$numberOrange++;}
}
echo $numberOrange."\n";
?>
