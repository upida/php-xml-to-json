<?php

$soapResponse = file_get_contents('php://input');

function SoapParse ($soap) {
    $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $soap);
    $xml = new SimpleXMLElement($response);
    return json_encode($xml);
}

// Load XML string
$jsonString = SoapParse($soapResponse);

echo $jsonString;
