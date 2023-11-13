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
    <h1>CART</h1>

    <h2>Xin chao
        <?php
        if (!empty($_SESSION["user_name"])) {
            echo $_SESSION["user_name"][0];
        }
        ?>
    </h2>

    <table class="table">

        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name product</th>
                <th scope="col">Price product</th>
                <th scope="col">Image product</th>
                <th scope="col">Quantity product </th>
                <th scope="col">Tien</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php

            if (isset($_SESSION["cart"]) && is_array($_SESSION["cart"])) {
                if (sizeof($_SESSION["cart"]) > 0) {
                    $sum = 0;
                    for ($i = 0; $i < sizeof($_SESSION["cart"]); $i++) {
                        $tien = $_SESSION["cart"][$i][2] * $_SESSION["cart"][$i][4];
                        $sum = $sum + $tien;
                        echo '<tr>
                    <td>' . ($i + 1) . '</td>
                    <td>' . $_SESSION['cart'][$i][1] . '</td>
                    <td>' . $_SESSION['cart'][$i][2] . '</td>
                    <td>' . $_SESSION['cart'][$i][3] . '</td>
                    <td> <a href="../controllers/minusItem.php?minusId='.$i.'" class="btn btn-primary">-</a>' . $_SESSION['cart'][$i][4] . ' <a href="../controllers/plusItem.php?plusId='.$i.'" class="btn btn-primary">+</a></td>
                    <td>' . $tien . '</td>
                    <td>
                        <a href="../controllers/cartSession.php?delid=' . $i . '" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>';
                        }
                        echo '<tr>
                    <th> Tong tien</th>
                    <th>' . $sum . '</th>
                    </tr>';
                }
            }
            ?>

        </tbody>
    </table>
    <a class="btn btn-primary" href="../controllers/cartSession.php?delCart=1">Delete cart</a>
    <?php
     if (sizeof($_SESSION["cart"]) <=0){
        echo "<h2>Gio hang rong</h2>";
     }
    ?>
</body>

</html>