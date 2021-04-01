<!DOCTYPE html>
<html>
<head>
	<title>Function class</title>
	<style> body{text-align: center;} input{padding:10px;}
	h4{color:red;}
</style>
</head>
<body>


	<h3>Date Formate: <br>DD/MM/YY  or  DD-MM-YY</h3>
	<form action="#" method="post">
		<input type="text" name="date">
		<input type="submit" name="submit" value="submit">
	</form>



	<?php 
	
if (isset($_POST['submit'])) {
	if (!empty($_POST["date"])) {

//------------Function One--which return month-------------//
		function valueToMonth($value){
			$month_arr = array("January","February","March","Appril","May","June","July","Augost","September","October","November","December");
			$int_value = intval($value);
			$month = $month_arr[$int_value - 1];
			return $month;
		}

//----------Function Two ---which return Date array----------//

		function strExplode($str,$length){

			for ($i=0; $i < $length; $i++) { 
				if ($str[$i]=='/') {
					$arr = explode('/', $str);
					$m_str = valueToMonth($arr[1]);
					break;
				}
				elseif($str[$i]=='-'){
					$arr = explode('-', $str);
					$m_str = valueToMonth($arr[1]);
					break;
				}else{
					$m_str=null;
					$arr[0]="Invalid Data";
				}

			}
			 $arr[1]=$m_str;
			 return $arr;
		}


		$str = $_POST["date"];
		$length=strlen($str);
		$get_date = strExplode($str,$length);
		$date_str= implode(" ", $get_date);
		echo "<h3> $date_str </h3>";

	}
	else{echo "<h4>Date is required !!</h4>";}
}
?>
</body>
</html>