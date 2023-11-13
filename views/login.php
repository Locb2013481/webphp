<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 518px !important;
            background: #ccffcc !important;
            margin-top: 32px !important;
            border-radius: 12px !important;
            padding: 12px !important;
        }

        .body {
            background: #9999ff !important;
        }
    </style>
</head>

<body class="body"></body>
<?php
require_once("./navbar.php");
require_once("../taglib.php");
?>



<div class="container">
    <?php
    //thông báo sai tai khoan
    if (!empty($_SESSION["errorAccount"])) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>wrong Account</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
    }
    unset($_SESSION["errorAccount"]);
    ?>
    <?php
    //thông báo sai mật khẩu
    if (!empty($_SESSION["errorPass"])) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Some thing wrong password</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
    }
    unset($_SESSION["errorPass"]);
    ?>
    <form action="../controllers/loginHd.php" method="post">
        <h2>login</h2>
        <a href="./register.php">Register</a>
        <div class="form-group">
            <label for="exampleInputEmail1">User name</label>
            <input type="text" class="form-control " name="user_name" aria-describedby="emailHelp"
                placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control " name="pass" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</body>

</html>