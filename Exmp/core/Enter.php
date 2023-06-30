<?php
require 'DBConnect.php';

class Enter
{
    public static function Enter()
    {
        $error = array(); //массив для ошибок
        if ($_POST['login'] != "" && $_POST['password'] != "") //если поля заполнены

        {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $pdo = DBConnect::getConnection();
            $result = $query->("SELECT * FROM users WHERE login=?"); //запрашивается строка из базы данных с логином, введённым пользователем
            if (mysql_num_rows($result) == 1) //если нашлась одна строка, значит такой юзер существует в базе данных

            {
                $row = mysql_fetch_assoc($rez);
                if (md5(md5($password).$row['salt']) == $row['password']) //сравнивается хэшированный пароль из базы данных с хэшированными паролем, введённым пользователем

                {
                    //пишутся логин и хэшированный пароль в cookie, также создаётся переменная сессии
                    setcookie ("login", $row['login'], time() + 50000);
                    setcookie ("password", md5($row['login'].$row['password']), time() + 50000);
                    $_SESSION['id'] = $row['id'];   //записываем в сессию id пользователя

                    $id = $_SESSION['id'];
                    lastAct($id);
                    return $error;
                }
                else //если пароли не совпали

                {
                    $error[] = "Неверный пароль";
                    return $error;
                }
            }
            else //если такого пользователя не найдено в базе данных

            {
                $error[] = "Неверный логин и пароль";
                return $error;
            }
        }


        else
        {
            $error[] = "Поля не должны быть пустыми!";
            return $error;
        }

    }
    }




}