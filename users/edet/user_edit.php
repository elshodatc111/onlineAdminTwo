<?php
    include("../../config/config.php");
    $FIO = str_replace("'","`", $_POST['FIO']);
    $Email = str_replace("'","`", $_POST['Email']);
    $Addres = str_replace("'","`", $_POST['Addres']);
    $UserID = $_COOKIE['UserID'];

    $sql1 = "UPDATE `users` SET `FIO`=?,`Addres`=?,`Email`=? WHERE `UserID`='".$UserID."'";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$FIO, $Email,$Addres]);

    header("location: ../cobinet.php");
?>