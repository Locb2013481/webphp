<?php
 include "../connect.php";
 $id = $_GET['updateid'];



 $name =  $_POST['name'];
 $price = $_POST['price'];
 $description = $_POST['description'];
 $image = $_POST['image'];


 $sql = "UPDATE `product` SET `name`='$name',`price`='$price',`description`='$description',`image`='$image' WHERE `id` = $id";

 if ($conn->query($sql) === TRUE) {
     header("Location: ../admin/allproduct.php");
 } else {
     echo "Error updating record: " . $conn->error;
 }

 
 $conn->close();
?>