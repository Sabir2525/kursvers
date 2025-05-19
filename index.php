<?php
include('assets/database/connection.php');
include('head.php');


?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>этерия</title>
</head>

<body>
    <?php
    include('header.php');
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        if ($page === 'create') {
            include('create.php');
        } elseif ($page === 'edit' && !empty($_GET['id'])) {
            include('edit.php');
        } elseif ($page === 'delete' && !empty($_GET['id'])) {
            include('delete.php');
        } elseif ($page === 'show' && !empty($_GET['id'])) {
            include('show.php');
        } elseif ($page === 'card' && !empty($_GET['id'])) {
            include('card.php');
        } elseif ($page === 'catalog') {
            include('catalog.php');
        } else {
            include('404.php');
        }
    } else {
        include('main.php');
    }
    ?>
</body>

</html>