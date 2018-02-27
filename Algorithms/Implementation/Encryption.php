<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Encryption
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$s);
fclose($handle);
//
$columns    =  ceil(sqrt(strlen($s)));
$rows       =  ceil(strlen($s)/$columns);

for($i=0;$i<$rows;$i++){
    if((strlen($s)-$i*$columns)>=$columns){
        $grid[$i]=substr($s,$i*$columns,$columns);
    } else {
        $grid[$i]=substr($s,$i*$columns,(strlen($s)-$i*$columns));        
    }
}
$output="";
for($j=0;$j<$columns;$j++){
    for($i=0;$i<$rows;$i++){
        $output.=substr($grid[$i],$j,1);
    }
    echo $output." ";$output="";
}
//print_r($grid);
?>
