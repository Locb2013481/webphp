<?php
    session_start();
    $minusId = $_GET['minusId'];
    $minus = $_SESSION['cart'][$minusId][4]-1;
    if($minus>=1){
        $_SESSION['cart'][$minusId][4] = $minus;
    }
    header('location: ../views/cart.php');

?>