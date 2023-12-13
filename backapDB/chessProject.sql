-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 13 2023 г., 05:30
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chessProject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cell_data`
--

CREATE TABLE `cell_data` (
  `id_cell` int NOT NULL,
  `adress_cell` varchar(2) NOT NULL,
  `color_cell` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `cell_data`
--

INSERT INTO `cell_data` (`id_cell`, `adress_cell`, `color_cell`) VALUES
(1, 'A8', 'white'),
(2, 'B8', 'white'),
(3, 'C8', 'white'),
(4, 'D8', 'white'),
(5, 'E8', 'white'),
(6, 'F8', 'white'),
(7, 'G8', 'white'),
(8, 'H8', 'white'),
(9, 'A7', 'white'),
(10, 'B7', 'white'),
(11, 'C7', 'white'),
(12, 'D7', 'white'),
(13, 'E7', 'white'),
(14, 'F7', 'white'),
(15, 'G7', 'white'),
(16, 'H7', 'white'),
(17, 'A6', 'white'),
(18, 'B6', 'white'),
(19, 'C6', 'white'),
(20, 'D6', 'white'),
(21, 'E6', 'white'),
(22, 'F6', 'white'),
(23, 'G6', 'white'),
(24, 'H6', 'white'),
(25, 'A5', 'white'),
(26, 'B5', 'white'),
(27, 'C5', 'white'),
(28, 'D5', 'white'),
(29, 'E5', 'white'),
(30, 'F5', 'white'),
(31, 'G5', 'white'),
(32, 'H5', 'white'),
(33, 'A4', 'white'),
(34, 'B4', 'white'),
(35, 'C4', 'white'),
(36, 'D4', 'white'),
(37, 'E4', 'white'),
(38, 'F4', 'white'),
(39, 'G4', 'white'),
(40, 'H4', 'white'),
(41, 'A3', 'white'),
(42, 'B3', 'white'),
(43, 'C3', 'white'),
(44, 'D3', 'white'),
(45, 'E3', 'white'),
(46, 'F3', 'white'),
(47, 'G3', 'white'),
(48, 'H3', 'white'),
(49, 'A2', 'white'),
(50, 'B2', 'white'),
(51, 'C2', 'white'),
(52, 'D2', 'white'),
(53, 'E2', 'white'),
(54, 'F2', 'white'),
(55, 'G2', 'white'),
(56, 'H2', 'white'),
(57, 'A1', 'white'),
(58, 'B1', 'white'),
(59, 'C1', 'white'),
(60, 'D1', 'white'),
(61, 'E1', 'white'),
(62, 'F1', 'white'),
(63, 'G1', 'white'),
(64, 'H1', 'white');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cell_data`
--
ALTER TABLE `cell_data`
  ADD PRIMARY KEY (`id_cell`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cell_data`
--
ALTER TABLE `cell_data`
  MODIFY `id_cell` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
