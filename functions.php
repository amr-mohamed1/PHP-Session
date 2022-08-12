<?php   
function add_member($name,$email,$phone,$committee,$season){
    global $con;
    $stmt = $con->prepare("INSERT INTO members(user_name,email,phone,committee,season) Value(:hamada_name,:hamada_email,:phone_number,:comm,:season)");
    $stmt->execute(array(
        ":hamada_name" => $name,
        ":hamada_email" => $email,
        ":phone_number" => $phone,
        ":comm" => $committee,
        ":season" => $season
    ));

    echo "success";
    header("Refresh:3;url=about.php");
}

function all_members($id){
    global $con;
    $stmt = $con->prepare("SELECT * FROM members WHERE id=?");
    $stmt->execute(array($id));
    $rows = $stmt->fetchAll();
    return $rows;
}
