<!DOCTYPE html>
<?php
    include("../config/config.php");
    if(!isset($_COOKIE['UserID'])){
        header("location: ./login.php");
    }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kurslar</title>
        <link rel="shortcut icon" href="../assets/compiled/svg/favicon.svg" type="image/x-icon">
        <link rel="stylesheet" href="../assets/compiled/css/app.css">
        <link rel="stylesheet" href="../assets/compiled/css/app-dark.css">
        <link rel="stylesheet" href="../assets/compiled/css/iconly.css">
        <script>
            <?php
                if(isset($_GET['error'])){
                    echo "alert('".$_GET['error']."');";
                }
            ?>
        </script>
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
                <h3>Kurslar</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Bosh sahifa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kurslar</li>
                    </ol>
                </nav>
            </div> 
            <div class="page-content">
                <section class="section row">
                    <?php
                        $sql = "SELECT * FROM `cours_eye` ORDER BY `id` DESC";
                        $res = $conn->query($sql);
                        while ($row=$res->fetch()) {
                    ?>
                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body text-center" style="min-height:250px;">
                                    <img class="img-fluid w-100" src="../assets/img/cours/<?php echo $row['CoursImage']; ?>">
                                    <h5 class="card-title"><?php echo $row['CoursName']; ?></h5>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <a href="./kurs_eye.php?CoursID=<?php echo $row['CoursID']; ?>" class="btn btn-light-primary"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="eye"></i></a>
                                    <a href="" class="btn btn-light-danger"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        
                    ?>
                    

                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4>Yangi kurs qo'shish</h4>
                                    <form action="./cours/cours_plus.php" enctype="multipart/form-data" method="POST">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="mt-3" style="font-weight:700;">Kursning nomi</label>
                                                <input type="text" name="CoursName" class="form-control" placeholder="Kursning nomi" required>
                                                <label class="mt-3" style="font-weight:700;">Kursning narxi</label>
                                                <input type="number" name="narxi" class="form-control" placeholder="Kursning narxi" required>
                                                <label class="mt-3" style="font-weight:700;">Kurs rasmi (320x180px .jpg)</label>
                                                <input type="file" class="form-control" name="fileToUpload" placeholder="Kursning rasmi" required>
                                                <label class="mt-3" style="font-weight:700;">Mavzular soni</label>
                                                <input type="number" name="MavzuSoni" class="form-control" placeholder="Mavzular soni" required>
                                                <label class="mt-3" style="font-weight:700;">Kursning davomiyligi(Barcha video kurslar)</label>
                                                <input type="text" name="Davomiyligi" class="form-control davomiy" placeholder="Kurs davomiyligi" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="mt-3" style="font-weight:700;">O'qituvchi</label>
                                                <input type="text" name="Techer" class="form-control" placeholder="O'qituvchi" required>
                                                <label class="mt-3"  style="font-weight:700;">Kursning tili</label>
                                                <input type="text" name="KursTili" class="form-control" placeholder="Kursning tili" required>
                                                <label class="mt-3" style="font-weight:700;">Kurs haqida video(.mp4)</label>
                                                <input type="file" class="form-control" name="fileToUpload2" placeholder="Kurs haqida video" required>
                                                <label class="mt-3" style="font-weight:700;">Davomiyligi (Kun)</label>
                                                <input type="number" name="davomiyligi" class="form-control" placeholder="Davomiyligi (Kun)" required>
                                                <label class="mt-3" style="font-weight:700;">Kurs darajasi</label>
                                                <input type="text" name="kursdarajasi" class="form-control" placeholder="Kurs darajasi" required>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="mt-2">Kurs haqida</label>
                                                <textarea class="form-control" name="text" rows='5' required></textarea>
                                            </div>
                                            <div class="col-12 text-center pt-2">
                                                <button type="submit" class="btn btn-primary ms-1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Kursni saqlash</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section>
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