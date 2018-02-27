<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Cavity Map
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$grid = array();
for($grid_i = 0; $grid_i < $n; $grid_i++){
   fscanf($handle,"%s",$grid[]);
}
for($i=1;$i<$n-1;$i++){
    for($j=1;$j<$n-1;$j++){
        if(judge(substr($grid[$i],$j,1),substr($grid[$i],$j-1,1),substr($grid[$i],$j+1,1),
                 substr($grid[$i-1],$j,1),substr($grid[$i+1],$j,1))){
            $temp=$grid[$i];
            $grid[$i]=substr($temp,0,$j).'X'.substr($temp,$j+1,$n-$j-1);
        }
    }
}
for($i=0;$i<$n;$i++){echo $grid[$i]."\n";}

function judge($centre,$a,$b,$c,$d){
    if($a=='X' || $b=='X' || $c=='X' || $d=='X'){return false;}
    if($centre>$a && $centre>$b && $centre>$c && $centre>$d){
        return true;
    } else {
        return false;
    }    
}
?>
