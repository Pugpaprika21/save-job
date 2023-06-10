<?php

require __DIR__ . "../../src/include/include.php";

$api = new API();

$request = $api->setRequest();

if ($request['action_'] == 'register') {

    $regis = array();
    $regis_resp = array();
    $user_name = str($request['username']);
    $user_pass = str($request['userpass']);
    $user_phone = str($request['userPhone']);
    $user_email = str($request['userEmail']);

    $regis_chk = db_select("select count(*) as chk_username from user_tb where user_name = '{$user_name}'");

    if ($regis_chk['chk_username'] == 0) {

        $regis['user_name'] = $user_name;
        $regis['user_pass'] = $user_pass;
        $regis['user_phone'] = $user_phone;
        $regis['user_email'] = $user_email;
        $regis['user_token'] = U_SYS_TOKEN;
        $regis['user_status'] = 'Y';
        $regis['create_user_at'] = U_IP;
        $regis['create_date_at'] = CREATE_DATE_AT;
        $regis['create_time_at'] = CREATE_TIME_AT;
        $regis['create_ip_at'] = U_IP;

        $regis_insert = db_insert("user_tb", $regis, "user_id");
        unset($regis);

        $regis_resp['status'] = 1;
        $regis_resp['text'] = "ลงทะเบียนสำเร็จ";

        echo $api->setResponse($regis_resp, "");
        exit;
    }

    $regis_resp['status'] = 0;
    $regis_resp['text'] = "มี username นี้ในระบบเเล้ว\nกรุณาตั้ง username ใหม่";

    echo $api->setResponse($regis_resp, "");
    exit;
}
