<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Organizing Containers of Balls
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$q);
for($a0 = 0; $a0 < $q; $a0++){//echo "<br>come".$a0." ".$q;
    fscanf($handle,"%d",$n);
    $M = array();
    for($M_i = 0; $M_i < $n; $M_i++) {
       $M_temp = fgets($handle);
       $M[] = explode(" ",$M_temp);
      array_walk($M[$M_i],'intval');
    }
    // your code goes here
//    print_r($M);
    $container=array();
    $ball=array();
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n;$j++){
            $container{$i}+=$M{$i}{$j};
            $ball{$i}+=$M{$j}{$i};
        }
    }
    sort($container);
    sort($ball);
    if($container==$ball){
        echo "Possible\n";
    } else {
        echo "Impossible\n";
    }
}
?>
