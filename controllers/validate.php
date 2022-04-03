<?php
require_once('../conf/const.php');

require_once('../model/model.php');

postDataExistCheck('title', '件名');
postDataExistCheck('name', 'お名前');
postDataExistCheck('email', 'メールアドレス');
postDataExistCheck('phone', '電話番号');
postDataExistCheck('body', 'お問い合わせ内容');
postToSession();
stringCheck('title');
stringCheck('name');
stringCheck('body');
emailCheck('メールアドレス');
phoneCheck('電話番号');

hasError() ? header('Location:../index.php') : header('LOcation:./confirm.php');