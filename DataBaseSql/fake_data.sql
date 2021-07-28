-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 28 2021 г., 09:32
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fake_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fake_data`
--

CREATE TABLE `fake_data` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `count` int NOT NULL,
  `distance` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `fake_data`
--

INSERT INTO `fake_data` (`id`, `date`, `title`, `count`, `distance`) VALUES
(1, '2021-07-01', 'А', 10, 1909),
(2, '2021-07-02', 'Б', 20, 487),
(3, '2021-07-03', 'В', 30, 888),
(4, '2021-07-04', 'Г', 40, 300),
(5, '2021-07-05', 'Д', 50, 200),
(6, '2021-07-06', 'Е', 25, 1200),
(7, '2021-07-07', 'Ё', 35, 1000),
(8, '2021-07-08', 'Ж', 55, 444),
(9, '2021-07-09', 'Я', 15, 4224),
(10, '2021-07-10', 'З', 16, 23232),
(11, '2021-07-11', 'К', 17, 2121),
(12, '2021-07-12', 'Л', 12, 2121),
(13, '2021-07-15', 'М', 21, 2111),
(14, '2021-07-13', 'Н', 32, 1222),
(15, '2021-07-29', 'О', 234, 3999),
(16, '2021-07-27', 'П', 65, 3222),
(17, '2021-05-02', 'Р', 19, 1222),
(18, '2021-05-03', 'С', 9, 1299),
(19, '2021-05-12', 'Т', 8, 1963),
(20, '2021-05-22', 'У', 7, 1476),
(21, '2021-05-05', 'Ф', 6, 1556),
(22, '2021-05-08', 'Т', 55, 1666),
(23, '2021-06-15', 'М', 47, 1886),
(24, '2021-06-21', 'И', 47, 1887),
(25, '2021-05-17', 'Й', 74, 1222),
(26, '2021-07-12', 'Ь', 15, 1777),
(27, '2021-07-10', 'Ч', 65, 1800),
(28, '2021-07-01', 'О', 27, 1888),
(29, '2021-07-29', 'Л', 99, 1900),
(30, '2021-07-30', 'П', 92, 2000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `fake_data`
--
ALTER TABLE `fake_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `fake_data`
--
ALTER TABLE `fake_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
