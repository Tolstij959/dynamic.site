<?php

include("path.php"); ?>
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
            <h2>О нас</h2>

            <div class="single_post row">

                <div class="info">
                    <!--Information about me plus Yandex map-->
                </div>
                <div class="single_post_text col-12">
                    <p>В 1547 году великий князь московский Иван IV Грозный венчался на царство и стал, таким образом,
                        первым российским царём. В 1549 году был созван первый сословно-представительный орган — Земский
                        собор. Было создано вооружённое огнестрельным оружием стрелецкое войско. Уложение о службе
                        1555—1556 годов обязало всех землевладельцев выставлять воинов пропорционально площади
                        земли.</p>

                    <p>Оседлое население Орды включало волжских булгар, мордовские народы, славян, греков и др. Среди
                        кочевых народов были половцы, канглыи, татары, туркмены, киргизы и другие.</p>

                    <p>Почти сразу после этого на юге возникла Галицкая митрополия, а затем Литовская, существовавшие
                        впоследствии с перерывами. Киевский митрополит в 1325 году вторично поменял резиденцию, переехав
                        в Москву. Впоследствии великие княжества Московское и Литовское стремились к тому, чтобы именно
                        их претендент занимал общерусскую митрополию или как минимум был свой митрополит в те периоды,
                        когда общерусская митрополия контролировалась «чужим» претендентом.</p>
                    <div class="contact">
                        <div class="container">
                            <h3>Как найти меня </h3>
                            <p>Ниже мое местоположение</p>
                            <div>
                                <script type="text/javascript" charset="utf-8" async
                                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0378236b80c430e7e0f9a489e021e1a378331b496f1530021d312becdfa0daa8&amp;width=940&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
                            </div>
                        </div>
                    </div>

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
