<!DOCTYPE html>
<html>
<title>PHP table</title>
<style>
	
	td{color:#f2f2c5; font-size: 20px;width:150px;height:40px;}
	span{font-size:13px; padding: 0px; margin: 0px;}
</style>
<body>
 	
 	<table   border="2" cellpadding="0" cellspacing="0" style="padding:4px;background:#145; text-align:center;">
 		<?php
			$n=10;
			for ($i=1; $i <=10 ; $i++) {
				echo"<tr>";
				for ($j=1; $j<=$n ; $j++) { 
					$m=$i*$j;
					 echo "<td>$j <span>&#9932</span> $i = $m";
					 echo "</td>";
					
				}
				echo "</tr";
				echo "<br/>";
		}
	?>
 	</table>


</body>
</html>