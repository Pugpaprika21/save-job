<?php require_once __DIR__ . "../../src/include/include.php"; ?>

<?php require_once __DIR__ . "../../view/layout/header.php"; ?>

<style>
    .btn-login {
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

    .btn-singin:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<div class="container-fluid">
    <div class="card-main-login" style="margin-top: 120px;">
        <div class="d-flex justify-content-center">
            <div class="card shadow-sm" style="width: 30rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <p class="card-text text-center" style="text-align: center; font-size: 30px;"><?= APP_NAME ?></p>
                    <form id="login-main">
                        <input type="hidden" id="login-url" name="loginURL" value="<?= url_where("../service/login_main.php") ?>">
                        <div class="form-floating mb-4 mt-4">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-4 mt-4">
                            <input type="password" class="form-control" id="userpass" name="userpass" placeholder="Password">
                            <label for="userpass">Password</label>
                        </div>
                        <button type="submit" class="button btn-login btn-singin">เข้าสู่ระบบ</button>
                        <br>

                        <p class="lh-base text-center" style="margin-top: 30px;">
                            ลืม <a href="#" class="text-decoration-none">Username / Password</a> หรือไม่<br>
                            สร้างบัญชีหรือไม่ <a href="" class="text-decoration-none">ลงทะเบียนที่นี้</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../public/js/loginMain.js?t=<?= CREATE_TIME_AT ?>"></script>

<?php require_once __DIR__ . "../../view/layout/footer.php"; ?>