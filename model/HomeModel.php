<?php
include_once "DBConnect.php";
class HomeModel extends DBConnect{
	function selectInfo($id){
		$sql = "SELECT *
				FROM users
				WHERE id = $id";
		return $this->loadOneRow($sql);
	}
}
?>