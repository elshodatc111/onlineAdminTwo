<?php
include("../../config/config.php");
if(isset($_GET['id'])){
    $UserID = $_GET['id'];
    $sql1 = "DELETE FROM `banner` WHERE `id`=?";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$UserID]);
    header("location: ../banner.php");
}
?>