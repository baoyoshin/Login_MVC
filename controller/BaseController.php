<?php
class BaseController{
	function loadView($view='index',$title='Trang chủ',$data=[]){
		include_once "view/layout.view.php";
	}
}
?>