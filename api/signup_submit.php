<?php
    require "../include/database_connect.php";

    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = sha1($password);
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];

    $sql1 = "SELECT * FROM users WHERE email='$email'";
    $result1 = mysqli_query($conn, $sql1);
    if(!$result1){
        $response = array("success" => false, "message" => "Something went wrong!");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result1);
    if ($row_count != 0) {
        $response = array("success" => true, "message" => "This email id is already registered with us!");
        echo json_encode($response);
        return;
    }

    $sql2 = "INSERT INTO users (full_name, phone, email, password) VALUES ('$full_name', '$phone', '$email', '$password')";
    $result2 = mysqli_query($conn, $sql2);
    if(!$result2){
        $response = array("success" => false, "message" => "Something went wrong!");
        echo json_encode($response);
        return;
    }
    
    $response = array("success" => true, "message" => "Account successfully created!");
    echo json_encode($response);
    mysqli_close($conn);
?>