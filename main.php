<?php

?>

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


    <!--  -->
    <div class="banner">
        <div class="ban_tit container">
            <h1>Дарим <span>30%</span> скидки <br>
                за регистрацию</h1>
            <p>На покупку в нашем магазине</p>
        </div>
    </div>
    <!--  -->

    <!--  -->
    <!--  -->
    <div class="catalog container">
        <h2>Каталог</h2>
        <div class="filtr">
            <button style="background-color: #937971; color: white; padding: 13px 29px;">Все</button>
            <button>Без запаха</button>
            <button>Арома</button>
            <button>Скидки</button>
        </div>
        <?php
            $products = $database->query("SELECT * FROM products")->fetchAll();
            ?>
        <?php if (!empty($products)): ?>
               
        <div class="catalog_cards">
        <?php foreach ($products as $product):
                ?>
            <div class="slide1">
                <div class="card">
                <img src="./uploads/<?= $product['image'] ?>" alt="">
                    <div class="card_tit">
                        <h3><?= $product['title'] ?></h3>
                        <div class="price">
                            <p><?= $product['price'] . '₽' ?></p>
                            <a href="./?page=card&id=<?= $product['id'] ?>"><button class="btn" >В корзину</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
                <p>Товаров нет</p>
            <?php endif; ?>
        </div>
        <center>
            <a href="catalog.php">
                <button class="btn1">Перейти в каталог <span>→</span></button>
            </a>
        </center>
    </div>

    <!--  -->
    <!--  -->

    <div class="catalog1 container">
        <h2>Каталог</h2>
        <div class="filtr">
            <button style="background-color: #937971; color: white; padding: 13px 29px;">Все</button>
            <button>Без запаха</button>
            <button>Арома</button>
            <button>Скидки</button>
        </div>

        <div class="catalog_cards">
            <div class="slide">
                <div class="card">
                    <img src="assets/img/catalog/icon1.png" alt="">
                    <div class="card_tit">
                        <h3>Tonka Perfumes Moscow</h3>
                        <div class="price">
                            <p>18 000₽</p>
                            <button class="btn">В корзину</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="card">
                    <img src="assets/img/catalog/icon2.png" alt="">
                    <div class="card_tit">
                        <h3>12 Legends Taiga</h3>
                        <div class="price">
                            <p>20 000₽</p>
                            <button class="btn">В корзину</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="card">
                    <img src="assets/img/catalog/icon3.png" alt="">
                    <div class="card_tit">
                        <h3>ESSENTIAL PARFUMS PARIS ORANGE X <br> SANTAL by Natalie Gracia-Cetto</h3>
                        <div class="price">
                            <p>22 000₽</p>
                            <button class="btn">В корзину</button>
                        </div>
                    </div>
                </div>
            </div>
            <button id="nextBtn">></button>
        </div>

        <script>
            const slides = document.querySelectorAll('.slide')
            let currentIndex = 0
            slides[currentIndex].classList.add('active')

            document.getElementById('nextBtn').addEventListener('click', () => {
                slides[currentIndex].classList.remove('active')

                if (currentIndex === slides.length - 1) {
                    currentIndex = 0
                } else {
                    currentIndex++
                }

                slides[currentIndex].classList.add('active')
            })
        </script>
        <center>
            <a href="./?page=catalog">
                <button class="btn1">Перейти в каталог <span>→</span></button>
            </a>
        </center>
    </div>

    <!--  -->
    <div class="contact container" id="Контакты">
        <div class="contact_img">
            <img src="assets/img/contact/contact.png" alt="">
        </div>
        <div class="contact_tit">
            <h3>Заказать доставку</h3>
            <div class="contact_form">
                <p>Ваше имя:</p>
                <input type="text">
                <p>Ваш телефон:</p>
                <input type="text">
                <p>Ваш e-mail:</p>
                <input type="text">
                <button class="btn">Заказать звонок</button>
            </div>
        </div>
    </div>
    <!--  -->
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