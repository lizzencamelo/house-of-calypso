<?php
    session_start();
    require "include/database_connect.php";

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id']:NULL;
    $product_category = isset($_GET['category']) ? $_GET['category']: "Mugs";

    $sql1 = "SELECT * FROM product_category WHERE category_name='$product_category'";
    $result1 = mysqli_query($conn, $sql1);
    if(!$result1) {
        echo "Something went wrong!";
        return;
    }
    $category = mysqli_fetch_assoc($result1);
    if(!$category) {
        echo "Sorry! We do not have any products in this categroy.";
        return;
    }
    $product_category_id = $category['product_category_id'];

    $sql2 = "SELECT * FROM products WHERE product_category_id='$product_category_id'";
    $result2 = mysqli_query($conn, $sql2);
    if(!$result2) {
        echo "Something went wrong!";
        return;
    }
    $products = mysqli_fetch_all($result2, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> House of Calypso | <?= $product_category ?></title>   

    <?php
        include "include/all_links.php";
    ?>

    <link href="css/shop.css" rel="stylesheet">
</head>
<body>

    <div class="shop-header">
        <a href="cart.php" class="shop-cart-button"><i class='bx bx-shopping-bag'></i></a>
    </div>

    <div class="shop-landing">
        <div class="shop-title">
            <a href="home.php">
                <h1>house of calypso</h1>
            </a>
        </div>        
        <div class="product-menu">
            <a href="shop.php?category=Mugs">Mugs</a>
            <a href="shop.php?category=Plates">Plates</a>
            <a href="shop.php?category=Bowls">Bowls</a>
            <a href="shop.php?category=Jugs">Jugs</a>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <?php
                if (count($products) > 0) { 
                    foreach($products as $product) {
                        $product_images = glob("img/products/".$product['product_id']."/*");                    
            ?>
            <div class="col-md-3">
                <div class="content">
                    <div class="image-container">
                        <img src="<?= $product_images[0] ?>" alt="" />
                    </div> 
                    <div class="content-container">
                        <div class="product-material"><?= $product['material'] ?></div>
                        <div class="product-title"><?= $product['name'] ?></div>
                        <div class="product-price">&#x20B9; <?= number_format($product['price']); ?></div>
                        <div class="button-container">
                            <a href="shop_product.php?product_id=<?= $product['product_id'] ?>" class="">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                } 
            } else {
            ?>
            <!--Stylise no product to display-->
            <div class="no-product-container">
                <p>No products to list.</p>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    <?php 
        include "include/footer.php"
    ?>
    <script src="js/shop.js" type="text/javascript"></script>
</body>
</html>