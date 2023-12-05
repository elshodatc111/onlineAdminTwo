<?php include("../config/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kabinet</title>
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/compiled/css/app.css">
    <link rel="stylesheet" href="../assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="../assets/compiled/css/iconly.css">
    <script>
        <?php
            if(isset($_GET['error'])){
        ?>
        alert('<?php echo $_GET['error'] ?>');
        <?php } ?>
    </script>
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
                            <li class="menu-item" style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kabinet</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="images w-100 text-center">
                                    <img src="../assets/img/avatar/<?php echo $rowaa['Image']; ?>" style='border-radius:50%;width:128px;'>
                                    <h4 class="mt-2"><?php echo $rowaa['FIO']; ?></h4>
                                </div>
                                <hr>
                                <div class="form px-3 text-center">
                                    <h6>Profil rasmini yanfilash</h6>
                                    <form action="./edet/image_edet.php" class="mx-5 px-5" enctype="multipart/form-data" method="POST">
                                        <label for="formFile" class="form-label">Rasm .jpg yoki .png formatda bo'lsin.</label>
                                        <div class="input-group mb-3">
                                            <input type="file" name="fileToUpload" class="form-control" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" name="submit" type="submit">Saqlash</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form action="./edet/user_edit.php" method="POST">
                                    <div class="form-group">
                                        <label>Ismingiz</label>
                                        <input type="text" name="FIO" value="<?php echo $rowaa['FIO']; ?>" class="form-control" onclick="document.getElementById('buttons').style.display='block'" id="basicInput" placeholder="Ismingiz" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="Email" value="<?php echo $rowaa['Email']; ?>" class="form-control" onclick="document.getElementById('buttons').style.display='block'" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Yashash manzilingiz</label>
                                        <input type="text" name="Addres" value="<?php echo $rowaa['Addres']; ?>" class="form-control" onclick="document.getElementById('buttons').style.display='block'" placeholder="Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Telefon raqam</label>
                                        <input type="text" class="form-control"  value="<?php echo $rowaa['Phone']; ?>" disabled>
                                    </div>
                                    <div class="form-group w-100 text-center" id="buttons" style="display:none;">
                                        <button class="btn btn-outline-secondary" type="submit">O'zgarishlarni saqlash</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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