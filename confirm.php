<?php
require('confirm_pgm.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>確認画面</title>
</head>
<body>
    <div class="main">
        <h1>確認画面</h1>
        <p>以下の内容で送信しますか？</p>
        <div id="confirm_content">
            <dl class="wi">
                <dt>件名</dt>
                <dd><?php echo h($title); ?></dd>
                <dt>氏名</dt>
                <dd><?php echo h($name); ?></dd>
                <dt>e-mail</dt>
                <dd><?php echo h($email); ?></dd>
                <dt>電話番号</dt>
                <dd><?php echo h($phone); ?></dd>
                <dt>お問い合わせ本文</dt>
                <dd><?php echo h($body); ?></dd>
            </dl>
        </div>
        <div class="button">
            <form method="post" action="fix.php">
                <input type="hidden" name="title" value="<?php echo $title; ?>">
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                <input type="hidden" name="body" value="<?php echo $body; ?>">
                <input type="submit" value="修正">
            </form>
        </div>
        <div class="button">
            <form method="post" action="finish.php">
                <input type="hidden" name="title" value="<?php echo $title; ?>">
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                <input type="hidden" name="body" value="<?php echo $body; ?>">
                <input type="submit" value="送信">
            </form>
        </div>
    </div>
</body>
</html>