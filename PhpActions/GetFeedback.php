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
                                echo "Connection success";
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }
                                
                                $sql = "INSERT INTO feedback (name, phonenumber, message)
                                VALUES (?, ?, ?)";
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("sss", $_POST['name'], $_POST['phone'], $_POST['feedback_text']);
                                
                                if ($stmt->execute() === TRUE) {
                                    flash("Форма отправлена успешно");
                                } else {
                                    flash("Не получилось отправить форму. Попробуйте позже.");
                                }
                                
                                mysqli_close($conn);
?>

<head>
<meta http-equiv="refresh" content="0; ../Pages/Feedback.php" />
</head>
