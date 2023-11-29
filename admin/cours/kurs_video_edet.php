<?php
    include("../../config/config.php");
    $target_dir = "../../assets/video/";
    $file_name = time().$_FILES["fileToUpload"]["name"];
    $target_file = $target_dir . basename($file_name);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST['video_edet'])){
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
              $uploadOk = 1;
            } else {
              header("location: ../kurs_video_edet.php?CoursID=".$_GET['CoursID']."&error=Siz tanlagan video mos kelmadi.");
              $uploadOk = 0;
            }
          }
          if (file_exists($target_file)) {
            header("location: ../kurs_video_edet.php?CoursID=".$_GET['CoursID']."&error=Siz video tanlamadingiz.");
            $uploadOk = 0;
          }
          if ($_FILES["fileToUpload"]["size"] > 100000000) {
            header("location: ../kurs_video_edet.php?CoursID=".$_GET['CoursID']."&error=Video hajmi 100 MBdan katta.");
            $uploadOk = 0;
          }
          if($imageFileType != "mp4") {
            header("location: ../kurs_video_edet.php?CoursID=".$_GET['CoursID']."&error=Rasm faqat mp4 videolarni joylash mumkun.");
            $uploadOk = 0;
          }
          if ($uploadOk == 0) {
            header("location: ../kurs_video_edet.php?CoursID=".$_GET['CoursID']."&error=Video yuklashda xatolik qaytadan urinib ko`ring.");
          } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
              $sql1 = "UPDATE `cours_eye` SET `Video`=? WHERE `CoursID`='".$_GET['CoursID']."'";
              $stmt1= $conn->prepare($sql1);
              $stmt1->execute([$file_name]);
              header("location: ../kurs_video_edet.php?CoursID=".$_GET['CoursID']."");
              echo $file_name;
            } else {
              header("location: ../kurs_video_edet.php?CoursID=".$_GET['CoursID']."&error=Video yuklashda xatolik qaytadan urinib ko`ring.");
            }
          }
          
    }
?>