<?php
include_once "DBConnect.php";
class LoginModel extends DBConnect{
	function handlingLogin($email){
		$sql = "SELECT *
				FROM users
				WHERE email = '$email'";
		return $this->loadOneRow($sql);
	}
}

?>