<h1>Создание товара</h1>
<?php
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = null;
    
    if (empty($title) || empty($description) || empty($price)) {
        $errors[] = 'заполните все поля';
    } elseif (strlen($title) < 4 || strlen($description) < 4) {
        $errors[] = 'заполните не менее 4 символами';
    } elseif (!is_numeric($price)) {
        $errors[] = 'цена должна быть числом';
    } elseif ($price < 100) {
        $errors[] = 'цена должна быть более 100 рублей';
    }

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $uploadDir = __DIR__ . '/uploads';
        $allowedTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/jpg'];
        $maxSize = 1024 * 1024 * 2;
        if (!is_dir($uploadDir)) {
            if (!mkdir($uploadDir, 0755, true)) {
                $errors[] = 'Не удалось создать папку';
            }
        } elseif (!in_array($_FILES['image']['type'], $allowedTypes)) {
            $errors[] = 'Неверное расширение изображения';
        } elseif ($_FILES['image']['size'] > $maxSize) {
            $errors[] = 'Размер файла не должен превышать 2 МБ';
        }
        else {
            $extension = pathinfo($_FILES['image']['name'], 4);
            $uniqueName = uniqid('product_', true) . '.' . $extension;
            $dir = $uploadDir . '/' . $uniqueName;
            $image = $uniqueName;
            if(!move_uploaded_file($_FILES['image']['tmp_name'], $dir)) {
                $errors[]= 'не удалось загрузить изображение';
            }
        }

    }

    if (empty($errors)) {
        $stmt = $database->query("INSERT INTO products(title, description, price, image) VALUES ('$title', '$description', $price, '$image')");
        header("Location: ./");
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="название" value="<?= $_POST['title'] ?? '' ?>">

    <textarea name="description" id="" cols="30" rows="10" placeholder="Описание">
    <?= $_POST['description'] ?? '' ?>
    </textarea>

    <input type="text" name="price" placeholder="цена" value="<?= $_POST['price'] ?? '' ?>">

    <input type="file" name="image"><br>
    <?php foreach ($errors as $error): ?>
        <div class="" style="color: indianred">
            <?= $error ?>
        </div>
    <?php endforeach; ?>
    <input type="submit" placeholder="создать">
</form>
