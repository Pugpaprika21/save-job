<?php

require_once __DIR__ . "../../src/include/include.php";

$users = db_select("select * from user_tb order by user_id desc");

?>

<!doctype html>
<html lang="<?= $system_config['lang']['html'] ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $system_config['style']['title'] ?></title>

    <!-- main-css -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css?t=<?= CREATE_TIME_AT ?>" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- main-css -->

    <!-- main-js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js?t=<?= CREATE_TIME_AT ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js?t=<?= CREATE_TIME_AT ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11?t=<?= CREATE_TIME_AT ?>"></script>
    <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js?t=<?= CREATE_TIME_AT ?>"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js?t=<?= CREATE_TIME_AT ?>"></script>
    <!-- main-js -->

</head>

<body style="<?= $system_config['style']['main_body'] ?>">

    <!-- nav -->
    <div class="nav-main">
        <nav class="navbar navbar-expand-lg shadow p-2 mb-4 bg-body-tertiary rounded">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../upload/image/bootstrap-logo-shadow.png" alt="Logo" width="30" height="25" class="d-inline-block align-text-top">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <!-- APP NAME -->
                        <li class="nav-item">
                            <a class="nav-link"><?= APP_NAME ?></a>
                        </li>
                        <!-- APP NAME -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $system_config['nav']['system'] ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $system_config['nav']['dashboard'] ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $system_config['nav']['permission'] ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $system_config['nav']['admin_setting_permission'] ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $system_config['nav']['setting'] ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                        </li>

                    </ul>

                    <span class="navbar-text">
                        <a class="navbar-brand" href="#">
                            <img src="../upload/image/profile-icon.png" alt="Logo" width="35" height="30" class="d-inline-block align-text-top">
                        </a>
                    </span>
                </div>
            </div>
        </nav>
    </div>
    <!-- nav -->

    <div class="card-content-main" style="margin-top: 20px;">
        <div class="container-fluid shadow-sm">
            <div class="card">
                <div class="card-body">
                    <!--  -->
                    <div class="card-content-sub">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a short card.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>

</body>

</html>