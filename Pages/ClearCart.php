<?php
    require_once __DIR__ . "/../PhpActions/init.php";

    // Параметры для подключения
    $servername = "localhost";
    $database = "shopdns";
    $username = "root";
    $password = "";
    // Создаем соединение
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Проверяем соединение

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    unset($_SESSION['CartDataArray']);
    unset($_SESSION['CartDataTrue']);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
