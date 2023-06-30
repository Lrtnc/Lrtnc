<?php require 'components/header_and_menu.php';?>

<div class="testbox" id="testbox" >
    <h1>Заполните данные питомца</h1>
    <form action=" " method="post" enctype="multipart/form-data">
        <input type="text" name="pet_name" id="name" value="<?=$input['pet_name'] ?? ''?>" placeholder="Имя питомца" required/ >
        <span class="input-error"><?=$errors['pet_name'] ?? ''?></span>
        <input type="text" name="breed" id="name"  value="<?=$input['breed'] ?? ''?>" placeholder="Порода" required/>
        <span class="input-error"><?=$errors['breed'] ?? '' ?></span>
        <input type="text" name="age" id="name"  value="<?=$input['age'] ?? ''?>" placeholder="Возраст" required/>
        <span class="input-error"><?=$errors['age'] ?? '' ?></span>
        <input type="text" name="chip" id="name" value="<?=$input['chip'] ?? ''?>" placeholder="Чипирован ли питомец" required/>
        <span class="input-error"><?=$errors['chip'] ?? '' ?></span>
        <input type="text" name="tattoo" id="name"  value="<?=$input['tattoo'] ?? ''?>" placeholder="Номер тату" required/>
        <span class="input-error"><?=$errors['tattoo'] ?? '' ?></span>
        <div class="row form-group">
            <br>
            <div class="col-md-12">
                <input type="file" name="Photo" class="form-control">

                <span class="input-error"></span>
            <br>
        </div>
        <input type="submit" class="signupbtn"  id="enter_a" value="Зарегестрироваться">
    </form>

</div>
