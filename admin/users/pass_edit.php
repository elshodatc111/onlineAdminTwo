<?php
    include("../../config/config.php");
    if(isset($_POST['editpassword'])){
        $passw1 = md5($_POST['passw1']);
        $passw2 = md5($_POST['passw2']);
        $UserID = $_COOKIE['UserID'];
        
        $sql1 = "SELECT * FROM `admin` WHERE `UserID`='".$UserID."' AND `Password`='".$passw1."'";
        $res1 = $conn->query($sql1);
        $count = 0;
        while ($row = $res1->fetch()) {
            $count = $count + 1;
        }
        if($count>0){
            $sql2 = "UPDATE `admin` SET `Password`=? WHERE `UserID`='".$UserID."'";
            $stmt2= $conn->prepare($sql2);
            $stmt2->execute([$passw2]);
            header("location: ../kobinet.php?pass2=true");
        }else{
            header("location: ../kobinet.php?pass=error");
        }
    }
?>