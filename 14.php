<!DOCTYPE html>
<html>
<head>
	<title>Php tutorials</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>



<section>
	<form action="#" method="post">
<select name="date">
	<option>Date</option>
	<?php for ($i=1; $i <=31 ; $i++) { 
		echo "<option>$i</option><br>";
	} ?>	
</select>
<select name="month">
	<option>Months</option>
	<?php 
	$month_arr = array("January","February","March","Appril","May","June","July","Augost","September","October","November","December");
		foreach ($month_arr as $key) {
			echo "<option>$key</option><br>";
		}
	 ?>
</select>
<select  name="year">
	<option>Years</option>
	<?php foreach (range(1990,2019) as $j) {
		echo "<option>$j</option><br>";
	} ?>
</select>
<input type="submit" name="submit"  value="submit">
</form>

<?php 
$Date=null;
$Month=null;
$Year=null;
$s_month="";
$s_date="";


if (isset($_POST["submit"])) {
	$s_date = intval($_POST["date"]);
	$s_month = $_POST["month"];
	$s_y= intval($_POST["year"]);
	$s_year = substr($s_y,2);
}

	if ($s_date=="Date" || $s_month=="Months" || $s_year == "Years") {
		echo "Required Data !!";
	}

	else{

		echo "Selected Date is:".$s_date."/".$s_month."/".$s_year."<br>";


		$current_date = date("d/m/y") . "<br>";
		$s = explode("/",$current_date);
		echo "Current Date is: $current_date";

		$c_day = intval($s[0]);
		$c_month = intval($s[1]);
		$c_year = intval($s[2]);


		if ($s_month=="January") {
			$s_month=intval($s_month);
			$s_month=1;
		}
		elseif($s_month=="February") {
			$s_month=2;
		}
		elseif($s_month=="March") {
			$s_month=3;
		}
		elseif($s_month=="Appril") {
			$s_month=4;
		}
		elseif($s_month=="May") {
			$s_month=5;
		}
		elseif($s_month=="June") {
			$s_month=6;
		}
		elseif($s_month=="July") {
			$s_month=7;
		}
		elseif($s_month=="Augost") {
			$s_month=8;
		}
		elseif($s_month=="September") {
			$s_month=9;
		}
		elseif($s_month=="October") {
			$s_month=10;
		}
		elseif($s_month=="November") {
			$s_month=11;
		}
		elseif($s_month=="December") {
			$s_month=12;
		}

		// .........Start condition for age calculator................


		if (($s_date>$c_day && $s_month==$c_month && $s_year==$c_year) || ($s_date>=$c_day && $s_month>$c_month && $s_year=$c_year)) {
			echo "Invalid Date of Birth";
		}

						
		 
		 elseif ($s_date>$c_day && $s_month<=$c_month) {
		 	$Date = (($c_day+30)-$s_date);
		 	$s_month=$s_month+1;
		 	if ($s_month>$c_month) {
		 		$Month= (($c_month+12)-$s_month);
		 		$Year=($c_year-($s_year+1));
		 	}
		 	else{
		 		$Month=$c_month-$s_month;
		 		$Year=$c_year-$s_year;
		 	}
		// echo $Date."/".$Month."/".$Year;
		 }



		elseif ($s_month>$c_month && $s_date<=$c_day) {
			$Date = $c_day-$s_date;
			$Month = (($c_month+12)-$s_month);
			$Year = $c_year-($s_year+1);
			
		}


		elseif ($s_date>$c_day && $s_month>$c_month) {
			$Date = (($c_day+30)-$s_date);
			$s_month=$s_month+1;
			$Month = (($c_month+12)-$s_month);
			$Year = ($c_year-($s_year+1));
		}

		else{
			$Date = $c_day-$s_date;
			$Month = $c_month-$s_month;
			$Year = $c_year-$s_year;
		}


		echo "Your Date of Birth is =".$Year." ".$Month." ".$Date;

}

  ?>
</section>






</body>
</html>