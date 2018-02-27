<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Forming a Magic Square
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin", "r");
$s = array();
for($s_i = 0; $s_i < 3; $s_i++) {
   $s_temp = fgets($handle);
   $s[] = explode(" ",$s_temp);
   $s[$s_i] = array_map('intval', $s[$s_i]);
}
$ss = array();
for($i = 0;$i<9;$i++){
    $x = floor($i/3);$y = $i-$x*3;
    $ss{$i} = $s{$x}{$y};
}
echo checkMagicSquare($ss);    
        
function checkMagicSquare($arr){
    $pre = array(
            array(8, 1, 6, 3, 5, 7, 4, 9, 2),
            array(6, 1, 8, 7, 5, 3, 2, 9, 4),
            array(4, 9, 2, 3, 5, 7, 8, 1, 6),
            array(2, 9, 4, 7, 5, 3, 6, 1, 8),
            array(8, 3, 4, 1, 5, 9, 6, 7, 2),
            array(4, 3, 8, 9, 5, 1, 2, 7, 6),
            array(6, 7, 2, 1, 5, 9, 8, 3, 4), 
            array(2, 7, 6, 9, 5, 1, 4, 3, 8)
    );
    $res = 100;
    for($num = 0;$num<count($pre);$num++){
        $temp = 0;
        for($i = 0;$i<count($arr);$i++){
            if($arr{$i}!=$pre{$num}{$i}){
                $temp+=abs($arr{$i}-$pre{$num}{$i});//echo "##".$num.$i.$temp."// "  ; 
            } 
        }
//        echo '*| '.$temp.' |*';
        if($temp<$res){$res=$temp;}
    }
    return $res;
}
?>


