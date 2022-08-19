<?php 
ob_start();
session_start();
require_once "connect_db.php";    
include "functions.php";    
// $user_id = 1;
// $user_name = "Pamela Booth Angelica Mckinney";


// $user_data = all_members($user_id,$user_name);
// // print_r($user_data);

// foreach($user_data as $data){
//     // echo $data["user_name"] . " email :- " . $data["email"] . "<br>";
//     mail($data["email"],"Welcome to our site","<h1>asdjhkasjdhk</h1>","From:amr@gmail.com");

// }




if($_SERVER["REQUEST_METHOD"] == "POST"){
    $first_name = filter_var($_POST["f_name"],FILTER_SANITIZE_STRING);
    $second_name = filter_var($_POST["s_name"],FILTER_SANITIZE_STRING);
    $pass = filter_var($_POST["pass"],FILTER_SANITIZE_STRING);
    $hashed_pass = sha1($pass);
    $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST["phone"],FILTER_SANITIZE_EMAIL);
    $committee = filter_var($_POST["comm"],FILTER_SANITIZE_EMAIL);
    $season = filter_var($_POST["season"],FILTER_SANITIZE_EMAIL);

    $name = $first_name . " " . $second_name;

    // add_member($name,$email,$phone,$committee,$season,$hashed_pass);
    // add_member($name,$email,$phone,$committee,$season,$hashed_pass);
    update_members($name,$phone,$season);
    // $image = $_FILES["amr_img"]["name"];
    // $size = $_FILES["amr_img"]["size"];
    // $tmp_name = $_FILES["amr_img"]["tmp_name"];
    // $type = $_FILES["amr_img"]["type"];




    // $extention_allowed = array("png","jpg","jpeg");
    
    
    // @$extention             = strtolower(end(explode(".",$image)));
    // if(in_array($extention,$extention_allowed)){
    //     $avatar = rand(0,1000000) . "_" . $image ;
    //     $destination = "img/" . $avatar ;
    //     move_uploaded_file($tmp_name,$destination);
    // }else{
    //     echo "<div class=\"container\"><div class=\"alert alert-danger\" role=\"alert\">
    //             Sorry Extention Not Allowed
    //             </div></div>";
    // }   



    // header("Location:about.php");
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
    
    <a href="index.php?id=5">link</a>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <input type="text" name="f_name">
        <input type="text" name="s_name">
        <input type="email" name="email">
        <input type="phone" name="phone">
        <input type="password" name="pass">
        <input type="text" name="comm">
        <input type="number" name="season">
        <input type="file" name="amr_img">
        <input type="submit">

    </form>

</body>
</html>

<?php 

ob_end_flush();