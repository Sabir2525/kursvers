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
<?php
$id = $_GET['id'];
$product = $database->query("SELECT * FROM products WHERE id = $id")->fetch();
if(!$product){
    include('404.php');
    exit;
}
?>
   
    <!--  -->
    <div class="search container">
        <div class="hr">
            <a href="index.html">← Главная /</a>
            <a href="catalog.html">Каталог</a>
        </div>
        <input type="text" placeholder="поиск">
    </div>
    <div class="cardic container">
        <div class="sliders">   
            <div class="card_img slide"><img src="./uploads/<?= $product['image']?>" alt=""></div>
            <div class="card_img slide"><img src="assets/img/catalog/icon2.png" alt=""></div>
            <div class="card_img slide"><img src="assets/img/catalog/icon3.png" alt=""></div>
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
        <div class="card_tit">
            <h3><?= $product['title'] ?></h3>
            <div class="art">
                <p>Артикулk-38570347</p>
            </div>
            <div class="description">
            <?= $product['description'] ?>
                <!-- <p>Характеристики</p>
                <p><span>группа ароматов................</span> древесные, фруктовые</p>
                <p><span>верхние ноты................</span> красный виноград, черная смородина, бергамот</p>
                <p><span>средние ноты................</span> фиалка, жасмин, кедр, иланг-иланг, ветивер, черный перец
                </p>
                <p><span>объём................</span> 220 мл</p> -->
            </div>
            <div class="price">
                <p><?= $product['price'] . '₽'?></p>
                <div class="but">
                    <button class="btn">Купить сейчас</button>
                    <a href="shop.html"><button class="btn" style="background-color: #937971;">В корзину</button></a>
                </div>
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