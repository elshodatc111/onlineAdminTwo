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
        <title>Video taxrirlash</title>
        <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
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
                        <li class="breadcrumb-item"><a href="./kurs_eye.php?CoursID=<?php echo $_GET['CoursID']; ?>">Kurs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kursga mavzu qo'shish</li>
                    </ol>
                </nav>
            </div> 
            <!-- Kurs mavzulari -->
            <section class="section">
                <div class="card">
                    <div class="card-content">
                        <div class="table-responsive p-2">
                            <h5 class="w-100 text-center">Kurs mavzulari</h5>
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Mavzu</th>
                                        <th class="text-center">Tartib raqami</th>
                                        <th class="text-center">Testlar soni</th>
                                        <th class="text-center">Video vaqti</th>
                                        <th class='text-center'>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql1="SELECT * FROM `cours_mavzu` WHERE `CoursID`='".$_GET['CoursID']."' ORDER BY `Numbers` ASC";
                                        $res1 = $conn->query($sql1);
                                        $i=1;
                                        while ($row1=$res1->fetch()) {
                                            $sql3 = "SELECT * FROM `cours_test` WHERE `MavzuID`='".$row1['MavzuID']."'";
                                            $res3 = $conn->query($sql3);
                                            $Testlar = 0;
                                            while ($row3 = $res3->fetch()) {
                                                $Testlar = $Testlar+1;
                                            }
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row1['MavzuName']; ?></td>
                                        <td class='text-center'><?php echo $row1['Numbers']; ?></td>
                                        <td class='text-center'><?php echo $Testlar; ?></td>
                                        <td class='text-center'><?php echo $row1['TimeLine']; ?></td>
                                        <td class='text-center'>
                                            <a href='./kurs_mavzu_eye.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $row1['MavzuID']; ?>'><i class='badge-circle badge-circle-light-secondary font-medium-1' data-feather='eye'></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Kursga mavzu qo'shish -->
            <section class="row text-center">
                <div class="card">
                    <div class="card-body">
                        <h5>Kursga yangi mavzu qo'shish</h5>
                        <form action="./cours/cours_mavzu_plus.php?CoursID=<?php echo $_GET['CoursID']; ?>" enctype="multipart/form-data" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="mt-3"  style="font-weight:700;">Mavzuning nomi</label>
                                    <input type="text" name="MavzuName" class="form-control" placeholder="Mavzuning nomi" required>
                                    <label class="mt-3" style="font-weight:700;">Mavzu tartib raqami</label>
                                    <input type="number" name="Number" class="form-control" placeholder="Mavzu tartib raqami" required>
                                </div>
                                <div class="col-lg-6">
                                    <label class="mt-3" style="font-weight:700;">Mavzu haqida video(.mp4)</label>
                                    <input type="file" name="fileToUpload" class="form-control" placeholder="Mavzu haqida video" required>
                                    <label class="mt-3" style="font-weight:700;">Video uzunligi</label>
                                    <input type="text" name="Line" class="form-control davomiy" placeholder="Video uzunligi" required>
                                </div>
                                <div class="col-lg-12">
                                    <label class="mt-2">Mavzu haqida</label>
                                    <textarea class="form-control" name="Text" rows='5' required></textarea>
                                </div>
                            </div>
                            <button type="submit" name="Mavzu_Plus" class="btn btn-primary my-3">O'zgarishlarni saqlash</button>
                        <form>
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