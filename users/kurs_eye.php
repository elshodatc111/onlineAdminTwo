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
    <title>Dars jarayonda</title>
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
                                                    <a href="./lugat.php?CoursID=<?php echo $_GET['CoursID']; ?>" class='btn btn-info text-white w-100'>Kursga oid lug'atlar</a>
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
                                            <h4 class="card-title m-0 p-0 w-100 text-center"><?php echo $rowA['MavzuName']; ?></h4><hr class='p-0 m-0 mt-1'>
                                            <video controls style="width:100%;" controlsList="nodownload">
                                                <source src="../assets/video/<?php echo $rowA['Video']; ?>" type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><?php echo $rowA['Text']; ?></p>
                                            
                                            <p class="card-footer p-0 m-0 pt-1 ">
                                                <div class="row">
                                                    <div class="col-12"><a href="kurs_test.php?CoursID=<?php echo $_GET['CoursID'] ?>&MavzuID=<?php echo $MavzuID; ?>" class="btn btn-primary p-1 w-100 my-1">Mavzuga oid testlar</a></div>
                                                </div>
                                            </p>
                                            <h5>Mavzuga oid lug'atlar</h5>
                                            <table class="table" style='font-size:14px'>
                                            <tbody>
                                            <?php
                                                $sql = "SELECT * FROM `lugat` WHERE `CoursID`='".$_GET['CoursID']."' AND `MavzuID`='".$MavzuID."'";
                                                $res = $conn->query($sql);
                                                $i=1;
                                                while ($row = $res->fetch()) {
                                                    echo "<tr>
                                                        <td class='text-center'>".$i."</td>
                                                        <td style='text-align:left;'>".$row['Til1_soz']."</td>
                                                        <td style='text-align:left;'>".$row['Til_2_soz']."</td>
                                                    </tr>";
                                                    $i++;
                                                }
                                            ?>
                                            </tbody>
                                            </table>
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
</body>
</html>