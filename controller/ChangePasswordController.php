<?php
include_once "BaseController.php";
include_once "model/HomeModel.php";
include_once "model/ChangePasswordModel.php";
class ChangePasswordController extends BaseController{
	function getChangePasswordPage(){
		session_start();
		if(!isset($_SESSION['id'])){
		    header('Location: index.php');
		}
		$model = new HomeModel;
		$info = $model -> selectInfo($_SESSION['id']);
		$data=['info' => $info];

		if(isset($_POST['submit']))
		{
			$newPassHash = password_hash($_POST['newPass1'],PASSWORD_DEFAULT);
			if(empty($_POST['oldPass'])||empty($_POST['newPass1'])||empty($_POST['newPass2'])){
				$_SESSION['show'] = 'Bạn chưa nhập đủ thông tin, vui lòng nhập đủ';
			}
			else if($_POST['newPass1'] != $_POST['newPass2']){
				$_SESSION['show'] = 'Mật khẩu mới không giống mật khẩu mới (nhập lại)';
			}
			else if(!password_verify($_POST['oldPass'],$info['password'])){
				$_SESSION['show'] = 'Mật khẩu cũ không chính xác!';
			}
			else{
				$model = new ChangePasswordModel;
				$result = $model->updatePassword($_SESSION['id'],$newPassHash);
				if($result){
					$_SESSION['show'] = 'Đổi mật khẩu thành công';
				}
				else{
					$_SESSION['show'] = 'Đổi mật khẩu thất bại';
				}
			}
		}
		$this->loadView('change-password','Đổi mật khẩu',$data);
	}
}
?>