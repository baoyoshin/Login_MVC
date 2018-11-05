<?php
include_once "BaseController.php";
include_once "model/ChangeInfoModel.php";
include_once "model/HomeModel.php";
class ChangeInfoController extends BaseController{
	function getChangeInfoPage(){
		session_start();
		if(!isset($_SESSION['id'])){
		    header('Location: index.php');
		}
		if(isset($_GET['submit'])){
			if(empty($_GET['name'])||empty($_GET['location'])||empty($_GET['work']))
				$_SESSION['show'] = "Bạn chưa ghi gì cả";
			else{
				$fullname = $_GET['name'];
				$location = $_GET['location'];
				$work = $_GET['work'];
				$model = new ChangeInfoModel;
				$result = $model->updateInfo($_SESSION['id'],$fullname,$location,$work);
				if($result){
					$_SESSION['show'] = 'Sửa thông tin thành công';
				}else{
					$_SESSION['show'] = 'Sửa thông tin thất bại';
				}
			}
		}
		$model = new HomeModel;
		$info = $model->selectInfo($_SESSION['id']);
		$data = [
			'info' => $info,
		];
		return $this->loadView('change-info','Sửa thông tin',$data);
	}
}
?>