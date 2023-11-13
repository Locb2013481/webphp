<?php
require_once('../connect.php');
session_start();
$id_product = $_POST['id_product'];
$name_product = $_POST['name_product'];
$price_product = $_POST['price_product'];
$img_product = $_POST['img_product'];
//bam addcart ma chua login
if (empty($_SESSION['user_name']))
    header('location: ../views/login.php');
else {
    $user_name = $_SESSION['user_name'][0];
    $id_user = $_SESSION['user_name'][1];

    // echo $user_name . '---' . $id_user . '---' . $id_product . '---' . $name_product . '---' . $price_product.'--'.$img_product;

    $sql = "INSERT INTO `cart`(`id_cart`, `id_user`, `user_name`, `id_product`, `name_product`, `price_product`, `img_product`)
     VALUES ('','$id_user','$user_name','$id_product','$name_product','$price_product','$img_product')";
    if ($conn->query($sql) === TRUE) {
        header("location: ../views/cart.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


?>