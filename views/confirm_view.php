<?php //var_dump($$errors); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="main">
        <h1><?php echo $title; ?></h1>
        <p>以下の内容で送信しますか？</p>
        <div id="confirm_content">
            <dl>
                <dt>件名</dt>
                <dd><?php echo displayPostedData('title'); ?></dd>
                <dt>氏名</dt>
                <dd><?php echo displayPostedData('name'); ?></dd>
                <dt>e-mail</dt>
                <dd><?php echo displayPostedData('email'); ?></dd>
                <dt>電話番号</dt>
                <dd><?php echo displayPostedData('phone'); ?></dd>
                <dt>お問い合わせ本文</dt>
                <dd><?php echo displayPostedData('body'); ?></dd>
            </dl>
        </div>
        <button type="button" onclick="location.href='../index.php'">修正</button>
        <button type="button" onclick="location.href='contact.php'">登録</button>
    </div>
</body>
</html>