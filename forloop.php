<?php

$x=10;
$y=20;
$i=0;
$j=0;
$k=0;

for ($i=0; $i <5 ; $i++) { 

	
	for ($k=4; $k>$i ; $k--) { 
		echo "&nbsp","&nbsp";
		# code...
	}
	for ($j=0; $j<=$i ; $j++) { 
		echo "*";
		echo "&nbsp","&nbsp";
	}
	echo "<br/>";
	
}







