-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 03 2018 г., 23:19
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `usrs`
--

CREATE TABLE `usrs` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `usrs`
--

INSERT INTO `usrs` (`id`, `login`, `email`, `password`) VALUES
(1, 'Alex', 'evandiesp@gmail.com', '$2y$10$jPd.HtCJko7v3S6JYvazO.nyRQWSfCvfD5mP8Hjn8ZGBNZMdkIpMm'),
(2, 'Alex1', 'evandiesp@gmail.com', '$2y$10$4Ymk6ECeUcF1DViKpwtDY.fQ.XJ/tSKLPUDHdnCmFl4o94inWmoe.'),
(3, 'Pots', 'test@gmail.com', '$2y$10$.VbApVGIDZPO20W7Nsfyhu4Rq6RKHf42ZqwbbpkujUoxIfjzDprLW'),
(4, 'Alex2', 'test1@gmail.com', '$2y$10$UhrxLqj17lhvXhL0LOlqdOPq196IBA7Ya4ea1ab9om2nx2Ny0juMe'),
(6, 'admin', 'admin@mail.ru', '$2y$10$Rh6BjBERvwu.V.sDMdFutO5G9xPM1htlKmnwTys2h1VRmzzYLHCvG'),
(7, 'Body', 'body@mail.ru', '$2y$10$mL3zCt.hr0tgpDSyUJ8DN.PaU8VJLPwbmJpR2IqVV5SYCK0x4E0qW');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `usrs`
--
ALTER TABLE `usrs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `usrs`
--
ALTER TABLE `usrs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
