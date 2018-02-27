<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Save the Prisoner!
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$t);
//
for($i=1;$i<=$t;$i++)
{
$rawData=fgets($_fp);
$input=explode(" ",$rawData);//0;$n,1;$m,2;$s

$startNoOfPrisoner=$input[2];
$endNo=$input[1] % $input[0];

$poisonPrisoner=$startNoOfPrisoner+$endNo-1;
    
if($poisonPrisoner>$input[0]){$poisonPrisoner=$poisonPrisoner-$input[0];}
if($poisonPrisoner==0){$poisonPrisoner=$input[0];}    

echo $poisonPrisoner."\n";
}
fclose($_fp);
?>
