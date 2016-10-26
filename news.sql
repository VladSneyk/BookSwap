-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 26 2016 г., 03:49
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
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avtor` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `author`, `genre`, `photo`, `description`, `avtor`) VALUES
(1, 'qwerty', 'asdfgh', '', '', 'zxcvbn', ''),
(2, 'qwerty', 'asdfgh', '', '', 'zxcvbn', ''),
(3, 'zxc', 'zxc', 'zxc', '', 'zxc', ''),
(4, 'asdfgh', 'asdfgh', 'asdfgh', '', 'asdfgh', 'Blackveins'),
(5, 'asdfgh', 'asdfgh', 'asdfgh', '', 'asdfgh', 'Blackveins'),
(6, 'qwerty', 'qwerty', 'qwerty', '', 'qwerty', 'Abdul'),
(7, 'zxvn', 'zxvn', 'zvn', '', 'zxvn', 'Blackveins'),
(8, 'Алгебра', 'Мерзляк', 'Математика', '', 'математика за 9 клас. Подивіться))', 'Blackveins'),
(9, 'Алгебра', 'Мерзляк', 'Математика', '', 'математика за 9 клас. Подивіться))', 'Blackveins'),
(10, 'Алгебра', 'Мерзляк', 'Математика', '', 'математика за 9 клас. Подивіться))', 'Blackveins'),
(11, 'Алгебра', 'Мерзляк', 'Математика', '', 'математика за 9 клас. Подивіться))', 'Blackveins'),
(12, 'Алгебра', 'Мерзляк', 'Математика', '', 'математика за 9 клас. Подивіться))', 'Blackveins'),
(13, 'Алгебра', 'Мерзляк', 'Математика', '', 'математика за 9 клас. Подивіться))', 'Blackveins'),
(14, 'Геометрія', 'Мерзляк Г.В', 'Математика', '', 'Дидактичка за 9 клас з геометрії', 'Blackveins'),
(15, 'Геометрія', 'Мерзляк Г.В', 'Математика', '', 'Дидактичка за 9 клас з геометрії', 'Blackveins'),
(16, 'Геометрія', 'Мерзляк Г.В', 'Математика', '', 'Дидактичка за 9 клас з геометрії', 'Blackveins'),
(17, 'Геометрія', 'Мерзляк Г.В', 'Математика', '', 'Дидактичка за 9 клас з геометрії', 'Blackveins'),
(18, 'Історія', 'Історія', 'Історія', '', 'Історія', 'Blackveins');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
