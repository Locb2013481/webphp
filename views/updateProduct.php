<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once("../views/navbar.php");
    require_once("../taglib.php");
    ?>

    <?php
    include "../connect.php";
    $id = $_GET["updateid"];

    $sql = "select * from `product` where id = '$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $price = $row['price'];
    $description = $row['description'];
    $image = $row['image'];
    // echo $image;
    ?>

    <div class="container">

        <form action="../controllers/updateProductHd.php?updateid=<?php echo $id;?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control w-75" name="name" aria-describedby="emailHelp"
                     value="<?php echo $name;?>">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="number" class="form-control w-75" name="price" value="<?php echo $price;?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" class="form-control w-75" name="description"  value="<?php echo $description;?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" class="form-control w-75" name="image" value="" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
    
</body>
</html>