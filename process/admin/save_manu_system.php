<?php

require __DIR__ . "../../../src/include/include.php";

$user_data = $_SESSION['user_data'];

if (empty($_SESSION['user_data'])) {
    redirect_to("../process/logout_main.php", array('user_name' => 'N', 'user_pass' => 'N'));
}

$manu_main_system_tb = array();
$manu_main_system_tb['mms_title'] = req('mms_title');
$manu_main_system_tb['mms_text'] = req('mms_text');
$manu_main_system_tb['mms_status'] = 'Y';
$manu_main_system_tb['create_date_at'] = CREATE_DATE_AT;
$manu_main_system_tb['create_time_at'] = CREATE_TIME_AT;
$manu_main_system_tb['create_ip_at'] = U_IP;
$manu_main_system_tb['ref_type'] = 'user_tb';
$manu_main_system_tb['ref_id'] = $user_data['user_id'];

$manu_main = db_insert("manu_main_system_tb", $manu_main_system_tb, "mms_id");
unset($manu_main_system_tb);

$manu_color_system_tb = array();
$manu_color_system_tb['mcs_bgcolor'] = req('mcs_bgcolor');
$manu_color_system_tb['mcs_bdcolor'] = req('mcs_bdcolor');
$manu_color_system_tb['mcs_status'] = 'Y';
$manu_color_system_tb['create_date_at'] = CREATE_DATE_AT;
$manu_color_system_tb['create_time_at'] = CREATE_TIME_AT;
$manu_color_system_tb['create_ip_at'] = U_IP;
$manu_color_system_tb['ref_type'] = 'manu_main_system_tb';
$manu_color_system_tb['ref_id'] = $manu_main['mms_id'];
unset($manu_color_system_tb);

if (count($_POST['mmss_title']) > 0) {

    foreach ($_POST['mmss_title'] as $key => $value) {
        $manu_main_sub_system_tb = array();
        $manu_main_sub_system_tb['mmss_title'] = $_POST['mmss_title'][$key];
        $manu_main_sub_system_tb['mmss_text'] = $_POST['mmss_text'][$key];
        $manu_main_sub_system_tb['mmss_path'] = $_POST['mmss_path'][$key];
        $manu_main_sub_system_tb['mmss_status'] = 'Y';
        $manu_main_sub_system_tb['create_date_at'] = CREATE_DATE_AT;
        $manu_main_sub_system_tb['create_time_at'] = CREATE_TIME_AT;
        $manu_main_sub_system_tb['create_ip_at'] = U_IP;
        $manu_main_sub_system_tb['ref_type'] = 'manu_main_system_tb';
        $manu_main_sub_system_tb['ref_id'] = $manu_main['mms_id'];

        db_insert("manu_main_sub_system_tb", $manu_main_sub_system_tb);
        unset($manu_main_sub_system_tb);
    }
}




