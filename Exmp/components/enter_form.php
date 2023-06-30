

<div class="enter_form" >
    <a class="a1" onclick="document.getElementById('id01').style.display='block'">Вход/Регистрация</a>
    <div id="id01" class="modal">
        <form class="modal-content" method="POST" action="/enter.php">
            <div class="enter_container" >
                <p class="p1">Введите имя пользователя и пароль</p>
                <hr>
                <form >
                <input type="text" value="<?=$input['login'] ?? ''?>" placeholder="Логин" name="login" required>
                <span class="input-error"><?=$errors['login'] ?? '' ?></span>
                <input type="password" value="<?=$input['password'] ?? ''?>" placeholder=" Пароль" name="password" required>
                <span class="input-error"><?=$errors['password'] ?? '' ?></span>
<!--                <label class="check_box">-->
<!--                    <input type="checkbox" checked="checked" name="remember"> Запомнить меня-->
<!--                </label>-->

                    <input  type="submit" class="signupbtn"  id="enter_a" value="Войти">
                </form>
        </form>
        <a class="a2" id="reg_a" href="../registration.php" ">Регистрация</a>
        </div>
    </div>

