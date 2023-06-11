<?php

return [
    'nav' => [
        'system' => 'ระบบ',
        'dashboard' => 'รายงาน',
        'setting' => 'ตั้งค่า',
        'permission' => 'ข้อมูลผู้ใช้งาน/สิทธ์',
        'admin_setting_permission' => 'ตั้งค่า/ผู้ดูเเลระบบ',
    ],
    'bootstrap' => [
        'btn_add' => "
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-square-fill\" viewBox=\"0 0 16 16\">
                <path d=\"M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z\"/>
            </svg>
        ",
        'btn_del' => "
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash3-fill\" viewBox=\"0 0 16 16\">
                <path d=\"M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z\"/>
            </svg>
        "
    ],
    'lang' => [
        'html' => substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)
    ],
    'style' => [
        'title' => '',
        'main_body' => 'background-color: #F0FFFE; font-family: \'Mitr\', sans-serif;'
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


