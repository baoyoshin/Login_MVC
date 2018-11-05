<?php
class LogoutController{
	function logoutPage(){
		session_start();
		session_destroy();	
		header('Location:index.php');
	}
}

?>