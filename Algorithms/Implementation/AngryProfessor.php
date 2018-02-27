<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Beautiful Days at the Movies
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d %d %d",$ii,$jj,$k);
$ans=0;
for($i=$ii;$i<$jj;$i++){
    if($i<10){
        $ans++;
    }else{
        $temp=reverse($i);
        if(abs($i-$temp)%$k==0){
            $ans++;
        }
    }
}
echo $ans;

function reverse($a){
    $result="";
    for($i=1;$i<=strlen($a);$i++){
        $result.=substr($a,strlen($a)-$i,1);
    }
    return $result;
}
?>
