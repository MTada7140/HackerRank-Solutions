<?php
/*//////////////////////////////////////////////////////
///       Goodland Electricity
//////////////////////////////////////////////////////*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d %d",$n,$k);
$rawTowers=trim(fgets($_fp));
fclose($_fp);
$towers=array();$low=false;$high=false;
for($i=0;$i<$n;$i++){
    if(substr($rawTowers,$i*2,1)==1){
        $temp=count($towers);
        $towers[$temp][0]=$i;
        $towers[$temp][1]=$i-$k+1;
        $towers[$temp][2]=$i+$k-1;
    }
}
$on=array();
for($i=0;$i<count($towers);$i++){
    if(count($on)<=1){
        if($towers[$i][1]<=0){
        $low=true;
        if(isset($on[0][0])){
            $on[0][0]=$towers[$i][0];
            $on[0][2]=$towers[$i][2];            
        }else{
            $on[0][0]=$towers[$i][0];    
            $on[0][1]=0;            
            $on[0][2]=$towers[$i][2];            
        }
    } elseif($low){
        if($on[count($on)-1][2]+1>=$towers[$i][1]) {
            $temp=count($on);
            $on[$temp][0]=$towers[$i][0];
            $on[$temp][1]=$towers[$i][1];
            $on[$temp][2]=$towers[$i][2];
        //Gap between polls;fail!
        } else{
            $result=false;$low=false;break;
        }
    } else {
        $result=false;$low=false;break;
    }
    }
    else{
        //Can latest poll be replaced?
        if($on[count($on)-2][2]+1>=$towers[$i][1]){
            $on[count($on)-1][0]=$towers[$i][0];
            $on[count($on)-1][1]=$towers[$i][1];
            $on[count($on)-1][2]=$towers[$i][2];
        //Can this poll be added?
        } elseif($on[count($on)-1][2]+1>=$towers[$i][1]) {
            $temp=count($on);
            $on[$temp][0]=$towers[$i][0];
            $on[$temp][1]=$towers[$i][1];
            $on[$temp][2]=$towers[$i][2];
        //Gap between polls;fail!
        } else{
            $result=false;$low=false;break;
        }
    }
    if($on[count($on)-1][2]>=$n-1){$result=true;$high=true;break;}
}
if($result){
    echo count($on);    
} else {
    echo -1;
}
?>