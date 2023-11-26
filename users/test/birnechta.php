<?php
    include("../../config/config.php");
    if(isset($_POST['birnechta'])){
        if(!empty($_POST['javob'])){
            $t = 0;
            $x = 0;
            foreach ($_POST['javob'] as $togri) {
                echo $togri."<br>";
                $sql="SELECT * FROM `cours_test_javob` WHERE `JavobID`='".$togri."' AND `Status`='true'";
                $res = $conn->query($sql);
                $k=0;
                while ($row = $res->fetch()) {
                    $k = $k+1;
                }
                if($k===0){
                    $x = $x+1;
                }else{
                    $t++;
                }
            }
            echo "T=".$t." X=".$x." A=";
            $sql1 = "SELECT * FROM `cours_test_javob` WHERE `TestID`='".$_GET['TestID']."' AND `Status`='true'";
            $res1 = $conn->query($sql1);
            $A = 0;
            while ($row1 = $res1->fetch()) { $A = $A + 1;}
            echo $A."<br>";
            if($x>0){
                header("location: ../kurs_test.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&error=error");
            }elseif($t===$A){
                header("location: ../kurs_test.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&status=true");
            }else{
                header("location: ../kurs_test.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&error=error");
            }
        }else{
            echo "no";
        }
    }
?>