<?php

require __DIR__ . "../../src/include/include.php";

if (empty($_SESSION['user_data'])) {
    redirect_to("../process/logout_main.php", array('user_name' => 'N', 'user_pass' => 'N'));
}