<?php
    include("../../config/config.php");
    $sql1 = "DELETE FROM `cours_test_javob` WHERE `id`=?";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$_GET['id']]);
    header("location: ../test_plus.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."");
?>