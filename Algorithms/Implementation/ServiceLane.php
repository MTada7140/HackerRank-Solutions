<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Service Lane
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$t);
$width_temp = fgets($handle);
$width = explode(" ",$width_temp);
array_walk($width,'intval');
for($i=0;$i<$n;$i++){
   $width[$i] = trim(preg_replace("#(?<!\r)\n#", '' , $width[$i]));;
}
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$i,$j);
    $minWidth=3;
    for($segment=$i;$segment<=$j;$segment++){
        if($width[$segment]<$minWidth){$minWidth=$width[$segment];}
    }
    echo $minWidth."\n";
}
?>

