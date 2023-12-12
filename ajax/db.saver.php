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

$cell = $_GET['cell'];
$color = $_GET['color'];

if ($_GET['cmd'] == 'add') {
	saveColor($color, $cell, $connect);
}

if ($_GET['cmd'] == 'rm_color') {
	resetColor($connect);
}

function resetColor($connect)
{
	$connect->query("UPDATE `cell_data`
	                SET `color_cell` = 'white'");
}

function saveColor($color, $cell, $connect)
{
	$connect->query("UPDATE `cell_data`
		                 SET `color_cell` = '{$color}'
		                 WHERE `adress_cell`  ='{$cell}'");
}

$connect->close();

