<?php

include "app/database/db.php";

$errMsg = '';
function userAuth($value)
{
    $_SESSION ['id']    = $value['id'];
    $_SESSION ['login'] = $value ['username'];
    $_SESSION ['admin'] = $value['admin'];

    if ($_SESSION ['admin']) {
        header('location: '.BASE_URL.'admin/posts/index.php');
    } else {
        header('location: '.BASE_URL);
    }
}

;


// Код для формы регистрации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if ($login === '' || $email === '' || $passF === '') {
        $errMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($login, 'UTF-8') < 2) {
        $errMsg = "Длина логина должна быть не короче 2-х символов !";
    } elseif ($passF !== $passS) {
        $errMsg = "Пароли в обоих полях должны быть одинаковыми !";
    } else {
        $existence = selectOne('users', ['email' => $email]);
        if ( ! empty($existence['email']) && $existence['email'] === $email) {
            $errMsg = "Пользователь с таким емейл уже зарегистрирован !";
        } else {
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin'    => $admin,
                'username' => $login,
                'email'    => $email,
                'password' => $pass,
            ];
            $id   = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);
            userAuth($user);
        }
    }
} else {
    $login = '';
    $email = '';
}

// Код для формы авторизации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
    $email = trim($_POST['email']);
    $pass  = trim($_POST['password']);

    if ($email === '' || $pass === '') {
        $errMsg = "Не все поля заполнены!";
    } else {
        $existence = SelectOne('users', ['email' => $email]);
        if ($existence && password_verify($pass, $existence['password'])) {
            userAuth($existence);
        } else {
            $errMsg = "Неправильно введен емейл или пароль!";
        }
    }
} else {
    $email = '';
}


