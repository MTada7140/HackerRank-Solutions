<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Manasa and Stones
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$t);
    for($cases=1;$cases<=$t;$cases++){
        fscanf($_fp,"%d",$n);
        fscanf($_fp,"%d",$a);
        fscanf($_fp,"%d",$b);
//    
        for($i=0;$i<$n;$i++){
            $result[$i]=($a*($n-1-$i))+($b*$i);  
          }
        sort($result);
        $prev=0;
        foreach($result as $value){
            if($value>$prev){
                echo $value." ";$prev=$value;
            }
        }
        echo "\n";unset($result);
    }
?>
