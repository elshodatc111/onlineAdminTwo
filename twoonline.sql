-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 30 2023 г., 18:08
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `banner`
--

INSERT INTO `banner` (`id`, `H1`, `P`, `Image`) VALUES
(1, 'ATKO koreys til markazi.', 'Ilm orqali insonlar hayotini yaxshilash, hayotda o`z yo`llarini topish', '1701361845maxresdefault.jpg'),
(2, 'Bizning jamoamizda', 'Eng sifatli bilim beradigan proffessional jamoaga ega Butun O`zbekisto', '170136237601.jpg');

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
(1, '1701362965', 'Koreys tilini mustaqil oʻrganish', '25000', '1701362965k1.jpg', '12', '07:15:24', 'O`zbek', 'Boshlang`ich', 'O`qituvchi FIO', '30', '170136296501.mp4', 'Ushbu dastur koreys tilini onlayn oʻrganuvchilar uchun moʻljallangan boʻlib, bu ishtirokchilarga koreys tilini boshlangʻich darajadan boshlab mukammal darajagacha oʻrganish imkonini yaratadi. Darslar mutlaqo bepul va qiziqarli tashkillashtirilgan. Kursdagi har bir darsda:<br>\r\n<ol>\r\n<li>20-30 soʻz;</li>\r\n<li>darsdagi lugʻatlarga mos ravishda grammatik mavzular;</li>\r\n<li>koreys tilidagi soʻz va gaplarning audiosi mavjud. </li>\r\n</ol>\r\nKursda koreys tilini oʻrganishga qiziquvchi nomzodlar yilning istagan vaqtida ishtirok etishlari va oʻrganishlari mumkin. ', '2023-11-30 16:49:25');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `cours_mavzu`
--

INSERT INTO `cours_mavzu` (`id`, `CoursID`, `MavzuID`, `MavzuName`, `Video`, `Text`, `Numbers`, `TimeLine`, `Dates`) VALUES
(1, '1701362965', 'M1701363259', 'Umumit mavzu', '170136325902.mp4', 'Kursda oʻqish orqali ishtirokchilar koreys tilini bepul oʻrganishlari mumkin boʻladi;<br>\r\nKursdagi har bir dars quyidagilardan tashkil topgan:<br>\r\n-20-30 ta atrofidagi lugʻat;<br>\r\n\r\n-Lugʻatlarga mos maʼlum darajadagi grammatik mavzular;\r\n<br>\r\n-Koreys tilidagi har bir soʻz va gapning audiosi;', 1, '00:00:10', '2023-11-30 16:54:19'),
(2, '1701362965', 'M1701363323', 'Hujjat topshirish', '170136332303.mp4', 'Kursda ishtirok etish boʻyicha muhim maʼlumotlar:<br>\r\n\r\nUshbu koreys tili onlayn kursida oʻqish uchun alohida roʻyxatdan oʻtish talab qilinmaydi. Kursda asosiy maʼlumot va darslarni mutlaqo bepul oʻrganish mumkin;<br>\r\nDastur boʻyicha qoʻshimcha materiallar pulli boʻlib, ular olinmoqchi boʻlsa nomzodning elektron pochtasi, ism-sharifi, karta raqami, manzili, istiqomat qilayotgan hududining pochta indeksi va shu kabi maʼlumotlar soʻraladi;\r\nKursda oʻqishni yilning istalgan vaqtida boshlash mumkin. ', 2, '00:00:25', '2023-11-30 16:55:23'),
(3, '1701362965', 'M1701363374', 'Foydali tamonlar', '170136337404.mp4', 'Kursda ishtirok etish boʻyicha muhim maʼlumotlar:\r\n\r\nUshbu koreys tili onlayn kursida oʻqish uchun alohida roʻyxatdan oʻtish talab qilinmaydi. Kursda asosiy maʼlumot va darslarni mutlaqo bepul oʻrganish mumkin;<br>\r\nDastur boʻyicha qoʻshimcha materiallar pulli boʻlib, ular olinmoqchi boʻlsa nomzodning elektron pochtasi, ism-sharifi, karta raqami, manzili, istiqomat qilayotgan hududining pochta indeksi va shu kabi maʼlumotlar soʻraladi;\r\nKursda oʻqishni yilning istalgan vaqtida boshlash mumkin. <br>', 3, '00:00:45', '2023-11-30 16:56:14'),
(4, '1701362965', 'M1701363409', 'Qo`shimcha', '170136340901.mp4', 'Kursda ishtirok etish boʻyicha muhim maʼlumotlar:\r\n<br>\r\nUshbu koreys tili onlayn kursida oʻqish uchun alohida roʻyxatdan oʻtish talab qilinmaydi. Kursda asosiy maʼlumot va darslarni mutlaqo bepul oʻrganish mumkin;<br>\r\nDastur boʻyicha qoʻshimcha materiallar pulli boʻlib, ular olinmoqchi boʻlsa nomzodning elektron pochtasi, ism-sharifi, karta raqami, manzili, istiqomat qilayotgan hududining pochta indeksi va shu kabi maʼlumotlar soʻraladi;\r\nKursda oʻqishni yilning istalgan vaqtida boshlash mumkin. ', 4, '00:00:10', '2023-11-30 16:56:49');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `cours_eye`
--
ALTER TABLE `cours_eye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `cours_mavzu`
--
ALTER TABLE `cours_mavzu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `cours_test`
--
ALTER TABLE `cours_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cours_test_javob`
--
ALTER TABLE `cours_test_javob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lugat`
--
ALTER TABLE `lugat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user_cours`
--
ALTER TABLE `user_cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
