<?php

require __DIR__ . "../../../src/include/include.php";

$system = get_b64("system");
$create_manu = get_b64("create_manu");

if (empty($_SESSION['user_data'])) redirect_to("../../../process/logout_main.php", array('user_name' => 'N', 'user_pass' => 'N'));

if ($create_manu != 'Y') redirect_to("../../../process/logout_main.php", array('permission' => 'N'));

?>

<?php require __DIR__ . "../../../view/layout/header.php"; ?>

<style>

    #btn-save-system {
        background-color: #3F3385;
        border: none;
        color: white;
        padding: 8px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
    }

    #btn-save-system:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }
</style>

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
        <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="button">Button</button>
            <button class="btn btn-primary" type="button">Button</button>
        </div> -->
        <div class="card">
            <div class="card-body shadow-sm">
                <form id="form-btn-save-system" action="<?= url_where("../../process/admin/save_manu_system.php") ?>" method="post" enctype="multipart/form-data">
                    <p class="text-start">เมนู / ระบบหลัก</p>
                    <div class="row">
                        <!--  -->
                        <div class="col-sm-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="mms_title" name="mms_title" placeholder="หัวข้อระบบหลัก">
                                <!-- <span class="input-group-text" id="basic-addon2">หัวข้อระบบหลัก</span> -->
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                        <!--  -->

                        <!--  -->
                        <div class="col-sm-6">
                            <div class="input-group input-group-sm">
                                <textarea class="form-control" aria-label="With textarea" id="mms_text" name="mms_text" placeholder="รายละเอียดระบบหลัก"></textarea>
                                <!-- <span class="input-group-text">รายละเอียดระบบหลัก</span> -->
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                        <!--  -->

                        <!--  -->
                        <div class="col-sm-6">
                            <div class="input-group mt-3 mb-3">
                                <input type="color" class="form-control form-control-color" id="mcs_bgcolor" name="mcs_bgcolor" value="#299ABE" lang="th" title="เลือกสีพิ้นหลัง">
                                <!-- <span class="input-group-text" id="basic-addon2">สีพื้นหลังระบบ</span> -->
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                        <!--  -->

                        <!--  -->
                        <div class="col-sm-6">
                            <div class="input-group mb-3">
                                <input type="color" class="form-control form-control-color" id="mcs_bdcolor" name="mcs_bdcolor" value="#073240" lang="th" title="เลือกสีขอบ">
                                <!-- <span class="input-group-text" id="basic-addon2">สีขอบระบบ</span> -->
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                        <!--  -->

                        <!--  -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="fs_img_manu" class="form-label">โปรไฟล์ระบบ</label>
                                <input class="form-control form-control-sm" id="fs_img_manu" name="fs_img_manu" type="file" accept=".png, .jpg, .jpeg" lang="th" title="เลือกไฟล์">
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                        <!--  -->
                    </div>

                    <p class="text-start mt-2">เมนู / ระบบหลักย่อย</p>
                    <div class="row">
                        <!-- <div class="mb-3">
                        <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
                        <div class="input-group">
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                    </div> -->
                        <!--  -->
                        <div class="col-sm-10">
                            <!-- <input type="hidden" id="btn-add" value="<?= $system_config['bootstrap']['btn_add'] ?>">
                        <input type="hidden" id="btn-del" value="<?= $system_config['bootstrap']['btn_del'] ?>"> -->
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead style="color: #FFFFFF; background-color: #3F3385;">
                                        <tr>
                                            <th class="text-center" scope="col">ลำดับ</th>
                                            <th class="text-center" scope="col">หัวข้อระบบย่อย</th>
                                            <th class="text-center" scope="col">รายละเอียดระบบย่อย</th>
                                            <th class="text-center" scope="col">ลิงค์</th>
                                            <th class="text-center" scope="col">จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody id="add-row-submanu">
                                        <tr>
                                            <th scope="col">
                                                <div class="mt-2 mb-2 text-center">
                                                    1
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="mt-2 mb-2 text-center">
                                                    <input type="text" class="form-control" id="mmss_title" name="mmss_title[]" placeholder="หัวข้อระบบย่อย" required>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="mt-2 mb-2 text-center">
                                                    <input type="text" class="form-control" id="mmss_text" name="mmss_text[]" placeholder="รายละเอียดระบบย่อย"required>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="mt-2 mb-2 text-center">
                                                    <input type="text" class="form-control" id="mmss_path" name="mmss_path[]" placeholder="ลิงค์" required>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="mt-2 mb-2">
                                                    <div class="text-center">
                                                        <button class="btn btn-primary btn-sm" type="button" onclick="addRow()"><?= $system_config['bootstrap']['btn_add'] ?> เพิ่มเเถว</button>
                                                        <button class="btn btn-danger btn-sm" type="button" onclick="deleteRow(this)"><?= $system_config['bootstrap']['btn_del'] ?> ลบเเถว</button>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="col-sm-2"></div>
                        <!--  -->



                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button id="btn-save-system" type="submit">บันทึก</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script src="../../public/js/configs/@@system.js?t=<?= CREATE_TIME_AT ?>"></script>
<script src="../../public/js/components/adminMainCreateSystem.js?t=<?= CREATE_TIME_AT ?>"></script>

<?php require __DIR__ . "../../../view/layout/footer.php"; ?>