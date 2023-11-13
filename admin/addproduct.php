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
        if (empty($_SESSION["user_name_admin"])) {
            header("location: ../views/index.php");
        }
        ?>
    <h1>add product</h1>
    <div class="container">

        <form action="../controllers/addProduct.php" method="post">
            
           
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control w-75" name="name" aria-describedby="emailHelp"
                    placeholder="Name">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="number" class="form-control w-75" name="price" placeholder="Price">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" class="form-control w-75" name="description" placeholder="Description">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" class="form-control w-75" name="image" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</body>
</html>