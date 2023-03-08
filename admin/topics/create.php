<?php

session_start();
include "../../path.php";
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
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
    <div class="row">
        <div class="sidebar col-3">
            <ul>
                <a href="">Записи</a>
            </ul>
            <ul>
                <a href="">Пользователи</a>
            </ul>
            <ul>
                <a href="">Категории</a>
            </ul>
        </div>

        <div class="posts col-9">
            <div class="button row">
                <a href="create.php" class="col-2 btn btn-success">Создать категорию</a>
                <span class="col-1"></span>
                <a href="index.php" class="col-3 btn btn-warning">Управлять категориями</a>
            </div>
            <div class="row title-table">
                <h2>Создать категорию</h2>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Название категории"
                               aria-label="Название категории">
                    </div>
                    <div class="col">
                        <label for="content" class="form-label">Описание категории</label>
                        <textarea class="form-control" id="content" rows="6"></textarea>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Создать категорию</button>
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
