-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 08 2017 г., 11:02
-- Версия сервера: 5.7.13
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `fragment` text COLLATE utf8_unicode_ci,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `fragment`, `slug`, `published_at`, `created_at`, `updated_at`) VALUES
(8, 'Перепись грамотеев', 'В Новосибирске продолжается регистрация на международную акцию по проверке грамотности «Тотальный диктант».\r\n\r\nЖители города смогут написать диктант на 56 площадках — на некоторые из них вход свободен, на некоторые нужна предварительная регистрация, при этом на части из них мест уже нет. НГС приводит список всех площадок.\r\n\r\nМеста, где вход свободный: НГТУ, РАНХиГС (с собой нужен паспорт), главный корпус НГАСУ, НГУЭУ, НГПУ, гимназия № 4 (Сибирская, 35).', 'Завтра по всему миру пишут «Тотальный диктант». Публикуем список адресов, где можно проверить свою грамотность в Новосибирске.', 'perep-gramoteev', NULL, '2017-04-07 19:41:29', '2017-04-07 19:41:29'),
(9, 'Какую плетеную леску выбрать для рыбалки?', 'Леска плетенка вызывает у новичков множество вопросов. Даже опытные рыболовы покупают ее, ориентируясь только на разрывную нагрузку и диаметр, указанные на упаковке. Эта снасть носит несколько названий: шнур, плетенка, плетеная леска.\r\nИзготавливают плетеные шнуры двумя способами. В первом варианте идет переплетение тонких волокон в нити, которые, в свою очередь, тоже переплетаются между собой до достижения необходимой толщины. Во втором случае, параллельно идущие волокна соединяют сплавом специальных веществ. Технологий соединения волокон тоже великое множество.\r\nПреимущества плетеных лесок:\r\n\r\nПлетенка для спиннинга обладает рядом достоинств, в сравнение с монофильной леской.\r\nПрежде всего, это высокая износостойкость и прочность. С помощью этой снасти доступна ловля рыбы в самых сложных местах. Она не теряет своих качеств во время длительного хранения. Ее можно использовать для рыбалки на протяжении 3х сезонов.\r\nУ плетеного шнура полностью отсутствует “ память”. Она способна не сохранять перегибы и изгибы. При ее использовании нет необходимости применять вертлюжки.', 'Леска плетенка вызывает у новичков множество вопросов. Даже опытные рыболовы покупают ее, ориентируясь только на разрывную нагрузку и диаметр, указанные на упаковке. Эта снасть носит несколько названий: шнур, плетенка, плетеная леска.', 'leska-fishing', NULL, '2017-04-07 19:44:11', '2017-04-07 19:44:11'),
(10, 'Тестовая статья #7', 'Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7. Полный текст статьи 7.', 'Краткое описание статьи 7', 'article-seven', NULL, '2017-04-07 19:47:46', '2017-04-07 19:47:46');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_04_01_045133_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
