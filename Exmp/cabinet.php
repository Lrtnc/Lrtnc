<?php
// контроллер страницы регистрации

require 'components/Pets.php';
require 'core/AddPet.php';

//DBConnect::d($_POST);
//DBConnect::d($_FILES);

// обработка формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST'){ // если отправлена форма
    // проверяем данные
    list($errors, $input) = AddPet::validateForm();

//    DBConnect::d($input);
//    DBConnect::d($errors);

    if($errors){// если есть хотя бы один элемент в массиве с ошибками
        // показываем форму снова и отображаем ошибки
        require 'components/cabinet_view.php';
    }else{// если ошибок нет
        // записываем данные в БД
        AddPet::processForm($input);
        header('Location: ../mypet.php');

    }

} else{// если форма загружена впервые
    $input = [];
    $errors = [];
    // отображаем форму
    require 'components/cabinet_view.php';

}
