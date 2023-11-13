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
    <h1>ALL product</h1>
    <table class="table">
    
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>  
            <?php
            include("../connect.php");
            $sql = "SELECT * FROM `product`";
            $result = $conn->query($sql);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image = $row['image'];
                    echo '<tr>
                <td>' . $id . '</td>
                <td>' . $name . '</td>
                <td>' . $price . '</td>
                <td>' . $description . '</td>
                <td>' . $image . '</td>
                <td>
                <a class="btn btn-primary" href="../views/updateProduct.php?updateid=' . $id . '">Update </a>
                <a class="btn btn-danger" href="../controllers/deleteProduct.php?deleteid=' . $id . '">Delete </a>
                </td>
              </tr>';
                }
            }
            ?>


        </tbody>
    </table>
</body>

</html>