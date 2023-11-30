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
        <title>Kurs mavzu haqida</title>
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
                        <li class="sidebar-item ">
                            <a href="./banner.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Bannerlar</span></a>
                        </li>
                        <li class="sidebar-item active">
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
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
            </header>
            <div class="page-heading">
                <h3>Kurs mavzusi</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Bosh sahifa</a></li>
                        <li class="breadcrumb-item"><a href="./kurslar.php">Kurslar</a></li>
                        <li class="breadcrumb-item"><a href="./kurs_eye.php">Kurs</a></li>
                        <li class="breadcrumb-item"><a href="./kurs_new_mavzu_plus.php?CoursID=<?php echo $_GET['CoursID']; ?>">Mavzular</a></li>
                        <li class="breadcrumb-item"><a href="./kurs_mavzu_eye.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>">Mavzu</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Yangi test qo'shish</li>
                    </ol>
                </nav>
                
            </div> 
            <section class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body text-center"  style="min-height:340px;">
                            <h5>Yangi test qo'shish</h5>
                            <form action="./cours/test_savol_plus.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>" method="POST">
                                <label class="mt-3">Test turini tablang</label>
                                <select name="Type" class="form-select mt-2" required>
                                    <option value="">tanlang</option>
                                    <option value="tanlang">Faqat bitta to'g'ri javob</option>
                                    <option value="insert">To'g'ri javobni kiritish</option>
                                    <option value="javoblar">To'g'ri javoblarni tanlang</option>
                                </select>
                                <label class="mt-3">Test savlolini kiriting</label>
                                <input type="text" name="savol" class="form-control mt-2" required>
                                <button type="submit" class="btn btn-primary w-100 mt-4">Testni saqlash</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body text-center" style="min-height:340px;">
                            <h5>Yangi javobini kiritish</h5>
                            <form action="./cours/test_javob_plus.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>" method="POST">
                                <label class="mt-1">Test savolini tablang</label>
                                <select name="TestID" class="form-select mt-1" required>
                                    <option value=''>tanlang</option>
                                    <?php
                                        $sql2 = "SELECT * FROM `cours_test` WHERE `MavzuID`='".$_GET['MavzuID']."'";
                                        $res2 = $conn->query($sql2);
                                        while ($row2 = $res2->fetch()) {
                                            echo "<option value=".$row2['TestID'].">".$row2['Savol']."</option>";
                                        }
                                    ?>
                                </select>
                                <label class="mt-1">Test holatini tablang</label>
                                <select name="Status" class="form-select mt-1" required>
                                    <option value="">tanlang</option>
                                    <option value="true">To'g'ri javob</option>
                                    <option value="false">Noto'g'ri javob</option>
                                </select>
                                <label class="mt-1">Test javobini kiriting</label>
                                <input type="text" name="Javob" class="form-control mt-1" required>
                                <button type="submit" class="btn btn-primary w-100 mt-2">Javobni saqlash</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="w-100 text-center">Mavzuga oid testlar</h5>
                            <table class="table text-center">
                                <thaed>
                                    <tr>
                                        <th>#</th>
                                        <th>Tast savoli</th>
                                        <th>Test Type</th>
                                        <th>Test Javoblari</th>
                                        <th>Testni o'chirish</th>
                                    </tr>
                                </thaed>
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM `cours_test` WHERE `CoursID`='".$_GET['CoursID']."' AND `MavzuID`='".$_GET['MavzuID']."'";
                                        $res = $conn->query($sql);
                                        $i=1;
                                        while ($row = $res->fetch()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td style='text-align:left'><?php echo $row['Savol']; ?></td>
                                        <td style='text-align:left'>
                                            <?php 
                                                if($row['Type']==='tanlang'){
                                                    echo "To'g'ri javobni tanlang.";
                                                }elseif($row['Type']==='javoblar'){
                                                    echo "To'g'ri javoblarni tanlang.";
                                                }elseif($row['Type']==='insert'){
                                                    echo "To'g'ri javobni kiriting.";
                                                }
                                            ?>
                                        </td>
                                        <td style='text-align:left'>
                                            <ol class="p-0 m-0">
                                                <?php
                                                    $sql1 = "SELECT * FROM `cours_test_javob` WHERE `TestID`='".$row['TestID']."'";
                                                    $res1 = $conn->query($sql1);
                                                    $i=0;
                                                    while ($row1=$res1->fetch()) {
                                                        if($row1['Status']==='true'){
                                                            echo "<li>
                                                            <p class='text-success my-1 p-0'>".$row1['Javob']." <a href='./cours/test_javob_del.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&id=".$row1['id']."'><i data-feather='trash'></i></p></a> </li>";
                                                            $i++;
                                                        }elseif($row1['Status']==='false'){
                                                            echo "<li>
                                                            <p class='text-danger my-1 p-0'> ".$row1['Javob']." <a href='./cours/test_javob_del.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&id=".$row1['id']."'><i data-feather='trash'></i></p></a> </li>";
                                                            $i++;
                                                        }
                                                    }
                                                    if($i===0){
                                                        echo "Test Javoblari Kiritilmagan.";
                                                    }
                                                ?>
                                            </ol>
                                        </td>
                                        <td><a href="./cours/test_delete.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>&id=<?php echo $row['id']; ?>"><i data-feather="trash"></i></a></td>
                                    </tr>
                                    <?php $i++; } ?>
                                </tbody>
                            </table>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/jquery.inputmask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.phone').inputmask('99 999 9999');
            $('.davomiy').inputmask('99:99:99');
            $('.pnfl').inputmask('99999999999999');
            $('.kodes').inputmask('9 9 9 9 9 9');
        });
    </script>
</body>
</html>