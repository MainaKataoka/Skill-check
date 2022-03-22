<?php

if ($_POST) {
    // メール設定
    mb_language("japanese");
    mb_internal_encoding("UTF-8");
    

    $title  = $_POST['title'] ?? '';
    $name   = $_POST['name'] ?? '';
    $email  = $_POST['email'] ?? '';
    $phone  = $_POST['phone'] ?? '';
    $body   = $_POST['body'] ?? '';

    $to         = $email;
    $subject    = $title;
    $message    = 'お名前:　' . $name . "\n" . 'email:　' . $to . "\n" . '電話番号:　' . $phone . "\n" . 'お問い合わせ本文:　' . $body;

    if ( mb_send_mail($to, $subject, $message, 'test@test.com', ) ) {
        echo 'メールを送信しました';
    } else {
        echo 'メールの送信に失敗しました';
    };

    // $db = 'mysql:dbname=codelike_web_mysql;host=localhost:13306;charset=utf8';
    // $user = 'root';
    // $password = 'password';

    // $params = [
    //     'id' => null,
    //     'name' => $name,
    //     'email' => $email,
    //     'phone' => $phone,
    //     'body' => $body,
    // ];

}

