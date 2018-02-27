<?php
/*//////////////////////////////////////////////////////
///       Grid Challenge
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$t);
for($cases=1;$cases<=$t;$cases++){
    fscanf($_fp,"%d",$n);
    for($i=0;$i<$n;$i++){
        fscanf($_fp,"%s",$str[$i]);
    }
    for($i=0;$i<$n-1;$i++){
        $res=judgeYesNo($str[$i],$str[$i+1]);
        if(!$res){break 1;}
    }
    if($n==1){$res=true;}
    if($res){echo "YES\n";}else{echo "NO\n";}
}
fclose($_fp);

function judgeYesNo($s1,$s2){
    for($i=0;$i<strlen($s1);$i++){
        $stra[$i]=substr($s1,$i,1);
        $strb[$i]=substr($s2,$i,1);
    }
    sort($stra);
    sort($strb);
    for($i=0;$i<strlen($s1);$i++){
        if($stra[$i]>$strb[$i]){return false;}        
    }
    return true;
}
?>