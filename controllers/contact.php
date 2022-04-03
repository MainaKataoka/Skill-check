<?php
require_once('../conf/const.php');

require_once('../model/model.php');

$link = db_connect();
mysqli_set_charset($link, 'utf8');

if (hasError() === false) {
    insertContact($link) ? $title = '登録完了' : $title = '登録失敗';
}

include_once('../views/contact_view.php');