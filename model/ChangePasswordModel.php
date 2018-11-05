<?php
include_once "DBConnect.php";
class ChangePasswordModel extends DBConnect{
	function updatePassword($id,$newPass){
		$sql = "UPDATE users
				SET password = ? 
				WHERE id = $id";
		return $this->executeQuery($sql,[$newPass]);
	}
}
?>