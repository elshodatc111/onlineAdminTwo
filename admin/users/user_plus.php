<?php
include("../../config/config.php");
if(isset($_POST['user_plus'])){
    $fio = str_replace("'","`",$_POST['FIO']);
    $Login = str_replace("'","`",$_POST['Login']);
    $password = md5($_POST['Parol']);
    $UserID = time();
    $sql1 = "INSERT INTO `admin`(`id`, `UserID`, `FIO`, `Login`, `Password`, `Image`, `Data`) 
    VALUES (NULL,?,?,?,?,'01.png',CURRENT_TIMESTAMP)";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$UserID ,$fio , $Login, $password]);
    header("location: ../users.php");
}
?>