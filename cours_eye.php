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
    <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/iconly.css">
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="index.php"><h1 class="py-0 my-0 text-danger">ATKO</h1></a>
                        </div>
                        <div class="header-top-right">
                            <div class="dropdown" style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2" >
                                        <img src="./assets/compiled/jpg/1.jpg" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">Elshod Musurmonov</h6>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                                  <li><a class="dropdown-item" href="./users/kurslar.php">Kurslarim</a></li>
                                  <li><a class="dropdown-item" href="./users/cobinet.php">Kabinet</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="./login.php">Chiqish</a></li>
                                </ul>
                            </div>
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
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
                                <a href="login.php" class='menu-link'><span> Kirish</span></a>
                            </li>
                            <li class="menu-item" style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                <a href="./registr.php" class='menu-link'><span> Ro'yhatdan o'tish</span></a>
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
                                            <li class="list-group-item"><b>Kurs narxi: </b> <?php echo $rowCour['CoursSumma']; ?> so'm</li>
                                            <li class="list-group-item"><b>Mavzular soni: </b> <?php echo $rowCour['MavzuCount']; ?></li>
                                            <li class="list-group-item"><b>Davomiyligi: </b> <?php echo $rowCour['CoursLine']; ?></li>
                                            <li class="list-group-item"><b>Til: </b> <?php echo $rowCour['Til']; ?></li>
                                            <li class="list-group-item"><b>Daraja: </b> <?php echo $rowCour['Daraja']; ?></li>
                                            <li class="list-group-item"><b>O'qituvchi: </b> <?php echo $rowCour['Oqituvchi']; ?></li>
                                            <li class="list-group-item"><b>Davomiyligi: </b> <?php echo $rowCour['Davomiylig']; ?></li>
                                            <li class="list-group-item text-center">
                                                <i class='text-success'>Kursni sotib olish uchun oldin ro'yhatdan o'ting</i><br>
                                                <button class="btn btn-success">Sotib olish</button>
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
                                                                    <th>Vaqt</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>1- mavzu haqida</td>
                                                                    <td>00:00:00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>1- mavzu haqida</td>
                                                                    <td>00:00:00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>1- mavzu haqida</td>
                                                                    <td>00:00:00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>1- mavzu haqida</td>
                                                                    <td>00:00:00</td>
                                                                </tr>
                                                            </table>    
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </section>
                </div>
            </div>
            <!--Footer-->
            <div class="container-fluid bg-primary text-white p-5">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <h4 class="card-title">Ijtimoiy tarmoqda</h4><br>
                        <small class=" text-center w-100 pt-5" style="font-size:18px">
                            <a href="" class="mx-1 text-white"><i class="bi bi-telegram"></i></a>
                            <a href="" class="mx-1 text-white"><i class="bi bi-instagram"></i></a>
                            <a href="" class="mx-1 text-white"><i class="bi bi-facebook"></i></a>
                        </small>
                    </div>
                    <div class="col-lg-3 col-6">
                        <h4 class="card-title">Bo'limlar</h4><br>
                        <ul>
                            <li><a href="./cours.php" class="text-white">Kurslar</a></li>
                            <li><a href="./contact.php" class="text-white">Bog'lanish</a></li>
                            <li><a href="./help.php" class="text-white">Yordam</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-6">
                        <h4 class="card-title">Qo'llab quvvatlash</h4><br>
                        <ul>
                            <li style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>"><a href="./login.php" class="text-white">Kirish</a></li>
                            <li style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>"><a href="./registr.php" class="text-white">Ro'yhatdan o'tish</a></li>
                            <li style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>"><a href="./users/kurslar.php" class="text-white">Kurslarim</a></li>
                            <li style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>"><a href="./users/cobinet.php" class="text-white">Kabinet</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-6">
                        <h4 class="card-title">Bog'lanish</h4><br>
                        <p class="card-text m-0">
                            <i class="bi bi-phone"></i> +998 90 883 0450</p>
                        <p class="card-text m-0">
                            <i class="bi bi-envelope"></i> elshodatc1116@gmail.com</p>
                        <p class="card-text m-0">
                            <i class="bi bi-align-center"></i> Qarshi shaxar, Mustaqillik<br>shox ko'chasi 2-uy</p>
                        
                    </div>
                </div>
            </div>
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