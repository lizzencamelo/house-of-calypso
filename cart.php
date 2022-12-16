<?php
    session_start();
    require "include/database_connect.php";
    
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
    
    if (!$user_id) {
        echo "<script>
                alert('Please login to view and add items to cart!');
                window.location.href= 'home.php';
            </script>";
    }

    $sql1 = "SELECT * FROM cart
                INNER JOIN products
                ON cart.product_id = products.product_id
                WHERE user_id='$user_id'";
    $result1 = mysqli_query($conn, $sql1);
    if(!$result1) {
        echo "Something went wrong!";
        return;
    }
    $cart_products = mysqli_fetch_all($result1, MYSQLI_ASSOC);

    $sql2 = "SELECT * FROM products";
    $result2 = mysqli_query($conn, $sql2);
    if(!$result2) {
        echo "Something went wrong!";
        return;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House of Calypso | Your Cart</title>
    
    <?php
        include "include/all_links.php";
    ?>

    <link href="css/cart.css" rel="stylesheet">
</head>
<body>


    <div class="shop-header">
        <a href="home.php">house of calypso</a>
        <span><a href="shop.php?category=Mugs">shop</a></span>
    </div>
    
    <div class="row">
        <div class="col-md-8 your-cart">
            <div class="row">
                <div class="col"><h1>Your Cart</h1></div>
            </div>
            <div class="row cart-menu">
                <div class="col-3"><h4>Products</h4></div>
                <div class="col-4"><h4>Description</h4></div>
                <div class="col-2"><h4>Quantity</h4></div>
                <div class="col-2"><h4>Price</h4></div>
                <div class="col-1"><h4>Delete</h4></div>
            </div>
            <?php 
                $subtotal = 0;
                $shipping = 100;
                foreach ($cart_products as $cart_product) {
                    $product_images = glob("img/products/".$cart_product['product_id']."/*");
                    $subtotal = $cart_product['price']*$cart_product['quantity'] + $subtotal ;
            ?>
            <div class="row cart-item">
                <div class="col-3 image-container">
                    <img src="<?= $product_images[0] ?>" alt="" />
                </div>
                <div class="col-4 "><h2><?= $cart_product['name'] ?></h2></div>
                <div class="col-2 "><?= $cart_product['quantity'] ?></div>
                <div class="col-2 ">&#x20B9;  <?= $cart_product['price']*$cart_product['quantity']; ?></div>
                <div class="col-1 "><a class="item-del-button" href="api/cart_submit.php?delete=<?= $cart_product['product_id'] ?>&quantity=<?= $cart_product['quantity'] ?>"><i class="bx bx-x"></i></a></div>
            </div> 
            <?php 
                }
            ?>
        </div>
        <div class="col-md-4 checkout-box">
            <div class="row">
                <div class="col order-summary">
                    <h4>Order Summary</h4>
                </div>   
            </div>   
            <form method="post" action="">
                <div class="row order-desc">
                    <div class="col">SUBTOTAL</div>
                    <div class="col text-right">&#x20B9; <?= $subtotal ?></div>
                </div>
                <div class="row order-desc">
                    <div class="col">SHIPPING</div>
                    <div class="col text-right">&#x20B9; <?= $shipping = $subtotal?$shipping:0; ?></div>
                </div>
                <div class="row order-desc my-5">
                    <div class="col">GRAND TOTAL</div>
                    <div class="col text-right">&#x20B9;  <?= $subtotal + $shipping ?></div>
                </div>
                <button class="checkout-btn">CHECKOUT</button>
            </form>
        </div>
    </div>
</body>
</html>