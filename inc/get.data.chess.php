<?php

include("connect.db.php");

$chessData = getChessData($connect);

function getChessData($connect)
{
	$chessData = [];
	$result = $connect->query("SELECT * FROM `cell_data`");
	while ($row = $result->fetch()) {
		$chessData[$row['id_cell']] = ['adress_cell' => $row['adress_cell'], 'color_cell' => $row['color_cell']];
	}
	return $chessData;
}

$connect->close();

