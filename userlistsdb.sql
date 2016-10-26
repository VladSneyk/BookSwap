-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 24 2016 г., 00:51
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `userlistsdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `usertbl`
--

CREATE TABLE IF NOT EXISTS `usertbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_prizv` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `full_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `telephone` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `usertbl`
--

INSERT INTO `usertbl` (`id`, `full_prizv`, `full_name`, `email`, `username`, `telephone`, `password`) VALUES
(1, 'Ковальчук ', 'Олександр', 'rekfan00@gmail.com', 'deprim1', '+380975655192', '123qwe'),
(11, 'Коваль', 'Влад', 'vlad@mail.ru', 'Vlad', '+380674624753', '1111'),
(10, 'Полюк', 'Денис', 'Zancro@yandex.ru', 'Zancro', '+380674624753', '1111'),
(9, 'Дзюбак', 'Влад', 'vlad_sneyk@gmail.ru', 'Yagi', '+380975655192', '1111'),
(12, 'Горбатюк', 'Ваня', 'vanya@mail.ru', 'vanya', '+380975241654', '1111'),
(13, 'Ткач', 'Михайло', 'FireTur@yandex.ru', 'Firetur', '+380974581245', '123456'),
(14, 'asd', 'asd', 'dep@gmail.com', 'asdf', '123123', 'asdf1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
