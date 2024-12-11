<?php
require_once __DIR__ . "/../PhpActions/init.php";
?>

<!DOCTYPE html>

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
                <img src="http://localhost/Web/Content/logo.png">
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
                <?php if((isset($_SESSION['loggedin'])) or isset($_COOKIE["login"])) : ?>
                    <div class="login-form">
                        <div class="Button">
                            <a> Добро пожаловать, <?php echo $_COOKIE['login'] ?> </a>
                            <form action = "../PhpActions/Exit.php">
                                <div> <input type="submit" value="Выйти">      </div>
                            </form>
                            <form action = "Cart.php">
                                <div> <input type="submit" value="Корзина">      </div>
                            </form>
                        </div>
                    </div>

                <?php else : ?>
                    <div class="login-form">
                        <div class="Button">
                            <form action = "Login.php">
                                <div> <input type="submit" value="Войти">      </div>
                            </form>
                            <form action = "Registration.php">
                                <div> <input type="submit" value="Регистрация">      </div>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
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
                    <H2  align="center">Продажа сертифицированной техники</H2>
                    <H2  align="center">О нас</H2>
                    <p style="text-align:justify">
                    <b>DNS – один из лидеров рынка по продаже цифровой и бытовой техники в России.</b> <BR><BR> Наша цель изменить жизнь людей, сделав простым доступ к огромному количеству качественных и недорогих товаров, предоставляя лучший сервис.                            
                    </p>

                    <H2  align="center">Наша история</H2>
                    <p style="text-align:justify">
                        <b>1998 г.</b><BR>
                        Открытие 1 магазина в г. Владивосток<BR><BR>
                        <b>2006 г.</b><BR>
                        Запуск собственного производства<BR><BR>
                        <b>2007 г.</b><BR>
                        Выход на рынок Дальнего востока и Восточной Сибири<BR><BR>
                        <b>2009 г.</b><BR>
                        Экспансия на рынок РФ<BR><BR>
                        <b>2011 г.</b><BR>
                        Запуск интернет-дискаунтера “DNS Технопоинт"<BR><BR>
                        <b>2014 г.</b><BR>
                        Открытие магазинов в Крыму и Санкт-Петербурге<BR><BR>
                        <b>2019 г.</b><BR>
                        Открытие сети продуктовых магазинов "Квартет Вкусов"<BR><BR>
                        <b>2020 г.</b><BR>
                        Крупнейший в России продавец бытовой техники и электроники<BR>

                    </p>
                    <H2  align="center">DNS сегодня</H2>
                    <p style="text-align:center">
                        <b>2719</b><BR>
                        Магазинов по всей России<BR><BR>
                        <b>38613</b><BR>
                        Сотрудников в штате<BR><BR>
                        <b>1244</b><BR>
                        Городов с магазинами DNS<BR><BR>
                    </p>
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