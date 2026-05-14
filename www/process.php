<?php
session_start();
$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$errors = [];

if (!$username) $errors[] = 'Имя обязательно';
if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Неверный email';

if ($errors) {
    $_SESSION['errors'] = $errors;
} else {
    $_SESSION['data'] = ['username' => $username, 'email' => $email];
    file_put_contents('data.txt', "$username;$email\n", FILE_APPEND);
    
    setcookie('username', $username, time() + 30*24*60*60, '/');
    setcookie('email', $email, time() + 30*24*60*60, '/');
}
header('Location: index.php');
exit;
