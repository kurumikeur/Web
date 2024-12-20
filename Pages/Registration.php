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
                    <div class="loginpage-form">
                        <h2>Регистрация</h2>
                        <div class="input-form">

                        <?php flash() ?>

                            <form action="../PhpActions/RegisterUser.php" method="post">
                                    <div class="form-group">
                                        <label for="lastname">Фамилия:</label>
                                        <input type="text" id="lastname" name="lastname" required>
                                        <br />
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Имя:</label>
                                        <input type="text" id="name" name="name" required>
                                        <br />
                                    </div>

                                    <div class="form-group">
                                        <label for="surname">Отчество:</label>
                                        <input type="text" id="surname" name="surname" required>
                                        <br />
                                    </div>

                                    <div class="form-group">
                                        <label for="login">Логин:</label>
                                        <input type="text" id="login" name="login" required>
                                        <br />
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Пароль:</label>
                                        <input type="password" id="password" name="password" required>
                                        <br />
                                    </div>

                                    <div class="form-group">
                                        <label for="login">Почта:</label>
                                        <input type="email" id="mail" name="mail" required>
                                        <br />
                                    </div>

                                   <div class="form-group">
                                         <label for="login">Телефон:</label>
                                        <input type="tel" id="phone" name="phone" required>
                                        <br />
                                    </div>
                                    <div class="login-checkbox">
                                        <label for="vehicle1"> Я соглашаюсь на <a class='confidential' href='https://www.dns-shop.ru/rules/policy/?utm_medium=organic&utm_source=bing&utm_referrer=https%3A%2F%2Fwww.bing.com%2F'> обработку персональных данных </a> </label><br>
                                        <input type="checkbox" required id="vehicle1" name="vehicle1" value="Bike">
                                    </div>    
                                    <div class="input-button">
                                        <button type="submit">Зарегистрироваться</button>
                                    </div>
                            </form>
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
            <a href='Confident.pdf' target='_blank'>Политика конфиденциальности </a>
        </div>

    </div>
</body>