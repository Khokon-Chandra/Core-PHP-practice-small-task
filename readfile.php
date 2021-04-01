<?php 

$file = fopen("paragraph.txt","r");
while (!feof($file)) {
	echo fgetc($file);
	echo "<br>";
}
?>