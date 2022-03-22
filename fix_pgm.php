<?php

function h($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

if ($_POST) {
    $title  = $_POST['title'] ?? '';
    $name   = $_POST['name'] ?? '';
    $email  = $_POST['email'] ?? '';
    $phone  = $_POST['phone'] ?? '';
    $body   = $_POST['body'] ?? '';

    $check1 = '';
    $check2 = '';
    $check3 = '';

    if ( $title === 'ご意見' ) {
        $check1 = 'selected';
    } else if ( $title === 'ご感想' ) {
        $check2 = 'selected';
    } else if ( $title === 'その他' ) {
        $check3 = 'selected' ;
    }
}
