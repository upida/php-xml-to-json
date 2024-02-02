<?php

$request = file_get_contents('php://input');

$json = simplexml_load_string($request);
$json = json_encode($json);

echo $json;