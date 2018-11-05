<?php
include_once "controller/StatusController.php";
$c = new StatusController;
return $c -> getStatusPage();
?>