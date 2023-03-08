<?php

session_start();
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
    <!--CK Editor (добавление визуального редактора к текстовому полю админа )-->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
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
            echo BASE_URL."admin/posts/create.php"; ?>" class="col-2 btn btn-success">Создать</a>
            <span class="col-1"></span>
            <a href="<?php
            echo BASE_URL."admin/posts/index.php"; ?>" class="col-3 btn btn-warning">Редактировать</a>
        </div>
        <div class="row title-table">
            <h2>Добавление записи</h2>
        </div>
        <div class="row add-post">
            <form action="create.php" method="post">
                <div class="col mb-4">
                    <input type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
                </div>
                <div class="col">
                    <label for="content" class="form-label">Содержимое записи</label>
                    <textarea id="content" class="form-control" rows="6"></textarea>
                </div>
                <div class="input-group  mb-4 mt-4">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Загрузка</label>
                </div>
                <select class="form-select mb-2" aria-label="Пример выбора по умолчанию">
                    <option selected>Откройте это меню выбора</option>
                    <option value="1">Один</option>
                    <option value="2">Два</option>
                    <option value="3">Три</option>
                </select>
                <div class="col mb-2">
                    <button class="btn btn-primary" type="submit">Сохранить запись</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--    footer    -->
<?php
include("../../app/include/footer.php"); ?>
<script>src = "../../assets/js/scripts.js"</script>
</body>
<!--//FOOTER-->
