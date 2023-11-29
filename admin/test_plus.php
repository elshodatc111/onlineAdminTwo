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
                        <li class="breadcrumb-item"><a href="./kurs_mavzu_eye.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>">Mavzu</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Yangi test qo'shish</li>
                    </ol>
                </nav>
                
            </div> 
            <section class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body text-center"  style="min-height:340px;">
                            <h5>Yangi test qo'shish</h5>
                            <form action="">
                                <label class="mt-3">Test turini tablang</label>
                                <select name="" class="form-select mt-2" required>
                                    <option value="ddd">tanlang</option>
                                </select>
                                <label class="mt-3">Test savlolini kiriting</label>
                                <input type="text" class="form-control mt-2" required>
                                <button type="submit" class="btn btn-primary w-100 mt-4">Testni saqlash</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body text-center" style="min-height:340px;">
                            <h5>Yangi javobini kiritish</h5>
                            <form action="">
                                <label class="mt-1">Test savolini tablang</label>
                                <select name="" class="form-select mt-1" required>
                                    <option value="aaa">tanlang</option>
                                </select>
                                <label class="mt-1">Test holatini tablang</label>
                                <select name="" class="form-select mt-1" required>
                                    <option value="aaaa">tanlang</option>
                                </select>
                                <label class="mt-1">Test javobini kiriting</label>
                                <input type="text" class="form-control mt-1" required>
                                <button type="submit" class="btn btn-primary w-100 mt-2">Javobni saqlash</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="w-100 text-center">Mavzuga oid testlar</h5>
                            <table class="table text-center">
                                <thaed>
                                    <tr>
                                        <th>#</th>
                                        <th>Tast savoli</th>
                                        <th>Test Javoblari</th>
                                        <th>Testni o'chirish</th>
                                    </tr>
                                </thaed>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Test savoli</td>
                                        <td>
                                            <ol class="p-0 m-0">
                                                <li><p class="text-success my-1 p-0">to'g'ri <a href=""><i data-feather="trash"></i></p> </li>
                                                <li><p class="text-danger my-1 p-0">Noto'g'ri <a href=""><i data-feather="trash"></i></a></p> </li>
                                            </ol>
                                        </td>
                                        <td><a href=""><i data-feather="trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Test savoli</td>
                                        <td>
                                            <ol class="p-0 m-0">
                                                <li><p class="text-success my-1 p-0">to'g'ri <a href=""><i data-feather="trash"></i></p> </li>
                                                <li><p class="text-danger my-1 p-0">Noto'g'ri <a href=""><i data-feather="trash"></i></a></p> </li>
                                            </ol>
                                        </td>
                                        <td><a href=""><i data-feather="trash"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
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