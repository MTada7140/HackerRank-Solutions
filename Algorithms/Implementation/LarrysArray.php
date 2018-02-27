<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Larry's Array
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$t);
for($cases=0;$cases<$t;$cases++){
    fscanf($_fp,"%d",$n);
    $rawData=fgets($_fp);
    $tempp=explode(" ",$rawData);
    for($i=1;$i<=$n;$i++){
        $p[$i] = trim(preg_replace("#(?<!\r)\n#", '' , $tempp[$i-1]));
    }
//
    $posTrans=0;
    for($i=1;$i<$n;$i++){
        $temp=0;
        for($j=$i+1;$j<=$n;$j++){
            if($p[$i]>$p[$j]){
                $temp++;
            }
        }
        $posTrans+=$temp;
    }
    if($posTrans%2==0){
        $possibility=true;
    } else {
        $possibility=false;
    }
        if($possibility){echo "YES\n";} else {echo "NO\n";}
        $posTrans=0;    
}               

?>
