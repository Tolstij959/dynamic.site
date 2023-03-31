<?php

include "path.php";
include SITE_ROOT."/app/controllers/topics.php";
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
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
</head>

<body>
<?php
include("app/include/header.php"); ?>
<!--Carousel Beginning-->
<div class="container">
    <div class="row">
        <h2 class="slider-title">Это крутые фотки!!!</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/ag_9_2gM-bo.jpg" class="d-block w-100" alt="...">
                <div class="carousel carousel-caption hack carousel-caption d-none d-md-block">
                    <h5><a href=""> 1</a></h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/PXL_20220819_4.jpg" class="d-block w-100" alt="...">
                <div class="carousel carousel-caption hack carousel-caption d-none d-md-block">
                    <h5><a href="">2</a></h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/sankt-peterburg-most-lomonosov-bridge-most-lomonosova-reka-l.jpg"
                     class="d-block w-100" alt="...">
                <div class="carousel carousel-caption hack carousel-caption d-none d-md-block">
                    <h5><a href=""> 3</a></h5>

                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>
</div>
<!--Carousel END-->

<!--блок main -->
<div class="container">
    <div class="row">
        <!--Main Content-->
        <div class="main-content col-md-9 col-12">
            <h2>Последние новости</h2>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/PXL_20220610_224939469.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамического сайта...</a>
                    </h3>
                    <i class="fa-solid fa-user">Имя автора</i>
                    <i class='fa-regular fa-calendar'>Jan 30, 2023</i>
                    <p class="preview-text">
                        ...
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/PXL_20220610_224939469.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамического сайта...</a>
                    </h3>
                    <i class="fa-solid fa-user">Имя автора</i>
                    <i class="fa-regular fa-calendar">Jan 30, 2023</i>
                    <p class="preview-text">
                        И днём и ночью здесь прекрасно!
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/PXL_20220610_224939469.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамического сайта...</a>
                    </h3>
                    <i class="fa-solid fa-user">Имя автора</i>
                    <i class="fa-regular fa-calendar">Jan 30, 2023</i>
                    <p class="preview-text">
                        И днём и ночью здесь прекрасно!
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/PXL_20220610_224939469.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамического сайта...</a>
                    </h3>
                    <i class="fa-solid fa-user">Имя автора</i>
                    <i class="fa-regular fa-calendar">Jan 30, 2023</i>
                    <p class="preview-text">
                        И днём и ночью здесь прекрасно!
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/PXL_20220610_224939469.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамического сайта...</a>
                    </h3>
                    <i class="fa-solid fa-user">Имя автора</i>
                    <i class="fa-regular fa-calendar">Jan 30, 2023</i>
                    <p class="preview-text">
                        И днём и ночью здесь прекрасно!
                    </p>
                </div>
            </div>
        </div>
        <!--Sidebar Content-->
        <div class="sidebar col-md-3">

            <div class="section search">
                <h3>Поиск</h3>
                <form action="/" method="post">
                    <input type="text" name="search term" class="text-input" placeholder="Введите ваш запрос...">
                </form>
            </div>

            <div class="section topics">
                <h3>Категории</h3>
                <ul>
                    <?php
                    foreach ($topics as $key => $topic) : ?>
                        <li><a href="#"><?= $topic ['name']; ?></a></li>
                    <?php
                    endforeach; ?>
                </ul>
            </div>

        </div>
    </div>

</div>


<!--блок main END-->
<!--    footer    -->
<?php
include("app/include/footer.php"); ?>
</body>
</html>
