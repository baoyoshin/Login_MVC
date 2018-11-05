<?php
include_once "controller/ChangePasswordController.php";
$c = new ChangePasswordController;
return $c->getChangePasswordPage();
?>