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
                    <H2 align="center">Сотрудники DNS профессионалы своего дела</H2>
                        <ul class="vacancy_offers">
                            <li> Одними из первых знакомятся с новинками
                            <li> Огромное пространство возможностей
                            <li> Постоянное обучение и развитие
                            <li> Быстрый и прозрачный карьерный рост
                        </ul>
                        <h2 align="center" class="vacancy_header"> Вакансии по городу Москва </h2>
                            <ol type="1" class="vacancy_list">
                                <div class="vacancy_details">
                                    <li>Кладовщик магазина
                                    <ol class="vacancy_payment">
                                        <li>Уровень зарплаты: 72 700 - 109 050 ₽
                                    </ol>
                                </div>    
                                <div class="vacancy_details">
                                    <li>Оператор Контактного центра на дому
                                    <ol class="vacancy_payment">
                                        <li>Уровень зарплаты: 38 000 - 45 000 ₽
                                    </ol>
                               </div>                               
                               <div class="vacancy_details">
                                    <li>Продавец - консультант 
                                    <ol class="vacancy_payment">
                                        <li>Уровень зарплаты: 76 800 - 143 250 ₽
                                    </ol>
                                </div>
                                <div class="vacancy_details">
                                    <li>Специалист клиентской поддержки
                                    <ol class="vacancy_payment">
                                        <li>Уровень зарплаты: 69 000 - 75 000 ₽
                                    </ol>
                                </div>
                                <div class="vacancy_details">
                                    <li>Сотрудник выдачи в магазине
                                    <ol class="vacancy_payment">
                                        <li>Уровень зарплаты: 76 800 - 143 250 ₽
                                    </ol>
                                </div>   
                            </ol>
                            <div>
                                <a> Звонить по телефону: 8-499-704-46-40 (c 03:00 до 22:00)</a>
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