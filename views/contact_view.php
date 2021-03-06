<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="main">
        <ul>
            <?php foreach ($_SESSION['errors'] as $error) { ?>
            <li id="error"><?php echo h($error); ?></li>
            <?php } ?>
            <?php $_SESSION['errors'] = []; ?>
        </ul>

        <h1><?php echo $title; ?></h1>
        <p>お問い合わせを受け付けました。</p>
    </div>
</body>
</html>