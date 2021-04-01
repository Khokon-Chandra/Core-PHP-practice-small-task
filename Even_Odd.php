<!DOCTYPE html>
<html>
<head>
	<title>Even & Odd Number</title>
	<style>
		form{
			height: auto;
			width: 400px;
			padding:15px;
			margin:0 auto;
		}
		button{padding: 15px;}
		div{margin:0 auto;height: auto; width: 400px; font-size: 25px;}
		input,button{
			padding: 15px;
			font-size: 20px;
		}
	</style>
</head>
<body>


<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" >
	<h2>Even and odd identify:</h2>
	<h4>Enter Only integer number(1,2,3,51,20):</h4>
	<input type="text" name="num" >
	<button type="submit">Result</button>
</form>
<div>
	<?php 


if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$str = $_POST['num'];
		if (!empty($str)) {
			
			$str_array = explode(',', $str);
$length =count($str_array);
$count=0;
$count1=0;
for ($i=0; $i < $length; $i++) {
	if (is_numeric($str_array[$i])) {
	 	$sum=$str_array[$i]%2;
	 	if ($sum==0) {
		$count++;
		echo $str_array[$i]."= Even<br/>";
	}
	else{
		$count1++;
		echo $str_array[$i]."= Odd<br/>";
	}
	 } 
	else{echo "Please enter any interger number";}
	
	
	
}
if ($count>0) {
	echo "Total Even Number is =".$count;
}
if ($count1>0) {
	echo "<br/>Total Odd Number is =".$count1;
	# code...
}
		}
		else{
			echo "Please Insert Numarical Data !!!";
		}

}



 ?>
</div>



<!-- 
$c='amar,sonar,bangla ';
$c_ar =explode(',', $c);
echo $c_ar[1];

 ?> -->
</body>
</html>