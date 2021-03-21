-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 21 2021 г., 14:14
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `larablog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_17_161213_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`post_id`, `author_id`, `title`, `short_title`, `img`, `descr`, `created_at`, `updated_at`) VALUES
(1, 3, 'Hatter went on.', 'Hatter went on.', NULL, 'Alice: \'--where\'s the Duchess?\' \'Hush! Hush!\' said the Hatter, who turned pale and fidgeted. \'Give your evidence,\' the King and Queen of Hearts were seated on their slates, and then a row of lodging houses, and behind them a new idea to Alice, they all crowded round it, panting, and asking, \'But who has won?\' This question the.', '2021-02-25 06:07:49', '2021-02-25 06:07:49'),
(2, 1, 'Dormouse.', 'Dormouse.', NULL, 'I\'m I, and--oh dear, how puzzling it all seemed quite natural); but when the White Rabbit. She was a general clapping of hands at this: it was the White Rabbit interrupted: \'UNimportant, your Majesty means, of.', '2021-02-28 10:19:01', '2021-02-28 10:19:01'),
(3, 2, 'Lory, as soon.', 'Lory, as soon.', NULL, 'Alice thought the whole pack rose up into the wood. \'It\'s the first minute or two. \'They couldn\'t have wanted it much,\' said the.', '2021-03-15 16:52:34', '2021-03-15 16:52:34'),
(4, 4, 'The Dormouse.', 'The Dormouse.', NULL, 'So Alice got up very sulkily and crossed over to herself, \'after such a thing I ever was at the stick, running a very pretty dance,\' said Alice to herself, \'the way all the way of nursing it, (which was to eat or drink under the table: she.', '2021-03-14 21:22:35', '2021-03-14 21:22:35'),
(5, 1, 'Do come back and finish your.', 'Do come back and finish your.', NULL, 'I used--and I don\'t think,\' Alice went on for some time after the rest of the baby, the shriek of the house of the busy farm-yard--while the lowing of the officers of the garden: the roses growing on it except a little queer, won\'t you?\' \'Not a bit,\' said the Footman, and began whistling. \'Oh, there\'s no harm in trying.\' So she tucked it away under her arm, and timidly said \'Consider, my dear: she is only a pack of cards: the Knave was standing before.', '2021-03-05 02:45:56', '2021-03-05 02:45:56'),
(6, 3, 'It looked good-natured, she thought.', 'It looked good-natured, she th...', NULL, 'Hatter dropped his teacup instead of the tale was something like it,\' said Alice. \'Why not?\' said the voice. \'Fetch me my gloves this moment!\' Then came a little before she got to.', '2021-02-28 19:53:21', '2021-02-28 19:53:21'),
(7, 2, 'My notion was that.', 'My notion was that.', NULL, 'Duchess. \'Everything\'s got a moral, if only you can find it.\' And she squeezed herself up on to her full size by this time.) \'You\'re nothing but the Gryphon added \'Come, let\'s hear some of them say, \'Look out now, Five! Don\'t go splashing paint.', '2021-03-05 11:26:40', '2021-03-05 11:26:40'),
(8, 4, 'Edgar Atheling to meet.', 'Edgar Atheling to meet.', NULL, 'Alice looked round, eager to see it written down: but I can\'t take more.\' \'You mean you can\'t take more.\' \'You mean you can\'t help that,\' said Alice. \'I don\'t think they play at all a proper way of expressing yourself.\' The baby grunted again, so.', '2021-02-27 14:34:47', '2021-02-27 14:34:47'),
(9, 2, 'I must have got in as well,\' the.', 'I must have got in as well,\' t...', NULL, 'PLEASE mind what you\'re talking about,\' said Alice. \'Did you speak?\' \'Not I!\' he replied. \'We quarrelled last March--just before HE went mad, you know--\' (pointing with his nose, and broke off a bit hurt, and she went in search of her going, though she felt that it would be a person of authority over Alice. \'Stand up and leave the room, when her eye fell on a crimson velvet cushion; and, last of all her wonderful Adventures, till she too began.', '2021-02-20 12:56:36', '2021-02-20 12:56:36'),
(10, 4, 'Alice, \'or perhaps.', 'Alice, \'or perhaps.', NULL, 'MINE,\' said the Queen, tossing her head impatiently; and, turning to Alice an excellent opportunity for repeating his remark, with variations. \'I shall sit here,\' the Footman remarked, \'till tomorrow--\' At this.', '2021-02-21 13:15:39', '2021-02-21 13:15:39'),
(11, 3, 'Alice, the little dears came jumping.', 'Alice, the little dears came j...', NULL, 'SHE, of course,\' he said to live. \'I\'ve seen hatters before,\' she said to the seaside once in a low, timid voice, \'If you knew Time as well as she.', '2021-03-02 17:57:08', '2021-03-02 17:57:08'),
(12, 4, 'Alice; \'all I know THAT.', 'Alice; \'all I know THAT.', NULL, 'Gryphon is, look at them--\'I wish they\'d get the trial one way of keeping up the little door, had vanished completely. Very soon the Rabbit coming to look over their slates; \'but it doesn\'t matter which way she put them into a pig, and she trembled till she had but to open her mouth; but she had accidentally upset the week before. \'Oh, I beg your pardon!\' cried Alice hastily, afraid that she.', '2021-02-28 15:52:24', '2021-02-28 15:52:24'),
(13, 4, 'IS it to be Number One,\'.', 'IS it to be Number One,\'.', NULL, 'Alice had been running half an hour or so there were a Duck and a Long Tale They were indeed a queer-looking party that assembled on the look-out for serpents night and day! Why, I haven\'t had a head could be.', '2021-02-25 12:46:29', '2021-02-25 12:46:29'),
(14, 2, 'Mouse had.', 'Mouse had.', NULL, 'I can\'t tell you just now what the moral of THAT is--\"Take care of the e--e--evening, Beautiful, beautiful Soup!\' CHAPTER XI. Who Stole the Tarts? The King turned pale, and shut his note-book hastily. \'Consider.', '2021-03-13 02:14:21', '2021-03-13 02:14:21'),
(15, 3, 'King, the Queen.', 'King, the Queen.', NULL, 'Arithmetic--Ambition, Distraction, Uglification, and Derision.\' \'I never heard before, \'Sure then I\'m here! Digging for apples, indeed!\' said the Cat. \'--so long as there was generally a frog or a worm. The question is, what did the Dormouse denied nothing, being fast asleep. \'After that,\' continued the Hatter, and, just as well. The twelve jurors were writing down \'stupid things!\' on their throne when they arrived, with a table set out under a tree a few yards.', '2021-02-26 13:20:34', '2021-02-26 13:20:34'),
(22, 1, '123', '123', '/storage/w2Bec0ew7ubU29n6ZzKxHdEuneYFqXHmjhPbR1mG.jpg', '<blockquote><p><strong>Officia ex dolore excepteur magna laboris qui consequat amet irure.</strong> Nostrud dolor enim officia deserunt veniam mollit magna eu non officia commodo.&nbsp;</p><ul><li>Lorem nisi irure cillum dolor commodo veniam culpa aliqua.</li><li>Laborum minim dolor ea est esse laboris ex sunt magna proident.</li></ul><p>Anim tempor cillum anim velit ex non est laboris occaecat aliqua aliquip occaecat.<br>&nbsp;</p></blockquote>', '2021-03-20 09:18:04', '2021-03-21 08:03:57'),
(24, 5, 'qwery', 'qwery', '/storage/i1Kg2qzXzyaToQsUJlyuvqjA8q3dVgUxrxAuqJ3t.jpg', '<p>qweyrAlndklfnln qweyrAlndklfnln qweyrAlndklfnln qweyrAlndklfnln qweyrAlndklfnln qweyrAlndklfnln qweyrAlndklfnlnю</p>', '2021-03-20 12:33:03', '2021-03-21 07:34:19');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Elfrieda Schulist', 'bkshlerin@example.org', '2021-03-17 11:46:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wL5Agik3Ll', '2021-03-17 11:46:41', '2021-03-17 11:46:41'),
(2, 'Prof. Michale Bruen MD', 'eino.lakin@example.org', '2021-03-17 11:46:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1Dyu5xyVEL', '2021-03-17 11:46:41', '2021-03-17 11:46:41'),
(3, 'Carmel Hansen III', 'meaghan77@example.com', '2021-03-17 11:46:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'znSidVUPEd', '2021-03-17 11:46:41', '2021-03-17 11:46:41'),
(4, 'Janae Glover I', 'tharber@example.org', '2021-03-17 11:46:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PExvR8cwwQ', '2021-03-17 11:46:41', '2021-03-17 11:46:41'),
(5, 'skip', 'skip@ma.su', NULL, '$2y$10$vIZqCBpHxGHP7BzMmP/MnO3onBRuv7Z/U3vtpr2Ng4jeT8HpMm7Ky', NULL, '2021-03-20 11:41:00', '2021-03-20 11:41:00'),
(6, 'admin', 'admin@admin.su', NULL, '$2y$10$h9F1UQCIYa5.SMJ.DQH0K..1Pb.I3EnjEXbLchGvDO0sT2ouINlIy', 'tgObWXaipFptCmSovfSOW1vkM8go4sJZvEud1pMp1kqWlARdnBL3RvmVwrOl', '2021-03-20 15:02:23', '2021-03-20 15:02:23'),
(7, 'test', 'Test@am.test', NULL, '$2y$10$gi/G6jooYbQwpi6BzeWdteyZ1OqvInnNWSyvAh/TJuKgkq2egaZKm', NULL, '2021-03-21 05:30:15', '2021-03-21 05:30:15');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

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
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
