<?php

echo '<h1>Hi There, PHP SOAP API Web Service</h1>';

// Create the SoapClient instance
$client = new SoapClient(null, [
    "trace" => true,
    "uri" => "uri is the target namespace of the SOAP service",
    "location" => "https://localhost/server.php",
]);


var_dump($client->__soapCall("getMessage", []));