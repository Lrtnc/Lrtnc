<?php
session_start();
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>Коржик</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:wght@100;200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="logo/2.png" type="image/x-icon">

    <script defer src="../script/enter_form.js"></script>
    <script defer src="../script/exit_form.js"></script>
    <script defer src="../script/wanted.js"></script>
</head>
<header>
    <nav>
    <a class='a1' href='../index.php'>Главная страница</a>
        <?php if(isset($_SESSION['valid_user'])):?>
    <a class='a1' href='../mypet.php'>Мой питомец</a>
        <?php endif;?>
<!--    <a class='a1' href='../vet.php'>Ветклиники</a>-->
    <a class='a1' href='../wanted.php'>Объявления</a>
        <?php if(isset($_SESSION['valid_user'])):?>
    <div class="reg_form">
            <a class='a1' onclick='closebox()'>Привет, <?=$_SESSION['valid_user']?></a>
        <div class="exit_form" id="ef">
            <a class='a1' href='../components/exit.php'>Выход</a>
        </div>
    </div>
        <?php else:?>
            <?php require 'enter_form.php'; ?>
        <?php endif;?>

    </nav>

</header>

