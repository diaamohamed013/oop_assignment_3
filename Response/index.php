<?php 
require_once "Response.php";
// Usage example

$response = new Response(200, '<h1>Hello, World!</h1>', 'Content-Type', 'text/html');

// Setting status code
$response->setStatusCode(200);

// Setting headers
$response->setHeader('Content-Type', 'text/html');

// Setting body content
$response->setBody('<h1>Hello, World!</h1>');

// Sending the response
$response->sendResponse();