<?php

require __DIR__ . "../../src/include/include.php";

if (empty($_SESSION['user_data'])) {
    redirect_to("../pages/login.php", array('user_name' => 'N', 'user_pass' => 'N'));
}

$main_manu = db_select("select count(*) as count_manu from manu_main_system_tb");

?>

<?php require __DIR__ . "../../view/layout/header.php"; ?>

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
                    <a class="navbar-brand" href="<?= url_where("../process/logout_main.php", array('logout' => 'Y'), true) ?>">
                        <img src="../upload/image/profile-icon.png" alt="Logo" width="35" height="30" class="d-inline-block align-text-top">
                    </a>
                </span>
            </div>
        </div>
    </nav>
</div>

<!-- card body -->

<div class="card-content-main" style="margin-top: 40px;">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body shadow-sm">
                <div class="card-content-sub">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php if ($main_manu['count_manu'] > 0) : ?>

                        <?php elseif ($main_manu['count_manu'] == 0) : ?>
                            <div class="col">
                                <div class="card h-100" id="card-manu-">
                                    <div class="card-body shadow-sm rounded">
                                        <a href="http://" class="text-decoration-none">
                                            <div class="text-center mt-4 mb-4">
                                                <img src="../upload/image/home_manu.png" class="rounded" alt="..." style="width: 20%; height: 85%;">
                                            </div>
                                            <h5 class="card-title">เมนูหลัก / <?= APP_NAME ?></h5>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- card body -->


<?php require __DIR__ . "../../view/layout/footer.php"; ?>