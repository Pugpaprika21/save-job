<?php

require __DIR__ . "../../src/include/include.php";

if (empty($_SESSION['user_data'])) {
    redirect_to("../pages/login.php", array('user_name' => 'N', 'user_pass' => 'N'));
}

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

<!-- card body -->


<?php require __DIR__ . "../../view/layout/footer.php"; ?>