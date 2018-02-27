<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Modified Kaprekar Numbers
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$p);
fscanf($_fp,"%d",$q);
fclose($_fp);
$knumber=array();
$l=0;
for($i=$p;$i<=$q;$i++){
    $temp=pow($i,2);
    $length=ceil(strlen($temp)/2);
    $upper=floor($temp/pow(10,$length));
    $lower=$temp-$upper*pow(10,$length);//echo $i." ".$temp." ".$upper." ".$lower."\n";
    if($i==$upper+$lower){$knumber[$l]=$i;$l++;}
}
if(empty($knumber)){echo "INVALID RANGE";}else{
    for($i=0;$i<$l;$i++){
        echo($knumber[$i]." ");
    }
}
?>
