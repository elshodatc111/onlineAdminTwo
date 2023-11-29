<?php
    include("../../config/config.php");
    if(isset($_POST['Mavzu_Plus'])){
        
        $MavzuName = str_replace("'","`", $_POST['MavzuName']);
        $Number = $_POST['Number'];
        $Line = $_POST['Line'];
        $Text = str_replace("'","`",$_POST['Text']);
        $MavzuID = "M".time();

        $target_dir = "../../assets/img/cours/";
        $file_name = time().$_FILES["fileToUpload"]["name"];
        $target_file = $target_dir . basename($file_name);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if (file_exists($target_file)) {
            header("location: ../kurs_new_mavzu_plus.php?CoursID=".$_GET['CoursID']."&error=Siz video tanlamadingiz.");
            $uploadOk = 0;
        }
        if ($_FILES["fileToUpload"]["size"] > 1000000000) {
            header("location: ../kurs_new_mavzu_plus.php?CoursID=".$_GET['CoursID']."&error=video hajmi 100 MBdan katta.");
            $uploadOk = 0;
        }
        if($imageFileType != "mp4") {
            header("location: ../kurs_new_mavzu_plus.php?CoursID=".$_GET['CoursID']."&error=video faqat MP4 rasmlarni joylash mumkun.");
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            header("location: ../kurs_new_mavzu_plus.php?CoursID=".$_GET['CoursID']."&error=Video yuklashda xatolik qaytadan urinib ko`ring.");
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $VideoName = $file_name;
                echo $MavzuName;
                $sql1 = "INSERT INTO `cours_mavzu`(`id`, `CoursID`, `MavzuID`, `MavzuName`, `Video`, `Text`, `Numbers`, `TimeLine`, `Dates`)
                VALUES (NULL,?,?,?,?,?,?,?,CURRENT_TIMESTAMP)";
                $stmt1= $conn->prepare($sql1);
                $stmt1->execute([$_GET['CoursID'],$MavzuID,$MavzuName,$VideoName,$Text,$Number,$Line]);
                header("location: ../kurs_new_mavzu_plus.php?CoursID=".$_GET['CoursID']."");
            } else {
              header("location: ../kurs_new_mavzu_plus.php?CoursID=".$_GET['CoursID']."&error=1Video yuklashda xatolik qaytadan urinib ko`ring.");
            }
          }

    }
?>