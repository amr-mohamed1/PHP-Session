<?php
ob_start(); 
session_start();
if(!empty($_SESSION['f_name'])){
echo $_SESSION['f_name'] . "<br>";
echo $_SESSION['s_name'] . "<br>";
echo $_SESSION['email'] . "<br>";
}else{
    header("Location:index.php");
}
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
    <a href="logout.php">logout</a>
</body>
</html>


<?php


ob_end_flush();
?>