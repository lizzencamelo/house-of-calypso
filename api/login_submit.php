<?php
    session_start();
    require "../include/database_connect.php";

    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = sha1($password);

    $sql1 = "SELECT * FROM users WHERE email='$email' AND password='$password'";    
    $result1 = mysqli_query($conn, $sql1);
    if (!$result1) {
        $response = array("success" => false, "message" => "Something went wrong!");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result1);
    if ($row_count == 0) {
        $response = array("success" => false, "message" => "Login failed! Invalid email or password.");
        echo json_encode($response);
        return;
    }

    $row = mysqli_fetch_assoc($result1);
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['full_name'] = $row['full_name'];
    $_SESSION['email'] = $row['email'];

    $response = array("success" => true, "message" => "Login successful!");
    echo json_encode($response);
    mysqli_close($conn);
?>