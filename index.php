<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">

    <!-- build:css css/main.css -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- endbuild -->
    <title>Scandiweb</title>
</head>

<body>
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Product List</h1>
                </div>
                <div class="offset-sm-4 col-12 col-sm-2">
                    <div class="btn-group">
                        <a href="addproduct.html" class="m-2 btn btn-sm btn-border" id="add-btn" type="button">Add</a>
                        <button type="submit" form="delete-product" class="m-2 btn btn-sm btn-border" id="delete-product-btn">MASS DELETE</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <?php
                include 'product.php';
                
                $dvd = new DVD();
                $book = new Book();
                $furniture = new Furniture();

                $dvd_result = $dvd->read();
                $book_result = $book->read();
                $furniture_result = $furniture->read();
                
                $dvd_results = array();
                $book_results = array();
                $furniture_results = array();

                while($row=mysqli_fetch_assoc($dvd_result))
                {
                    $dvd_results[] = $row;
                }
                while($row=mysqli_fetch_assoc($book_result))
                {
                    $book_results[] = $row;
                }
                while($row=mysqli_fetch_assoc($furniture_result))
                {
                    $furniture_results[] = $row;
                }
                echo '<form id="delete-product" action="deleteproduct.php" method="post">';
                for ($i = 0 ; $i<count($dvd_results) ; )
                {
                    echo '<div class="row row-content">';
                    for($j = 0 ; $j < 4 && $i<count($dvd_results) ; $j++)
                    {
                        echo '<div class="product m-auto my-4 col-6 col-sm-3 col-md-2">';
                            echo '<input class="delete-checkbox" type="checkbox" name="check[]" value= "' .$dvd_results[$i]["sku"]. '">';
                            echo '<p class="sku">' .$dvd_results[$i]["sku"]. '</p>';
                            echo '<p class="name">' .$dvd_results[$i]["name"]. '</p>';
                            echo '<p class="price">' .$dvd_results[$i]["price"]. ' $</p>';
                            echo '<p class="size"> Size: ' .$dvd_results[$i]["size"]. ' MB</p>';
                        echo '</div>';
                        $i++;
                    }
                    echo '</div>';
                }
               
                for ($i = 0 ; $i<count($book_results) ; )
                {
                    echo '<div class="row row-content">';
                    for($j = 0 ; $j < 4 && $i<count($book_results) ; $j++)
                    {
                        echo '<div class="product m-auto my-4 col-6 col-sm-3 col-md-2">';
                            echo '<input class="delete-checkbox" type="checkbox" name="check[]" value= "' .$book_results[$i]["sku"]. '">';
                            echo '<p class="sku">' .$book_results[$i]["sku"]. '</p>';
                            echo '<p class="name">' .$book_results[$i]["name"]. '</p>';
                            echo '<p class="price">' .$book_results[$i]["price"]. ' $</p>';
                            echo '<p class="size"> Weight: ' .$results[$i]["weight"]. ' KG</p>';
                        echo '</div>';
                        $i++;
                    }
                    echo '</div>';
                }

                for ($i = 0 ; $i<count($furniture_results) ; )
                {
                    echo '<div class="row row-content">';
                    for($j = 0 ; $j < 4 && $i<count($furniture_results) ; $j++)
                    {
                        echo '<div class="product m-auto my-4 col-6 col-sm-3 col-md-2">';
                            echo '<input class="delete-checkbox" type="checkbox" name="check[]" value= "' .$furniture_results[$i]["sku"]. '">';
                            echo '<p class="sku">' .$furniture_results[$i]["sku"]. '</p>';
                            echo '<p class="name">' .$furniture_results[$i]["name"]. '</p>';
                            echo '<p class="price">' .$furniture_results[$i]["price"]. ' $</p>';
                            echo '<p class="size"> Dimension: ' .$furniture_results[$i]["height"]. 'x' .$furniture_results[$i]["width"]. 'x'. $furniture_results[$i]["length"]. '</p>';
                        echo '</div>';
                        $i++;
                    }
                    echo '</div>';
                }
                echo '</form>';
            ?>
        </div>
    </header>
</body>