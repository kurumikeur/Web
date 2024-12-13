<?php
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

function MakeCatalogElectronic()
{ 
    $servername = "localhost";
    $database = "shopdns";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql= "SELECT id, name, alias, price, image FROM product WHERE category = 'Electronic'";
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

function MakeCatalogHome()
{ 
    $servername = "localhost";
    $database = "shopdns";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql= "SELECT id, name, alias, price, image FROM product WHERE category = 'Home'";
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
                                <form method='post' asp-page-handler='AddToCart'>
                                    <input type='hidden' name='productId' value='@Model.Product.Id' />
                                    <button type='submit' class='add-to-cart-button'>Добавить в корзину</button>
                                </form>
                                <form action = 'Catalog.php'>
                                    <input type='hidden' name='productId' value='@Model.Product.Id' />
                                    <button type='submit' class='back-to-catalog'>Вернуться в каталог</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>";
        echo $html;
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

    $sql= "SELECT image FROM product ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($image);
    while ($stmt->fetch()) {
        $html = "<div class='item'>
                                        <img src='$image'>
                </div>";
        echo $html;
    }
}
?>