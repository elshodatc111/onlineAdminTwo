<?php
    include_once("../../config/config.php");
    $Til_1 = str_replace("'","`",$_POST['Til_1']);
    $Til1_soz = str_replace("'","`",$_POST['Til1_soz']);
    $Til_2 = str_replace("'","`",$_POST['Til_2']);
    $Til_2_soz = str_replace("'","`",$_POST['Til_2_soz']);
    $CoursID = $_GET['CoursID'];

    $sql1 = "INSERT INTO `lugat`(`id`, `CoursID`, `Tli_1`, `Til1_soz`, `Til_2`, `Til_2_soz`) 
    VALUES (NULL,?,?,?,?,?)";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$CoursID ,$Til_1, $Til1_soz, $Til_2, $Til_2_soz]);
    header("location: ../lugat.php?CoursID=".$CoursID."");
?>