<!DOCTYPE html>

<?php
$servername = "localhost";
$database = "shopdns";
$username = "root";
$password = "";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style.css">
    <title> DNS </title>
    <script src="http://localhost/Web/Scripts/Search.js"></script> 
</head>
<body>
    <div id="main"> 
        <div class="header">
            <div class="header_logo">
                <img src="http://localhost/Web/Content/Logo.png">
            </div>
            <div class="header_container">
                <nav class="header_menu">
                    <ul>   
                        <li> <a href="Sales.php">Акции              </a> </li>
                        <li> <a href="Refund.php">Возврат        </a> </li> 
                        <li> <a href="Delivery.php">Доставка           </a> </li> 
                        <li> <a href="Vacancy.php">Вакансии           </a> </li>
                    </ul>   
                </nav>
                <div class="search">
                    <form action="" method="get" onsubmit="findText(event)"> 
                        <input id="search-input" placeholder="Искать..." type="text">
                        <button onclick="findText()">Поиск</button> 
                    </form>
                </div>
                <div class="login-form">
                    <div class="Button">
                        <form action = "Login.php">
                            <div> <input type="submit" value="Войти">      </div>
                        </form>
                        <form action = "Registration.php">
                            <div> <input type="submit" value="Регистрация">      </div>
                        </form>
                        <form action = "Cart.php">
                            <div> <input type="submit" value="Корзина">      </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="header_logo">

            </div>
        </div>
        
        <div class="container">
            <div id="left-side">
                <nav class="left-side_menu">
                    <ul>   
                        <li> <a href="Index.php">Главная        </a> </li>
                        <li> <a href="Catalog.php">Каталог        </a> </li> 
                        <li> <a href="Contacts.php">Контакты       </a> </li> 
                        <li> <a href="AboutUs.php">О нас          </a> </li>
                    </ul>
                </nav>
            </div>

            <div id="center">
                <div class="center_content_catalog">
                    <H2 align="center">Каталог товаров</H2>
                    <div class="catalog_product">
                        <div class="product_intro">
                            <h2>Холодильник с морозильником Candy CCRN 6200S серебристый</h2>
                            <div class="product_specs">
                                <img src="http://localhost/Web/Content/Holodos.jpg" alt="@Model.Product.Name" class="product-detail-img">
                                <div>
                                    <a> 157 л, внешнее покрытие-металл, размораживание - ручное, 47.4 см х 144 см х 49.5 см</a>
                                </div>
                            </div>
                        </div>
                        <div class="product_body">
                            <div class="product_info">
                                <div class="product_detailed">
                                <p>Отдельностоящий двухкамерный холодильник с нижним расположением морозильной камеры и с системой No Frost. Встроенная ручка эргономична и функциональна, превосходно вписана под закругленные очертания двери и дает прибору более мягкий внешний вид и удобна в использовании.</p>
                                </div>
                                <p class="product-price">Цена: 49 999 ₽</p>
                            </div>
                            <div class="product_nav">
                                <form method="post" asp-page-handler="AddToCart">
                                    <input type="hidden" name="productId" value="@Model.Product.Id" />
                                    <button type="submit" class="add-to-cart-button">Добавить в корзину</button>
                                </form>
                                <form action = "Catalog.php">
                                    <input type="hidden" name="productId" value="@Model.Product.Id" />
                                    <button type="submit" class="back-to-catalog">Вернуться в каталог</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="right-side">
                <div class="right-side_content">
                    <H2> Товары наших партнёров </H2>
                    <a href="https://www.citilink.ru/product/videokarta-gigabyte-nvidia-geforce-rtx-4090-gv-n4090aero-oc-24gd-24gb-1917964/"><img src="http://localhost/Web/Content/Viduha.jpg"></a>
                    <a href="https://www.mvideo.ru/products/televizor-samsung-ue50du7100uxru-10032586"><img src="http://localhost/Web/Content/Telek.jpg"></a>
                    <a href="https://www.onlinetrade.ru/catalogue/stiralnye_mashiny-c45/indesit/stiralnaya_mashina_indesit_iwuc_4105_869990629180-80334.php"><img src="http://localhost/Web/Content/Stiralka.jpg"></a>
                </div>
            </div>
        </div>

        <div class="footer">
            <a id="copyright"> DNS. Все права защищены 2024 ©</a>
        </div>

    </div>
</body>