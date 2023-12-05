<?php
    include_once("./config/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirish</title>
    <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/iconly.css">
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <?php include("./blog/header.php"); ?>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li class="menu-item ">
                                <a href="index.php" class='menu-link'><span> Bosh sahifa</span></a>
                            </li>
                            <li class="menu-item active">
                                <a href="./cours.php" class='menu-link'><span> Kurslar</span></a>
                            </li>
                            <li class="menu-item " style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                <a href="./users/kurslar.php" class='menu-link'><span> Kurslarim</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="./contact.php" class='menu-link'><span> Bog'lanish</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="./help.php" class='menu-link'><span> Yordam</span></a>
                            </li>
                            <li class="menu-item" style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                <a href="log01.php" class='menu-link'><span> Kirish</span></a>
                            </li>
                            <li class="menu-item" style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                <a href="./reg01.php" class='menu-link'><span> Ro'yhatdan o'tish</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <div class="content-wrapper container">
                <div class="page-content">
                    <section class="row">
                        <!-- Yangi kurslar -->
                        <div class="row my-3 mb-5">
                            <div class="col-lg-4">
                                <?php if(isset($_COOKIE['code'])){
                                    echo $_COOKIE['code'];
                                } ?>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h4 class="mb-3">Ro'yhatdan o'tish</h4>
                                        <form action="./registr1.php" style="<?php if(isset($_GET['tasdiq'])){echo 'display:none;';} ?>" method="POST">
                                            <p class="mb-1 text-center text-danger" style="display:<?php if(!isset($_GET['phone'])){echo 'none;';} ?>">Telefon raqam ro'yhatdan o'tgan</p>
                                            <p class="mb-1 text-center text-danger" style="display:<?php if(!isset($_GET['tasdiqerror'])){echo 'none;';} ?>">Tasdiqlash kodi vaqti tugadi. Qaytadan urinib ko'ring.</p>
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <input type="text" class="form-control form-control-xl" name="FIO" placeholder="Ismingiz" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <input type="text" class="form-control form-control-xl phone" name="Phone" placeholder="9X XXX XXX" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-1" type="submit" name='registir'>Ro'yhatdan o'tish</button>
                                        </form>
                                        <!-- Tasdiqlash kodi -->
                                        <form action="./registr1.php" method="POST" style="<?php if(!isset($_GET['tasdiq'])){echo 'display:none;';} ?>">
                                            <p class="text-success mb-3 text-center" style="display:<?php if(isset($_GET['code'])){echo "none;";} ?>">Tasdiqlash kodi <?php if(isset($_COOKIE['Phone'])){echo $_COOKIE['Phone'];} ?> raqamiga yuborildi. Tasdiqlash kodini kiriting.</p>
                                            <p class="text-danger mb-3 text-center" style="display:<?php if(!isset($_GET['code'])){echo "none;";} ?>">Tasdiqlash kodi noto'g'ri qaytadan kiriting.</p>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control form-control-xl kodes" name="TasdiqKodi" placeholder="Tasdiqlash kodi" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-code"></i>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-1" name="Tasdiqlash">Kodni tasdiqlash</button>
                                        </form>
                                        <p class="text-gray-600 mt-3"><a href="./log01.php" class="font-bold">Kirish</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!--Footer-->
            <?php include("./blog/footer.php"); ?>
        </div>
    </div>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/static/js/pages/horizontal-layout.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script>
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/static/js/pages/dashboard.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./assets/js/jquery.inputmask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.phone').inputmask('99 999 9999');
            $('.pasport').inputmask('AA 9999999');
            $('.pnfl').inputmask('99999999999999');
            $('.kodes').inputmask('9 9 9 9 9 9');
        });
    </script>
</body>
</html>