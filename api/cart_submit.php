<?php
    session_start();
    require "../include/database_connect.php";

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;

    if (!$user_id) {
        echo "<script>
                alert('Please login to add items to cart!');
                window.location.href= '../home.php';
            </script>";
    }

    // Add or update product in cart
    if(isset($_POST['product_id'], $_POST['quantity'])) {
        $product_id = $_POST['product_id'];
        $quantity = $_POST['quantity'];

        $sql1 = "SELECT * FROM cart WHERE user_id='$user_id' AND product_id='$product_id'";
        $result1 = mysqli_query($conn, $sql1);
        if(!$result1) {
            echo "Something went wrong!";
            return;
        }  
        $cart_item = mysqli_fetch_assoc($result1);
        if ($cart_item) {
            $sql2 = "UPDATE cart SET quantity=quantity+$quantity WHERE user_id='$user_id' AND product_id='$product_id'";
            $result2 = mysqli_query($conn, $sql2);
            if(!$result2) {
                echo "Something went wrong!";
                return;
            } 
        } else {
            $sql2 = "INSERT INTO cart (user_id, product_id, quantity) VALUES ('$user_id', '$product_id', '$quantity')";
            $result2 = mysqli_query($conn, $sql2);
            if(!$result2) {
                echo "Something went wrong!";
                return;
            } 
        }   
        // Update stock in products table
        $sql3 = "UPDATE products SET stock = stock - $quantity WHERE product_id='$product_id'";
        $result3 = mysqli_query($conn, $sql3);
        if(!$result3) {
            echo "Something went wrong!";
            return;
        } 
        header("location: ../shop_product.php?product_id=$product_id");
    }


    // Delete product from cart
    if(isset($_GET['delete'])) {
        $product_id = $_GET['delete'];
        $sql4 = "DELETE FROM cart WHERE user_id='$user_id' AND product_id='$product_id'";
        $result4 = mysqli_query($conn, $sql4);
        if(!$result4) {
            echo "Something went wrong!";
            return;
        }
        $quantity = $_GET['quantity'];
        // Update stock in products table
        $sql5 = "UPDATE products SET stock = (stock + $quantity) WHERE product_id='$product_id'";
        $result5 = mysqli_query($conn, $sql5);
        if(!$result5) {
            echo "Something went wrong!";
            return;
        } 
        header("location: ../cart.php");
    }

?>