<?php
include("../../config/config.php");
if(isset($_GET['delete'])){
    $UserID = $_GET['UserID'];
    $sql1 = "DELETE FROM `admin` WHERE `UserID`=?";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$UserID]);
    header("location: ../users.php");
}
?>