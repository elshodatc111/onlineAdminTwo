<?php
    include("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurslarim</title>
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/compiled/css/app.css">
    <link rel="stylesheet" href="../assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="../assets/compiled/css/iconly.css">
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <?php include("../blog/header_user.php"); ?>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li class="menu-item ">
                                <a href="../index.php" class='menu-link'><span> Bosh sahifa</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="../cours.php" class='menu-link'><span> Kurslar</span></a>
                            </li>
                            <li class="menu-item active" style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                <a href="./kurslar.php" class='menu-link'><span> Kurslarim</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="../contact.php" class='menu-link'><span> Bog'lanish</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="../help.php" class='menu-link'><span> Yordam</span></a>
                            </li>
                            <li class="menu-item" style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                <a href="../log01.php" class='menu-link'><span> Kirish</span></a>
                            </li>
                            <li class="menu-item" style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                <a href="../reg01.php" class='menu-link'><span> Ro'yhatdan o'tish</span></a>
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
                            <h3>Mening kurslar</h3>
                            <p class="text-subtitle text-muted">Siz xarid qilgan kurslaringiz.</p>
                        </div>
                        <div class="row">
                            <?php
                                $sqlC = "SELECT cours_eye.CoursName, cours_eye.CoursID, cours_eye.CoursImage, user_cours.End FROM `user_cours` JOIN `cours_eye` ON user_cours.CoursID=cours_eye.CoursID WHERE `UserID`='".$_COOKIE['UserID']."' AND user_cours.Start<='".date("Y-m-d")."' AND user_cours.End>='".date("Y-m-d")."'";
                                $resC = $conn->query($sqlC);
                                $i=0;
                                while ($row = $resC->fetch()) {
                                    echo "<div class='col-lg-4'>
                                        <div class='card' style=''>
                                            <div class='card-content p-0'>
                                                <img src='../assets/img/cours/".$row['CoursImage']."' class='card-img-top img-fluid'  style='max-height:300px;width:100%'>
                                                <div class='card-body p-3 m-0'>
                                                    <h5 class='card-title p-0'>".$row['CoursName']."</h5>
                                                </div>
                                                <div class='card-footer d-flex justify-content-between m-0 p-2 px-3'>
                                                    <p class='pt-0 text-danger pt-2'><b>Muddat:</b> ".$row['End']."</p>
                                                    <a href='./kurs_eye.php?CoursID=".$row['CoursID']."'>
                                                        <button class='btn btn-primary'>Boshlash</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                    $i++;
                                }
                                if($i===0){
                                    echo "<div class='col-lg-12'>
                                        <div class='card' style=''>
                                            <div class='card-content p-0'>
                                                <div class='card-body p-3 m-0 text-center pt-4'>
                                                    <h5 class='card-title p-0 text-danger'>Sizning aktiv kurslaringiz mavjud emas.</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                
                            <div class="col-12 mt-5">
                                <div class="row">
                                    <h3 class="mt-5">Sizga yoqishi mumkin bo'lgan aloqador kurslar</h3>
                                <?php
                                    $sqlCours = "SELECT * FROM `cours_eye` ORDER BY RAND() LIMIT 3";
                                    $resCours = $conn->query($sqlCours);
                                    while ($rowCours = $resCours->fetch()) {
                                ?>
                                <div class="col-lg-4">
                                    <div class="card" style="min-height:360px;">
                                        <img src="../assets/img/cours/<?php echo $rowCours['CoursImage']; ?>" class="card-img-top img-fluid" style='max-height:300px;width:100%'>
                                        <div class="card-body">
                                            <h5 class="card-title p-0 m-0"><?php echo $rowCours['CoursName']; ?></h5>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between p-0 m-0 py-1 px-3">
                                            <h3 class="pt-1 text-danger"><?php echo number_format(($rowCours['CoursSumma']), 0, '.', ' '); ?> so'm</h3>
                                            <a href="../cours_eye.php?CoursID=<?php echo $rowCours['CoursID']; ?>">
                                                <button class="btn btn-light-primary">Kurs haqida</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!--Footer-->
            <?php include("../blog/footer_user.php"); ?>
        </div>
    </div>
    <script src="../assets/static/js/components/dark.js"></script>
    <script src="../assets/static/js/pages/horizontal-layout.js"></script>
    <script src="../assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/compiled/js/app.js"></script>
    <script src="../assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/static/js/pages/dashboard.js"></script>
</body>
</html>