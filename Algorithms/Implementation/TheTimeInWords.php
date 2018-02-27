<?php
/*//////////////////////////////////////////////////////////////////////////////////
///               The Time in Words
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$h);
fscanf($handle,"%d",$m);

if($m==0){
    $result =hourToWord($h);
    if($h!=12){$result .=" o' clock";}
} else{
    if($m>0 && $m<=30){
        $result=minuteToWord($m)."past ".hourToWord($h);
    } else {
        if($h!=12){
            $result=minuteToWord($m)."to ".hourToWord($h+1);
        } else {
            $result=minuteToWord($m)."to ".hourToWord($h-11);
        }    
    }
}
echo $result;

function hourToWord($h){
    switch($h){
        case 1  : return 'one';    break;    
        case 2  : return 'two';    break;    
        case 3  : return 'three';   break;        
        case 4  : return 'four';   break;    
        case 5  : return 'five';   break;    
        case 6  : return 'six';    break;    
        case 7  : return 'seven';  break;    
        case 8  : return 'eight';  break;    
        case 9  : return 'nine';   break;    
        case 10 : return 'ten';    break;            
        case 11 : return 'eleven'; break;            
        case 12 : return 'noon';                    
    }
}
function minuteToWord($min){
    if($min<20){
        if($min%15==0){
            return smallMinToWord($min)." ";
        } else {
            return smallMinToWord($min)." minutes ";            
        }
    } else {
        $tens = floor($min/10);
        switch($tens){
            case 2 : $str = "twenty ";
                    if($min%10==0){return $str;} else{
                        $str .=smallMinToWord($min%10)." ";
                        if($min%15==0){return $str;} else {return $str."minutes ";}}break;
            case 3 : if($min%10==0){return 'half ';} else{
                        $str ="twenty ".smallMinToWord((60-$min)%10)." ";
                        if($min%15==0){return $str;} else {return $str."minutes ";}}break;
            case 4 :  if($min%10==0){return "twenty ";} else{
                        $str =smallMinToWord(60-$min)." ";
                        if($min%15==0){return $str;} else {return $str."minutes ";}}break;
            case 5 :   $str =smallMinToWord(60-$min)." ";
                        if($min%15==0){return $str;} else {return $str."minutes ";}}          
        }
    }

function smallMinToWord($min)
    {
     switch($min){
        case 0  : return ''; break;
        case 1  : return 'one';    break;    
        case 2  : return 'two';    break;    
        case 3  : return 'three';    break;    
        case 4  : return 'four';    break;    
        case 5  : return 'five';    break;    
        case 6  : return 'six';    break;    
        case 7  : return 'seven';    break;    
        case 8  : return 'eight';    break;    
        case 9  : return 'nine';    break;    
        case 10  : return 'ten';    break;    
        case 11  : return 'eleven';    break;    
        case 12  : return 'twelve';    break;    
        case 13  : return 'thirteen';    break;    
        case 14  : return 'fourteen';    break;    
        case 15 : return 'quarter';    break;    
        case 16  : return 'sixteen';    break;    
        case 17  : return 'seventeen';    break;    
        case 18  : return 'eighteen';    break;    
        case 19  : return 'nineteen';    
        }
}
?>
