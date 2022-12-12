<?php
require_once 'unirest-php/src/Unirest.php';

// Unirest Documentaion URL: https://github.com/Kong/unirest-php

// List of managers in Inventory System Database
$response = Unirest\Request::get("http://localhost:3000/catalog/managers");

$response->code;        // HTTP Status code
$response->headers;     // Headers
$response->body;        // Parsed body
$response->raw_body;    // Unparsed body

echo $response->raw_body;