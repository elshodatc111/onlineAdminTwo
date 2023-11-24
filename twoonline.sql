-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 24 2023 г., 19:31
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `twoonline`
--

-- --------------------------------------------------------

--
-- Структура таблицы `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `H1` varchar(50) NOT NULL,
  `P` varchar(70) NOT NULL,
  `Image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `banner`
--

INSERT INTO `banner` (`id`, `H1`, `P`, `Image`) VALUES
(1, 'Birinchi manner sozlamalari 50 ta belgidan iborat', 'Birinchi banner haqida 70 ta belgidan oshmasin', '01.jpg'),
(2, 'Ikkinchi banner 50 ta belgidan iborat', 'Ikkinchi banner 70 ta belgidan iborat bo\'lishi kerak', '02.jpg'),
(3, 'uchunchi banner 50 ta belgi', 'uchunchi banner 70 ta belgidan iborat bo\'lishi kerak', '03.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `cours_eye`
--

CREATE TABLE `cours_eye` (
  `id` int(11) NOT NULL,
  `CoursID` varchar(25) NOT NULL,
  `CoursName` varchar(70) NOT NULL,
  `CoursSumma` varchar(70) NOT NULL,
  `CoursImage` varchar(70) NOT NULL,
  `MavzuCount` varchar(70) NOT NULL,
  `CoursLine` varchar(70) NOT NULL,
  `Til` varchar(70) NOT NULL,
  `Daraja` varchar(70) NOT NULL,
  `Oqituvchi` varchar(70) NOT NULL,
  `Davomiylig` varchar(25) NOT NULL,
  `Video` varchar(150) NOT NULL,
  `Text` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `cours_eye`
--

INSERT INTO `cours_eye` (`id`, `CoursID`, `CoursName`, `CoursSumma`, `CoursImage`, `MavzuCount`, `CoursLine`, `Til`, `Daraja`, `Oqituvchi`, `Davomiylig`, `Video`, `Text`, `Date`) VALUES
(1, '152', '1-kurs', '50000', '01.jpg', '15', '15', 'o\'zbek', 'Oliy', 'Techer', '30kun', 'video.mp4', 'text', '2023-11-24 05:34:35'),
(2, '153', '2-1-kurs', '50000', '02.jpg', '15', '15', 'o\'zbek', 'Oliy', 'Techer', '30kun', 'video.mp4', 'text', '2023-11-24 05:34:55'),
(3, '154', '3-kurs', '50000', '03.jpg', '15', '15', 'o\'zbek', 'Oliy', 'Techer', '30kun', 'video.mp4', 'text', '2023-11-24 05:34:55'),
(4, '155', '4-kurs', '50000', '04.jpg', '15', '15', 'o\'zbek', 'Oliy', 'Techer', '30kun', 'video.mp4', 'text', '2023-11-24 05:34:55'),
(5, '156', '5-kurs', '50000', '05.jpg', '15', '15', 'o\'zbek', 'Oliy', 'Techer', '30kun', 'video.mp4', 'text', '2023-11-24 05:34:55');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UserID` varchar(25) NOT NULL,
  `FIO` varchar(70) NOT NULL,
  `Addres` varchar(120) NOT NULL,
  `Phone` varchar(25) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Image` varchar(45) NOT NULL,
  `Dates` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `UserID`, `FIO`, `Addres`, `Phone`, `Email`, `Image`, `Dates`) VALUES
(3, '1700850090', 'Elshod', 'elshodatc1116@gmail.com', '908830450ss', 'Qarshi shahar', '01.png', '2023-11-24 18:21:30'),
(4, '1700850217', 'Elshod', '', '908830450', '', '01.png', '2023-11-24 18:23:37');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cours_eye`
--
ALTER TABLE `cours_eye`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `cours_eye`
--
ALTER TABLE `cours_eye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
