<?php

$symbolsList = range('A', 'Z');

$countCol = 8;
$countRow = 8;

$symbols = range("A", $symbolsList[$countCol - 1]);
$numbers = range($countRow, 1);

include ("inc/inc_chess_data.php");
include("inc/inc_buttons.php");

//$chessData = getChessData($connect);

$board = "<table class='board'>";

$board .= getSymbolsLine($symbols, $countRow);

foreach (array_chunk($chessData, $countRow, TRUE) as $key => $value) {
	$board .= "<tr>";
	$board .= "<td class='coordinates'>{$numbers[$key]}</td>";
	foreach ($value as  $v) {
		$board .= getTdCell($v);
	}
	$board .= "<td class='coordinates'>{$numbers[$key]}</td>";
	$board .= "</tr>";
}

$board .= getSymbolsLine($symbols, $countRow);

$board .= "</table>";


echo $board;

//debug($cellList);
function getTdCell($v)
{
	$tdCell = "<td class='cell_board'";
	$tdCell .= " data-cell='{$v['adress_cell']}'";
	$tdCell .= " data-bgcolor= " . $v['color_cell'] . "";
	$tdCell .= " style='background-color:" . $v['color_cell'] . ";";
	$tdCell .= "'>{$v['adress_cell']}</td>";
	return $tdCell;
}

function getSymbolsLine($symbols, $countRow)
{
	$str = "<tr>";
	$str .= "<td class=\"coordinates\"></td>";

	for ($col = 1; $col <= $countRow; $col++) {
		$str .= "<td class=\"coordinates\">" . $symbols[$col - 1] . "</td>";
	}

	$str .= "<td class=\"coordinates\"></td>";
	$str .= "</tr>";
	return $str;
}






function debug($data){
	echo '<pre>';
	print_r($data);
	echo '<pre>';
}


?>


           