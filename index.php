<?php
    include_once("./config/config.php");
    if(isset($_GET['chiqish'])){
        setcookie("UserID", "", time()-6*3600);
        header("location: index.php");
    }elseif(isset($_GET['chiqish'])){
        setcookie("code", "", time()-6*3600);
        setcookie("FIO", "", time()-6*3600);
        setcookie("Phone", "", time()-6*3600);
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta name="description" content="ATKO koreys til markazi. Ilm orqali insonlar hayotini yaxshilash, hayotda o'z yo'llarini topishga yordam berish. Eng sifatli bilim beradigan proffessional jamoaga ega Butun O'zbekistonga ilm ulashayotgan kompaniya. Oliy maqsadimiz: Samimiylik, Ilm olish, Jamoaviylik, Intizom, Natijaviylik, Tel: 91 950 11 01, Email: atkoteams@gmail.com">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="keywords" content="ATKO, Til markazi, Koreys tili, Ingliz tili, Koreys tili markazi, Online, Online Kurslar, Kores tili online, markaz, O'quv markaz, Qarshi, Qarshi shahar, Yangiliklar">
        <meta name="author" content="Elshod Musurmonov">
        <link href="./assets/img/logo.png" rel="icon">
        <link href="./assets/img/logo.png" rel="apple-touch-icon">
        <meta name="google-site-verification" content="ordmO-3dRMj58qqryMoTMOTo5o0PJbUMVSM2WWGSSEk" /><meta property="og:title" content="Atko.uz ATKO o'quv markazi">
         <meta property="og:description" content="Ilm orqali insonlar hayotini yaxshilash, hayotda o'z yo'llarini topishga yordam berish. Eng sifatli bilim beradigan proffessional jamoaga ega Butun O'zbekistonga ilm ulashayotgan kompaniya.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://atko.uz">
        <meta property="og:site_name" content="atko.uz">
        <meta property="og:image" content="./assets/img/logo.png"/>
        <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">
        <title>ATKO o'quv markazi</title>
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
                            <li class="menu-item active">
                                <a href="index.php" class='menu-link'><span> Bosh sahifa</span></a>
                            </li>
                            <li class="menu-item">
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
            <!-- Main -->
            <div class="content-wrapper container">
                <div class="page-content">
                    <!-- Banner -->
                    <div class="card">
                        <div class="card-body">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carouselfade">
                                <div class="carousel-inner">
                                    <?php
                                        $sqlb = "SELECT * FROM `banner`";
                                        $resb = $conn->query($sqlb);
                                        $i=1;
                                        while ($rowb = $resb->fetch()) {
                                    ?>
                                    <div class="carousel-item <?php if($i===1){ echo "active"; } ?>">
                                        <img src="./assets/img/banner/<?php echo $rowb['Image']; ?>" class="d-block w-100" style="max-height: 500px;" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h1 class="text-danger py-2" style="font-size:45px;font-weight:900"><?php echo $rowb['H1']; ?></h1>
                                            <p class="text-success bg-danger text-white "><?php echo $rowb['P']; ?></p>
                                        </div>
                                    </div>
                                    <?php $i++; } ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a>
                                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
                            </div>
                        </div>
                    </div>
                    <section class="row">
                        <!-- Yangi kurslar -->
                        <div class="page-title text-center">
                            <h3>Yangi kurslar</h3>
                            <p class="text-subtitle text-muted">Eng yangi qo'shilgan video kurslar</p>
                        </div>
                        <div class="row">
                            <?php
                                $sqlCours = "SELECT * FROM `cours_eye` ORDER BY `id` DESC LIMIT 3";
                                $resCours = $conn->query($sqlCours);
                                while ($rowCours = $resCours->fetch()) {
                            ?>
                            <div class="col-lg-4">
                                <div class="card" style="min-height:310px;">
                                    <img src="./assets/img/cours/<?php echo $rowCours['CoursImage']; ?>" class="card-img-top img-fluid" style='max-height:250px;width:100%;border:1px solid red;'>
                                    <div class="card-body">
                                        <h5 class="card-title p-0 m-0"><?php echo $rowCours['CoursName']; ?></h5>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between p-0 m-0 py-1 px-3">
                                        <h3 class="pt-1 text-danger"><?php echo number_format(($rowCours['CoursSumma']), 0, '.', ' '); ?> so'm</h3>
                                        <a href="./cours_eye.php?CoursID=<?php echo $rowCours['CoursID']; ?>">
                                            <button class="btn btn-primary">Kurs haqida</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="page-title text-center mb-5">
                            <a href="./cours.php">
                                <button class="btn btn-primary">Barcha kurslar</button>
                            </a>
                        </div>
                        <!-- Xarita -->
                        <div>
                            <div class="card-header text-center">
                                <h3 class="card-title">Bizning manzilimiz</h3>
                                <p class="text-subtitle text-muted">Qarshi shahri, Mustaqillik shox ko'chasi 2-uy</p>
                            </div>
                            <section class="section">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="googlemaps">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d776.9433489873635!2d65.79316163656479!3d38.83765019846608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4ea957f326d9a5%3A0x3d028f90ab8f3695!2sATKO!5e0!3m2!1sen!2s!4v1700739700747!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </section>
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
</body>
</html>