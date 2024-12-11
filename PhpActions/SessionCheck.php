<?php //проверяем сессию, если она есть, то значит уже авторизовались
   if (isset($_SESSION['id'])){
        echo htmlspecialchars($_SESSION['ogin'])." <br />"."Вы авторизованы <br />
        Т.е. мы проверили сессию и можем открыть доступ к определенным данным";
   } else {
        $login = '';
        //проверяем куку, может он уже заходил сюда
        if (isset($_COOKIE['CookieMy'])){
                $login = htmlspecialchars($_COOKIE['CookieMy']);
        }
   }
?>