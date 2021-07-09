<?php
    include 'product.php';

    // echo 'hi2';
    $type_switcher = $_POST["type-switcher"];
    switch($type_switcher)
    {
        case "DVD-disc":
            $dvd = new DVD($_POST);
            // echo 'hi';
            $dvd->save();
            // echo 'hi2';
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