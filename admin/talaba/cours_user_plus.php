<?php
    include("../../config/config.php");

    $UserID = $_GET['UserID'];
    $CoursID = $_POST['CoursID'];
    $Start = $_POST['Start'];
    $End = $_POST['End'];
    $MenegerID = $_COOKIE['UserID'];
    
    $sql11 = "INSERT INTO `user_cours`(`id`, `UserID`, `CoursID`, `Start`, `End`, `Izoh`, `Data`, `MengerID`) 
    VALUES (NULL,'".$UserID."','".$CoursID."','".$Start."','".$End."','Test cours',CURRENT_TIMESTAMP, ? )";
    
    $stmt11= $conn->prepare($sql11);
    
    $stmt11->execute([ $MenegerID ]);

    header("location: ../talaba_eye.php?UserID=".$UserID."");
?>