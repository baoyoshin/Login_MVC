<?php
include_once "BaseController.php";
include_once "model/StatusModel.php";
include_once "model/HomeModel.php";
class HomeController extends BaseController{
	function getHomePage(){
		session_start();
		$model = new StatusModel;
		$status = $model->selectStatus();
		if(!isset($_SESSION['id'])){
		    header('Location: index.php');
		}
		$model = new HomeModel;
		$info = $model->selectInfo($_SESSION['id']);
		$data = [
			'status' => $status,
			'info' => $info,
		];
		return $this->loadView('home','Trang chủ',$data);
	}
}

?>