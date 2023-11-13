<?php
    include("../connect.php");
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $pass_hashed = password_hash($pass, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO `user`(`id`, `user_name`, `pass`, `email`) VALUES ('','$user_name','$pass_hashed','$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/login.php");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>