<?php
    include("../../config/config.php");
    $CoursID = $_GET['CoursID'];
    $MavzuID = $_GET['MavzuID'];
    $TestID = $_POST['TestID'];
    $JavobID = "J".time();
    $Javob = str_replace("'","`",$_POST['Javob']);
    $Status = $_POST['Status'];

    $sql1 = "INSERT INTO `cours_test_javob`(`id`, `TestID`, `JavobID`, `Javob`, `Status`)
    VALUES (NULL,?,?,?,?)";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$TestID,$JavobID,$Javob,$Status]);
    header("location: ../test_plus.php?CoursID=".$CoursID."&MavzuID=".$MavzuID."");

?>