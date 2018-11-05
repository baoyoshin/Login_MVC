<?php
include_once "DBConnect.php";
class RegisterModel extends DBConnect{
	function handlingRegister($fullname, $email, $password){
		$sql = "INSERT INTO users(fullname, email, password) VALUES(?,?,?)";
		$data =[
			$fullname,
			$email,
			$password,
		];
		return $this->executeQuery($sql,$data);
	}
}

?>