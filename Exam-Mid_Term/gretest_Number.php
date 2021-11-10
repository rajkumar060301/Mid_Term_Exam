<!DOCTYPE html>
<html>
<head>
    <style> html page</style>
</head>
<body>
<h2>Input Number</h2>
<form action="gretest_Number.php" method="post">
    First Number:<input type="number" name="First_Number" value=""><br>
    Second Number:<input type="number" name="Second_Number" value=""><br>
    Third Number:<input type="number" name="Third_Number" value=""><br>
<input type="submit" value="Check Here ">
</form>
</body>
</html>
<?php
$num1=$_POST['First_Number'];
$num2=$_POST['Second_Number'];
$num3=$_POST['Third_Number'];
if($num1>$num2 && $num1>$num3){
    echo $num1;
}
else{
    if($num2>$num1 && $num2>$num3){
        echo $num2;
    }
    else
        echo $num3;
}

?>