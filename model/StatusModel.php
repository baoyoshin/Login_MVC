<?php
include_once "DBConnect.php";
class StatusModel extends DBConnect{
	function selectStatus(){
		$sql = "SELECT *
				FROM status
				ORDER BY id DESC
				LIMIT 0,5";
		return $this->loadMoreRow($sql);
	}
	function insertStatus($fullname,$email,$content){
		$sql = "INSERT INTO status(fullname, email, content) VALUES(?,?,?)";
		$data = [
			$fullname,
			$email,
			$content,
		];
		return $this->executeQuery($sql,$data);
	}
}
?>