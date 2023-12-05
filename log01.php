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
                                <?php
                                    if(isset($_COOKIE['code'])){
                                        echo $_COOKIE['code'];
                                    }
                                ?>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <form action="login2.php" method="POST" class="pt-4" style="display:<?php if(isset($_GET['sendmessege'])){ echo "none;";} ?>">
                                            <h4 class="mb-4">Kirish</h4>
                                            <p class="text-danger mb-3 text-center" style="display:<?php if(!isset($_GET['phone1'])){echo 'none;';} ?>">Telefon raqam ro'yhatdan o'tmagan. Tizimga kirish uchun oldin ro'yhatdan o'ting</p>
                                            <label style="text-align:left;width:100%">Telefon raqam</label>
                                            <input type="text" placeholder="90 123 45 67"  name="Phones" class="form-control mt-2 phone" required>
                                            <button class="btn btn-primary w-100 mt-3"  name="Phone">Kirish</button>
                                        </form>
                                        <form action="login2.php?Phone=<?php if(isset($_GET['Phone'])){echo $_GET['Phone'];} ?>" class="pt-3" style="display:
                                            <?php if(isset($_GET['phone1'])){echo 'none;';}
                                            elseif(isset($_GET['sendmessege'])){echo 'block;';}
                                            else{echo 'none;';} ?>" method="POST">
                                                <p class="text-success mb-3 text-center" style="display:<?php if(isset($_GET['codeerror'])){echo 'none;';} ?>">Tasdiqlash kodi 
                                                    <?php if(isset($_GET['sendmessege'])){echo $_GET['Phone'];} ?> 
                                                    raqamiga yuborildi. Tasdiqlash kodini kiriting.</p>
                                                <p class="text-danger mb-1 text-center" style="display:<?php if(!isset($_GET['codeerror'])){echo 'none';} ?>;">Tasdiqlash kodi noto'g'ri</p>
                                                <div class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control form-control-xl kodes" name="tasdiqkodi" placeholder="Tasdiqlash kodi" required>
                                                    <div class="form-control-icon pt-0">
                                                        <i class="bi bi-code"></i>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-1" name="tasdiqlash">Kodni tasdiqlash</button>
                                        </form>
                                        <p class="text-gray-600 mt-3"><a href="./reg01.php" class="font-bold">Ro'yhatdan o'tish</a>.</p>

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