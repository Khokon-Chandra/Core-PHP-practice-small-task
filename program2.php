<!DOCTYPE html>
<html>
<head>
	<title>Php</title>
</head>
<body>
	<table cellpadding="20" border="2" cellspacing="0">
		<?php
			for ($i=1; $i<=10 ; $i++) { 
				echo "<tr>";
				for ($j=1; $j <= 10 ; $j++) { 
					$s=$i+$j; 
					if ($s%2==0) {
						echo "<td  bgcolor=#fff></td>";
						
					}
					else{
						echo "<td  bgcolor=#333></td>";
					}
					
				}
				 echo "<tr/>";
				 // echo "<br/>";
			}


	?>
	</table>
</body>
</html>




