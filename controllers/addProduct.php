<?php
    include "../connect.php";
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    echo $name.$price.$description.$image;
    $sql = "INSERT INTO `product`(`id`, `name`, `price`, `description`, `image`) VALUES ('','$name','$price','$description','$image')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ../admin/allproduct.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>