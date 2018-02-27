<?php
/*//////////////////////////////////////////////////////////////////////////////////
///            Fraudulent Activity Notifications
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin", "r");
function activityNotifications($expenditure, $d) {
    // Complete this function
    $count = array();
    $res=0;
    $expToBeScanned=array_slice($expenditure,0,$d);
    foreach ($expToBeScanned as $v) {
        $count[$v] = isset($count[$v]) ? $count[$v] + 1 : 1;
    }
    for($i=$d;$i<count($expenditure);$i++){
            if($i==$d){
                $add=false;$del=false;
            } else {
                $add=$expenditure{$i-1};$del=$expenditure{$i-$d-1};
            }
            $criteria=findMedian($d,$count,$add,$del)*2;
        if($expenditure{$i}>=$criteria){$res++;}
    }
    return $res;
}

fscanf($handle, "%i %i", $n, $d);
$expenditure_temp = fgets($handle);
$expenditure = explode(" ",$expenditure_temp);
$expenditure = array_map('intval', $expenditure);
$result = activityNotifications($expenditure, $d);
echo $result . "\n";

function findMedian($d,&$count,$added,$deleted){
    $count[$added] = isset($count[$added]) ? $count[$added] + 1 : 1;
    $count[$deleted]--;
//    print_r($count);echo"<br>";
//    $min  = min($ar);
//    $max  = max($ar);
    $min  = 0;$max  = 200;
    $mid1 = floor($d/2);
    $mid  = $mid1+1;
    $number = 0;$median = 0;
    for ($i=$min; $i<=$max; $i++) {
        if (isset($count[$i])) {
            $fnumber=$number;$number+=$count[$i];
            if($number>=$mid1 && $fnumber<$mid1){
                if($d%2==0){
                    $median=$i/2;
                } 
            }
            if($number>=$mid){
                if($d%2==0){
                    $median+=$i/2;return $median;
                } else{
                    $median=$i;   return $median;
                }
            }
        }
    }
}

?>
