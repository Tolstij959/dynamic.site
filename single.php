<?php

include("path.php"); ?>s
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


<!--блок main -->
<div class="container">
    <div class="row">
        <!--Main Content-->
        <div class="main-content col-md-9 col-12">
            <h2>Т.к. это страница блога, то позже пломестим сюда побольше текста</h2>

            <div class="single_post row">
                <div class="img col-12">
                    <img src="assets/images/PXL_20220610_224939469.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="info">
                    <i class="fa-solid fa-user">Имя автора</i>
                    <i class='fa-regular fa-calendar'>Jan 30, 2023</i>
                </div>
                <div class="single_post_text col-12">

                    <h3>Текст-рыба</h3>
                    <p> Разнообразный и богатый опыт постоянное информационно-пропагандистское <a
                                href="#">обеспечение</a> нашей деятельности требуют определения и уточнения дальнейших
                        направлений развития. Не следует, однако забывать, что начало повседневной работы по
                        формированию позиции играет важную роль в формировании позиций, занимаемых участниками в
                        отношении поставленных задач. Не следует, однако забывать, что начало повседневной работы по
                        формированию позиции в значительной степени обуславливает создание направлений прогрессивного
                        развития.

                        Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности
                        требуют от нас анализа модели развития. Значимость этих проблем настолько очевидна, что
                        реализация намеченных плановых заданий позволяет оценить значение существенных финансовых и
                        административных условий. Идейные соображения высшего порядка, а также укрепление и развитие
                        структуры в значительной степени обуславливает создание дальнейших направлений развития.</p>

                    <h3> О сайте</h3>
                    <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более
                        менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных
                        выступлений в домашних условиях. При создании генератора мы использовали небезизвестный
                        универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти
                        предложений в абзаце, что позволяет сделать текст более привлекательным и живым для
                        визуально-слухового восприятия.</p>

                    <p>По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у
                        некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст
                        рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит
                        советских времен.</p>
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
                    <li><a href="#">Окружение</a></li>
                    <li><a href="#">Люди</a></li>
                    <li><a href="#">Моменты</a></li>
                    <li><a href="#">Биография</a></li>
                    <li><a href="#">Вдохновляющее</a></li>
                    <li><a href="#">Животные</a></li>
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
