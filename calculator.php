<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>

	<?php 
	if (isset($_POST)) {
		
		
	}



	 ?>

	<form action="#" method="post">
		<input type="text" name="input" value="">
		<input type="button" name="number" value="0">
		<input type="button" name="number" value="1">
		<input type="button" name="number" value="2">
		<input type="button" name="number" value="3">
		<input type="button" name="number" value="4">
		<input type="button" name="number" value="5">
		<input type="button" name="number" value="6">
		<input type="button" name="number" value="7">
		<input type="button" name="number" value="8">
		<input type="button" name="number" value="9">

		<input type="button" name="add" value="+">
		<input type="button" name="sub" value="-">
		<input type="button" name="mull" value="*">
		<input type="button" name="div" value="/">
		<input type="submit" name="equell" value="=">

	</form>

</body>
</html>







<?php 
$cal_str="1+2+3*4+5";
$cal_math="print(".$cal_str.");";
// echo $re=eval($cal_math);
 ?>