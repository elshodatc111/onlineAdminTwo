<!DOCTYPE html>
<?php
    include("../config/config.php");
    if(!isset($_COOKIE['UserID'])){
        header("location: ./login.php");
    }
    $sqls = "SELECT * FROM `admin` WHERE `UserID`='".$_COOKIE['UserID']."'";
    $ress = $conn->query($sqls);
    $rows = $ress->fetch();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kobinet</title>
        <link rel="shortcut icon" href="../assets/compiled/svg/favicon.svg" type="image/x-icon">
        <link rel="stylesheet" href="../assets/compiled/css/app.css">
        <link rel="stylesheet" href="../assets/compiled/css/app-dark.css">
        <link rel="stylesheet" href="../assets/compiled/css/iconly.css">
        <script>
            <?php
                if(isset($_GET['pass2'])){
                    echo "alert('Parol yangilandi.');";
                }elseif(isset($_GET['pass'])){
                    echo "alert('Joriy parol xato.');";
                }
            ?>
        </script>
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
                        <li class="sidebar-item ">
                            <a href="./kurslar.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Kurslar</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./talaba.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Talabalar</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./statistika.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Statistika</span></a>
                        </li>
                        <li class="sidebar-item active">
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
            <div class="page-heading">
                <h3>Kabinet</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Bosh sahifa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kabinet</li>
                    </ol>
                </nav>
            </div> 
            <section class="section row">
                <div class="col-lg-4 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="../assets/img/avatar/<?php echo $rows['Image']; ?>" style="width:180px;">
                                <h4 class="card-title"><?php echo $rows['FIO']; ?></h4>
                                <p class="p-0 m-0">Login: <?php echo $rows['Login']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4>Parolni yangilash</h4>
                                <form action="./users/pass_edit.php" method="POST">
                                    <label class="mt-2" style="font-weight:700;">Joriy parol</label>
                                    <input type="password" class="form-control" placeholder="Joriy parol" name="passw1" required>
                                    <label class="mt-2" style="font-weight:700;">Yangi parol</label>
                                    <input type="password" class="form-control" placeholder="Yangi parol" name="passw2" required>
                                    <button type="submit" class="btn btn-primary ms-1 w-100 mt-4" name="editpassword">
                                        <i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Yangilash</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4>Profil rasmini yangilash</h4>
                                <form action="">
                                    <label class="mt-1 w-100" style="font-weight:700;">Rasm tanlang (O'lchami: 120x120px)</label>
                                    <label class="mt-1 w-100" style="font-weight:700;">(1MBdan oshmasin).</label>
                                    <label class="mt-1 w-100" style="font-weight:700;">(jpg yoki png formatda).</label>
                                    <input type="file" class="form-control mt-3" placeholder="Image" required>
                                    <button class="btn btn-primary w-100 mt-4">
                                        <i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Yangilash</span>
                                    </button>
                                </form>
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
</body>
</html>