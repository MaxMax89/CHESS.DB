<?php

function getChessData($connect)
{
    $chessData = [];
    $result = $connect->query("SELECT * FROM `cell_data`");
    while ($row = $result->fetch()) {
        $chessData[$row['id_cell']] = ['adress_cell' => $row['adress_cell'], 'color_cell' => $row['color_cell']];
    }
    return $chessData;
}

function resetColor($connect)
{
    $connect->query("UPDATE `cell_data` SET `color_cell` = 'white'");
}

function saveColor($color, $cell, $connect)
{
    $connect->query("UPDATE `cell_data` SET `color_cell` = '{$color}' WHERE `adress_cell`  ='{$cell}'");
}