<?php
$host = 'localhost';
$dbname = 'Kurs';
$name = 'root';
$password = '';

try{
    $database = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8;", $name, $password);
}catch(PDOException $error){
    die('vfdhbbg' . $error->getMessage());
}

?>