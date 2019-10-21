<?php
$a1=array(
array(1,2),
array(4,5)
);
$a2=array(
array(1,2),
array(4,5)
);
$result=array();
for($i=0;$i<=1;$i++){
for($j=0;$j<=1;$j++){
$result[$i][$j]=$a1[$i][$j]+$a2[$i][$j];
}
}
echo"matrix-1:<br/>";
for($i=0;$i<=1;$i++) {
for($j=0;$j<=1;$j++) {
echo " ".$a1[$i][$j];
}
echo"<br/>";
}

echo"matrix-2:<br/>";
for($i=0;$i<=1;$i++) {
for($j=0;$j<=1;$j++) {
echo " ".$a2[$i][$j];
}
echo"<br/>";
}
echo"the addition of two matrix is :<br/>";
for($i=0;$i<=1;$i++){
for($j=0;$j<=1;$j++){
echo" ".$result[$i][$j];
}
echo"<br>";
}
?>
