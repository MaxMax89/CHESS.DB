<?php

class TOOLS {

    private static $connect;

    function __construct($connect){
        self::$connect = $connect;
    }

    public static function getChessData()
    {
        $chessData = [];
        $result = self::$connect->query("SELECT * FROM `cell_data`");
        while ($row = $result->fetch()) {
            $chessData[$row['id_cell']] = ['adress_cell' => $row['adress_cell'], 'color_cell' => $row['color_cell']];
        }
        return $chessData;
    }

    public static function resetColor()
    {
        self::$connect->query("UPDATE `cell_data` SET `color_cell` = 'white'");
    }

    public function saveColor($color, $cell)
    {
        self::$connect->query("UPDATE `cell_data` SET `color_cell` = '{$color}' WHERE `adress_cell`  ='{$cell}'");
    }
}
