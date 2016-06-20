-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2016 at 02:19 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allevents`
--

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `menu_type_id`, `enabled`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(5, 'Клубы', 'Клубы  ro', 'Клубы  en', '', '', '', '', '', '', 1, 1, 0, 0, 'clubs', NULL, '2016-06-10 06:19:54'),
(6, 'Свадьбы', 'Свадьбы ro', 'Свадьбы en', '<p>Описаниеfds</p>\r\n', '', '', '', '', '', 1, 1, 0, 0, 'weddings', NULL, '2016-06-10 08:20:14'),
(7, 'Корпоративы', 'Корпоративы ro', 'Корпоративы en', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto ab recusandae, molestiae quasi?</p>\r\n', '', '', '', '', '', 1, 1, 0, 0, 'corporate-events', NULL, '2016-06-10 05:45:39'),
(8, 'Рестораны', 'Рестораны ro', '', '', '', '', '', '', '', 1, 1, 0, 0, 'restaurants', NULL, NULL),
(9, 'Крестины', 'Крестины Ro', 'Крестины En', '<p>Описанне</p>\r\n', '', '', '', '', '', 0, 1, 0, 0, 'krestini', '2016-06-10 07:51:22', '2016-06-10 07:51:22'),
(10, 'Выпускной', 'Выпускной', 'Выпускной', '<p>dsdasd</p>\r\n', '', '', '', '', '', 0, 1, 0, 0, 'vipusknoi', '2016-06-10 08:34:16', '2016-06-10 08:34:16');

--
-- Dumping data for table `categories_xref`
--

INSERT INTO `categories_xref` (`id`, `parent_id`, `child_id`) VALUES
(1, 6, 5),
(2, 7, 5),
(3, 6, 8),
(4, 7, 8),
(5, 6, 6),
(7, 5, 9),
(8, 9, 5),
(9, 0, 10),
(10, 10, 5);

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `name_en`, `name_ro`, `description`, `description_en`, `description_ro`, `enabled`, `views`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Club drive Content', 'asdas', 'ada', 'asd', 'asd', 'asd', 1, 0, 'stranitsa', NULL, NULL);

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`id`, `meta_description`, `meta_description_ro`, `meta_description_en`, `meta_keywords`, `meta_keywords_ro`, `meta_keywords_en`, `title`, `title_ro`, `title_en`, `table_id`, `table`) VALUES
(1, 'meta свадьбы', '', '', '', '', '', '', '', '', 6, 'categories'),
(2, '', '', '', '', '', '', '', '', '', 5, 'categories'),
(3, '', '', '', '', '', '', '', '', '', 7, 'categories'),
(4, '', '', '', '', '', '', '', '', '', 9, 'categories'),
(5, '', '', '', '', '', '', '', '', '', 10, 'categories');

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_23_125704_create_news', 1),
('2016_04_08_084345_create_content_table', 1),
('2016_04_20_120053_create_tag_table', 1),
('2016_04_20_120306_create_news_tag_table', 1),
('2016_04_21_071344_create_constants', 1),
('2016_04_28_122305_create_photos_table', 1),
('2016_05_25_092458_create_products', 1),
('2016_05_25_103543_create_products_news', 1),
('2016_05_25_111243_create_meta', 1),
('2016_05_25_112336_create_types', 1),
('2016_05_25_112545_create_news_types', 1),
('2016_05_25_113258_create_galleries', 1),
('2016_05_25_113907_create_galleries_xref', 1),
('2016_05_25_115447_create_categories', 1),
('2016_05_25_120511_create_categories_xref', 1),
('2016_05_25_121927_create_videos', 1),
('2016_05_25_122240_menu_products', 1),
('2016_05_25_122425_menu_categories', 1),
('2016_06_06_080747_update_photos_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_23_125704_create_news', 1),
('2016_04_08_084345_create_content_table', 1),
('2016_04_20_120053_create_tag_table', 1),
('2016_04_20_120306_create_news_tag_table', 1),
('2016_04_21_071344_create_constants', 1),
('2016_04_28_122305_create_photos_table', 1),
('2016_05_25_092458_create_products', 1),
('2016_05_25_103543_create_products_news', 1),
('2016_05_25_111243_create_meta', 1),
('2016_05_25_112336_create_types', 1),
('2016_05_25_112545_create_news_types', 1),
('2016_05_25_113258_create_galleries', 1),
('2016_05_25_113907_create_galleries_xref', 1),
('2016_05_25_115447_create_categories', 1),
('2016_05_25_120511_create_categories_xref', 1),
('2016_05_25_121927_create_videos', 1),
('2016_05_25_122240_menu_products', 1),
('2016_05_25_122425_menu_categories', 1);

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `enabled`, `top`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Тест новость', '', '', '', '', '', '', '', '', 1, 1, 5, 0, 'test-novosti', NULL, '0000-00-00 00:00:00');

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `source`, `table_id`, `table`, `sort`, `token`) VALUES
(3, 'clubs_3.png', 5, 'categories', 0, ''),
(4, 'weddings_4.png', 6, 'categories', 0, ''),
(5, 'corporate-events_5.png', 7, 'categories', 5, ''),
(6, 'krestini_6.png', 9, 'categories', 6, ''),
(7, 'vipusknoi_7.png', 10, 'categories', 7, '');

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `price`, `map`, `enabled`, `top`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Клуб Drive', '', '', '', '', '', '', '', '', 100.00, '', 1, 1, 0, 0, 'club-drive', NULL, '2016-06-02 05:24:48');

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `created_at`, `updated_at`, `name`, `name_ro`, `name_en`, `top`, `slug`) VALUES
(1, NULL, NULL, 'Спорт', '', '', 1, '');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `rights`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Xsort', 'support@xsort.md', '$2y$10$twmlb5YlgimkrTIwnKqeauX9JusORUAVWnjjK1jBhM0AQwJW/3RIy', 1, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
