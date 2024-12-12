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
                <div class="center_content_catalog">
                    <H2 align="center">Каталог товаров</H2>
                    <div class="catalog_product">
                        <!-- <div class="product_intro">
                            <h2>Ноутбук Asus TUF Gaming F15 FX507ZC4-HN009</h2>
                            <img src="http://localhost/Web/Content/NoutAsus.jpg" alt="@Model.Product.Name" class="product-detail-img">
                        </div>
                        <div class="product_body">
                            <div class="product_info">
                                <p>Ноутбук</p>
                                <p class="product-price">Цена: @Model.Product.Price ₽</p>
                            </div>
                            <div class="product_nav">
                                <form method="post" asp-page-handler="AddToCart">
                                    <input type="hidden" name="productId" value="@Model.Product.Id" />
                                    <button type="submit" class="add-to-cart-button">Добавить в корзину</button>
                                </form>
                                <form action = "Registration.php">
                                    <input type="hidden" name="productId" value="@Model.Product.Id" />
                                    <button type="submit" class="back-to-catalog">Вернуться в каталог</button>
                                </form>
                            </div>
                        </div> -->
                        <H2 align="center"> Электроника </H2> 
                        <div class="catalog_electronic">
                        <?php MakeCatalogElectronic(); ?>       
                        <!-- <table border="3" cellpadding="10" cellspacing="5" align="center">
                            <tr>
                                    <tr>
                                        <td colspan="2" align="center"><img src="http://localhost/Web/Content/NoutAsus.jpg" width="100%" ></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" >Ноутбук Asus TUF Gaming F15 FX507ZC4-HN009</td>
                                    </tr>
                                    <tr>
                                        <td>Цена: 72 000р.</td>
                                        <td>
                                            <div class="product_about">
                                                <form action = "NoutAsus.php">
                                                    <input type="hidden" name="productId" value="@Model.Product.Id" />
                                                    <button type="submit" class="back-to-catalog">Подробнее о товаре</button>
                                                </form> 
                                            </div>
                                        </td>
                                    </tr>
                            </tr>
                        </table>
                        <table border="3" cellpadding="10" cellspacing="5" align="center">
                            <tr>
                                    <tr>
                                        <td colspan="2" align="center"><img src="http://localhost/Web/Content/Viduha.jpg" width="100%"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Видеокарта NVIDIA RTX 4090 GV-N4090AERO</td>
                                    </tr>
                                    <tr>
                                        <td>Цена: 50 000р.</td>
                                        <td>
                                            <div class="product_about">
                                                <form action = "Viduha.php">
                                                    <input type="hidden" name="productId" value="@Model.Product.Id" />
                                                    <button type="submit" class="back-to-catalog">Подробнее о товаре</button>
                                                </form> 
                                            </div>
                                        </td>
                                    </tr>
                            </tr>
                        </table>
                        <table border="3" cellpadding="10" cellspacing="5" align="center">
                            <tr>
                                    <tr>
                                        <td colspan="2" align="center"><img src="http://localhost/Web/Content/Telek.jpg" width="100%" ></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" >Телевизор Samsung UE50DU7100UXRU</td>
                                    </tr>
                                    <tr>
                                        <td>Цена: 59 999р.</td>
                                        <td>
                                            <div class="product_about">
                                                <form action = "Telek.php">
                                                    <input type="hidden" name="productId" value="@Model.Product.Id" />
                                                    <button type="submit" class="back-to-catalog">Подробнее о товаре</button>
                                                </form> 
                                            </div>
                                        </td>
                                    </tr>
                            </tr>
                        </table> -->

                        </div>
                        <H2 align="center"> Бытовая техника </H2>    
                        <div class="catalog_home">
                        <?php MakeCatalogHome(); ?>     
                        <!-- <table border="3" cellpadding="10" cellspacing="5" align="center">
                            <tr>
                                    <tr>
                                        <td colspan="2" align="center"><img src="http://localhost/Web/Content/Hotpoint.jpg" width="100%" ></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Стиральная машина Hotpoint-Ariston WD 8548 C7S</td>
                                    </tr>
                                    <tr>
                                        <td>Цена: 52 999р.</td>
                                        <td>
                                            <div class="product_about">
                                                <form action = "Hotpoint.php">
                                                    <input type="hidden" name="productId" value="@Model.Product.Id" />
                                                    <button type="submit" class="back-to-catalog">Подробнее о товаре</button>
                                                </form> 
                                            </div>
                                        </td>
                                    </tr>
                            </tr>
                        </table>
                        <table border="3" cellpadding="10" cellspacing="5" align="center">
                            <tr>
                                    <tr>
                                        <td colspan="2" align="center"><img src="http://localhost/Web/Content/Holodos.jpg" width="100%" ></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Холодильник Candy CCRN 6200 S серебристый</td>
                                    </tr>
                                    <tr>
                                        <td>Цена: 49 999р.</td>
                                        <td>
                                            <div class="product_about">
                                                <form action = "Holodos.php">
                                                    <input type="hidden" name="productId" value="@Model.Product.Id" />
                                                    <button type="submit" class="back-to-catalog">Подробнее о товаре</button>
                                                </form> 
                                            </div>
                                        </td>
                                    </tr>
                            </tr>
                        </table>
                        <table border="3" cellpadding="10" cellspacing="5" align="center">
                            <tr>
                                    <tr>
                                        <td colspan="2" align="center"><img src="http://localhost/Web/Content/Kofe.jpg" width="100%" ></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Кофемашина сенсорная Thomson CF20M01 </td>
                                    </tr>
                                    <tr>
                                        <td>Цена: 52999р.</td>
                                        <td>
                                            <div class="product_about">
                                                <form action = "Kofe.php">
                                                    <input type="hidden" name="productId" value="@Model.Product.Id" />
                                                    <button type="submit" class="back-to-catalog">Подробнее о товаре</button>
                                                </form> 
                                            </div>
                                        </td>
                                    </tr>
                            </tr>
                        </table> -->
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