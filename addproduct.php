<?php
    include 'product.php';

    $type_switcher = $_POST["type-switcher"];
    switch($type_switcher)
    {
        case "DVD":
            $dvd = new DVD($_POST);
            $dvd->save();
            break;
        case "Furniture":
            $furniture = new Furniture($_POST);
            $furniture->save();
            break;
        case "Book":
            $book = new Book($_POST);
            $book->save();
            break;
    }
?>