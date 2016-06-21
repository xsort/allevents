-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2016 at 01:35 AM
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

INSERT INTO `categories` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `menu_type_id`, `enabled`, `top`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(5, 'Клубы', 'Сluburi', 'Clubs', '<p>Все лучшие клубы Кишинева и вся информация о них: адреса, расписание работы, отзывы,&nbsp;фотографии, цены,&nbsp;рейтинг, карта проезда.</p>\r\n', '<p>Toate cele mai bune cluburi din Chisinau si toate informatiile despre ei: adresa, programul de lucru, comentarii, fotografii, preturi, ratinguri, hartă.</p>\r\n', '<p>All the best clubs of Chisinau and all information about them: address, work schedule, reviews, photos, prices, ratings, map.</p>\r\n', '', '', '', 1, 1, 1, 0, 0, 'kluby', NULL, '2016-06-21 20:13:57'),
(6, 'Свадьбы', 'Nunți', 'Weddings', '<p>Организация и проведение свадеб в Кишиневе. У нас вы найдете все необходимое&nbsp;для свадебы:&nbsp;декор, флористика, а также&nbsp;поиск помещений, подбор персонала для обслуживания.&nbsp;</p>\r\n', '<p>Organizarea si desfasurarea de nunti la Chișinău. Aici vei gasi tot ce ai nevoie pentru nunti: decor, florale și sedii de căutare, servicii de personal.</p>\r\n', '<p>The organization and carrying out of weddings in Chisinau. Here you will find everything you need for weddings: decor, floral and search premises, personnel services.</p>\r\n', '', '', '', 1, 1, 1, 0, 0, 'svadiby', NULL, '2016-06-21 20:14:21'),
(7, 'Корпоративы', 'Evenimente corporative', 'Corporate events', '<p>Хотите заказать незабываемый&nbsp;корпоратив?&nbsp;Поможем организовать и провести любой&nbsp;корпоратив&nbsp;профессионально и по высшему разряду.</p>\r\n', '<p>Doriți să comandați un eveniment corporate memorabil? Vă putem ajuta să vă organizați și să efectueze orice clasă de corporație și profesional.</p>\r\n', '<p>You want to order a memorable corporate event? We can help you organize and carry out any corporate and professional class.</p>\r\n', '', '', '', 1, 1, 1, 0, 0, 'korporativy', NULL, '2016-06-21 20:15:32'),
(8, 'Рестораны \\ Кафе', 'Restaurant \\ Cafenea', 'Restaurant \\ Cafe', '<p>Перечень ресторанов,&nbsp;кафе, баров и пабов города (меню , цены , фото , отзывы , описание). Возможность быстрого заказа столика или&nbsp;банкета.</p>\r\n', '<p>Lista de restaurante, cafenele, baruri și pub-uri din oraș (meniu, preturi, fotografii, recenzii, descrieri). Posibilitatea de a comanda rapid o masă sau banchet.</p>\r\n', '<p>The list of restaurants, cafes, bars and pubs of the city (menu, prices, photos, reviews, descriptions). The ability to quickly order a table or banquet.</p>\r\n', '', '', '', 1, 1, 1, 0, 0, 'restorany-kafe', NULL, '2016-06-21 20:15:55'),
(9, 'Крестины', 'Botezuri', 'Christening', '<p>Крестины, крещение ребенка. Мы готова оказать вам квалифицированную и профессиональную помощь в&nbsp;организации&nbsp;и проведении</p>\r\n', '<p>Botez, copil botez. Suntem pregătiți să vă ofere asistență calificată și profesională &icirc;n organizarea și desfășurarea</p>\r\n', '<p>Christening, baby baptism. We are ready to provide you with qualified and professional assistance in organizing and conducting</p>\r\n', '', '', '', 0, 1, 1, 0, 0, 'krestiny', '2016-06-10 07:51:22', '2016-06-21 20:34:02'),
(10, 'Выпускной', 'Absolvire', 'High school graduation', '<p>Организация&nbsp;лучших&nbsp;выпускных&nbsp;</p>\r\n\r\n<p>вечеров в Кишиневе.&nbsp;Мы поможем вам выбрать все необходимое, для успешного проведения выпускного вечера.</p>\r\n', '<p>Organizarea celor mai bune proms din Chișinău pentru studenți. Vă vom ajuta să alegeți tot ce ai nevoie pentru un bal de succes.</p>\r\n', '<p>Organization of the best proms in Chisinau for students. We will help you to choose everything you need for a successful prom.</p>\r\n', '', '', '', 0, 1, 1, 0, 0, 'vypusknoj', '2016-06-10 08:34:16', '2016-06-21 20:34:29'),
(11, 'День рождения', 'Zi de naștere', 'Birthday', '<p>Не знаете где и как отпраздновать&nbsp;день рождение?&nbsp;Мы поможем вам в&nbsp;организации праздника. У нас вы найдете все необходимые услуги, нужные для проведения дня рождения.</p>\r\n', '<p>Tu nu știi unde și cum pentru a sărbători ziua de nastere? Vă vom ajuta să vă organizați evenimentul. Aici veti gasi toate serviciile necesare necesare pentru a efectua aniversari.</p>\r\n', '<p>You do not know where and how to celebrate a birthday? We will help you organize the event. Here you will find all the necessary services needed to conduct birthdays.</p>\r\n', '', '', '', 0, 1, 1, 0, 0, 'deni-rojdenia', '2016-06-17 04:50:36', '2016-06-21 20:16:19'),
(12, 'Детские праздники', 'Petrecerile copiilor', 'Children holidays', '<p>Организация&nbsp;проведения&nbsp;детских праздников.&nbsp;Мы поможем организовать незабываемый&nbsp;праздник&nbsp;для Вашего ребенка. Большой выбор программ, конкурсов и аниматоров.</p>\r\n', '<p>Organizare de festivitati pentru copii. Vă vom ajuta să vă organizați o vacanță de neuitat pentru copilul tau. O gamă largă de programe, concursuri și divertisment.</p>\r\n', '<p>Organization of children&#39;s holiday. We will help you organize an unforgettable holiday for your child. A wide range of programs, competitions and entertainment.</p>\r\n', '', '', '', 0, 1, 1, 0, 0, 'detskie-prazdniki', '2016-06-17 04:54:52', '2016-06-21 20:16:41'),
(13, 'Акции \\ Скидки', 'Promotii \\ Reduceri', 'Promotions \\ Discounts', '<p>Список&nbsp;акций&nbsp;и скидок заведений&nbsp;в Кишиневе.&nbsp;Будьте в курсе всех&nbsp;акций&nbsp;и специальных предложений проходящих в&nbsp;заведениях&nbsp;города Кишинева.</p>\r\n', '<p>Lista promoții și a instituțiilor de reduceri &icirc;n Chișinău. Să fie conștienți de toate acțiunile și ofertele speciale care au loc &icirc;n instituții ale orașului Chișinău.</p>\r\n', '<p>The list of promotions and discounts institutions in Chisinau. Be aware of all the shares and special offers taking place in Chisinau city institutions.</p>\r\n', '', '', '', 0, 1, 1, 0, 0, 'akczii-skidki', '2016-06-21 04:58:24', '2016-06-21 20:17:03'),
(14, 'Event менеджер \\ Организатор', 'Event Manager \\ Organizator', 'Event Manager \\ Organizer', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'event-menedzher-organizator', '2016-06-21 05:10:43', '2016-06-21 06:41:51'),
(15, 'ЗАГСы \\ Церкви', 'Saloane de Înregistrare \\ Bisericii', 'Registry offices \\ Church', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'zagsy-czerkvi', '2016-06-21 05:12:38', '2016-06-21 06:42:24'),
(16, 'Свадебная обувь и аксессуары', 'Pantofi de nunta si accesorii', 'Wedding shoes and accessories', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'svadebnaya-obuvi-i-aksessuary', '2016-06-21 05:13:09', '2016-06-21 06:42:46'),
(17, 'Свадебные и вечерние платья', 'Nunta si rochii de seara', 'Wedding & Evening Dresses', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'svadebnye-i-vechernie-platiya', '2016-06-21 05:14:53', '2016-06-21 06:43:43'),
(18, 'Мужские костюмы', 'Costume pentru bărbați', 'Men''s suits', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'muzhskie-kostyumy', '2016-06-21 05:15:45', '2016-06-21 06:40:46'),
(19, 'Свадебный танец', 'Dans de nunta', 'A wedding dance', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'svadebnyj-tanecz', '2016-06-21 05:17:21', '2016-06-21 06:44:14'),
(20, 'Фото \\ Видео', 'Fotografie \\ Video', 'Photo \\ Video', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'foto-video', '2016-06-21 05:18:01', '2016-06-21 06:44:34'),
(21, 'Рестораны \\ Банкетные залы \\ Открытые площадки', 'Restaurante \\ Facilități pentru banchete \\ Zone deschise', 'Restaurants \\ Banquet Facilities \\ Open areas', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'restorany-banketnye-zaly-otkrytye-ploshhadki', '2016-06-21 05:18:45', '2016-06-21 06:45:13'),
(22, 'Торты \\ Калачи \\ Вкусняшки', 'Torturi \\ Kalachi \\ Gustări', 'Cakes \\ Kalachi \\ Snacks', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'torty-kalachi-vkusnyashki', '2016-06-21 05:20:05', '2016-06-21 06:46:04'),
(23, 'Ведущий \\ Тамада', 'Conducător \\ Tamada', 'Leading \\ Tamada', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'vedushhij-tamada', '2016-06-21 05:21:51', '2016-06-21 06:46:27'),
(24, 'Dj \\ Артисты \\ Шоу программа', 'Dj \\ Artisti \\ Program Afișare', 'Dj \\ Artists \\ Show program', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'dj-artisty-shou-programma', '2016-06-21 05:22:41', '2016-06-21 06:46:48'),
(25, 'Световое \\ Звуковое оборудование', 'Lumina \\ Audio echipament', 'Light \\ Audio Equipment', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'svetovoe-zvukovoe-oborudovanie', '2016-06-21 05:23:56', '2016-06-21 06:47:37'),
(26, 'Фейерверки', 'Focuri de artificii', 'Fireworks', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'fejerverki', '2016-06-21 05:24:50', '2016-06-21 06:47:55'),
(27, 'Флористы', 'Florari', 'Florists', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'floristy', '2016-06-21 05:25:25', '2016-06-21 06:49:38'),
(28, 'Ювелиры', 'Bijutierii', 'Jewellers', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'yuveliry', '2016-06-21 05:25:52', '2016-06-21 06:49:48'),
(29, 'Оформление торжеств \\ Декорации', 'Luare de sărbători \\ Decor', 'Making celebrations \\ Scenery', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'oformlenie-torzhestv-dekoraczii', '2016-06-21 05:26:29', '2016-06-21 06:50:13'),
(30, 'Транспорт', 'Transport', 'Transport', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'transport', '2016-06-21 05:27:02', '2016-06-21 06:50:51'),
(31, 'Салон красоты \\ Косметологии и Spa', 'Frumusete \\ Cosmetică și spa', 'Beauty \\ Cosmetology and Spa', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'salon-krasoty-kosmetologii-i-spa', '2016-06-21 05:27:48', '2016-06-21 06:51:12'),
(32, 'Стилисты и визажисты', 'Stilisti și artiști machiaj', 'Stylists and makeup artists', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'stilisty-i-vizazhisty', '2016-06-21 05:28:20', '2016-06-21 06:51:34'),
(33, 'Напитки', 'Băuturi', 'Beverages', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'napitki', '2016-06-21 05:28:49', '2016-06-21 06:52:17'),
(34, 'Турагентства \\ Гостиницы', 'Agenție de turism \\ Hoteluri', 'Travel \\ Hotels', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'turagentstva-gostiniczy', '2016-06-21 05:30:20', '2016-06-21 05:30:20'),
(35, 'Пригласительные \\ Подарки \\ Аксессуары', 'Invitație de \\ Cadouri \\ Accesorii', 'Invitation \\ Gifts \\ Accessories', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'priglasitelinye-podarki-aksessuary', '2016-06-21 05:31:21', '2016-06-21 06:53:05'),
(36, 'Бармены \\ Официанты \\ Шеф повар', 'Barmanii \\ Chelnerii \\ Chef', 'Bartenders \\ Waiters \\ Chef', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'barmeny-oficzianty-shef-povar', '2016-06-21 05:31:55', '2016-06-21 06:54:06'),
(37, 'Кейтеринг \\ Шатры', 'Catering \\ Corturi', 'Catering \\ Tents', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'kejtering-shatry', '2016-06-21 05:32:43', '2016-06-21 06:57:41'),
(38, 'Организация предложения руки и сердца', 'Organizația oferă mâini și inimi', 'The organization offers hands and hearts', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'organizacziya-predlozheniya-ruki-i-serdcza', '2016-06-21 05:33:19', '2016-06-21 06:54:28'),
(39, 'Фитнес центр', 'Centru de fitness', 'Fitness center', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'fitnes-czentr', '2016-06-21 05:34:12', '2016-06-21 06:55:07');

--
-- Dumping data for table `categories_xref`
--

INSERT INTO `categories_xref` (`id`, `parent_id`, `child_id`) VALUES
(20, 0, 5),
(21, 0, 6),
(22, 6, 18),
(23, 7, 18),
(24, 10, 18),
(25, 11, 18),
(26, 6, 14),
(27, 7, 14),
(28, 9, 14),
(29, 10, 14),
(30, 11, 14),
(31, 12, 14),
(32, 6, 15),
(33, 9, 15),
(34, 6, 16),
(35, 6, 17),
(36, 6, 19),
(37, 6, 20),
(38, 7, 20),
(39, 9, 20),
(40, 10, 20),
(41, 11, 20),
(42, 12, 20),
(43, 6, 21),
(44, 7, 21),
(45, 10, 21),
(46, 11, 21),
(47, 12, 21),
(48, 6, 22),
(49, 7, 22),
(50, 10, 22),
(51, 11, 22),
(52, 12, 22),
(53, 6, 23),
(54, 7, 23),
(55, 10, 23),
(56, 11, 23),
(57, 12, 23),
(58, 6, 24),
(59, 7, 24),
(60, 10, 24),
(61, 11, 24),
(62, 12, 24),
(63, 6, 25),
(64, 7, 25),
(65, 10, 25),
(66, 11, 25),
(67, 6, 26),
(68, 10, 26),
(69, 11, 26),
(70, 12, 26),
(71, 6, 27),
(72, 10, 27),
(73, 11, 27),
(74, 12, 27),
(75, 6, 28),
(76, 6, 29),
(77, 7, 29),
(78, 10, 29),
(79, 11, 29),
(80, 12, 29),
(81, 6, 30),
(82, 10, 30),
(83, 11, 30),
(84, 6, 31),
(85, 10, 31),
(86, 11, 31),
(87, 6, 32),
(88, 10, 32),
(89, 11, 32),
(90, 6, 33),
(91, 7, 33),
(92, 10, 33),
(93, 11, 33),
(94, 12, 33),
(95, 6, 35),
(96, 7, 35),
(97, 9, 35),
(98, 10, 35),
(99, 11, 35),
(100, 12, 35),
(101, 6, 36),
(102, 6, 38),
(103, 6, 39),
(104, 6, 37),
(105, 10, 37),
(106, 11, 37),
(108, 0, 13),
(109, 0, 12),
(110, 0, 11),
(111, 0, 10),
(112, 0, 9),
(113, 0, 8);

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
(5, '', '', '', '', '', '', '', '', '', 10, 'categories'),
(6, '', '', '', '', '', '', '', '', '', 11, 'categories'),
(7, '', '', '', '', '', '', '', '', '', 12, 'categories'),
(8, '', '', '', '', '', '', '', '', '', 8, 'categories'),
(9, '', '', '', '', '', '', '', '', '', 13, 'categories'),
(10, '', '', '', '', '', '', '', '', '', 14, 'categories'),
(11, '', '', '', '', '', '', '', '', '', 15, 'categories'),
(12, '', '', '', '', '', '', '', '', '', 16, 'categories'),
(13, '', '', '', '', '', '', '', '', '', 17, 'categories'),
(14, '', '', '', '', '', '', '', '', '', 18, 'categories'),
(15, '', '', '', '', '', '', '', '', '', 19, 'categories'),
(16, '', '', '', '', '', '', '', '', '', 20, 'categories'),
(17, '', '', '', '', '', '', '', '', '', 21, 'categories'),
(18, '', '', '', '', '', '', '', '', '', 22, 'categories'),
(19, '', '', '', '', '', '', '', '', '', 23, 'categories'),
(20, '', '', '', '', '', '', '', '', '', 24, 'categories'),
(21, '', '', '', '', '', '', '', '', '', 25, 'categories'),
(22, '', '', '', '', '', '', '', '', '', 26, 'categories'),
(23, '', '', '', '', '', '', '', '', '', 27, 'categories'),
(24, '', '', '', '', '', '', '', '', '', 28, 'categories'),
(25, '', '', '', '', '', '', '', '', '', 29, 'categories'),
(26, '', '', '', '', '', '', '', '', '', 30, 'categories'),
(27, '', '', '', '', '', '', '', '', '', 31, 'categories'),
(28, '', '', '', '', '', '', '', '', '', 32, 'categories'),
(29, '', '', '', '', '', '', '', '', '', 33, 'categories'),
(30, '', '', '', '', '', '', '', '', '', 34, 'categories'),
(31, '', '', '', '', '', '', '', '', '', 35, 'categories'),
(32, '', '', '', '', '', '', '', '', '', 36, 'categories'),
(33, '', '', '', '', '', '', '', '', '', 37, 'categories'),
(34, '', '', '', '', '', '', '', '', '', 38, 'categories'),
(35, '', '', '', '', '', '', '', '', '', 39, 'categories');

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
(7, 'vipusknoi_7.png', 10, 'categories', 7, ''),
(8, '5763b58f58043.png', 0, 'products', 8, '97d1a4fbda2add5f15a91464694c84b44e22d2b8'),
(9, '5763bb286b276.png', 0, 'products', 9, '1c9a2d29f743583c5a003c7db74f943611e9a1e0'),
(10, 'restorany-kafe_10.png', 8, 'categories', 10, ''),
(11, 'deni-rojdenia_11.png', 11, 'categories', 11, ''),
(12, 'detskie-prazdniki_12.png', 12, 'categories', 12, ''),
(13, 'akczii-skidki_13.png', 13, 'categories', 13, ''),
(14, 'event-menedzher-organizator_14.png', 14, 'categories', 14, ''),
(15, 'zagsy-czerkvi_15.png', 15, 'categories', 15, ''),
(16, 'svadebnaya-obuvi-i-aksessuary_16.png', 16, 'categories', 16, ''),
(17, 'muzhskie-kostyumy_17.png', 18, 'categories', 17, ''),
(18, 'svadebnyj-tanecz_18.png', 19, 'categories', 18, ''),
(19, 'foto--video_19.png', 20, 'categories', 19, ''),
(20, 'restorany-banketnye-zaly-otkrytye-ploshhadki_20.png', 21, 'categories', 20, ''),
(21, 'torty--kalachi--vkusnyashki_21.png', 22, 'categories', 21, ''),
(22, 'vedushhij--tamada_22.png', 23, 'categories', 22, ''),
(23, 'dj--artisty--shou-programma_23.png', 24, 'categories', 23, ''),
(24, 'svetovoe--zvukovoe-oborudovanie_24.png', 25, 'categories', 24, ''),
(25, 'fejerverki_25.png', 26, 'categories', 25, ''),
(26, 'floristy_26.png', 27, 'categories', 26, ''),
(27, 'yuveliry_27.png', 28, 'categories', 27, ''),
(28, 'oformlenie-torzhestv--dekoraczii_28.png', 29, 'categories', 28, ''),
(29, 'transport_29.png', 30, 'categories', 29, ''),
(30, 'salon-krasoty--kosmetologii-i-spa_30.png', 31, 'categories', 30, ''),
(31, 'stilisty-i-vizazhisty_31.png', 32, 'categories', 31, ''),
(32, 'napitki_32.png', 33, 'categories', 32, ''),
(33, 'turagentstva--gostiniczy_33.png', 34, 'categories', 33, ''),
(34, 'priglasitelinye--podarki--aksessuary_34.png', 35, 'categories', 34, ''),
(35, 'barmeny--oficzianty--shef-povar_35.png', 36, 'categories', 35, ''),
(36, 'kejtering--shatry_36.png', 37, 'categories', 36, ''),
(37, 'organizacziya-predlozheniya-ruki-i-serdcza_37.png', 38, 'categories', 37, ''),
(38, 'fitnes-czentr_38.png', 39, 'categories', 38, '');

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `price`, `map`, `enabled`, `top`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Array', '', '', '', '', '', '', '', '', 100.00, '', 1, 1, 0, 0, 'club-drive', NULL, '2016-06-17 05:56:57');

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
