-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 19 2019 г., 01:50
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web_studio`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounting`
--

CREATE TABLE `accounting` (
  `id_accounting` int(11) NOT NULL,
  `premium` int(11) NOT NULL,
  `allowances` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `card_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `accounting`
--

INSERT INTO `accounting` (`id_accounting`, `premium`, `allowances`, `salary`, `date`, `card_number`) VALUES
(1, 1500, 0, 5000, '2019-11-18 10:36:14', '4915 6514 5125 4444'),
(2, 1500, 0, 5000, '2019-11-18 10:36:14', '4915 6514 5125 4444');

-- --------------------------------------------------------

--
-- Структура таблицы `category_packages`
--

CREATE TABLE `category_packages` (
  `id_category` int(11) NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category_packages`
--

INSERT INTO `category_packages` (`id_category`, `category_name`) VALUES
(1, 'Test Category 1'),
(2, 'Test Category 2');

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `id_customer` int(11) NOT NULL,
  `last_name` text NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`id_customer`, `last_name`, `name`, `surname`, `email`, `phone`) VALUES
(1, 'test', 'test', 'test', 'test@mail.com', '097 867-60-93'),
(2, 'Антонов', 'Антон', 'Антонович', 'antonov@mail.com', '097 867-60-93');

-- --------------------------------------------------------

--
-- Структура таблицы `departments`
--

CREATE TABLE `departments` (
  `id_department` int(11) NOT NULL,
  `address_department` text NOT NULL,
  `site` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `departments`
--

INSERT INTO `departments` (`id_department`, `address_department`, `site`) VALUES
(1, 'Ternopil', 'test.ua'),
(2, 'Kiev', 'sadawe.com.ua');

-- --------------------------------------------------------

--
-- Структура таблицы `personnel`
--

CREATE TABLE `personnel` (
  `id_personnel` int(11) NOT NULL,
  `last_name` text NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `id_department` int(11) NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `personnel`
--

INSERT INTO `personnel` (`id_personnel`, `last_name`, `name`, `surname`, `id_department`, `position`) VALUES
(1, 'Гаврилюк', 'Антон', 'Олександровис', 1, 'Адміністратор'),
(5, 'Петришин', 'Ігор', 'Антонович', 1, 'Адміністратор');

-- --------------------------------------------------------

--
-- Структура таблицы `price_list`
--

CREATE TABLE `price_list` (
  `id_package` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `package` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `price_list`
--

INSERT INTO `price_list` (`id_package`, `id_category`, `package`, `price`) VALUES
(1, 1, 'test', 1100),
(2, 1, 'test 2', 20000);

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `id_department` int(11) NOT NULL,
  `id_package` int(11) NOT NULL,
  `id_servers` int(11) NOT NULL,
  `domain` text NOT NULL,
  `id_customer` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `id_department`, `id_package`, `id_servers`, `domain`, `id_customer`, `status`) VALUES
(1, 1, 1, 1, 'test', 1, 0),
(2, 2, 1, 1, 'dathard.com', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `requisites`
--

CREATE TABLE `requisites` (
  `id_requisites` int(11) NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `card_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `requisites`
--

INSERT INTO `requisites` (`id_requisites`, `address`, `phone`, `card_number`) VALUES
(1, 'papanina 2', '4915 651 51', '4915 6514 5125 4444');

-- --------------------------------------------------------

--
-- Структура таблицы `servers`
--

CREATE TABLE `servers` (
  `id_servers` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `servers`
--

INSERT INTO `servers` (`id_servers`, `address`) VALUES
(1, 'test 12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounting`
--
ALTER TABLE `accounting`
  ADD PRIMARY KEY (`id_accounting`),
  ADD KEY `id_accounting` (`id_accounting`),
  ADD KEY `card_number` (`card_number`);

--
-- Индексы таблицы `category_packages`
--
ALTER TABLE `category_packages`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customer`);

--
-- Индексы таблицы `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id_department`);

--
-- Индексы таблицы `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id_personnel`),
  ADD KEY `id_department` (`id_department`);

--
-- Индексы таблицы `price_list`
--
ALTER TABLE `price_list`
  ADD PRIMARY KEY (`id_package`),
  ADD KEY `id_category` (`id_category`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_department` (`id_department`,`id_package`,`id_servers`,`id_customer`),
  ADD KEY `id_package` (`id_package`),
  ADD KEY `id_servers` (`id_servers`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Индексы таблицы `requisites`
--
ALTER TABLE `requisites`
  ADD PRIMARY KEY (`id_requisites`),
  ADD KEY `id_ requisites` (`id_requisites`),
  ADD KEY `card_number` (`card_number`),
  ADD KEY `card_number_2` (`card_number`);

--
-- Индексы таблицы `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id_servers`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounting`
--
ALTER TABLE `accounting`
  MODIFY `id_accounting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `category_packages`
--
ALTER TABLE `category_packages`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `departments`
--
ALTER TABLE `departments`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id_personnel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `price_list`
--
ALTER TABLE `price_list`
  MODIFY `id_package` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `servers`
--
ALTER TABLE `servers`
  MODIFY `id_servers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `accounting`
--
ALTER TABLE `accounting`
  ADD CONSTRAINT `accounting_ibfk_1` FOREIGN KEY (`card_number`) REFERENCES `requisites` (`card_number`);

--
-- Ограничения внешнего ключа таблицы `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `personnel_ibfk_2` FOREIGN KEY (`id_department`) REFERENCES `departments` (`id_department`);

--
-- Ограничения внешнего ключа таблицы `price_list`
--
ALTER TABLE `price_list`
  ADD CONSTRAINT `price_list_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category_packages` (`id_category`);

--
-- Ограничения внешнего ключа таблицы `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`id_department`) REFERENCES `departments` (`id_department`),
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`id_package`) REFERENCES `price_list` (`id_package`),
  ADD CONSTRAINT `projects_ibfk_4` FOREIGN KEY (`id_servers`) REFERENCES `servers` (`id_servers`),
  ADD CONSTRAINT `projects_ibfk_5` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`);

--
-- Ограничения внешнего ключа таблицы `requisites`
--
ALTER TABLE `requisites`
  ADD CONSTRAINT `requisites_ibfk_2` FOREIGN KEY (`id_requisites`) REFERENCES `personnel` (`id_personnel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
