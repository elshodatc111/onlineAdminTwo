<?php
include("../../config/config.php");
if(isset($_POST['text_edit'])){
    $H1 = str_replace("'","`",$_POST['H1']);
    $P = str_replace("'","`",$_POST['P']);
    $sql1 = "UPDATE `banner` SET `H1`=?,`P`=? WHERE `id`='".$_GET['id']."'";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$H1, $P]);
    header("location: ../banner.php?id=".$_GET['id']."");
}

?>