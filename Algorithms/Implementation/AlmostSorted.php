<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              Almost Sorted
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
$rawData=fgets($_fp);
$rawArray=explode(" ",$rawData);
for($ii=1;$ii<=$n;$ii++){
    $inputArray[$ii] = trim(preg_replace("#(?<!\r)\n#", '' , $rawArray[$ii-1]));
}
$result="";
$bp=0;
$diffArray[0]=2000000;
for($i=1;$i<=$n-1;$i++){
        $diffArray[$i]=$inputArray[$i+1]-$inputArray[$i];
        if($diffArray[$i]<0){$bp++;$breakPoint[$bp]=$i;}
}
//
if($bp==0){$result="yes";$method="\n";} else {
    if($bp==1){
        if($n==2){
            $result="yes\n";$method="swap 1 2\n";
        }
        if($n>2){
            if(abs($diffArray[$breakPoint[1]])<$diffArray[$breakPoint[1]+1] &&
               abs($diffArray[$breakPoint[1]])<$diffArray[$breakPoint[1]-1]     
                    ){
                $result="yes\n";$method="swap ".$breakPoint[1]." ".($breakPoint[1]+1)."\n";
            } else {
                $result="no";$method="\n";
            }
        }
    } else {
        if($bp==2){
            if($breakPoint[2]-$breakPoint[1]==1){
                if(abs($diffArray[$breakPoint[1]]+$diffArray[$breakPoint[2]])<$diffArray[$breakPoint[2]+1]){
                $result="yes\n";$method="reverse ".$breakPoint[1]." ".($breakPoint[2]+1)."\n";                    
                } else {$result="no";$method="\n";}
            } else {
                $temp=0;
                for($p=$breakPoint[1];$p<=$breakPoint[2]+1;$p++){$temp+=$diffArray[$p];}
                if($temp>0){
                $result="yes\n";$method="swap ".$breakPoint[1]." ".($breakPoint[2]+1)."\n";                    
                } else {$result="no";$method="\n";}
            }
         }
            else {
            if($bp>2){
                if($breakPoint[count($breakPoint)]-$breakPoint[1]>count($breakPoint)-1){$result="no";$method="\n";} else{
                   $temp=0;
                    for($p=$breakPoint[1];$p<=$breakPoint[count($breakPoint)]+1;$p++){$temp+=$diffArray[$p];}
                    if($temp>0){
                        $result="yes\n";
                        $method="reverse ".$breakPoint[1]." ".($breakPoint[count($breakPoint)]+1)."\n";                    
                    }   
                }
            }
        }
    }
}
//print_r($diffArray);
//print_r($breakPoint);
echo $result;
echo $method;
?>
