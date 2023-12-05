<?php
    include("../config/config.php");
    if(isset($_GET['MavzuID'])){
        $MavzuID = $_GET['MavzuID'];
    }else{
        $sqlM = "SELECT * FROM `cours_mavzu` WHERE `CoursID`='".$_GET['CoursID']."' AND `Numbers`=1";
        $resM = $conn->query($sqlM);
        $rowM = $resM->fetch();
        $MavzuID = $rowM['MavzuID'];
    }
    $sqlA = "SELECT * FROM `cours_mavzu` WHERE `CoursID`='".$_GET['CoursID']."' AND `MavzuID`='".$MavzuID."'";
    $resA = $conn->query($sqlA);
    $rowA = $resA -> fetch();

    $sqlB = "SELECT * FROM `cours_eye` WHERE `CoursID`='".$_GET['CoursID']."'";
    $resB = $conn->query($sqlB);
    $rowB = $resB->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testlar</title>
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
                        <!-- Mavzu videosi -->
                        <div class="row">
                        <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body py-2">
                                            <h4 class="card-title m-0 p-0 w-100 text-center"><?php echo $rowB['CoursName']; ?></h4><hr class='p-0 m-0 mt-1'>
                                        </div>
                                        <table class="table">
                                            <?php
                                                $sqlm = "SELECT * FROM `cours_mavzu` WHERE `CoursID`='".$_GET['CoursID']."' ORDER BY `Numbers` ASC";
                                                $resm = $conn->query($sqlm);
                                                $i=1;
                                                while ($rowm=$resm->fetch()) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                        if($MavzuID===$rowm['MavzuID']){
                                                            echo "<a class='text-danger' href='kurs_eye.php?CoursID=".$_GET['CoursID']."&MavzuID=".$rowm['MavzuID']."'
                                                            style='font-weight:700;padding-left:15px'><b>".$i."</b>. ".$rowm['MavzuName']."</a>";
                                                        }else{
                                                            echo "<a href='kurs_eye.php?CoursID=".$_GET['CoursID']."&MavzuID=".$rowm['MavzuID']."'
                                                            style='font-weight:700;padding-left:15px'><b>".$i."</b>. ".$rowm['MavzuName']."</a>";
                                                        }
                                                    ?>
                                                </td>
                                                <td style='text-align:right;'><i style='padding-right:15px;'><?php echo $rowm['TimeLine']; ?></i> </td>
                                            </tr>
                                            <?php $i++; }?>
                                            <tr>
                                                <td colspan='2'>
                                                    <a href="./lugat.php?CoursID=<?php echo $_GET['CoursID']; ?>" class='btn btn-info text-white w-100'>Lug'atlar</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body p-2">
                                            <h4 class="card-title m-0 p-0 w-100 text-center"><?php echo $rowA['MavzuName']; ?> mavzuga oid testlar</h4><hr class='p-0 m-0 mt-1'>
                                            
                                        </div>
                                        <div class="card-body">
                                            <?php
                                                $sql = "SELECT * FROM `cours_test` WHERE `CoursID`='".$_GET['CoursID']."' AND `MavzuID`='".$_GET['MavzuID']."'";
                                                $res = $conn->query($sql);
                                                $i=1;
                                                while ($row = $res->fetch()) {
                                                    if($row['Type']==='tanlang'){
                                            ?>
                                                <!-- birini tanlash -->
                                                <nav class='py-3' style='border-bottom:0.5px solid #607080;'>
                                                    <form action="./test/test_tanlash.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>&TestID=<?php echo $row['TestID']; ?>" method="POST">
                                                        <h6><?php echo $i.". ".$row['Savol']; ?></h6>
                                                        <i class='text-danger'>To'g'ri javobni tanlang</i>
                                                        <?php
                                                            $sqltanlang = "SELECT * FROM `cours_test_javob` WHERE `TestID`='".$row['TestID']."' order by rand()";
                                                            $restanlang = $conn->query($sqltanlang);
                                                            while ($rowtt = $restanlang->fetch()) {
                                                        ?>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="javobID" value="<?php echo $rowtt['JavobID']; ?>" required>
                                                            <label class="form-check-label" for="flexRadioDefault1"><?php echo $rowtt['Javob']; ?></label>
                                                        </div>
                                                        <?php } ?>
                                                        <button type="submit" name="tanlang" class='btn btn-success p-1 mt-2'>Tekshirish</button>
                                                    </form>
                                                </nav>
                                                <?php }elseif ($row['Type']==='javoblar') { ?>
                                                <!-- Bir nechtasini tanlash -->
                                                <nav class='py-3' style='border-bottom:1px solid #607080;'>
                                                    <form action="./test/birnechta.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>&TestID=<?php echo $row['TestID']; ?>" method="POST">
                                                        <h6><?php echo $i.". ".$row['Savol']; ?></h6>
                                                        <i class='text-danger'>To'g'ri javoblarni tanlang</i>
                                                        <div class="form-check">
                                                            <?php
                                                                $sqltanlang2 = "SELECT * FROM `cours_test_javob` WHERE `TestID`='".$row['TestID']."' order by rand()";
                                                                $restanlang2 = $conn->query($sqltanlang2);
                                                                while ($rowtt = $restanlang2->fetch()) {
                                                                    $i=0;
                                                            ?>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="form-check-input" name="javob[]" value="<?php echo $rowtt['JavobID']; ?>">
                                                                <label><?php echo $rowtt['Javob']; ?></label>
                                                            </div>
                                                            <?php $i++; } ?>
                                                        </div>
                                                        <button type="submit" name="birnechta" class='btn btn-success p-1 mt-2'>Tekshirish</button>
                                                    </form>
                                                </nav>
                                                <?php }elseif ($row['Type']==='insert') { ?>
                                                <!-- To'g'ri javobni yozish -->
                                                <nav class='py-3' style='border-bottom:1px solid #607080;'>
                                                    <form action="./test/test_insert.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>&TestID=<?php echo $row['TestID']; ?>" method="POST">
                                                        <h6><?php echo $i.". ".$row['Savol']; ?></h6>
                                                        <i class='text-danger'>To'g'ri javobni kiriting</i>
                                                        <input type="text" name="javob" class='form-control' required>
                                                        <button type="submit" name="insert" class='btn btn-success p-1 mt-2'>Tekshirish</button>
                                                    </form>
                                                </nav>
                                            <?php } $i++; } ?>
                                            <div class="row">
                                                <div class="col-12"><a href="kurs_eye.php?CoursID=<?php echo $_GET['CoursID'] ?>&MavzuID=<?php echo $MavzuID; ?>" class="btn btn-primary p-1 w-100 my-1">Mavzuga qaytish</a></div>
                                            </div>
                                            <?php
                                                if(isset($_GET['error'])){
                                                    echo "<script>alert('Noto`g`ri javob tanladingiz.');</script>";
                                                }
                                                if(isset($_GET['status'])){
                                                    echo "<script>alert('To`g`ri javob tanladingiz.');</script>";
                                                }
                                                if(isset($_GET['error1'])){
                                                    echo "<script>alert('Siz javoblarni tanlamdingiz.');</script>";
                                                }
                                            ?>
                                        </div>
                                    </div>
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
    <script src="../assets/static/js/pages/component-toasts.js"></script>
</body>
</html>