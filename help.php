
<!DOCTYPE html>
<html lang="en">
<?php
    include_once("./config/config.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yordam</title>
    <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/iconly.css">
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <?php include("./blog/header.php"); ?>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li class="menu-item ">
                                <a href="index.php" class='menu-link'><span> Bosh sahifa</span></a>
                            </li>
                            <li class="menu-item ">
                                <a href="./cours.php" class='menu-link'><span> Kurslar</span></a>
                            </li>
                            <li class="menu-item " style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                <a href="./users/kurslar.php" class='menu-link'><span> Kurslarim</span></a>
                            </li>
                            <li class="menu-item ">
                                <a href="./contact.php" class='menu-link'><span> Bog'lanish</span></a>
                            </li>
                            <li class="menu-item active">
                                <a href="./help.php" class='menu-link'><span> Yordam</span></a>
                            </li>
                            <li class="menu-item" style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                <a href="log01.php" class='menu-link'><span> Kirish</span></a>
                            </li>
                            <li class="menu-item" style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
                                <a href="./reg01.php" class='menu-link'><span> Ro'yhatdan o'tish</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <div class="content-wrapper container mb-5 pb-5">
                <div class="page-content">
                    <div class="card collapse-icon accordion-icon-rotate">
                        <div class="card-header">
                            <h4 class="card-title pl-1">Yordam</h4>
                        </div>
                        <div class="card-body mb-5">
                            <div class="accordion" id="cardAccordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Ro'yhatdan qanday o'taman?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Menga SMS kod kelmadi. Nima qilay?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Video kurslar nimalarni o'z ichiga oladi?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer-->
            <?php include("./blog/footer.php"); ?>
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