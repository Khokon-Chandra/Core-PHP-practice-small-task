
<?php 
$str = "ABCDEFGHIJKL";
for ($i=0; $i < strlen($str); $i++) { 
	$str[$i] = chr(ord($str[$i])+32);	
}
echo $str;
?>
<?php 
$str = "abcdefgh";
for ($i=0; $i < strlen($str); $i++) { 
	$str[$i] = chr(ord($str[$i])-32);	
}
echo $str;
?>
