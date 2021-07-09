<?php

$checked_items = $_POST["check"];

include 'product.php';

$dvd = new DVD();
$dvd->remove($checked_items);

$furniture = new Furniture();
$furniture->remove($checked_items);

$book = new Book();
$book->remove($checked_items);

echo '<script> window.location="index.php" </script>';
?>