<?php
include_once "model/LoginModel.php";
include_once "BaseController.php";
Class LoginController extends BaseController{
	function getLoginPage(){
		session_start();
		if(isset($_POST['submit'])){
			if(empty($_POST['email'])||empty($_POST['password'])){
				$_SESSION['show'] = "Bạn điền thiếu thông tin";
			}
			else{
				$email = $_POST['email'];
				$pass = $_POST['password'];
				$model = new LoginModel;
				$user = $model -> handlingLogin($email);
				$result = password_verify($pass,$user['password']);
				if($result){
					$_SESSION['id'] = $user['id'];
					$_SESSION['user'] = $user['fullname'];
					$_SESSION['email'] = $user['email'];
					header('Location: home.php');
				}
				else{
					$_SESSION['show'] = 'Đăng nhập thất bại';
				}
			}
		}
		return $this->loadView('login','Đăng nhập');
	}
}
?>