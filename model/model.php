<?php

function h($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function postDataExistCheck($key, $name) {
    if (isset($_POST[$key]) === false) {
        setError($name . 'を入力してください');
    } else if ($_POST[$key] === '') {
        setError($name . 'を入力してください');
    }
}

function stringCheck($key) {
    if (is_string($_SESSION['post'][$key]) === false) {
        setError('不正な文字が含まれています');
    }
}

function emailCheck($name) {
    if (filter_var($_SESSION['post']['email'], FILTER_VALIDATE_EMAIL) === false) {
        setError($name . 'の形式で入力してください');
    }
}

function phoneCheck($name) {
    if (is_numeric($_SESSION['post']['phone']) === false) {
        setError($name . 'は数字で入力してください');
    }
}

function setError($message) {
    $_SESSION['errors'][] = $message;
}

function hasError() {
    return count($_SESSION['errors']) > 0;
}

function postToSession() {
    foreach ($_POST as $key=>$post) {
        $_SESSION['post'][$key] = $post;
    }
}

function displayPostedData($key) {
    if (isset($_SESSION['post'][$key])) {
        return $_SESSION['post'][$key];
    } else {
        return '';
    }
}

function displaySelected($key, $name) {
    if (displayPostedData($key) === $name) {
        return 'selected';
    } else {
        return '';
    }
}

function db_connect() {
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($link) {
        mysqli_set_charset($link, 'utf8');
        return $link;
    } else {
        setError('データベースに接続できません');
    }
}

function insertContact($link) {
    $sql = "insert into contact(title, name, email, phone, body, created_at) value('{$_SESSION['post']['title']}', '{$_SESSION['post']['name']}', '{$_SESSION['post']['email']}', '{$_SESSION['post']['phone']}', '{$_SESSION['post']['body']}', now())";
    $result = mysqli_query($link, $sql);
    if ($result === false) {
        setError('入力に失敗しました');
    }
    return $result;
}

function createCSRFToken($length) {
    $_SESSION['csrf_token'] = substr(bin2hex(random_bytes($length)), 0, $length);
}

function tokenCheck() {
    if (isset($_POST['csrf_token']) === true
        && isset($_SESSION['csrf_token']) === true
        && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
            return true;
        } else {
            setError('不正なアクセスです');
            return false;
        }
}