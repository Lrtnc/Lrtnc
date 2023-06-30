<?php require 'DBConnect.php';
$pdo = DBConnect::getConnection();


//$pet['user_login'] = $_SESSION['valid_user'];
//
//$query = "SELECT FROM my_pet
//    pet_name, breed, age,chip,tattoo,photo,user_login";
$valid = $_SESSION['valid_user'];

$result = $pdo->prepare('SELECT * FROM my_pet WHERE user_login = :user_login');
$result->execute(['user_login' => $valid]);?>


<div class="container">
<div class="user_block">
        <img class="user_img" src="../logo/avatar-default-symbolic.256x243.png">
        <div class="user_name"><?= $_SESSION['valid_user']?></div>
        <a class ='a3' href="cabinet.php">Добавить питомца</a>
    </div>
<post-my-pet>
    <?php while( $my_pet = $result->fetch() ):?>
    <div class="pet_block">
        <form method="post">
        <div class="pet_name">Имя животного: <?=$my_pet['pet_name']?></div>
        <img class="pet_img" src="../logo/1.png">
        <div class="pet_breed">Порода: <?=$my_pet['breed']?></div>
        <div class="pet_age">Возраст: <?=$my_pet['age']?> </div>
        <div class="pet_chip">Чип: <?=$my_pet['chip']?></div>
        <div class="pet_tattoo">Татуировка: <?=$my_pet['tattoo']?></div>
    </div>
    </form>
    <div><div>
    <?php endwhile;?>


</post-my-pet>

</div>

