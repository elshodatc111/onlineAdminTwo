<?php
    include_once("./config/config.php");
    $sqlCour = "SELECT * FROM `cours_eye` WHERE `CoursID`='".$_GET['CoursID']."'";
    $resCour = $conn->query($sqlCour);
    $rowCour = $resCour->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurs</title>
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
                                <div class="card">
                                    <div class="card-content">
                                        <img src="./assets/img/cours/<?php echo $rowCour['CoursImage']; ?>" class="card-img-top img-fluid" style="max-height:250px;" alt="singleminded">
                                        <div class="card-body py-2">
                                            <h4 class="card-title m-0 p-0 w-100 text-center"><?php echo $rowCour['CoursName']; ?></h4>
                                        </div>
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Kurs narxi: </b><?php echo number_format(($rowCour['CoursSumma']), 0, '.', ' '); ?> so'm</li>
                                            <li class="list-group-item"><b>Mavzular soni: </b> <?php echo $rowCour['MavzuCount']; ?></li>
                                            <li class="list-group-item"><b>Davomiyligi: </b> <?php echo $rowCour['CoursLine']; ?></li>
                                            <li class="list-group-item"><b>Til: </b> <?php echo $rowCour['Til']; ?></li>
                                            <li class="list-group-item"><b>Daraja: </b> <?php echo $rowCour['Daraja']; ?></li>
                                            <li class="list-group-item"><b>O'qituvchi: </b> <?php echo $rowCour['Oqituvchi']; ?></li>
                                            <li class="list-group-item"><b>Davomiyligi: </b> <?php echo $rowCour['Davomiylig']; ?></li>
                                            <li class="list-group-item text-center">
                                                <!-- Ro'yhatdan o'tgan bo'lsa -->
                                                <div style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                                    <?php
                                                        $UserID = $_COOKIE['UserID'];
                                                        $dates = date("Y-m-d");
                                                        $sqlss = "SELECT * FROM `user_cours` WHERE `UserID`='".$UserID."' AND `Start`<='".$dates."' AND `End`>='".$dates."' AND `CoursID`='".$_GET['CoursID']."'";
                                                        $resss = $conn->query($sqlss);
                                                        $cont = 0;
                                                        $Start=date("Y-m-d");
                                                        $End=date('Y-m-d', strtotime('+'.$rowCour['Davomiylig'].' day'));
                                                        while($rowt = $resss->fetch()){
                                                            $cont = $cont + 1;
                                                        }
                                                        if($cont>0){
                                                            echo "<a href='users/kurs_eye.php?CoursID=".$_GET['CoursID']."' class='btn btn-success'>Darslarni boshlash</a><br>";
                                                        }else{?>
                                                            <div class="w-100">
                                                                <h6 >Kursni sotib olish uchun bog'laning!!!</h6>
                                                                <ul style="list-style:none;font-weight:700;text-align:left">
                                                                    <li>
                                                                        <a href="phone:+998919501101" style='cursor:pointer' class="text-info m-0 p-0">
                                                                            <p class="m-0 p-0">
                                                                                <i class="bi bi-phone text-success"> 91 950 1101 </i>
                                                                            </p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="https://t.me/atko_teams" class="text-info m-0 p-0" >
                                                                            <p class="m-0 p-0">
                                                                                <i class="bi bi-telegram text-success"> t.me/atko_teams</i>
                                                                            </p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php } ?>
                                                    
                                                </div>
                                                <!-- Ro'yhatdan o'tmagan bo'lsa -->
                                                <div style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                                    <a href="./log01.php" class='btn btn-success' style="">Sotib olish</a><br>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body p-2">
                                            <video controls style="width:100%;" controlsList="nodownload">
                                                <source src="./assets/video/<?php echo $rowCour['Video']; ?>" type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">
                                                <?php echo $rowCour['Text']; ?>
                                            </p>
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Kurs mavzulari</button></h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <table class="table">
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Mavzular</th>
                                                                    <th style="text-align:right;">Davomiyligi</th>
                                                                </tr>
                                                                <?php
                                                                    $sqlm = "SELECT * FROM `cours_mavzu` WHERE `CoursID`='".$_GET['CoursID']."' ORDER BY `Numbers` ASC";
                                                                    $resm = $conn->query($sqlm);
                                                                    $i=1;
                                                                    while ($rowm=$resm->fetch()) {
                                                                        echo "<tr>
                                                                            <td>".$i."</td>
                                                                            <td>".$rowm['MavzuName']."</td>
                                                                            <td style='text-align:right;'>".$rowm['TimeLine']."</td>
                                                                        </tr>";
                                                                        $i++;
                                                                    }
                                                                ?>
                                                            </table>    
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <img src="./assets/img/cours/<?php echo $rowCours['CoursImage']; ?>" class="card-img-top img-fluid" style='max-height:300px;width:100%'>
                                        <div class="card-body">
                                            <h5 class="card-title p-0 m-0"><?php echo $rowCours['CoursName']; ?></h5>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between p-0 m-0 py-1 px-3">
                                            <h3 class="pt-1 text-danger"><?php echo number_format(($rowCours['CoursSumma']), 0, '.', ' '); ?> so'm</h3>
                                            <a href="./cours_eye.php?CoursID=<?php echo $rowCours['CoursID']; ?>">
                                                <button class="btn btn-light-primary">Kurs haqida</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
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
</body>
</html>