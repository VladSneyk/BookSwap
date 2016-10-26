-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 26 2016 г., 03:50
-- Версия сервера: 5.5.50
-- Версия PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `book`
--

-- --------------------------------------------------------

--
-- Структура таблицы `usertbl`
--

CREATE TABLE IF NOT EXISTS `usertbl` (
  `id` int(11) NOT NULL,
  `full_prizv` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `full_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `telephone` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `usertbl`
--

INSERT INTO `usertbl` (`id`, `full_prizv`, `full_name`, `email`, `username`, `telephone`, `password`) VALUES
(1, 'Ковальчук ', 'Олександр', 'rekfan00@gmail.com', 'deprim1', '+380975655192', '123qwe'),
(11, 'Коваль', 'Влад', 'vlad@mail.ru', 'Vlad', '+380674624753', '1111'),
(10, 'Полюк', 'Денис', 'Zancro@yandex.ru', 'Zancro', '+380674624753', '1111'),
(9, 'Дзюбак', 'Влад', 'vlad_sneyk@gmail.ru', 'Yagi', '+380975655192', '1111'),
(22, 'vvvvvvvvvvvv', 'bbbbbbbbbb', 'qqasdxqq@gmail.com', 'cvcv', '234324324', 'cvcv2'),
(25, 'xxxxxxxxxxxxxxxx', 'zzzzzzzzzzzzzzz', 'qacxanhqqq@gmail.com', 'pol', '23542354235', 'pol1'),
(26, 'Дорожанський', 'Льоша', 'dorozhankij@yandex.ru', 'Blackveins', '+380967275349', 'ASDfgh123'),
(27, 'Абдул', 'Рустам', 'abdul@mail.ru', 'Abdul', '+380964523658', '1234');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
