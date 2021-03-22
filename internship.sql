-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 22 2021 г., 09:13
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
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `created_at`, `user_id`, `comment`, `comment_id`) VALUES
(1, '2021-03-20 18:04:44', 0, '', 0),
(2, '2021-03-20 18:04:44', 0, '', 0),
(3, '2021-03-20 18:04:44', 0, '', 0),
(4, '2021-03-20 18:04:44', 0, '', 0),
(5, '2021-03-20 18:04:44', 0, '', 0),
(6, '2021-03-20 18:04:44', 0, '', 0),
(7, '2021-03-20 18:04:44', 0, '', 0),
(8, '2021-03-20 18:04:44', 0, '', 0),
(9, '2021-03-20 18:04:44', 0, '', 0),
(10, '2021-03-20 18:04:44', 0, '', 0),
(11, '2021-03-20 18:04:44', 0, '', 0),
(12, '2021-03-20 18:04:44', 0, '', 0),
(13, '2021-03-20 18:04:44', 0, '', 0),
(14, '2021-03-20 18:04:44', 0, '', 0),
(15, '2021-03-20 18:04:44', 0, '', 0),
(16, '2021-03-20 18:04:44', 0, '', 0),
(17, '2021-03-20 18:04:44', 0, '', 0),
(18, '2021-03-20 18:04:44', 0, '', 0),
(19, '2021-03-20 18:04:44', 0, '', 0),
(20, '2021-03-20 18:04:44', 0, '', 0),
(21, '2021-03-20 18:04:44', 0, '', 0),
(22, '2021-03-20 18:04:44', 0, '', 0),
(23, '2021-03-20 18:04:44', 0, '', 0),
(24, '2021-03-20 18:04:44', 0, '', 0),
(25, '2021-03-20 18:04:44', 0, '', 0),
(26, '2021-03-20 18:04:44', 0, '', 0),
(27, '2021-03-20 18:04:44', 0, '', 0),
(28, '2021-03-20 18:04:44', 0, '', 0),
(29, '2021-03-20 18:04:44', 0, '', 0),
(30, '2021-03-20 18:04:44', 0, '', 0),
(31, '2021-03-20 18:04:44', 0, '', 0),
(32, '2021-03-20 18:04:44', 0, '', 0),
(33, '2021-03-20 18:04:44', 0, '', 0),
(34, '2021-03-20 18:04:44', 20, '', 0),
(35, '2021-03-20 18:04:44', 20, '', 0),
(36, '2021-03-20 18:04:44', 20, '', 0),
(37, '2021-03-20 18:04:44', 20, '', 0),
(38, '2021-03-20 18:04:44', 20, '', 0),
(39, '2021-03-20 18:04:44', 22, '', 0),
(40, '2021-03-20 18:04:44', 23, '', 0),
(41, '2021-03-20 18:04:44', 20, '', 0),
(42, '2021-03-20 18:04:44', 20, '', 0),
(43, '2021-03-20 18:04:44', 20, '', 0),
(44, '2021-03-20 18:04:44', 20, '', 0),
(45, '2021-03-20 18:04:44', 20, '', 0),
(46, '2021-03-20 18:04:44', 20, '', 0),
(47, '2021-03-20 18:04:44', 20, '', 0),
(48, '2021-03-20 18:04:44', 20, '', 0),
(49, '2021-03-20 18:04:44', 20, 'asd', 0),
(50, '2021-03-20 18:21:09', 0, '', 20),
(51, '2021-03-20 18:21:44', 0, '', 20),
(52, '2021-03-20 18:25:06', 0, '', 20),
(53, '2021-03-20 18:26:20', 0, '', 20),
(54, '2021-03-20 18:40:47', 0, '', 20),
(55, '2021-03-20 18:48:06', 0, '', 0),
(56, '2021-03-20 18:48:07', 0, '', 0),
(57, '2021-03-20 19:02:22', 0, '', 0),
(58, '2021-03-20 19:06:50', 0, '', 0),
(59, '2021-03-20 19:39:24', 0, '', 0),
(60, '2021-03-20 19:50:49', 0, '', 0),
(61, '2021-03-20 20:17:05', 20, 'blm', 0);

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
(18, 'asd', 'as|@uh', '68053af2923e00204c3ca7c6a3150cf7'),
(19, 'liana', 'asd@gn.com', 'e10adc3949ba59abbe56e057f20f883e'),
(20, 'liana', 'liana@gm.com', 'a92a7e2747d48b7f5f7459773c8bce44'),
(21, 'lina', 'asd@im.ru', 'a709909b1ea5c2bee24248203b1728a5'),
(22, 'Zakaryan', 'asd@as.ru', '8102dc11bb0313fbe5ddee2e5f12c83e'),
(23, 'Lina', 'zl@zl.com', '7b51bf3127ebc43028004c042d7095f6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
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
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
