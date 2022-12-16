<?php
    session_start();
    require "include/database_connect.php";

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
    $product_id = $_GET['product_id'];

    $sql1 = "SELECT * FROM products WHERE product_id='$product_id'";
    $result1 = mysqli_query($conn, $sql1);
    if(!$result1) {
        echo "Something went wrong!";
        return;
    }
    $product = mysqli_fetch_assoc($result1);
    if(!$product){
        echo "Something went wrong!";
        return;
    }

    $in_stock = $product['stock'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House of Calypso | <?= $product['name'] ?> </title>
    
    <?php
        include "include/all_links.php";
    ?>

    <link href="css/shop_product.css" rel="stylesheet">
</head>
<body>
    <div class="shop-header">
        <span><a href="shop.php?category=Mugs">shop</a></span>
        <a href="cart.php" class="shop-cart-button"><i class='bx bx-shopping-bag'></i></a>
    </div>
    <div class="product-page-container">
        <div class="container">
            <?php
                $product_images = glob("img/products/".$product['product_id']."/*");
            ?>
            <div class="product-image" >
                <img src="<?= $product_images[0] ?>" alt=""/>
            </div>
            <div class="product-description">
                <div class="product-material"><?= $product['material'] ?></div>
                <h1 class="product-title"><?= $product['name'] ?></h1>
                <div class="product-details py-3"><?= $product['description'] ?></div>
                <div class="product-colour py-3"><?= $product['colour'] ?></div>
                <div class="product-dimensions pb-5"><?= $product['measurements'] ?></div>
                <div class="row">
                    <div class="product-price col-6 d-flex flex-column"><span class="tag">Price</span> &#x20B9; <?= number_format($product['price']); ?></div>
                    <form action="api/cart_submit.php" method="post">
                        <div class="col-6  d-flex flex-column">
                            <span class="tag">Quantity</span>
                            <input type="number" class="quantity" name="quantity" value="1" min="1" max="<?=$product['stock']?>" required>
                        </div>
                </div>

                        <input type="hidden" name="product_id" value="<?=$product['product_id']?>">
                        <div class="add-to-cart">
                        <?php
                            if ($in_stock) {
                        ?>
                            <input type="submit" class="add-to-cart-btn" value="Add To Cart">
                        <?php
                            } else {
                        ?>
                        <!-- Test disabled and style -->
                            <input type="submit" value="Out of Stock" disabled>
                        <?php
                            }
                        ?>
                        </div>
                    </form>
            </div>
        </div>
    </div>


    <?php 
        include "include/footer.php"
    ?>
    <script src="js/shop_product.js" type="text/javascript"></script>
</body>
</html>