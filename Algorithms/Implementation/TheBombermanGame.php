<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              The Bomberman Game
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d %d %d",$r,$c,$n);
$panel = array();
$panel5 = array();
$panel6 = array();
$panel7 = array();
$panel8 = array();

for($i=0;$i<$r;$i++){
    $x_temp = str_split(trim(fgets($_fp)));
    $panel{$i} = panelScan($x_temp,1,1); 
}
//printPanel($panel);
for($i=1;$i<=min(8,$n);$i++){//echo $i."<br>";
    $panel=oneSecond($i,$panel);
    if($i==5){$panel5=$panel;}    
    elseif($i==6){$panel6=$panel;}    
    elseif($i==7){$panel7=$panel;}    
    elseif($i==8){$panel8=$panel;}    
}

if($n<=8){
    printPanel($panel);
}else {
    if($n%4==1){$panel=$panel5;}
    elseif($n%4==2){$panel=$panel6;}
    elseif($n%4==3){$panel=$panel7;}
    elseif($n%4==0){$panel=$panel8;}
    printPanel($panel);    
}


function oneSecond($sec,$arr){
    if($sec%2==1){
        for($i=0;$i<count($arr);$i++){
            for($j=0;$j<count($arr{$i});$j++){
                if($arr{$i}{$j}!=0){$arr{$i}{$j}++;}
            }
        }
    return bombsScan($arr);        
    } else {
        for($i=0;$i<count($arr);$i++){
            for($j=0;$j<count($arr{$i});$j++){
                $arr{$i}{$j}++;
            }
        }
        return $arr;                
    }
}

function bombsScan($arr){
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr{$i});$j++){
            if($arr{$i}{$j}==4){
                $arr{$i}{$j}=0;
                if($i>0){$arr{$i-1}{$j}=0;}
                if($j>0){$arr{$i}{$j-1}=0;}
                if($i<count($arr)-1){
                    if($arr{$i+1}{$j}!=4){$arr{$i+1}{$j}=0;}
                }
                if($j<count($arr{$i})-1){
                    if($arr{$i}{$j+1}!=4){$arr{$i}{$j+1}=0;}
                }
            }
        }
    }
    return $arr;                
}

function panelScan($arr,$sec,$line){
    for($i=0;$i<$line;$i++){
        if($line>1){$temp=$arr{$i};}else{$temp=$arr;}
        for($j=0;$j<count($temp);$j++){
            if($temp{$j}=='O'){
                $temp{$j}=$sec;
            } else {
                $temp{$j}=0;
            }
        }
        if($line>1){$arr{$i}=$temp;}else{$arr=$temp;}        
    }
    return $arr;
}

function printPanel($arr){
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr{$i});$j++){
            if($arr{$i}{$j}!=0){echo "O";} else {echo ".";}
        //    echo $arr{$i}{$j};
        }
        echo "\n";
    }
    echo "\n";
    return;
}
?>
