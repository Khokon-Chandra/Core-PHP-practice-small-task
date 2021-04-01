<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST"){



		$bangla_mark=$_POST["bangla"];
			$english_mark=$_POST["english"];
			$math_mark=$_POST["math"];
			$physics_mark=$_POST["physics"];
			$chemistry_mark=$_POST["chemistry"];
			$sscience_mark=$_POST["sscience"];
			$ict_mark=$_POST["ict"];

			 

			if ($bangla_mark>=80 && $bangla_mark<=100) {
				$bangla_point = 5;	
			}
			elseif ($bangla_mark>=70 && $bangla_mark<=79) {
				$bangla_point = 4;
			}
			elseif ($bangla_mark>=60 && $bangla_mark<=69) {
				$bangla_point = 3.5;
			}
			elseif ($bangla_mark>=50 && $bangla_mark<=59) {
				$bangla_point =3;
			}
			elseif ($bangla_mark>=40 && $bangla_mark<=49) {
				$bangla_point = 2;
			}
			elseif ($bangla_mark>=33 && $bangla_mark<=39) {
				$bangla_point = 1;
			}
			elseif ($bangla_mark>=0 && $bangla_mark<=32) {
				$bangla_point = 0;
			}
			else{
				$bangla_point= "";
			}
			

			

			if ($english_mark>=80 && $english_mark<=100) {
				$english_point = 5;	
			}
			elseif ($english_mark>=70 && $english_mark<=79) {
				$english_point = 4;
			}
			elseif ($english_mark>=60 && $english_mark<=69) {
				$english_point = 3.5;
			}
			elseif ($english_mark>=50 && $english_mark<=59) {
				$english_point =3;
			}
			elseif ($english_mark>=40 && $english_mark<=49) {
				$english_point = 2;
			}
			elseif ($english_mark>=33 && $english_mark<=39) {
				$english_point = 1;
			}
			elseif ($english_mark>=0 && $english_mark<=32) {
				$english_point = 0;
			}
			else{
				$english_point= "";
			}




			if ($math_mark>=80 && $math_mark<=100) {
				$math_point = 5;	
			}
			elseif ($math_mark>=70 && $math_mark<=79) {
				$math_point = 4;
			}
			elseif ($math_mark>=60 && $math_mark<=69) {
				$math_point = 3.5;
			}
			elseif ($math_mark>=50 && $math_mark<=59) {
				$math_point =3;
			}
			elseif ($math_mark>=40 && $math_mark<=49) {
				$math_point = 2;
			}
			elseif ($math_mark>=33 && $math_mark<=39) {
				$math_point = 1;
			}
			elseif ($math_mark>=0 && $math_mark<=32) {
				$math_point = 0;
			}
			else{
				$math_point= " ";
			}




			if ($physics_mark>=80 && $physics_mark<=100) {
				$physics_point = 5;	
			}
			elseif ($physics_mark>=70 && $physics_mark<=79) {
				$physics_point = 4;
			}
			elseif ($physics_mark>=60 && $physics_mark<=69) {
				$physics_point = 3.5;
			}
			elseif ($physics_mark>=50 && $physics_mark<=59) {
				$physics_point =3;
			}
			elseif ($physics_mark>=40 && $physics_mark<=49) {
				$physics_point = 2;
			}
			elseif ($physics_mark>=33 && $physics_mark<=39) {
				$physics_point = 1;
			}
			elseif ($physics_mark>=0 && $physics_mark<=32) {
				$physics_point = 0;
			}
			else{
				$physics_point= "";
			}



			if ($chemistry_mark>=80 && $chemistry_mark<=100) {
				$chemistry_point = 5;	
			}
			elseif ($chemistry_mark>=70 && $chemistry_mark<=79) {
				$chemistry_point = 4;
			}
			elseif ($chemistry_mark>=60 && $chemistry_mark<=69) {
				$chemistry_point = 3.5;
			}
			elseif ($chemistry_mark>=50 && $chemistry_mark<=59) {
				$chemistry_point =3;
			}
			elseif ($chemistry_mark>=40 && $chemistry_mark<=49) {
				$chemistry_point = 2;
			}
			elseif ($chemistry_mark>=33 && $chemistry_mark<=39) {
				$chemistry_point = 1;
			}
			elseif ($chemistry_mark>=0 && $chemistry_mark<=32) {
				$chemistry_point = 0;
			}
			else{
				$chemistry_point= "";
			}



			if ($sscience_mark>=80 && $sscience_mark<=100) {
				$sscience_point = 5;	
			}
			elseif ($sscience_mark>=70 && $sscience_mark<=79) {
				$sscience_point = 4;
			}
			elseif ($sscience_mark>=60 && $sscience_mark<=69) {
				$sscience_point = 3.5;
			}
			elseif ($sscience_mark>=50 && $sscience_mark<=59) {
				$physics_point =3;
			}
			elseif ($sscience_mark>=40 && $sscience_mark<=49) {
				$sscience_point = 2;
			}
			elseif ($sscience_mark>=33 && $sscience_mark<=39) {
				$sscience_point = 1;
			}
			elseif ($sscience_mark>=0 && $sscience_mark<=32) {
				$sscience_point = 0;
			}
			else{
				$sscience_point= "";
			}





			if ($ict_mark>=80 && $ict_mark<=100) {
				$ict_point = 5;	
			}
			elseif ($ict_mark>=70 && $ict_mark<=79) {
				$ict_point = 4;
			}
			elseif ($ict_mark>=60 && $ict_mark<=69) {
				$ict_point = 3.5;
			}
			elseif ($ict_mark>=50 && $ict_mark<=59) {
				$ict_point =3;
			}
			elseif ($ict_mark>=40 && $ict_mark<=49) {
				$ict_point = 2;
			}
			elseif ($ict_mark>=33 && $ict_mark<=39) {
				$ict_point = 1;
			}
			elseif ($ict_mark>=0 && $ict_mark<=32) {
				$ict_point = 0;
			}
			else{
				$ict_point= "";
			}

			$sum = $bangla_point + $english_point + $math_point + $physics_point + $chemistry_point + $sscience_point + $ict_point;
				$average = $sum/7;


	}
			
			

?>

		
