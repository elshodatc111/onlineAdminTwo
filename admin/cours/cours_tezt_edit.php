<?php
    include("../../config/config.php");
    $CoursName = str_replace("'","`",$_POST['CoursName']);
    $Summa = str_replace("'","`",$_POST['Summa']);
    $MavzuSoni = str_replace("'","`",$_POST['MavzuSoni']);
    $KursUzunligi = str_replace("'","`",$_POST['KursUzunligi']);
    $Techer = str_replace("'","`",$_POST['Techer']);
    $KursTili = str_replace("'","`",$_POST['KursTili']);
    $Davomiyligi = str_replace("'","`",$_POST['Davomiyligi']);
    $Daraja = str_replace("'","`",$_POST['Daraja']);
    $Text = str_replace("'","`",$_POST['Text']);

    $sql1 = "UPDATE `cours_eye` SET `CoursName`=?,`CoursSumma`=?,`MavzuCount`=?,`CoursLine`=?,`Til`=?,`Daraja`=?,`Oqituvchi`=?,`Davomiylig`=?,`Text`=? WHERE `CoursID`='".$_GET['CoursID']."'";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$CoursName ,$Summa, $MavzuSoni, $KursUzunligi, $KursTili, $Daraja, $Techer, $Davomiyligi, $Text]);

    header("location: ../kurs_eye.php?CoursID=".$_GET['CoursID']."");
?>