<?php
    session_start();
    setcookie ("login", "", time()-14800, "/");
    session_destroy();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>