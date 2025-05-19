<?php
$id = $_GET['id'];
$product = $database->query("SELECT * FROM products WHERE id = $id")->fetch();
if(!$product){
    include('404.php');
    exit;
}
?>

<h1>Название: <?= $product['title'] ?></h1>
<br>
<p>Описание: <?= $product['description'] ?></p>
<br>
<p>Цена: <?= $product['price'] ?></p>
<br>
<img src="./uploads/<?= $product['image']?>" alt="">
<br>
<a href="./?page=edit&id=<?= $product['id'] ?>">Редактировать</a>
<a href="./?page=delete&id=<?= $product['id'] ?>">Удалить</a>

