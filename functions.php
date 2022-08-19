<?php   
function add_member($name,$email,$phone,$committee,$season,$password){
    global $con;
    $stmt = $con->prepare("INSERT INTO members(user_name,email,password,phone,committee,season) Value(:hamada_name,:hamada_email,:pass,:phone_number,:comm,:season)");
    $stmt->execute(array(
        ":hamada_name" => $name,
        ":hamada_email" => $email,
        ":pass" => $password,
        ":phone_number" => $phone,
        ":comm" => $committee,
        ":season" => $season
    ));
mail("ahmed@gmail.com","Welcome to our site","<h1>asdjhkasjdhk</h1>","amr@gmail.com");
    // $_SESSION["username"] = $name;
    // $_SESSION["email"] = $email;
    // $_SESSION["username"] = $name;

    echo "success";
    // header("Refresh:3;url=about.php");
}

function all_members(){
    global $con;
    $stmt = $con->prepare("SELECT * FROM members WHERE season > ?");
    $stmt->execute();
    $rows = $stmt->fetchAll();
    return $rows;
}


function update_members($name,$phone,$id){
    global $con;
    $stmt = $con->prepare("UPDATE members SET `user_name`=? , `phone`=? WHERE `id`=?");
    $stmt->execute(array($name,$phone,$id));
}


function delete_members($id){
    global $con;
    $stmt = $con->prepare("DELETE FROM members WHERE id = :id");
    $stmt->bindParam(":id" , $id);
    $stmt->execute();
}
