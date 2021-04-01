<?php
$mark="80";
$grade="F";
$point="0.00";

if ($mark<33) {
	$grade="F";
	$point="0.00";
	
}
	else if($mark<=39){
		$grade="D";
		$point="1.00";
		}
	else if($mark<=49){
	$grade="C";
	$point="2.00";
	}
	else if($mark<=59){
	$grade="B";
	$point="3.00";
	}
	else if($mark<=69){
	$grade="A";
	$point="4.00";
	}
	else if($mark<=79){
	$grade="A-";
	$point="4.50";
	}
	else if($mark<=100){
	$grade="A+";
	$point="5.00";
	}



echo "your mark is: $mark<br>";
echo " Your Grade is:$grade<br>";
echo " Your Point is:$point";



?>