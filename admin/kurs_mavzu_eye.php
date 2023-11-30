<!DOCTYPE html>
<?php
    include("../config/config.php");
    if(!isset($_COOKIE['UserID'])){
        header("location: ./login.php");
    }
    $sql = "SELECT * FROM `cours_mavzu` WHERE `CoursID`='".$_GET['CoursID']."' AND `MavzuID`='".$_GET['MavzuID']."'";
    $res = $conn->query($sql);
    $row = $res->fetch();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kurs mavzu haqida</title>
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
                <h3>Kurs mavzusi</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Bosh sahifa</a></li>
                        <li class="breadcrumb-item"><a href="./kurslar.php">Kurslar</a></li>
                        <li class="breadcrumb-item"><a href="./kurs_eye.php">Kurs</a></li>
                        <li class="breadcrumb-item"><a href="./kurs_new_mavzu_plus.php?CoursID=<?php echo $_GET['CoursID']; ?>">Mavzular</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mavzu</li>
                    </ol>
                </nav>
                
            </div> 
            <!-- Kurs haqida -->
            <section class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-content" style="min-height:400px;">
                            <div class="card-body p-2">
                                <video controls style="width:100%;" controlsList="nodownload">
                                    <source src="../assets/video/<?php echo $row['Video']; ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="card-body text-center">
                                <a href="./mavzu_video_edet.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>" class="btn btn-primary w-100">Videoni yangilash</a>
                                <a href="./test_plus.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>" class="btn btn-success text-white mt-2 w-100">TESTLAR</a>
                                <a href="#" class="btn btn-danger mt-2 w-100">Mavzuni o'chirish</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body" style="min-height:400px;">
                            <form action="./cours/cours_mavzu_text_edit.php?CoursID=<?php echo $_GET['CoursID'] ?>&MavzuID=<?php echo $_GET['MavzuID'] ?>" method="POST">
                                <div class="row text-center">
                                    <div class="col-lg-12">
                                        <label style="font-weight:700;">Mavzu nomi</label>
                                        <input type="text" name="MavzuName" value="<?php echo $row['MavzuName']; ?>" class="form-control" placeholder="Mavzu nomi" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="mt-1" style="font-weight:700;">Mavzu tartib raqami</label>
                                        <input type="number" name="TartibRaqam" value="<?php echo $row['Numbers']; ?>" class="form-control" placeholder="Tartib raqami" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="mt-1" style="font-weight:700;">Video uzunligi</label>
                                        <input type="text" name="VideoUzunligi" value="<?php echo $row['TimeLine']; ?>" class="form-control davomiy" placeholder="Tartib raqami" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="mt-2">Mavzu haqida</label>
                                        <textarea class="form-control" name="Text" rows='5' required><?php echo $row['Text']; ?></textarea>
                                        <input type="submit" name="form_text_edet" class="btn btn-primary mt-3" value="O'zgarishlarni yangilash"/>
                                    </div>
                                </div>
                            <form>
                        </div>
                    </div>
                </div>
                
                
            </section>
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