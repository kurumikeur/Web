<?php

$CartDataArray = array();
class CartData{
    public $id = "1";
    public $name;
    public $short_description;
    public $price;
    public $image;
    public $pcs;
}



session_start();
// Инициализируем сессию


function flash(?string $message = null)
{ 
    if ($message) {
        $_SESSION['flash'] = $message;
    } else {
        if (!empty($_SESSION['flash'])) { ?>
          <div class="alert_alert-danger_mb-3">
              <?=$_SESSION['flash']?>
          </div>
        <?php
        unset($_SESSION['flash']);
        }   
    }
}

function MakeCatalog(?string $string)
{ 
    $servername = "localhost";
    $database = "shopdns";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql= "SELECT id, name, alias, price, image FROM product WHERE category = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $string);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_param("s", $string);
    $stmt->bind_result($id, $name, $alias, $price, $image);
    while ($stmt->fetch()) {
        $html = "<table border='3' cellpadding='10' cellspacing='5' align='center'>
                            <tr>
                                    <tr>
                                        <td colspan='2' align='center'> <img src='$image'  width='100%' ></td>
                                    </tr>
                                    <tr>
                                        <td colspan='2'> $name </td>
                                    </tr>
                                    <tr>
                                        <td>Цена: $price р.</td>
                                        <td>
                                            <div class='product_about'>
                                                <form action = Product.php method='POST'>
                                                    <input type='hidden' name='id' value='$id' />
                                                    <button type='submit' class='back-to-catalog'>Подробнее о товаре</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                            </tr>
                        </table>";
        echo $html;
    }
}

function MakeCard(?int $id)
{   
    if ($id == NULL){
        flash("ОШИБКА");
        header('Location: ../Pages/Index.php');   
    }
    
    $servername = "localhost";
    $database = "shopdns";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql= "SELECT name, short_description, description, price, image FROM product WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($name, $short_description, $description, $price, $image);
    $stmt->fetch();
    $html = "<div class='center_content_catalog'>
                    <H2 align='center'>Каталог товаров</H2>
                    <div class='catalog_product'>
                        <div class='product_intro'>
                            <h2>$name</h2>
                            <div class='product_specs'>
                                <img src='$image' alt='@Model.Product.Name' class='product-detail-img'>
                                <div>
                                    <a> $short_description</a>
                                </div>
                            </div>
                        </div>
                        <div class='product_body'>
                            <div class='product_info'>
                                <div class='product_detailed'>
                                <p> $description </p>
                                </div>
                                <p class='product-price'>Цена: $price ₽</p>
                            </div>
                            <div class='product_nav'>
                                <form method='post' action = '..\Pages\Cart.php'>";

                                if(isset($_SESSION['id'])){
                                   $html .= "<input type='hidden' name='quantity' value='1' />
                                    <input type='hidden' name='productId' value='$id' />
                                    <button type='submit' class='add-to-cart-button'>Добавить в корзину</button>";
                                }
                                else    
                                    $html .= "<a>Войдите в аккаунт чтобы добавить в корзину</a>";
                            $html .= "</form>
                                <form action = 'Catalog.php'>
                                    <input type='hidden' name='productId' value='@Model.Product.Id' />
                                    <button type='submit' class='back-to-catalog'>Вернуться в каталог</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>";
    echo $html;
    $_SESSION['CartDataTrue'] = True;
}

function AddSlides(){
    $servername = "localhost";
    $database = "shopdns";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql= "SELECT id, image FROM product ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $image);
    while ($stmt->fetch()) {
        $html = "<div class='item'>
                    <a class='slider_redir' href='Product.php'><img src='$image'></img></a>
                </div>";
        echo $html;
    }
}

function AddToCart($productid, $quantity){
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
    echo "<H2 align='Center'> Корзина </H2>";
    $_cartData = new CartData();
    $sql= "SELECT id, name, short_description, price, image FROM product WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $productid);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($_cartData->id, $_cartData->name, $_cartData->short_description, $_cartData->price, $_cartData->image);
    $_cartData->pcs = $quantity;
    $stmt->fetch();
    $flag = false;
    foreach ($CartDataArray as &$_cartData1){
        if ($_cartData1->id === (int)$productid){
            $_cartData1->pcs += $quantity;
            $flag = true;
            break;
        }
    }
    if (!$flag) array_push($CartDataArray, $_cartData);
    $_SESSION['CartDataArray'] = $CartDataArray;
    $totalprice_products = 0;
    $_SESSION['flag'] = false;
    foreach ($CartDataArray as $_cartData){
        if($_cartData->pcs > 0){ 
            $totalprice = $_cartData->price * $_cartData->pcs;
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
                                            <a>Кол-во:</a><BR>
                                            <form method='POST' action='../PhpActions/ChangeQuantity.php'>
                                                <input type='hidden' name='productId' value='$_cartData->id'>
                                                <input type='number' name='quantity' value='$_cartData->pcs'>
                                                <input type='submit' value='Подтвердить'>
                                            </form>
                                    </div>
                                </div>
                                <div class='product-cart-price'>
                                    <div class='product-price'>
                                        <a> Цена за шт.: <BR>$_cartData->price ₽</a>
                                    </div>
                                    <div class='product-price-sum'>
                                        <a> Общая цена: <BR> $totalprice ₽</a>
                                    </div>
                                </div>
                </div>";
            echo $html;
            $totalprice_products += $totalprice;
            $_SESSION['flag'] = true;
        }
    }
    if(isset($_SESSION['CartDataTrue'])) {
        echo "<p> Общая сумма: $totalprice_products ₽"; 
    }
} 
function WatchCart(){
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
        echo "<H2 align='Center'> Корзина </H2>";
        $_SESSION['flag'] = false;
        $_cartData = new CartData();
        $sql= "SELECT id, name, short_description, price, image FROM product WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $productid);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($_cartData->id, $_cartData->name, $_cartData->short_description, $_cartData->price, $_cartData->image);
        while ($stmt->fetch()){  
            array_push($CartDataArray, $_cartData);
        }
        $_SESSION['CartDataArray'] = $CartDataArray;

        $totalprice_products = 0;
        foreach ($CartDataArray as $_cartData){
            if($_cartData->pcs > 0){
                $totalprice = $_cartData->price * $_cartData->pcs;
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
                                            <a>Кол-во:</a><BR>
                                            <form method='POST' action='../PhpActions/ChangeQuantity.php'>
                                                <input type='hidden' name='productId' value='$_cartData->id'> </input>
                                                <input type='number' name='quantity' value='$_cartData->pcs'> </input>
                                                <input type='submit' value='Подтвердить'> </input>
                                            </form>
                                        </div>
                                    </div>
                                    <div class='product-cart-price'>
                                        <div class='product-price'>
                                            <a> Цена за шт.: <BR>$_cartData->price ₽</a>
                                        </div>
                                        <div class='product-price-sum'>
                                            <a> Общая цена: <BR> $totalprice ₽</a>
                                        </div>
                                    </div>
                    </div>";
                    echo $html;
                    $totalprice_products += $totalprice;
                    $_SESSION['flag'] = true;
            }
        }
            if(isset($_SESSION['CartDataTrue']) and $_SESSION['flag'] === true) {
                echo "<p> Общая сумма: $totalprice_products ₽"; 
            }
        if (!isset($_SESSION['CartDataArray']) or !($_SESSION['flag'] === true)){
            echo "<a> Корзина пуста </a>";
        }  
}


function SearchResult(?string $string)
{ 
    $servername = "localhost";
    $database = "shopdns";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $message = $_POST['text']; 
    $sql = "SELECT id, name, alias, price, image FROM product WHERE name LIKE '%$string%'";
    $stmt = $conn->prepare($sql);

    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $alias, $price, $image);
    while ($stmt->fetch()) {
        $html = "<table border='3' cellpadding='10' cellspacing='5' align='center'>
                            <tr>
                                    <tr>
                                        <td colspan='2' align='center'> <img src='$image'  width='100%' ></td>
                                    </tr>
                                    <tr>
                                        <td colspan='2'> $name </td>
                                    </tr>
                                    <tr>
                                        <td>Цена: $price р.</td>
                                        <td>
                                            <div class='product_about'>
                                                <form action = Product.php method='POST'>
                                                    <input type='hidden' name='id' value='$id' />
                                                    <button type='submit' class='back-to-catalog'>Подробнее о товаре</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                            </tr>
                        </table>";
        echo $html;
    }
}
?>