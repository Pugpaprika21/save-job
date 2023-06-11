<?php

require __DIR__ . "../../../src/include/include.php";

echo_r($_REQUEST);

if (empty($_SESSION['user_data'])) {
    redirect_to("../process/logout_main.php", array('user_name' => 'N', 'user_pass' => 'N'));
}