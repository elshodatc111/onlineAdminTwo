
<!DOCTYPE html>
<html lang="en">
    <?php
        include_once("./config/config.php");
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bog'lanish</title>
    <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/iconly.css">
    <script>
        if(isset($_GET['send'])){
            echo "alert('Murojatingiz qabul qilindi. Tez orada siz bilan boglanamiz.');";
        }
    </script>
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
                            <li class="menu-item ">
                                <a href="./cours.php" class='menu-link'><span> Kurslar</span></a>
                            </li>
                            <li class="menu-item " style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                <a href="./users/kurslar.php" class='menu-link'><span> Kurslarim</span></a>
                            </li>
                            <li class="menu-item active">
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
                        <div class="page-title text-center">
                            <h3>Bog'lanish</h3>
                            <p class="text-subtitle text-muted">Savollaringiz bo'lsa biz bilan bo'g'laning.</p>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" style="height:340px;">
                                <div class="card-header">
                                    <h4 class="card-title m-0">Bog'lanish</h4>
                                </div>
                                <div class="card-content py-0">
                                    <div class="card-body pt-0">
                                        <p class="card-text m-1">
                                            <i class="bi bi-phone text-info" style='font-size:24px'></i> +998 91 950 1101
                                        </p>
                                        <p class="card-text m-1">
                                            <i class="bi bi-envelope text-primary" style='font-size:18px'></i> atkoteams@gmail.com
                                        </p>
                                        <p class="card-text m-1">
                                            <i class="bi bi-align-center text-danger" style='font-size:22px'></i> Qarshi shaxar, Mustaqillik shox ko'chasi 2-uy
                                        </p>
                                        <br><br>
                                        <h4 class="card-title m-0">Ijtimoiy tarmoqda</h4><br>
                                        <small class="text-dark text-center w-100 p-0 m-0" style="font-size:24px">
                                            <a href="https://t.me/atko_teams" class=" text-white">
                                                <i class="bi bi-telegram text-primary"></i>
                                            </a>
                                            <a href="https://instagram.com/atko_teams?igshid=OGQ5ZDc2ODk2ZA==" class=" text-white">
                                                <i class="bi bi-instagram text-danger"></i>
                                            </a>
                                            <a href="https://www.facebook.com/atkoteams/" class=" text-white">
                                                <i class="bi bi-facebook text-info"></i>
                                            </a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" style="height:340px;">
                                <div class="card-header">
                                    <h4 class="card-title m-0">Biz bilan bog'laning.</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body py-0">
                                        <form class="form form-horizontal m-0 p-0" action="./bot.php" method="post">
                                            <div class="form-body">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Ismingiz" name="Ism" id="first-name-horizontal-icon" required>
                                                        <div class="form-control-icon"><i class="bi bi-person"></i></div>
                                                    </div>
                                                </div>
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                                        <div class="form-control-icon"><i class="bi bi-envelope"></i></div>
                                                    </div>
                                                </div>
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control phone" placeholder="Telefon raqam" name="phone" id="contact-info-horizontal-icon">
                                                        <div class="form-control-icon"><i class="bi bi-phone"></i></div>
                                                    </div>
                                                </div>
                                                <div class="form-group has-icon-left">
                                                    <textarea class="form-control p-1" name="text" required></textarea>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Yuborish</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="card-body">
                                <div class="googlemaps">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d776.9433489873635!2d65.79316163656479!3d38.83765019846608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4ea957f326d9a5%3A0x3d028f90ab8f3695!2sATKO!5e0!3m2!1sen!2s!4v1700739700747!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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