<?php
$fp=fopen("Count.txt",'r');
$count=fread($fp,10);
fclose($fp);
$count=$count+1;
echo"<p>Page Count:".$count."</p>";
$fp=fopen("Count.txt",'w');
fwrite($fp,$count);
fclose($fp);
?>