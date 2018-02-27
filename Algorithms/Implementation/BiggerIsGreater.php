<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               Bigger is Greater
//////////////////////////////////////////////////////////////////////////////////*/ 
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$t);
$charWord=array();
$lastChar=array();
$sortChar=array();
$noSortChar=array();
$next='';
for($i=0;$i<$t;$i++){
    $word=trim(fgets($_fp));
    for($j=0;$j<strlen($word);$j++){
        $charWord[$j]=substr($word,$j,1);
    }
    $next='';$j=0;$addChar=false;
    $lastChar[$j][0]= $charWord[strlen($word)-1];
    $lastChar[$j][1]= strlen($word)-1;
//
        for($k=2;$k<=strlen($word);$k++){
            $oneLastChar = $charWord[strlen($word)-$k];
            for($p=0;$p<=$j;$p++){
                if($lastChar[$p][0]<=$oneLastChar){
                    $addChar=true;
                }  else {
                    $charWord[strlen($word)-$k]=$lastChar[$p][0];
                    $charWord[$lastChar[$p][1]]=$oneLastChar;
                    $n=0;$m=0;
                    if($k>1){
                        for($l=0;$l<strlen($word);$l++){
                            if($l>strlen($word)-$k){$sortChar[$n]=$charWord[$l];$n++;}
                            else{
                                $noSortChar[$m]=$charWord[$l];$m++;
                            }
                        }
                        sort($sortChar);
                        $charWord=array_merge($noSortChar,$sortChar);
                    }
                    for($l=0;$l<strlen($word);$l++){$next.=$charWord[$l];}
                    $next.="\n";
                    break 2;
                }
            }
            if($addChar){
                if($lastChar[$p][0]!=$oneLastChar){
                    $j++;
                    $lastChar[$j][0] = $oneLastChar;
                    $lastChar[$j][1] = strlen($word)-$k;
                }
            }
        }
    if($next==''){$next='no answer'."\n";}
    echo $next;
    unset($lastChar);
    unset($charWord);
    unset($sortChar);
    unset($noSortChar);

}
fclose($_fp);
?>
