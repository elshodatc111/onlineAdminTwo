<?php
include("../../config/config.php");
$target_dir = "../../assets/img/cours/";
$file_name = time().$_FILES["fileToUpload"]["name"];
$target_file = $target_dir . basename($file_name);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    header("location: ../kurs_rasm_edet.php?CoursID=".$_GET['CoursID']."&error=Siz tanlagan rasm mos kelmadi.");
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  header("location: ../kurs_rasm_edet.php?CoursID=".$_GET['CoursID']."&error=Siz rasn tanlamadingiz.");
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
  header("location: ../kurs_rasm_edet.php?CoursID=".$_GET['CoursID']."&error=Rasm hajmi 1 MBdan katta.");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png") {
  header("location: ../kurs_rasm_edet.php?CoursID=".$_GET['CoursID']."&error=Rasm faqat JPG va PNG rasmlarni joylash mumkun.");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  header("location: ../kurs_rasm_edet.php?CoursID=".$_GET['CoursID']."&error=Rasm yuklashda xatolik qaytadan urinib ko`ring.");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $sql1 = "UPDATE `cours_eye` SET `CoursImage`=? WHERE `CoursID`='".$_GET['CoursID']."'";
    $stmt1= $conn->prepare($sql1);
    $stmt1->execute([$file_name]);
    header("location: ../kurs_rasm_edet.php?CoursID=".$_GET['CoursID']."");
    echo $file_name;
  } else {
    header("location: ../kurs_rasm_edet.php?CoursID=".$_GET['CoursID']."&error=Rasm yuklashda xatolik qaytadan urinib ko`ring.");
  }
}

?>