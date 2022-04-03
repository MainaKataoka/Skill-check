<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <h1><?php echo $title; ?></h1>
        <ul>
            <?php foreach ($_SESSION['errors'] as $error) { ?>
            <li id="error"><?php echo h($error); ?></li>
            <?php } ?>
            <?php $_SESSION['errors'] = []; ?>
        </ul>

        <form method="POST" action="controllers/validate.php">
        <input type='hidden' name='csrf_token' value='<?= $_SESSION['csrf_token']; ?>'>
            <div class="content">
                <span>※必須</span>　<label for="title">件名 : </label>
                <select id="title" name="title">
                    <option></option>
                    <?php foreach ($titles as $t) { ?>
                    <option <?php echo displaySelected('title', $t)?>><?php echo $t; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="content">
                <span>※必須</span>　<label for="name">お名前 : </label>
                <input id="name" type="textbox" name="name" value="<?php echo displayPostedData('name') ?>">
            </div>
            <div class="content">
                <span>※必須</span>　<label for="email">e-mail : </label>
                <input id="email" type="textbox" name="email" value="<?php echo displayPostedData('email') ?>">
            </div>
            <div class="content">
                <span>※必須</span>　<label for="phone">電話番号 : </label>
                <input id="phone" type="text" name="phone" value="<?php echo displayPostedData('phone') ?>">
            </div>
            <div class="content">
                <span>※必須</span>　<label for="body">お問い合わせ内容<br></label>
                <textarea name="body" rows="5" cols="40"><?php echo displayPostedData('body') ?></textarea>
            </div>
            <div class="button">
                <input type="submit" value="確認画面へ進む">
            </div>
        </form>
    </div>
</body>
</html>