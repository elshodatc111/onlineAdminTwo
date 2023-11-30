<?php
include("../../config/config.php");
if(isset($_POST['form_text_edet'])){
    $MavzuName = str_replace("'","`",$_POST['MavzuName']);
    $TartibRaqam = $_POST['TartibRaqam'];
    $VideoUzunligi = $_POST['VideoUzunligi'];
    $Text = $_POST['Text'];
    $CoursID = $_GET['CoursID'];
    $MavzuID = $_GET['MavzuID'];

    $sql1 = "UPDATE `cours_mavzu` SET `MavzuName`=?,`Text`=?,`Numbers`=?,`TimeLine`=? WHERE `CoursID`=? AND `MavzuID`=?";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$MavzuName ,$Text, $TartibRaqam, $VideoUzunligi, $CoursID, $MavzuID]);
    header("location: ../kurs_mavzu_eye.php?CoursID=".$CoursID."&MavzuID=".$MavzuID."");
}

?>