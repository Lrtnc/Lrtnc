<?php
class AddPet
{


    private static function ValidatePetname($pet_name){
        $reg_exp = "/^[a-я]{2,}$/iu";

        if(strlen($pet_name) === 0){
            return 'Введите имя';
        }elseif (!preg_match($reg_exp, $pet_name)){
            return 'Имя должно содержать только русские буквы и быть не менее двух букв';
        }
    }

    private static function validateBreed($breed){
        $reg_exp = "/^[a-я]{2,}$/iu";

        if(strlen($breed) === 0){// если строка пуста
            return 'Введите породу';
        }elseif (!preg_match($reg_exp, $breed)){// если строка НЕ соответствует рег выражению
            return 'Порода должна содержать только русские буквы и быть не менее двух букв';
        }
    }

    private static function validateAge($age){
        $reg_exp = "/[0-9]/u";

        if(strlen($age) === 0){
            return 'Введите возраст питомца';
        }elseif (!preg_match($reg_exp, $age)){
            return 'Введите возраст цифрой';
        }

    }

    private static function validateChip($chip){
        $reg_exp = "/[а-я]/iu";

        if(strlen($chip) === 0){
            return 'Введите да или нет';
        }elseif (!preg_match($reg_exp, $chip)){
            return 'Только русскими буквами';
        }
    }

    private static function validateTattoo($tattoo){
        $reg_exp = "/^[a-z a-z0-9 а-я]+$/iu";


        if(strlen($tattoo) === 0){
            return 'Введите номер тату';
        }elseif (!preg_match($reg_exp, $tattoo)){
            return 'Номер должен из шести произвольных символов';
        }
    }

    public static function validateForm(){

        $errors = [];
        $input = [];

        $input['pet_name'] = htmlspecialchars(trim($_POST['pet_name']));
        $input['breed'] = htmlspecialchars(trim($_POST['breed']));
        $input['age'] = htmlspecialchars(trim($_POST['age']));
        $input['chip'] = htmlspecialchars(trim($_POST['chip']));
        $input['tattoo'] = htmlspecialchars(trim($_POST['tattoo']));



        // проверка имени
        $firstNameError = self::ValidatePetname($input['pet_name']);
        if($firstNameError){
            $errors['pet_name'] = $firstNameError;
        }

        // проверка фамилии
        $lastNameError = self::validateBreed($input['breed']);
        if($lastNameError){
            $errors['breed'] = $lastNameError;
        }

        // проверка логина
        $loginError = self::validateAge($input['age']);
        if($loginError){
            $errors['breed'] = $loginError;
        }

        // проверка пароля
        $passwordError = self::validateChip($input['chip']);
        if($passwordError){
            $errors['chip'] = $passwordError;
        }

        $passwordError = self::validateTattoo($input['tattoo']);
        if($passwordError){
            $errors['tattoo'] = $passwordError;
        }

        return [$errors, $input];
    }



    public static function processForm($input){
        $input['photo'] = '../logo/1.png';
        session_start();
        $input['user_login'] = $_SESSION['valid_user'];



        // добавить строку в табличку в БД
        Pets::AddPet($input);
    }





}