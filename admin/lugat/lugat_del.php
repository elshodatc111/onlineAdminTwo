<?php
    include("../../config/config.php");
    $sql1 = "DELETE FROM `lugat` WHERE `CoursID`=? AND `id`=?";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$_GET['CoursID'],$_GET['id']]);
    header("location: ../lugat.php?CoursID=".$_GET['CoursID']."");
?>