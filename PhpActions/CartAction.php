<?php
    require_once __DIR__ . "/../PhpActions/init.php";
    // Параметры для подключения
    $servername = "localhost";
    $database = "shopdns";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_SESSION['CartDataArray'])){
        $CartDataArray = $_SESSION['CartDataArray'];
    } else {
        $CartDataArray = array();
    }
    $_cartData = new CartData();
    $sql= "SELECT id, name, short_description, price, image FROM product WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_POST['id']);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($_cartData->id, $_cartData->name, $_cartData->short_description, $_cartData->price, $_cartData->image);
    while ($stmt->fetch()){   
        array_push($CartDataArray, $_cartData);
    }
    $_SESSION['CartDataArray'] = $CartDataArray;
    $html = "<div class='product-cart'>
                        <div class='product-cart-body'>
                            <div class='product-cart-photo'>
                                <img src='$_cartData->image'>
                            </div>
                            <div class='product-cart-details'>
                                <div class='product-cart-title'>
                                    <a> $_cartData->name</a>
                                </div>
                                <div class='product-cart-description'>
                                    <a> $_cartData->short_description </a>
                                </div>
                            </div>
                            <div class='product-cart-pcs'>
                                <a> test 3</a>
                            </div>
                        </div>
                        <div class='product-cart-price'>
                            <div class='product-price'>
                                <a> Цена за шт.: <BR>$_cartData->price</a>
                            </div>
                            <div class='product-price-sum'>
                                <a> Общая цена: <BR> test 5</a>
                            </div>
                        </div>
        </div>";
    echo $html;
    header('Location: ../Pages/Cart.php');    
?>