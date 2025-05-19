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
    <div class="search container">
        <div class="hr">
            <a href="index.html">← Главная /</a>
            <a href="catalog.html" style="font-weight: 700;">КАТАЛОГ</a>
        </div>
        <input type="text" placeholder="поиск">
    </div>
    <div class="catalog2 container">
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
        <div class="elipces container">
            <div class="elipce" style="background-color: #373535;"></div>
            <div class="elipce"></div>
            <div class="elipce"></div>
            <div class="elipce"></div>
            <div class="elipce"></div>
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
        <center><div class="cop">@ИсаевСабир327ВЕБ</div></center>
    </footer>  
</body>

</html>