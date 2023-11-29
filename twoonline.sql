-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 29 2023 г., 14:18
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.0.28

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
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserID` varchar(11) NOT NULL,
  `FIO` varchar(45) NOT NULL,
  `Login` varchar(45) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Image` text NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `UserID`, `FIO`, `Login`, `Password`, `Image`, `Data`) VALUES
(1, '55555', 'Elshod Musurmonov', 'Admin', '202cb962ac59075b964b07152d234b70', '170124431717008979182.jpg', '2023-11-29 06:45:33'),
(4, '1701242459', 'Elshod Musurmonov', 'elshod123', '202cb962ac59075b964b07152d234b70', '01.png', '2023-11-29 07:20:59');

-- --------------------------------------------------------

--
-- Структура таблицы `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `H1` varchar(50) NOT NULL,
  `P` varchar(70) NOT NULL,
  `Image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `banner`
--

INSERT INTO `banner` (`id`, `H1`, `P`, `Image`) VALUES
(3, 'uchunchi banner 50 ta belgi', 'uchunchi banner 70 ta belgidan iborat bo\'lishi kerak', '03.jpg'),
(4, 'ssss', 'aaaa', '170124770301.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cours_eye`
--

INSERT INTO `cours_eye` (`id`, `CoursID`, `CoursName`, `CoursSumma`, `CoursImage`, `MavzuCount`, `CoursLine`, `Til`, `Daraja`, `Oqituvchi`, `Davomiylig`, `Video`, `Text`, `Date`) VALUES
(1, '152', '1-kurs', '50000', '01.jpg', '15', '15', 'o\'zbek', 'Oliy', 'Techer', '30', 'video.mp4', 'text', '2023-11-24 05:34:35'),
(2, '153', '2-1-kurs', '50000', '02.jpg', '15', '15', 'o\'zbek', 'Oliy', 'Techer', '30', 'video.mp4', 'text', '2023-11-24 05:34:55'),
(3, '154', '3-kurs', '50000', '03.jpg', '15', '15', 'o\'zbek', 'Oliy', 'Techer', '30', 'video.mp4', 'text', '2023-11-24 05:34:55'),
(4, '155', '4-kurs', '50000', '04.jpg', '15', '15', 'o\'zbek', 'Oliy', 'Techer', '30', 'video.mp4', 'text', '2023-11-24 05:34:55'),
(5, '156', 'Test uchun ochilgan guruh', '50000', '05.jpg', '15', '15:00:00', 'o`zbek', 'Oliy', 'Techer', '30111', 'video.mp4', 'Test uchun', '2023-11-24 05:34:55'),
(7, '1701249870', 'Salimov', '150000', '1701249870logo.jpg', '12', '12:12:12', '1212', '12121', '1212', '21212111111', '17012498701701249591video.mp4', '  121212', '2023-11-29 09:24:30');

-- --------------------------------------------------------

--
-- Структура таблицы `cours_mavzu`
--

CREATE TABLE `cours_mavzu` (
  `id` int(11) NOT NULL,
  `CoursID` varchar(11) NOT NULL,
  `MavzuID` varchar(11) NOT NULL,
  `MavzuName` varchar(70) NOT NULL,
  `Video` varchar(150) NOT NULL,
  `Text` longtext NOT NULL,
  `Numbers` int(11) NOT NULL,
  `TimeLine` varchar(11) NOT NULL,
  `Dates` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cours_mavzu`
--

INSERT INTO `cours_mavzu` (`id`, `CoursID`, `MavzuID`, `MavzuName`, `Video`, `Text`, `Numbers`, `TimeLine`, `Dates`) VALUES
(1, '153', '0001', 'Birinchi Mavzu', 'video.mp4', 'Textlar', 1, '00:00:00', '0000-00-00 00:00:00'),
(2, '153', '0002', 'Birinchi 2 Mavzu', 'video.mp4', 'Textlar', 2, '00:00:00', '0000-00-00 00:00:00'),
(3, '153', '0003', 'Birinchi 3 Mavzu', 'video.mp4', 'Textlar', 7, '00:00:00', '0000-00-00 00:00:00'),
(4, '153', '0004', 'Birinchi 4 Mavzu', 'video.mp4', 'Textlar', 4, '00:00:00', '0000-00-00 00:00:00'),
(5, '153', '0005', 'Birinchi 5 Mavzu', 'video.mp4', 'Textlar', 5, '00:00:00', '0000-00-00 00:00:00'),
(6, '153', '0006', 'Birinchi 6 Mavzu', 'video.mp4', 'Textlar', 6, '00:00:00', '0000-00-00 00:00:00'),
(7, '153', '0007', 'Birinchi 7 Mavzu', 'video.mp4', 'Textlar', 3, '00:00:00', '0000-00-00 00:00:00'),
(8, '152', '0001', 'Birinchi 1 Mavzu', 'video.mp4', 'Textlar', 1, '00:00:00', '0000-00-00 00:00:00'),
(9, '152', '0002', 'Birinchi 2 Mavzu', 'video.mp4', 'Textlar', 2, '00:00:00', '0000-00-00 00:00:00'),
(10, '152', '0003', 'Birinchi 3 Mavzu', 'video.mp4', 'Textlar', 3, '00:00:00', '0000-00-00 00:00:00'),
(11, '152', '0004', 'Birinchi 4 Mavzu', 'video.mp4', 'Textlar', 4, '00:00:00', '0000-00-00 00:00:00'),
(12, '152', '0005', 'Birinchi 5 Mavzu', 'video.mp4', 'Textlar', 5, '00:00:00', '0000-00-00 00:00:00'),
(13, '152', '0006', 'Birinchi 6 Mavzu', 'video.mp4', 'Textlar', 6, '00:00:00', '0000-00-00 00:00:00'),
(14, '152', '0007', 'Birinchi 7 Mavzu', 'video.mp4', 'Textlar', 7, '00:00:00', '0000-00-00 00:00:00'),
(15, '154', '0001', 'Birinchi 1 Mavzu', 'video.mp4', 'Textlar', 1, '00:00:00', '0000-00-00 00:00:00'),
(16, '154', '0002', 'Birinchi 2 Mavzu', 'video.mp4', 'Textlar', 2, '00:00:00', '0000-00-00 00:00:00'),
(17, '154', '0003', 'Birinchi 3 Mavzu', 'video.mp4', 'Textlar', 3, '00:00:00', '0000-00-00 00:00:00'),
(18, '154', '0004', 'Birinchi 4 Mavzu', 'video.mp4', 'Textlar', 4, '00:00:00', '0000-00-00 00:00:00'),
(19, '155', '0001', 'Birinchi 1 Mavzu', 'video.mp4', 'Textlar', 1, '00:00:00', '0000-00-00 00:00:00'),
(20, '155', '0002', 'Birinchi 2 Mavzu', 'video.mp4', 'Textlar', 2, '00:00:00', '0000-00-00 00:00:00'),
(21, '155', '0003', 'Birinchi 3 Mavzu', 'video.mp4', 'Textlar', 3, '00:00:00', '0000-00-00 00:00:00'),
(22, '156', '0001', 'Birinchi 1 Mavzu', 'video.mp4', 'Textlar', 1, '00:00:00', '0000-00-00 00:00:00'),
(23, '156', '0002', 'Birinchi 2 Mavzu', 'video.mp4', 'Textlar', 2, '00:00:00', '0000-00-00 00:00:00'),
(24, '156', '0003', 'Birinchi 3 Mavzu', 'video.mp4', 'Textlar', 3, '00:00:00', '0000-00-00 00:00:00'),
(25, '156', '0004', 'Birinchi 4 Mavzu', 'video.mp4', 'Textlar', 4, '00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `cours_test`
--

CREATE TABLE `cours_test` (
  `id` int(11) NOT NULL,
  `CoursID` varchar(11) NOT NULL,
  `MavzuID` varchar(11) NOT NULL,
  `TestID` varchar(11) NOT NULL,
  `Savol` varchar(90) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cours_test`
--

INSERT INTO `cours_test` (`id`, `CoursID`, `MavzuID`, `TestID`, `Savol`, `Type`, `Date`) VALUES
(1, '153', '0006', '00001', 'To`g`ri javobni tanlang', 'tanlang', '2023-11-26 16:05:12'),
(2, '153', '0006', '00002', 'To\'g\'ri javobni kiriting', 'insert', '2023-11-26 16:06:15'),
(3, '153', '0006', '00003', 'To`g`ri javoblarnini tanlang', 'javoblar', '2023-11-26 16:06:15'),
(4, '153', '0006', '00004', 'To`g    sssss `ri javobni tanlang', 'tanlang', '2023-11-26 16:06:15');

-- --------------------------------------------------------

--
-- Структура таблицы `cours_test_javob`
--

CREATE TABLE `cours_test_javob` (
  `id` int(11) NOT NULL,
  `TestID` varchar(11) NOT NULL,
  `JavobID` varchar(11) NOT NULL,
  `Javob` varchar(70) NOT NULL,
  `Status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cours_test_javob`
--

INSERT INTO `cours_test_javob` (`id`, `TestID`, `JavobID`, `Javob`, `Status`) VALUES
(1, '00001', '1', 'To`g`ri', 'true'),
(2, '00001', '2', 'noto`g`ri', 'false'),
(3, '00001', '3', 'noto`g`ri', 'false'),
(4, '00001', '4', 'noto`g`ri', 'false'),
(5, '00002', '5', 'Elshod', 'true'),
(6, '00003', '6', 'Elshod2', 'true'),
(7, '00003', '7', 'Elshod1', 'true'),
(8, '00003', '8', 'Elshod0', 'false'),
(9, '00004', '9', 'Elshod2 T', 'true'),
(10, '00004', '10', 'Elshod1', 'false'),
(11, '00004', '11', 'Elshod0', 'false');

-- --------------------------------------------------------

--
-- Структура таблицы `lugat`
--

CREATE TABLE `lugat` (
  `id` int(11) NOT NULL,
  `CoursID` varchar(11) NOT NULL,
  `Tli_1` varchar(70) NOT NULL,
  `Til1_soz` varchar(70) NOT NULL,
  `Til_2` varchar(70) NOT NULL,
  `Til_2_soz` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `lugat`
--

INSERT INTO `lugat` (`id`, `CoursID`, `Tli_1`, `Til1_soz`, `Til_2`, `Til_2_soz`) VALUES
(1, '153', 'Koreys', 'I', 'O`zbek', 'Men'),
(2, '153', 'Koreys', 'You', 'O`zbek', 'Sen'),
(3, '153', 'Koreys', 'This', 'O`zbek', 'Bu'),
(4, '153', 'Koreys', 'My', 'O`zbek', 'Men');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `UserID`, `FIO`, `Addres`, `Phone`, `Email`, `Image`, `Dates`) VALUES
(4, '1700850217', 'Elshod', '', '908830450s', '', '01.png', '2023-11-24 18:23:37'),
(5, '1701062650', 'Elshod', '', '908830450', '', '01.png', '2023-11-27 05:24:10');

-- --------------------------------------------------------

--
-- Структура таблицы `user_cours`
--

CREATE TABLE `user_cours` (
  `id` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `CoursID` int(11) NOT NULL,
  `Start` date NOT NULL,
  `End` date NOT NULL,
  `Izoh` varchar(70) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp(),
  `MengerID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user_cours`
--

INSERT INTO `user_cours` (`id`, `UserID`, `CoursID`, `Start`, `End`, `Izoh`, `Data`, `MengerID`) VALUES
(1, 1700850217, 153, '2023-11-01', '2023-11-30', 'Meneger Qoshdi', '2023-11-26 13:02:00', '0'),
(2, 1700850217, 154, '2023-11-18', '2023-11-30', 'Test Izoh', '2023-11-26 13:03:39', '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `cours_mavzu`
--
ALTER TABLE `cours_mavzu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cours_test`
--
ALTER TABLE `cours_test`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cours_test_javob`
--
ALTER TABLE `cours_test_javob`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lugat`
--
ALTER TABLE `lugat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_cours`
--
ALTER TABLE `user_cours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `cours_eye`
--
ALTER TABLE `cours_eye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `cours_mavzu`
--
ALTER TABLE `cours_mavzu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `cours_test`
--
ALTER TABLE `cours_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `cours_test_javob`
--
ALTER TABLE `cours_test_javob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `lugat`
--
ALTER TABLE `lugat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `user_cours`
--
ALTER TABLE `user_cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
