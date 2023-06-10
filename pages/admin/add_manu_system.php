<?php

require __DIR__ . "../../../src/include/include.php";

$system = get_b64("system");
$create_manu = get_b64("create_manu");

if (empty($_SESSION['user_data'])) {
    redirect_to("../../../process/logout_main.php", array('user_name' => 'N', 'user_pass' => 'N'));
}

?>

<?php require __DIR__ . "../../../view/layout/header.php"; ?>

<div class="nav-main">
    <nav class="navbar navbar-expand-lg shadow p-2 mb-4 bg-body-tertiary rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../../upload/image/bootstrap-logo-shadow.png" alt="Logo" width="30" height="25" class="d-inline-block align-text-top">
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
                            <li><a class="dropdown-item" href="<?= url_where("../../pages/admin/add_manu_system.php", array('system' => 'add_manu', 'create_manu' => 'Y'), true) ?>">จัดการเมนู</a></li>
                        </ul>
                    </li>

                </ul>

                <span class="navbar-text">
                    <a class="navbar-brand" href="<?= url_where("../../process/logout_main.php", array('logout' => 'Y'), true) ?>">
                        <img src="../../upload/image/profile-icon.png" alt="Logo" width="35" height="30" class="d-inline-block align-text-top">
                    </a>
                </span>
            </div>
        </div>
    </nav>
</div>

<div class="card-content-main" style="margin-top: 40px;">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body shadow-sm">

            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . "../../../view/layout/footer.php"; ?>