<?php
/*//////////////////////////////////////////////////////////////////////////////////
///              The Grid Search
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$R,$C);
    $G = array();
     for($G_i = 0; $G_i < $R; $G_i++){
       fscanf($handle,"%s",$G[]);
    }
    fscanf($handle,"%d %d",$r,$c);
    $P = array();
     for($P_i = 0; $P_i < $r; $P_i++){
       fscanf($handle,"%s",$P[]);
    }
//
    $found=false;
    $notFound=false;
    $line=0;
    $offset=0;
    while(!$found && !$notFound){
        $result=findPattern($G,$P,$line,$offset,$R,$r);
        switch($result){
            case 'YES':
                $found=true;
                break;
            case 'NO':
                $notFound=true;
                break;
            case 'pending':
                if($offset>$C-$c){
                    $line++;$offset=0;
                } else {
                    $offset++;
                }
        }
    }
    echo $result."\n";
}
fclose($handle);
//    
function findPattern($G,$P,&$line,&$offset,$R,$r){
    $pLine=0;$firstLine=$line;
    for($i=$line;$i<=$R-$r;$i++){
        $pos=strpos($G[$i],$P[$pLine],$offset);$offset=0;
            if(is_numeric($pos) && $pos>=0){
                $finish=false;$line=$i;$firstLine=$line;
                while(!$finish){
                    $pLine++;$line++;
                    if(substr($G[$line],$pos,strlen($P[$pLine]))==$P[$pLine]){
                        if($pLine==$r-1){
                            return 'YES';
                        }else{
                            continue;
                        }
                    } else {
                        $finish=true;$line=$firstLine;$offset=$pos;
                        return 'pending';
                    }
                }
            }
        }
    return 'NO';
}
?>
