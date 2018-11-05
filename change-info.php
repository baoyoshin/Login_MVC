<?php
include_once "controller/ChangeInfoController.php";
$c = new ChangeInfoController;
return $c->getChangeInfoPage();
?>