-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 02 2014 г., 14:13
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `asm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pass`
--

CREATE TABLE IF NOT EXISTS `pass` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(30) NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `pass`
--

INSERT INTO `pass` (`id`, `password`) VALUES
(1, 'asm');

-- --------------------------------------------------------

--
-- Структура таблицы `winapi`
--

CREATE TABLE IF NOT EXISTS `winapi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `syntax` blob NOT NULL,
  `description` blob NOT NULL,
  `requirements` blob NOT NULL,
  `params` blob NOT NULL,
  `remark` blob NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=439 ;

--
-- Дамп данных таблицы `winapi`
--

INSERT INTO `winapi` (`id`, `name`, `syntax`, `description`, `requirements`, `params`, `remark`) VALUES
(422, 'qwedqweqwe', 0x717765717765717765717765717765, 0x717765717765717765717765, 0x717765716571776571776571776571776571776571, 0x7177657177657177657177657177657177657177, 0x71776571776565717765717765717765717765),
(431, 'ExitProcess', '', '', '', '', ''),
(437, 'a', '', '', '', '', ''),
(438, 'z', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
