<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Grading Students
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin", "r");
function solve($grades){
    for($i=0;$i<count($grades);$i++)
    if(($grades{$i} % 5) > 2 && $grades{$i} >= 38){
        $grades{$i} = ceil($grades{$i} / 5) * 5;
    }
    return $grades;
}

fscanf($handle, "%d",$n);
$grades = array();
for($grades_i = 0; $grades_i < $n; $grades_i++){
   fscanf($handle,"%d",$grades[]);
}
$result = solve($grades);
echo implode("\n", $result)."\n";
?>
