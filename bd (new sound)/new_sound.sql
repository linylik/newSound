-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 03 2023 г., 11:15
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_sound`
--

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE `albums` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `studio_id` int DEFAULT NULL,
  `artist_id` int DEFAULT NULL,
  `genre_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `albums`
--

INSERT INTO `albums` (`id`, `title`, `studio_id`, `artist_id`, `genre_id`) VALUES
(1, 'Live', 1, 1, 1),
(2, 'Rain', 1, 2, 2),
(3, 'Love', 2, 1, 3),
(4, 'Sweet', 2, 3, 2),
(5, 'Happy', 3, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `artists`
--

CREATE TABLE `artists` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `artists`
--

INSERT INTO `artists` (`id`, `name`) VALUES
(1, 'Arctic Monkeys'),
(2, 'Моргенштерн'),
(3, 'BONES'),
(4, 'Три дня дождя'),
(5, 'Кишлак');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `name`) VALUES
(1, 'Екатерина Смольникова'),
(2, 'Ирина Гавриченко'),
(3, 'Даниил Кравченко'),
(4, 'Вячеслав Кравцов'),
(5, 'Марина Краснова');

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE `genres` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Мюзикл'),
(2, 'Поп-музыка'),
(3, 'Диско'),
(4, 'Эстрадная музыка'),
(5, 'Регтайм');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `studio_id` int DEFAULT NULL,
  `client_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `studio_id`, `client_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 4),
(5, 3, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `recording_studios`
--

CREATE TABLE `recording_studios` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `recording_studios`
--

INSERT INTO `recording_studios` (`id`, `name`, `address`, `city`) VALUES
(1, 'New Sound', 'Озерная ул, 10', 'Москва'),
(2, 'Track', 'Таганская ул., 98', 'Москва'),
(3, 'Music track', 'Октябрьская Улица,13', 'Санкт-Петербург'),
(4, 'Vaib music', 'Лесной Переулок, 9', 'Санкт-Петербург'),
(5, 'Soundtrack', 'Лесная Улица, 33', 'Екатеринбург');

-- --------------------------------------------------------

--
-- Структура таблицы `tracks`
--

CREATE TABLE `tracks` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `album_id` int DEFAULT NULL,
  `date_recorded` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tracks`
--

INSERT INTO `tracks` (`id`, `title`, `album_id`, `date_recorded`) VALUES
(1, 'Транзакции', 1, '2020-01-01'),
(2, 'Сознание', 1, '2020-01-02'),
(3, 'BuyMonney', 2, '2020-02-01'),
(4, 'Контроль', 2, '2020-02-02'),
(5, 'Not Found', 3, '2020-03-01');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `zapros1`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `zapros1` (
`name` varchar(100)
,`address` varchar(100)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `zapros2`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `zapros2` (
`title` varchar(100)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `zapros3`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `zapros3` (
`name` varchar(100)
,`album_count` bigint
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `zapros4`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `zapros4` (
`name` varchar(100)
,`album_count` bigint
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `zapros5`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `zapros5` (
`name` varchar(100)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `zapros6`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `zapros6` (
`name` varchar(100)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `zapros7`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `zapros7` (
`name_studios` varchar(100)
,`name` varchar(100)
,`album_count` bigint
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `zapros8`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `zapros8` (
`name` varchar(100)
,`album_count` bigint
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `zapros9`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `zapros9` (
`name` varchar(100)
,`track_count` bigint
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `zapros10`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `zapros10` (
`name` varchar(100)
,`album_count` bigint
);

-- --------------------------------------------------------

--
-- Структура для представления `zapros1`
--
DROP TABLE IF EXISTS `zapros1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `zapros1`  AS SELECT `recording_studios`.`name` AS `name`, `recording_studios`.`address` AS `address` FROM `recording_studios` WHERE (`recording_studios`.`city` = 'Москва')  ;

-- --------------------------------------------------------

--
-- Структура для представления `zapros2`
--
DROP TABLE IF EXISTS `zapros2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `zapros2`  AS SELECT `albums`.`title` AS `title` FROM (`albums` join `recording_studios` on((`albums`.`studio_id` = `recording_studios`.`id`))) WHERE (`recording_studios`.`name` = 'Track')  ;

-- --------------------------------------------------------

--
-- Структура для представления `zapros3`
--
DROP TABLE IF EXISTS `zapros3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `zapros3`  AS SELECT `recording_studios`.`name` AS `name`, count(`albums`.`id`) AS `album_count` FROM (`recording_studios` left join `albums` on((`recording_studios`.`id` = `albums`.`studio_id`))) GROUP BY `recording_studios`.`name``name`  ;

-- --------------------------------------------------------

--
-- Структура для представления `zapros4`
--
DROP TABLE IF EXISTS `zapros4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `zapros4`  AS SELECT `recording_studios`.`name` AS `name`, count(`albums`.`id`) AS `album_count` FROM (`recording_studios` left join `albums` on((`recording_studios`.`id` = `albums`.`studio_id`))) GROUP BY `recording_studios`.`name` ORDER BY `album_count` DESC LIMIT 0, 11  ;

-- --------------------------------------------------------

--
-- Структура для представления `zapros5`
--
DROP TABLE IF EXISTS `zapros5`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `zapros5`  AS SELECT `clients`.`name` AS `name` FROM ((`clients` join `projects` on((`clients`.`id` = `projects`.`client_id`))) join `recording_studios` on((`projects`.`studio_id` = `recording_studios`.`id`))) WHERE (`recording_studios`.`name` = 'Track')  ;

-- --------------------------------------------------------

--
-- Структура для представления `zapros6`
--
DROP TABLE IF EXISTS `zapros6`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `zapros6`  AS SELECT DISTINCT `recording_studios`.`name` AS `name` FROM ((`recording_studios` join `albums` on((`recording_studios`.`id` = `albums`.`studio_id`))) join `genres` on((`albums`.`genre_id` = `genres`.`id`))) WHERE (`genres`.`name` = 'Мюзикл')  ;

-- --------------------------------------------------------

--
-- Структура для представления `zapros7`
--
DROP TABLE IF EXISTS `zapros7`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `zapros7`  AS SELECT `recording_studios`.`name` AS `name_studios`, `artists`.`name` AS `name`, count(`albums`.`id`) AS `album_count` FROM ((`recording_studios` join `albums` on((`recording_studios`.`id` = `albums`.`studio_id`))) join `artists` on((`albums`.`artist_id` = `artists`.`id`))) GROUP BY `recording_studios`.`name`, `artists`.`name``name`  ;

-- --------------------------------------------------------

--
-- Структура для представления `zapros8`
--
DROP TABLE IF EXISTS `zapros8`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `zapros8`  AS SELECT `recording_studios`.`name` AS `name`, count(`albums`.`id`) AS `album_count` FROM (`recording_studios` left join `albums` on((`recording_studios`.`id` = `albums`.`studio_id`))) GROUP BY `recording_studios`.`name` HAVING (`album_count` > 1)  ;

-- --------------------------------------------------------

--
-- Структура для представления `zapros9`
--
DROP TABLE IF EXISTS `zapros9`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `zapros9`  AS SELECT `recording_studios`.`name` AS `name`, count(`tracks`.`id`) AS `track_count` FROM ((`recording_studios` join `albums` on((`recording_studios`.`id` = `albums`.`studio_id`))) join `tracks` on((`albums`.`id` = `tracks`.`album_id`))) WHERE (year(`tracks`.`date_recorded`) = 2020) GROUP BY `recording_studios`.`name``name`  ;

-- --------------------------------------------------------

--
-- Структура для представления `zapros10`
--
DROP TABLE IF EXISTS `zapros10`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `zapros10`  AS SELECT `recording_studios`.`name` AS `name`, count(`albums`.`id`) AS `album_count` FROM (`recording_studios` join `albums` on((`recording_studios`.`id` = `albums`.`studio_id`))) GROUP BY `recording_studios`.`name` HAVING (`album_count` > 10)  ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studio_id` (`studio_id`),
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Индексы таблицы `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studio_id` (`studio_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Индексы таблицы `recording_studios`
--
ALTER TABLE `recording_studios`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `recording_studios`
--
ALTER TABLE `recording_studios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `recording_studios` (`id`),
  ADD CONSTRAINT `albums_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`),
  ADD CONSTRAINT `albums_ibfk_3` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Ограничения внешнего ключа таблицы `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `recording_studios` (`id`),
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Ограничения внешнего ключа таблицы `tracks`
--
ALTER TABLE `tracks`
  ADD CONSTRAINT `tracks_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
