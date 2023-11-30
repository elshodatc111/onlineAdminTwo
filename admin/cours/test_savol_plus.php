<?php
    include("../../config/config.php");
    $CoursID = $_GET['CoursID'];
    $MavzuID = $_GET['MavzuID'];
    $TestID = "S".time();
    $savol = str_replace("'","`",$_POST['savol']);
    $Type = $_POST['Type'];

    $sql1 = "INSERT INTO `cours_test`(`id`, `CoursID`, `MavzuID`, `TestID`, `Savol`, `Type`, `Date`)
    VALUES (NULL,?,?,?,?,?,CURRENT_TIMESTAMP)";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$CoursID,$MavzuID,$TestID,$savol,$Type]);
    header("location: ../test_plus.php?CoursID=".$CoursID."&MavzuID=".$MavzuID."");

?>