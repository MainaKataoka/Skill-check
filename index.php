<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>お問い合わせ</title>
</head>
<body>
    <div class="main">
        <h1>お問い合わせフォーム</h1>
        <form method="post" action="confirm.php">
            <div class="content">
                <span>※必須</span>　件名 : 
                <select name="title">
                    <option value="ご意見">ご意見</option>
                    <option value="ご感想">ご感想</option>
                    <option value="その他">その他</option>
                </select>
            </div>
            <div class="content">
                <span>※必須</span>　お名前 : <input type="textbox" name="name" placeholder="片岡　舞菜" required>
            </div>
            <div class="content">
                <span>※必須</span>　e-mail : <input type="textbox" name="email" placeholder="maina@email.com" required>
            </div>
            <div class="content">
                <span>※必須</span>　電話番号 : <input type="textbox" name="phone" placeholder="12345678910" required>
            </div>
            <div class="content">
                <span>※必須</span>　お問い合わせ内容<br>
                <textarea name="body" rows="5" cols="40" required></textarea>
            </div>
            <div class="button">
                <input type="submit" value="確認画面へ進む">
            </div>
        </form>
    </div>
</body>
</html>