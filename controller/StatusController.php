<?php
include_once "BaseController.php";
include_once "model/StatusModel.php";
include_once "model/HomeModel.php";
class StatusController extends BaseController{
	function getStatusPage(){
		session_start();
		if(isset($_POST['submit'])){
			if(empty($_POST['content']))
				$_SESSION['show'] = "Bạn chưa ghi gì cả";
			else{
				$content = $_POST['content'];
				$model = new StatusModel;
				$result = $model -> insertStatus($_SESSION['user'],$_SESSION['email'],$content);
				if($result){
					$_SESSION['show'] = "Đăng thành công";
				}else{
					$_SESSION['show'] = "Đăng thất bại";
				}
			}
		}
		if(!isset($_SESSION['id'])){
		    header('Location: index.php');
		}
		$model = new HomeModel;
		$info = $model->selectInfo($_SESSION['id']);
		$data = [
			'info' => $info,
		];
		return $this->loadView('status','Cập nhật trạng thái',$data);
	}
}
?>