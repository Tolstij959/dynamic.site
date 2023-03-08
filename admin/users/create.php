<?php

session_start();
include "../../path.php";
include "../../app/controllers/users.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oscar's blog</title>

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/d6d9ecf3a2.js" crossorigin="anonymous"></script>
    <!--CSS Styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
</head>

<body>
<?php
include("../../app/include/header-admin.php"); ?>

<div class="container">
    <?php
    include("../../app/include/sidebar-admin.php"); ?>
    <div class="posts col-9">
        <div class="button row">
            <a href="<?php
            echo BASE_URL."admin/users/create.php"; ?>" class="col-2 btn btn-success">Создать</a>
            <span class="col-1"></span>
            <a href="<?php
            echo BASE_URL."admin/users/index.php"; ?>" class="col-3 btn btn-warning">Редактировать</a>
        </div>
        <div class="row title-table">
            <h2>Создать пользователя</h2>
        </div>
        <div class="row add-post">
            <form action="create.php" method="post">
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                    <input name="login" value="<?= $login ?>" type="text" class="form-control"
                           id="formGroupExampleInput"
                           placeholder="Введите ваш логин">
                </div>
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                    <input name="email" value="<?= $email ?>" type="email" class="form-control"
                           id="exampleInputEmail1"
                           placeholder="Введите ваш емейл">
                    <!--                   aria-describedby="emailHelp" -->
                </div>
                <div class="col">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" name="pass-first" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col">
                    <label for="exampleInputPassword2" class="form-label">Введите пароль еще раз</label>
                    <input type="password" name="pass-second" class="form-control" id="exampleInputPassword2">
                </div>
                <select class="form-select" aria-label="Пример выбора по умолчанию">
                    <option selected>user</option>
                    <option value="1">admin</option>
                </select>
                <div class="col">
                    <button class="btn btn-primary" type="submit">Создать</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--    footer    -->
<?php
include("../../app/include/footer.php"); ?>
</body>
<!--//FOOTER-->

