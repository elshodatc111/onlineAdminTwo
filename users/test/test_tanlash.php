<?php
    include("../../config/config.php");
        if(isset($_POST['tanlang'])){
            $javobID = $_POST['javobID'];
            echo $javobID;
            $sql = "SELECT * FROM `cours_test_javob` WHERE `TestID`='".$_GET['TestID']."' AND `JavobID`='".$javobID."' AND `Status`='true'";
            $res = $conn->query($sql);
            $t = 0;
            while ($row = $res->fetch()) {
                $t = $t + 1;
            }
            if($t>0){
                header("location: ../kurs_test.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&status=true");
            }else{
                header("location: ../kurs_test.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&error=error");
            }
        }

?>