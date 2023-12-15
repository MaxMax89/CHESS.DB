<?php

include($_SERVER["DOCUMENT_ROOT"]."/inc/connect.db.php");
include($_SERVER["DOCUMENT_ROOT"]."/inc/inc_func.php");

$cell = $_GET['cell'];
$color = $_GET['color'];

if ($_GET['cmd'] == 'add') {
	saveColor($color, $cell, $connect);
}

if ($_GET['cmd'] == 'rm_color') {
	resetColor($connect);
}

$connect->close();

