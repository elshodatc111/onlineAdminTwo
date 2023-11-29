<?php
include("../../config/config.php");
if(isset($_POST['kirish'])){
    $login = str_replace("'","`",$_POST['login']);
    $password = md5($_POST['password']);
    $sql1 = "SELECT * FROM `admin` WHERE `Login`='".$login."' AND `Password`='".$password."'";
    $res1 = $conn->query($sql1);
    $count = 0;
    while ($row = $res1->fetch()) {
        $count = $count + 1;
    }
    if($count>0){
        $sql = "SELECT * FROM `admin` WHERE `Login`='".$login."' AND `Password`='".$password."'";
        $res = $conn->query($sql);
        $row = $res->fetch();
        
        $cookie_name = "UserID";
        $cookie_value = $row['UserID'];
        setcookie($cookie_name, $cookie_value, time() + (3600), "/");

        header("location: ../index.php");
    }else{
        echo "Yoq";
        header("Location: ../login.php?passw=error");
    }
    
}

?>