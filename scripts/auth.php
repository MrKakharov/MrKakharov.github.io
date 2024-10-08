<?php
session_start();

// Пример простого массива с логинами и паролями для демонстрации
$users = [
    'user1' => 'password123',
    'admin' => 'adminpassword'
];

// Получаем данные из формы
$username = $_POST['username'];
$password = $_POST['password'];

// Проверка логина и пароля
if (isset($users[$username]) && $users[$username] == $password) {
    $_SESSION['loggedin'] = true;
    header('Location: ../price-list.html'); // Перенаправляем на страницу с прайс-листом
} else {
    echo "Invalid username or password";
}
?>
