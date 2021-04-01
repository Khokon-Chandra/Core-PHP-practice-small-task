<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['fname'];
    $name_aray = explode('-', $name);
    foreach ($name_aray as  $value) {
    	echo $value;
    }
    if (empty($name)) {
        echo "Name is empty";
    } else {
        
    }
}
?>

</body>
</html>