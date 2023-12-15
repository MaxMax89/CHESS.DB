<?php

include($_SERVER["DOCUMENT_ROOT"]."/inc/connect.php");
include($_SERVER["DOCUMENT_ROOT"]."/app/Tools.php");

$objTools = new TOOLS($connect);

$cell = $_GET['cell'];
$color = $_GET['color'];

if ($_GET['cmd'] == 'add') {
    $objTools::saveColor($color, $cell);
}

if ($_GET['cmd'] == 'rm_color') {
    $objTools::resetColor();
}

$connect->close();

