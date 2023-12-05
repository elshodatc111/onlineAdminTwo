<?php
    include_once("./config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurslar</title>
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
                            <li class="menu-item"  style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                <a href="log01.php" class='menu-link'><span> Kirish</span></a>
                            </li>
                            <li class="menu-item"  style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
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
                            <h3>Barcha kurslar</h3>
                            <p class="text-subtitle text-muted">Eng yangi video kurslar</p>
                        </div>
                        <div class="row">
                            <?php
                                $sqlCours = "SELECT * FROM `cours_eye` ORDER BY `id` DESC";
                                $resCours = $conn->query($sqlCours);
                                while ($rowCours = $resCours->fetch()) {
                            ?>
                            <div class="col-lg-4">
                                <div class="card" style="min-height:360px;">
                                    <div class="card-content">
                                        <img src="./assets/img/cours/<?php echo $rowCours['CoursImage']; ?>" class="card-img-top img-fluid"  style='max-height:300px;width:100%'>
                                        <div class="card-body">
                                            <h5 class="card-title p-0 m-0"><?php echo $rowCours['CoursName']; ?></h5>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between p-0 m-0 py-1 px-3">
                                            
                                            <?php
                                                echo "<h3 class='pt-1 text-danger'> ".number_format(($rowCours['CoursSumma']), 0, '.', ' ')." so'm</h3>";
                                                echo "<a href='./cours_eye.php?CoursID=".$rowCours['CoursID']."'>
                                                    <button class='btn btn-light-primary'>Kurs haqida</button>
                                                </a>";
                                            ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            
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