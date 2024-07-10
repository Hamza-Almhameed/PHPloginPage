<?php
    session_start();
    include("database.php");


    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $response = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($response);
    $hashed_password = $row["password"];


    if (password_verify($password, $hashed_password)) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $response = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($response);
        $_SESSION['username'] = $row['username'];
        header("Location: home.php");
    } else{
        header("Location: loginDesign.php?error=Wrong Password or Email");
    }

    

    mysqli_close($conn);
    
?>