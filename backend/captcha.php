<?php
session_start();
$n1=rand(10,99);
$n2=rand(1,9);
echo $n1."+".$n2."= ?";
$result=$n1+$n2;
$_SESSION['result']=$result;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check.php" method="post">
        <input type="number" name="ans" required>
        <input type="submit" name="btn" value="submit">
    </form>
</body>
</html>