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
        <title>Lug'atlar</title>
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
                <h3>Kurslar</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Bosh sahifa</a></li>
                        <li class="breadcrumb-item"><a href="./kurslar.php">Kurslar</a></li>
                        <li class="breadcrumb-item"><a href="./kurs_eye.php?CoursID=<?php echo $_GET['CoursID']; ?>">Kurs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lug'at</li>
                    </ol>
                </nav>
                <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#primary">Yangi lug'at qo'shish</button>
                <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title white" id="myModalLabel160">Yangi lug'at qo'shish</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <i data-feather="x"></i></button>
                            </div>
                            <form action="./lugat/lugat_plus.php?CoursID=<?php echo $_GET['CoursID']; ?>" method="POST">
                                <div class="modal-body">
                                    <label class="mt-3" style="font-weight:700;">Tarjima Tili</label>
                                    <input type="text" name="Til_1" class="form-control" placeholder="Tarjima Tili" required>
                                    <label class="mt-3" style="font-weight:700;">Tarjima So'z</label>
                                    <input type="text" name="Til1_soz" class="form-control" placeholder="Tarjima So'z" required>
                                    <label class="mt-3" style="font-weight:700;">Tarjima qilingan til</label>
                                    <input type="text" name="Til_2" class="form-control" placeholder="Tarjima qilingan til" required>
                                    <label class="mt-3" style="font-weight:700;">Tarjima qilingan so'z</label>
                                    <input type="text" name="Til_2_soz" class="form-control" placeholder="Tarjima qilingan so'z" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Bekor qilish</span></button>
                                    <button type="submit" class="btn btn-primary ms-1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Lug'atni saqlash</span></button>
                                </div>
                            <form>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="page-content">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark text-center">
                                        <tr>
                                            <th>#</th>
                                            <th>Tarjima Tili</th>
                                            <th>Tarjima So'z</th>
                                            <th>Tarjima qilingan til</th>
                                            <th>Tarjima qilingan so'z</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql1 = "SELECT * FROM `lugat` WHERE `CoursID`='".$_GET['CoursID']."'";
                                            $res1 = $conn->query($sql1);
                                            $i=1;
                                            while ($row1 = $res1->fetch()) {
                                        ?>
                                        <tr>
                                            <td class='text-center'><?php echo $i; ?></td>
                                            <td><?php echo $row1['Tli_1']; ?></td>
                                            <td><?php echo $row1['Til1_soz']; ?></td>
                                            <td><?php echo $row1['Til_2']; ?></td>
                                            <td><?php echo $row1['Til_2_soz']; ?></td>
                                            <td class='text-center'>
                                                <a href="./lugat/lugat_del.php?CoursID=<?php echo $_GET['CoursID']; ?>&id=<?php echo $row1['id']; ?>">
                                                    <i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php 
                                                $i++; 
                                            }
                                            if($i===1){
                                                echo "<tr><td colspan='6' class='text-center'>Lug'atlar mavjud emas.</td></tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
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