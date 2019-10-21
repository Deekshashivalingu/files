<?php
$allTheStates="Mississippi Alabama Texas Massachusetts Kansas";
$statesArray=[];
$states1=explode(' ',$allTheStates);
$i=0;
foreach($states1 as $state) {
	if(preg_match('/xas$/',($state))) {
		$statesArray[$i]=($state);
		$i=$i+1;
		print "The states that ends in xas: ".$state."<br/>";
	}
}

foreach($states1 as $state) {
	if(preg_match('/^k.*s$/i',($state))) {
		$statesArray[$i]=($state);
		$i=$i+1;
		print "The states that begins with k and ends with s: ".$state."<br/>";
	}
}

foreach($states1 as $state) {
	if(preg_match('/^M.*s$/',($state))) {
		$statesArray[$i]=($state);
		$i=$i+1;
		print "The states that begins with M and ends with s: ".$state."<br/>";
	}
}

foreach($states1 as $state) {
	if(preg_match('/a$/',($state))) {
		$statesArray[$i]=($state);
		$i=$i+1;
		print "The states that ends with a: ".$state."<br/>";
	}
}

foreach($statesArray as $element=>$value)
{
	print("\n".$value." is the element ".$element);
}
?>