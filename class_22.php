<!DOCTYPE html>
<html>
<head>
	<title>Php tutorials</title>
</head>
<body>

<table cellpadding="10" cellspacing="0" border="1" align="center" style="text-align: center;">
	
	<?php 
$arr_container = array(
	array("Khokon"=>"902662","5.00"=>"A+",),
	array("Ratan"=>"904925","3.50"=>"A-",),
	array("Dinesh"=>"905914","4.40"=>"A",),
	array("Dinesh"=>"905914","4.40"=>"A",),
);
echo "<tr><th>Name</th><th>Roll</th><th>GPA</th><th>Grade</th></tr>";
for ($i=0; $i < count($arr_container); $i++) { 
	echo "<tr>";
	foreach ($arr_container[$i] as $key => $value) {
		echo "<td>$key</td><td>$value</td>";
	}
	echo "</tr>";
}

?>
</table>

</body>
</html>