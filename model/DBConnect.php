<?php

class DBConnect{
	private $db = null;
	function __construct($dbName = 'id7194462_dbname', $user = 'id7194462_dbuser', $password='1234554321'){
		try{
			$this->db = new PDO("mysql:host=localhost;port=3306;dbname=$dbName", $user, $password);
			$this->db->exec("set names utf8");
		}
		catch(\Exception $e){
			echo $e -> getMessage();
			die;
		}
	}
	//for Insert/Update/Delete
	function executeQuery($sql, $data=[]){
		$sttm = $this->db->prepare($sql);
		return $sttm->execute($data);
	}
	function setStatement($sql,$data=[]){
		$this->sttm = $this->db->prepare($sql);
		for($i = 1; $i <= count($data);$i++)
		{
			$this->sttm->bindValue($i,$data[$i-1]);
		}
		return $this->sttm->execute();
	}
	//for Select 1 row
	function loadOneRow($sql, $data=[]){
		$check = $this->setStatement($sql,$data);
		if($check)
		{
			return $this->sttm->fetch(PDO::FETCH_ASSOC);
		}
		return false;
	}
	//for select > 1 row
	function loadMoreRow($sql,$data=[]){
		$check = $this->setStatement($sql,$data);
		if($check)
		{
			return $this->sttm->fetchAll(PDO::FETCH_ASSOC);
		}
		return false;
	}

}

?>