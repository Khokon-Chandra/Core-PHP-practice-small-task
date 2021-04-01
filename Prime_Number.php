<!DOCTYPE html>
<html>
<head>
	<title>Prime number identify</title>
	<style>
		form{
			height:auto; width: 300px;
			padding:20px;
			margin:0 auto;
			
		}
		input,button{padding:15px;}
		div{margin: 0 auto; width: 300px; height: auto;}
		.result{float: left;font-size: 20px;line-height:0px;}
	</style>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<h1>Prime number Identify:</h1>
	<h2>Enter first & last limited</h2>
	<p>1-100 or 1-50</p>
	<input type="text" name="num">
	<button type="submit">submit</button>

</form>
<div>
	<h3>Result:</h3>
	<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {


$str= $_POST['num'];
if (!empty($str)) {
	$str_array = explode('-', $str);
$t=$str_array[1];
$n=$str_array[0];
if ($n<2) {
	$n=2;# code...
}
	for ($n; $n <=$t ; $n++) {

		$count=0;
	for ($i=1; $i <=$n ; $i++) {
		for ($j=1; $j<=$n ; $j++) { 
			$mul=$i*$j;
			if ($mul==$n) {
				$count=$count+1;
			}
		}
	}
	if ($count<=2) {
		echo "<p class=\"result\">$n,&nbsp</p>";
		// echo $n.","."&nbsp","&nbsp";
		# code...
	}
		
	}
}
else{echo "Please Insert numaric dada!!";}

}


	
	


 ?>
</div>


</body>
</html>