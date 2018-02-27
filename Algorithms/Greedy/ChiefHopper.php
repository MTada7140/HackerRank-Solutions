<?php
/*//////////////////////////////////////////////////////
///       Chief Hopper
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
$height=explode(" ",trim(fgets($_fp)));
fclose($_fp);
$initEne=0;
for($i=$n-1;$i>=0;$i--){
    $initEne=ceil(($height[$i]+$initEne)/2);
}
echo $initEne;
?>