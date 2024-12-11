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
                <div class="center_content">
                    <H2  align="center">Доставка по городу Москва</H2>
                    <p>Стоимость доставки товара по Москве (внутри МКАД).</p>
                    <p>Работает три интервала доставки:</p>
                    <ul>
                        <li class="delivery_time">10:00 - 22:00</li>
                        <ul>
                            <li>Вес до 25 кг. 1099 рублей</li>
                            <li>Вес от 25 до 75 кг 1199 рублей</li>
                            <li>Вес от 75 до 175 кг 1999 рублей</li>
                            <li>Вес от 175 до 300 кг 2499 рублей</li>
                            <li>Вес от 300 до 500 кг 3699 рублей</li>
                            <li>Вес от 500 до 700 кг 6699 рублей</li>
                        </ul>
                        
                        
                        <li class="delivery_time">10:00 - 16:00</li>
                        <ul>
                            <li>Вес до 25 кг. 1299 рублей</li>
                            <li>Вес от 25 до 75 кг 1399 рублей</li>
                            <li>Вес от 75 до 175 кг 2199 рублей</li>
                            <li>Вес от 175 до 300 кг 2699 рублей</li>
                            <li>Вес от 300 до 500 кг 3899 рублей</li>
                            <li>Вес от 500 до 700 кг 6899 рублей</li>
                        </ul>
                        
                        
                        <li class="delivery_time">16:00 - 22:00</li>
                        <ul>
                            <li>Вес до 25 кг. 1199 рублей</li>
                            <li>Вес от 25 до 75 кг 1299 рублей</li>
                            <li>Вес от 75 до 175 кг 2099 рублей</li>
                            <li>Вес от 175 до 300 кг 2599 рублей</li>
                            <li>Вес от 300 до 500 кг 3799 рублей</li>
                            <li>Вес от 500 до 700 кг 6799 рублей</li>
                        </ul>
                    </ul>
                    <p>Заявки на курьерскую доставку принимаются до 23:00 текущего дня с доставкой на следующий день.</p>
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