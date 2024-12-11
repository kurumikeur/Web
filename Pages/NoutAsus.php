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
                        <div class="product_intro">
                            <h2>Ноутбук Asus TUF Gaming F15 FX507ZC4-HN009</h2>
                            <div class="product_specs">
                                <img src="http://localhost/Web/Content/NoutAsus.jpg" alt="@Model.Product.Name" class="product-detail-img">
                                <div>
                                    <a> английская/русская раскладка, 1920x1080, IPS, Intel Core i5-12500H, ядра: 4 + 8 х 2.5 ГГц + 1.8 ГГц, RAM 16 ГБ, SSD 512 ГБ, GeForce RTX 3050 для ноутбуков 4 ГБ, без ОС</a>
                                </div>
                            </div>
                        </div>
                        <div class="product_body">
                            <div class="product_info">
                                <div class="product_detailed">
                                <p>Ноутбук ASUS TUF Gaming F15 FX507ZC4-HN009 с диагональю экрана 15.6" выполнен в черном алюминиевом корпусе. Это надежная геймерская платформа с процессором Intel Core i5-12500H. Он наделен 4 производительными и 8 энергоэффективными ядрами, поддерживает 16 потоков. За счет этого идет распределение нагрузки, что улучшает производительность системы.
                                    ASUS TUF Gaming F15 FX507ZC4-HN009 отображает на IPS-экране детализированное изображение в качестве Full HD. При просмотре с разных углов картинка сохраняет четкость цветопередачи. Видеопроцессор GeForce RTX 3050 со встроенной памятью объемом 4 ГБ подходит для профессионального стримминга и игр с передовыми графическими технологиями. Он позволяет получить плавное изображение на дисплее.
                                    DDR4-память объемом 16 ГБ позволяет обрабатывать одновременно несколько приложений без сбоев и задержек. Она расширяет многозадачность системы, позволяя плавно переключаться между программами. Система охлаждения модели дополнена функцией самоочистки. Это обеспечивает стабильную работу аппарата при любых нагрузках.</p>
                                </div>
                                <p class="product-price">Цена: 72 000 ₽</p>
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