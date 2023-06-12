<?php

require __DIR__ . "../../../src/include/include.php";

$user_data = $_SESSION['user_data'];

if (empty($user_data)) {
    redirect_to("../process/logout_main.php", array('user_name' => 'N', 'user_pass' => 'N'));
}

$manu_main_system_tb = array();
$manu_main_system_tb['mms_title'] = req('mms_title');
$manu_main_system_tb['mms_text'] = req('mms_text');
$manu_main_system_tb['mms_path'] = req('mms_path');
$manu_main_system_tb['mms_status'] = 'Y';
$manu_main_system_tb['create_date_at'] = CREATE_DATE_AT;
$manu_main_system_tb['create_time_at'] = CREATE_TIME_AT;
$manu_main_system_tb['create_ip_at'] = U_IP;
$manu_main_system_tb['ref_type'] = 'user_tb';
$manu_main_system_tb['ref_id'] = $user_data['user_id'];

$manu_main = db_insert("manu_main_system_tb", $manu_main_system_tb, "mms_id");
unset($manu_main_system_tb);

$manu_main_nav_system_tb = array();
$manu_main_nav_system_tb['mmns_title'] = req('mms_title');
$manu_main_nav_system_tb['mmns_status'] = 'Y';
$manu_main_nav_system_tb['create_date_at'] = CREATE_DATE_AT;
$manu_main_nav_system_tb['create_time_at'] = CREATE_TIME_AT;
$manu_main_nav_system_tb['create_ip_at'] = U_IP;
$manu_main_nav_system_tb['ref_type'] = 'manu_main_system_tb';
$manu_main_nav_system_tb['ref_id'] = $manu_main['mms_id'];
db_insert("manu_main_nav_system_tb", $manu_main_nav_system_tb);
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

db_insert("manu_color_system_tb", $manu_color_system_tb);
unset($manu_color_system_tb);

$file_system_tb = array();
$file_system_tb['fs_key_name'] = 'fs_key_name';
$file_system_tb['fs_name'] = $_FILES['fs_img_manu']['name'];
$file_system_tb['fs_full_path'] = $_FILES['fs_img_manu']['full_path'];
$file_system_tb['fs_type'] = $_FILES['fs_img_manu']['type'];
$file_system_tb['fs_tmpname'] = $_FILES['fs_img_manu']['tmp_name'];
$file_system_tb['fs_error'] = $_FILES['fs_img_manu']['error'];
$file_system_tb['fs_size'] = $_FILES['fs_img_manu']['size'];
$file_system_tb['fs_real_name'] = file_upload("../../../upload/image/", array('name' => $_FILES['fs_img_manu']['name'], 'tmp_name' => $_FILES['fs_img_manu']['tmp_name']));
$file_system_tb['fs_path_dir'] = '../../../upload/image/';
$file_system_tb['fs_status'] = 'Y';
$file_system_tb['create_date_at'] = CREATE_DATE_AT;
$file_system_tb['create_time_at'] = CREATE_TIME_AT;
$file_system_tb['create_ip_at'] = U_IP;
$file_system_tb['ref_type'] = 'manu_main_system_tb';
$file_system_tb['ref_id'] = $manu_main['mms_id'];

db_insert("file_system_tb", $file_system_tb);
unset($file_system_tb);

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

$back_to_admin_system = url_where("../../pages/admin/add_manu_system.php", array('system' => 'add_manu', 'create_manu' => 'Y', 'add_status' => 'Y'), true);
header("location: {$back_to_admin_system}");
exit;
