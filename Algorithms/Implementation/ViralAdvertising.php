<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Viral Advertising
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf ( $_fp , '%d',$n );
fclose($_fp);
$accumNo=0;
$noOfPeopleFirstDay=5;
$noOfPeopleReceivedPrevDay=0;
for($i=1;$i<=$n;$i++){
   if($i==1){
         $numberOfPeopleLikeToday=floor($noOfPeopleFirstDay/2);
   }
    else{
         $numberOfPeopleLikeToday=floor($noOfPeopleReceivedPrevDay/2);
        }
   $accumNo                 +=$numberOfPeopleLikeToday;
   $noOfPeopleReceivedPrevDay=$numberOfPeopleLikeToday*3;
}
   echo $accumNo;
?>
