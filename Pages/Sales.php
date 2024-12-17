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
                    <form action='Search.php' method="POST"> 
                        <input id="text" placeholder="Искать..." type="text" name='text'>
                        <button onclick="location.href = 'Search.php'">Поиск</button> 
                    </form>
                </div>
                <?php if((isset($_COOKIE["login"]))) : ?>
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
                    <div class="center_content_sales">
                        <H2  align="center">Акции</H2>
                        <div id="text"><a> В период  с 21 декабря по 30 января в DNS будет проходить распродажа электронной техники.</a></div> <BR>
                        <div id="text"><a> Список товаров, участвующих в акции: </a></div>
                        <table border="3">
                            <tr>
                              <th>Наименование товара</th>
                              <th>Старая цена</th>
                              <th>Новая цена</th>
                            </tr>
                            <tr>
                              <td>6.7" Смартфон HONOR 90 256 ГБ черный</td>
                              <td class="old_price">36 999 ₽</td>
                              <td>29 999 ₽</td>
                            </tr>
                            <tr>
                              <td>27" Монитор MSI G272QPF E2 черный</td>
                              <td class="old_price">28 499 ₽</td>
                              <td>24 999 ₽</td>
                            </tr>
                            <tr>
                              <td>Наушники TWS HUAWEI Freebuds 5i черный</td>
                              <td class="old_price">3 999 ₽</td>
                              <td>3 299 ₽</td>
                            </tr>
                            <tr>
                              <td>14.6" Планшет Samsung Galaxy Tab S10 Ultra Wi-Fi 256 ГБ серый + стилус</td>
                              <td class="old_price">129 999 ₽</td>
                              <td>100 299 ₽</td>
                            </tr>
                            <tr>
                              <td>Смарт-часы HUAWEI WATCH GT 5 Pro</td>
                              <td class="old_price">24 999 ₽</td>
                              <td>26 299 ₽</td>
                            </tr>
                          </table>
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
            <a id="copyright"> DNS. Все права защищены 2024 ©</a> <BR>
            <a href='Confident.pdf' target='_blank'>Политика конфиденциальности </a>
        </div>

    </div>
</body>