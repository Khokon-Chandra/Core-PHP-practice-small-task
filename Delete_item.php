<!DOCTYPE html>
<html>
<head>
	<title>Delete any Item</title>
</head>
<body>

	<?php 

	$str=$_GET["item"];
	$stringp= array("Lorem", "ipsum", "dolor", "sit", "amet", "consectetur", "adipiscing", "elit", "sed", "do", "eiusmod", "tempor", "incididunt", "ut", "labore", "et", "dolore", "magna", "aliqua." );
	echo $stringp[0],$stringp[1],$stringp[2],$stringp[3],$stringp[4],$stringp[5];


	 ?>
	<form method="get">
		<h3>Insert any Item to remove</h3>
		<input type="text" name="item">
		<input type="submit" value="Remove">
	</form>

</body>
</html>