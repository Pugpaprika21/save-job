<?php

require_once __DIR__ . "../../src/include/include.php";

$api = new API();

$request = $api->setRequest();

if ($request['action_'] == 'login') {
    $user_name = str($request['username']);
    $user_pass = str($request['userpass']);

    $chk_login = db_select("select user_name, user_pass, user_status, user_token, count(*) as chk_login from user_tb where user_name = '{$user_name}' and user_pass = '{$user_pass}'");
    
    if ($chk_login['chk_login'] > 0) {
        
        if ($chk_login['user_name'] == $user_name && $chk_login['user_pass'] == $user_pass) {

            $user_data = array();
            $user_data['user_name'] = $chk_login['user_name'];
            $user_data['user_pass'] = $chk_login['user_pass'];
            $user_data['user_status'] = $chk_login['user_status'];
            $user_data['user_token'] = $chk_login['user_token'];
            $user_data['user_login_date'] = CREATE_DATE_AT;
            $user_data['user_login_time'] = CREATE_TIME_AT;

            $_SESSION['user_login_data'] = $user_data;

            echo $api->setResponse($request, "สำเร็จ");
            exit;
        }
    }

    echo $api->setResponse($request, "ไม่สำเร็จ");
    exit;
}
