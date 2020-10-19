<?php

function checkActive($path, $active = 'active') {
    if (is_string($path)) {
        return request()->is($path) ? $active : '';
    }
    foreach ($path as $str) {
        if (checkActive($str) == $active)
            return $active;
    }
}

function getGender() {
    $cat = ['' => '-- Select Gender / लिंग चुने--',
        'Male' => 'Male / पुरुष',
        'Female' => 'Female / महिला',
        'Others' => 'Others / अन्य',
    ];
    return $cat;
}

?>