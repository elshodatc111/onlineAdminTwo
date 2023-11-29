<!DOCTYPE html>
<?php
    include("../config/config.php");
    if(!isset($_COOKIE['UserID'])){
        header("location: ./login.php");
    }
    $sql = "SELECT * FROM `cours_eye` WHERE `CoursID`='".$_GET['CoursID']."'";
    $res = $conn->query($sql);
    $row = $res->fetch();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kurs haqida</title>
        <link rel="shortcut icon" href="../assets/compiled/svg/favicon.svg" type="image/x-icon">
        <link rel="stylesheet" href="../assets/compiled/css/app.css">
        <link rel="stylesheet" href="../assets/compiled/css/app-dark.css">
        <link rel="stylesheet" href="../assets/compiled/css/iconly.css">
    </head>
<body>
    <script src="../assets/static/js/initTheme.js"></script>

    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo w-100">
                            <a href="./index.php"><h3 class="w-100 text-center text-white bg-danger py-2 pt-3">ATKO</h3></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item ">
                            <a href="./index.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Bosh sahifa</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./banner.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Bannerlar</span></a>
                        </li>
                        <li class="sidebar-item active">
                            <a href="./kurslar.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Kurslar</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./talaba.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Talabalar</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./statistika.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Statistika</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./kobinet.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Kabinet</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="./users.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Admin</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./login.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Chiqish</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
            </header>
            <div class="page-heading">
                <h3>Kurs haqida</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Bosh sahifa</a></li>
                        <li class="breadcrumb-item"><a href="./kurslar.php">Kurslar</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kurs</li>
                    </ol>
                </nav>
                <!-- KURSNI TAXRIRLASH -->
                <a class="btn btn-primary" href="./kurs_edit_text.php?CoursID=<?php echo $_GET['CoursID']; ?>">Kursni taxrirlash</a>
                <!-- VIDEONI TAXRIRLASH -->
                <a href="./kurs_video_edet.php?CoursID=<?php echo $_GET['CoursID']; ?>" class="btn btn-primary" >Video taxrirlash</a>
                <a href="./kurs_rasm_edet.php?CoursID=<?php echo $_GET['CoursID']; ?>" class="btn btn-primary" >Rasm taxrirlash</a>
                <!-- RASMNI TAXRIRLASH -->
                <a href="./kurs_new_mavzu_plus.php?CoursID=<?php echo $_GET['CoursID']; ?>" class="btn btn-success">MAVZULAR</a>
                <a href='./lugat.php' class="btn btn-success">LUG'ATLAR</a>
            </div> 
            <!-- Kurs haqida -->
            <section class="row">
                <div class="row my-3 mb-5">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-content p-1">
                                <img src="../assets/img/cours/<?php echo $row['CoursImage']; ?>" class="card-img-top img-fluid" style="max-height:250px;" alt="singleminded">
                                <div class="card-body py-2">
                                    <h4 class="card-title m-0 p-0 w-100 text-center"><?php echo $row['CoursName']; ?></h4>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item"><b>Kurs narxi: </b><?php echo $row['CoursSumma']; ?> so'm</li>
                                    <li class="list-group-item"><b>Mavzular soni: </b> <?php echo $row['MavzuCount']; ?></li>
                                    <li class="list-group-item"><b>Davomiyligi: </b> <?php echo $row['CoursLine']; ?></li>
                                    <li class="list-group-item"><b>Til: </b> <?php echo $row['Til']; ?></li>
                                    <li class="list-group-item"><b>Daraja: </b> <?php echo $row['Daraja']; ?></li>
                                    <li class="list-group-item"><b>O'qituvchi: </b> <?php echo $row['Oqituvchi']; ?></li>
                                    <li class="list-group-item"><b>Davomiyligi: </b> <?php echo $row['Davomiylig']; ?> kun</li>
                                </ul>
                                <div class="card-footer text-center">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body p-2">
                                    <video controls style="width:100%;" controlsList="nodownload">
                                        <source src="../assets/video/<?php echo $row['Video']; ?>" type="video/mp4">
                                    </video>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $row['Text']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Kurs mavzulari -->
            <div class="page-content">
                
            </div>
        </div>
    </div>

    <script src="../assets/static/js/components/dark.js"></script>
    <script src="../assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/compiled/js/app.js"></script>
    <script src="../assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/static/js/pages/dashboard.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/jquery.inputmask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.phone').inputmask('99 999 9999');
            $('.davomiy').inputmask('99:99:99');
            $('.pnfl').inputmask('99999999999999');
            $('.kodes').inputmask('9 9 9 9 9 9');
        });
    </script>
</body>
</html>