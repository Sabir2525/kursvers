<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo/logootd.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/planshet.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
</head>

<body>
    <header>
        <section class="container">
            <div class="logo">
                <img src="assets/img/logo/logo1.png" alt="">
            </div>
            <div class="tit">
                <p>+7 999 999 99 99</p>
                <p>г. Казань, Гвардейская 18</p>
            </div>
            <div class="butor">
                <a href="shop.html">
                    <img src="assets/img/header/Group5.png" alt="">
                </a>
                <a href="auto.html">
                    <button class="btn"><img src="assets/img/header/Group3.png" alt="">Личный кабинет</button>
                </a>
            </div>
            <div class="burger-label" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </section>
        <nav class="burger-menu" id="navMenu">
            <img src="assets/img/logo/logo1.png" alt="">
            <a href="catalog.html">Каталог</a>
            <a href="#">Личный кабинет</a>
            <a href="shop.html">Корзина</a>
            <a href="#Контакты">Контакты</a>
        </nav>
        <script>
            const burger = document.getElementById('burger');
            const navMenu = document.getElementById('navMenu');
            burger.addEventListener('click', () => {
                // Переключаем класс active для навигации
                navMenu.classList.toggle('active');
                // Меняем цвет бургер-меню при открытии
                for (const span of burger.children) {
                    span.classList.toggle('active');
                }
            });
        </script>
    </header>
    <!--  -->
    <?php


    ?>

    <?php

    ?>



    <div class="regis container">
        <form action="reg.php" method="post">
            <div class="regis_block">
                <h2>Регистрация</h2>
                <div class="inp">
                    <input type="text" placeholder="Номер телефона" name="tel">
                    <?php

                    if (isset($_POST['tel'])) {
                        $tel = $_POST['tel']; // Получаем номер из формы

                        if (empty($tel)) {
                            echo 'Номер не введен';
                            $flag = false;
                        } else {
                            // Проверяем, есть ли такой номер в БД
                            $stmt = $database->prepare("SELECT * FROM users WHERE tel = :tel");
                            $stmt->bindParam(':tel', $tel);
                            $stmt->execute();

                            $count = $stmt->fetchColumn();

                            if ($count > 0) {
                                echo 'Этот номер уже зарегистрирован';
                                $flag = false;
                            }
                        }
                    }
                    ?>
                    <input type="text" placeholder="Имя" name="name">
                    <?php
                    if (isset($_POST['name'])) {
                        if (empty($name)) {
                            echo 'Имя не введено';
                            $flag = false;
                        }
                    }
                    ?>
                    <div class="eye">
                        <input type="text" placeholder="Придумайте пароль" name="password">
                        <br><?php
                            if (isset($_POST['password']) && empty($_POST['password'])) {
                                echo 'пароль не введен';
                                $flag = false;
                            }
                            ?>

                    </div>
                    <div class="rem">
                        <img src="assets/img/autoreg/gay.png" alt="">
                        <p>Запомнить меня</p>
                    </div>
                </div>
                <div class="btt">
                    <button type="submit" class="btn">Зарегистрироваться</button>
                </div>
        </form>
        <div class="politic">
            <p>При регистрации и входе вы соглашаетесь</p>
            <p> с условиями использования и политикой</p>
            <p> конфиденциальности.</p>
        </div>
    </div>
    </div>


    <footer>
        <section class="container">
            <div class="logo">
                <img src="assets/img/logo/logo1.png" alt="">
            </div>
            <div class="soc">
                <img src="assets/img/footer/icon1.png" alt="">
                <img src="assets/img/footer/icon2.png" alt="">
            </div>
            <div class="tit">
                <p>+7 999 999 99 99</p>
                <p>г. Казань, Гвардейская 18</p>
            </div>
            <div class="butor">
                <img src="assets/img/footer/shop.png" alt="">
                <button class="btn"><img src="assets/img/footer/reg.png" alt="">Личный кабинет</button>
            </div>
        </section>
        <center>
            <div class="cop">@ИсаевСабир327ВЕБ</div>
        </center>
    </footer>
</body>

</html>