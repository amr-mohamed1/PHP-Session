<?php 
session_start();
if(!empty($_SESSION['f_name'])){
echo $_SESSION['f_name'] . "<br>";
echo $_SESSION['s_name'] . "<br>";
echo $_SESSION['email'] . "<br>";
}else{
    header("Location:index.php");
}