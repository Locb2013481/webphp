<?php
    session_start();
    $plusId = $_GET['plusId'];
   
    $plus = $_SESSION['cart'][$plusId][4]+1;
    //echo $plus;
    $_SESSION['cart'][$plusId][4] = $plus;
    
    header('location: ../views/cart.php');

?>