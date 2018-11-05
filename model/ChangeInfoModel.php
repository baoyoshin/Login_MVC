<?php
include_once "DBConnect.php";
class ChangeInfoModel extends DBConnect{
	function updateInfo($id,$fullname,$location,$work){
		$sql = "UPDATE users
				SET fullname =?, location=?, work = ? 
				WHERE id = $id";
		return $this->executeQuery($sql,[$fullname,$location,$work]);
	}
}
?>