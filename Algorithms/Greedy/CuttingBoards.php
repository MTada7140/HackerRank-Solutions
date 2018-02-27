<?php
/*//////////////////////////////////////////////////////
///       Cutting Boards
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$q     = trim(fgets($_fp));
for($a0=0;$a0<$q;$a0++){
    $val   = explode(" ",trim(fgets($_fp)));
    $n     = $val{0};$m     = $val{1}; 
    $ser1 = explode(" ",trim(fgets($_fp)));
    $ser2 = explode(" ",trim(fgets($_fp)));

    $seru = array();
    for($i=0;$i<count($ser1);$i++){
        $seru{$i}{0}=$ser1{$i};
        $seru{$i}{1}='h';
    }
    for($i=count($ser1);$i<count($ser2)+count($ser1);$i++){
        $seru{$i}{0}=$ser2{$i-count($ser1)};
        $seru{$i}{1}='v';
    }
    array_multisort($seru,SORT_DESC);

    $totalCost = 0;
    $hPieces   = 1;
    $vPieces   = 1;

    for($i = 0;$i<count($seru);$i++){
        if($seru{$i}{1}=='h'){
            $totalCost = bcadd(bcmul($seru{$i}{0},$vPieces),$totalCost);
            $hPieces++;
        } else {
            $totalCost = bcadd(bcmul($seru{$i}{0},$hPieces),$totalCost);
            $vPieces++;        
        }
    }
    $ans = bcmod($totalCost,1000000007);
    echo $ans."\n";
}
?>