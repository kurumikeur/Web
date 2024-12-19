<?php
require_once __DIR__ . "/../PhpActions/init.php";
if (isset($_COOKIE['id'])){
    $_SESSION['id'] = $_COOKIE['id'];
    $_SESSION['login'] = $_COOKIE['login'];
}
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
                <?php flash() ?>
                <div class="search">
                    <form action='Search.php' method="POST"> 
                        <input id="text" placeholder="Искать..." type="text" name='text'>
                        <button onclick="location.href = 'Search.php'">Поиск</button> 
                    </form>
                </div>
                
                <?php if((isset($_COOKIE["login"]))) : ?>
                    <div class="login-form">
                        <div class="Button">
                            <div>
                                <?php flash() ?>
                            </div>
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
                            <div>
                                <?php flash() ?>
                            </div>
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
                    <div class="index-text"> 
                    <H2  align="center">Продажа сертифицированной техники</H2>
                            <div class="header-slider">
                                <div class="header-index-text">
                                    <p style="text-align:justify">
                                        Магазин DNS предоставляет покупателям возможность приобретать различную технику. Наш магазин находится на рынке уже не первый год и имеет большой ассортимент различных видов техники:                        
                                    </p>
                                    <table border="3" cellpadding="10" cellspacing="5">
                                        <tr>
                                            <td colspan=2 align="center">Бытовая техника</td>
                                            <td colspan=2 align="center">Электроника</td>
                                        </tr>
                                        <tr>
                                            <td>Холодильники</td>
                                            <td>Стиральные <BR> машины</td>
                                            <td>Компьютеры</td>
                                            <td>Смартфоны</td>
                                        </tr>
                                        <tr>
                                            <td>Кухонные плиты</td>
                                            <td>Посудомоечные <BR> машины</td>
                                            <td>Смарт-часы</td>
                                            <td>Ноутбуки</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="slider">
                                    <!-- Первый слайд -->
                                    <?php AddSlides() ?>

                                    <!-- Кнопки-стрелочки -->
                                    <a class="previous" onclick="previousSlide()">&#10094;</a>
                                    <a class="next" onclick="nextSlide()">&#10095;</a>
                                
                                    <script src="http://localhost/Web/Scripts/Slider.js">ShowSlides(1);</script>
                                </div>
                                </div>
                            <div>

                            <H2  align="center">Преимущества магазина</H2>
                            <p style="text-align:justify">
                                Наш магазин имеет большое количество преимуществ:
                                        <li> Широкая сеть магазинов
                                        <li> Гарантия низкой цены
                                        <li> Большое количество фильтров
                                        <li> Сервисное и гарантийное обслуживание в кратчайшие сроки
                                        <li> Профессиональные консультанты
                                        <li> Вежливый персонал
                                            
                                    </ul>
                            </p>
                            </div>
                            <div>
                            <h2 align="center"> Гарантия качества </h2>
                            <p style="text-align:justify">  
                                Наш магазин продаёт только орригинальные товары с гарантией от продавца. В случае, если покупатель получает некачественный товар, мы обязуемся: <BR>
                            </p>
                            <ol type="1">
                                <li>Принять товар в сервисный центр
                                </li>
                                <li> Осуществить проверку товара                               
                                <li> Осуществить компенсацию в случае подтверждения неисправности
                                    <ol type="a">
                                        <li>Возврат средств за товар
                                        </li>
                                        <li>Замена товара на аналогичный
                                        </li>
                                        <li>Ремонт неисправности
                                        </li>
                                    </ol>
                            </ol>
                            </div>
                            <div>
                            <h2 align="center"> Гарантия низкой цены </h2>
                            <p style="text-align:justify">  
                                Магазин DNS гарантирует низкую цену в сравнении с магазинами-конкурентами. Если цена в нашем магазине выше, чем в другом, вы можете получить скидку в размере 150% от разницы цен, если выполняются следующие условия: <BR>
                            </p>
                            <ol type="a">
                                <li> Магазин находится в списке магазинов-конкурентов
                                <li> Товар в другом магазине продаётся не по скидке
                                <li> Цена товара у конкурента не менее 5000 руб.
                                <li> Скидка по акции ГНЦ не может превышать 30% от цены DNS;
                            </ol>
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
            <a id="copyright"> DNS. Все права защищены 2024 ©</a> <BR>
            <a href='Confident.pdf' target='_blank' target='_blank'>Политика конфиденциальности </a>
        </div>

    </div>
</body>