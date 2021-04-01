
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="number" name="number">
		<button type="submit">Submit</button>
	</form>

	<?php 
	
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$var=$_POST['number'];
		for ($i=1; $i <= $var; $i++) { 
			echo $i;
			if ($i<$var) {
				echo", &nbsp";
			}else{echo ".";}


		}
	}


	 ?>
</body>
</html>