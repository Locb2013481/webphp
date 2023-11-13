<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page admin</title>
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
    <h1>page admin</h1>
    <a class="btn btn-secondary" href="./addproduct.php">Add product</a>
    <a class="btn btn-warning" href="./allproduct.php">All product</a>
    
</body>
</html>