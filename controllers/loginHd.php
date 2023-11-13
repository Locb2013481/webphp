<?php

    include("../connect.php");
    session_start();

    $user_name = $_POST["user_name"];
    $password = $_POST["pass"];


    $sql = "SELECT * FROM user WHERE user_name = '$user_name'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($user_name == $row['user_name'] && $row['role'] =='admin') {
                
                if(password_verify($password, $row['pass'])) {
                    $userid = $row['id'];
                    $_SESSION['user_name_admin'] = array("$user_name","$userid");
                    header("Location: ../admin/index.php");
                }else{
                    $_SESSION["errorPass"] = "errorPass";
                    header("Location: ../views/login.php");
                }
                break;
            }

            if($user_name == $row['user_name']) {
                if(password_verify($password, $row['pass'])) {
                    $userid = $row['id'];
                    $_SESSION['user_name'] = array("$user_name","$userid");
                    header("Location: ../views/index.php");
                }else{
                    $_SESSION["errorPass"] = "errorPass";
                    header("Location: ../views/login.php");
                }
            }
        }
    } else {
        $_SESSION["errorAccount"] = "errorAccount";
        header("Location: ../views/login.php");
    }
    $conn->close();
    


?>