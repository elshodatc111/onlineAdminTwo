<?php
    include("../../config/config.php");
    $sql1 = "DELETE FROM `cours_mavzu` WHERE `CoursID`=? AND `MavzuID`=?";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$_GET['CoursID'],$_GET['MavzuID']]);
    header("location: ../kurs_new_mavzu_plus.php?CoursID=".$_GET['CoursID']."");
?>