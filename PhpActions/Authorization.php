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

   if (isset($_POST['login']) && isset($_POST['password'])){
    //немного профильтруем логин
    $login = mysqli_real_escape_string($conn, htmlspecialchars($_POST['login']));
    $passwordData = $_POST['password'];
     // проверяем введенные данные
    $sql = "SELECT id, login, passwordhash FROM users WHERE login = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_POST['login']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $login, $password);
        $stmt->fetch();
        if (password_verify($_POST['password'], $password)) {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['id'] = $id;
            setcookie ("login", $_POST['login'], time()+ 3600 * 48, "/");
            setcookie ("login", $_POST['id'], time()+ 3600 * 48, "/");
        } else {
            // Incorrect password
            flash("Неверный пароль");
            header('Location: ../Pages/Login.php');
            die;
        }
    } else {
        // Incorrect username
        flash("Неверный логин");
        header('Location: ../Pages/Login.php');
        die;
    }
    flash("Вход выполнен успешно");
    header('Location: ../Pages/Index.php');         
   } 
   ?>