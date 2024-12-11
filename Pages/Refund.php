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
                <div class="center_content">
                    <div class="center_content_refund">
                        <H2  align="center">Возврат, обмен или гарантийный ремонт</H2>
                        <H3 align="center">Процедура возврата товара</H3>
                        <p> Товар надлежащего качества</p>
                            <ul>
                                <li class="item">Приобретение товара в магазине </li>
                                <ul>
                                    <div class="refund_text">
                                        <a>Вы вправе обменять товар надлежащего качества на аналогичный товар в течение 14 дней, не считая дня покупки. 
                                        Обращаем Ваше внимание, что основная часть нашего ассортимента – технически сложные товары бытового назначения (электроника, фотоаппаратура, бытовая техника и т.п.).
                                        Указанные товары, согласно Постановлению Правительства РФ от 31.12.2020 № 2463 , обмену как товары надлежащего качества не подлежат. Возврат таких товаров не предусмотрен Законом РФ от 07.02.1992 № 2300-1.
                                        </a>
                                    </div>
                                </ul>
                                <li class="item"> Дистанционно в интернет-магазине</li>
                                <ul>
                                    <div class="refund_text">
                                        <a> Помимо права на обмен товара надлежащего качества, предусмотренного Законом РФ от 07.02.1992 № 2300-1 (ред. от 04.08.2023) О защите прав потребителей , вы вправе отказаться от товара, приобретенного дистанционно, в любое время до его передачи, а также в течение семи дней после передачи товара.
                                            Если информация о порядке и сроках возврата товара надлежащего качества не была предоставлена вам в письменной форме в момент доставки товара — указанный срок продлевается согласно Правил продажи товаров при дистанционном способе продажи товара по договору розничной купли-продажи
                                            При возврате/обмене товара надлежащего качества должны быть сохранены товарный вид, целостность упаковки, комплектация. Наличие следов эксплуатации может стать основанием для отказа в удовлетворении Ваших требований.
                                        </a>
                                    </div>
                                </ul>                     
                            </ul>
                        <p> Товар ненадлежащего качества</p>
                            <div class="refund_text">
                                <a> Если в приобретенном Вами товаре выявлен недостаток вы вправе по своему выбору заявить одно из требований, указанных в ст.18 Закона РФ от 07.02.1992 № 2300-1 (ред. от 04.08.2023) О защите прав потребителей . Для этого можете обратиться в сервисный центр DNS. Для поиска подходящего сервисного центра воспользуйтесь сервисом по поиску сервисного центра.
                                Тем не менее, если указанный товар относится к технически сложным, утв. Постановлением от 10 ноября 2011 г. № 924 , то указанные в ст.18 требования могут быть заявлены только в течение 15 календарных дней с даты покупки.
                                По истечении 15 дней предъявление указанных требований возможно в случаях если: </a> <BR>
                            </div>
                            <ul>
                                <li>обнаружен существенный недостаток;</li>
                                <li>нарушены сроки устранения недостатков;</li>
                                <li>товар не может использоваться в совокупности более тридцати дней в течение каждого года гарантийного срока в связи с необходимостью устранения производственных недостатков.</li>
                            </ul>
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