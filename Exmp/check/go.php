<?php
require 'DBConnect.php';


$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

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

if (password_verify($password, $user['password'])) { echo '<script>alert("Такой пользователь найден")</script>';

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