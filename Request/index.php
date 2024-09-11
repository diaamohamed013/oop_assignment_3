<?php

require_once "Request.php";

$request = new Request();

$user = $request->get('username');
echo "User ID from GET: " . $user . "<br>";

$getParams = $request->getAllGet();

echo "All GET Parameters: ";
print_r($getParams);
echo "<br>";