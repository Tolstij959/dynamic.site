<?php include ("path.php");?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
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
  <form class="row justify-content-center" method="post" action="login.php">
    <h2 class="col-12">Авторизация</h2>
    <div class="mb-3 col-12 col-md-4">
      <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин">
    </div>
    <div class="w100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="w100"></div>
    <div class="mb-3 col-12 col-md-4">
      <button type="submit" class="btn btn-primary">Войти</button>
      <a href="reg.php">Зарегистрироваться</a>
    </div>
  </form>
</div>
<!--    footer    -->
    <?php include ("app/include/footer.php");?>
</body>
</html>
