<?php
/*//////////////////////////////////////////////////////
///       Accessory Collection
//////////////////////////////////////////////////////*/
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$T);
for($a0 = 0; $a0 < $T; $a0++){
    $amt = 0;
    fscanf($handle,"%d %d %d %d",$L,$A,$N,$D);
    $max = 0;
    $optUnit=optimalNumber($N,$D);
    if($optUnit===true){
        echo ($L*$A)."\n";
    } elseif($optUnit===false){
        echo "SAD\n";
    } elseif($A<$D) {
        echo "SAD\n";
    } else {            
        for ($a2=$optUnit;$a2>=1; $a2--){
            $a1 = $N + ($a2-1) - $a2*($D-1);  // calculate maximum number for the most expensive one     
            $n = floor(($L-$a1)/$a2);
            $a3 = ($L-$a1)%$a2;
            if ($n>$A-1 || ($n==$A-1 && $a3 > 0)){
                break;
            }
            $sum = $A*$a1 + ($A-1+$A-$n)*$n/2*$a2 + $a3 * ($A-$n-1); // calculate total cost
            if ($sum<=$max){
                break;
            }
            $max = $sum;                    
        }
    echo($max==0?"SAD\n":$max."\n");
    }           
}

function optimalNumber($all,$sort){
    if($sort==1){
        return true;
    } elseif($all<$sort){
        return false;
    } else {
        $res=floor(($all-1)/($sort-1));
    }
    return $res;
}
?>