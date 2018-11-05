<?php
include_once "controller/RegisterController.php";
$c = new RegisterController();
return $c->getRegisterPage();
?>