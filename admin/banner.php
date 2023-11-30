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
        <title>Bannerlar</title>
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
                        <li class="sidebar-item active">
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
            <div class="page-heading">
                <h3>Bannerlar</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Bosh sahifa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bannerlar</li>
                    </ol>
                </nav>
            </div> 
            <div class="page-content row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title w-100 text-center">Yangi banner qo'shish</h4>
                                <form action="./banner/banner_plus.php" enctype="multipart/form-data" method="POST">
                                    <label class='mt-2 mb-1'>H1 Text</label>
                                    <input type="text" name="H1" class="form-control" required>
                                    <label class='mt-2 mb-1'>P Text</label>
                                    <input type="text" name="P" class="form-control" required>
                                    <label class='mt-2 mb-1'>Image (1280X720px JPG)</label>
                                    <input type="file" name="fileToUpload" class="form-control" required>
                                    <button class='btn btn-warning w-100 mt-3'>Bannerni qo'shish</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    $sql="SELECT * FROM `banner`";
                    $res = $conn->query($sql);
                    while ($row = $res->fetch()) {
                ?>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <img class="img-fluid w-100" src="../assets/img/banner/<?php echo $row['Image']; ?>">
                                <h4 class="card-title"><?php echo $row['H1']; ?></h4>
                                <p class="card-text"><?php echo $row['P']; ?></p>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="./banner_text_edet.php?id=<?php echo $row['id']; ?>" class="btn btn-light-info"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="edit"></i>Matn</a>
                            <a href="./banner_img_edet.php?id=<?php echo $row['id']; ?>" class="btn btn-light-primary"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="edit"></i>Rasm</a>
                            <a href="./banner/banner_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-light-danger"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="trash"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <script src="../assets/static/js/components/dark.js"></script>
    <script src="../assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/compiled/js/app.js"></script>
    <script src="../assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/static/js/pages/dashboard.js"></script>
</body>
</html>