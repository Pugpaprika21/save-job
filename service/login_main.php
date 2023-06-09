<?php 

require_once __DIR__ . "../../src/include/include.php";

$api = new API();

$request = $api->setRequest();

echo $api->setResponse($request, "OK");
