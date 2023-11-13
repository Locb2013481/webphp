<?php
    session_start();
    //xoa toan bo gio hang
    if(isset($_GET['delCart']) && $_GET['delCart']==1){
        unset($_SESSION['cart']);
        header('location: ../views/cart.php');
    }
    //xoa 1 san pham trong gio hang
    if(isset($_GET['delid']) && $_GET['delid']>=0){
        array_splice($_SESSION['cart'], $_GET['delid'],1);
        header('location: ../views/cart.php');
    }

    if(!isset($_SESSION['cart']))
        $_SESSION['cart'] = [];
        
     //kiem tra co bam nut addcart chua
    if(isset($_POST['btn_addCart'])&&($_POST['btn_addCart'])){
        $id_product = $_POST['id_product'];
        $name_product = $_POST['name_product'];
        $price_product = $_POST['price_product'];
        $img_product = $_POST['img_product'];
        $quantity_product = $_POST['quantity_product'];

        //kiem tra sna pham co trong gio hang ko
        $flag=0;
        for ($i = 0; $i < sizeof($_SESSION["cart"]); $i++){
            if($_SESSION["cart"][$i][1]==$name_product){
                $flag= 1;
                $quantity_new = $quantity_product + $_SESSION["cart"][$i][4];
                $_SESSION["cart"][$i][4] = $quantity_new;
                header("location: ../views/index.php");
                break;
            }
        }
        if($flag == 0){
            $product = [$id_product,$name_product,$price_product,$img_product,$quantity_product];
            $_SESSION['cart'][] = $product;
            header("location: ../views/index.php");
        }
    }
?>