<?php require 'header_and_menu.php';?>

<div class="testbox" id="testbox" >
    <h1>Регистрация</h1>
    <form action=" " method="post" enctype="multipart/form-data">
        <input type="text" name="first_name" id="name" value="<?=$input['first_name'] ?? ''?>" placeholder="Имя" required/ >
        <span class="input-error"><?=$errors['first_name'] ?? '' ?></span>
        <input type="text" name="last_name" id="name"  value="<?=$input['last_name'] ?? ''?>" placeholder="Фамилия" required/>
        <span class="input-error"><?=$errors['last_name'] ?? '' ?></span>
        <input type="text" name="email" id="name" value="<?=$input['email'] ?? ''?>" placeholder="Email" required/>
        <span class="input-error"><?=$errors['email'] ?? '' ?></span>
        <input type="text" name="login" id="name"  value="<?=$input['login'] ?? ''?>" placeholder="Имя пользователя" required/>
        <span class="input-error"><?=$errors['login'] ?? '' ?></span>
        <input type="password" name="password" id="name"  value="<?=$input['password'] ?? ''?>" placeholder="Пароль" required/>
        <span class="input-error"><?=$errors['password'] ?? '' ?></span>
        <p>By clicking Register, you agree on <br> our <a href="#">terms and condition</a>.</p>
        <input type="submit" class="signupbtn"  id="enter_a" value="Зарегестрироваться">
    </form>
</div>

