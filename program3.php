
<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
<table cellpadding="10" border="2" cellspacing="0">
	
<?php

	for ($j=1; $j <=10 ; $j++) { 
					echo "<tr>";
		for ($i=1; $i <=10 ; $i++) { 
				$mul=$j*$i;
			echo"<td>".$mul."</td>";
			echo str_repeat("&nbsp",3);
						
		}
		echo "</tr>";
		echo "<br/>";
	}			


?>


</table>
</body>
</html>

