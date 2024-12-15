<?php
require_once __DIR__ . "/../PhpActions/init.php"; 
{
                                $passwordData = $_POST['password'];
                                $hashed_password = password_hash($passwordData, PASSWORD_DEFAULT);
                                
                                // Параметры для подключения
                                $servername = "localhost";
                                $database = "shopdns";
                                $username = "root";
                                $password = "";
                                // Создаем соединение
                                $conn = mysqli_connect($servername, $username, $password, $database);
                                // Проверяем соединение
                                echo "Connection success";
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }
                                $sql = "SELECT * FROM users WHERE login = ? ";
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("s", $_POST['login']);
                                $stmt->execute();
                                $stmt->store_result();
                                if ($stmt->num_rows() > 0) {
                                    flash("Пользователь с таким логином уже существует");
                                    header('Location: ../Pages/Registration.php');
                                    die;
                                }

                                $sql = "INSERT INTO users (lastname, name, surname, login, mail, phonenumber, passwordhash)
                                VALUES (?, ?, ?, ?, ?, ?, ?)";
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("sssssss", $_POST['lastname'], $_POST['name'], $_POST['surname'], $_POST['login'], $_POST['mail'], $_POST['phone'], $hashed_password);
                                
                                if ($stmt->execute() === TRUE) {
                                    flash("Регистрация пройдена успешно");
                                } else {
                                    flash("Не получилось зарегистрироваться. Попробуйте позже");
                                }
                                
                                mysqli_close($conn);
                            }
?>

<head>
    <meta http-equiv="refresh" content="0; ../Pages/Registration.php" />
</head>