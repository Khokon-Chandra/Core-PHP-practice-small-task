<!DOCTYPE html>
<html>
<head>
  <title>Php tutorials</title>
  <link rel="stylesheet" type="text/css" href="animate.css">
  <style>
    body{background:lightgreen;}
    div{padding:15px;color:#333;width: 50%;height: auto; margin:20px auto; border:2px solid lightgray; box-shadow: 0px 5px 10px rgba(0,0,0,0.5);border-radius: 10px;
    }
    p{font-size: 17px;font-family: sans-serif;text-align: justify;}
  </style>
</head>
<body>




<?php 
$n=15;
 for ($i=1; $i <=$n ; $i++) {?>
    <div class="animated fadeInDown" <?php 
 if ($i==1) {
   echo "style='background:red;color:white;'";
 }
 elseif ($i>1 && $i<$n) {
   if ($i%2==0) {
   echo "style='background:orange'";
 }else{echo "style='background:skyblue'";}
 }
 else {
   echo "style='background:green'";
 }

 ?>>








  <h2 class="animated fadeInDown delay-1s" >Post number <?php echo $i;?></h2>
<p class="animated fadeInDown delay-1s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
</div>
<?php } ?>


</body>
</html>