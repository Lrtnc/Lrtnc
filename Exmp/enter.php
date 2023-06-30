<?php
require 'server/DBConnect.php';

$login = filter_var(trim($_POST['login']));
$password = filter_var(trim($_POST['password']));

// sql запрос в базу (знак "?" это заглушка
// в которую мы подставим значение в execute далее)
$pdo = DBConnect::getConnection();
$sql = "SELECT * FROM `users` WHERE `login` = ?";
$query = $pdo->prepare($sql);

// Сейчас как раз подставляем значение в нашу "?" - загрушку выше.
$query->execute([$login]);
// В данном случае лучше использовать fetch вместо fetchAll,
// так ищем в базе только 1 совпадение
$user = $query->fetch(PDO::FETCH_ASSOC);
echo d($user);

// Теперь проверяем правильный ли введен пароль
// с помощью password_verify()

if (password_verify($password, $user['password']))
{    session_start();
    $_SESSION['valid_user'] = $login;
    // перенаправить на главную страницу
    header('Location: /');

}else {

    echo '<script>alert("Такой пользователь не найден")</script>';
    exit();
}

print_r($user);

function d($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

