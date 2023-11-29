<?php
include("../../config/config.php");
$target_dir = "../../assets/img/cours/";
$file_name = time().$_FILES["fileToUpload"]["name"];
$target_file = $target_dir . basename($file_name);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_dir1 = "../../assets/video/";
$file_name1 = time().$_FILES["fileToUpload2"]["name"];
$target_file1 = $target_dir1 . basename($file_name1);
$uploadOk1 = 1;
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

if($imageFileType != "jpg") {
  header("location: ../kurslar.php?error=Rasm faqat JPG va PNG rasmlarni joylash mumkun.");
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  header("location: ../kurslar.php?error=Rasm yuklashda xatolik qaytadan urinib ko`ring.");
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {


    if($imageFileType1 != "mp4") {
        header("location: ../kurslar.php?errorVideo faqat mp4 videolar joylash mumkun.");
        $uploadOk1 = 0;
    }
    if ($uploadOk1 == 0) {
    header("location: ../kurslar.php?error=Video yuklashda xatolik qaytadan urinib ko`ring.");
    }
    else {
        if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file1)) {
            $VideoName = $file_name1;
            $ImageName = $file_name;
            $CoursName = str_replace("'","`",$_POST['CoursName']);
            $narxi = $_POST['narxi'];
            $MavzuSoni = $_POST['MavzuSoni'];
            $Davomi = $_POST['Davomiyligi'];
            $Techer = str_replace("'","`",$_POST['Techer']);
            $KursTili = str_replace("'","`",$_POST['KursTili']);
            $davomiyligi = str_replace("'","`",$_POST['davomiyligi']);
            $kursdarajasi = str_replace("'","`",$_POST['kursdarajasi']);
            $text = str_replace("'","`",$_POST['text']);
            $CoursID = time();

            $sql1 = "INSERT INTO `cours_eye`(`id`, `CoursID`, `CoursName`, `CoursSumma`, `CoursImage`, `MavzuCount`, `CoursLine`, `Til`, `Daraja`, `Oqituvchi`, `Davomiylig`, `Video`, `Text`, `Date`)
            VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP)";
            $stmt1= $conn->prepare($sql1);
            $stmt1->execute([$CoursID ,$CoursName, $narxi, $ImageName, $MavzuSoni, $Davomi, $KursTili, $kursdarajasi, $Techer, $davomiyligi, $VideoName, $text ]);
            header("location: ../kurslar.php?plus=Yangi kurs qo`shildi.");
        } else {
            header("location: ../kurslar.php?error=Video yuklashda xatolik qaytadan urinib ko`ring.");
        }
    }


  } else {
    header("location: ../kurslar.php?error=Video yuklashda xatolik qaytadan urinib ko`ring.");
  }
}

?>