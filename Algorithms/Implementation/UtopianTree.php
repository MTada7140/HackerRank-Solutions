<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Utopian Tree
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d",$n);
$height=1;
$flip=1;
    for($i=1;$i<=$n;$i++){
        if($flip==1){$height*=2;} else{$height++;}
        $flip++;$flip=$flip%2;
    }
    echo $height."\n";
}

?>
