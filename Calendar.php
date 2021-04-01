<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
	
	<style>
		
		table{padding:10px; margin:10px auto; float: left;}
		td{text-align: center;transition: 0.2s; padding: 5px;background:lightgray;}
		th{text-align: center; padding: 5px;}
		td:hover {background: lightgreen; border-radius:50px;}
	</style>
</head>
<body>

<button onclick="<?php echo $year=$year+1; ?>">add</button>

<?php 
$curr_date=date("d/m/y");
$curr_date_arr=explode("/", $curr_date);

$year=2000+$curr_date_arr[2];

if ($year%4==0) {
	$parity=29;  
	$pa_od=1;  
}else{
	$parity=28; 
	$pa_od=0; 
}
 echo "<h1>$year</h1>";
$weekArr=array("Sun","Mon","Tue","wed","Thus","Fri","Sat");
$month_arr = array("January","February","March","Appril","May","June","July","August","September","October","November","December");
$month_parity = array(31,"$parity",31,30,31,30,31,31,30,31,30,31);
$month_OddDay = array(3,"$pa_od",3,2,3,2,3,3,2,3,2,3);





for ($month=0; $month < 12; $month++) {
	
$week=7;
$second_limt=$year-2001;
$leapYear=floor($second_limt/4);
$nonOddDay=$second_limt-$leapYear;
$oddDay = $leapYear*2+$nonOddDay+1;
$weekValue=$oddDay%7;
if($month>0){
	
	for ($io=0; $io<$month; $io++) { 
		 $oddDay = $month_OddDay[$io]+$oddDay;
	}
	$weekValue=$oddDay%$week;
}
	
		echo "<div>";
		echo"<table>";

			echo "<tr><th colspan='7' bgcolor='lightgreen'>$month_arr[$month]<th></tr>";


			echo "<tr>";
			foreach ($weekArr as $key) {
				echo "<td>$key</td>";	
			}
			echo "</tr>";



			$count=0;
			$count1=0;
			$count2=0;
			$count3=0;
			if($weekValue==0){$count3=1;}

				echo "<tr>";
					$Date=1;
					if($weekValue!=0){
						if($month_parity[$month]==31){
							$Date=(31-$weekValue);
						}else{$Date=(32-$weekValue);}
					}

					for (; $Date <= 42; $Date++){ 
						if($count3>0 && $count3<=$month_parity[$month]){echo "<td>$Date</td>";}
						else{echo "<td style=\"color:#ABA5A5\" >$Date</td>";}
						$count1++;
						$count2++;
						if ($count1==$weekValue) {
							$Date=0;
						}

						if($count1>=$weekValue && $Date<=$month_parity[$month]){$count3++;}
						if($count1>=$weekValue && $Date==$month_parity[$month]){$Date=0;}
						$count++;
						if ($count==7) {
							echo "</tr>";
							echo "</tr>";
							$count=0;
						}
						if ($count2==42) {
							break;
						}

					}
					
				echo "</table>";
	
}
?>


</body>
</html>