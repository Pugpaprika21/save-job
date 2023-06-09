<?php

return [
    'nav' => [
        'system' => 'ระบบ',
        'dashboard' => 'รายงาน',
        'setting' => 'ตั้งค่า',
        'permission' => 'ข้อมูลผู้ใช้งาน/สิทธ์',
        'admin_setting_permission' => 'ตั้งค่า/ผู้ดูเเลระบบ',
    ],
    'lang' => [
        'html' => substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)
    ],
    'style' => [
        'title' => '',
        'main_body' => 'background-color: #ECF0F1; font-family: \'Mitr\', sans-serif;'
    ],
    'js' => [
        'ajax' => 'https://code.jquery.com/jquery-3.6.4.min.js',
        'fetch_' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.6.2/fetch.js" integrity="sha512-20FZL4lG1jTZXPeMkblgj4b/fsXASK5aW87Tm7Z5QK9QmmYleVGM0NlS9swfb6XT8yrFTAWkq3QfnMe7MKIX8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>',
        'fetch' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.6.2/fetch.min.js" integrity="sha512-1Gn7//DzfuF67BGkg97Oc6jPN6hqxuZXnaTpC9P5uw8C6W4yUNj5hoS/APga4g1nO2X6USBb/rXtGzADdaVDeA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>',
        'axios' => 'https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js',
        'axios_unpkg' => '<script src="https://unpkg.com/axios/dist/axios.min.js"></script>',
        'swl_alert' => 'https://cdn.jsdelivr.net/npm/sweetalert2@11',
        'swl_alert_all' => '<script src="sweetalert2.all.min.js"></script>',
        'boostrap' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js',
        'vue' => 'https://unpkg.com/vue@3/dist/vue.global.js'
    ]
];
