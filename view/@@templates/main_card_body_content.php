<div class="card-content-main" style="margin-top: 40px;">
    <?php
    // get manu
    $main_manu = db_select("select count(*) as count_manu from manu_main_system_tb");
    
    ?>
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
                                            <h5 class="card-title">เมนูหลัก / ระบบ<?= APP_NAME ?></h5>
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