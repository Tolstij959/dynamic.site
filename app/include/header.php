<header class="container-fluid">
    <div class="container">
        <div class="row align-items-start>">
            <div class="col-4">
                <h1>
                    <a href="<?php
                    echo BASE_URL ?>">My blog</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php
                        echo BASE_URL ?>">Главная</a></li>
                    <li><a href="<?php
                        echo BASE_URL.'about_us.php' ?>">Обо мне</a></li>
                    <li><a href="#">Услуги</a></li>

                    <li>
                        <?php
                        if (isset($_SESSION['id'])): ?>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <?php
                                echo $_SESSION ['login']; ?>
                            </a>
                            <ul>
                                <?php
                                if ($_SESSION['admin']): ?>
                                    <li><a href="<?php
                                        echo BASE_URL.'login.php' ?>">Админка</a></li>
                                <?php
                                endif; ?>
                                <li><a href="#">Выход</a></li>
                            </ul>
                        <?php
                        else: ?>
                            <a href="<?php
                            echo BASE_URL.'login.php' ?>">
                                <i class="fa fa-user"></i>
                                Войти
                            </a>
                            <ul>
                                <li><a href="<?php
                                    echo BASE_URL.'reg.php' ?>">Регистрация</a></li>
                            </ul>
                        <?php
                        endif; ?>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
