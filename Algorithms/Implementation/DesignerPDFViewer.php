<?php
/*//////////////////////////////////////////////////////////////////////////////////
///                Designer PDF Viewer
//////////////////////////////////////////////////////////////////////////////////*/ 
$handle = fopen ("php://stdin","r");
$h_temp = trim(fgets($handle));
$h = explode(" ",$h_temp);
array_walk($h,'intval');
fscanf($handle,"%s",$word);
$alph="abcdefghijklmnopqrstuvwxyz";
$width=strlen($word);
$height=0;
for($i=0;$i<$width;$i++){
    $char=substr($word,$i,1);
    $charPos=strpos($alph,$char);
    $temp=$h[$charPos];
    if($height<$temp){$height=$temp;}
}
echo ($width*$height);


?>

