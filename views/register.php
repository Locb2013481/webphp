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
    <div class="container">

    <form action="../controllers/registerHd.php" method="post">
        <h2>Register</h2>
        <a  href="./login.php">Login</a>
        <div class="form-group">
            <label for="exampleInputEmail1">User name</label>
            <input type="text" class="form-control w-75" name="user_name" aria-describedby="emailHelp"
                placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1 ">Email address</label>
            <input type="email" class="form-control w-75" name="email" aria-describedby="emailHelp"
                placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control w-75" name="pass" placeholder="Password">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
       
    </form>
    </div>
</body>

</html>