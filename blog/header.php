<div class="header-top">
    <?php
        if(isset($_COOKIE['UserID'])){
            $sqlaa = "SELECT * FROM `users` WHERE `UserID`='".$_COOKIE['UserID']."'";
            $resaa = $conn->query($sqlaa);
            $rowaa = $resaa->fetch();
        }
    ?>
    <div class="container">
        <div class="logo">
            <a href="index.php"><h1 class="px-3 my-0 text-white  bg-danger w-100">ATKO</h1></a>
        </div>
        <div class="header-top-right">
            <div class="dropdown" style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar avatar-md2" >
                        <img src="./assets/img/avatar/<?php if(isset($_COOKIE['UserID'])){echo $rowaa['Image'];} ?>" alt="Avatar">
                    </div>
                    <div class="text">
                        <h6 class="user-dropdown-name"><?php if(isset($_COOKIE['UserID'])){echo $rowaa['FIO'];} ?></h6>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="./kurslar.php">Kurslarim</a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="./cobinet.php">Kabinet</a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="../index.php?chiqish=true">Chiqish</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </div>
    </div>
</div>