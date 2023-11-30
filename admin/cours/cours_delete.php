<?php
    include("../../config/config.php");
    $sql1 = "DELETE FROM `cours_eye` WHERE `CoursID`=?";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$_GET['CoursID']]);
    header("location: ../kurslar.php?CoursID=".$_GET['CoursID']."");
?>