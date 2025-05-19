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
    <link rel="stylesheet" href="assets/css/mobilemin.css">
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
            <a href="reg.html">Личный кабинет</a>
            <a href="shop.html">Корзина</a>
            <a href="#Контакты">Контакты</a>
        </nav>
        <script>const burger = document.getElementById('burger');
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
</body>
</html>


