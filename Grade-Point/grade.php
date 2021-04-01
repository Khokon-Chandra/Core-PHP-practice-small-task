
<!DOCTYPE html>
<html>
<head>
  <title>Javascript</title>
  <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="container-fluid">

			
			<h2>Enter Subject Marks</h2>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<table ce>
				<tr>
					<th>Subject</th><th>Marks</th>
				</tr>
				<tr><td>Bangla</td><td><input type="text" name="bangla"></td>
				</tr>
				</tr>
				<tr><td>English</td><td><input type="text" name="english"></td>
				</tr>
				</tr>
				<tr><td>Mathematics</td><td><input type="text" name="math"></td>
				</tr>
				</tr>
				<tr><td>Physics</td><td><input type="text" name="physics"></td>
				</tr>
				</tr>
				<tr><td>Chemistry</td><td><input type="text" name="chemistry"></td>
				</tr>
				</tr>
				<tr><td>Scocial-Science</td><td><input type="text" name="sscience"></td>
				</tr>
				<tr><td>Information Technology</td><td><input type="text" name="ict"></td>
				</tr>
				<tr>
					<td colspan="3"><input type="submit" value="submit"></td>
				</tr>
								
			</table>

			</form>
			

			<table class="list">

				<!-- <h4 style="text-align: center;">Grading System</h4> -->

				<tr style=>
					<th colspan="3">Grading System</th>
				</tr>
				<tr>
				<th style="background:#FFCD00;">Class-Interval</th><th style="background:#FFCD00;">letter-grade</th><th style="background:#FFCD00;">grade-Points</th>
				</tr>
				<tr>
					<td>80-100</td><td>A+</td><td>5</td>
				</tr>
				<tr>
					<td>70-79</td><td>A</td><td>4</td>
				</tr>
				<tr>
					<td>60-69</td><td>A-</td><td>3.5</td>
				</tr>
				<tr>
					<td>50-59</td><td>B</td><td>3</td>
				</tr>
				<tr>
					<td>40-49</td><td>C</td><td>2</td>
				</tr>
				<tr>
					<td>33-39</td><td>D</td><td>1</td>
				</tr>
				<tr>
					<td>0-32</td><td>F</td><td>0</td>
				</tr>
			</table>
			

		
		<div class="output">
			<h1>Your Result:</h1>
			
			<?php include 'site.php'; 

			

			printf("<h1>Grade point:%.2f",$average); 
			echo"</h1>";
			
			



			 
			?>

			

		</div>
	
</div>







<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>