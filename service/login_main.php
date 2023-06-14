<?php

require __DIR__ . "../../src/include/include.php";

$api = new API();

$request = $api->setRequest();

if ($request['action_'] == 'login') {
    $login_resp = array();
    $user_name = str($request['username']);
    $user_pass = str($request['userpass']);

    $chk_login = db_select("SELECT 
        user_id, 
        user_name, 
        user_pass, 
        user_status, 
        user_token, 
        COUNT(*) AS chk_login 
    FROM user_tb 
    WHERE user_name = '{$user_name}' 
    AND user_pass = '{$user_pass}'");

    if ($chk_login['chk_login'] > 0) {

        if ($chk_login['user_name'] == $user_name && $chk_login['user_pass'] == $user_pass) {

            $user_data = array();
            $user_data['user_id'] = $chk_login['user_id'];
            $user_data['user_name'] = $chk_login['user_name'];
            $user_data['user_pass'] = $chk_login['user_pass'];
            $user_data['user_status'] = $chk_login['user_status'];
            $user_data['user_token'] = $chk_login['user_token'];
            $user_data['user_login_date'] = CREATE_DATE_AT;
            $user_data['user_login_time'] = CREATE_TIME_AT;

            $_SESSION['user_data'] = $user_data;

            $login_resp['status'] = 1;
            $login_resp['text'] = "ล็อคอินสำเร็จ";

            echo $api->setResponse($login_resp, "");
            exit;
        }
    }

    $login_resp['status'] = 0;
    $login_resp['text'] = "ล็อคอินไม่สำเร็จ";
    echo $api->setResponse($login_resp, "");
    exit;
}
