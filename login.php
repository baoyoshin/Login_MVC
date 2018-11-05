<?php
include_once "controller/LoginController.php";
$c = new LoginController;
return $c->getLoginPage();

?>