<?php
include_once "BaseController.php";
include_once "model/RegisterModel.php";
class RegisterController extends BaseController{
	function getRegisterPage(){
		session_start();
		if(isset($_POST['submit'])){
			$fullname = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$passwordHash = password_hash($password, PASSWORD_DEFAULT);
			if(empty($fullname)||empty($email)||empty($password)){
				$_SESSION['show'] = 'Bạn điền thiếu thông tin! Vui lòng điền đầy đủ';
			}
			else{
				$model = new RegisterModel();
				$result = $model -> handlingRegister($fullname,$email,$passwordHash);
				if($result){
					$_SESSION['show'] = 'Đăng kí thành công, vui lòng đăng nhập!';
				}
				else{
					$_SESSION['show'] = 'Đăng kí thất bại';
				}
			}
		}
		return $this->loadView('register','Đăng kí');
	}
}

?>