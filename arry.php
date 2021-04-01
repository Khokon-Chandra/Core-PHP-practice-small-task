<?php
 $up=20;
 for ($i=0; $i<=$up ; $up--) { 
 	echo $up;
 	if($up>0){echo ",&nbsp&nbsp&nbsp";}else{echo ".";}
 }
?>








<?php
echo "<br>";
?>

<?php
$array = array("January","February","March","April","May","June","July","August","September","October","November","December" );
for ($i=0; $i< count($array) ; $i++) { 
	echo $array[$i];
	echo " <br> ";
}
?>

<!----year---->
	<select>
		<option> Month</option>
		
		<?php
		$month = array("January","February","March","April","May","June","July","August","September","October","November","December" );
		for ($i = 0; $i < count($month) ; $i++) { 
			echo "<option>$i</option><br>";
		}
?>
</select>




<select>
	<option> Day</option>
		<?php	
			for ($i=1; $i<=31; $i++) { 
				echo "<option>$i</option><br/>";
			}
		?>
</select>


<select>
	<option>Year</option>

		<?php

for ($i=1990; $i<=2020; $i++) { 
	echo "<option>$i</option><br>";
}
?>

</select>





