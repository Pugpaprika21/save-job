<?php

require_once __DIR__ . "../../src/include/include.php";

$register = get_b64("register");

if ($register !== 'Y') {
    redirect_to("../pages/login.php", array("register" => "error"));
}

?>

<?php require_once __DIR__ . "../../view/layout/header.php"; ?>

<style>
    .btn-register-main {
        background-color: #5D73FE;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
        width: 100%;
    }

    .btn-register:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<div class="container-fluid">
    <div class="card-main-register" style="margin-top: 100px;">
        <div class="d-flex justify-content-center">
            <div class="card shadow-sm" style="width: 30rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <p class="card-text text-center" style="text-align: center; font-size: 30px;">ลงทะเบียน / <?= APP_NAME ?></p>
                    <form id="register-main">
                        <input type="hidden" id="register-url" name="registerURL" value="<?= url_where("../service/register_main.php") ?>">
                        <div class="form-floating mb-4 mt-4">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-4 mt-4">
                            <input type="password" class="form-control" id="userpass" name="userpass" placeholder="Password">
                            <label for="userpass">Password</label>
                        </div>
                        <div class="form-floating mb-4 mt-4">
                            <input type="phone" class="form-control" id="userPhone" name="userPhone" placeholder="Phone">
                            <label for="userPhone">Phone</label>
                        </div>

                        <div class="form-floating mb-4 mt-4">
                            <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Email">
                            <label for="userEmail">Email</label>
                        </div>
                        <button type="submit" class="button btn-register-main btn-register">ลงทะเบียน</button>
                        <br>
                        <p class="lh-base text-center" style="margin-top: 30px;">
                            <a href="<?= url_where("../pages/login.php") ?>" class="text-decoration-none">กลับสู่หน้าเข้าสู่ระบบ</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="../public/js/registerMain.js?t=<?= CREATE_TIME_AT ?>"></script> -->

<?php require_once __DIR__ . "../../view/layout/footer.php"; ?>