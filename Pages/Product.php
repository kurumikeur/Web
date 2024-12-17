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
                <?php if(isset($_POST['id']))
                    MakeCard((int)$_POST['id']);
                else
                    MakeCard((int)$_COOKIE['SliderValue']);
                ?>
                <!-- <div class="center_content_catalog">
                    <H2 align="center">Каталог товаров</H2>
                    <div class="catalog_product">
                        <div class="product_intro">
                            <h2>50" (125 см) LED-телевизор Samsung UE50DU7100UXRU черный</h2>
                            <div class="product_specs">
                                <img src="http://localhost/Web/Content/Telek.jpg" alt="@Model.Product.Name" class="product-detail-img">
                                <div>
                                    <a> Edge LED, Crystal UHD, 4K UltraHD, Wi-Fi, 60 Гц, Tizen, HDMI х 3, USB х 1 шт</a>
                                </div>
                            </div>
                        </div>
                        <div class="product_body">
                            <div class="product_info">
                                <div class="product_detailed">
                                <p>LED-телевизор Samsung UE50DU7100UXRU обеспечивает детализированное изображение на 50-дюймовом экране Crystal UHD с разрешением 3840x2160 пикселей. Технология HDR10 гарантирует четкость в темных сценах и различимость объектов при ярком свете. За точную передачу цветовой палитры отвечает технология PurColor. Функция Motion Xcelerator гарантирует плавную смену кадров при отображении динамичного изображения. Акустическая система выходной мощностью 20 Вт с технологией Dolby Digital Plus наполняет пространство комнаты объемным звучанием.
                                    Телевизор Samsung UE50DU7100UXRU работает под управлением ОС Tizen. Платформа Smart TV предоставляет доступ к потоковым сервисам фильмов, сериалов, музыки и другого развлекательного контента. Для беспроводного подключения к сети Интернет предусмотрен модуль Wi-Fi.</p>
                                </div>
                                <p class="product-price">Цена: 50 000 ₽</p>
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
                </div> -->
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