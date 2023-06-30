<?php
// контроллер страницы регистрации

require 'components/Users.php';
require 'core/SignUp.php';

//DBConnect::d($_POST);
//DBConnect::d($_FILES);

// обработка формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST'){ // если отправлена форма
    // проверяем данные
    list($errors, $input) = SignUp::validateForm();

    DBConnect::d($input);
    DBConnect::d($errors);

    if($errors){// если есть хотя бы один элемент в массиве с ошибками
        // показываем форму снова и отображаем ошибки
        require 'components/reg_form.php';
    }else{// если ошибок нет
        // записываем данные в БД
        echo 'Ура!!!';
        SignUp::processForm($input);
        setcookie($input['first_name'], $first_name, time() + 60);
    }

} else{// если форма загружена впервые
    $input = [];
    $errors = [];
    // отображаем форму
    require 'components/reg_form.php';
}



