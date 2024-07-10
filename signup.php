<?php

    include('database.php');

    $username = $_POST['name'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email' , '$pass')";
    mysqli_query($conn, $sql);

    mysqli_close($conn);
    header("Location: loginDesign.php");

?>