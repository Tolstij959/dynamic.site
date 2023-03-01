<?php
    include "path.php";
    include "app/controllers/users.php";
?>

    <html lang="ru">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Oscar's blog</title>

            <!--Bootstrap CSS-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

            <!--Font Awesome-->
            <script src="https://kit.fontawesome.com/d6d9ecf3a2.js" crossorigin="anonymous"></script>
            <!--CSS Styling-->
            <link rel="stylesheet" href="assets/css/styles.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        </head>

        <body>

        <?php include ("app/include/header.php");?>
                    <!--End Header-->
                    <!--FORM-->
                <div class="container reg_form">
                     <form action="reg.php" method="post" class="row justify-content-center"  >
                         <h2>Форма регистрации</h2>
                         <div class="mb-3 col-12 col-md-4 error">
                                <p><?=$errMsg?></p>
                         </div>
                         <div class="w100"></div>
                        <div class="mb-3 col-12 col-md-4">
                            <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                            <input name="login" value="<?=$login?>" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин">
                        </div>
                         <div class="w100"></div>
                        <div class="mb-3 col-12 col-md-4">
                            <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                            <input name="email" value="<?=$email?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
                            <div id="emailHelp" class="form-text">Мы не будем спамить вам на емейл</div>
                        </div>
                         <div class="w100"></div>
                        <div class="mb-3 col-12 col-md-4">
                            <label for="exampleInputPassword1" class="form-label">Пароль</label>
                            <input type="password" name="pass-first" class="form-control" id="exampleInputPassword1">
                        </div>
                         <div class="w100"></div>
                        <div class="mb-3 col-12 col-md-4">
                            <label for="exampleInputPassword2" class="form-label">Введите пароль еще раз</label>
                            <input type="password" name="pass-second" class="form-control" id="exampleInputPassword2">
                        </div>
                         <div class="w100"></div>
                        <div class="mb-3 col-12 col-md-4">
                             <button type="submit" class="btn btn-primary" name ="button-reg">Отправить</button>
                            <a href="login.php">Войти</a>
                        </div>
                     </form>
                </div>
                    <!--    footer    -->
            <?php include ("app/include/footer.php");?>
        </body>
    </html>
