<?php
require 'Model.php';

class User extends Model
{

	protected static $table = 'users';

	public function insert()
	{

		$newUser = self::$dbc->prepare('INSERT INTO users (first_name, last_name, email, phone, street_address_1, street_address_2, city, state, zip) VALUES (:first_name, :last_name, :email, :phone, :street_address_1, :street_address_2, :city, :state, :zip)');
	    $newUser->bindValue(':first_name', $this->attributes['first_name'], PDO::PARAM_STR);
		$newUser->bindValue(':last_name', $this->attributes['last_name'], PDO::PARAM_STR);
		$newUser->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
		$newUser->bindValue(':phone', $this->attributes['phone'], PDO::PARAM_STR);
		$newUser->bindValue(':street_address_1', $this->attributes['street_address_1'], PDO::PARAM_INT);
		$newUser->bindValue(':street_address_2', $this->attributes['street_address_2'], PDO::PARAM_STR);
		$newUser->bindValue(':city', $this->attributes['city'], PDO::PARAM_STR);
		$newUser->bindValue(':state', $this->attributes['state'], PDO::PARAM_STR);
		$newUser->bindValue(':zip', $this->attributes['zip'], PDO::PARAM_STR);
	    $newUser->execute();
	}

	public function update($id)
	{
        self::dbConnect();
        $table = static::$table;

        $query = "UPDATE $table SET ";
        $firstValue = true;

		foreach ($this->attributes as $key => $value) {
			if($key == 'id'){
				continue;
			} 

			if($firstValue){
				$firstValue = false;
				$query .= $key . ' = :' . $key;
			} else {
				$query .= ', ' . $key . ' = :' . $key;
			}
		}
		
		$query .= " WHERE id = :id";

		$stmt = self::$dbc->prepare($query);
		
		foreach ($this->attributes as $key => $value){
			$stmt->bindValue(':' . $key, $value, PDO::PARAM_STR);
		}

		$stmt->execute();
		
	} 

}