<?php
include_once "BaseController.php";
class IndexController extends BaseController{
	function getIndex(){
		session_start();
		return $this->loadView('index');
	}
}

?>