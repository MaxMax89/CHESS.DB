<?php

include($_SERVER["DOCUMENT_ROOT"]."/inc/connect.php");
include($_SERVER["DOCUMENT_ROOT"]."/app/Tools.php");

$objTools = new TOOLS($connect);
$chessData = $objTools::getChessData();






