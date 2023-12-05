<div class="container-fluid bg-primary text-white p-5">
    <div class="row">
        <div class="col-lg-3 col-12 pt-2">
            <h4 class="card-title mt-2">Bog'lanish</h4><br>
            <p class="card-text m-0 mt-1"> <b>Tel:</b> <i> +998 91 950 1101</i></p>
            <p class="card-text m-0 mt-1"> <b>Email:</b> <i> atkoteams@gmail.com</i></p>
            <p class="card-text m-0 mt-1"> <b>Addres:</b> <i> Qarshi shaxar, Mustaqillik shox ko'chasi 2-uy</i></p>
        </div>
        <div class="col-lg-3 col-12 pt-2">
            <h4 class="card-title mt-2">Bo'limlar</h4><br>
            <ul>
                <li><a href="./cours.php" class="text-white">Kurslar</a></li>
                <li><a href="./contact.php" class="text-white">Bog'lanish</a></li>
                <li><a href="./help.php" class="text-white">Yordam</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-12 py-2">
            <h4 class="card-title mt-2">Ijtimoiy tarmoqda</h4><br>
            <div class="w-50">
                <a href="https://t.me/atko_teams" class="mx-1 text-info" style="font-size:24px"><i class="bi bi-telegram"></i></a>
                <a href="https://instagram.com/atko_teams?igshid=OGQ5ZDc2ODk2ZA==" class="mx-1 text-danger" style="font-size:24px"><i class="bi bi-instagram"></i></a>
                <a href="https://www.facebook.com/atkoteams/" class="mx-1 text-warning" style="font-size:24px"><i class="bi bi-facebook"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-12 pt-2">
            <h4 class="card-title mt-2">Qo'llab quvvatlash</h4><br>
            <ul>
                <li style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>"><a href="./log01.php" class="text-white">Kirish</a></li>
                <li style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>"><a href="./reg01.php" class="text-white">Ro'yhatdan o'tish</a></li>
                <li style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>"><a href="./kurslar.php" class="text-white">Kurslarim</a></li>
                <li style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>"><a href="./cobinet.php" class="text-white">Kabinet</a></li>
            </ul>
        </div>
    </div>
</div>