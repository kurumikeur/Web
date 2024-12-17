<?php
require_once __DIR__ . "/../PhpActions/init.php";
    $CartDataArray = $_SESSION['CartDataArray'];
    
    $productId = $_POST['productId'];
    $quantity = $_POST['quantity'];
    foreach ($CartDataArray as &$_cartData1){
        if ($_cartData1->id === (int)$productId){
            if ($quantity < 0)
                $quantity = 0;
            $_cartData1->pcs = $quantity;
            $flag = true;
            break;
        }
    }
    $_SESSION['CartDataArray'] = $CartDataArray;
    header('Location: ../Pages/Cart.php');
?>