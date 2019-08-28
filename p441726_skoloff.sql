-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: p441726.mysql.ihc.ru
-- Время создания: Авг 26 2019 г., 16:01
-- Версия сервера: 5.7.26-29-log
-- Версия PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `p441726_skoloff`
--

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `mini` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `file`, `mini`) VALUES
(2, '/storage/galery/uoLhvbJN7Ktx5HAaVjtf3xpViCv2rnQdeTeZy2E9.jpeg', '/storage/galery/mini/uoLhvbJN7Ktx5HAaVjtf3xpViCv2rnQdeTeZy2E9.jpeg'),
(3, '/storage/galery/aZhveniaFaKyuLSCIfGoxkGzIkrkz4o4AvIBJI4L.jpeg', '/storage/galery/mini/aZhveniaFaKyuLSCIfGoxkGzIkrkz4o4AvIBJI4L.jpeg'),
(4, '/storage/galery/mvgAGEUgthbqA4ZuiQtPFGVpZPbUtDPUF6RklaDs.jpeg', '/storage/galery/mini/mvgAGEUgthbqA4ZuiQtPFGVpZPbUtDPUF6RklaDs.jpeg'),
(5, '/storage/galery/0Pvuj91BOmvmXU3z67Fy0dX5fU4fw7TLiacRnJ6Z.jpeg', '/storage/galery/mini/0Pvuj91BOmvmXU3z67Fy0dX5fU4fw7TLiacRnJ6Z.jpeg'),
(6, '/storage/galery/q1S6B1L1OXh3yR39mBPzQOJoiWqrSMYbLvQv9Mco.jpeg', '/storage/galery/mini/q1S6B1L1OXh3yR39mBPzQOJoiWqrSMYbLvQv9Mco.jpeg'),
(7, '/storage/galery/E5GjjRNh3pgiNJgbPOBXTNEA7Ex0u8PMlsDo6yHh.jpeg', '/storage/galery/mini/E5GjjRNh3pgiNJgbPOBXTNEA7Ex0u8PMlsDo6yHh.jpeg'),
(8, '/storage/galery/od0cK39XBFNsQ3cirou1iaFJTqGqEuV7uGvklCF9.jpeg', '/storage/galery/mini/od0cK39XBFNsQ3cirou1iaFJTqGqEuV7uGvklCF9.jpeg'),
(9, '/storage/galery/hrP7oK9Pbgqa3JY8DDoFTcqoKGYzznJ00A0ebNAa.jpeg', '/storage/galery/mini/hrP7oK9Pbgqa3JY8DDoFTcqoKGYzznJ00A0ebNAa.jpeg'),
(10, '/storage/galery/tsmp5r3ENeAHMjANoyGVpPJ3ECuYju93BFVJZO76.jpeg', '/storage/galery/mini/tsmp5r3ENeAHMjANoyGVpPJ3ECuYju93BFVJZO76.jpeg'),
(11, '/storage/galery/AssoYQUYlugNwk1sizJBMxDYmP2Osk5rxdd1e82h.jpeg', '/storage/galery/mini/AssoYQUYlugNwk1sizJBMxDYmP2Osk5rxdd1e82h.jpeg'),
(12, '/storage/galery/4dYWCIblbe0wFa23LvZ9LQMuVfW5gKnjEzuBW8KK.jpeg', '/storage/galery/mini/4dYWCIblbe0wFa23LvZ9LQMuVfW5gKnjEzuBW8KK.jpeg'),
(13, '/storage/galery/YsgeedvvWgsrUg01yCPICb8oH17NmMijjADcCEBc.jpeg', '/storage/galery/mini/YsgeedvvWgsrUg01yCPICb8oH17NmMijjADcCEBc.jpeg'),
(14, '/storage/galery/wibRi54GB7MuXO9TiRIncUHacejgO7txHSDO4Min.jpeg', '/storage/galery/mini/wibRi54GB7MuXO9TiRIncUHacejgO7txHSDO4Min.jpeg'),
(15, '/storage/galery/4UggF4p6KbCOYugvkvxILCvDoCV2ArnglBj4aIaJ.jpeg', '/storage/galery/mini/4UggF4p6KbCOYugvkvxILCvDoCV2ArnglBj4aIaJ.jpeg'),
(16, '/storage/galery/1qIUg9IEo4kkT0eAhdEbjej1y3Kv0i012MFpAh4S.jpeg', '/storage/galery/mini/1qIUg9IEo4kkT0eAhdEbjej1y3Kv0i012MFpAh4S.jpeg'),
(17, '/storage/galery/NkeYpXHvPTcEmnVdc8u3qBB9SarBd9QlyS5tHARW.jpeg', '/storage/galery/mini/NkeYpXHvPTcEmnVdc8u3qBB9SarBd9QlyS5tHARW.jpeg'),
(18, '/storage/galery/TrFp7TQP8auoo9eFZfNnqwFBr2yVesW3FVrZO5T9.jpeg', '/storage/galery/mini/TrFp7TQP8auoo9eFZfNnqwFBr2yVesW3FVrZO5T9.jpeg'),
(19, '/storage/galery/u8fpQJp9Jgd3TSiWCwljbpKPWkOVUqu7ekoWPEFY.jpeg', '/storage/galery/mini/u8fpQJp9Jgd3TSiWCwljbpKPWkOVUqu7ekoWPEFY.jpeg'),
(20, '/storage/galery/uzrOOmbXaOX3xW7rmch6roe8JdqiH0Z1JROxXzz5.jpeg', '/storage/galery/mini/uzrOOmbXaOX3xW7rmch6roe8JdqiH0Z1JROxXzz5.jpeg'),
(21, '/storage/galery/55gaTU4Eo1cZOMvyilbl6XlT5qIhE1csrPlpPuLu.jpeg', '/storage/galery/mini/55gaTU4Eo1cZOMvyilbl6XlT5qIhE1csrPlpPuLu.jpeg'),
(22, '/storage/galery/rS7JBTafuJIqQjEAdtJYhBIjI1xITl2eNV0KJlDj.jpeg', '/storage/galery/mini/rS7JBTafuJIqQjEAdtJYhBIjI1xITl2eNV0KJlDj.jpeg'),
(23, '/storage/galery/SN9GAQD0NQSMd1tjf5ato2UVblzc8q73HtLun6jO.jpeg', '/storage/galery/mini/SN9GAQD0NQSMd1tjf5ato2UVblzc8q73HtLun6jO.jpeg'),
(24, '/storage/galery/noUWvnQHB0xcx0V22CG6jiHUby5VyoSAmW3dR88Q.jpeg', '/storage/galery/mini/noUWvnQHB0xcx0V22CG6jiHUby5VyoSAmW3dR88Q.jpeg'),
(25, '/storage/galery/8sz0luwOwptcKMxSADp3HqXLWCfxFitF8YYA02WW.jpeg', '/storage/galery/mini/8sz0luwOwptcKMxSADp3HqXLWCfxFitF8YYA02WW.jpeg'),
(26, '/storage/galery/Mt92Bz5iAHgjAk59k5MvI0avMmJkNHAokfJox1M9.jpeg', '/storage/galery/mini/Mt92Bz5iAHgjAk59k5MvI0avMmJkNHAokfJox1M9.jpeg'),
(27, '/storage/galery/RWB3IegvWagME6m4MirFjPJfWKZGwdXNGEp465o1.jpeg', '/storage/galery/mini/RWB3IegvWagME6m4MirFjPJfWKZGwdXNGEp465o1.jpeg'),
(28, '/storage/galery/K81y1kOHe5QVrR8QNezyvOV4NU2bQnCypvb2FYVx.jpeg', '/storage/galery/mini/K81y1kOHe5QVrR8QNezyvOV4NU2bQnCypvb2FYVx.jpeg'),
(29, '/storage/galery/nEjm8agDRCysfYpBAUyQpE5XOw9utPFsmbasKE2n.jpeg', '/storage/galery/mini/nEjm8agDRCysfYpBAUyQpE5XOw9utPFsmbasKE2n.jpeg'),
(30, '/storage/galery/5ojyfLarMLzmezudVXUIpkMkPxqIxG7x5XlE8I6W.jpeg', '/storage/galery/mini/5ojyfLarMLzmezudVXUIpkMkPxqIxG7x5XlE8I6W.jpeg'),
(31, '/storage/galery/Doky3kWC8wdLJeG890Q9uShVyBCPPSTSn6ICpebn.jpeg', '/storage/galery/mini/Doky3kWC8wdLJeG890Q9uShVyBCPPSTSn6ICpebn.jpeg'),
(32, '/storage/galery/eGFzvat4nSm4S6EObtddiBTFbBEXfPBcE5HAhzL3.jpeg', '/storage/galery/mini/eGFzvat4nSm4S6EObtddiBTFbBEXfPBcE5HAhzL3.jpeg'),
(33, '/storage/galery/DUvOTORwQAr1OnwsSfR44rtOS3xtcxIy9rM7Jpjo.jpeg', '/storage/galery/mini/DUvOTORwQAr1OnwsSfR44rtOS3xtcxIy9rM7Jpjo.jpeg'),
(34, '/storage/galery/bSRvNCuSz9UybOJ21II1oURiK4jbKMrtC2xCxvsA.jpeg', '/storage/galery/mini/bSRvNCuSz9UybOJ21II1oURiK4jbKMrtC2xCxvsA.jpeg'),
(35, '/storage/galery/mRvhBFX2krgbemHiuh6q1WR0uZKgL7wnlmIW4ven.jpeg', '/storage/galery/mini/mRvhBFX2krgbemHiuh6q1WR0uZKgL7wnlmIW4ven.jpeg'),
(36, '/storage/galery/DGRYluLH41wKDeb3rlOcyxjEc95Qb7qAKw8aVWtu.jpeg', '/storage/galery/mini/DGRYluLH41wKDeb3rlOcyxjEc95Qb7qAKw8aVWtu.jpeg'),
(37, '/storage/galery/Rtg5bIht79xR8zkPJuDNXJQC0u96yiYbi8Mpge80.jpeg', '/storage/galery/mini/Rtg5bIht79xR8zkPJuDNXJQC0u96yiYbi8Mpge80.jpeg'),
(38, '/storage/galery/ymAjcGfStKbcvaWCWa0CPlLTLqNZYHMcgO7yHAK8.jpeg', '/storage/galery/mini/ymAjcGfStKbcvaWCWa0CPlLTLqNZYHMcgO7yHAK8.jpeg'),
(39, '/storage/galery/ZLDSaNhIyNkVtmbkApaoMG2jhziOHZJBdHVmxuEH.jpeg', '/storage/galery/mini/ZLDSaNhIyNkVtmbkApaoMG2jhziOHZJBdHVmxuEH.jpeg'),
(40, '/storage/galery/cXQViXRLGR02rW9qWTll5u2jOxN9LpzjeZcizmKy.jpeg', '/storage/galery/mini/cXQViXRLGR02rW9qWTll5u2jOxN9LpzjeZcizmKy.jpeg'),
(41, '/storage/galery/0Cg1LTCHFMidwjSbEeJe0fNgkGqoQQSWkBhedpH7.jpeg', '/storage/galery/mini/0Cg1LTCHFMidwjSbEeJe0fNgkGqoQQSWkBhedpH7.jpeg'),
(42, '/storage/galery/bIMUrw5Ccyed3M0xNHt51GKcJbIIWr5CQBEhSsYc.jpeg', '/storage/galery/mini/bIMUrw5Ccyed3M0xNHt51GKcJbIIWr5CQBEhSsYc.jpeg'),
(43, '/storage/galery/8mdX9is1rl9fKknpXkAOpsSa3kyWZdAPTW0Z00Og.jpeg', '/storage/galery/mini/8mdX9is1rl9fKknpXkAOpsSa3kyWZdAPTW0Z00Og.jpeg'),
(44, '/storage/galery/JMiIPpumecpalYAnJTrcxKxWD0xag05Spz2TIJNf.jpeg', '/storage/galery/mini/JMiIPpumecpalYAnJTrcxKxWD0xag05Spz2TIJNf.jpeg'),
(45, '/storage/galery/kyyKLV9squF3wbZKdtbAYVzG0aAruAhQ6RtZ2A1c.jpeg', '/storage/galery/mini/kyyKLV9squF3wbZKdtbAYVzG0aAruAhQ6RtZ2A1c.jpeg'),
(46, '/storage/galery/DJ6KFnjEn1rXoa1KgFhfQMW09rRuieXDXvqAo8ta.jpeg', '/storage/galery/mini/DJ6KFnjEn1rXoa1KgFhfQMW09rRuieXDXvqAo8ta.jpeg'),
(47, '/storage/galery/jyAV0UJa2JWIlLXrH0IKM7c0oPw1HDQ10vO1GL9h.jpeg', '/storage/galery/mini/jyAV0UJa2JWIlLXrH0IKM7c0oPw1HDQ10vO1GL9h.jpeg'),
(48, '/storage/galery/nTsonCcOlTcZ2InsZgOEKklqItbvB81zarKzmLZf.jpeg', '/storage/galery/mini/nTsonCcOlTcZ2InsZgOEKklqItbvB81zarKzmLZf.jpeg'),
(49, '/storage/galery/tsHO3xuHtmIMPgbYA2nV61SuZ3gRasSWaCd2GUgq.jpeg', '/storage/galery/mini/tsHO3xuHtmIMPgbYA2nV61SuZ3gRasSWaCd2GUgq.jpeg'),
(50, '/storage/galery/QGmGWozSJeLKcfHvOUPQGfvRfJMod31MEnOOCMEH.jpeg', '/storage/galery/mini/QGmGWozSJeLKcfHvOUPQGfvRfJMod31MEnOOCMEH.jpeg'),
(51, '/storage/galery/YlZYNKYqwu4RhwEb1YiZeV4y7KRJjXu1K2BzjqC7.jpeg', '/storage/galery/mini/YlZYNKYqwu4RhwEb1YiZeV4y7KRJjXu1K2BzjqC7.jpeg'),
(52, '/storage/galery/ooJndcWMsANwRBspxb988OARaGoDCU9FKtpANT3n.jpeg', '/storage/galery/mini/ooJndcWMsANwRBspxb988OARaGoDCU9FKtpANT3n.jpeg'),
(53, '/storage/galery/1pT5IHR247JAajB4lu3cp926kez7H781sl3meeI5.jpeg', '/storage/galery/mini/1pT5IHR247JAajB4lu3cp926kez7H781sl3meeI5.jpeg'),
(54, '/storage/galery/Vi8UUxkrRIdDlhK4ZFcC1YNe98F5ZtnHUj194FgO.jpeg', '/storage/galery/mini/Vi8UUxkrRIdDlhK4ZFcC1YNe98F5ZtnHUj194FgO.jpeg'),
(55, '/storage/galery/yJw1IqaiXzWSrRyBHmMs9RiZtN1xvDPSbYdhQYsd.jpeg', '/storage/galery/mini/yJw1IqaiXzWSrRyBHmMs9RiZtN1xvDPSbYdhQYsd.jpeg'),
(56, '/storage/galery/GcetZrOTbJtollVXGdg9bf3iL0KfC08xrr2tJdzG.jpeg', '/storage/galery/mini/GcetZrOTbJtollVXGdg9bf3iL0KfC08xrr2tJdzG.jpeg'),
(57, '/storage/galery/teDSjQGoc98TiSJlzZn3yyIMQ9jknlExp2yfcofz.jpeg', '/storage/galery/mini/teDSjQGoc98TiSJlzZn3yyIMQ9jknlExp2yfcofz.jpeg'),
(58, '/storage/galery/RbVa3po6wZP6IrtZJqdxzZqkfRsEGNFYT3qYoSpF.jpeg', '/storage/galery/mini/RbVa3po6wZP6IrtZJqdxzZqkfRsEGNFYT3qYoSpF.jpeg'),
(59, '/storage/galery/ehhCb4DO4Re3ksg9dQ7f2Bk7sJk861hPyDAgslUL.jpeg', '/storage/galery/mini/ehhCb4DO4Re3ksg9dQ7f2Bk7sJk861hPyDAgslUL.jpeg'),
(60, '/storage/galery/UNwJFQ5RrDdPYyRmTZosex62ORJLGqgL1q49pzvK.jpeg', '/storage/galery/mini/UNwJFQ5RrDdPYyRmTZosex62ORJLGqgL1q49pzvK.jpeg'),
(61, '/storage/galery/kfgWGm2pSmw7xSeRKQX72YGX6MZaVK3wPD0zGzKr.jpeg', '/storage/galery/mini/kfgWGm2pSmw7xSeRKQX72YGX6MZaVK3wPD0zGzKr.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `name_laravel` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `activ` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `name_laravel`, `url`, `activ`) VALUES
(5, 'ГЛАВНАЯ', 'home', '/', 1),
(6, 'НАШИ РАБОТЫ', 'ourwork', '/ourwork', 1),
(7, 'ПОСТАВЩИКИ', NULL, '/suppliers', 0),
(8, 'КОНТАКТЫ', 'contacts', '/contacts', 1),
(9, 'ЦЕНЫ', 'price', '/price', 1),
(10, 'АКЦИИ', NULL, '/stock', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_08_23_115748_create_roles_table', 2),
(6, '2019_08_23_115848_create_roles_user_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `activ` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `name`, `price`, `activ`) VALUES
(1, 'Установка лобового стекла', '3500', 1),
(2, 'Установка заднего стекла', '1800', 1),
(3, 'Установка кузовной форточки', '1300', 1),
(4, 'Установка бокового стекла', '1000', 1),
(5, 'Установка стекла в резинку', '800', 1),
(6, 'Ремонт скола', '1000', 1),
(7, 'Остановка трещины', '500', 1),
(8, 'Выезд г.Санкт-Петербурга и Лен.Области', '1000', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '{\"admin\": \"true\"}', '2019-08-22 21:00:00', '2019-08-22 21:00:00'),
(2, 'User', 'user', '{\"user\": \"true\"}', '2019-08-22 21:00:00', '2019-08-22 21:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(2, 4, 1, NULL, NULL),
(3, 5, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `images` mediumtext,
  `text1` varchar(255) DEFAULT NULL,
  `text2` varchar(255) DEFAULT NULL,
  `activ` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `images`, `text1`, `text2`, `activ`) VALUES
(2, '/template/images/maxresdefault3.jpg', ' Работаем на выезд и стационарн', ' У нас можно приобрести автостекло в наличии и под заказ практически на любой автомобиль.', 0),
(3, '/template/images/maxresdefault2.jpg', 'Замена лобовых стекол с выездом к вам!!! ', 'Осуществляем доставку стекол в самые краткие сроки не более одних суток !!!! ', 0),
(4, '/template/images/maxresdefault.jpg', 'Профессиональный ремонт и замена автостёкол ', 'в Санкт-Петербурге и Ленинградской области, ремонт сколов и трещин любой сложности.', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `activ` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sponsors`
--

INSERT INTO `sponsors` (`id`, `name`, `images`, `activ`) VALUES
(1, 'Benson', '/images/clients/benson1.png', 1),
(2, 'AGC', '/images/clients/agc.png', 1),
(6, 'Glas', '/images/clients/glass.png', 1),
(4, 'KMK', '/images/clients/KMK1.png', 1),
(3, 'Pilkinkton', '/images/clients/Pilkington1.png', 1),
(0, 'Saint-Gobain', 'images/clients/Saint-Gobain.png', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'dev', 'anton4ik08@gmail.com', NULL, '$2y$10$BDj3b/Rk/elwU4izdnrZYOKV08qCZVfBKVQDU31kiUlqDON7h7.8u', NULL, '2019-08-23 10:28:32', '2019-08-23 10:28:32'),
(5, 'admin', 'skoloff78@gmail.com', NULL, '$2y$10$wGsJIJ82.pm8AEpe9w0t8.8OUm/aaSIMyaI0mvAqWd./9x8mW2IeC', NULL, '2019-08-26 06:55:36', '2019-08-26 06:55:36');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Индексы таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_user_user_id_unique` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
