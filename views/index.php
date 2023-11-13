<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php

    require_once("./navbar.php");
    require_once("../taglib.php");

    ?>
    <h1>Trang Chủ </h1>

    <h2>Xin chao
        <?php
        if (!empty($_SESSION["user_name"])) {
            echo $_SESSION["user_name"][0];
        }
        ?>
    </h2>
    <div class="row m-1">
        <?php
        require_once("../connect.php");
        $sql = "SELECT * FROM product";
        $result = $conn->query($sql);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-sm-3">
                <div class="card m-3">
                    <img style="min-height: 250px; max-height: 250px;" class="card-img-top"
                        src="../assets/img/<?php echo $row["image"] ?>" alt="Card image cap">
                    <div class="card-body">
                        <form action="../controllers/cartSession.php" method="POST">
                            <h5 class="card-title">Name:
                                <?php echo $row["name"] ?>
                                <input type="hidden" name="name_product" value="<?php echo $row["name"] ?>">
                            </h5>
                            <p class="card-text">Price:
                                <?php echo $row["price"] ?>
                                <input type="hidden" name="price_product" value="<?php echo $row["price"] ?>">
                            </p>
                            <p class="card-text">Detail:
                                <?php echo $row["description"] ?>
                            </p>
                            <p class="card-text"> id product:
                                <?php echo $row["id"] ?>
                                <input type="number" name="quantity_product" value="1">
                            </p>
                            <p class="card-text"> id product:
                                <?php echo $row["id"] ?>
                                <input type="hidden" name="id_product" value="<?php echo $row["id"] ?>">
                            </p>
                            <p class="card-text"> img product:
                                <?php echo $row["image"] ?>
                                <input type="hidden" name="img_product" value="<?php echo $row["image"] ?>">
                            </p>
                            
                            <p class="card-text"> session name:
                                <?php
                                if (!empty($_SESSION['user_name'])) 
                                    echo $_SESSION['user_name'][0];
                                ?>
                            </p>
                            <p class="card-text"> session id user:
                                <?php
                                if (!empty($_SESSION['user_name'])) 
                                    echo $_SESSION['user_name'][1];   
                                ?>
                            </p>
                           
                            <input type="submit" name="btn_addCart" value="Add cart" class="btn btn-primary">
                        </form>

                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>


</body>

</html>