<?php

$x=10;
$y=20;
$i=0;
$j=0;
$k=0;
print('This is a triangle by for loop:<br/><br/>'."\r\n\r\n");
echo str_repeat("&nbsp;",10);
for ($i=0; $i <5 ; $i++) { 

	
	for ($k=4; $k>$i ; $k--) { 
		echo str_repeat("&nbsp;", 3);
		# code...
	}

	for ($j=0; $j<=$i ; $j++) { 
		echo "*";
		echo str_repeat("&nbsp;", 4);
	}
	echo "<br/>";

	echo str_repeat("&nbsp;", 10);
}

echo "Tomorrow I\'II learn php global variables" ."<br/>";
echo "This is a bad comment: del c:\\*.*";

phpinfo();




