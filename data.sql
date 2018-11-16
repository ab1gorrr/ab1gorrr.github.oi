-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 16 2018 г., 14:53
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE `data` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `name` varchar(255) NOT NULL COMMENT 'имя',
  `surname` varchar(255) NOT NULL COMMENT 'фамилия',
  `patronymic` varchar(255) NOT NULL COMMENT 'отчество',
  `iin` varchar(255) NOT NULL COMMENT 'иин',
  `date` date DEFAULT NULL COMMENT 'дата рождения',
  `location` varchar(255) NOT NULL COMMENT 'Место жительства',
  `nationality` varchar(255) NOT NULL COMMENT 'национальность',
  `citizenship` varchar(255) NOT NULL COMMENT 'гражданство',
  `male_or_female` varchar(255) NOT NULL COMMENT 'пол',
  `phone` varchar(255) NOT NULL COMMENT 'телефон мобильный',
  `form_of_training` varchar(255) NOT NULL COMMENT 'форма обучения',
  `education_language` varchar(255) NOT NULL COMMENT 'язык обучения',
  `qualification` varchar(255) NOT NULL COMMENT 'квалификация',
  `statement` varchar(255) NOT NULL COMMENT 'заявление',
  `base` varchar(255) NOT NULL COMMENT 'На базе',
  `cer_ent` varchar(5) NOT NULL COMMENT 'Сертификат ЕНТ',
  `med_reference` varchar(5) NOT NULL COMMENT 'Мед. справка',
  `due_to` varchar(11) NOT NULL COMMENT 'Обучение за счет',
  `soc_status` varchar(255) DEFAULT NULL COMMENT 'Соц. статус',
  `note` varchar(255) DEFAULT NULL COMMENT 'Примечание'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
