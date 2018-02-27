<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Append and Delete
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$s);
fscanf($handle,"%s",$t);
fscanf($handle,"%d",$k);
$pointDiff=strlen($t);
for($i=0;$i<strlen($t);$i++){
    if(substr($s,$i,1)!==substr($t,$i,1)){
        $pointDiff=$i;
        break;
    }
}
$numToReplace=strlen($s)-$pointDiff+strlen($t)-$pointDiff;
if($numToReplace==$k){
    echo "Yes";
} elseif($numToReplace>$k)
    {
    echo "No";
} else{
    $diff=$k-$numToReplace;
    if($diff%2==0){
        echo "Yes";
    } elseif($diff>(2*$pointDiff)) {
        echo "Yes";
    }
    else {
        echo "No";    
    }
}

?>
