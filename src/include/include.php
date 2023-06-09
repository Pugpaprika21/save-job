<?php

/**
* @author PUG <pugpaprika21@gmail.com>
* @edit 5-21-2566
*/

$err_on = 1;

ini_set('display_errors', $err_on);
ini_set('display_startup_errors', $err_on);
error_reporting(E_ALL);

session_start();

date_default_timezone_set('Asia/Bangkok');

const WRITE_LOG = false;
const APP_NAME = 'บันทึกการทำงาน';

$app_root = __DIR__ . '../../';

$db_config = require "{$app_root}configs/db_settings.php";
$system_config = require "{$app_root}configs/system_settings.php";

require "{$app_root}functions/@@helpers.php";
require "{$app_root}functions/@@mysqli_db.php";
require "{$app_root}classes/API.php";
require "{$app_root}classes/Http.php";
require "{$app_root}classes/Str.php";

define('CREATE_DATE_AT', now('d'));
define('CREATE_TIME_AT', now('t'));
define('CREATE_DT_AT', now());

define('U_SYS_TOKEN', token_generator(rend_string()));
define('U_IP', getenv('HTTP_X_FORWARDED_FOR') ? getenv('HTTP_X_FORWARDED_FOR') : getenv("REMOTE_ADDR"));
define('APP_URL', isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : __DIR__);
unset($app_root);