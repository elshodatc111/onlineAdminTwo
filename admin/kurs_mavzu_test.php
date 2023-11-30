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
        <title>Kurs mavzu haqida</title>
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
                <h3>Kurs mavzusi</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Bosh sahifa</a></li>
                        <li class="breadcrumb-item"><a href="./kurslar.php">Kurslar</a></li>
                        <li class="breadcrumb-item"><a href="./kurs_eye.php">Kurs</a></li>
                        <li class="breadcrumb-item"><a href="./kurs_mavzu_eye.php">Mavzu</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Test</li>
                    </ol>
                </nav>
                <!-- Test TAXRIRLASH -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kursedit">Testni taxrirlash</button>
                <div class="modal fade text-left" id="kursedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title white" id="myModalLabel160">Kursni taxrirlash</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <i data-feather="x"></i></button>
                            </div>
                            <form>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="mt-3" style="font-weight:700;">Test turi</label>
                                            <select class="form-control" required>
                                                <option value="">Tanlang</option>
                                                <option value="tanlang">To'g'ri javobni tanlash</option>
                                                <option value="insert">To'g'ri javobni kiritish</option>
                                                <option value="javoblar">To'g'ri javoblarni tanlash</option>
                                            </select>
                                            <label class="mt-3" style="font-weight:700;">Test savoli</label>
                                            <input type="text" class="form-control" placeholder="Test savoli" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Bekor qilish</span></button>
                                    <button type="submit" class="btn btn-primary ms-1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">O'zgarishlarni saqlash</span></button>
                                </div>
                            <form>
                        </div>
                    </div>
                </div>
                <!-- JAVOB KIRITISH -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoedit">Yangi javob kiritish</button>
                <div class="modal fade text-left" id="videoedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title white" id="myModalLabel160">Videoni taxrirlash</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <i data-feather="x"></i></button>
                            </div>
                            <form>
                                <div class="modal-body">
                                    <label class="mt-3" style="font-weight:700;">Test javobi</label>
                                    <select class="form-control" required>
                                        <option value="">Tanlang</option>
                                        <option value="tanlang">To'g'ri</option>
                                        <option value="insert">Noto'g'ri</option>
                                    </select>
                                    <label class="mt-3" style="font-weight:700;">Test Javobi</label>
                                    <input type="text" class="form-control" placeholder="Test javobi" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Bekor qilish</span></button>
                                    <button type="submit" class="btn btn-primary ms-1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Javobni saqlash</span></button>
                                </div>
                            <form>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-danger">Testni o'chirish</a>
            </div> 
            <!-- Kurs haqida -->
            <section class="row">
                <div class="row my-3 mb-5">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body py-2">
                                <h4 class="card-title m-0 p-0 w-100 text-center">Test Savoli</h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive p-2 pt-5">
                            <h5 class="w-100 text-center">Test javoblari</h5>
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Javob</th>
                                        <th>Javob turi</th>
                                        <th class='text-center'>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Remote</td>
                                        <td>Remote</td>
                                        <td class='text-center'>
                                            <a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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