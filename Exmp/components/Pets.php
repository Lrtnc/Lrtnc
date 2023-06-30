<?php
require 'DBConnect.php';

class Pets{

	public static function AddPet($pet){
		$pdo = DBConnect::getConnection(); // подключаемся к бд

		$query = "INSERT INTO my_pet (pet_name, breed, age, chip, tattoo, photo, user_login)
							VALUES(?, ?, ?, ?, ?, ?, ?)";

		$result =	$pdo->prepare($query);
		$result->execute([$pet['pet_name'], $pet['breed'], $pet['age'],
            $pet['chip'], $pet['tattoo'], $pet['photo'],$pet['user_login']]);

	}
}