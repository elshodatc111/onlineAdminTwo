<?php
    include("./config/config.php");

    if(isset($_POST['Phone'])){
        $Phone = str_replace(" ","",$_POST['Phones']);
        $sql1 = "SELECT * FROM `users` WHERE `Phone`='".$Phone."'";
        $res1 = $conn->query($sql1);
        $count = 0;
        while ($row = $res1->fetch()) {
            $count = $count + 1;
        }
        if($count>0){
            $rand1 = rand(100000, 999999);
            echo $Phone;
            setcookie("code", $rand1, time()+5*60);
            header("Location: login.php?sendmessege=true&Phone=".$Phone."");
        }else{
            header("Location: login.php?phone1=error");
            echo "ok";
            echo $_POST['Phones'];
            echo $Phone;
        }
    }elseif(isset($_POST['tasdiqlash'])){
        $TasdiqCode = str_replace(" ","",$_POST['tasdiqkodi']);
        if($_COOKIE['code']===$TasdiqCode){
            if(!isset($_COOKIE['code'])){
                header("location: ./login.php");
            }
            $sql1 = "SELECT * FROM `users` WHERE `Phone`='".$_GET['Phone']."'";
            $res1 = $conn->query($sql1);
            $row = $res1->fetch();
            setcookie("code", '', time()-6*60);
            setcookie("UserID", $row['UserID'], time()+6*3600);
            header("location: ./index.php");
        }else{
            echo "false";
            if(!isset($_COOKIE['code'])){
                header("location: ./login.php");
            }
            header("Location: login.php?sendmessege=true&Phone=".$Phone."&codeerror=true");
        }

    }
?>