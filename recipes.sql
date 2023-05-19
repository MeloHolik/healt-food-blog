-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 19 2023 г., 21:41
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `recipes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `categories`) VALUES
(1, 'Супы');

-- --------------------------------------------------------

--
-- Структура таблицы `list`
--

CREATE TABLE `list` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `instructions` text COLLATE utf8mb4_unicode_ci,
  `protein` float DEFAULT NULL,
  `fat` float DEFAULT NULL,
  `carbhyd` float DEFAULT NULL,
  `calories` float DEFAULT NULL,
  `ingredients` text COLLATE utf8mb4_unicode_ci,
  `img_main` blob,
  `img_sub` blob,
  `img_main_download` blob,
  `img_sub_download` blob,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `list`
--

INSERT INTO `list` (`id`, `name`, `description`, `instructions`, `protein`, `fat`, `carbhyd`, `calories`, `ingredients`, `img_main`, `img_sub`, `img_main_download`, `img_sub_download`, `created_at`, `updated_at`, `category_id`) VALUES
(5, 'Борщ', NULL, '  Шаг 1\r\nНалейте в кастрюлю холодную воду, выложите мясо и поставьте на средний огонь. Когда жидкость закипит, накройте кастрюлю крышкой и варите на медленном огне час-полтора.\r\nШаг 2\r\n1) Вымойте и почистите свёклу, морковь и лук. Свёклу натрите на крупной тёрке, а морковь — на средней. Лук нарежьте небольшими кубиками.\r\n2) Налейте масло в сковороду, включите средний огонь. Обжаривайте лук и морковь, помешивая, около 5 минут. Затем выложите свёклу. Добавьте к ней уксус или сок лимона. Готовьте зажарку ещё 5 минут. После этого добавьте томатную пасту, перемешайте и оставьте на огне ещё на 5–7 минут.\r\nШаг 3\r\n1) Когда бульон сварится, выньте из него мясо. Пока оно остывает, засыпьте в кастрюлю нашинкованную капусту. Через 5–10 минут добавьте нарезанный соломкой или кубиками картофель.\r\n2) Пока варится картофель, отделите мясо от кости и нарежьте кубиками. Верните его в суп. Посолите по вкусу.\r\n3) Добавьте зажарку и перемешайте. Закиньте лавровый лист и мелко порубленную зелень. Накройте кастрюлю крышкой и варите ещё 5–7 минут. Затем оставьте борщ под крышкой настаиваться 20-30 минут.', 6, 3, 4, 61, 'Вода — 1,5–2 литра\r\nГовядина на кости — 400–500 г.\r\nСвёкла — 2 шт.\r\nМорковь — 1 шт.\r\nЛук репчатый — 3 шт.\r\nРастительное масло — 4–5 столовых ложек\r\nНемного столового уксуса или ½ лимона;\r\nТоматная паста — 2 столовые ложки\r\nБелокочанная капуста — 300 г.\r\nКартофель — 4 шт.\r\nЛавровый лист — 1–2 шт.\r\nСоль, перец, зелень — по вкусу', 0x736f6369616c2e77656270, 0x626f7273682d736f2d7376696e696e6f692d312d373730783531332e6a7067, '', '', '2023-05-19 14:23:15', '2023-05-19 14:23:15', 1),
(6, 'Суп-лапша из курицы', NULL, ' Шаг 1\r\nМясо курицы нарезать кусочками и сварить из него бульон, подсолив.\r\nШаг 2\r\n1) Морковь очистить и натереть на крупной терке. Лук очистить и мелко нарезать.\r\n2) На сковороде со сливочным маслом обжарить подготовленные морковь и лук.\r\nШаг 3\r\n1) В кипящий бульон положить лапшу и варить до готовности. Перед концом варки положить зелень и зажарку из моркови и лука.\r\n2)Готовый суп подать с кусочком вареной курицы, посыпав мелко нарезанной зеленью.', 4, 4, 8, 85, 'Мясо куриное — 400 г.\r\nЛук репчатый — 2 шт.\r\nМорковь — 100 г.\r\nМасло сливочное — 2 столовые ложки\r\nУкроп — 5 г.\r\nЛапша — 300 г.\r\nВода — 1,5 литра', 0x6b7572696e79692d7375702d732d6c617073686f692d6e65772e6a7067, 0x6b7572696e69695f7375705f735f7665726d697368656c69752d3238383730352e6a7067, '', '', '2023-05-19 14:28:55', '2023-05-19 14:28:55', 1),
(7, 'Тыквенный суп-пюре', NULL, ' Шаг 1\r\n1)Лук мелко порезать, чеснок пропустить через пресс.\r\n2)Обжарить лук и чеснок на разогретой сковороде.\r\n3)Обжарить тыкву 3 минуты.\r\nШаг 2\r\n1)Влить бульон и варить 10 минут, добавить сметану или сливки и продолжать варить 5–10 минут.\r\n2)Посолить, добавить карри.\r\nШаг 3\r\nКогда тыква станет совсем мягкой, снять суп с плиты и перемолоть блендером.\r\nПодавать суп со сметаной и гренками или хлебцами.', 2, 2, 4, 41, 'Тыква очищенная — 1 кг\r\nБульон — 1 литр\r\nЛук репчатый — 1 шт.\r\nЧеснок — 1 зубчик\r\nСливки (или сметана) — 200 мл\r\nКарри — 1 столовая ложка\r\nСоль — 1 столовая ложка', 0x74796b76656e6e796a2d7375702d70797572652d762d6d756c74697661726b652e6a706567, 0x74696b76656e6e69792d7375702d707572652d312e6a7067, '', '', '2023-05-19 14:37:54', '2023-05-19 14:37:54', 1),
(8, 'Финская уха', NULL, ' Шаг 1\r\n1) Рыбу выложить в кастрюлю, добавить лавровый лист и перец. Варить около часа, чтобы получился наваристый бульон.\r\n2) Кубиком нарезать картофель.Мелко нарезать лук и морковь.\r\nШаг 2\r\n1) Из готового бульона извлечь рыбу, а сам бульон процедить.\r\n2) В кастрюле обжарить лук и морковь на растительном масле.\r\n3) Влить бульон, добавить картофель, варить 15 минут.\r\nШаг 3\r\nИз рыбы удалить кости и разделить её на крупные кусочки.\r\nДобавить к бульону сливки и рыбу, варить пару минут.\r\n', 2, 1, 2, 27, 'Форель — 450 г.\r\nКартофель — 4 шт.\r\nЛук репчатый — 1 шт.\r\nМорковь — 1 шт.\r\nУкроп — по вкусу\r\nСливки 20% — 100 мл.\r\nМасло подсолнечное — 1 столовая ложка\r\nВода — 3 литра\r\nСоль (по вкусу) — 1 чайная ложка\r\nЛавровый лист — 1 шт.\r\nПерец чёрный горошком — 2 шт.', 0x736c69766f63686e6179612d7568612d706f2d66696e736b692d732d706f6d69646f72616d692e6a7067, 0x64353066633933633633303864373235366264336636613263376230666461622d323031392e6a7067, '', '', '2023-05-19 14:41:36', '2023-05-19 14:41:36', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'test', '$2y$10$3N0/Q/R7yu4p5n27/7Xlvu0QImEmj8TxorP1IzUkFxcX36j9hadA2', 'user'),
(2, 'tester', '$2y$10$HoREQpo0d4663V4.8MgRaOu3YqAYXQIfCnR27IfUqnF4zGCORMxj6', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `list`
--
ALTER TABLE `list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `list`
--
ALTER TABLE `list`
  ADD CONSTRAINT `list_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
