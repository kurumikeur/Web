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
                    <div class="center_content_aboutus">
                        <H2  align="center">Контактные данные</H2>
                        <div class="aboutus_text"><a>Единый номер горячей линии: 8-800-77-07-999 (c 03:00 до 22:00) </a> <BR> </div>
                        <div class="aboutus_text"><a>Номер для Москвы и МО: 8-499-704-46-40 (c 03:00 до 22:00) </a> </div>
                        <div class="abouts_map"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af325edb009872e19a90412ccb49f2ebc27d564e0d1cc19f86980e77b27bb7100&amp;width=504&amp;height=436&amp;lang=ru_RU&amp;scroll=true"></script> </div>
                        <form action = "Feedback.php">
                            <div class="aboutus_button"> <input type="submit" value="Обратная связь">      </div>
                        </form>
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