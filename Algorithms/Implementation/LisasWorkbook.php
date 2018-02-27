<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Lisa's Workbook
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d %d",$chapterNo,$noOfProblemsPerPage);
$rawdata=fgets($_fp);
$problemNoPerChapter=explode(" ",$rawdata);
fclose($_fp);
//
$noOfSpecialProblem=0;
$startPageNo=0;
$endPageNo=0;

for($i=0;$i<$chapterNo;$i++){
    $startPageNo=$endPageNo+1;
    if($problemNoPerChapter[$i]%$noOfProblemsPerPage>0){
        $endPageNo=$startPageNo+floor($problemNoPerChapter[$i]/$noOfProblemsPerPage);
    } else {
        $endPageNo=$startPageNo+floor($problemNoPerChapter[$i]/$noOfProblemsPerPage)-1;        
    }
    $startProblem=1;
    for($j=$startPageNo;$j<=$endPageNo;$j++) {
        $endProblem=$startProblem+$noOfProblemsPerPage-1;
        if($endProblem>$problemNoPerChapter[$i]) {$endProblem=$problemNoPerChapter[$i];}
        if($j>=$startProblem && $j<=$endProblem){$noOfSpecialProblem++;}
        $startProblem=$endProblem+1;
    }    
}
echo $noOfSpecialProblem;
?>
