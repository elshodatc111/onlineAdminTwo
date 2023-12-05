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
    <title>Lug'at</title>
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
                        <script>
                            function showResult(str) {
                                if (str.length==0) {
                                    document.getElementById("livesearch").innerHTML="";
                                    document.getElementById("livesearch").style.border="0px";
                                    return;
                                }
                                var xmlhttp=new XMLHttpRequest();
                                xmlhttp.onreadystatechange=function() {
                                    if (this.readyState==4 && this.status==200) {
                                        document.getElementById("livesearch").innerHTML=this.responseText;
                                        document.getElementById("livesearch").style.border="1px solid #A5ACB2";
                                    }
                                }
                                xmlhttp.open("GET","lugat_search.php?q="+str,true);
                                xmlhttp.send();
                            }
                        </script>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body py-2">
                                    <h4 class="card-title my-2 p-0 w-100 text-center">
                                        <?php echo $rowB['CoursName']; ?> kursga oid lug'atlar
                                    </h4>
                                    <a href="kurs_eye.php?CoursID=<?php echo $_GET['CoursID']; ?>" class="btn btn-primary">Kursga qaytish</a>
                                    <hr class='p-0 m-0 mt-1'>
                                    <form action="./lugat.php?CoursID=<?php echo $_GET['CoursID']; ?>" method="post" class="mt-1">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text pt-0"><i class="bi bi-search"></i></span>
                                            <input type="text" class="form-control" placeholder="Qidiruv" onkeyup="showResult(this.value)">
                                        </div>
                                    </form>
                                    <div class="table-responsive p-0">
                                        <?php
                                            $sqlq1 = "SELECT * FROM `lugat` WHERE `CoursID`='".$_GET['CoursID']."'";
                                            $resq1 = $conn->query($sqlq1);
                                            $rowq1 = $resq1->fetch();
                                        ?>
                                        <table class="table" style='font-size:14px'>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th><?php if(isset($rowq1['Tli_1'])){echo $rowq1['Tli_1'];}else{echo ".";} ?></th>
                                                    <th><?php if(isset($rowq1['Til_2'])){echo $rowq1['Til_2'];}else{echo ".";} ?></th>
                                                </tr>
                                            </thead>
                                            <tbody  id="livesearch">
                                                <?php
                                                    $sql = "SELECT * FROM `lugat` WHERE `CoursID`='".$_GET['CoursID']."'";
                                                    $res = $conn->query($sql);
                                                    $i=1;
                                                    while ($row = $res->fetch()) {
                                                        echo "<tr>
                                                            <td>".$i."</td>
                                                            <td>".$row['Til1_soz']."</td>
                                                            <td>".$row['Til_2_soz']."</td>
                                                        </tr>";
                                                        $i++;
                                                    }
                                                    if($i===1){
                                                        echo "<tr><td colspan=3 class='text-center'>Testlar mavjud emas.</td></tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
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

    
    <script src="../assets/extensions/jquery/jquery.min.js"></script>
    <script src="../assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="../assets/static/js/pages/datatables.js"></script>
</body>
</html>