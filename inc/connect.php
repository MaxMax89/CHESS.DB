<?php
$serverName = 'localhost';
$userName = 'root';
$dbName = 'chessProject';
$password = '';

try {
	$connect = new PDO("mysql:host=$serverName;dbname=$dbName;", $userName, $password);
} catch (PDOException $e) {
	die($e->getMessage());
}

