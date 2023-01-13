-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Янв 13 2023 г., 12:56
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
-- База данных: `social`
--

-- --------------------------------------------------------

--
-- Структура таблицы `friends`
--

CREATE TABLE `friends` (
  `id_friends` int NOT NULL,
  `id_first_friend` int NOT NULL,
  `id_second_friend` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `friends`
--

INSERT INTO `friends` (`id_friends`, `id_first_friend`, `id_second_friend`) VALUES
(1, 3, 1),
(2, 3, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id_message` int NOT NULL,
  `id_first_user` int NOT NULL,
  `id_second_user` int NOT NULL,
  `text` varchar(300) NOT NULL,
  `date_message` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id_message`, `id_first_user`, `id_second_user`, `text`, `date_message`) VALUES
(1, 1, 3, 'Привет', '2023-01-13 12:10:48'),
(2, 1, 3, 'Как дела?\r\n', '2023-01-13 12:18:26'),
(3, 1, 3, 'Пр', '2023-01-13 12:19:14'),
(4, 3, 1, 'Хорошо', '2023-01-13 12:47:57'),
(5, 3, 1, 'Спасибо, что спросил', '2023-01-13 12:48:24'),
(6, 1, 3, 'Ответ', '2023-01-13 12:48:34'),
(7, 1, 3, 'Еще ответ', '2023-01-13 12:54:10'),
(8, 3, 1, '1', '2023-01-13 12:54:18'),
(9, 1, 3, '1', '2023-01-13 12:54:21'),
(10, 1, 6, '1', '2023-01-13 12:54:45'),
(11, 7, 3, '1', '2023-01-13 12:55:18');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id_posts` int NOT NULL,
  `id_user` int NOT NULL,
  `post` varchar(1000) NOT NULL,
  `date_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id_posts`, `id_user`, `post`, `date_post`) VALUES
(1, 1, 'xsddsdsd', '2023-01-11 23:03:36'),
(2, 3, 'test sfsdfdsf sdfsdf', '2023-01-11 23:03:59'),
(3, 3, 'test sfsdfdsf sdfsdf', '2023-01-11 23:08:47'),
(4, 3, 'test sfsdfdsf sdfsdf', '2023-01-11 23:10:17'),
(5, 3, 'test sfsdfdsf sdfsdf', '2023-01-11 23:10:35'),
(6, 3, 'qwqw', '2023-01-11 23:10:37'),
(7, 3, 'qwqw', '2023-01-11 23:10:39'),
(8, 3, 'qwqw', '2023-01-11 23:15:28'),
(9, 3, 'qwqw', '2023-01-11 23:15:30'),
(10, 3, 'q', '2023-01-11 23:15:50'),
(11, 3, 'test', '2023-01-11 23:16:16'),
(12, 3, 'wqw', '2023-01-11 23:16:35'),
(13, 3, 'qqw', '2023-01-12 13:03:16'),
(14, 1, 'o', '2023-01-13 11:13:33');

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `id_user` int NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id_user`, `login`, `password`) VALUES
(1, '1', '$2y$10$tymCmoVP/59aePkS/PhsQuFHKtmVgtv01hhMpJZwmkHKenU5rGLMa'),
(2, '2', '$2y$10$Y680P2GbEvzaT4ZyVlTVBuHTmKbE9u80Oee.YrjzxFsY967loNonq'),
(3, 'user', '$2y$10$.bZbrbfWDqjSC1oIVJBWue15YkRV9PNoDEf9hi/hvxAAEBq4cAbNC'),
(4, 'ar', '$2y$10$7c5pUl1zOkGaDddRLz6iZe.LL.w3YsbIfn9rh5wDRSR/4v.gluuwK'),
(5, 'qw', '$2y$10$/H7F17Awp4d6b0NXsLQ//Oby4Z8.rHAwMLs8sA7dxYg5T4TgF5JFu'),
(6, '132', '$2y$10$USC0Cx5W9.mYkJnlNwryveSk14B7EbusCaYxAm6GrurGixge/o5na'),
(7, 'Q', '$2y$10$fnaoom2nj10cnkw5YlVCXeL5TZSYOYSSEKTZ5oR9tApEIC5js6gZa');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id_friends`),
  ADD KEY `friends_ibfk_1` (`id_first_friend`),
  ADD KEY `id_second_friend` (`id_second_friend`);

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_first_user` (`id_first_user`),
  ADD KEY `id_second_user` (`id_second_user`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_posts`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `friends`
--
ALTER TABLE `friends`
  MODIFY `id_friends` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id_posts` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`id_first_friend`) REFERENCES `Users` (`id_user`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `friends_ibfk_2` FOREIGN KEY (`id_second_friend`) REFERENCES `Users` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_first_user`) REFERENCES `Users` (`id_user`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`id_second_user`) REFERENCES `Users` (`id_user`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `Users` (`id_user`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
