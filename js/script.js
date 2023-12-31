$(function () {


    var defaultCurrenColor = "darkgray";
    var defaultColorChess = "white";
    var currentColor = getCurrentColor();

    $(document).on("click", ".select_color", selectColor);
    $(document).on("click", ".cell_board", changeColor);
    $(document).on("click", ".reset_chess", resetColorBoard);
    $(document).on("click", ".reset_palette", resetCurrentColor);

    function changeColor() {
        var $cell = $(this);
        if ($cell.attr("data-bgcolor") === currentColor) {
            resetColor($cell);
        } else {
            setCurrentColor($cell, currentColor);
        }
    }

    function selectColor() {
        var $cell = $(this);
        currentColor = $cell.attr("data-cell");
        $("tr td.current").removeClass("current");
        $cell.addClass("current");
        $.cookie('CURRENT-COLOR', currentColor, {expires: 7, path: '/'});
    }

    function resetColor($cell) {
        var currentColor = defaultColorChess;
        var attributeCell = $cell.attr("data-cell");
        $cell.css("background-color", currentColor);
        $cell.attr("data-bgcolor", currentColor);
        saveColor(attributeCell, currentColor);

    }

    function setCurrentColor($cell, currentColor) {
        var attributeCell = $cell.attr("data-cell");
        $cell.css("background-color", currentColor);
        $cell.attr("data-bgcolor", currentColor);
        saveColor(attributeCell, currentColor);
    }

    function saveColor(attributeCell, currentColor) {
        $.get("ajax/db.saver.php?cmd=add&cell=" + attributeCell + "&color=" + currentColor);
    }

    function resetColorBoard() {
        var $chess = $(".cell_board");
        $chess.css("background-color", defaultColorChess);
        $chess.attr('data-bgcolor', defaultColorChess);
        $.get("ajax/db.saver.php?cmd=rm_color");
    }

    function resetCurrentColor() {
        var $currentCell = $(".select_color:first");
        currentColor = defaultCurrenColor;
        $("tr td.current").removeClass("current");
        $currentCell.addClass('current');
        $.removeCookie('CURRENT-COLOR', {path: '/'});
    }

    function getCurrentColor() {
        if ($.cookie('CURRENT-COLOR') === undefined) {
            currentColor = defaultCurrenColor;
        } else {
            currentColor = $.cookie('CURRENT-COLOR');
        }
        return currentColor;
    }

});