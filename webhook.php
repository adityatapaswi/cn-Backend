<?php

require_once("ServiceHandler.php");
require_once("./SimpleRest.php");

$rest = new SimpleRest();

parse_str(file_get_contents("php://input"), $reqdata);
$reqdata = (object) $reqdata;
$ServiceHandler = new ServiceHandler();
$ServiceHandler->completePayment($reqdata);
?>
