<?php

require __DIR__ . "../../src/include/include.php";

if (get_b64('logout') == 'Y') {
    session_destroy();
    redirect_to("../pages/login.php");
}

redirect_to("../pages/login.php", array('logout' => 'error'));
