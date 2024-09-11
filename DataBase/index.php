<?php 

require_once "Database.php";

$db = new Database('localhost', 'root', '', 'zay-store');

$results = $db->fetchAsso('SELECT * FROM users');

echo "<pre>";
var_dump($results);
echo "</pre>";

$db->closeConn();