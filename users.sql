-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 17 2021 г., 09:18
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `internship`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'root', 'lianazaqaryan14@gmail.com', '027fde2dc0fd8f68b6dd5d26178b1de4'),
(2, 'root', 'asd@df.com', '3975f2ba8aa0be35ce63a8b9a7661a55'),
(3, 'root', 'lianazaqaryan14@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'root', 'lianazaqaryan14@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'lina', 'lianazaqaryan14@gmail.com', '71b3b26aaa319e0cdf6fdb8429c112b0'),
(6, '123l', 'lianazaqaryan14@gmailom', '83b4ef5ae4bb360c96628aecda974200'),
(7, 'asd', 'asd@add', 'e94550c93cd70fe748e6982b3439ad3b'),
(8, 'asd', 'asdf@as', '6f2268bd1d3d3ebaabb04d6b5d099425'),
(9, 'xcvb', 'sdf@asdf', '0f98df87c7440c045496f705c7295344'),
(10, 'dfg', 'fg@as', '6ba667f2e5fb6e2e9a9edd14f49a3d53'),
(11, 'guh', 'uh@rf', 'ea7d201d1cdd240f3798b2dc51d6adcb'),
(12, 'ikk', 'asd@asw', '71cc107d2e0408e60a3d3c44f47507bd'),
(13, 'cvb', 'df@v', '68053af2923e00204c3ca7c6a3150cf7'),
(14, 'cvb', 'df@v.com', '68053af2923e00204c3ca7c6a3150cf7'),
(15, 'a', 'a@w', '7815696ecbf1c96e6894b779456d330e'),
(16, 'asd', 'asd@ghom', '68053af2923e00204c3ca7c6a3150cf7'),
(17, 'asd', 'as@gm', '68053af2923e00204c3ca7c6a3150cf7'),
(18, 'asd', 'as|@uh', '68053af2923e00204c3ca7c6a3150cf7');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
