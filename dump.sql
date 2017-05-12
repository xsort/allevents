-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 23 2017 г., 19:44
-- Версия сервера: 5.5.53-0+deb8u1-log
-- Версия PHP: 7.0.14-1~dotdeb+8.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `xsort_allevents`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `menu_type_id` tinyint(4) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `top` tinyint(1) NOT NULL,
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `menu_type_id`, `enabled`, `top`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(5, 'Клубы', 'Сluburi', 'Clubs', '<p>Тут вы найдете всю информацию о лучших клубах страны, сможете просмотреть отчеты последних мероприятий и познакомится с интерьером, меню, афишами и акциями клубов !</p>\r\n', '<p>Aici veți găsi toate informațiile despre cele mai tari&nbsp;cluburi din țară, veți vedea rapoarte foto de la cele mai recente evenimente și o să faceți cunoștința cu interiorul, meniul, postere și oferte disponibile a fiecarui club!</p>\r\n', '<p>Here you will find all the information about the best clubs in the country and will be able to view reports of the most recent events and to get acquainted with the interiors, menus, posters and the newest club offers!</p>\r\n', '', '', '', 1, 1, 1, 0, 0, 'kluby', '2016-06-24 21:00:00', '2017-01-18 16:55:26'),
(6, 'Свадьбы', 'Nunți', 'Weddings', '<p>Тут вы познакомитесь с лучшими компаниями в области организации Свадеб ! Рестораны, банкетные залы, декораторы, ведущие, музыканты, свадебные наряды, фотографы, видео-операторы,&nbsp;ювелиры и прочее. Все к вашим услугам онлайн.</p>\r\n', '<p>Aici veți face cunoștință cu cele mai bune companii &icirc;n domeniul organizarii de nunți! Restaurante, sali pentru banchete, decoratori, prezentători, muzicieni, rochii de mireasa,servicii profesionale de videografie-fotografie si altele Tot este diponibil online.</p>\r\n', '<p>Here you will get in touch with the best wedding services! Restaurants, banquet halls, decorators, presenters, musicians, wedding dresses, photographers, video operators, jewelers and more. All at your service online.</p>\r\n', '', '', '', 1, 1, 1, 0, 0, 'svadiby', '2016-12-21 21:00:00', '2017-01-18 18:29:40'),
(7, 'Корпоративы', 'Evenimente corporative', 'Corporate events', '<p>Тут вы найдете список лучших клубов, ресторанов и банкетных залов Страны! Так же вы познакомитесь с лидирующими компаниями в индустрии праздника и развлечений! Ваш корпоратив достоин быть незабываемым.</p>\r\n', '<p>Aici veți găsi o listă cu cele mai bune cluburi, restaurante si sali de banchet din Țară! De asemenea, veți face cunoștință cu liderii din domeniul festivităților și divertisment! Petrecerea corporativă companiei dvs. merită să fie de neuitat.</p>\r\n', '<p>Here you will find a list of the best clubs, restaurants and banquet halls of the Country! Also, you will get in touch with leading companies in the holiday and entertainment service! Your party deserves to be unforgettable.</p>\r\n', '', '', '', 1, 1, 1, 0, 0, 'korporativy', '2016-12-25 21:00:00', '2017-01-18 18:56:51'),
(8, 'Рестораны \\ Кафе', 'Restaurant \\ Cafenea', 'Restaurant \\ Cafe', '<p>Лучшие рестораны, кафе, пабы и бары страны, теперь онлайн! Тут вы сможете просмотреть все предложения, акции,&nbsp;контакты, меню, Ивенты (события), отчеты и интерьер заведений на ваш вкус.</p>\r\n', '<p>Cele mai bune restaurante, cafenele, pub-uri și baruri din țară, acum on-line! Aici puteti vedea toate ofertele, promoții, evenimente, rapoarte foto-video, date de contact, meniuri și interioare a localurilor pe gustul dvs.</p>\r\n', '<p>Best restaurants, cafes, pubs and bars of the country, now is online! Here you will see all the offers, promotions, contacts, menu, events, reports and the interior designs.</p>\r\n', '', '', '', 1, 1, 1, 0, 0, 'restorany-kafe', '2016-12-25 21:00:00', '2017-01-18 19:00:04'),
(9, 'Крестины', 'Botezuri', 'Christening', '<p>Таинство Крещения ! Тут вы найдете список Церквей и Монастырей, так же познакомитесь с компаниями которые помогут организовать вам одно из самых важных событий в жизни вашего ребенка онлайн.</p>\r\n', '<p>Taina Botezului ! Aici veți găsi o listă de Biserici, Mănăstiri, precum și companiile care vă vor ajuta să vă organizați unul dintre cele mai importante evenimente din viața copilului&nbsp;dvs.</p>\r\n', '<p>Sacrament of Christening ! Here you will find a list of churches and monasteries, and get in touch with people that will help you organize one of the most important events in your child&#39;s life.Online</p>\r\n', '', '', '', 0, 1, 1, 0, 0, 'krestiny', '2016-06-09 21:00:00', '2017-01-18 19:34:28'),
(10, 'Выпускной', 'Absolvire', 'High school graduation', '<p>ВЫПУСКНОЙ !!! Пора начинать новую жизнь! Наш сайт поможет организовать вам самый незабываемый день в вашей жизни, онлайн ! Лучшие клубы, рестораны и компании в индустрии праздника развлечений к вашим услугам !</p>\r\n', '<p>Balul de absolvire !!! E timpul pentru a &icirc;ncepe o viață nouă! Site-ul nostru va ajuta să vă organizați cea mai memorabilă zi din viata ta, on-line! Cele mai tari cluburi, restaurante si companii de divertisment din industria de festivități la dispoziția dumneavoastră!</p>\r\n', '<p>It&#39;s time to start a new life! Our site will help you organize the most memorable day of your life , online! The best clubs, restaurants and companies in the holiday and entertainment industry at your service!</p>\r\n', '', '', '', 0, 1, 1, 0, 0, 'vypusknoj', '2016-06-09 21:00:00', '2017-01-19 06:05:57'),
(11, 'День рождения', 'Zi de naștere', 'Birthday', '<p>Не знаете где и как отпраздновать&nbsp;день рождение?&nbsp;Мы поможем вам в&nbsp;организации праздника. У нас вы найдете все необходимые услуги, нужные для проведения дня рождения.</p>\r\n', '<p>Tu nu știi unde și cum pentru a sărbători ziua de nastere? Vă vom ajuta să vă organizați evenimentul. Aici veti gasi toate serviciile necesare necesare pentru a efectua aniversari.</p>\r\n', '<p>You do not know where and how to celebrate a birthday? We will help you organize the event. Here you will find all the necessary services needed to conduct birthdays.</p>\r\n', '', '', '', 0, 1, 1, 0, 0, 'deni-rojdenia', '2016-06-16 21:00:00', '2017-01-11 17:06:21'),
(12, 'Детские праздники', 'Petrecerile copiilor', 'Children holidays', '<p>Организация&nbsp;проведения&nbsp;детских праздников.&nbsp;Мы поможем организовать незабываемый&nbsp;праздник&nbsp;для Вашего ребенка. Большой выбор программ, конкурсов и аниматоров.</p>\r\n', '<p>Organizare de festivitati pentru copii. Vă vom ajuta să vă organizați o vacanță de neuitat pentru copilul tau. O gamă largă de programe, concursuri și divertisment.</p>\r\n', '<p>Organization of children&#39;s holiday. We will help you organize an unforgettable holiday for your child. A wide range of programs, competitions and entertainment.</p>\r\n', '', '', '', 0, 1, 1, 0, 0, 'detskie-prazdniki', '2016-06-16 21:00:00', '2017-01-11 17:35:25'),
(13, 'Афиша', 'Poster', 'Poster', '<p>Тут Вы найдете информацию о самых крутых мероприятиях нашей страны !</p>\r\n', '<p>Aici puteți găsi informații despre cele mai tari evenimente din țară.</p>\r\n', '<p>Here you will find information about the coolest events of our country!</p>\r\n', '', '', '', 0, 1, 1, 0, 0, 'afisha', '2016-06-20 21:00:00', '2016-11-29 19:39:53'),
(14, 'Event менеджер \\ Организатор', 'Event Manager \\ Organizator', 'Event Manager \\ Organizer', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'event-menedzher-organizator', '2016-06-20 21:00:00', '2017-01-06 06:08:12'),
(15, 'ЗАГСы \\ Церкви', 'Saloane de Înregistrare \\ Bisericii', 'Registry offices \\ Church', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'zagsy-czerkvi', '2016-06-20 21:00:00', '2017-01-06 06:08:43'),
(16, 'Свадебная обувь и аксессуары', 'Pantofi de nunta si accesorii', 'Wedding shoes and accessories', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'svadebnaya-obuvi-i-aksessuary', '2016-06-20 21:00:00', '2017-01-06 06:09:08'),
(17, 'Свадебные и вечерние платья', 'Nunta si rochii de seara', 'Wedding & Evening Dresses', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'svadebnye-i-vechernie-platiya', '2016-06-20 21:00:00', '2017-01-12 10:12:26'),
(18, 'Мужские костюмы', 'Costume pentru bărbați', 'Men\'s suits', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'muzhskie-kostyumy', '2016-06-20 21:00:00', '2017-01-06 06:12:07'),
(19, 'Свадебный танец', 'Dans de nunta', 'A wedding dance', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'svadebnyj-tanecz', '2016-06-20 21:00:00', '2017-01-06 06:11:37'),
(20, 'Фото \\ Видео', 'Fotografie \\ Video', 'Photo \\ Video', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'foto-video', '2016-06-20 21:00:00', '2017-01-06 06:11:10'),
(21, 'Рестораны \\ Банкетные залы \\ Открытые площадки', 'Restaurante \\ Facilități pentru banchete \\ Zone deschise', 'Restaurants \\ Banquet Facilities \\ Open areas', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'restorany-banketnye-zaly-otkrytye-ploshhadki', '2016-06-20 21:00:00', '2017-01-06 06:10:43'),
(22, 'Торты \\ Калачи \\ Вкусняшки', 'Torturi \\ Kalachi \\ Gustări', 'Cakes \\ Kalachi \\ Snacks', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'torty-kalachi-vkusnyashki', '2016-06-20 21:00:00', '2017-01-06 06:10:07'),
(23, 'Ведущий \\ Тамада', 'Conducător \\ Tamada', 'Leading \\ Tamada', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'vedushhij-tamada', '2016-06-20 21:00:00', '2017-01-06 06:09:37'),
(24, 'Dj \\ Артисты \\ Шоу программа', 'Dj \\ Artisti \\ Program Afișare', 'Dj \\ Artists \\ Show program', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'dj-artisty-shou-programma', '2016-06-21 05:22:41', '2016-06-21 06:46:48'),
(25, 'Световое \\ Звуковое оборудование', 'Lumina \\ Audio echipament', 'Light \\ Audio Equipment', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'svetovoe-zvukovoe-oborudovanie', '2016-06-20 21:00:00', '2017-01-12 10:18:28'),
(26, 'Фейерверки', 'Focuri de artificii', 'Fireworks', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'fejerverki', '2016-06-21 05:24:50', '2016-06-21 06:47:55'),
(27, 'Флористы', 'Florari', 'Florists', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'floristy', '2016-06-20 21:00:00', '2017-01-12 10:13:09'),
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
(39, 'Фитнес центр', 'Centru de fitness', 'Fitness center', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'fitnes-czentr', '2016-06-21 05:34:12', '2016-06-21 06:55:07'),
(40, 'Отели', 'Hoteluri', 'Hotels', '', '', '', '', '', '', 0, 1, 0, 0, 0, 'hotels', '2016-11-22 21:00:00', '2016-12-12 09:41:24');

-- --------------------------------------------------------

--
-- Структура таблицы `categories_xref`
--

CREATE TABLE `categories_xref` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `categories_xref`
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
(113, 0, 8),
(114, 9, 22),
(115, 6, 40),
(116, 7, 40),
(117, 11, 40);

-- --------------------------------------------------------

--
-- Структура таблицы `constants`
--

CREATE TABLE `constants` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `name_ro`, `name_en`, `sort`) VALUES
(1, 'Телефон', 'Telefon', 'Phone', 0),
(2, 'E-mail', 'E-mail', 'E-mail', 0),
(3, 'Адрес', 'Adresa', 'Address', 0),
(4, 'График', 'Program de lucru', 'Program', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE `content` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `views` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `name`, `name_en`, `name_ro`, `description`, `description_en`, `description_ro`, `enabled`, `views`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'All Events это многофункциональный проект', 'All Events is a multifunctional project', 'All Events este un proiect multifuncțional ', '<p><strong>Allevents.md-</strong>&nbsp;это многофункциональный проект, который расскажет Вам о самых значимых Ивентах ( событиях ) нашей страны, и познакомит Вас с лучшими компаниями в индустрии праздника и развлечений !</p>\r\n\r\n<p>С помощью нашего сайта Вы легко организуете свой Досуг, День Рождения, Корпоратив, Крестины Вашего Ребёнка и Даже Свадьбу &nbsp;онлайн, мы сделали все возможное для того чтобы облегчить Вам эту задачу и сэкономить Ваше время. Вы сможете просмотреть необходимые Вам категории услуг, найти желаемых артистов и компании, познакомится с их работами и напрямую связаться с ними без посредников.</p>\r\n\r\n<p>Если Вы хотите организовать свой праздник самостоятельно, то на нашем сайте Вы с легкостью найдете всё необходимое для вашего Ивента ( события ) !</p>\r\n\r\n<p>Мы познакомим Вас с лучшими ресторанами и клубами страны, музыкантами, ведущими, декораторами, флористами, салонами красоты, ювелирами, стилистами, модельерами, фотографами и видео-операторами&hellip;&hellip;этот список можно продолжать бесконечно.</p>\r\n\r\n<p>Так же Вы сможете отслеживать последние новости в сфере развлечений и самые модные тренды в организации Ивентов ( событий ) !</p>\r\n', '<p>Здесь будет описание о сайте Allevents</p>\r\n', 'инфа allevents\r\n', 1, 0, 'about', '2016-06-26 21:00:00', '2017-01-11 17:44:02'),
(4, 'Отчеты', '', '', '<p>Здесь будут отчеты</p>\r\n', '<p>Здесь будут отчеты</p>\r\n', '<p>Здесь будут отчеты</p>\r\n', 1, 0, 'reports', '2016-06-26 09:59:26', '2016-06-26 09:59:26'),
(5, 'Акции', '', '', '<p>Здесь будут акции</p>\r\n', '<p>Здесь будут акции</p>\r\n', '<p>Здесь будут акции</p>\r\n', 1, 0, 'promo', '2016-06-26 10:00:07', '2016-06-26 10:00:07'),
(6, 'Эксклюзив', 'Эксклюзив', 'Эксклюзив', '<p>Здесь будет выводиться эксклюзив</p>\r\n', '<p>Здесь будет выводиться экслюзив</p>\r\n', '<p>Здесь будет выводиться экслюзив</p>\r\n', 1, 0, 'exclusive', '2016-06-25 21:00:00', '2016-12-12 09:35:31'),
(7, 'Контакты', 'Контакты', 'Контакты', '<p>Здесь будет информация наши&nbsp;контакты</p>\r\n', '<p>Здесь будет информация наши&nbsp;контакты</p>\r\n', '<p>Здесь будет информация наши&nbsp;контакты</p>\r\n', 1, 0, 'contacts', '2016-06-26 10:04:29', '2016-06-26 10:04:29'),
(8, 'Реклама', 'Реклама', 'Реклама', '<p>Сдесь будет реклама</p>\r\n', '<p>Сдесь будет реклама</p>\r\n', '<p>Сдесь будет реклама</p>\r\n', 1, 0, 'advert', '2016-06-26 10:04:56', '2016-06-26 10:04:56'),
(9, 'Права', 'Права', 'Права', '<p>Все права защищены. Использовании материала сайта www.allevents.md невозможна без письменного разрешения администрации сайта.</p>\r\n\r\n<p>При использовании нашего текстового, фото и видео материала, ссылка на наш сайт www.allevents.md обязательна. Администрация сайта не несет ответственность за достоверность информации рекламных объявлений и мероприятий, предоставленных организаторами и владельцами компаний, рекламирующих свои услуги на нашем сайте.</p>\r\n', '<p>здесь будут права</p>\r\n', '<p>здесь будут права</p>\r\n', 1, 0, 'copyright', '2016-06-25 21:00:00', '2017-01-13 09:48:56');

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `enabled`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Галерея 1', 'Галерея 1', 'Галерея 1', '', '', '', '', '', '', 1, 0, 0, 'galereya', '2016-07-21 21:00:00', '2016-07-22 04:12:58'),
(2, 'Фотогаллерея', 'Foto', '', '', '', '', '', '', '', 1, 0, 0, 'fotogallereya', '2016-08-16 21:00:00', '2016-08-17 04:10:13'),
(3, '123', '123', '', '<p>123</p>\r\n', '', '', '', '', '', 1, 0, 0, '123', '2016-08-16 21:00:00', '2016-08-17 04:11:11'),
(4, '123', '123', '123', '<p>123</p>\r\n', '', '', '', '', '', 1, 0, 0, '123', '2016-08-16 21:00:00', '2016-08-17 04:11:11'),
(5, 'ss', 'sss', '', '', '', '', '', '', '', 1, 0, 0, 'ss', '2016-08-21 21:00:00', '2016-08-22 07:35:10'),
(6, 'dsd', 'dsds', 'dsada', '<p>dsad</p>\r\n', '<p>dasdas</p>\r\n', '<p>dasdas</p>\r\n', '', '', '', 1, 19, 0, 'dsd', '2016-08-21 21:00:00', '0000-00-00 00:00:00'),
(7, 'Weekend', 'Weekend', 'Weekend', '<p>Krysha добавил(-а) 68 новых фото от 22 июля в альбом &laquo;22-23 Weekend&raquo; &mdash; с Victoria Popa-Condrea и еще 4 в Krysha.</p>\r\n', '<p>Krysha добавил(-а) 68 новых фото от 22 июля в альбом &laquo;22-23 Weekend&raquo; &mdash; с Victoria Popa-Condrea и еще 4 в Krysha.</p>\r\n', '<p>Krysha добавил(-а) 68 новых фото от 22 июля в альбом &laquo;22-23 Weekend&raquo; &mdash; с Victoria Popa-Condrea и еще 4 в Krysha.</p>\r\n', '', '', '', 1, 39, 0, 'weekend', '2016-08-25 21:00:00', '0000-00-00 00:00:00'),
(8, 'Penthouse 21.10', 'Penthouse 21.10', 'Penthouse 21.10', '', '', '', '', '', '', 1, 47, 0, 'penthouse-2110', '2016-10-20 21:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `galleries_xref`
--

CREATE TABLE `galleries_xref` (
  `id` int(10) UNSIGNED NOT NULL,
  `galleries_id` int(10) UNSIGNED NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `galleries_xref`
--

INSERT INTO `galleries_xref` (`id`, `galleries_id`, `table_id`, `table`) VALUES
(1, 6, 8, 'products'),
(2, 7, 8, 'products'),
(3, 8, 28, 'products');

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `blank` tinyint(1) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `name`, `name_ro`, `name_en`, `description_short`, `description_short_ro`, `description_short_en`, `link`, `blank`, `product_id`) VALUES
(1, 'Фото', 'Foto', 'Photo', '', '', '', 'photo', 0, 0),
(2, 'Видео', 'Video', 'Video', '', '', '', 'video', 0, 0),
(3, 'План зала', 'План зала', 'План зала', '', '', '', 'plan', 0, 0),
(4, 'Меню', 'Menu', 'Menu', '', '', '', 'shop', 0, 0),
(5, 'Акции', 'Promo', 'Promo', '', '', '', 'promo', 0, 0),
(6, 'Интерьер', 'Interior', 'Interier', '', '', '', 'interier', 0, 0),
(8, 'Продукция', 'Marfuri', 'Products', '', '', '', 'shop', 0, 0),
(9, 'Резервирование', 'Rezervare', 'Reservation', '', '', '', 'reservation', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `menu_categories`
--

CREATE TABLE `menu_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` tinyint(4) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `menu_categories`
--

INSERT INTO `menu_categories` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `parent_id`, `enabled`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Холодные закуски', 'Gustări reci', 'Cold snacks', '', '', '', '', '', '', 0, 1, 0, 0, 'xolodnye-zakuski', '2016-07-22 21:00:00', '2016-11-15 06:39:27'),
(2, 'Горячие закуски', 'Gustări calde', 'Hot appetizers', '', '', '', '', '', '', 0, 1, 0, 0, 'goryachie-zakuski', '2016-07-22 21:00:00', '2016-11-15 06:40:35'),
(3, 'Салаты', 'Salate', 'Salads', '<p>Закуска</p>\r\n', '<p>Закуска</p>\r\n', '<p>Закуска</p>\r\n', '', '', '', 0, 1, 0, 0, 'salaty', '2016-08-24 21:00:00', '2016-12-22 06:00:39'),
(4, 'Супы', 'Supe', 'Soups', '', '', '', '', '', '', 0, 1, 0, 0, 'supy', '2016-10-23 21:00:00', '2016-11-15 06:42:00'),
(5, 'Вторые Блюда', 'Felul doi', 'Main dishes', '', '', '', '', '', '', 0, 1, 0, 0, 'vtorye-blyuda', '2016-10-27 21:00:00', '2016-11-15 06:43:52'),
(6, 'Мясные блюда', 'Bucate din carne', 'Meat dishes', '', '', '', '', '', '', 0, 1, 0, 0, 'measnye-blyuda', '2016-11-14 21:00:00', '2016-11-15 06:45:35'),
(7, 'Рыбные блюда', 'Bucate din pește', 'Fish dishes', '', '', '', '', '', '', 0, 1, 0, 0, 'rybnye-blyuda', '2016-11-14 21:00:00', '2016-11-15 06:46:37'),
(8, 'Паста', 'Paste', 'Pasta', '', '', '', '', '', '', 0, 1, 0, 0, 'pasta', '2016-11-14 21:00:00', '2016-11-15 06:47:35'),
(9, 'Пицца', 'Pizza', 'Pizza', '', '', '', '', '', '', 0, 1, 0, 0, 'pizza', '2016-11-14 21:00:00', '2016-11-15 06:48:20'),
(10, 'Бургеры', 'Burgher', 'Burger', '', '', '', '', '', '', 0, 1, 0, 0, 'burger', '2016-11-14 21:00:00', '2016-11-15 06:48:59'),
(11, 'Закуски', 'Gustări', 'Snacks', '', '', '', '', '', '', 0, 1, 0, 0, 'zakuski', '2016-11-14 21:00:00', '2016-11-15 06:52:09'),
(12, 'Закуски к вину', 'Gustări la vin', 'Snacks for wine', '', '', '', '', '', '', 0, 1, 0, 0, 'zakuski-k-vinu', '2016-11-14 21:00:00', '2016-11-15 06:53:15'),
(13, 'Закуски к водке', 'Gustări la vodka ', 'Snacks for vodka', '', '', '', '', '', '', 0, 1, 0, 0, 'zakuski-k-vodke', '2016-11-14 21:00:00', '2016-11-15 06:54:03'),
(14, 'Закуски к пиву', 'Gustări la bere', 'Snacks for beer ', '', '', '', '', '', '', 0, 1, 0, 0, 'zakuski-k-pivu', '2016-11-14 21:00:00', '2016-11-15 06:54:40'),
(15, 'Десерт', 'Desert', 'Dessert', '', '', '', '', '', '', 0, 1, 0, 0, 'desert', '2016-11-14 21:00:00', '2016-11-15 07:04:53'),
(16, 'Гарниры', 'Garnituri', 'Side dish', '', '', '', '', '', '', 0, 1, 0, 0, 'garniry', '2016-11-14 21:00:00', '2016-11-15 07:05:52'),
(17, 'Завтраки', 'Mic Dejun', 'Breakfast', '', '', '', '', '', '', 0, 1, 0, 0, 'zavtraki', '2016-11-28 21:00:00', '2016-11-29 18:56:15');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_products`
--

CREATE TABLE `menu_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` double(15,2) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `top` int(1) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `menu_products`
--

INSERT INTO `menu_products` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `category_id`, `product_id`, `price`, `enabled`, `views`, `sort`, `top`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'вцувцуцу', 'вцувцув', 'цувцу', '<p>вувц</p>\r\n', '<p>вцувцувцу</p>\r\n', '<p>вцувцувцу</p>\r\n', '', '', '', 1, 7, 420.00, 1, 0, 0, 0, '', '2016-07-22 21:00:00', '2016-07-23 06:58:15'),
(2, 'вцувцуцу', 'вцувцув', 'цувцу', '<p>вувц</p>\r\n', '<p>вцувцувцу</p>\r\n', '<p>вцувцувцу</p>\r\n', '', '', '', 1, 1, 0.00, 1, 0, 0, 0, '', '2016-07-22 21:00:00', '2016-07-23 06:49:27'),
(3, 'лапша 2', '', '', '', '', '', '', '', '', 2, 7, 500.00, 1, 0, 0, 0, '', '2016-07-22 21:00:00', '2016-07-23 06:58:34'),
(4, 'dasdas', 'dsad', 'dsada', '<p>sada</p>\r\n', '<p>dsad</p>\r\n', '<p>dasd</p>\r\n', '', '', '', 2, 8, 122.00, 1, 0, 0, 0, '', '2016-08-21 21:00:00', '2016-08-22 07:53:37'),
(5, 'Суп 1', '', '', '<p>выфвыфвфы</p>\r\n', '', '', '', '', '', 2, 13, 100.00, 1, 0, 0, 1, '', '2016-10-23 21:00:00', '2016-10-24 05:46:13'),
(6, 'Закуска 1', '', '', '<p>выффывфы</p>\r\n', '', '', '', '', '', 3, 13, 200.00, 1, 0, 0, 1, '', '2016-10-23 21:00:00', '2016-10-24 05:50:58'),
(7, 'Яйца Бенедикт ', 'Ouă Benedict ', 'Eggs Benedict', '<p>яйца пашот под голландским соусом, жареный бекон, вяленые помидоры, сыр,&nbsp; поджаренные булочки со сливочным маслом &ndash; 150 g</p>\r\n', '<p>ouă fierte cu sos olandez, becon prăjit,roșii uscate,cașcaval,chifle cu unt - 150g</p>\r\n', '<p>poached eggs over bacon, sun dried tomatoes, cheese, hot buttered toasted bun ,topped with warm Hollandaise sauce - 150 g</p>\r\n', '', '', '', 17, 28, 81.00, 1, 0, 0, 1, '', '2016-11-28 21:00:00', '2016-12-09 10:53:41'),
(8, 'Английский завтрак ', 'Mic dejun englezesc ', 'English  Breakfast ', '<p>два вареных яйца, две молочные сосиски, сыр, джем, белые тосты, сливочное масло - 250 g</p>\r\n', '<p>două ouă fierte,două crenvurști,cașcaval,gem,toast,unt - 250 g</p>\r\n', '<p>two boiled eggs , two sausages ,cheese, white toast, jam, butter - 250 g</p>\r\n', '', '', '', 17, 28, 80.00, 1, 0, 0, 1, '', '2016-11-28 21:00:00', '2016-11-29 19:14:38'),
(9, 'Роллы из блинов с малосольной семгой', 'Rulou din clătite-cu somon slab sărat', 'Thin Pancake Rolls', '<p><em>Роллы из блинов с малосольной семгой</em>, сыром Буко, листом салата и красной икрой - 150 g</p>\r\n', '<p>Rulou din clătite-cu somon slab sărat ,br&icirc;nza Buko,frunze de salată,și icre roșii - 150g</p>\r\n', '<p><strong>Thin Pancake Rolls</strong>-filled with light salted salmon, buco cream cheese and salad leaves, topped with red caviar - 150g</p>\r\n', '', '', '', 1, 28, 120.00, 1, 0, 0, 1, '', '2016-11-28 21:00:00', '2016-11-29 19:18:53');

-- --------------------------------------------------------

--
-- Структура таблицы `meta`
--

CREATE TABLE `meta` (
  `id` int(10) UNSIGNED NOT NULL,
  `meta_description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description_ro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords_ro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_ro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `meta`
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
(35, '', '', '', '', '', '', '', '', '', 39, 'categories'),
(36, '123', '', '', '245', '', '', '', '', '', 1, 'products'),
(37, '', '', '', '', '', '', '', '', '', 2, 'products'),
(38, '', '', '', '', '', '', '', '', '', 3, 'products'),
(39, '', '', '', '', '', '', '', '', '', 4, 'products'),
(40, '', '', '', '', '', '', '', '', '', 5, 'products'),
(41, '', '', '', '', '', '', '', '', '', 6, 'products'),
(42, '', '', '', '', '', '', '', '', '', 7, 'products'),
(43, '', '', '', '', '', '', '', '', '', 8, 'products'),
(44, '', '', '', '', '', '', '', '', '', 9, 'products'),
(45, '', '', '', '', '', '', '', '', '', 10, 'products'),
(46, '', '', '', '', '', '', '', '', '', 11, 'products'),
(47, '', '', '', '', '', '', '', '', '', 12, 'products'),
(48, '', '', '', '', '', '', '', '', '', 13, 'products'),
(49, '', '', '', '', '', '', '', '', '', 14, 'products'),
(50, '', '', '', '', '', '', '', '', '', 15, 'products'),
(51, '', '', '', '', '', '', '', '', '', 16, 'products'),
(52, '', '', '', '', '', '', '', '', '', 17, 'products'),
(53, '', '', '', '', '', '', '', '', '', 18, 'products'),
(54, '123', '123', '789', '456', '456', '346', '890', '678', '789', 1, 'news'),
(55, '', '', '', '', '', '', '', '', '', 2, 'news'),
(56, '', '', '', '', '', '', '', '', '', 3, 'news'),
(57, '', '', '', '', '', '', '', '', '', 4, 'news'),
(58, '', '', '', '', '', '', '', '', '', 5, 'news'),
(59, '', '', '', '', '', '', '', '', '', 6, 'news'),
(60, '', '', '', '', '', '', '', '', '', 7, 'news'),
(61, '', '', '', '', '', '', '', '', '', 2, 'content'),
(62, 'Allevets.md- сервис, который поможет вам создать наилучшее мероприятие.', '', '', 'allevents, мероприятия, ведущий, Dj, фото, видео,декоратор, флорист, лайв бэнд, звук, свет, оборудование, мужской костюм, свадебное платье, ресторан, клуб, караоке, кафе, меню, ', '', '', 'Allevets.md', '', '234', 3, 'content'),
(63, '', '', '', '', '', '', '', '', '', 4, 'content'),
(64, '', '', '', '', '', '', '', '', '', 5, 'content'),
(65, '', '', '', '', '', '', '', '', '', 6, 'content'),
(66, '', '', '', '', '', '', '', '', '', 7, 'content'),
(67, '', '', '', '', '', '', '', '', '', 8, 'content'),
(68, '', '', '', '', '', '', '', '', '', 9, 'content'),
(69, '', '', '', '', '', '', '', '', '', 10, 'content'),
(70, '', '', '', '', '', '', '', '', '', 19, 'products'),
(71, '', '', '', '', '', '', '', '', '', 20, 'products'),
(72, '', '', '', '', '', '', '', '', '', 21, 'products'),
(73, 'ввв', '', '', 'вввв', '', '', 'вввв', '', '', 1, 'galleries'),
(74, '', '', '', '', '', '', '', '', '', 1, 'videos'),
(75, 'g', '545', '3453', 'g', '4534', '534', 'g', '5435', '534', 1, 'menu_categories'),
(76, '', '', '', '', '', '', '', '', '', 2, 'menu_categories'),
(77, 'вцувцу', '', '', 'вцувцу', '', '', 'вцувцу', '', '', 1, 'menu_products'),
(78, 'вцувцу', '', '', 'вцувцу', '', '', 'вцувцу', '', '', 2, 'menu_products'),
(79, '', '', '', '', '', '', '', '', '', 3, 'menu_products'),
(80, '', '', '', '', '', '', '', '', '', 2, 'videos'),
(81, '', '', '', '', '', '', '', '', '', 2, 'galleries'),
(82, '', '', '', '', '', '', '', '', '', 3, 'galleries'),
(83, '', '', '', '', '', '', '', '', '', 4, 'galleries'),
(84, '', '', '', '', '', '', '', '', '', 5, 'galleries'),
(85, '', '', '', '', '', '', '', '', '', 3, 'videos'),
(86, '1', '1', '1', '2', '2', '2', '3', '3', '3', 4, 'videos'),
(87, '', '', '', '', '', '', '', '', '', 6, 'galleries'),
(88, '', '', '', '', '', '', '', '', '', 8, 'news'),
(89, '', '', '', '', '', '', '', '', '', 4, 'menu_products'),
(90, '', '', '', '', '', '', '', '', '', 5, 'videos'),
(91, '', '', '', '', '', '', '', '', '', 6, 'videos'),
(92, '', '', '', '', '', '', '', '', '', 7, 'videos'),
(93, '', '', '', '', '', '', '', '', '', 8, 'videos'),
(94, '', '', '', '', '', '', '', '', '', 9, 'videos'),
(95, '', '', '', '', '', '', '', '', '', 3, 'menu_categories'),
(96, '', '', '', '', '', '', '', '', '', 9, 'news'),
(97, 'das', 'das', 'das', 'das', 'd', 'd', 'das', 'asd', 'asd', 10, 'news'),
(98, '1', '1', '1', '2', '2', '2', '2', '3', '3', 7, 'galleries'),
(99, '', '', '', '', '', '', '', '', '', 22, 'products'),
(100, '', '', '', '', '', '', '', '', '', 23, 'products'),
(101, '', '', '', '', '', '', '', '', '', 24, 'products'),
(102, '', '', '', '', '', '', '', '', '', 25, 'products'),
(103, '', '', '', '', '', '', '', '', '', 26, 'products'),
(104, '', '', '', '', '', '', '', '', '', 27, 'products'),
(105, '', '', '', '', '', '', '', '', '', 28, 'products'),
(106, '', '', '', '', '', '', '', '', '', 29, 'products'),
(107, '', '', '', '', '', '', '', '', '', 30, 'products'),
(108, '', '', '', '', '', '', '', '', '', 31, 'products'),
(109, '', '', '', '', '', '', '', '', '', 32, 'products'),
(110, '', '', '', '', '', '', '', '', '', 33, 'products'),
(111, '', '', '', '', '', '', '', '', '', 5, 'menu_products'),
(112, '', '', '', '', '', '', '', '', '', 6, 'menu_products'),
(113, '', '', '', '', '', '', '', '', '', 4, 'menu_categories'),
(114, '', '', '', '', '', '', '', '', '', 34, 'products'),
(115, '', '', '', '', '', '', '', '', '', 35, 'products'),
(116, '', '', '', '', '', '', '', '', '', 36, 'products'),
(117, '', '', '', '', '', '', '', '', '', 37, 'products'),
(118, '', '', '', '', '', '', '', '', '', 5, 'menu_categories'),
(119, '', '', '', '', '', '', '', '', '', 11, 'news'),
(120, '', '', '', '', '', '', '', '', '', 38, 'products'),
(121, '', '', '', '', '', '', '', '', '', 39, 'products'),
(122, '', '', '', '', '', '', '', '', '', 8, 'galleries'),
(123, '', '', '', '', '', '', '', '', '', 40, 'products'),
(124, '', '', '', '', '', '', '', '', '', 6, 'menu_categories'),
(125, '', '', '', '', '', '', '', '', '', 7, 'menu_categories'),
(126, '', '', '', '', '', '', '', '', '', 8, 'menu_categories'),
(127, '', '', '', '', '', '', '', '', '', 9, 'menu_categories'),
(128, '', '', '', '', '', '', '', '', '', 10, 'menu_categories'),
(129, '', '', '', '', '', '', '', '', '', 11, 'menu_categories'),
(130, '', '', '', '', '', '', '', '', '', 12, 'menu_categories'),
(131, '', '', '', '', '', '', '', '', '', 13, 'menu_categories'),
(132, '', '', '', '', '', '', '', '', '', 14, 'menu_categories'),
(133, '', '', '', '', '', '', '', '', '', 15, 'menu_categories'),
(134, '', '', '', '', '', '', '', '', '', 16, 'menu_categories'),
(135, '', '', '', '', '', '', '', '', '', 40, 'categories'),
(136, '', '', '', '', '', '', '', '', '', 41, 'products'),
(137, 'Качественный отдых в центре столицы. ул. Триколорулуй 34 Кишинёв', 'local comfortabil in inima orasului. str Tricolorului 34 Chișinău ', 'Entertainment in the city center. str. Tricolorului 34 Chisinau', 'ресторан кафе танцевальный ночной клуб азиатская кухня ', 'cafe club de noapte restaurant asiatic Chisinau', 'Cafe night club asian cusine restaurant chisinau ', 'COCOS Prive.  Кафе. Танцевальный ночной клуб. Ресторан азиатской кухни.', 'COCOS Prive. Cafe. Club de noapte. Restaurant cu specific asiatic.', 'COCOS Prive.  Cafe. Night club. Asian cuisine Restaurant.', 42, 'products'),
(138, '', '', '', '', '', '', '', '', '', 17, 'menu_categories'),
(139, '', '', '', '', '', '', '', '', '', 7, 'menu_products'),
(140, '', '', '', '', '', '', '', '', '', 8, 'menu_products'),
(141, '', '', '', '', '', '', '', '', '', 9, 'menu_products'),
(142, '', '', '', '', '', '', '', '', '', 43, 'products'),
(143, '', '', '', '', '', '', '', '', '', 44, 'products'),
(144, '', '', '', '', '', '', '', '', '', 45, 'products'),
(145, '', '', '', '', '', '', '', '', '', 46, 'products'),
(146, '', '', '', '', '', '', '', '', '', 47, 'products'),
(147, '', '', '', '', '', '', '', '', '', 48, 'products'),
(148, '', '', '', '', '', '', '', '', '', 49, 'products'),
(149, '', '', '', '', '', '', '', '', '', 50, 'products'),
(150, '', '', '', '', '', '', '', '', '', 51, 'products'),
(151, '', '', '', '', '', '', '', '', '', 52, 'products'),
(152, '', '', '', '', '', '', '', '', '', 53, 'products'),
(153, '', '', '', '', '', '', '', '', '', 54, 'products'),
(154, '', '', '', '', '', '', '', '', '', 55, 'products'),
(155, '', '', '', '', '', '', '', '', '', 56, 'products'),
(156, '', '', '', '', '', '', '', '', '', 57, 'products'),
(157, '', '', '', '', '', '', '', '', '', 58, 'products'),
(158, '', '', '', '', '', '', '', '', '', 59, 'products'),
(159, '', '', '', '', '', '', '', '', '', 60, 'products'),
(160, '', '', '', '', '', '', '', '', '', 61, 'products'),
(161, '', '', '', '', '', '', '', '', '', 62, 'products'),
(162, '', '', '', '', '', '', '', '', '', 63, 'products'),
(163, '', '', '', '', '', '', '', '', '', 64, 'products'),
(164, '', '', '', '', '', '', '', '', '', 65, 'products'),
(165, '', '', '', '', '', '', '', '', '', 66, 'products'),
(166, '', '', '', '', '', '', '', '', '', 67, 'products'),
(167, '', '', '', '', '', '', '', '', '', 68, 'products'),
(168, '', '', '', '', '', '', '', '', '', 69, 'products'),
(169, '', '', '', '', '', '', '', '', '', 70, 'products'),
(170, '', '', '', '', '', '', '', '', '', 71, 'products'),
(171, '', '', '', '', '', '', '', '', '', 72, 'products'),
(172, '', '', '', '', '', '', '', '', '', 73, 'products'),
(173, '', '', '', '', '', '', '', '', '', 74, 'products'),
(174, '', '', '', '', '', '', '', '', '', 75, 'products'),
(175, '', '', '', '', '', '', '', '', '', 76, 'products'),
(176, '', '', '', '', '', '', '', '', '', 77, 'products'),
(177, '', '', '', '', '', '', '', '', '', 78, 'products'),
(178, '', '', '', '', '', '', '', '', '', 79, 'products'),
(179, '', '', '', '', '', '', '', '', '', 80, 'products'),
(180, '', '', '', '', '', '', '', '', '', 81, 'products'),
(181, '', '', '', '', '', '', '', '', '', 82, 'products'),
(182, '', '', '', '', '', '', '', '', '', 83, 'products'),
(183, '', '', '', '', '', '', '', '', '', 84, 'products'),
(184, '', '', '', '', '', '', '', '', '', 85, 'products'),
(185, '\"Live Beat\" — это крепкое содружество профессиональных музыкантов, прекрасно дополняющих друг друга и объединенных желанием всегда расти и прогрессировать. Коллектив сформировался в 2010 году. ', '', '', 'Live Beat Cover Band', '', '', '\"Live Beat\" — это крепкое содружество профессиональных музыкантов, прекрасно дополняющих друг друга и объединенных желанием всегда расти и прогрессировать. Коллектив сформировался в 2010 году. ', '', '', 86, 'products'),
(186, '', '', '', '', '', '', '', '', '', 12, 'news'),
(187, '', '', '', '', '', '', '', '', '', 13, 'news'),
(188, '', '', '', '', '', '', '', '', '', 14, 'news'),
(189, '', '', '', '', '', '', '', '', '', 15, 'news'),
(190, '', '', '', '', '', '', '', '', '', 16, 'news'),
(191, '', '', '', '', '', '', '', '', '', 17, 'news'),
(192, '', '', '', '', '', '', '', '', '', 18, 'news'),
(193, '', '', '', '', '', '', '', '', '', 19, 'news'),
(194, '', '', '', '', '', '', '', '', '', 20, 'news'),
(195, '', '', '', '', '', '', '', '', '', 21, 'news'),
(196, '', '', '', '', '', '', '', '', '', 22, 'news'),
(197, '', '', '', '', '', '', '', '', '', 23, 'news'),
(198, '', '', '', '', '', '', '', '', '', 24, 'news');

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
('2016_05_25_122425_menu_categories', 1),
('2016_06_23_074721_products_categories', 2),
('2016_07_23_062337_create_videos_xref', 3),
('2016_07_29_073204_create_contacts', 4),
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
('2016_05_25_122425_menu_categories', 1),
('2016_06_23_074721_products_categories', 2),
('2016_07_23_062337_create_videos_xref', 3),
('2016_07_29_073204_create_contacts', 4),
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
('2016_05_25_122425_menu_categories', 1),
('2016_06_23_074721_products_categories', 2),
('2016_07_23_062337_create_videos_xref', 3),
('2016_07_29_073204_create_contacts', 4),
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
('2016_05_25_122425_menu_categories', 1),
('2016_06_23_074721_products_categories', 2),
('2016_07_23_062337_create_videos_xref', 3),
('2016_07_29_073204_create_contacts', 4),
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
('2016_05_25_122425_menu_categories', 1),
('2016_06_23_074721_products_categories', 2),
('2016_07_23_062337_create_videos_xref', 3),
('2016_07_29_073204_create_contacts', 4),
('2017_01_20_144618_create_products_links_table', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `top` tinyint(1) NOT NULL,
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `enabled`, `top`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(14, 'Ленинград Концерт в Кишинёве', 'Leningrad Concert în Chișinău', 'Leningrads Band concert in Chishinau', '<p>Сильный рубль и слабая нефть, Олимпиада в Сочи и допинг, Вконтакте и новый муж Пугачевой - последние 20 лет все вокруг привычно и прилично штормило, но были и те, кого волны подбрасывали только вверх. Родившись в центрифуге группировок бандитских, музыкальная группировка &quot;Ленинград&quot; сначала просто неслась над историей России, потом - лихо ее фиксировала, в конце концов - стала настраивать. К юбилею &quot;Ленинград&quot; накопил неправдоподобное количество хитов и окончательно вырвался за пределы любого из жанров: его командор Сергей Шнуров ведет ток-шоу для пенсионерок и озвучивает программу для детей, заводит сектора футбольных фанатов и поднимает на ноги самые консервативные корпоративы. Быть популярным - особенно на&nbsp;сцене - на Руси долгое время считалось чем-то сомнительным: за этим всегда стояли или перья, или расстегнутая сверх меры рубаха, или предельная примитивность музыки и текстов. &quot;Ленинград&quot; - первая группа, которая доказала: нравиться людям - это не стыд, а самое настоящее счастье. В рамках тура &quot;20 лет на радость&quot; этим счастьем они непременно поделятся с вами.</p>\r\n\r\n<p><br />\r\n<br />\r\nК 2016 году эта публичность достигла таких широт, что &laquo;Ленинграду&raquo; уже принялись ставить ее в вину. У &laquo;Ленинграда&raquo; репутация безотказной команды, они традиционно играют везде и для всех, что естественным образом вызывает раздражение и обвинения в неразборчивости. Тут справедливости ради стоит напомнить, что искомые корпоративы во всем их тревожном изобилии изначально были не знаком алчности, но элементарным порождением цензуры (поскольку при Лужкове концерты &laquo;Ленинграда&raquo; недолгое время находились под запретом, а это был самый расцвет группы).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<br />\r\nКроме того, &laquo;Ленинград&raquo; работает с большими площадными вибрациями, которые изначально рассчитаны на известную всеядность. Не может быть непопулярного &laquo;Ленинграда&raquo;, это группа-тотализатор и в первую очередь массовое явление, Шнуров это прекрасно понимает, поэтому он на концертах так настаивает на всех этих им же срежиссированных аплодисментах, подпевках и огнях в зале. Успех &laquo;Ленинграда&raquo; &ndash; это, собственно говоря, не есть похвала ему или оценка, это скорее врожденное свойство, без него эти песни просто теряют смысл, они ровно с этой целью и были написаны. Поэтому и слушают их, как правило, долго, до тошноты.<br />\r\n<br />\r\n&laquo;Ленинград&raquo; в свое время вырулил на эту дорогу сам &ndash; без покровительства крупных лейблов, без формальной телевизионной раскрутки, без приглашенных продюсеров и радийных хитов (за редкими исключениями, вроде WWW или &laquo;Музыки для мужика&raquo; &ndash; и то они выходили в эфир в купированном виде). В концертном пространстве России &laquo;Ленинград&raquo; давно завоевал себе функциональное преимущество, сплетая черты бродячего цирка, стадионных монстров рока и корабельной дискотеки. Энергетика &laquo;Ленинграда&raquo; основана на вполне ископаемом топливе &ndash; концерты группы по-настоящему архаичны, тут царит драйв сугубо животного происхождения, заранее подогретый многочисленными вирусными видеоклипами.<br />\r\n<br />\r\nООО &laquo;Ленинград&raquo; держится на трех принципах &ndash; остроумие, одурение, обществознание. &laquo;Ленинград&raquo; смешон, дик и точен &ndash; сочетание этих качеств делает его практически неуязвимым для критики: к нему сложно подходить с серьезными мерками, и одновременно, невозможно высмеять, потому что группа и сама сделает это за тебя. В песнях &laquo;Ленинграда&raquo; много чего можно услышать, от грубого до глупого, однако в нем нет и никогда не было грязи и самодовольства.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<br />\r\nСмысл &laquo;Ленинграда&raquo; &ndash; в когда-то прирученном ими и до сих пор удерживаемом настроении, которое сам Шнуров называет эсхатологическим восторгом. &laquo;Ленинград&raquo; приватизировал само ощущение праздника, это и есть его торговая марка, акции которой только повышаются. Стоит сказать, что этот праздник выдержан совершенно в русских литературных традициях &ndash; это праздник маленького, в общем, человека (что самым отчетливым образом запечатлено в клипе &laquo;В Питере &ndash; пить&raquo;). Шнурова часто обвиняют в издевательстве над людьми, хотя он всего лишь перерабатывает инерцию обычного здешнего самоедства в энергию ликования; и его пресловутые лабутены тоже, как ни парадоксально, вышли из гоголевской шинели.<br />\r\n<br />\r\n<br />\r\n<em><strong>Кишинёв, Молдова</strong></em><br />\r\n<br />\r\n<em><strong>Дата концерта: 25 Мая 2017</strong></em><br />\r\n<em><strong>Площадка: CIE Moldexpo&nbsp;</strong></em><br />\r\n<em><strong>Начало: 19:00</strong></em><br />\r\n<br />\r\n- - - - -&nbsp;<br />\r\n<br />\r\n<strong>СТОИМОСТЬ БИЛЕТОВ:</strong></p>\r\n\r\n<p><br />\r\n<strong>I) с 16 ЯНВАРЯ по 15 МАРТА</strong></p>\r\n\r\n<p><br />\r\n<strong>Zone MAIN 400 MDL<br />\r\nZone FAN 600 MDL *количество мест ограничено<br />\r\n<br />\r\n-------------------------------------------------------------<br />\r\n<br />\r\nII) с 16 МАРТА по 25 АПРЕЛЯ<br />\r\n<br />\r\nZone MAIN 500 MDL<br />\r\nZone FAN 700 MDL *количество мест ограничено<br />\r\nZona VIP 2.500 - 3.000 *количество мест ограничено<br />\r\n<br />\r\n----------------------------------------------------------<br />\r\n<br />\r\nIII) с 26 АПРЕЛЯ по 25 МАЯ<br />\r\n<br />\r\nZone MAIN 600 MDL<br />\r\nZone FAN 800 MDL *количество мест ограничено<br />\r\nZona VIP 2.500 - 3.000 *количество мест ограничено</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Info bilete:&nbsp;<strong>060 879 444&nbsp;|&nbsp;079 979 444</strong></strong></li>\r\n</ul>\r\n', '', '', 'Концерт Группы Ленинград в Кишинёве \r\nЛенинград - 20 лет на радость', 'Concertul formației Leningrad în Chișinău\r\nLeningrad - 20 de ani de fericire  ', 'Leningrads Band concert in Chishinau\r\nLeningrad - 20 years of happines', 1, 1, 2, 0, 'leningrad-konczert-v-kishinyove', '2017-05-24 21:00:00', '0000-00-00 00:00:00'),
(15, 'Eco Run 25 лет Независимости - 25 км ', 'Eco Run 25 de ani de independență în 25 de км', 'Eco Run 25 years of Independence - 25 km', '<p>25 de ani de independență &icirc;n 25 de kilometri!&nbsp;<br />\r\nVin-o și croiește-ți calea prin locațiile care reprezintă patrimoniul unic al Moldovei: Codrii, Rezervația &bdquo;Plaiul Fagului&rdquo;, Dealul Bălănești, izvorul și Lunca B&acirc;cului. Fii primul sportiv care va explora aceste priveliști<br />\r\n<br />\r\n&Icirc;n 27 august, ora 10.00, aliniază-țe la startul cursei Eco Run de 25 sau 15 km. &Icirc;nregistrează-te acum pe&nbsp;<a href=\"http://l.facebook.com/l.php?u=http%3A%2F%2Fwww.ecorun.md%2F&amp;h=4AQGoM6u8&amp;enc=AZNPehTNwLoF4eaGLeQPDvgTdtlpslw4tu9xpBq5Ijxz2Yz51Bl-hKJN9bVCsfxw-NY&amp;s=1\" target=\"_blank\">www.ecorun.md</a>&nbsp;și scrie istoria independenței Republicii Moldova!<br />\r\n<br />\r\nPunctul culminant al traseului va fi Dealul Bălănești și cel mai &icirc;nalt punct din Republica Moldova, aflat la altitudinea de 429 m deasupră nivelului mării. Cursa va &icirc;ncepe și se va &icirc;ncheia &icirc;n localitatea Milești din raionul Nisporeni.<br />\r\n<br />\r\nPe l&acirc;ngă participarea la cursă, sportivii amatori și profesioniști vor putea să petreacă o noapte &icirc;n s&acirc;nul naturii și &icirc;n inima codrilor, av&acirc;nd un loc asigurat &icirc;n zona de camping!</p>\r\n\r\n<p><strong>Detalii eveniment:</strong></p>\r\n\r\n<p><strong>C&acirc;nd:</strong>&nbsp;27 august 2016, ora 10.00 (start)<br />\r\n<strong>Unde:</strong>&nbsp;s. Milești, r. Nisporeni<br />\r\n<strong>Distanțe:</strong>&nbsp;15km și 25km<br />\r\n<strong>Numărul de participanți:</strong>&nbsp;300 persoane<br />\r\n<strong>Taxe de &icirc;nregistrare:</strong>&nbsp;150MDL &ndash; 15km, 200MDL &ndash; 25km (&icirc;n ziua evenimentului taxa de participare va constitui 200MDL &ndash; 15km, 250 &ndash; 25km)<br />\r\n<strong>*Taxa transport:</strong>&nbsp;50 MDL Tur/Retur<br />\r\n<strong>Limita de timp pentru completarea curselor:</strong>&nbsp;3h &ndash; 15km, 5h &ndash; 25km<br />\r\n<strong>Data limită pentru &icirc;nregistrare:</strong>&nbsp;25 august</p>\r\n\r\n<p><strong>*Transportul va pleca din Chișinău la ora 6:30 . Mai multe detalii veți primi după procurarea biletelor.</strong><br />\r\n<br />\r\n<strong>Conținut starter-kit:</strong>&nbsp;tricou, număr, chip, băutură de la partereni, reduceri și materiale promoționale de la parteneri.<br />\r\n<br />\r\n<strong>Condiții de participare:</strong><br />\r\n- &icirc;nregistrare completă<br />\r\n- achitare<br />\r\n- Echipament obligator (&icirc;ncălțăminte corespunzătoare, rezervor pentru apă, rucsac, alimentație, telefon cu bateria &icirc;ncărcată etc.)<br />\r\n<br />\r\nDoritorii de a veni seara la data de 26 august, vor avea posibilitatea de a instala cort și a participa la programul de pregătire pentru cursă.<br />\r\nTransportul asigurat (autobus) va pleca spre locația evenimentului la 27 august, 06:30.<br />\r\nPunct de plecare va fi anunțat &icirc;n scurt timp<br />\r\n<br />\r\n<strong>Programul evenimentului&nbsp;</strong></p>\r\n\r\n<p>26 august&nbsp;<br />\r\n19:00 &ndash; Hrișca Party<br />\r\n20.30 &ndash; Concursuri/Dansuri<br />\r\n<br />\r\n27 august<br />\r\n07:00 &ndash; Start &icirc;nregistrare/Eliberare Starter Kit<br />\r\n09:00 &ndash; Instrucțiuni/&Icirc;ncălzirea<br />\r\n10:00 &ndash; Start curse (15km/25km)<br />\r\n15:30 &ndash; Ceremonia de premiere<br />\r\n<br />\r\n<br />\r\nCursa EcoRun Codrii Moldovei este organizată de comunitatea EcoRun, cu suportul organizatoric a companiilor PRofile și Sporter, suportul financiar al companiilor BEMOL, MOLDTELCOM și CRICOVA, c&acirc;t și suportul partenerilor: PUMA, GARMIN, EFES VITANTA, SIMPALS.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Инфо билеты:&nbsp;<strong>060 879 444&nbsp;|&nbsp;079 979 444</strong></strong></li>\r\n</ul>\r\n', '<p>25 de ani de independență &icirc;n 25 de kilometri!&nbsp;<br />\r\nVin-o și croiește-ți calea prin locațiile care reprezintă patrimoniul unic al Moldovei: Codrii, Rezervația &bdquo;Plaiul Fagului&rdquo;, Dealul Bălănești, izvorul și Lunca B&acirc;cului. Fii primul sportiv care va explora aceste priveliști<br />\r\n<br />\r\n&Icirc;n 27 august, ora 10.00, aliniază-țe la startul cursei Eco Run de 25 sau 15 km. &Icirc;nregistrează-te acum pe&nbsp;<a href=\"http://l.facebook.com/l.php?u=http%3A%2F%2Fwww.ecorun.md%2F&amp;h=4AQGoM6u8&amp;enc=AZNPehTNwLoF4eaGLeQPDvgTdtlpslw4tu9xpBq5Ijxz2Yz51Bl-hKJN9bVCsfxw-NY&amp;s=1\" target=\"_blank\">www.ecorun.md</a>&nbsp;și scrie istoria independenței Republicii Moldova!<br />\r\n<br />\r\nPunctul culminant al traseului va fi Dealul Bălănești și cel mai &icirc;nalt punct din Republica Moldova, aflat la altitudinea de 429 m deasupră nivelului mării. Cursa va &icirc;ncepe și se va &icirc;ncheia &icirc;n localitatea Milești din raionul Nisporeni.<br />\r\n<br />\r\nPe l&acirc;ngă participarea la cursă, sportivii amatori și profesioniști vor putea să petreacă o noapte &icirc;n s&acirc;nul naturii și &icirc;n inima codrilor, av&acirc;nd un loc asigurat &icirc;n zona de camping!</p>\r\n\r\n<p><strong>Detalii eveniment:</strong></p>\r\n\r\n<p><strong>C&acirc;nd:</strong>&nbsp;27 august 2016, ora 10.00 (start)<br />\r\n<strong>Unde:</strong>&nbsp;s. Milești, r. Nisporeni<br />\r\n<strong>Distanțe:</strong>&nbsp;15km și 25km<br />\r\n<strong>Numărul de participanți:</strong>&nbsp;300 persoane<br />\r\n<strong>Taxe de &icirc;nregistrare:</strong>&nbsp;150MDL &ndash; 15km, 200MDL &ndash; 25km (&icirc;n ziua evenimentului taxa de participare va constitui 200MDL &ndash; 15km, 250 &ndash; 25km)<br />\r\n<strong>*Taxa transport:</strong>&nbsp;50 MDL Tur/Retur<br />\r\n<strong>Limita de timp pentru completarea curselor:</strong>&nbsp;3h &ndash; 15km, 5h &ndash; 25km<br />\r\n<strong>Data limită pentru &icirc;nregistrare:</strong>&nbsp;25 august</p>\r\n\r\n<p><strong>*Transportul va pleca din Chișinău la ora 6:30 . Mai multe detalii veți primi după procurarea biletelor.</strong><br />\r\n<br />\r\n<strong>Conținut starter-kit:</strong>&nbsp;tricou, număr, chip, băutură de la partereni, reduceri și materiale promoționale de la parteneri.<br />\r\n<br />\r\n<strong>Condiții de participare:</strong><br />\r\n- &icirc;nregistrare completă<br />\r\n- achitare<br />\r\n- Echipament obligator (&icirc;ncălțăminte corespunzătoare, rezervor pentru apă, rucsac, alimentație, telefon cu bateria &icirc;ncărcată etc.)<br />\r\n<br />\r\nDoritorii de a veni seara la data de 26 august, vor avea posibilitatea de a instala cort și a participa la programul de pregătire pentru cursă.<br />\r\nTransportul asigurat (autobus) va pleca spre locația evenimentului la 27 august, 06:30.<br />\r\nPunct de plecare va fi anunțat &icirc;n scurt timp<br />\r\n<br />\r\n<strong>Programul evenimentului&nbsp;</strong></p>\r\n\r\n<p>26 august&nbsp;<br />\r\n19:00 &ndash; Hrișca Party<br />\r\n20.30 &ndash; Concursuri/Dansuri<br />\r\n<br />\r\n27 august<br />\r\n07:00 &ndash; Start &icirc;nregistrare/Eliberare Starter Kit<br />\r\n09:00 &ndash; Instrucțiuni/&Icirc;ncălzirea<br />\r\n10:00 &ndash; Start curse (15km/25km)<br />\r\n15:30 &ndash; Ceremonia de premiere<br />\r\n<br />\r\n<br />\r\nCursa EcoRun Codrii Moldovei este organizată de comunitatea EcoRun, cu suportul organizatoric a companiilor PRofile și Sporter, suportul financiar al companiilor BEMOL, MOLDTELCOM și CRICOVA, c&acirc;t și suportul partenerilor: PUMA, GARMIN, EFES VITANTA, SIMPALS.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Инфо билеты:&nbsp;<strong>060 879 444&nbsp;|&nbsp;079 979 444</strong></strong></li>\r\n</ul>\r\n', '<p>25 de ani de independență &icirc;n 25 de kilometri!&nbsp;<br />\r\nVin-o și croiește-ți calea prin locațiile care reprezintă patrimoniul unic al Moldovei: Codrii, Rezervația &bdquo;Plaiul Fagului&rdquo;, Dealul Bălănești, izvorul și Lunca B&acirc;cului. Fii primul sportiv care va explora aceste priveliști<br />\r\n<br />\r\n&Icirc;n 27 august, ora 10.00, aliniază-țe la startul cursei Eco Run de 25 sau 15 km. &Icirc;nregistrează-te acum pe&nbsp;<a href=\"http://l.facebook.com/l.php?u=http%3A%2F%2Fwww.ecorun.md%2F&amp;h=4AQGoM6u8&amp;enc=AZNPehTNwLoF4eaGLeQPDvgTdtlpslw4tu9xpBq5Ijxz2Yz51Bl-hKJN9bVCsfxw-NY&amp;s=1\" target=\"_blank\">www.ecorun.md</a>&nbsp;și scrie istoria independenței Republicii Moldova!<br />\r\n<br />\r\nPunctul culminant al traseului va fi Dealul Bălănești și cel mai &icirc;nalt punct din Republica Moldova, aflat la altitudinea de 429 m deasupră nivelului mării. Cursa va &icirc;ncepe și se va &icirc;ncheia &icirc;n localitatea Milești din raionul Nisporeni.<br />\r\n<br />\r\nPe l&acirc;ngă participarea la cursă, sportivii amatori și profesioniști vor putea să petreacă o noapte &icirc;n s&acirc;nul naturii și &icirc;n inima codrilor, av&acirc;nd un loc asigurat &icirc;n zona de camping!</p>\r\n\r\n<p><strong>Detalii eveniment:</strong></p>\r\n\r\n<p><strong>C&acirc;nd:</strong>&nbsp;27 august 2016, ora 10.00 (start)<br />\r\n<strong>Unde:</strong>&nbsp;s. Milești, r. Nisporeni<br />\r\n<strong>Distanțe:</strong>&nbsp;15km și 25km<br />\r\n<strong>Numărul de participanți:</strong>&nbsp;300 persoane<br />\r\n<strong>Taxe de &icirc;nregistrare:</strong>&nbsp;150MDL &ndash; 15km, 200MDL &ndash; 25km (&icirc;n ziua evenimentului taxa de participare va constitui 200MDL &ndash; 15km, 250 &ndash; 25km)<br />\r\n<strong>*Taxa transport:</strong>&nbsp;50 MDL Tur/Retur<br />\r\n<strong>Limita de timp pentru completarea curselor:</strong>&nbsp;3h &ndash; 15km, 5h &ndash; 25km<br />\r\n<strong>Data limită pentru &icirc;nregistrare:</strong>&nbsp;25 august</p>\r\n\r\n<p><strong>*Transportul va pleca din Chișinău la ora 6:30 . Mai multe detalii veți primi după procurarea biletelor.</strong><br />\r\n<br />\r\n<strong>Conținut starter-kit:</strong>&nbsp;tricou, număr, chip, băutură de la partereni, reduceri și materiale promoționale de la parteneri.<br />\r\n<br />\r\n<strong>Condiții de participare:</strong><br />\r\n- &icirc;nregistrare completă<br />\r\n- achitare<br />\r\n- Echipament obligator (&icirc;ncălțăminte corespunzătoare, rezervor pentru apă, rucsac, alimentație, telefon cu bateria &icirc;ncărcată etc.)<br />\r\n<br />\r\nDoritorii de a veni seara la data de 26 august, vor avea posibilitatea de a instala cort și a participa la programul de pregătire pentru cursă.<br />\r\nTransportul asigurat (autobus) va pleca spre locația evenimentului la 27 august, 06:30.<br />\r\nPunct de plecare va fi anunțat &icirc;n scurt timp<br />\r\n<br />\r\n<strong>Programul evenimentului&nbsp;</strong></p>\r\n\r\n<p>26 august&nbsp;<br />\r\n19:00 &ndash; Hrișca Party<br />\r\n20.30 &ndash; Concursuri/Dansuri<br />\r\n<br />\r\n27 august<br />\r\n07:00 &ndash; Start &icirc;nregistrare/Eliberare Starter Kit<br />\r\n09:00 &ndash; Instrucțiuni/&Icirc;ncălzirea<br />\r\n10:00 &ndash; Start curse (15km/25km)<br />\r\n15:30 &ndash; Ceremonia de premiere<br />\r\n<br />\r\n<br />\r\nCursa EcoRun Codrii Moldovei este organizată de comunitatea EcoRun, cu suportul organizatoric a companiilor PRofile și Sporter, suportul financiar al companiilor BEMOL, MOLDTELCOM și CRICOVA, c&acirc;t și suportul partenerilor: PUMA, GARMIN, EFES VITANTA, SIMPALS.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Инфо билеты:&nbsp;<strong>060 879 444&nbsp;|&nbsp;079 979 444</strong></strong></li>\r\n</ul>\r\n', 'Eco Run 25 лет Независимости - 25 км ', 'Eco Run 25 de ani de independență în 25 de км', 'Eco Run 25 years of Independence - 25 km', 1, 1, 1, 0, 'eco-run', '2016-08-26 21:00:00', '0000-00-00 00:00:00'),
(17, 'В Кишинёве состоялся грандиозный концерт \"Группировки Ленинград”', '', '', '<h1>В Кишинёве состоялся грандиозный концерт &quot;Группировки Ленинград&rdquo;</h1>\r\n\r\n<p>В четверг, 12 мая, на территории международного выставочного центра MoldExpo &quot;Группировка Ленинград&rdquo; Сергея Шнурова &ldquo;взорвала&rdquo; сцену и танцпол невероятным исполнением самых известных песен.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://afisha.md/\">Afisha.md</a>&nbsp;не могла пропустить такое событие и отправила на концерт свою команду журналистов.</p>\r\n\r\n<p><img src=\"https://i.simpalsmedia.com/point.md/news/thumbnails/large/ba4f215bbeafa33d7ee2744cd9042a5b.jpg\" /></p>\r\n\r\n<p>Концерт посетило огромное количество фанатов и любителей музыки Шнурова. Уникальная атмосфера живого выступления известного артиста и его группы заставила танцевать абсолютно всех, кто присутствовал на концерте. &nbsp;</p>\r\n\r\n<p><img src=\"https://i.simpalsmedia.com/point.md/news/thumbnails/large/15fd3f3c668968ba47bc3e8d6673c431.jpg\" /></p>\r\n\r\n<p>Музыканты зажигательно играли на гитаре, трубе, саксофоне, тромбоне и барабанах, исполняя свежие композиции, а также проверенные временем хиты. Публика эмоционально подпевала артистам, исполнив практически все известные песни музыкальной &ldquo;банды&rdquo;.</p>\r\n\r\n<p><img src=\"https://i.simpalsmedia.com/point.md/news/thumbnails/large/660348fd321915c7ae62db772216c708.jpg\" /></p>\r\n\r\n<p>Такого яркого концерта в Кишинёве не было уже давно, и надеемся, что он останется в памяти молдаван надолго.</p>\r\n\r\n<p><img src=\"https://i.simpalsmedia.com/point.md/news/thumbnails/large/e2c275ec63af3bad8b2c515b9ba424f0.jpg\" /></p>\r\n\r\n<p>&ldquo;Группировка Ленинград&rdquo; &mdash; российская музыкальная группа из Санкт-Петербурга, созданная Сергеем Шнуровым. Известна, в частности,эксцентричными и провокационными песнями с большим количеством обсценной лексики и алкогольно-бытовой тематикой.</p>\r\n', '', '', 'В Кишинёве состоялся грандиозный концерт \"Группировки Ленинград”', '', '', 1, 1, 3, 0, 'v-kishinyove-sostoyalsya-grandioznyj-konczert-gruppirovki-leningrad', '2017-01-20 21:00:00', '0000-00-00 00:00:00'),
(19, 'Прием заявок на участие в конкурсе \"Евровидение-2017\" завершился', '', '', '<h1>Прием заявок на участие в конкурсе &quot;Евровидение-2017&quot; завершился</h1>\r\n\r\n<p><img alt=\"В этом году конкурс «Евровидение» пройдёт в Киеве.\" src=\"https://i.simpalsmedia.com/point.md/news/370x220/5e2373ba2128d3c7fb74e34ac9d307ad.jpg\" /></p>\r\n\r\n<p>В этом году конкурс &laquo;Евровидение&raquo; пройдёт в Киеве.</p>\r\n\r\n<p>Вчера завершился приём заявок на участие в национальном отборочном конкурсе Евровидение-2017. Выступать за Молдову готовы 40 участников, в их числе Борис Коваль, SunStroke Project и Макс Фалл.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>21 января организаторы проведут первое прослушивание и выберут 14 конкурсантов. 24 февраля состоится второе прослушивание, а на следующий день определят победителя.</p>\r\n\r\n<p>В этом году конкурс &laquo;Евровидение&raquo; пройдёт в Киеве.</p>\r\n', '', '', 'Прием заявок на участие в конкурсе \"Евровидение-2017\" завершился', '', '', 1, 1, 0, 0, 'priem-zayavok-na-uchastie-v-konkurse-evrovidenie-zavershilsya', '2017-01-20 21:00:00', '2017-01-21 20:40:44'),
(20, '31 мая, в Кишиневе, на площадке Moldexpo, отыграл двухчасовой сет голландец Армин ван Бюрен', '31 мая, в Кишиневе, на площадке Moldexpo, отыграл двухчасовой сет голландец Армин ван Бюрен', '31 мая, в Кишиневе, на площадке Moldexpo, отыграл двухчасовой сет голландец Армин ван Бюрен31 мая, в Кишиневе, на площадке Moldexpo, отыграл двухчасовой сет голландец Армин ван Бюрен', '<p><strong>В воскресенье, 31 мая, в Кишиневе, на площадке Moldexpo, отыграл двухчасовой сет голландец Армин ван Бюрен &mdash; одна из главных звезд мировой DJ-сцены и абсолютный рекордсмен рейтинга &laquo;Топ-100 диджеев&raquo; по версии журнала DJ Magazine. Шоу одного из лучших диджеев планеты смотрел и слушал СЕРГЕЙ ЗАМУРУЕВ.</strong></p>\r\n\r\n<p>Это не первый приезд артиста подобного класса в столицу Молдовы: ровно три года назад Кишинев посетил Дэвид Гетта, два раза успел выступить Tiesto, были и другие, чуть менее именитые диджеи. Однако именно ван Бюрен, хотя и слегка подрастерявший в последнее время рейтинговые очки (актуальное третье место в сотне), остается чуть ли не самым желанным и любимым дискотечно-рейвовым шаманом в мире. Именно поэтому в Молдове его ожидали давно и с особым трепетным интересом.</p>\r\n\r\n<p>Билеты поступили в продажу в середине марта, их реализация сопровождалась невероятным ажиотажем. Так, в первые дни у касс выстраивались огромные очереди, что привело к номерной регистрации очередников. Кроме того, больше двух билетов в одни руки не давали. По информации организаторов концерта, только в первый день продаж было реализовано около 1 тыс. билетов, а последний официально проданный билет был куплен еще в конце апреля. Предложения перекупщиков при этом были относительно скромны: пропуск в фан-зону легко можно было получить за 500 леев. Перед самым концертом цена упала до 200-300 леев и билеты запросто приобретались непосредственно перед входом. Также были организованы официальные продажи и туры с Украины &mdash; оттуда приехал солидный десант из примерно 1 тыс. фанов.</p>\r\n\r\n<p>Музыкальная часть концерта началась задолго до выхода главного виновника торжества. Помимо ван Бюрена, на сцене появилась еще одна настоящая звезда, причем уже местного происхождения,&mdash; Эндрю Райел (Андрей Рацэ). Этот парень из Калараша писал дома электронную музыку и в какой-то момент начал отправлять ее на известные диджейские радиошоу. Сначала он засветился в программе у Tiesto, а через некоторое время и у ван Бюрена в его знаменитом State of Trance с почти 24-миллионной армией слушателей.</p>\r\n\r\n<p><img alt=\"\" src=\"http://newsmaker.md/pic/pictures/2015-06-03/_DSC2996%20(Copy)-2.JPG\" /></p>\r\n\r\n<p>Фото: Максим Андреев, NewsMaker</p>\r\n\r\n<p>Сегодня, когда не количество концертов, а именно собственный продакшн является магистральным направлением на пути становления современного диджея, появление со своим оригинальным треком на популярных шоу становится чуть ли не решающим фактором. Добившись определенного успеха на радио и клубных выступлениях, от трека к треку Райел становился все более узнаваемым, вошел в сотню мирового рейтинга, где на данный момент поднялся до 24-й позиции, что для артиста из Молдовы является историческим достижением.</p>\r\n\r\n<p>Проиграв свои наиболее известные треки, наш соотечественник должным образом подготовил аудиторию, и к моменту выхода ван Бюрена в 21.00 зритель уже был основательно разогрет. Встречали звезду, как и положено, с поднятыми вверх смартфонами и прочими видеорегистраторами, над сценой завис летающий дрон с камерой. Закончив со съемочным процессом, публика перешла в скачущий режим, из которого уже не выходила до конца мероприятия.</p>\r\n\r\n<p>Во время своих технических манипуляций ван Бюрен демонстрировал свои фирменные движения: то подпрыгивал с распростертыми руками, то застывал на несколько секунд с протянутыми вверх наушниками. Несколько раз он взбирался на площадку над пультовым пространством, устно проверяя публику на готовность внимать, отдельно поприветствовал украинских фанов &mdash; флаги Украины время от времени вздымались над массами. На руках диджея красовались специальные браслеты, обеспечивающие особую технологическую фишку &mdash; motion control. Она позволяет позиционировать в пространстве движения рук, проецирующиеся на экраны с различными визуальными эффектами. Под конец Армин ван Бюрен завернулся в молдавский триколор и хотя, как говорят, уже опаздывал на самолет, немного задержался на сцене, исполнив еще несколько треков.</p>\r\n\r\n<p>Реклама 24</p>\r\n\r\n<p>&nbsp;<img src=\"http://gdero.hit.gemius.pl/_%7BPTIMESTAMP%7D/redot.gif?id=coTg9IdX4068OQQEuQbMscbg.s1Y57tNwpp4QD4LBzD.r7/fastid=lxtcikocnaooakaudiwnvrrzivmd/stparam=ydohcrditg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://newsmaker.md/pic/pictures/2015-06-03/_DSC4110%20(Copy)-2.JPG\" /></p>\r\n\r\n<p>Фото: Максим Андреев, NewsMaker</p>\r\n\r\n<p>Останавливаясь на трек-листе, стоит отметить, что практически все хиты были исполнены в новой интерпретации с довольно неожиданным жестким звучанием, изрядно потяжелел даже знаменитый хит In and out of love. Некоторые фаны со стажем, успевшие побывать на концертах в Киеве или Бухаресте, отметили, что кишиневское выступление разительно отличается от того, что ван Бюрен исполняет на своем полноценном сольном концерте Armin Only, где задействовано несколько вокалистов, а сама программа длится не менее пяти часов. По словам организаторов, &laquo;к подобным изыскам мы пока не готовы, но, впрочем, все возможно&raquo;.</p>\r\n\r\n<p>Гендиректор агентства Publicis Moldova Евгений Бойко рассказал, что переговоры с менеджментом артиста начались еще около двух лет назад, однако, помимо предварительной договоренности, для реализации подобного проекта необходимо, чтобы в определенное время сошлись сразу несколько благоприятных факторов. Это готовность артиста приехать в страну, возможности определенных инвестиций со стороны партнеров и спонсоров, а также соблюдение технического регламента. Помимо прочего, весомую роль сыграли и дружеские отношения между диджеями: ван Бюрен называет Райела не иначе как братом.</p>\r\n\r\n<p>Сегодня сумма гонорара за концерт топ-диджея может составлять несколько сотен тысяч долларов, годовые финансовые показатели регулярно публикует Forbes, где в 2013 году ван Бюрен занял восьмую строчку с $17 млн дохода. Точной цифры за кишиневское выступление организаторы не раскрывают, но можно предположить, что это не менее &euro;100 тыс. Современные диджеи являются звездами новой эпохи, а рейв-индустрия имеет глобальное значение. На больших рынках Америки, Британии, Азии мероприятия данного формата собирают значительно больше людей, чем рок-фестивали. К примеру, легендарный Tomorrowland в Бельгии в прошлом году собрал около 150 тыс. зрителей.</p>\r\n\r\n<p><img alt=\"\" src=\"http://newsmaker.md/pic/pictures/2015-06-03/_DSC3964%20(Copy)-2.JPG\" /></p>\r\n\r\n<p>Фото: Максим Андреев, NewsMaker</p>\r\n\r\n<p>При этом скидки обычно не предусматриваются: цифры, которые можно найти в интернете, применимы и к нам. Это касается и общемировых стандартов организации, и технических требований. Учитывая, что страна сегодня находится в состоянии глубокого политического и экономического кризиса, отмечает Евгений Бойко,&nbsp;<br />\r\n&laquo;необходима определенная доля храбрости со стороны организаторов и партнеров взять на себя данный проект&raquo;. Причем деньги, вырученные с продажи билетов, здесь уже давно не являются главным бизнес-фактором. На фоне средней европейской цены &euro;40-50 стоимость кишиневских билетов в размере 200-300 леев выглядит действительно демократичной, что говорит не о заточенности на прибыль, а о каких-то иных задачах. Главным спонсором подобных мероприятий уже несколько лет выступает один из молдавских мобильных операторов, для которого их проведение является частью имиджа, заложенного в маркетинговую программу. С брендом будут связаны воспоминания о концертах, которые уже не стереть, и в них имеет смысл инвестировать.</p>\r\n\r\n<p>С организационной точки зрения проведение масштабного оупен-эйра давно не ограничивается обычным концертом. Это некая система &laquo;в себе&raquo;, с комплексом аттракционов и развлекательных зон, которая выстроена и просуществует всего один день. И если на европейских и американских рынках функции промоутера сводятся к процессу переговоров с артистами и проведению кампаний продвижения и продаж билетов, задачи наших организаторов гораздо шире. Из-за отсутствия современных площадок с необходимой эргономикой приходится полностью продумывать временную инфраструктуру и проверять ее на работоспособность.</p>\r\n\r\n<p><img alt=\"\" src=\"http://newsmaker.md/pic/pictures/2015-06-03/_DSC3065%20(Copy)-2.JPG\" /></p>\r\n\r\n<p>Фото: Максим Андреев, NewsMaker</p>\r\n\r\n<p>&laquo;Можно говорить о том, что на концерте ван Бюрена был использован весь наш десятилетний опыт работы, который приобретался через горы критики и упреков&raquo;,&mdash; резюмирует Евгений Бойко. Такие моменты, как обеспечение входа-выхода, количество и расположение туалетов, организация питания и игровых зон, вопросы безопасности, привлечение и работа около 30 волонтеров, должны были решаться максимально эффективно и обеспечить комфорт всем семи тысячам человек, посетившим воскресный концерт. Стоит отметить и работу по привлечению в страну гостей из соседних стран, которая может послужить неплохим примером в продвижении ивент-туризма, о котором так много говорят у нас в последнее время.</p>\r\n', '', '', '31 мая, в Кишиневе, на площадке Moldexpo, отыграл двухчасовой сет голландец Армин ван Бюрен', '', '', 1, 1, 2, 0, 'maya-v-kishineve-na-ploshhadke-moldexpo-otygral-dvuxchasovoj-set-gollandecz-armin-van-byuren', '2017-01-20 21:00:00', '0000-00-00 00:00:00'),
(21, 'Don\'t worry be hippie @ Sky Bar', 'Don\'t worry be hippie @ Sky Bar', 'Don\'t worry be hippie @ Sky Bar', '<p>Рэгги ,Миксы легендарных The Doors , Jefferson Airplane и многих других ! Только 20 и 21 января в нашем клубе ! Действует Wellcome drink до 00:00 !<br />\r\nMake love , not war ! ☮️</p>\r\n', '', '', 'Don\'t worry be hippie @ Sky Bar', '', '', 1, 1, 3, 0, 'dont-worry-be-hippie-sky-bar', '2017-01-19 21:00:00', '0000-00-00 00:00:00'),
(22, 'Зимний чемпионат по плаванию среди любителей и ветеранов.', '', '', '<p>Вы занимаетесь плаванием и хотите проверить свои силы в бассейне? Мы поможем вам в этом!<br />\r\n<br />\r\n<br />\r\nАссоциация пловцов любителей и профессионалов приглашает всех желающих 22 Января 2017 на зимний чемпионат РМ по плаванию среди любителей и ветеранов.&nbsp;<br />\r\nРегистрация на сайте swimming.md&nbsp;<br />\r\nУчастие БЕСПЛАТНОЕ!!!<br />\r\nГенеральный партнёр соревнований международная компания Mad Wave , производящая товары для плавания .<br />\r\nMap:&nbsp;<br />\r\n<br />\r\n<br />\r\n<a href=\"http://point.md/ru/map/47.04116553840007/28.887058496475223/17/568bd29e4a9b9900078af12b\" onclick=\"LinkshimAsyncLink.referrer_log(this, \">http://point.md/ru/map/47.04116553840007/28.887058496475223/17/568bd29e4a9b9900078af12b</a><br />\r\n<br />\r\nАдрес провидения соревнования Алеко-Руссо 57 СДЮШОР№11<br />\r\n<br />\r\nПодробности по тел 060779996,069558598</p>\r\n', '', '', 'Зимний чемпионат по плаванию среди любителей и ветеранов.', '', '', 1, 1, 3, 0, 'zimnij-chempionat-po-plavaniyu-sredi-lyubitelej-i-veteranov', '2017-01-21 21:00:00', '0000-00-00 00:00:00'),
(23, 'Kremlin Karaoke Room w/ Vali Barbulescu', '', '', '<p>28 Ianuarie&nbsp;<br />\r\nKremlin Karaoke Room prezintă<br />\r\n- VALI BARBULESCU -<br />\r\n<br />\r\nAtunci c&acirc;nd vorbim despre muzica, de obicei, există două categorii distincte: mainstream si underground. Dar, ghici ce, există și a treia categorie: tipi &icirc;nțelepți care știu cum să se amestece cu cele două categorii. El știe secretul despre link-ul adevărat &icirc;n genuri muzicale și stiluri. El crede &icirc;n diversitate, de fuziune și latura eclectic a sunetului.<br />\r\n<br />\r\nCa DJ, producător sau remixer VALI BARBULESCU amesteca aroma subterană cu atmosfera de masă, iar energia pe care o creeaza este pur si simplu uimitor.<br />\r\nEl se numește o icoană a muzicii house. El are puterea de a atrage oamenii și să le facă să iubescă muzica lui.<br />\r\nVALI BARBULESCU amestecat &icirc;n at&acirc;t&nbsp;de multe locuri pentru a fi menționate, dar unii dintre ei au fost favoritele lui:<br />\r\n<br />\r\nKristal (București, Rom&acirc;nia), Vision (Chicago, Statele Unite ale Americii), Soho Revue (Londra, Marea Britanie), Veneția (Dubai, EAU), ONU (Montreal, Canada), Le Souk (New York, Statele Unite ale Americii).<br />\r\n<br />\r\nLocal support: CHRISTINE RENARD I DJ Amstel<br />\r\n<br />\r\nKremlin Karaoke Room&nbsp;<br />\r\nStr. Mircea cel Bătr&acirc;n, 17/3<br />\r\nINFOLINE &amp; RSVP : 0 788 788 98</p>\r\n', '', '', 'Kremlin Karaoke Room w/ Vali Barbulescu', '', '', 1, 1, 1, 0, 'kremlin-karaoke-room-w-vali-barbulescu', '2017-01-27 21:00:00', '0000-00-00 00:00:00'),
(24, 'Двое на качелях', '', '', '<p>Двое на качелях<br />\r\n<br />\r\nПосле слова &quot;любить&quot; сладчайшее слово на свете &quot;помогать&quot;. У.Гибсон<br />\r\nГитель - занимается танцами, мучается от язвенной болезни, ведет довольно фривольный образ жизни, у нее практически нет денег. Джерри - молодой, амбициозный адвокат, остро переживающий развод с женой. Одна нечаянная встреча перерастает в свидание. . .<br />\r\nСпектакль рассказывает историю любви двух одиноких людей, хватающихся за случайное знакомство, как утопающий за соломинку. Они настолько разные, что невольно возникает вопрос: смогут ли эти двое быть вместе, несмотря на печальный опыт своих прошлых отношений?<br />\r\n<br />\r\n<br />\r\nРежиссер: Алексей Кирюшенко<br />\r\nроссийский актёр, режиссёр, сценарист.<br />\r\nВ ролях:<br />\r\nВ ролях: Татьяна Арнтгольц, Григорий Антипенко<br />\r\nПродолжительность 2ч. 20 мин<br />\r\nФотограф Екименков Константин<br />\r\n<br />\r\n<br />\r\nТатьяна Арнтгольц<br />\r\nАктриса театра и кино. в 2003 году окончила высшее театрально училище им М.С.Щепкина.<br />\r\nРаботы в кино: &quot;Фурцева.Легенда о Екатерине&quot;, &quot;И все-таки я люблю&quot;, &quot;Глянец&quot;<br />\r\nРабота в театре: &quot;Шашни старого козла&quot;, &quot;Пять вечеров&quot;, &quot;Не будите спящую собаку&quot;<br />\r\n<br />\r\nГригорий Антипенко<br />\r\nАктер театра и кино. 2003 году окончил высшее театрально училище им.Щукина.<br />\r\nВ 2003-2004 годах работал в театре &quot;Et cetera&quot;.<br />\r\nРабота в театре: &quot; Парижский романс&quot; ,&quot; Тайна тетушки Мэлкин(Карло), &quot; Кoни пpивepeдливыe&quot;<br />\r\nРаботы в кино: &quot;Не родись красивой&quot;, &quot;Талисман любви&quot;, &quot;Шекспиру и не снилось&quot;<br />\r\n<br />\r\nКишинёв, Молдова<br />\r\n<br />\r\nДата концерта: 12 Февраля 2017<br />\r\nПлощадка: Национальный театр оперы и балета &ldquo;Maria Biesu&rdquo;<br />\r\nНачало: 19:00<br />\r\nСтоимость билетов: от 300 до 800 MDL.</p>\r\n', '', '', 'Двое на качелях', '', '', 1, 1, 0, 0, 'dvoe-na-kachelyax', '2017-02-11 21:00:00', '2017-01-21 21:26:27');

-- --------------------------------------------------------

--
-- Структура таблицы `news_tags`
--

CREATE TABLE `news_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `tags_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `news_tags`
--

INSERT INTO `news_tags` (`id`, `news_id`, `tags_id`) VALUES
(12, 14, 2),
(13, 15, 1),
(15, 17, 2),
(17, 21, 2),
(18, 22, 1),
(19, 23, 2),
(20, 24, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `news_types`
--

CREATE TABLE `news_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `types_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `news_types`
--

INSERT INTO `news_types` (`id`, `news_id`, `types_id`) VALUES
(9, 14, 1),
(10, 14, 4),
(11, 15, 1),
(12, 15, 4),
(15, 17, 1),
(16, 17, 2),
(19, 21, 4),
(20, 22, 1),
(21, 22, 4),
(22, 23, 4),
(23, 24, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `source` text COLLATE utf8_unicode_ci NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `token` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `source`, `table_id`, `table`, `sort`, `token`) VALUES
(3, 'clubs_3.png', 5, 'categories', 495, ''),
(4, 'weddings_4.png', 6, 'categories', 492, ''),
(5, 'corporate-events_5.png', 7, 'categories', 493, ''),
(6, 'krestini_6.png', 9, 'categories', 511, ''),
(7, 'vipusknoi_7.png', 10, 'categories', 498, ''),
(8, '5763b58f58043.png', 0, 'products', 8, '97d1a4fbda2add5f15a91464694c84b44e22d2b8'),
(9, '5763bb286b276.png', 0, 'products', 9, '1c9a2d29f743583c5a003c7db74f943611e9a1e0'),
(10, 'restorany-kafe_10.png', 8, 'categories', 496, ''),
(11, 'deni-rojdenia_11.png', 11, 'categories', 512, ''),
(12, 'detskie-prazdniki_12.png', 12, 'categories', 514, ''),
(23, 'dj--artisty--shou-programma_23.png', 24, 'categories', 23, ''),
(25, 'fejerverki_25.png', 26, 'categories', 25, ''),
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
(38, 'fitnes-czentr_38.png', 39, 'categories', 38, ''),
(42, 'drive_42.png', 1, 'products', 0, ''),
(43, 'krysha_43.png', 2, 'products', 43, ''),
(44, '576bb1ed13fc3.jpg', 0, 'products', 44, '2a917165591994c2cfb202d624f9f1ee604c6f9c'),
(45, 's_45.jpg', 4, 'products', 45, ''),
(46, '576bc2ab70a4a.jpg', 0, 'products', 46, '478e1d866ec79da71f664f5e9c74ab6ae87e14b4'),
(47, '576bc2ba4ea7a.jpg', 0, 'products', 47, 'f5f857c8c7a5f6ac6e960d6d53abe3931ad2620a'),
(48, '576bc2caf15ba.jpg', 0, 'products', 48, 'b53c7c24e8e260a42d9b50fb88928fe36daa53f7'),
(49, 'driveeddd_49.jpg', 5, 'products', 49, ''),
(50, 'the--club_50.png', 6, 'products', 50, ''),
(51, 'krysha_51.jpg', 2, 'products', 51, ''),
(52, 'krysha_52.jpg', 2, 'products', 52, ''),
(53, 's_53.jpg', 4, 'products', 53, ''),
(54, 's_54.jpg', 4, 'products', 54, ''),
(55, 'driveeddd_55.jpg', 5, 'products', 55, ''),
(56, 'drivee_56.png', 3, 'products', 56, ''),
(57, 'andys-pizza_57.png', 7, 'products', 57, ''),
(59, '576bd8676fd77.jpg', 0, 'products', 59, '8555b7254a762dbb9a615f252508adeb9812af02'),
(60, 'mojito_60.jpg', 9, 'products', 60, ''),
(61, 'mojito-terasarestaurant_61.png', 10, 'products', 61, ''),
(64, 'la-plcinte_64.png', 13, 'products', 64, ''),
(66, '576bdca04ed00.jpg', 0, 'products', 66, 'c45d721d94d8fa994b09a012b3f4ea77682dbbab'),
(67, 'cocos-priv_67.jpg', 15, 'products', 67, ''),
(68, 'chocolate-karaoke-club_68.jpg', 16, 'products', 68, ''),
(69, 'drive_69.jpg', 17, 'products', 69, ''),
(70, 'cocos-prive_70.jpg', 18, 'products', 70, ''),
(71, 'test-novosti_71.png', 1, 'categories', 71, ''),
(72, '576d6dfeed8de.png', 0, 'categories', 72, '45fc5bb8fc72c0fed947891c17086c52ea4bde64'),
(73, '123_73.png', 2, 'news', 73, ''),
(74, 'test-novosti_74.jpg', 1, 'news', 74, ''),
(75, 'neskoliko-uchebnyx-zavedenij-budut-reorganizovany-ili-likvidirovany_75.jpg', 4, 'news', 75, ''),
(76, '576fa3238d7d2.jpg', 0, 'news', 76, 'fceb471460d21c2999d8fce09cb7932774b02e2c'),
(77, 'black--white-party--versenz-cafe_77.jpg', 5, 'news', 77, ''),
(78, 's-pesnej-po-zhizni-voice-vocal-club---let_78.jpg', 6, 'news', 78, ''),
(79, 'samir-login-v-proekte-antiprofy-v-voice-vocal-club-karaoke_79.jpg', 7, 'news', 79, ''),
(80, '57737769d5684.png', 0, 'products', 80, '6f71517191b2898d7b3457e2fa8c19c73d2f7282'),
(81, 'levis_81.png', 19, 'products', 81, ''),
(82, 'sample-club_82.jpg', 20, 'products', 82, ''),
(86, 'barhat_86.png', 21, 'products', 86, ''),
(89, 'andys-pizza_89.jpg', 7, 'products', 89, ''),
(91, 'andys-pizza_91.jpg', 7, 'products', 91, ''),
(92, 'andys-pizza_92.jpg', 7, 'products', 92, ''),
(94, '5776156331143.jpg', 0, 'products', 94, 'dd39c3d6257e6794a85918238de7ac42321b59d1'),
(96, '57761b3778610.jpg', 0, 'products', 96, '0e573ee5cb92c26e2064a38bfdcaf9a35079143f'),
(97, '57761b3e53d52.png', 0, 'products', 97, '50197850e059b19e294d64cb8175f24fb37c677f'),
(98, '57761b4595cc3.jpg', 0, 'products', 98, '360d532d8a1cb3dcb78f4321cf445deed321c7ea'),
(99, '57761b4aaf1ca.jpg', 0, 'products', 99, '027090e92beee659600cfe9e083e59e940dc3358'),
(100, '57761b4f8364b.jpg', 0, 'products', 100, '26480a1c8faaa727f7f6b77e7274c266a6c46f1d'),
(101, '57761b816df16.jpg', 0, 'products', 101, '8e0e7c90540f16f8c92d6de150869fb08df3a519'),
(102, '57761b859e76a.png', 0, 'products', 102, '040991315dabfccbaa6b9b36d299f5b3d89f7cc0'),
(103, '57761b8bb2448.jpg', 0, 'products', 103, 'cf4308c701fd2b1e303bccd6356b1dddcfbb9a40'),
(104, '57761b8f4b313.jpg', 0, 'products', 104, '0feff1e2c90a5d0385042bc0229b796aaa4e8344'),
(105, '577622893709f.jpg', 0, 'products', 105, '16ccc3439675a89d785217d91b06deb7b9cff16b'),
(106, '577622923f0ac.png', 0, 'products', 106, 'e262b71125e7baecb400ab0671ad1f862f44a415'),
(107, '5776234f9ae51.jpg', 0, 'products', 107, '4522e0f0b304b34d089781343a03d6fe6e30003e'),
(108, '577623531e1b7.jpg', 0, 'products', 108, '61c4d04d520acd728bcc67315fd0469ca3fd4e9e'),
(109, '577624e670ae4.jpg', 0, 'products', 109, '1272a745afe166313800d4d1e78cfc58ba49eb53'),
(110, '577624e9d96cc.png', 0, 'products', 110, 'cd3f24a9be0bb4b0f852971b96122924e4a53a11'),
(111, '5776258b2a78e.jpg', 0, 'products', 111, 'f1c8f55e1080781ba0eab5290e60ed06bfb6d590'),
(112, '5776258f6af95.jpg', 0, 'products', 112, 'e4acd382abf86d23310235c13274858615da14b2'),
(113, '5776259229dd6.jpg', 0, 'products', 113, 'ec4766cffcf25a4394dce39da8376de3ad649491'),
(114, '57762721a4b5d.jpg', 0, 'products', 114, 'dab50726ae5b756007238f93a2b6f9f666b7d86a'),
(115, '577627249ef0e.png', 0, 'products', 115, '97882bfa07ccec281c3d20c330b1c74a0e8abd91'),
(116, '577643466c6e1.jpg', 0, 'products', 116, '8e9f51819b53484a8616876681cbade38b9f0012'),
(117, 'mojito_117.jpg', 10, 'products', 117, ''),
(119, '5789fe7f31e18.jpg', 0, 'products', 119, 'c35f537e054e665778e8f226159c21231545370e'),
(121, '578a042cefabc.jpg', 0, 'hall_plan', 120, '03e3f38165fe5f2344b76850c188600e226d1d18'),
(123, '578a04768c255.png', 0, 'products', 123, '0d73ac624693c4c7b35ce1d3d058e7c6e2a0a76b'),
(124, '578a04823df8b.png', 0, 'products', 124, '092f4fa541547d369a54070843365faffbf6e4a6'),
(125, '578a048e0e2d6.png', 0, 'products', 125, '3fe914c0dd12d98b5c76698a1d7700f75a288eb1'),
(129, 'galereya-_129.jpg', 1, 'galleries', 129, ''),
(130, 'galereya-_130.jpg', 1, 'galleries', 130, ''),
(131, 'galereya-_131.jpg', 1, 'galleries', 131, ''),
(132, 'galereya-_132.jpg', 1, 'galleries', 132, ''),
(133, 'galereya-_133.jpg', 1, 'galleries', 133, ''),
(136, 'andys-pizza_136.jpg', 7, 'background', 136, ''),
(137, '57933da1e4a43.jpg', 2, 'menu_products', 137, ''),
(138, '57933da1b5c6d.jpg', 2, 'menu_products', 138, ''),
(139, '57933da199672.jpg', 2, 'menu_products', 139, ''),
(140, '57933ed4f24d2.jpg', 3, 'menu_products', 140, ''),
(141, 'andys-pizza_141.jpg', 7, 'hall_plan', 134, ''),
(142, 'andys-pizza_142.png', 7, 'hall_plan', 142, ''),
(145, 'andys-pizza_145.png', 7, 'hall_plan', 145, ''),
(146, 'andys-pizza_146.jpg', 7, 'hall_plan', 146, ''),
(147, 'andys-pizza_147.jpg', 7, 'hall_plan', 147, ''),
(148, 'fotogallereya_148.jpg', 2, 'galleries', 148, ''),
(149, 'fotogallereya_149.jpg', 2, 'galleries', 149, ''),
(150, 'fotogallereya_150.jpg', 2, 'galleries', 150, ''),
(151, 'fotogallereya_151.jpg', 2, 'galleries', 151, ''),
(152, '57b40ded46305.jpg', 0, 'galleries', 152, 'b3e38911bf170c7ac82929d84990f4a2bdf3940b'),
(153, '57b40ded3cb1f.jpg', 0, 'galleries', 153, 'c0a8761200fe2f3a74a2db729e8a41c30a7a953b'),
(154, '57b40ded42e19.jpg', 0, 'galleries', 154, '0632a48f6ebc2bb93f9517d02fd5afed4e860288'),
(155, '57b40ded3f25d.jpg', 0, 'galleries', 155, 'd73d20daafb35584da69d66770fc899715ed80e9'),
(156, '57b40ded709eb.jpg', 0, 'galleries', 156, '89a29ed286a17f6b350d1f3bf81d63e37f8a20f9'),
(157, '123_157.jpg', 4, 'galleries', 157, ''),
(158, '123_158.jpg', 4, 'galleries', 158, ''),
(159, '123_159.jpg', 4, 'galleries', 159, ''),
(160, '123_160.jpg', 4, 'galleries', 160, ''),
(161, '123_161.jpg', 3, 'galleries', 161, ''),
(162, '123_162.jpg', 3, 'galleries', 162, ''),
(163, '123_163.jpg', 3, 'galleries', 163, ''),
(165, 'ss_165.jpg', 5, 'galleries', 165, ''),
(166, 'dsd_166.jpg', 6, 'galleries', 166, ''),
(167, 'dfafd_167.jpg', 8, 'news', 167, ''),
(168, '57bad9aee6ac3.jpg', 4, 'menu_products', 168, ''),
(172, 'krysha_172.jpg', 8, 'background', 172, ''),
(173, 'asdd_173.jpg', 9, 'news', 173, ''),
(174, 'dasd_174.jpg', 10, 'news', 174, ''),
(176, 'krysha_176.jpg', 8, 'hall_plan', 179, ''),
(177, 'krysha_177.jpg', 8, 'hall_plan', 177, ''),
(178, 'krysha_178.jpg', 8, 'hall_plan', 178, ''),
(179, 'krysha_179.jpg', 8, 'hall_plan', 176, ''),
(181, 'krysha_181.jpg', 8, 'hall_plan', 181, ''),
(182, 'weekend_182.jpg', 7, 'galleries', 188, ''),
(183, 'weekend_183.jpg', 7, 'galleries', 183, ''),
(184, 'weekend_184.jpg', 7, 'galleries', 184, ''),
(185, 'weekend_185.jpg', 7, 'galleries', 185, ''),
(186, 'weekend_186.jpg', 7, 'galleries', 186, ''),
(187, 'weekend_187.jpg', 7, 'galleries', 187, ''),
(188, 'weekend_188.jpg', 7, 'galleries', 182, ''),
(189, 'weekend_189.jpg', 7, 'galleries', 189, ''),
(190, 'weekend_190.jpg', 7, 'galleries', 190, ''),
(191, 'weekend_191.jpg', 7, 'galleries', 191, ''),
(196, '57e0f873c5fe9.jpg', 0, 'products', 196, 'd9d3e9f7cb98b29aeaed5242dd42462a2eabf9d1'),
(197, '57e0f8b1f4066.jpg', 0, 'products', 197, 'fcf2feb504437a5c8facd985fcf585da2fe8bbeb'),
(198, '57e0f8f15d2da.jpg', 0, 'products', 198, '83383bb68399f9b8b2c2b2a47bb868ceb116bda7'),
(199, 'famous_199.jpg', 23, 'products', 199, ''),
(200, 'famous_200.jpg', 23, 'products', 200, ''),
(201, 'famous_201.jpg', 23, 'products', 201, ''),
(202, '57e0fc793bfd0.jpg', 0, 'galleries', 202, '0b70dfb75dbb6e193897056fe3e62eb94138e049'),
(203, '57e0fc909dab9.jpg', 0, 'galleries', 203, '13845a075a5ab94c2811c29f210a1530d41fda67'),
(204, '57e0fc94d17a4.jpg', 0, 'galleries', 204, '0c8cf2c687cf8976fc8a40422baf451ef3c64cc2'),
(205, '57e0fca2d6ed9.jpg', 0, 'galleries', 205, 'a6a30947849cec08dbd7245e0241d23577cf04b8'),
(206, '57e0fca98c41e.jpg', 0, 'galleries', 206, 'fb96f6596ccdae824dc6b7517de3944d68011e72'),
(207, '57e0fcc1dbf8f.jpg', 0, 'galleries', 207, '5f6fe9c1b92fa9012b69ced8b0eb5d280d12d4a8'),
(208, '57e0fcd2eebf5.jpg', 0, 'galleries', 208, '3bcb6cca02875ea8c5b023e843a626f842a6173a'),
(209, '57e0fcedd4e5f.jpg', 0, 'galleries', 209, '29299c680059beac0eb6a816600b4afff79929fd'),
(210, '57e0fcfd575f8.jpg', 0, 'galleries', 210, '94449b5d133c0985cd4111a182c3bdc45114644b'),
(211, '57e0fd144d3f6.jpg', 0, 'galleries', 211, '4d49d0b402cc0f59ddb2e5d401c056a5cee69a3f'),
(212, 'Paparazzi_212.jpg', 22, 'products', 212, ''),
(213, 'paparazzi_213.jpg', 22, 'products', 213, ''),
(215, '57ea45d8bbb4d.png', 0, 'products', 215, 'a96426a2970b65251746270542313f05d63adbe0'),
(216, 'andrei-zveaghintev_216.png', 24, 'products', 216, ''),
(217, 'andrei-zveaghintev_217.jpg', 24, 'products', 217, ''),
(218, 'andrei-zveaghintev_218.jpg', 24, 'products', 218, ''),
(219, 'andrei-zveaghintev_219.jpg', 24, 'background', 219, ''),
(220, 'andrei-zveaghintev_220.jpg', 24, 'hall_plan', 220, ''),
(221, 'andrei-zveaghintev_221.jpg', 24, 'hall_plan', 221, ''),
(222, 'sky-bar_222.png', 25, 'products', 222, ''),
(223, 'sky-bar_223.jpg', 25, 'products', 223, ''),
(224, 'sky-bar_224.jpg', 25, 'products', 224, ''),
(225, 'sfinx-_225.jpg', 26, 'products', 225, ''),
(228, '57fd5879dc498.jpg', 0, 'products', 228, '76ca5716967091e4cd2de45fc9643465116f4696'),
(229, '57fd587f572ee.jpg', 0, 'products', 229, 'd7e07c32bbf5a8552bd15e6801108424d24017e4'),
(230, '57fd5883514e4.jpg', 0, 'products', 230, '28b41563b2cebeceecc651a6f1401dae50ea485d'),
(231, 'military_231.jpg', 27, 'products', 231, ''),
(232, 'military_232.jpg', 27, 'products', 232, ''),
(233, 'military_233.jpg', 27, 'products', 233, ''),
(234, 'the-penthouse_234.jpg', 28, 'products', 234, ''),
(235, 'the-penthouse_235.jpg', 28, 'products', 235, ''),
(236, 'the-penthouse_236.jpg', 28, 'products', 236, ''),
(238, 'sensi-bar_238.png', 29, 'products', 238, ''),
(239, 'sensi-bar_239.jpg', 29, 'products', 239, ''),
(240, 'sensi-bar_240.png', 29, 'products', 240, ''),
(241, 'sensi-bar_241.png', 29, 'products', 241, ''),
(242, 'pinkmartini_242.jpg', 30, 'products', 242, ''),
(245, 'pinkmartini_245.jpg', 30, 'products', 245, ''),
(248, 'pinkmartini_248.jpg', 30, 'products', 248, ''),
(249, 'pinkmartini_249.jpg', 30, 'products', 249, ''),
(250, 'lazy-by-pink_250.jpg', 31, 'products', 250, ''),
(251, 'lazy-by-pink_251.jpg', 31, 'products', 251, ''),
(252, 'lazy-by-pink_252.jpg', 31, 'products', 252, ''),
(253, 'lazy-by-pink_253.jpg', 31, 'products', 253, ''),
(254, 'art-club_254.png', 32, 'products', 254, ''),
(255, 'art-club_255.jpg', 32, 'products', 255, ''),
(256, 'art-club_256.jpg', 32, 'products', 256, ''),
(257, 'motif_257.jpg', 33, 'products', 257, ''),
(258, 'motif_258.jpg', 33, 'products', 258, ''),
(259, 'motif_259.jpg', 33, 'products', 259, ''),
(260, '580dc5bd74fd2.jpg', 5, 'menu_products', 260, ''),
(261, '580dc5bd74f8d.jpg', 5, 'menu_products', 261, ''),
(262, '580dc5bd74edc.jpg', 5, 'menu_products', 262, ''),
(263, '580dc5bd9e8ae.jpg', 5, 'menu_products', 263, ''),
(264, '580dc5e98eb23.jpeg', 6, 'menu_products', 264, ''),
(265, '580dc5e98f5a5.jpeg', 6, 'menu_products', 265, ''),
(266, '580dc5e9c18f3.jpeg', 6, 'menu_products', 266, ''),
(267, '5810f138735fd.jpg', 0, 'products', 267, '66119e1d599f567940c065d3b76ff4594ea94e8a'),
(268, '5810f13eed999.jpg', 0, 'products', 268, 'c3fa73dcdad77c9c92d50eb6c5c03e43327c1b5c'),
(269, 'cello-romantico_269.jpg', 34, 'products', 269, ''),
(270, 'cello-romantico_270.jpg', 34, 'products', 270, ''),
(271, 'premium-events_271.jpg', 35, 'products', 271, ''),
(272, 'premium-events_272.png', 35, 'products', 272, ''),
(273, 'premium-events_273.jpg', 35, 'products', 273, ''),
(274, 'premium-events_274.jpg', 35, 'products', 274, ''),
(275, 'barhat_275.jpg', 21, 'products', 275, ''),
(276, 'barhat_276.jpg', 21, 'products', 276, ''),
(277, 'barhat_277.jpg', 21, 'products', 277, ''),
(279, 'jantic-photography_279.jpg', 36, 'products', 280, ''),
(280, 'jantic-photography_280.jpg', 36, 'products', 281, ''),
(281, 'jantic-photography_281.jpg', 36, 'products', 282, ''),
(282, 'jantic-photography_282.png', 36, 'products', 279, ''),
(283, 'gazetto_283.jpg', 37, 'products', 283, ''),
(284, 'gazetto_284.jpg', 37, 'products', 284, ''),
(285, 'gazetto_285.jpg', 37, 'products', 285, ''),
(286, 'gazetto_286.jpg', 37, 'products', 286, ''),
(287, 'versenz-cafe_287.jpg', 38, 'products', 287, ''),
(288, 'versenz-cafe_288.jpg', 38, 'products', 288, ''),
(290, '58139442864d5.jpg', 0, 'products', 290, '9049447bf7c3f9b9913f846925d94a3c998ed25e'),
(291, 'wagon_291.jpg', 39, 'products', 291, ''),
(292, 'wagon_292.jpg', 39, 'products', 292, ''),
(293, '581399ddb6566.jpg', 0, 'products', 293, '96b4489058a3b27057989b40adc3f0d1ab55ef6f'),
(294, 'penthouse 21.10_294.jpg', 8, 'galleries', 294, ''),
(295, 'penthouse 21.10_295.jpg', 8, 'galleries', 295, ''),
(296, 'penthouse 21.10_296.jpg', 8, 'galleries', 296, ''),
(297, 'penthouse 21.10_297.jpg', 8, 'galleries', 297, ''),
(298, 'penthouse 21.10_298.jpg', 8, 'galleries', 298, ''),
(299, 'penthouse 21.10_299.jpg', 8, 'galleries', 299, ''),
(300, 'penthouse 21.10_300.jpg', 8, 'galleries', 300, ''),
(301, 'penthouse 21.10_301.jpg', 8, 'galleries', 301, ''),
(302, 'penthouse 21.10_302.jpg', 8, 'galleries', 302, ''),
(303, 'penthouse 21.10_303.jpg', 8, 'galleries', 303, ''),
(304, 'penthouse 21.10_304.jpg', 8, 'galleries', 304, ''),
(305, 'penthouse 21.10_305.jpg', 8, 'galleries', 305, ''),
(306, 'penthouse 21.10_306.jpg', 8, 'galleries', 306, ''),
(307, 'penthouse 21.10_307.jpg', 8, 'galleries', 307, ''),
(308, 'penthouse 21.10_308.jpg', 8, 'galleries', 308, ''),
(309, 'penthouse 21.10_309.jpg', 8, 'galleries', 309, ''),
(310, 'penthouse 21.10_310.jpg', 8, 'galleries', 310, ''),
(311, 'penthouse 21.10_311.jpg', 8, 'galleries', 311, ''),
(312, 'penthouse 21.10_312.jpg', 8, 'galleries', 312, ''),
(313, 'penthouse 21.10_313.jpg', 8, 'galleries', 313, ''),
(314, 'penthouse 21.10_314.jpg', 8, 'galleries', 314, ''),
(315, 'penthouse 21.10_315.jpg', 8, 'galleries', 315, ''),
(316, 'penthouse 21.10_316.jpg', 8, 'galleries', 316, ''),
(317, 'penthouse 21.10_317.jpg', 8, 'galleries', 317, ''),
(318, 'penthouse 21.10_318.jpg', 8, 'galleries', 318, ''),
(319, 'penthouse 21.10_319.jpg', 8, 'galleries', 319, ''),
(320, 'penthouse 21.10_320.jpg', 8, 'galleries', 320, ''),
(321, 'penthouse 21.10_321.jpg', 8, 'galleries', 321, ''),
(322, 'penthouse 21.10_322.jpg', 8, 'galleries', 322, ''),
(323, 'penthouse 21.10_323.jpg', 8, 'galleries', 323, ''),
(324, 'penthouse 21.10_324.jpg', 8, 'galleries', 324, ''),
(325, 'penthouse 21.10_325.jpg', 8, 'galleries', 325, ''),
(326, 'penthouse 21.10_326.jpg', 8, 'galleries', 326, ''),
(327, 'penthouse 21.10_327.jpg', 8, 'galleries', 327, ''),
(328, 'penthouse 21.10_328.jpg', 8, 'galleries', 328, ''),
(329, 'penthouse 21.10_329.jpg', 8, 'galleries', 329, ''),
(330, 'penthouse 21.10_330.jpg', 8, 'galleries', 330, ''),
(331, 'penthouse 21.10_331.jpg', 8, 'galleries', 331, ''),
(332, 'penthouse 21.10_332.jpg', 8, 'galleries', 332, ''),
(333, 'penthouse 21.10_333.jpg', 8, 'galleries', 333, ''),
(334, 'penthouse 21.10_334.jpg', 8, 'galleries', 334, ''),
(335, 'penthouse 21.10_335.jpg', 8, 'galleries', 335, ''),
(336, 'penthouse 21.10_336.jpg', 8, 'galleries', 336, ''),
(337, 'penthouse 21.10_337.jpg', 8, 'galleries', 337, ''),
(338, 'penthouse 21.10_338.jpg', 8, 'galleries', 338, ''),
(339, 'penthouse 21.10_339.jpg', 8, 'galleries', 339, ''),
(340, 'penthouse 21.10_340.jpg', 8, 'galleries', 340, ''),
(341, 'penthouse 21.10_341.jpg', 8, 'galleries', 341, ''),
(342, 'penthouse 21.10_342.jpg', 8, 'galleries', 342, ''),
(343, 'penthouse 21.10_343.jpg', 8, 'galleries', 343, ''),
(344, 'penthouse 21.10_344.jpg', 8, 'galleries', 344, ''),
(345, 'penthouse 21.10_345.jpg', 8, 'galleries', 345, ''),
(346, 'penthouse 21.10_346.jpg', 8, 'galleries', 346, ''),
(347, 'penthouse 21.10_347.jpg', 8, 'galleries', 347, ''),
(348, 'penthouse 21.10_348.jpg', 8, 'galleries', 348, ''),
(349, 'penthouse 21.10_349.jpg', 8, 'galleries', 349, ''),
(350, 'penthouse 21.10_350.jpg', 8, 'galleries', 350, ''),
(351, 'penthouse 21.10_351.jpg', 8, 'galleries', 351, ''),
(352, 'penthouse 21.10_352.jpg', 8, 'galleries', 352, ''),
(353, 'penthouse 21.10_353.jpg', 8, 'galleries', 353, ''),
(354, 'penthouse 21.10_354.jpg', 8, 'galleries', 354, ''),
(355, 'penthouse 21.10_355.jpg', 8, 'galleries', 355, ''),
(356, 'penthouse 21.10_356.jpg', 8, 'galleries', 356, ''),
(357, 'penthouse 21.10_357.jpg', 8, 'galleries', 357, ''),
(358, 'penthouse 21.10_358.jpg', 8, 'galleries', 358, ''),
(359, 'penthouse 21.10_359.jpg', 8, 'galleries', 359, ''),
(360, 'penthouse 21.10_360.jpg', 8, 'galleries', 360, ''),
(361, 'penthouse 21.10_361.jpg', 8, 'galleries', 361, ''),
(362, 'sherlock-holmes-pub_362.png', 40, 'products', 362, ''),
(363, 'sherlock-holmes-pub_363.jpg', 40, 'products', 363, ''),
(364, 'sherlock-holmes-pub_364.jpg', 40, 'products', 364, ''),
(365, 'sherlock-holmes-pub_365.jpg', 40, 'products', 365, ''),
(366, '58358dec21e03.png', 0, 'products', 366, 'b5ba475c0a4e02b2e6d05922f24971faddb9e4db'),
(367, '58358e023b7bf.jpg', 0, 'products', 367, '60079216bda4bcaef544c697c14b30d12f92b7e6'),
(368, '58358e03150ed.png', 0, 'products', 368, '19916e213c582c185231d146298782f065d59a3f'),
(369, '58358e03bcaf5.png', 0, 'products', 369, '017a4eaeacc4f744cad6328a61164eec060a06dc'),
(370, '58358e983f5fe.png', 0, 'background', 370, '70d6da3f4cca2921994f9206a184debfe0cbc678'),
(371, 'sky-bar_371.png', 41, 'products', 371, ''),
(372, 'sky-bar_372.jpg', 41, 'products', 372, ''),
(373, 'sky-bar_373.png', 41, 'products', 373, ''),
(374, 'sky-bar_374.png', 41, 'products', 374, ''),
(375, 'sky-bar_375.png', 41, 'background', 375, ''),
(376, 'cocos-prive_376.jpg', 42, 'products', 376, ''),
(377, 'cocos-prive_377.jpg', 42, 'products', 377, ''),
(378, 'cocos-prive_378.jpg', 42, 'products', 378, ''),
(379, 'cocos-prive_379.jpg', 42, 'products', 379, ''),
(381, '583dfc19854c3.JPG', 7, 'menu_products', 381, ''),
(382, '583dfdc72b264.jpg', 8, 'menu_products', 382, ''),
(383, '583dfec96b32a.jpg', 9, 'menu_products', 383, ''),
(384, 'jacks-bargrill_384.jpg', 43, 'products', 384, ''),
(385, 'jacks-bargrill_385.jpg', 43, 'products', 385, ''),
(386, 'jacks-bargrill_386.jpg', 43, 'products', 386, ''),
(387, 'jacks-bargrill_387.jpg', 43, 'products', 387, ''),
(388, 'black-chocolate-karaoke-night-club_388.jpg', 44, 'products', 388, ''),
(389, 'black-chocolate-karaoke-night-club_389.jpg', 44, 'products', 389, ''),
(390, 'mojito-barterrace_390.jpg', 45, 'products', 390, ''),
(391, 'mojito-barterrace_391.jpg', 45, 'products', 391, ''),
(392, 'gastrobar_392.jpg', 46, 'products', 392, ''),
(393, 'gastrobar_393.jpg', 46, 'products', 393, ''),
(394, 'gastrobar_394.jpg', 46, 'products', 394, ''),
(395, 'gastrobar_395.jpg', 46, 'products', 395, ''),
(396, 'gastrobar_396.jpg', 46, 'products', 396, ''),
(397, 'home-karaoke_397.jpg', 47, 'products', 397, ''),
(398, 'home-karaoke_398.jpg', 47, 'products', 398, ''),
(399, 'home-karaoke_399.jpg', 47, 'products', 399, ''),
(400, 'decadance_400.jpg', 48, 'products', 400, ''),
(401, 'decadance_401.jpg', 48, 'products', 401, ''),
(402, 'kremlin-karaoke_402.png', 49, 'products', 402, ''),
(403, 'kremlin-karaoke_403.jpg', 49, 'products', 403, ''),
(404, 'voice-vocal-karaoke_404.jpg', 50, 'products', 404, ''),
(405, 'voice-vocal-karaoke_405.jpg', 50, 'products', 405, ''),
(406, 'art-karaoke_406.png', 51, 'products', 406, ''),
(407, 'art-karaoke_407.jpg', 51, 'products', 407, ''),
(408, 'drugoe-mesto_408.png', 52, 'products', 408, ''),
(409, 'drugoe-mesto_409.jpg', 52, 'products', 409, ''),
(410, '584c0b33f0730.jpg', 0, 'products', 410, '078f91bb59dca21d64100646452a376a4f79180f'),
(411, '584c0b3d7085b.jpg', 0, 'products', 411, 'c855a728504df031bc529c483a97b61f9f6ba6f5'),
(412, 'fanconi_412.jpg', 53, 'products', 412, ''),
(413, 'fanconi_413.jpg', 53, 'products', 413, ''),
(414, 'flamingo_414.jpg', 54, 'products', 414, ''),
(415, 'flamingo_415.jpg', 54, 'products', 415, ''),
(416, 'godzila-karaoke_416.jpg', 55, 'products', 416, ''),
(417, 'godzila-karaoke_417.jpg', 55, 'products', 417, ''),
(418, 'concert-hall-atrium_418.jpg', 56, 'products', 418, ''),
(419, 'concert-hall-atrium_419.png', 56, 'products', 419, ''),
(420, 'muzcafe-karaoke_420.jpg', 57, 'products', 420, ''),
(421, 'muzcafe-karaoke_421.jpg', 57, 'products', 421, ''),
(422, 'plaza-karaoke-_422.jpg', 58, 'products', 422, ''),
(423, 'plaza-karaoke-_423.jpg', 58, 'products', 423, ''),
(424, 'rust-club_424.jpg', 59, 'products', 424, ''),
(425, 'rust-club_425.jpg', 59, 'products', 425, ''),
(426, '584e4781a738f.jpg', 0, 'products', 426, '4de5ffdba1b81a37405c38e71641138cb1280111'),
(427, '584e478800ad4.jpg', 0, 'products', 427, 'd9bd30c74aa2829c3c8f4c30c63ea67890feb8cf'),
(428, 'trio_428.jpg', 60, 'products', 428, ''),
(430, 'trio_430.jpg', 60, 'products', 430, ''),
(431, 'vox-karaoke_431.jpg', 61, 'products', 431, ''),
(432, 'vox-karaoke_432.jpg', 61, 'products', 432, ''),
(433, 'blinoff_433.jpg', 62, 'products', 433, ''),
(434, 'blinoff_434.png', 62, 'products', 434, ''),
(435, '584e4d2d7d999.jpg', 0, 'products', 435, '6b536c97502ca77b9dafd006f49735d50a3d5522'),
(436, '584e4d3c1c86a.jpg', 0, 'products', 436, '2c24b1547cab4561cd6d58b91821e2126d405adb'),
(437, 'caffe-graffity_437.jpg', 63, 'products', 437, ''),
(438, 'caffe-graffity_438.jpg', 63, 'products', 438, ''),
(439, 'champ-cafe_439.png', 64, 'products', 439, ''),
(440, 'champ-cafe_440.jpg', 64, 'products', 440, ''),
(441, 'geography-of-taste_441.png', 65, 'products', 441, ''),
(442, 'geography-of-taste_442.jpg', 65, 'products', 442, ''),
(443, 'la-sarkis_443.jpg', 66, 'products', 443, ''),
(444, 'la-sarkis_444.jpg', 66, 'products', 444, ''),
(445, 'me-gusto_445.jpg', 67, 'products', 445, ''),
(446, 'me-gusto_446.jpg', 67, 'products', 446, ''),
(447, 'midpoint_447.jpg', 68, 'products', 447, ''),
(448, 'midpoint_448.jpg', 68, 'products', 448, ''),
(449, 'piano-bar_449.jpg', 69, 'products', 449, ''),
(450, 'piano-bar_450.jpg', 69, 'products', 450, ''),
(451, 'garden-palace_451.jpg', 70, 'products', 451, ''),
(452, 'garden-palace_452.jpg', 70, 'products', 452, ''),
(453, 'club-royal-park_453.jpg', 71, 'products', 453, ''),
(454, 'club-royal-park_454.jpg', 71, 'products', 454, ''),
(455, 'select-banquet-hall_455.jpg', 72, 'products', 455, ''),
(456, 'select-banquet-hall_456.jpg', 72, 'products', 456, ''),
(457, 'restaurantul-prezident_457.jpg', 73, 'products', 457, ''),
(458, 'restaurantul-prezident_458.jpg', 73, 'products', 458, ''),
(459, 'marry-me-banquet-hall_459.jpg', 74, 'products', 459, ''),
(460, 'marry-me-banquet-hall_460.jpg', 74, 'products', 460, ''),
(461, 'Banquet-premium_461.jpg', 75, 'products', 461, ''),
(462, 'Banquet-premium_462.jpg', 75, 'products', 462, ''),
(463, 'restaurant-acasa-la-mama_463.png', 76, 'products', 463, ''),
(464, 'restaurant-acasa-la-mama_464.jpg', 76, 'products', 464, ''),
(465, 'restaurant-vila-veche_465.jpg', 77, 'products', 465, ''),
(466, 'restaurant-vila-veche_466.jpg', 77, 'products', 466, ''),
(467, 'restaurant-vikont_467.jpg', 78, 'products', 467, ''),
(468, 'restaurant-vikont_468.jpg', 78, 'products', 468, ''),
(469, 'restaurant-luceafarul_469.jpg', 79, 'products', 469, ''),
(470, 'restaurant-luceafarul_470.jpg', 79, 'products', 470, ''),
(471, 'wed-awards_471.jpg', 80, 'products', 471, ''),
(472, 'wed-awards_472.jpg', 80, 'products', 472, ''),
(473, 'fotoland_473.jpg', 81, 'products', 473, ''),
(474, 'fotoland_474.jpg', 81, 'products', 474, ''),
(475, 'picproduction_475.jpg', 82, 'products', 475, ''),
(476, 'picproduction_476.png', 82, 'products', 476, ''),
(477, 'welyon-studio_477.png', 83, 'products', 477, ''),
(478, 'welyon-studio_478.jpg', 83, 'products', 478, ''),
(479, 'selfiebox_479.jpg', 84, 'products', 479, ''),
(480, 'selfiebox_480.jpg', 84, 'products', 480, ''),
(481, 'vipstudio_481.jpg', 85, 'products', 481, ''),
(482, 'vipstudio_482.jpg', 85, 'products', 482, ''),
(485, 'hotels_485.png', 40, 'categories', 485, ''),
(486, 'chocolate-karaoke-club_486.jpg', 16, 'products', 486, ''),
(488, 'drive_488.jpg', 17, 'products', 488, ''),
(489, 'sfinx_489.jpg', 26, 'products', 489, ''),
(490, 'afisha_490.jpg', 13, 'categories', 513, ''),
(492, 'svadiby_492.jpg', 6, 'categories', 0, ''),
(493, 'korporativy_493.jpg', 7, 'categories', 5, ''),
(495, 'kluby_495.jpg', 5, 'categories', 494, ''),
(496, 'restorany-kafe_496.jpg', 8, 'categories', 497, ''),
(497, 'restorany-kafe_497.jpg', 8, 'categories', 10, ''),
(498, 'vypusknoj_498.jpg', 10, 'categories', 7, ''),
(499, 'event-menedzher-organizator_499.png', 14, 'categories', 499, ''),
(500, 'zagsy-czerkvi_500.png', 15, 'categories', 500, ''),
(501, 'svadebnaya-obuvi-i-aksessuary_501.png', 16, 'categories', 501, ''),
(502, 'vedushhij-tamada_502.png', 23, 'categories', 502, ''),
(503, 'torty-kalachi-vkusnyashki_503.png', 22, 'categories', 503, ''),
(504, 'restorany-banketnye-zaly-otkrytye-ploshhadki_504.png', 21, 'categories', 504, ''),
(505, 'foto-video_505.png', 20, 'categories', 505, ''),
(506, 'svadebnyj-tanecz_506.png', 19, 'categories', 506, ''),
(507, 'muzhskie-kostyumy_507.png', 18, 'categories', 507, ''),
(508, 'live-beat_508.jpg', 86, 'products', 508, ''),
(509, 'live-beat_509.jpg', 86, 'products', 509, ''),
(510, 'live-beat_510.jpg', 86, 'products', 510, ''),
(511, 'krestiny_511.jpg', 9, 'categories', 6, ''),
(512, 'deni-rojdenia_512.jpg', 11, 'categories', 11, ''),
(513, 'afisha_513.jpg', 13, 'categories', 490, ''),
(514, 'detskie-prazdniki_514.jpg', 12, 'categories', 12, ''),
(515, 'svadebnye-i-vechernie-platiya_515.png', 17, 'categories', 515, ''),
(516, 'floristy_516.png', 27, 'categories', 516, ''),
(518, 'svetovoe-zvukovoe-oborudovanie_518.png', 25, 'categories', 518, ''),
(522, 'sport_522.png', 1, 'tags', 522, ''),
(523, 'leningrad-konczert-v-kishinyove_523.jpg', 14, 'news', 523, ''),
(524, 'eco-run_524.jpg', 15, 'news', 524, ''),
(525, 'v-kishinyove-sostoyalsya-grandioznyj-konczert-gruppirovki-leningrad_525.jpg', 17, 'news', 525, ''),
(526, 'priem-zayavok-na-uchastie-v-konkurse-evrovidenie-zavershilsya_526.jpg', 18, 'news', 526, ''),
(527, 'priem-zayavok-na-uchastie-v-konkurse-evrovidenie-zavershilsya_527.jpg', 19, 'news', 527, ''),
(528, '-maya-v-kishineve-na-ploshhadke-moldexpo-otygral-dvuxchasovoj-set-gollandecz-armin-van-byuren_528.jpg', 20, 'news', 528, ''),
(529, 'dont-worry-be-hippie--sky-bar_529.jpg', 21, 'news', 529, ''),
(530, 'zimnij-chempionat-po-plavaniyu-sredi-lyubitelej-i-veteranov_530.png', 22, 'news', 530, ''),
(531, 'kremlin-karaoke-room-w-vali-barbulescu_531.jpg', 23, 'news', 531, ''),
(532, 'dvoe-na-kachelyax_532.jpg', 24, 'news', 532, ''),
(533, '5883fe5ba572f.jpg', 0, 'news', 533, 'dcc42af29c7b2613b04a1c2f06cf4c02d878e4d6'),
(534, '5884a5e77b6c4.png', 1, 'links', 534, ''),
(535, '5884a60db6f8e.png', 2, 'links', 535, ''),
(536, '5884a65468268.png', 3, 'links', 536, ''),
(537, '5884a78182c17.png', 4, 'links', 537, ''),
(538, '5884a7af09958.png', 5, 'links', 538, ''),
(539, '5884a7ea9219d.png', 6, 'links', 539, ''),
(540, '5884a8fc49873.png', 8, 'links', 540, ''),
(541, '5884a94d00d73.png', 9, 'links', 541, '');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double(15,2) NOT NULL,
  `map` text COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `top` tinyint(1) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `price`, `map`, `video`, `enabled`, `top`, `type`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(8, 'Krysha', 'Krysha', 'Krysha', '<p>Отдельного внимания заслуживает наша терраса под открытым небом. Уникальная терраса <strong>LOUNGE-CAFÉ «KRYSHA»</strong>, которая располагается на пятом этаже коммерческого центра <strong>«Sun City»</strong>, позволит Вам полюбоваться уникальными пейзажами городского центрального парка и ночными огнями столицы. Уютные диванные зоны, легкая музыка, стильный интерьер и свежий воздух – поистине отдых «НА ВЫСОТЕ».<br />\r\n<br />\r\nК организации праздничного вечера в <strong>LOUNGE-CAFÉ «KRYSHA»</strong> подойдут профессионально: разработают план мероприятия, подберут ведущего, составят шоу-программу, пригласят артистов, оформят зал, продумают и разработают меню для фуршета и подарят массу приятных впечатлений.</p>\r\n', '<p>O atenție specială merită terasa noastră în aer liber. Unice Terasa LOUNGE-CAFÉ «Krysha», care este situat la etajul cinci al «Sun City» centru comercial vă va permite să se bucure de peisajul unic al parcului central de oraș și luminile de noapte ale capitalei. zonă confortabilă canapea, muzica usoara, aer curat interior si elegant - cu adevărat o vacanță de \"sus\".</p>\r\n\r\n<p>Prin organizarea unei seri festive în LOUNGE-CAFÉ «Krysha» profesionale adecvate: artiștii să elaboreze un plan de acțiune, se va ridica la conducere, face un program de spectacol, invitați vor desena o cameră, cred că peste și de a lucra din meniul pentru bufet și va da o mulțime de experiențe plăcute.</p>\r\n', '<p>Special attention deserves our terrace in the open air. Unique terrace LOUNGE-CAFÉ «KRYSHA», which is located on the fifth floor of «Sun City» shopping center, will allow you to enjoy the unique scenery of the city central park and the night lights of the capital. Cozy sofa area, light music, stylish interior and fresh air - truly a vacation \"on high\".</p>\r\n\r\n<p>By organizing a festive evening in the LOUNGE-CAFÉ «KRYSHA» suitable professional: develop an action plan, will pick up the lead, make a show program, invited artists will draw room, think over and work out the menu for the buffet and will give a lot of pleasant experiences.</p>\r\n', 'Атмосфера в стиле LOUNGE-CAFÉ «KRYSHA» не отвлекает от повседневности, а скорее украшает её.', 'Atmosfera din stilul LOUNGE-CAFÉ «Krysha» nu distrage de la viața de zi cu zi, ci mai degrabă o împodobește.', 'The atmosphere in the style LOUNGE-CAFÉ «KRYSHA» does not distract from everyday life, but rather adorns it.', 0.00, '{\"X\":\"47.01553761379499\",\"Y\":\"28.83718037604813\"}', '_dd4-HEPejU', 1, 1, 0, 0, 0, 'krysha', '2016-06-08 21:00:00', '2017-01-13 08:47:43'),
(16, 'Chocolate Karaoke Club', 'Chocolate Karaoke Club', 'Chocolate Karaoke Club', '', '', '', 'Караоке клуб \"Chocolate\"- качественный звук, приятная обстановка.', '', '', 0.00, '{\"X\":\"47.770735\",\"Y\":\"27.900334\"}', 'Jvll3SITGO8', 1, 0, 0, 0, 0, 'chocolate-karaoke-club', '2017-01-11 21:00:00', '2017-01-13 08:35:33'),
(17, 'Drive', 'Drive', 'Drive', '<p>6 октября 2007 года произошёл стремительный рывок в клубной жизни столицы Молдавии-вечером этого дня проходило гранд открытие клуба Drive,засвидетельствованное тысячной аудиторией и выступлениями Freemasons, Depest Blue и Андрея Фомина.С тех пор Drive-флагман кишинёвского клаббинга,клуб,приглашающим не менее полусотни громких house-звёзд в год,выпускающим ежегодные саунд релизы своих резидентов и&nbsp;организующим вечеринки,которые по уровню перфоманса способны соперничать с мероприятиями любого клубного бренда планеты.<br />\r\nНаши гости наслаждаются не только мощно звучащими музыкальными шедеврами,их глаз перманентно радуют дизайнерские изменения в интрьере,несандартные декорации и просто потрясающая работа светотехников-качество звука и светотехники не имеет аналогов в Кишинёве.Ну а слава хореографической составляющей шоу уже давно затмила многие столичные коллективы.<br />\r\nСгущать краски нашим завсегдатаям помогает эксклюзивная коктейльная карта-в ней около полутора сотни рзличных коктейлей-классика,фьюжн,креатив-всё это специально разработано командой опытных бартендеров.Что немаловажно-в клубе великолепная кухня,одно из самых нестандартных меню итальянской кухни,представленных в ночном мире нашего города.В нём можно найти достойный аккомпонемент к любому напитку из барного меню.<br />\r\nНи одно резюме не вместит в себя описание той энергичной атмосферы,которая является неотъемлимой составляющей популярности клуба.Наши хостесс и администраторы будут всегда рады помочь Вам как в личной беседе,так и в телефонном разговоре.<br />\r\n<br />\r\nНу а с 2009 года Drive стал собирать у себя в гостях все &quot;золотые голоса&quot; Кишинёва-на территории клуба открылся karaoke,который сразу стал любимым местом столичной публики.Дизайнеры и звукотехники поработали наславу-результат превосходит все ожидания.Без преувеличения лучшая музыкальная система,звучащая не полифоничным,а самым что ни на есть настоящим манером подкреплена одним из самых необычных для Кишинёва нововведений-специально предусмотренные вокалисты помогают нашим гостям придать звучанию исполняемых композиций мощь и максимально реальное звучание.<br />\r\nЗа прошедшие несколько лет клуб Drive снизыскал любовь многих людей,как отдыхающих,так и выступающих тут.Мы всегда будем рады новым лицам и плодотворном взаимоотношениям !</p>\r\n', '', '', '\"Drive\"- ночной клуб и караоке.', 'Drive ro', 'Drive eng', 0.00, '{\"X\":\"47.02423180399322\",\"Y\":\"28.831906846557544\"}', 'mp6FjRWo3kE', 1, 0, 0, 0, 0, 'drive', '2017-01-12 21:00:00', '2017-01-13 08:38:39'),
(21, 'BARHAT', 'BARHAT', 'BARHAT', '<p>В отличии от других салонов, Ваrhat предоставляет платье в прокат на два дня,а не на сутки. Если вы берёте в прокат вечернее платье,все аксессуары к нему:бижутерия,сумочка,шубка,будут предоставлены вам,бесплатно. Цены у нас очень демократичные,на любой бюджет,выбор платьев,огромный,практически на любой размер,а если учесть,что мы постоянно,шьем что-то новенькое,то вполне понятно,что у нас сложно, не найти себе платье. Опытные консультанты помогут вам в выборе платья для вашего торжества. Будь то свадьба или крестины,выпускной или корпоративная вечеринка,даже тематическая,мы непременно, подберём вам платье,в котором вы будите неотразимы.&nbsp;</p>\r\n', '<p>Spre deosebire de alte saloane, Varhat oferă rochie pentru &icirc;nchiriere de două zile, nu pe zi. Dacă ați luat &icirc;ntr-o rochie de seara de &icirc;nchiriere, toate accesoriile sale: bijuterii, geantă de m&acirc;nă, paltoane, va fi furnizat &icirc;n mod gratuit. Prețurile s-au foarte accesibile cu privire la orice buget, selecție de rochii, un imens, aproape orice dimensiune, dar atunci c&acirc;nd considerați că suntem &icirc;n mod constant, coase ceva nou, este destul de clar că avem o problemă dificilă, nu pentru a găsi o rochie. consultanți cu experiență vă va ajuta &icirc;n alegerea rochiei pentru celebrarea ta. Fie ca este vorba de o nunta sau un botez, absolvire sau petrecere corporate, chiar și de actualitate, vom cu siguranță, vă va ridica o rochie in care vei fi irezistibil.</p>\r\n', '<p>Unlike other salons, Varhat provides Dress for two days rental, not per day. If you take in an evening dress rental, all its accessories: jewelry, handbag, coat, will be provided to you free of charge. Prices have very affordable on any budget, selection of dresses, a huge, virtually any size, but when you consider that we are constantly, sew something new, it is quite clear that we have a difficult, not to find a dress. Experienced consultants will help you in choosing the dress for your celebration. Whether it is a wedding or a christening, graduation or corporate party, even topical, we will certainly, you will pick up a dress in which you&#39;ll be irresistible.</p>\r\n', 'Салон BARHAT предлагает уникальные платья,авторской работы.Здесь вы найдёте платье на любой вкус. Мы поможем создать вам неповторимый образ, о котором вы мечтали !', 'BARHAT Salonul ofera rochii unice, autor raboty.Zdes găsiți o rochie pentru a se potrivi cu fiecare gust. Vă vom ajuta să creați o imagine unică, care ai visat!', 'BARHAT Salon offers unique dresses, author raboty.Zdes you find a dress to suit every taste. We will help you create a unique image of which you dreamed!', 0.00, '{\"X\":\"\",\"Y\":\"\"}', '3IX8e93O2JQ', 1, 0, 0, 0, 0, 'barhat', '2017-01-12 21:00:00', '2017-01-13 08:35:17'),
(22, 'Paparazzi Cafe-Karaoke', 'Paparazzi Cafe-Karaoke', 'Paparazzi Cafe-Karaoke', '<p>Безукоризненный в своей гармонии дизайн интерьера и великолепная кухня. Наша сегодняшняя концепция &ndash; это &laquo;ВКУСНОЕ КАРАОКЕ&raquo;.&nbsp;<br />\r\nКухня у нас работает до самого утра. Настоящее пиршество вкуса, причем по весьма доступным ценам!<br />\r\nГлавное достоинство караоке-кафе PAPARAZZI &ndash; это качественный звук и база песен. Современная караоке-машина Evolution Pro в сочетании с акустической системой CERWIN-VEGA и микрофонами SENNHEISER не разочарует даже самого взыскательного музыкального эстета. Поэтому &laquo;пиршество вкуса&raquo; в караоке-кафе PAPARAZZI дополняется &laquo;пиршеством звука&raquo;.<br />\r\nВас ожидает множество приятных сюрпризов: Live концерты популярных групп и отдельных исполнителей, тематические вечеринки, регулярные шоу, просмотры игр КВН и футбольных матчей Лиги Чемпионов.<br />\r\nМЫ ЖДЕМ ВАС!&nbsp;<br />\r\nПойте, отдыхайте и наслаждайтесь. Ведь жизнь &ndash; она как песня&nbsp;</p>\r\n', '', '', 'Мы работаем, чтобы Ваш отдых был незабываемым', '', '', 0.00, '{\"X\":\"47.09631\",\"Y\":\"28.657434\"}', 'AYaUFA7ADLM', 1, 1, 0, 0, 0, 'paparazzi', '2016-09-19 21:00:00', '2016-12-19 10:26:13'),
(23, 'FAMOUS', 'FAMOUS', 'FAMOUS', '', '', '', '', '', '', 0.00, '{\"X\":\"47.039572\",\"Y\":\"28.81313\"}', '', 1, 1, 0, 0, 0, 'famous', '2016-09-19 21:00:00', '2016-12-19 11:41:52'),
(24, 'Andrei Zveaghintev', 'Andrei Zveaghintev', 'Andrei Zveaghintev', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', 0.00, '{\"X\":\"47.03208663480589\",\"Y\":\"28.841613570585636\"}', '0E_TpSCzG3I', 1, 1, 1, 0, 0, 'andrei-zveaghintev', '2016-09-26 21:00:00', '2017-01-13 08:32:48'),
(26, 'Sfinx ', 'Sfinx', 'Sfinx', '', '', '', 'Night Club', '', '', 0.00, '{\"X\":\"47.024672\",\"Y\":\"28.832336\"}', 'Tdm8UtXrypk', 1, 1, 0, 0, 0, 'sfinx', '2016-10-10 21:00:00', '2016-12-19 10:42:36'),
(27, 'Military', 'Military', 'Military', '', '', '', 'Night Club', '', '', 0.00, '{\"X\":\"\",\"Y\":\"\"}', 'https://www.youtube.com/watch?v=Ng6YH1VoILM', 1, 1, 0, 0, 0, 'military', '2016-10-10 21:00:00', '2017-01-20 08:42:49'),
(28, 'The Penthouse', 'The Penthouse', 'The Penthouse', '', '', '', '', '', 'The Penthouse Cafe is an unique place situated just in the middle of the Chisinau Central Park. We offer an european cuisine, with an italian accent.', 0.00, '{\"X\":\"47.02652796050624\",\"Y\":\"28.827996253961494\"}', 'TEmgTv_ZoYk', 1, 1, 0, 0, 0, 'the-penthouse', '2016-10-10 21:00:00', '2016-12-19 10:44:37'),
(29, 'Sensi bar', 'Sensi bar', 'Sensi bar', '', '', '', '', '', '', 0.00, '{\"X\":\"\",\"Y\":\"\"}', 'xdVI51RtKFY', 1, 1, 0, 0, 0, 'sensi-bar', '2016-10-10 21:00:00', '2016-10-11 19:00:12'),
(30, 'Pinkmartini', 'Pinkmartini', 'Pinkmartini', '', '', '', 'Заведение позиционируется как МЕСТО, в котором будут проводится разноформатные вечеринки, от Pre-Party, выступления модных DJ , тематических вечеров до караоке, концертов, Live Performance и выступление Cover Band-(ов) ( все это по ночам)! Днем Вас будет радовать замечательная кухня ( fusion \\ japan ) и богатый напитками бар ! На протяжении всей недели в заведении будут проводится очень интересные мероприятия т.е. Cовершенно новый и уникальный концепт заведения в нашем городе! ', '', '', 0.00, '{\"X\":\"47.013349\",\"Y\":\"28.852351\"}', 'gzUb9nkq-Dk', 1, 1, 0, 0, 0, 'pinkmartini', '2016-10-10 21:00:00', '2016-12-03 08:51:53'),
(31, 'LAZY by Pink', 'LAZY by Pink', 'LAZY by Pink', '<p>Дорогие друзья!&nbsp;<br />\r\nНаша европейская и азиатская кухня удовлетворит аппетиты любого гурмана!Обслуживание высокого уровня, делает наше заведение одним из самых лучших в городе.&nbsp;<br />\r\nДля того, чтобы атмосфера была еще более особенной, мы предлагаем самые лучшие световые эффекты, звук и неисчерпаемую энергию до рассвета! Кроме того, наше заведение является единственным местом в городе, где Вы можете петь свои любимые песни совершенно бесплатно.<br />\r\nLazy by Pink - чудо место для идеального настроения!</p>\r\n', '<p>Dragi prieteni!&nbsp;<br />\r\nBucătăria noastră europeană și asiatică va satisface poftele oricărui gurmand! Serviciile de &icirc;naltă calitate face ca localul nostru să fie unul dintre cele mai bune din oraș!&nbsp;<br />\r\nPentru ca atmosfera să fie și mai deosebită, oferim cele mai bune efecte de iluminare, sunet de calitate și Vă transmitem energie inepuizabilă p&acirc;nă-n zori! De asemenea, localul nostru este unicul local din oraș unde karaoke se c&acirc;ntă gratuit!&nbsp;<br />\r\nLazy by Pink - locul minune pentru o dispoziție perfectă!</p>\r\n', '', 'Karaoke Club', '', '', 0.00, '{\"X\":\"47.076038\",\"Y\":\"21.943489\"}', 'OaNr-8M6i4g', 1, 1, 0, 0, 0, 'lazy-by-pink', '2016-10-10 21:00:00', '2016-12-19 10:59:22'),
(32, 'Art Club', 'Art Club', 'Art Club', '<p>Растущую популярность караоке можно назвать модным веянием, расслабляющим временем препровождения или желанием хоть в течение одной песни почувствовать себя звездой. С появлением в самом сердце столицы Art-Club Karaoke популярность удачного японского изобретения приобретает иные оттенки. Ко всему выше перечисленному присоединяются принципиально новые категории, которые освобождают Art-Club Karaoke&nbsp;от банальности, с которой некоторые относятся к караоке.<br />\r\n<br />\r\n<br />\r\nВысочайший профессионализм, безоговорочное качество, новейшие технологии, совершенный комфорт, ничем не скованная атмосфера &ndash; все это верные спутники Art-Club Karaoke.<br />\r\n<br />\r\nАкустически правильный зал и профессиональная аппаратура, позволяющие чувствовать себя в мягком облаке звука, 15 000 !!! фонограмм и современная караоке машина &quot;Evolution Pro&quot; - в которой заложена возможность выбора композиций и для любительской аудитории и для профессиональных исполнителей караоке. Плюс к этому - официанты и бармены поют!!! Это не просто музыкальные люди, эти ребята с консерваторским образованием. Им пришлось окончить курсы официантов и барменов, для того, что бы гармонично выстраивать Ваш отдых в Арт-Клубе.<br />\r\n<br />\r\nУютный интерьер, выполненный в темных шоколадных тонах, позволяет видеть текст исполняемых песен с любой точки зала. Демократичное меню избавляет гостей от угнетающей мысли на чем-то сэкономить, а располагающая атмосфера не торопит время, позволяя наслаждаться каждой минутой, проведенной в Art-Club Karaoke.<br />\r\n<br />\r\nArt-Club Karaoke &ndash; искушение в необъятном мире караоке&hellip;</p>\r\n', '', '', 'Karaoke Club', '', '', 0.00, '{\"X\":\"47.01491\",\"Y\":\"28.853887\"}', '2vte1_VAlKg', 1, 1, 0, 0, 0, 'art-club', '2016-10-10 21:00:00', '2016-12-19 11:02:42'),
(33, 'Motif', 'Motif', 'Motif', '<p>Закройте глаза, и прислушайтесь ...motif. Звучит. В вас.<br />\r\n<br />\r\nmotif эстетический...motif музыкальный...motif гастрономический...motif общения...motif самовыражения...motif движения...motif расслабления... motif наслаждения...&nbsp;<br />\r\n<br />\r\nКоманда караоке бара motif приветствует вас!<br />\r\n<br />\r\nЧтобы познакомиться с motif, почувствуйте наши ценности.&nbsp;<br />\r\nЧтобы почувствовать наши ценности, приходите в motif!<br />\r\n<br />\r\nЧтобы познакомиться с motif, приходите в motif!</p>\r\n', '<p>&Icirc;nchide ochii şi ascultă...motif. Răsună. &Icirc;n tine.<br />\r\n<br />\r\nmotif estetic...motif muzical...motif gastronomic...motif de comunicare...motif de exprimare...motif de mişcare... motif de relaxare...motif de plăcere...<br />\r\n<br />\r\nEchipa Karaoke Barului motif Vă salută!<br />\r\n<br />\r\nPentru a face cunoştinţă cu motif, simţiţi valorile noastre.&nbsp;<br />\r\nPentru a simţi valorile noastre, veniţi la motif!<br />\r\nPentru a face cunoştinţă cu motif, veniţi la motif!</p>\r\n', '', 'Karaoke Club', '', '', 0.00, '{\"X\":\"47.04298\",\"Y\":\"28.846485\"}', 'lPg4Rhf1Lqk', 1, 1, 0, 0, 0, 'motif', '2016-10-20 21:00:00', '2016-12-19 11:15:46'),
(35, 'Premium Events', 'Premium Events', 'Premium Events', '', '', '', 'Dance collectiv', '', '', 0.00, '{\"X\":\"\",\"Y\":\"\"}', 'nXm8hCmpMmw', 1, 1, 0, 0, 0, 'premium-events', '2016-10-25 21:00:00', '2016-10-26 15:18:46'),
(36, 'Jantic Photography', 'Jantic Photography', 'Jantic Photography', '', '', '', '', '', '', 0.00, '{\"X\":\"\",\"Y\":\"\"}', '-xDT39tiTJc', 1, 1, 1, 0, 0, 'jantic-photography', '2016-10-25 21:00:00', '2016-11-18 11:15:05'),
(37, 'Gazetto', 'Gazetto', 'Gazetto', '', '', '', '', '', '', 0.00, '{\"X\":\"47.043361\",\"Y\":\"28.861352\"}', 'GFpUAHsUHjI', 1, 1, 0, 0, 0, 'gazetto', '2016-10-25 21:00:00', '2016-12-19 11:23:51'),
(38, 'Versenz Cafe', 'Versenz Cafe', 'Versenz Cafe', '<p>Итак, мы готовы представить Банкетный зал &quot;Versenz&quot;.<br />\r\n<br />\r\nМы долго думали, каким он должен быть, так чтобы удивить Вас и оставить о Нас самые теплые воспоминания. Ведь хорошее торжество обязано запомниться на всю жизнь!<br />\r\n<br />\r\nВыдержанные классические традиции, тесно переплетающиеся новые тенденции позволили нам сделать абсолютно новое и актуальное место для ваших торжеств.<br />\r\n<br />\r\n&quot;Versenz&quot; готов предложить Вам три банкетных зала, выполненных в различных стилях:<br />\r\n<br />\r\n1 зал готов принять от 20 до 40 человек;<br />\r\n2 зал &mdash; от 40 до 60 человек;<br />\r\n3 зал &mdash; от 100 до 200 человек.<br />\r\nСтоит отметить тот факт, что на одном ярусе с залом находится так называемая &quot;jazzy room&quot;. Также вам доступен отдельный зал для вечерних бесед, деловых встреч или семейных ужинов.<br />\r\n<br />\r\nЛюбой вид торжеств и его подготовку, управление &quot;Versenz&quot; берет на себя, будь то свадьба, день рождения, корпоротивное мероприятие или любое другое выбранное вами торжество. Так же разработано отдельное &quot;Банкетное Меню&quot;, которое по нашему мнению оставит довольным даже самых неприхотливых гостей.<br />\r\n<br />\r\nВедь Ваш уют, комфорт и хорошее настроение есть Наша прямая обязанность.</p>\r\n', '', '', 'Долгие годы работы сделали наших поваров действительно профессионалами своего дела. Мы более чем уверены в том что каждый из Вас посетив Versenz Cafe найдет для себя что-нибудь интересное в авторском меню нашего заведения.', '', '', 0.00, '{\"X\":\"47.05338479654883\",\"Y\":\"28.864229956995\"}', 'UZUFQwNqQuw', 1, 1, 0, 0, 0, 'versenz-cafe', '2016-10-27 21:00:00', '2016-12-19 11:25:52'),
(39, 'Wagon', 'Wagon', 'Wagon', '', '', '', 'Прекрасный и уютный бар, в Кишинёве. Всем посетителям предлагаем наиболее полюбившиеся позиции по европейской кухне.', '', '', 0.00, '{\"X\":\"47.04320066274189\",\"Y\":\"28.860598245990445\"}', 'O3YtWaFleAc', 1, 1, 0, 0, 0, 'wagon', '2016-10-27 21:00:00', '2016-10-28 15:21:10'),
(40, 'Sherlock Holmes Pub', 'Sherlock Holmes Pub', 'Sherlock Holmes Pub', '<p>Шерлок Холмс &mdash; многогранная личность. Обладая разносторонними талантами, онпосвятил свою жизнь карьере частного детектива. Он неприхотлив и практическибезразличен к удобствам, совершенно равнодушен к роскоши. Холмс предпочитаетпринимать клиентов у себя дома, называя их гостями. В ряде рассказов можновидеть, что даже очень состоятельные клиенты, особы королевской крови и сампремьер-министр Англии приходят лично к нему на приём. Шерлок Холмс обрёл свойдом и в нашем городе. Он предпочёл тихий, красивый район с аллеей целомушумному городу. Принимает гостей тут он круглосуточно. Здесь можно и вкуснопоесть, и вдоволь попить, окунувшись в атмосферу детективных историй.Традиционный английский паб отличается высоким качеством обслуживания и однимииз самых низких цен в городе. (среди мест такого уровня). Это хорошее местовстреч для тех, кто любит качество, уют, комфорт, хорошие напитки, блюда итёплое общение. Просторный зал Холмса оформлен в лучших традициях жанра:действующий камин, старинные лампы, часы, трубки, удобные диваны и большиестолы.&nbsp;<br />\r\nМы рады будем встретить Вас в любое время суток любого дня недели. В городепоявилось, что то новое. Странно, как это вы ещё не там?</p>\r\n', '', '', 'Паб выдержанный в английском стиле, уютное место для хорошей компании !', '', '', 0.00, '{\"X\":\"46.98271249656119\",\"Y\":\"28.85014712670674\"}', 'Te8OIEBo3WI', 1, 1, 0, 0, 0, 'sherlock-holmes-pub', '2016-11-09 21:00:00', '2016-11-10 09:00:06'),
(41, 'Sky Bar', 'Sky Bar', 'Sky Bar', '', '', '', 'Ночной клуб', 'Club de noapte', 'Night Club', 0.00, '{\"X\":\"47.014916\",\"Y\":\"28.855926\"}', 'Dm4_y-hXCUk', 1, 0, 0, 0, 0, 'sky-bar', '2017-01-16 07:32:37', '2017-01-16 07:32:37'),
(42, 'COCOS Prive', 'COCOS Prive', 'COCOS Prive', '<p>Танцевальный ночной клуб. Ресторан азиатской кухни.</p>\r\n', '<p>Club de noapte. Restaurant cu specific asiatic.</p>\r\n', '<p>Dance night club.&nbsp;Asian cuisine Restaurant</p>\r\n', '', '', '', 0.00, '{\"X\":\"47.02707510712184\",\"Y\":\"28.830494907375694\"}', '6gmIdX-I9pw', 1, 1, 0, 0, 0, 'cocos-prive', '2016-11-24 21:00:00', '2016-11-25 14:35:41'),
(43, 'Jack`s Bar&Grill', 'Jack`s Bar&Grill', 'Jack`s Bar&Grill', '<p>Настоящая мужская еда. Всегда.<br />\r\nLive-концерты каждую пятницу и субботу.<br />\r\nDJ Slaventii Smile по выходным с 23:00 до 3:00.</p>\r\n', '', '', 'Настоящая мужская еда. Всегда.\r\nLive-концерты каждую пятницу и субботу.\r\nDJ Slaventii Smile по выходным с 23:00 до 3:00.', 'Gustări cu adevărat Bărbătești ! Concerturi LIVE', '', 0.00, '{\"X\":\"47.015155821623594\",\"Y\":\"28.85432688227726\"}', 'tivukbZEGP8', 1, 1, 0, 0, 0, 'jacks-bargrill', '2016-12-02 21:00:00', '2016-12-03 08:53:34'),
(44, 'Black Chocolate Karaoke', 'Black Chocolate Karaoke', 'Black Chocolate Karaoke', '<p>Благодаря высококлассному профессиональному оборудованию, огромному выбору музыкальных композиций , отличному качеству звучания, посещение караоке Black Chocolate станет настоящим событием. Профессиональные звукорежиссёр и ведущий позволят любому гостю почувствовать себя настоящим исполнителем, великолепная кухня оставит довольным каждого и все это поможет вам отлично провести время и получить колоссальный заряд позитива!</p>\r\n', '', '', 'Караоке клуб \"Black Chocolate\"', '', '', 0.00, '{\"X\":\"47.043502\",\"Y\":\"28.867856\"}', 'UWvZ9QDnqP0', 1, 0, 0, 0, 0, 'black-chocolate-karaoke', '2016-12-02 21:00:00', '2016-12-19 11:48:28'),
(45, 'Mojito Bar&Terrace', 'Mojito Bar&Terrace', 'Mojito Bar&Terrace', '', '', '', '', 'Descoperiți lumea sushi și a altor specialități sushi bar și vă garantăm că o sa doriți să repetați această experiență!\r\nDe asemenea, iubitorii de vin pot să se relaxeze într-o atmosferă destinsă, răsfăţându-se cu un vin premium din colecţia Purcari si bucate selecte din bucătăria europeană.', '', 0.00, '{\"X\":\"47.027872\",\"Y\":\"28.830207\"}', 'yLpKTwdVn-I', 1, 0, 0, 0, 0, 'mojito-barterrace', '2016-12-02 21:00:00', '2016-12-03 09:14:01'),
(46, 'Gastrobar', 'Gastrobar', 'Gastrobar', '', '', '', '', '', '', 0.00, '{\"X\":\"47.01671040346409\",\"Y\":\"28.827178566795226\"}', 'PZ4pctQMdg4', 1, 1, 0, 0, 0, 'gastrobar', '2016-12-02 21:00:00', '2016-12-03 09:17:37'),
(47, 'HOME Karaoke', 'HOME Karaoke', 'HOME Karaoke', '<p>Караоке клуб &quot;HOME&quot;- это не просто уютная обстановка, это чувство кайфа! Приятная атмосфера, качественный звук, а главное&nbsp;это место, где тебя всегда ждут!</p>\r\n', '', '', 'Твой дом там, где твоё сердце!', '', '', 0.00, '{\"X\":\"47.017509\",\"Y\":\"28.846898\"}', '', 1, 0, 0, 0, 0, 'home-karaoke', '2016-12-02 21:00:00', '2016-12-10 10:42:49'),
(48, 'Decadance', 'Decadance', 'Decadance', '', '', '', '', 'Atmosfera incendiara, cele mai noi si «progresive» piese sunt oferite devoratorilor de muzica electronica, sunet de calitate, interior original si... fotolii extrem de comode! ', '', 0.00, '{\"X\":\"47.033289\",\"Y\":\"28.846521\"}', 'i7NWmR_ecs0', 1, 0, 0, 0, 0, 'decadance', '2016-12-02 21:00:00', '2016-12-19 11:58:59'),
(49, 'Kremlin Karaoke', 'Kremlin Karaoke', 'Kremlin Karaoke', '', '', '', '\"Kremlin\" - это, в первую очередь,уютный интерьер, профессиональное караоке, изысканная европейская и японская кухня!', '', '', 0.00, '{\"X\":\"47.047997\",\"Y\":\"28.886999\"}', '', 1, 0, 0, 0, 0, 'kremlin-karaoke', '2016-12-02 21:00:00', '2016-12-03 09:44:16'),
(50, 'Voice Vocal Karaoke', 'Voice Vocal Karaoke', 'Voice Vocal Karaoke', '<p>Только здесь вы сможете почувствовать себя настоящей звездой, а также отметить свой день рождения, заказать банкет и просто спеть хорошие песни!Особое внимание уделено интерьеру.Динамичное авторское исполнение придает клубу совершенно особый современный облик, а VIP зал это идеальное место для проведения романтических вечеров, дружеских вечеринок, корпоративных праздников, дней рождений и юбилеев.<br />\r\nАвторское меню &laquo;Voice Vocal Club&raquo; соответствует самым высоким требованиям гурманов, а наши бармены всегда удивят Вас оригинальным коктейлем.&raquo;Voice Vocal Club&raquo; &ndash; это безупречный сервис, качество блюд, доступность цен и действительно душевная атмосфера.Каждую среду, четверг и воскресенье в &laquo;Voice Vocal Club&raquo; новые проекты с звездными Мс и клубным фотографом.</p>\r\n', '', '', '«Voice Vocal Club» — это профессиональный звук и огромная база фонограмм, гостеприимный персонал и атмосфера праздника, где даже самый не поющий гость, взяв в руки микрофон, порадуется звучанию своего голоса.«Voice Vocal Club» дает возможность продемонстрировать свои таланты перед позитивной и благодарной аудиторией, открыть в себе новые грани и способности. ', '', '', 0.00, '{\"X\":\"47.054763\",\"Y\":\"28.864478\"}', '', 1, 0, 0, 0, 0, 'voice-vocal-karaoke', '2016-12-02 21:00:00', '2016-12-03 09:51:41'),
(51, 'Art karaoke', 'Art karaoke', 'Art karaoke', '<p>С появлением в самом сердце столицы<strong> Art-Club Karaoke</strong> популярность удачного японского изобретения приобретает иные оттенки. Ко всему выше перечисленному присоединяются принципиально новые категории, которые освобождают Art-Club Karaoke&nbsp;от банальности, с которой некоторые относятся к караоке.<br />\r\n<br />\r\n<br />\r\nВысочайший профессионализм, безоговорочное качество, новейшие технологии, совершенный комфорт, ничем не скованная атмосфера &ndash; все это верные спутники <strong>Art-Club Karaoke</strong>.<br />\r\n<br />\r\nАкустически правильный зал и профессиональная аппаратура, позволяющие чувствовать себя в мягком облаке звука, <strong>15 000</strong> !!! фонограмм и современная караоке машина <strong>&quot;Evolution Pro&quot;</strong> - в которой заложена возможность выбора композиций и для любительской аудитории и для профессиональных исполнителей караоке. Плюс к этому - официанты и бармены поют!!! Это не просто музыкальные люди, эти ребята с консерваторским образованием. Им пришлось окончить курсы официантов и барменов, для того, что бы гармонично выстраивать Ваш отдых в Арт-Клубе.<br />\r\n<br />\r\nУютный интерьер, выполненный в темных шоколадных тонах, позволяет видеть текст исполняемых песен с любой точки зала. Демократичное меню избавляет гостей от угнетающей мысли на чем-то сэкономить, а располагающая атмосфера не торопит время, позволяя наслаждаться каждой минутой, проведенной в <strong>Art-Club Karaoke</strong>.<br />\r\n<br />\r\n<strong>Art-Club Karaoke</strong> &ndash; <em>искушение в необъятном мире караоке&hellip;</em></p>\r\n', '', '', 'Растущую популярность караоке можно назвать модным веянием, расслабляющим временем препровождения или желанием хоть в течение одной песни почувствовать себя звездой.', '', '', 0.00, '{\"X\":\"47.01491\",\"Y\":\"28.853887\"}', '', 1, 0, 0, 0, 0, 'art-karaoke', '2016-12-09 21:00:00', '2016-12-10 10:53:57'),
(52, 'Drugoe mesto', 'Drugoe mesto', 'Drugoe mesto', '', '', '', 'Уютное кафе- терасса и клуб в городе Кишинёве ждёт вас!', '', '', 0.00, '{\"X\":\"47.041967\",\"Y\":\"28.88929\"}', '', 1, 0, 0, 0, 0, 'drugoe-mesto', '2016-12-09 21:00:00', '2016-12-10 11:00:17'),
(53, 'Fanconi Cafe', 'Fanconi Cafe', 'Fanconi Cafe', '', '', '', 'Кафе- терасса \"Fanconi\"', '', '', 0.00, '{\"X\":\"47.037214\",\"Y\":\"28.850797\"}', '', 1, 0, 0, 0, 0, 'fanconi', '2016-12-09 21:00:00', '2016-12-10 11:06:24'),
(54, 'Flamingo', 'Flamingo', 'Flamingo', '', '', '', 'Клуб-ресторан- террасса . Кухня Итальянская, Японская и Украинская.\r\nКараоке-клуб .', '', '', 0.00, '{\"X\":\"46.985158\",\"Y\":\"28.871422\"}', '', 1, 0, 0, 0, 0, 'flamingo', '2016-12-09 21:00:00', '2016-12-10 11:15:33'),
(55, 'Godzila Karaoke', 'Godzila Karaoke', 'Godzila Karaoke', '', '', '', '\"Godzilla\" karaoke club & lounge terrace', '', '', 0.00, '{\"X\":\"46.988275\",\"Y\":\"28.853483\"}', '', 1, 0, 0, 0, 0, 'godzila-karaoke', '2016-12-11 21:00:00', '2016-12-12 03:15:48'),
(56, 'Concert Hall Atrium', 'Concert Hall Atrium', 'Concert Hall Atrium', '', '', '', 'Крупнейший частный концертный зал и караоке-клуб в Кишиневе, с самым качественным звуковым и световым оборудованием, неповторимой атмосферой и уникальной программой.', '', '', 0.00, '{\"X\":\"47.014916\",\"Y\":\"28.855926\"}', '', 1, 0, 0, 0, 0, 'concert-hall-atrium', '2016-12-11 21:00:00', '2016-12-12 03:22:12'),
(57, 'MuzCafe Karaoke', 'MuzCafe Karaoke', 'MuzCafe Karaoke', '<p>Это отличное заведение, где можно вкусно и сытно пообедать, выпить ароматный кофе, покушать наивкуснейшее мясо, приготовленное на дровах- в Тындыре, уникальная печь в Кишинёве, мясо получается сочным, ароматным и&nbsp;сохраняет все полезные свойства.<br />\r\nВ MuzCafe&#39;44 &ndash; создай себе настроение вас ожидает:<br />\r\n- позитивная, дружелюбная, зажигательная атмосфера;<br />\r\n- великолепное настроение и хорошее обслуживание;&nbsp;<br />\r\n- конкурсы с призами;<br />\r\n- вкусные блюда;<br />\r\n- большой выбор напитков на любой вкус;<br />\r\n- профессиональное караоке с дружелюбным и весёлым киджеем;<br />\r\n- доступные цены, скидочные карточки и различные акции.</p>\r\n', '', '', 'MuzCafe\'44 – создай себе настроение! Мы приглашаем вас на самые зажигательные караоке- вечеринки в городе Кишинёве! Вас ждут конкурсы, подарки, развлечение по максимуму с МС и KJ – ем.', '', '', 0.00, '{\"X\":\"46.98691\",\"Y\":\"28.870641\"}', '', 1, 0, 0, 0, 0, 'muzcafe-karaoke', '2016-12-11 21:00:00', '2016-12-12 03:29:27'),
(58, 'Plaza Karaoke ', 'Plaza Karaoke ', 'Plaza Karaoke ', '', '', '', 'Караоке, клуб, бильярд.', '', '', 0.00, '{\"X\":\"48.580835\",\"Y\":\"2.585315\"}', '', 1, 0, 0, 0, 0, 'plaza-karaoke', '2016-12-11 21:00:00', '2016-12-12 03:37:11'),
(59, 'Rust Club', 'Rust Club', 'Rust Club', '<p>Mодная музыка, расслабляющие коктейли, клубная атмосферa и вы &ndash; в центре беззаботного ночного веселья.<br />\r\nНочь обретает совершенно иной, сочный оттенок, если ее провести не дома в постели, а на веселой вечеринке в Rust Club, где в выходные дни не допустят плохого настроения и скуки.</p>\r\n', '', '', 'Когда хочется отдохнуть, откинув все проблемы, накопленные за неделю, на помощь приходит Rust Club. ', '', '', 0.00, '{\"X\":\"47.039136\",\"Y\":\"28.888966\"}', '', 1, 0, 0, 0, 0, 'rust-club', '2016-12-11 21:00:00', '2016-12-12 03:43:31'),
(60, 'Trio Karaoke', 'Trio Karaoke', 'Trio Karaoke', '', '', '', 'Караоке клуб \'\'Trio\"', '', '', 0.00, '{\"X\":\"47.770735\",\"Y\":\"27.900334\"}', '', 1, 0, 0, 0, 0, 'trio', '2016-12-11 21:00:00', '2016-12-12 03:48:19'),
(61, 'Vox Karaoke', 'Vox Karaoke', 'Vox Karaoke', '', '', '', 'Караоке клуб \"VOX\"', '', '', 0.00, '{\"X\":\"47.015364\",\"Y\":\"28.847338\"}', '', 1, 0, 0, 0, 0, 'vox-karaoke', '2016-12-11 21:00:00', '2016-12-12 03:52:50'),
(62, 'Blinoff', 'Blinoff', 'Blinoff', '', '', '', 'Blinoff- семейный ресторан, где вкуснейшими блинами могут насладиться как взрослые так и дети!В Кишинёве 3 ресторана BLINOFF где всегда вам рады!', '', '', 0.00, '{\"X\":\"36.615086\",\"Y\":\"2.646886\"}', '', 1, 0, 0, 0, 0, 'blinoff', '2016-12-11 21:00:00', '2016-12-12 04:01:00'),
(63, 'Caffe Graffiti', 'Caffe Graffiti', 'Caffe Graffiti', '<p>Формат кафе -это отдых после насыщенного дня,где каждого посетителя ждёт лёгкая, размеренная атмосфера для неторопливого отдыха.<br />\r\nВремя зажигать здесь наступает по пятницам и субботам с 21:00 до последнего&nbsp;клиента.&nbsp;</p>\r\n', '', '<p>The format of the caf&eacute; - it&#39;s a relaxation after a busy day, where every visitor will get a leisurable, moderate atmosphere for a pleasurable hanging.<br />\r\nThe time to hang out here comes on Fridays and Saturdays from 21:00 to the last visitor.</p>\r\n', '\"Caffe Graffiti\" – это, прежде всего urban café -это стиль жизни, характеризующий способ существования, работы и отдыха: интенсивно и быстро работать и не менее энергично и качественно отдыхать. ', '', 'Caffe Graffiti\' - it\'s first of all a urban café - it`s a life style, charaterizing the way of living, working and having fun: work fast and actively and relax as energetically and qualitively.', 0.00, '{\"X\":\"46.999824\",\"Y\":\"28.842676\"}', '', 1, 0, 0, 0, 0, 'caffe-graffity', '2016-12-11 21:00:00', '2016-12-12 04:14:18'),
(64, 'Champ Cafe', 'Champ Cafe', 'Champ Cafe', '<p>&laquo;Champ&raquo; создано для тех, кто ценит совершенство в каждой детали, в постоянном&nbsp;поиске душевной атмосферы.&nbsp;Кто желает по-настоящему отдохнуть и насладиться гармонией. Закройте глаза и вдохните аромат удовольствия и радости в уютной, домашней обстановке. Мы будем рады видеть вас с друзьями в любое удобное для вас время ! При заказе корпоративных вечеринок и банкетов, время проведения&nbsp;и меню, по договоренности.</p>\r\n', '', '', 'Райский уголок в самом сердце Рышкановки, Уютная атмосфера и романтическая терраса.', '', '', 0.00, '{\"X\":\"47.039977\",\"Y\":\"28.86163\"}', '', 1, 0, 0, 0, 0, 'champ-cafe', '2016-12-11 21:00:00', '2016-12-12 04:20:31'),
(65, 'Geography of taste', 'Geography of taste', 'Geography of taste', '', '', '', 'География вкуса', '', '', 0.00, '{\"X\":\"47.060288\",\"Y\":\"28.866122\"}', '', 1, 0, 0, 0, 0, 'geography-of-taste', '2016-12-11 21:00:00', '2016-12-12 04:25:40'),
(66, 'La Sarkis', 'La Sarkis', 'La Sarkis', '<p>&laquo;Саркис&raquo; &mdash; это имя человека, который познакомил жителей и гостей Молдовы с великолепной армянской кухней, и это уже настоящий бренд. Поэтому после открытия ресторана La Sarkis в живописной парковой зоне, люди потянулись сюда, чтобы отдохнуть душой и отведать неповторимые блюда.</p>\r\n', '', '', '«Саркис» — это имя человека, который познакомил жителей и гостей Молдовы с великолепной армянской кухней, и это уже настоящий бренд.', '', '', 0.00, '{\"X\":\"47.017939\",\"Y\":\"28.760309\"}', '', 1, 0, 0, 0, 0, 'la-sarkis', '2016-12-11 21:00:00', '2016-12-12 04:30:04'),
(67, 'Me Gusto', 'Me Gusto', 'Me Gusto', '<p>Семьи с детьми, влюбленные&nbsp;пары, офисные сотрудники, творческие&nbsp;люди любят приходить в Me Gusto просто так или для того, чтобы отпраздновать самые знаменательные даты в своей жизни &ndash; романтичные свидания,день рождения, юбилей, корпоратив&nbsp;или выпускной вечер. Давно прошли те времена, когда торжественные события отмечали дома &ndash; сейчас можно арендовать&nbsp;банкетный зал и наслаждаться роскошной атмосферой&nbsp;и вкусными блюдами, доверив организацию мероприятия персоналу ресторана.&nbsp;Эта прекрасная&nbsp;традиция экономит силы и время, превращая застолье в настоящий праздник.</p>\r\n', '', '', 'Семейный ресторан Me Gusto -кулинарный рай для гурманов.', 'Bucatarie Europeana / Japoneza', '', 0.00, '{\"X\":\"47.021188\",\"Y\":\"28.8361\"}', '', 1, 0, 0, 0, 0, 'me-gusto', '2016-12-11 21:00:00', '2016-12-12 04:35:37'),
(68, 'MidPoint', 'MidPoint', 'MidPoint', '<p>Находимся мы на четвертом этаже торгового комплекса Atrium.<br />\r\nЗа сравнительно недолгое время работы комплекса команда Midpoint, зарекомендовали себя как достойное заведение с хорошим кулинарным вкусом и грамотным сервисом.&nbsp;<br />\r\nДолго рассказывать о себе не совсем хочется, хотелось бы чтоб Вы пришли и оценили нас сами. Как нужно, по достоинству.&nbsp;<br />\r\nЖдем Вас каждый день с десяти утра и до двух часов ночи!&nbsp;<br />\r\nУвидимся друзья.</p>\r\n', '', '', 'За сравнительно недолгое время работы комплекса команда Midpoint, зарекомендовали себя как достойное заведение с хорошим кулинарным вкусом и грамотным сервисом. ', '', '', 0.00, '{\"X\":\"47.014916\",\"Y\":\"28.855926\"}', '', 1, 0, 0, 0, 0, 'midpoint', '2016-12-11 21:00:00', '2016-12-12 04:41:44'),
(69, 'Piano Bar', 'Piano Bar', 'Piano Bar', '', '', '', 'Piano Bar', '', '', 0.00, '{\"X\":\"\",\"Y\":\"\"}', '', 1, 0, 0, 0, 0, 'piano-bar', '2016-12-11 21:00:00', '2016-12-12 04:47:45'),
(70, 'Garden Palace', 'Garden Palace', 'Garden Palace', '', '<p>Un spațiu multi-funcțional, situat &icirc;n orașul Chișinău, strada Vasile Alecsandri, nr. 8, &icirc;ntr-un cadru perfect natural, plin de verdeață, culoare, lumină, cu panorama cotidianului zgomotos, GARDEN PALACE dispune de 3 săli admirabile: una cu o capacitate de 196 persoane (table setup) și 500 persoane (cocktail setup); a doua, VIP Hall, cu o capacitate de 35 persoane (table setup) și 50 persoane (cocktail setup) și GARDEN TERRACE cu o capacitate de 80 persoane (table setup și restaurant &agrave; la carte) și 100 persoane (cocktail setup).<br />\r\nUn cadru elegant, rafinat, exclusivist, unde detaliile fac diferența. Un loc prietenos, conceput special pentru reușita evenimentului dumneavoastră. Cu ajutorul design-ului unic, prin &icirc;mbinarea de plante și copaci, cu forme geometrice simple și efecte deosebite de lumină, am reușit să creăm un spațiu organic. Albul predominant și lumina naturală redată de geamurile mari, terasa &icirc;n culori pastelate și &rdquo;grădina cu minuni&rdquo;, dar și &icirc;ntreg decorul, redau &icirc;n orice moment, un incredibil și totodată fantastic cadru natural și relaxant.<br />\r\nServiciile oferite de GARDEN PALACE fac ca totul să fie lipsit de griji. Ținuta personalului, atenția la detalii și pasiunea pentru munca depusă de fiecare persoană din echipa GARDEN PALACE se finalizează &icirc;ntotdeauna cu succes și momente speciale, iar bucătăria promovată de Chef-ul nostru are un stil aparte, cu preparate at&acirc;t pretențioase, fusion cuisine, dar și delicii clasice &icirc;n combinații inedite. Decorurile din farfurie și look-ul preparatelor vă vor duce către o experiență culinară și o atmosferă fantastică.<br />\r\nVă oferim pachete personalizate, promoții și consultanță de specialitate pe tot parcursul desfășurării evenimentului. Rețeta evenimentului perfect poartă semnătura GARDEN PALACE EVENTS RESTAURANT.&nbsp;<br />\r\nPetreceri și evenimente private, organizare nuntă, organizare botez, pregătire petreceri aniversare sau pregătire petreceri corporate, organizare conferințe, seminarii, pregătire lansări de produse, evenimente mondene, expoziții, t&acirc;rguri, concerte live, degustări de vinuri, totul poate fi organizat din timp și cu succes &icirc;n cele mai mici detalii.<br />\r\nStabiliți un reper pentru evenimentele de referință din viața dumneavoastră sau a companiei din care faceți parte, impuneți-vă propriul standard și noi vă oferim soluția, spațiul perfect unde beneficiați de serviciile dedicate ale unei echipe de profesioniști experimentați.<br />\r\n<br />\r\nGARDEN PALACE EVENTS RESTAURANT vă garantează succesul evenimentului dumneavoastră!</p>\r\n', '', '', 'GARDEN PALACE EVENTS RESTAURANT este spațiul ideal pentru organizarea evenimentelor speciale din viața dumneavoastră. ', '', 0.00, '{\"X\":\"\",\"Y\":\"\"}', '', 1, 0, 0, 0, 0, 'garden-palace', '2016-12-11 21:00:00', '2016-12-12 05:40:02'),
(71, 'Club Royal Park', 'Club Royal Park', 'Club Royal Park', '', '', '', 'Отель отличается небольшим количеством номеров, что удобно для тихого спокойного отдыха. Авторский дизайн каждого номера, уютная атмосфера и индивидуальный сервис сделают Ваше пребывание в отеле поистине комфортным.', 'La dispoziţia Dvs. sunt 20 de camere confortabile, restaurant, centru spa cu piscină interioară, saună, sală de gimnastică, terasă, 2 săli de conferinţă, dar mai presus de toate o deservire impecabilă şi desigur o atmosferă ca acasă.', 'We are happy to welcome you in Club Royal Park Hotel -one of the best five-star hotels of Moldova which is located in the park area with 15 min. from the airport and 5 min. from the city center.', 0.00, '{\"X\":\"46.999855\",\"Y\":\"28.855279\"}', '', 1, 0, 0, 0, 0, 'club-royal-park', '2016-12-11 21:00:00', '2016-12-12 05:45:42'),
(72, 'Select- Banquet Hall', 'Select- Banquet Hall', 'Select- Banquet Hall', '<p>У входа в Select Banquet Hall гостей встречает фонтан. Игриво и заманчиво, переливаясь и мерцая струями воды, это архитектурное решение подчеркнет торжественность любого события и послужит местом для фотосесии новобрачных.<br />\r\nЭлегантный и современный, Select Banquet Hall включает в себя два банкетных зала и кафе. Первый уровень комплекса представляет собой просторный и светлый холл для встречи гостей. Из холла на второй этаж, а именно в зал Fusion площадью 550 кв.м, гостей провожает широкая мраморная лестница. Рассчитанный на 250 человек, зал оформлен в белоснежно-зеркальном стиле. Удобным дополнением второго уровня комплекса является просторная ложа, с которой открывается прекрасный вид на бульвар Мирча чел Бэтрын. Еще одной важной и одновременно отличительной особенностью зала Fusion является комната для детей, оснащенная играми, ТВ и местом для отдыха. Поэтому если гости придут на торжество с детьми, прекрасное времяпровождение гарантировано и малышам, и их родителям.&nbsp;<br />\r\nТретий уровень комплекса Select Banquet Hall &ndash; это зал Neoclasic, стилизованный зал рассчитан на 100 гостей. На площади 270 кв.м кроме свадеб &ldquo;для самых близких&rdquo; можно организовывать любые мероприятия среднего масштаба: выпускные балы, презентации, вечеринки и другие тематические банкеты.&nbsp;<br />\r\nОба зала комплекса Select Banquet Hall оснащены техникой последнего поколения. К услугам гостей предоставлены: высокоскоростной Интернет wireless, видеопроекторы, проекторные экраны, профессиональная аудио система и мобильная сцена. Все это позволяет организовывать здесь мероприятия, носящие бизнес характер: конференции, семинары, симпозиумы, тренинги, конгрессы.&nbsp;<br />\r\nОдним из приятных и романтичных сюрпризов Select Banquet Hall являются два уютных и оснащенных всем необходимым номера для молодоженов, где новобрачные смогут встретить свое первое утро в статусе мужа и жены. Чтобы попасть в эти романтичные &ldquo;гнездышки&rdquo; нужно лишь подняться по лестнице на самый верх комплекса. Кстати именно с самого верха, от потолка до пола первого уровня здесь, рядом с лестницей, развесили свои нити необыкновенные дизайнерские светильники, выполненные в форме красивых и больших бутонов белых роз.&nbsp;<br />\r\nОдним из главных достоинств Select Banquet Hall можно назвать кухню. Комплекс располагает тремя собственными кухнями на каждом уровне здания, что позволяет тем самым одновременно, полноценно и без заминок обслуживать два банкета и гостей кафе. Использование новейшего оборудования кухонь позволяет готовить блюда, максимально сохраняя их вкусовые качества, поэтому блюда на праздничные столы готовятся прямо здесь и не доставляются с помощью системы &ldquo;catering&rdquo;, извне. Кроме этого в Select Banquet Hall используются специальные технологии подачи горячих блюд, которые позволяют подавать одновременно до 250 блюд именно в горячем виде.&nbsp;<br />\r\nЕще одним преимуществом пребывания в Select Banquet Hall является охраняемая парковка на 45мест.&nbsp;<br />\r\nИз всего вышесказанного хочется отметить только одно: если вы&nbsp;<br />\r\nхотите организовать банкет качественно, со вкусом и вниманием к каждой детали, сделайте это в Select Banquet Hall.&nbsp;</p>\r\n', '<p>La intrarea &icirc;n &quot;Select Banquet Hall&quot; oaspeţii sunt &icirc;nt&acirc;mpinaţi de un havuz splendid. Jucăuş şi intrigant, cu jeturi strălucitor şi p&acirc;lp&acirc;itoare de apă, această creaţie arhitecturală oferă solemnitate oricărui eveniment şi este un loc perfect pentru o sesiune foto a tinerilor căsătoriţi.<br />\r\nElegantul şi modernul &quot;Select Banquet Hall&quot; dispune de două săli de banchete şi o cafenea.<br />\r\nLa primul nivel al edificiului se află un hol luminos şi &icirc;ncăpător pentru &icirc;nt&acirc;lnirea oaspeţilor. Din hol, se ridică o scară de marmoră la etajul doi, către sala Fusion, care are o suprafaţă de 550 m.p. Sala are o capacitate de găzduire a 250 de persoane şi este oformată &icirc;ntr-un stil de culoare bej, cu multe oglinzi.<br />\r\n&Icirc;n completarea acesteia, la nivelul doi al edificiului, se găseşte şi un balcon spaţios, cu o privelişte spre bulevardul Mircea Cel Bătr&acirc;n. O altă componentă importantă şi &icirc;n acelaşi timp distinctă a sălii Fusion este camera de copii, &icirc;nzestrată cu jocuri, TV şi loc de odihnă. Astfel, odihna plăcută este garantată at&icirc;t celor mari c&icirc;t şi celor mici, &icirc;n cazul &icirc;n care oaspeţii vor pofti &icirc;mpreună cu copii lor.<br />\r\nLa al treilea nivel al complexului &quot;Select Banquet Hall&quot; se află sala stilată Neoclasic, cu o capacitate de găzduire a 100 de persoane. Pe o suprafaţă de 270 m.p. se pot organiza at&icirc;t nunţi &quot;&icirc;n cercul celor mai apropiate persoane&quot;, c&icirc;t şi alte ceremonii de proporţii medii: serata de absolvire, prezentări, petreceri şi alte banchete tematice.<br />\r\nAmbele săli ale complexului &quot;Select Banquet Hall&quot; sunt dotate cu tehnologii de ultimă generaţie. La dispoziţia oaspeţilor stau: Conexiune la Internet WI-FI cu viteză &icirc;naltă, proiectoare video, sisteme audio profesionale, scenă mobilă. Toate acestea permit petrecerea evenimentelor cu caracter de afaceri: conferinţe, simpoziumuri, treninguri, congrese.<br />\r\nUna din cele mai plăcute surprize ale &quot;Select Banquet Hall&quot; sunt două apartamente luxoase şi confortabile pentru tineri, unde proaspăt căsătoriţii vor putea &icirc;nt&icirc;lni prima lor dimineaţă &icirc;n calitate de soţ şi soţie. Pentru a ajunge la acest cuibuşor romantic, trebuie doar să urcaţi scările spre partea de sus a complexului. De-a lungul scării edificiului, de la acoperişul clădirii p&icirc;nă la primul nivel, sunt at&acirc;rnate nişte veioze mari şi frumoase, de un design neobişnuit, &icirc;n formă de trandafiri albi.<br />\r\nUna din cele mai distincte calităţi ale &quot;Select Banquet Hall&quot; este bucătăria.<br />\r\nComplexul dispune de trei bucătării la fiecare nivel, ce permite deservirea concomitentă a ambelor săli de banchete şi a oaspeţilor cafenelei, fără &icirc;nt&icirc;rzieri. Bucătăriile sunt dotate cu tehnologii inovatoare, care permit prepararea unor bucate sănătoase, păstr&icirc;nd maximal calităţile lor gustative. Iată de ce bucatele pentru mesele de sărbătoare se pregătesc pe loc şi nu altundeva, prin servicii de &quot;catering&quot;. Mai mult ca at&icirc;t, &icirc;n &quot;Select Banquet Hall&quot; se aplică o tehnologie specială de servire a bucatelor calde, care permit servirea concomitentă a 250 de feluri &icirc;n stare fierbinte.<br />\r\n<br />\r\n&Icirc;ncă unul din avantajele &quot;Select Banquet Hall&quot; este parcarea spaţioasă, pentru 45 de locuri.<br />\r\n<br />\r\nDoar un singur lucru mai este de accentuat, &icirc;n afară de cele spuse mai sus: dacă doriţi organizarea de calitate a oricărei sărbători, cu gust şi atenţie la fiecare detaliu, sunteţi binevenit la &quot;Select Banquet Hall&quot;.</p>\r\n', '', 'Select Banquet Hall\r\nПри организации свадьбы, юбилея, корпоратива или любого другого масштабного торжества, нельзя недооценивать ту роль, которая отводится месту проведения праздника. Если помпезности и вычурности вы предпочитаете легкость и лаконичность, то добро пожаловать в Select \r\nBanquet Hall. ', 'Unul din rolurile principale în cadrul organizării unei nunţi, ceremonii jubiliare, petreceri corporative sau altă sărbătoare fastuoasă, îi revine localului. Dacă preferaţi fineţea şi concizia în locul pomposului şi exigentului, atunci bine aţi venit la \"Select Banquet Hall\".', '', 0.00, '{\"X\":\"47.048752\",\"Y\":\"28.889146\"}', '', 1, 0, 0, 0, 0, 'select-banquet-hall', '2016-12-11 21:00:00', '2016-12-12 05:50:58'),
(73, 'Restaurantul PREZIDENT', 'Restaurantul PREZIDENT', 'Restaurantul PREZIDENT', '', '', '', '', 'Cream de fiecare data momente unice pentru clientii nostri, deschidem drumul catre arta culinara, inspiram pasiune prin felul in care ne prezentam in fata partenerilor nostri !', '', 0.00, '{\"X\":\"46.96346\",\"Y\":\"28.89088\"}', '', 1, 0, 0, 0, 0, 'restaurantul-prezident', '2016-12-11 21:00:00', '2016-12-12 05:56:59'),
(74, 'Marry Me Banquet Hall', 'Marry Me Banquet Hall', 'Marry Me Banquet Hall', '<p>Новый ресторанный комплекс в столице, готов удивить молодоженов и подарить им самый яркий и незабываемый праздник.</p>\r\n', '', '', '«MARRY ME» Banquet Hall - СВАДЬБА СО ВКУСОМ!\r\n', '', '', 0.00, '{\"X\":\"47.060356\",\"Y\":\"28.860067\"}', '', 1, 0, 0, 0, 0, 'marry-me-banquet-hall', '2016-12-11 21:00:00', '2016-12-12 06:05:01');
INSERT INTO `products` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `price`, `map`, `video`, `enabled`, `top`, `type`, `views`, `sort`, `slug`, `created_at`, `updated_at`) VALUES
(75, 'Banquet Premium', 'Banquet Premium', 'Banquet Premium', '', '', '', '\"Banquet Premium\" -ресторан наилучшего качества обсулживания.', 'Ofertele noastre o să vă uimească! \"Banquet Premium\" vă propune un asortiment vast de torturi și prăjituri !', '', 0.00, '{\"X\":\"47.051429\",\"Y\":\"28.863176\"}', '', 1, 0, 0, 0, 0, 'banquet-premium', '2016-12-11 21:00:00', '2016-12-12 08:00:49'),
(76, 'Restaurant Acasa la mama', 'Restaurant Acasa la mama', 'Restaurant Acasa la mama', '', '<p>Un local unde ai putea să te arunci &icirc;napoi &icirc;n copilărie, locul unde ai putea să te reții pentru ore bune fără senzație de grabă sau de a fi așteptat undeva. Un loc unde atmosfera și gazda amabilă să te facă să te simți chiar ca acasă. Un local &icirc;ncărcat cu tradiții unde fiecare obiect are propria sa istorie.<br />\r\nŞi dacă vorbim de casa părintească cine oare nu-şi amintește de bucatele mamei care caută mereu să intre &icirc;n toate poftele copiilor săi dragi, av&acirc;nd voie de fapt să lase m&acirc;ncare &icirc;n farfurie &icirc;nsă nu o făceau fiindcă era prea gustoasă!<br />\r\nRețetele bucatelor ce se gătesc la noi sunt preluate &icirc;n mare măsură de la gospodinele țărănești din zona centrală a Moldovei care au reușit &icirc;ntotdeauna să uimească mesenii străini cu bucatele lor simple dar gătite cu mult rafinament și dragoste. Zeama moldovenească ce se gătește exclusiv numai din găina de casă servită cu turtă și ardei iute , te va ului și vei savura prin gust și miros o nostalgie profundă legată de casa părintească sau a bunicilor de la țară! Şi la sigur, mămăliguța cu pește și mujdei, sau cighirii delicioși pregătiți după tradițiile țărănești nu te vor lăsa indiferent!<br />\r\n&Icirc;mbin&acirc;nd tradiția cu modernul, păstr&acirc;nd cu rafinament calitatea bucatelor tradiționale moldovenești , am dezvoltat un Restaurant cu personalitate ce este apreciat şi &icirc;ndrăgit de toți, indiferent de v&acirc;rsta oaspeților sau preferințele lor ulterioare.<br />\r\nVino să te simți bine alături de noi şi lasă vinișorul de casă cu plăcintă să dezlege limbile prietenilor tăi!<br />\r\nVino! Trăiește Moldovenește! Măn&acirc;ncă Moldovenește! Simte Moldovenește!</p>\r\n', '', 'Restaurant Acasa la mama- это ресторан, в которым вы насладитесь не только приятным отдыхом, но и почувствуете себя дома у мамы.', 'ACASĂ LA MAMA a fost numit localul nu întâmplator. Ideea de a crea așa un local apăruse datorită dorului de ceva special și sfânt pentru fiecare din noi.', '', 0.00, '{\"X\":\"47.03547\",\"Y\":\"28.839891\"}', '', 1, 0, 0, 0, 0, 'restaurant-acasa-la-mama', '2016-12-11 21:00:00', '2016-12-12 08:09:36'),
(77, 'Restaurant Vila Veche', 'Restaurant Vila Veche', 'Restaurant Vila Veche', '', '', '', '\"Vila Veche\"- уютный ресторан с традиционной кухней, где вы сможете отпраздновать любое событие вашей жизни.', 'Restaurantul \"Vila Veche\" este acel loc în care orice petrecere devine una specială.', '', 0.00, '{\"X\":\"47.019524\",\"Y\":\"28.833738\"}', '', 1, 0, 0, 0, 0, 'restaurant-vila-veche', '2016-12-11 21:00:00', '2016-12-12 08:23:35'),
(78, 'Restaurant Vikont', 'Restaurant Vikont', 'Restaurant Vikont', '<p>Достоинств у ресторана &quot;Vikont&quot; немало. Интерьер зала, стилизованный под французский модерн, создает атмосферу уюта и душевного комфорта. Мягкий свет огромных роскошных витражей интригует и предлагает Вашим гостям почувствовать себя расслабленно и легко и абсолютно свободными на этом вечере от повседневных забот. Регулируемое освещение в любой момент придаст нотку камерности Вашему празднику, а ковровое покрытие в районе обеденной зоны приглушает стук каблучков и придает мягкости ощущениям.<br />\r\n<br />\r\nВ любой момент праздника Ваши гости могут отдохнуть от застолья и танцев на большом и удобном диване, чтобы побеседовать с друзьями или просто выпить чашечку кофе, которую подадут приветливые официанты. А если захочется выпить необычный коктейль или холодненького пива &ndash; то барная стойка прямо в зале и Вам с радостью все это подадут!<br />\r\n<br />\r\nПлазменная панель предоставит Вам возможность развлечь своих гостей домашним видео и фото шоу, а если душа просит, то вечер легко можно превратить в караоке &ndash; вечеринку. Разнообразные прожектора и софиты, размещенные над зоной танцпола, сделают Ваши танцы еще более зажигательней, а матовая плитка никому не даст поскользнуться.<br />\r\n<br />\r\nБольшая парковка позволит гостям оставить машину в непосредственной близости от ресторана и полностью расслабиться в его обволакивающей и теплой атмосфере.<br />\r\n<br />\r\nЧто касается кухни ресторана, то она совмещает в себе классику и современность, европейские и молдавские традиции.<br />\r\n<br />\r\nМы стараемся максимально учитывать пожелания гостей и их вкусовые пристрастия, заботиться о том, чтобы стол был не только красивым, но и по-настоящему вкусным!</p>\r\n', '', '', 'Желаете провести красивую свадьбу или веселый семейный праздник: от дня рождения до кумэтрии, или ищете интересное место для корпоративной вечеринки – обратите внимание на зал \"Vikont\". Для любых торжеств от 10 до 70 приглашенных или для фуршета до 100 персон \"Vikont\" – хороший выбор!', '', '', 0.00, '{\"X\":\"48.35909\",\"Y\":\"27.08753\"}', '', 1, 0, 0, 0, 0, 'restaurant-vikont', '2016-12-11 21:00:00', '2016-12-12 08:29:20'),
(79, 'Restaurant Luceafarul', 'Restaurant Luceafarul', 'Restaurant Luceafarul', '<p>Мы превратили этот сложный процесс в искусство &ndash; и получаем от этого удовольствие!&nbsp;<br />\r\n<br />\r\nНам нравится, когда продуманы мельчайшие детали и учтены все факторы: от вкусовых предпочтений каждого гостя до температуры вина.<br />\r\n<br />\r\nНас вдохновляет, когда событие запоминается приятной обстановкой, безупречным обслуживанием, изысканными закусками, шикарной сервировкой и отличным настроением.<br />\r\n<br />\r\nРесторан &quot;Luceafarul&quot; - это<br />\r\n<br />\r\n*Высококвалифицированный персонал<br />\r\n*Мероприятия до 400 гостей<br />\r\n*Меню - как концепция мероприятия<br />\r\n*Опыт организации мероприятий более 10 лет</p>\r\n', '', '', 'Для нас банкет - яркое и вкусное событие.', '', '', 0.00, '{\"X\":\"47.042999\",\"Y\":\"28.761585\"}', '', 1, 0, 0, 0, 0, 'restaurant-luceafarul', '2016-12-11 21:00:00', '2016-12-12 08:34:09'),
(81, 'Fotoland', 'Fotoland', 'Fotoland', '', '', '', 'FotoLand — это профессиональный студийный комплекс , состоящий из шести отдельных съемочных залов оборудованных профессиональным светом и современная школа фотографии. ', '', '', 0.00, '{\"X\":\"32.108965\",\"Y\":\"34.819707\"}', '', 1, 0, 1, 0, 0, 'fotoland', '2016-12-11 21:00:00', '2016-12-19 09:35:21'),
(82, 'Pic.Production', 'Pic.Production', 'Pic.Production', '<p>Фото, видео услуги<br />\r\n- Свадьбы<br />\r\n- Мероприятия<br />\r\n- Семейная съемка<br />\r\n- Комерциаальная съемка</p>\r\n', '', '<p>Photo &amp; Video Production&nbsp;!<br />\r\n- Wedding<br />\r\n- Event<br />\r\n- Family-sessions<br />\r\n- Love-stories<br />\r\n- Comercials</p>\r\n', 'Фото, видео услуги.', '', '', 0.00, '{\"X\":\"47.021385\",\"Y\":\"28.826021\"}', '', 1, 0, 1, 0, 0, 'picproduction', '2016-12-11 21:00:00', '2016-12-19 09:35:07'),
(83, 'Welyon Studio', 'Welyon Studio', 'Welyon Studio', '', '<p>Pasiunea de muzică, filmare și fotografiere, ne-a motivat mereu să mergem &icirc;n pas cu timpul, să tindem spre ceva mai bun,spre ceva mai calitativ. &Icirc;n prezent activăm și organizăm diverse activități, dispunem de tehnică performantă și de calitate inaltă. Avem&nbsp;specialiști calificați &icirc;n domeniu, care de fiecare dată vin cu idei noi și cu o viziune unică pentru fiecare eveniment. &Icirc;n echipa Welyon avem specialiști &icirc;n muzică, vocaliști, aranjori, moderatori, regizori, videografi, fotografi cu facultăți terminate și studii de calificare in domeniu</p>\r\n', '', '', 'Welyon studio a început activitatea în septembrie 2007 într-o componență mică care mai apoi s-a dezvoltat într-o echipa cu nivel profesionist.', '', 0.00, '{\"X\":\"\",\"Y\":\"\"}', '', 1, 0, 1, 0, 0, 'welyon-studio', '2016-12-11 21:00:00', '2016-12-19 09:34:40'),
(84, 'SelfieBOX', 'SelfieBOX', 'SelfieBOX', '', '', '', 'SelfieBox- Фотоуслуги', '', '', 0.00, '{\"X\":\"\",\"Y\":\"\"}', '', 1, 0, 1, 0, 0, 'selfiebox', '2016-12-11 21:00:00', '2016-12-19 09:34:55'),
(85, 'VipStudio', 'VipStudio', 'VipStudio', '', '', '', 'VipStudio- фото- видеоуслуги.', 'Servicii foto și video profesionale pentru nuntă, botez, petrecere.', '', 0.00, '{\"X\":\"\",\"Y\":\"\"}', '', 1, 1, 1, 0, 0, 'vipstudio', '2016-12-11 21:00:00', '2016-12-12 09:56:39'),
(86, 'Live Beat', 'Live Beat', 'Live Beat', '<p>&quot;Live Beat&quot; &mdash; это крепкое содружество профессиональных музыкантов, прекрасно дополняющих друг друга и объединенных желанием всегда расти и прогрессировать. Коллектив сформировался в 2010 году.&nbsp;</p>\r\n\r\n<p>На сегодняшний момент в арсенале группы каверы на ретро и современные хиты, а также в стиле lounge, chillout, то есть на любой вкус. Исполняются песни на английском, русском и румынском языках. Кроме того, репертуар постоянно расширяется.</p>\r\n\r\n<p>&nbsp;&quot;Live Beat&quot; успела поучаствовать во множестве сольных евентах такие как: 5-летие Shopping Malldova, &laquo;Марш Света&raquo; компании Moldcell&amp;Save Life, &laquo;Midnight in Paris&raquo; новогодней вечеринке в Leogrand-е. Так же бэнд часто приглашают выступить на частных мероприятиях: корпоративы, дни рождения, свадьбаы, выпускные.</p>\r\n\r\n<p>Состав группы:</p>\r\n\r\n<p>Катарина Санду &mdash; вокал.</p>\r\n\r\n<p>Владимир Садовик &mdash; бас-гитара.</p>\r\n\r\n<p>Анджей Хадзевич &mdash; гитара.</p>\r\n\r\n<p>Евгений Мартя &mdash; ударные.</p>\r\n\r\n<p>Василий Прокопчюк &mdash; саксофон.</p>\r\n\r\n<p>Геннадий Казак &mdash; труба.</p>\r\n', '', '', '\"Live Beat\" — это крепкое содружество профессиональных музыкантов, прекрасно дополняющих друг друга и объединенных желанием всегда расти и прогрессировать. Коллектив сформировался в 2010 году. ', '', '', 0.00, '{\"X\":\"\",\"Y\":\"\"}', 'iSpodylm86A', 1, 1, 1, 0, 0, 'live-beat', '2017-01-10 21:00:00', '2017-01-11 11:32:47');

-- --------------------------------------------------------

--
-- Структура таблицы `products_categories`
--

CREATE TABLE `products_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `products_categories`
--

INSERT INTO `products_categories` (`id`, `products_id`, `categories_id`) VALUES
(1, 21, 6),
(2, 21, 10),
(3, 21, 17),
(4, 22, 6),
(5, 23, 5),
(6, 23, 7),
(7, 23, 11),
(8, 22, 5),
(9, 22, 7),
(10, 22, 8),
(11, 22, 10),
(12, 22, 11),
(13, 24, 6),
(14, 24, 7),
(15, 24, 20),
(16, 26, 5),
(17, 26, 7),
(18, 26, 11),
(19, 27, 5),
(20, 27, 7),
(21, 27, 11),
(22, 28, 8),
(23, 28, 11),
(24, 28, 12),
(25, 29, 5),
(26, 29, 7),
(27, 29, 8),
(28, 29, 11),
(29, 31, 5),
(30, 31, 7),
(31, 31, 8),
(32, 31, 10),
(33, 31, 11),
(34, 31, 12),
(35, 30, 5),
(36, 30, 7),
(37, 30, 8),
(38, 30, 10),
(39, 30, 11),
(40, 32, 5),
(41, 32, 7),
(42, 32, 10),
(43, 32, 11),
(44, 32, 12),
(45, 33, 5),
(46, 33, 7),
(47, 33, 11),
(48, 33, 12),
(56, 35, 6),
(57, 35, 7),
(58, 35, 9),
(59, 35, 10),
(60, 35, 11),
(61, 35, 12),
(62, 35, 24),
(63, 21, 7),
(64, 21, 9),
(65, 21, 11),
(66, 21, 12),
(67, 36, 6),
(68, 36, 7),
(69, 36, 9),
(70, 36, 10),
(71, 36, 11),
(72, 36, 12),
(73, 36, 20),
(74, 37, 6),
(75, 37, 7),
(76, 37, 8),
(77, 37, 9),
(78, 37, 10),
(79, 37, 11),
(80, 37, 12),
(81, 37, 37),
(83, 38, 7),
(84, 38, 8),
(85, 38, 9),
(86, 38, 10),
(87, 38, 11),
(88, 38, 12),
(89, 39, 5),
(90, 39, 8),
(91, 39, 10),
(92, 39, 11),
(93, 39, 12),
(94, 28, 21),
(95, 40, 7),
(96, 40, 8),
(97, 40, 9),
(98, 40, 11),
(99, 40, 12),
(101, 41, 5),
(102, 41, 7),
(103, 41, 10),
(104, 41, 11),
(105, 42, 5),
(106, 42, 7),
(107, 42, 8),
(108, 42, 9),
(109, 42, 10),
(110, 42, 11),
(112, 43, 7),
(113, 43, 8),
(114, 43, 10),
(115, 43, 11),
(116, 43, 12),
(117, 43, 21),
(118, 44, 5),
(119, 44, 7),
(120, 44, 10),
(121, 44, 11),
(124, 45, 7),
(125, 45, 8),
(126, 45, 10),
(127, 45, 11),
(128, 45, 21),
(131, 46, 7),
(132, 46, 8),
(133, 46, 9),
(134, 46, 10),
(135, 46, 11),
(136, 46, 12),
(137, 46, 21),
(138, 47, 5),
(139, 47, 7),
(140, 47, 10),
(141, 47, 11),
(142, 47, 12),
(145, 48, 5),
(146, 48, 7),
(147, 48, 8),
(148, 48, 11),
(151, 49, 5),
(152, 49, 7),
(153, 49, 8),
(154, 49, 10),
(155, 49, 11),
(156, 49, 12),
(157, 49, 24),
(158, 50, 5),
(159, 50, 7),
(160, 50, 10),
(161, 50, 11),
(164, 51, 5),
(165, 51, 7),
(166, 51, 10),
(167, 51, 11),
(168, 52, 5),
(169, 52, 7),
(170, 52, 8),
(171, 52, 10),
(172, 52, 11),
(173, 53, 5),
(174, 53, 7),
(175, 53, 8),
(176, 53, 10),
(177, 53, 11),
(178, 54, 5),
(179, 54, 7),
(180, 54, 8),
(181, 54, 10),
(182, 54, 11),
(183, 55, 5),
(184, 55, 7),
(185, 55, 8),
(186, 55, 10),
(187, 55, 11),
(188, 56, 5),
(189, 56, 7),
(190, 56, 8),
(191, 56, 10),
(192, 56, 11),
(193, 56, 12),
(194, 57, 5),
(195, 57, 7),
(196, 57, 8),
(197, 57, 10),
(198, 57, 11),
(199, 57, 12),
(200, 58, 5),
(201, 58, 7),
(202, 58, 10),
(203, 58, 11),
(204, 59, 5),
(205, 59, 8),
(206, 59, 10),
(207, 59, 11),
(208, 60, 5),
(209, 60, 7),
(210, 60, 10),
(211, 60, 11),
(212, 61, 5),
(213, 61, 7),
(214, 61, 10),
(215, 61, 11),
(216, 62, 8),
(217, 62, 11),
(218, 62, 12),
(219, 62, 21),
(220, 63, 7),
(221, 63, 8),
(222, 63, 10),
(223, 63, 11),
(224, 64, 7),
(225, 64, 8),
(226, 64, 10),
(227, 64, 11),
(228, 65, 7),
(229, 65, 8),
(230, 65, 10),
(231, 65, 11),
(232, 65, 12),
(233, 66, 7),
(234, 66, 8),
(235, 66, 10),
(236, 66, 11),
(237, 68, 5),
(238, 68, 7),
(239, 68, 8),
(240, 68, 10),
(241, 68, 11),
(242, 69, 5),
(243, 69, 8),
(244, 69, 10),
(245, 69, 11),
(246, 70, 6),
(247, 70, 7),
(248, 70, 8),
(249, 70, 11),
(250, 70, 21),
(251, 71, 6),
(252, 71, 8),
(253, 71, 11),
(254, 71, 12),
(255, 71, 21),
(256, 71, 40),
(257, 72, 6),
(258, 72, 7),
(259, 72, 8),
(260, 72, 10),
(261, 72, 11),
(262, 72, 12),
(263, 72, 21),
(264, 73, 6),
(265, 73, 7),
(266, 73, 8),
(267, 73, 10),
(268, 73, 11),
(269, 73, 21),
(270, 74, 6),
(271, 74, 8),
(272, 74, 21),
(273, 75, 6),
(274, 75, 7),
(275, 75, 8),
(276, 75, 11),
(277, 75, 21),
(278, 76, 6),
(279, 76, 7),
(280, 76, 8),
(281, 76, 11),
(282, 76, 21),
(283, 77, 6),
(284, 77, 7),
(285, 77, 8),
(286, 77, 11),
(287, 77, 21),
(288, 78, 6),
(289, 78, 7),
(290, 78, 8),
(291, 78, 11),
(292, 78, 21),
(293, 79, 6),
(294, 79, 7),
(295, 79, 8),
(296, 79, 10),
(297, 79, 11),
(298, 79, 21),
(300, 81, 20),
(301, 82, 20),
(302, 83, 20),
(303, 84, 20),
(304, 85, 20),
(308, 16, 5),
(309, 16, 10),
(310, 16, 11),
(311, 17, 5),
(313, 17, 11),
(314, 86, 6),
(315, 86, 7),
(316, 86, 9),
(317, 86, 10),
(318, 86, 11),
(319, 86, 24),
(321, 17, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `products_contacts`
--

CREATE TABLE `products_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `products_contacts`
--

INSERT INTO `products_contacts` (`id`, `product_id`, `contact_id`, `name`, `name_ro`, `name_en`) VALUES
(17, 24, 1, '', '', ''),
(18, 24, 2, '', '', ''),
(19, 24, 3, '', '', ''),
(20, 24, 4, '', '', ''),
(25, 22, 1, '0608 75 556', '0608 75 556', '0608 75 556'),
(26, 22, 2, 'info@paparazzi-cafe.md', 'info@paparazzi-cafe.md', 'info@paparazzi-cafe.md'),
(27, 22, 3, 'Ул. Лазо, 40', 'str.Lazo 40', 'str.Lazo 40'),
(28, 22, 4, 'С 12:00 до 04:00', 'De la 12:00 pînă la 04:00', 'From 12:00 to 04:00'),
(29, 26, 1, '0792 13 521', '0792 13 521', '0792 13 521'),
(30, 26, 2, 'oleg.bolboceanu@gmail.com', 'oleg.bolboceanu@gmail.com', 'oleg.bolboceanu@gmail.com'),
(31, 26, 3, 'Bd. Moscovei 19\r\nКишинёв', 'Bd. Moscovei 19\r\nКишинёв', 'Bd. Moscovei 19\r\nКишинёв'),
(32, 26, 4, '', '', ''),
(33, 27, 1, '0606 80 068', '0606 80 068', '0606 80 068'),
(34, 27, 2, '', '', ''),
(35, 27, 3, 'Bucuresti 68\r\nКишинёв', 'Bucuresti 68\r\nКишинёв', 'Bucuresti 68\r\nКишинёв'),
(36, 27, 4, '', '', ''),
(37, 28, 1, '0787 70 077\r\n', '0787 70 077\r\n', '0787 70 077\r\n'),
(38, 28, 2, 'info@penthouse.md\r\n', 'info@penthouse.md\r\n', 'info@penthouse.md\r\n'),
(39, 28, 3, '', '', ''),
(40, 28, 4, '', '', ''),
(41, 29, 1, '0621 99 188', '0621 99 188', '0621 99 188'),
(42, 29, 2, '', '', ''),
(43, 29, 3, 'bd. D.Cantemir, 3/2\r\nКишинёв', 'bd. D.Cantemir, 3/2\r\nКишинёв', 'bd. D.Cantemir, 3/2\r\nКишинёв'),
(44, 29, 4, '', '', ''),
(45, 30, 1, '060 32 33 33', '060 32 33 33', '060 32 33 33'),
(46, 30, 2, 'pinkmartinicafe@yahoo.com', 'pinkmartinicafe@yahoo.com', 'pinkmartinicafe@yahoo.com'),
(47, 30, 3, 'Bd. Constantin Negruzzi, 3', 'Bd. Constantin Negruzzi, 3', 'Bd. Constantin Negruzzi, 3'),
(48, 30, 4, '18-00 : 05-00', '18-00 : 05-00', '18-00 : 05-00'),
(49, 31, 1, '060 57 77 45', '060 57 77 45', '060 57 77 45'),
(50, 31, 2, '', '', ''),
(51, 31, 3, 'Bd. Renasterii, 12', 'Bd. Renasterii, 12', 'Bd. Renasterii, 12'),
(52, 31, 4, '12-00 : 04-00', '12-00 : 04-00', '12-00 : 04-00'),
(53, 32, 1, '079 55 55 52', '079 55 55 52', '079 55 55 52'),
(54, 32, 2, 'office@veranda.md', 'office@veranda.md', 'office@veranda.md'),
(55, 32, 3, 'Bd. Negruzzi, 2/4', 'Bd. Negruzzi, 2/4', 'Bd. Negruzzi, 2/4'),
(56, 32, 4, '21-00 : 05-00', '21-00 : 05-00', '21-00 : 05-00'),
(57, 33, 1, '069 30 01 00', '069 30 01 00', '069 30 01 00'),
(58, 33, 2, 'info@motif.md', 'info@motif.md', 'info@motif.md'),
(59, 33, 3, 'Str. Calea Orheiului, 17/1', 'Str. Calea Orheiului, 17/1', 'Str. Calea Orheiului, 17/1'),
(60, 33, 4, '24/24', '24/24', '24/24'),
(65, 35, 1, '079662277', '079662277', '079662277'),
(66, 35, 2, '', '', ''),
(67, 35, 3, '', '', ''),
(68, 35, 4, '24/24', '24/24', '24/24'),
(69, 21, 1, '', '', ''),
(70, 21, 2, '', '', ''),
(71, 21, 3, '', '', ''),
(72, 21, 4, '', '', ''),
(73, 36, 1, '', '', ''),
(74, 36, 2, '', '', ''),
(75, 36, 3, '', '', ''),
(76, 36, 4, '', '', ''),
(77, 37, 1, '069 90 09 11', '069 90 09 11', '069 90 09 11'),
(78, 37, 2, 'cafe.gazetto@mail.ru', 'cafe.gazetto@mail.ru', 'cafe.gazetto@mail.ru'),
(79, 37, 3, 'Str. Kiev, 16/1', 'Str. Kiev, 16/1', 'Str. Kiev, 16/1'),
(80, 37, 4, '09-00 : 00-00', '09-00 : 00-00', '09-00 : 00-00'),
(81, 38, 1, '0602 24 422', '0602 24 422', '0602 24 422'),
(82, 38, 2, 'versenzcafe@mail.ru', 'versenzcafe@mail.ru', 'versenzcafe@mail.ru'),
(83, 38, 3, 'Московский Проспект 15/5 Кишинев, Молдова', 'Bulevardul Moscova 15/5, Chișinău, Moldova', 'Moscow Avenue 15/5 Chisinau, Moldova'),
(84, 38, 4, '11-00 : 02-00', '11-00 : 02-00', '11-00 : 02-00'),
(85, 39, 1, '079 90 90 99', '079 90 90 99', '079 90 90 99'),
(86, 39, 2, '', '', ''),
(87, 39, 3, 'ул. Киевская 9 . Кишинев', '9 Kiev st., Chisinau', '9 Kiev st., Chisinau'),
(88, 39, 4, '24/24', '24/24', '24/24'),
(89, 40, 1, '0676 05 090', '0676 05 090', '0676 05 090'),
(90, 40, 2, 'admin@sherlok-holmes.md', 'admin@sherlok-holmes.md', 'admin@sherlok-holmes.md'),
(91, 40, 3, 'Independentei 5a\r\nКишинёв', 'Independentei 5a\r\nКишинёв', 'Independentei 5a\r\nКишинёв'),
(92, 40, 4, '24/24', '24/24', '24/24'),
(93, 41, 1, '076 73 97 39', '076 73 97 39', '076 73 97 39'),
(94, 41, 2, 'chisinau.skybar@gmail.com', 'chisinau.skybar@gmail.com', 'chisinau.skybar@gmail.com'),
(95, 41, 3, 'Str. Albișoara, 4', 'Str. Albișoara, 4', 'Str. Albișoara, 4'),
(96, 41, 4, '', '', ''),
(97, 42, 1, '079 72 22 21', '079 72 22 21', '079 72 22 21'),
(98, 42, 2, 'twizted1326@gmail.com', 'twizted1326@gmail.com', 'twizted1326@gmail.com'),
(99, 42, 3, 'ул. Триколорулуй 34 Кишинёв ', 'str. Tricolorului 34 Chisinau', 'str. Tricolorului 34 Chisinau'),
(100, 42, 4, 'Понедельник 9.00 - 1.00\r\nВторник 9.00 - 1.00\r\nСреда 9.00 - 1.00\r\nЧетверг 9.00 - 1.00\r\nПятница 9.00 - 5.00\r\nСуббота 9.00 - 5.00\r\nВоскресенье ЗАКРЫТО', 'Luni 9.00 - 1.00\r\nMarți 9.00 - 1.00\r\nMiercuri 9.00 - 1.00\r\nJoi 9.00 - 1.00\r\nVineri 9.00 - 5.00\r\nSîmbătă 9.00 - 5.00\r\nDuminică ÎNCHIS ', 'Monday 9.00 - 1.00\r\nTuesday 9.00 - 1.00\r\nWednesday 9.00 - 1.00\r\nThursday 9.00 - 1.00\r\nFriday 9.00 - 5.00\r\nSaturday 9.00 - 5.00\r\nSunday CLOSED '),
(101, 43, 1, '078 99 44 44', '078 99 44 44', '078 99 44 44'),
(102, 43, 2, 'twizted1326@gmail.com', 'twizted1326@gmail.com', 'twizted1326@gmail.com'),
(103, 43, 3, 'Negruzzi 2/4\r\nКишинёв', 'Negruzzi 2/4\r\nКишинёв', 'Negruzzi 2/4\r\nКишинёв'),
(104, 43, 4, '24/24', '24/24', '24/24'),
(105, 44, 1, '060 20 40 40', '060 20 40 40', '060 20 40 40'),
(106, 44, 2, '', '', ''),
(107, 44, 3, 'Str. Alecu Russo, 15', 'Str. Alecu Russo, 15', 'Str. Alecu Russo, 15'),
(108, 44, 4, '21-00 : 06-00', '21-00 : 06-00', '21-00 : 06-00'),
(109, 45, 1, '', '', ''),
(110, 45, 2, '', '', ''),
(111, 45, 3, '', '', ''),
(112, 45, 4, '', '', ''),
(113, 46, 1, '068 90 65 45', '068 90 65 45', '068 90 65 45'),
(114, 46, 2, 'gastrobar@list.ru', 'gastrobar@list.ru', 'gastrobar@list.ru'),
(115, 46, 3, 'Alexandru Bernardazzi 66\r\nКишинёв', 'Alexandru Bernardazzi 66\r\nКишинёв', 'Alexandru Bernardazzi 66\r\nКишинёв'),
(116, 46, 4, '14:00-23:00', '14:00-23:00', '14:00-23:00'),
(117, 47, 1, '078 72 07 20', '078 72 07 20', '078 72 07 20'),
(118, 47, 2, '', '', ''),
(119, 47, 3, 'Str. Mitropolitul Varlaam, 63/23', 'Str. Mitropolitul Varlaam, 63/23', 'Str. Mitropolitul Varlaam, 63/23'),
(120, 47, 4, '21-00 : 05-00', '21-00 : 05-00', '21-00 : 05-00'),
(121, 48, 1, '079 88 87 77', '079 88 87 77', '079 88 87 77'),
(122, 48, 2, 'office@laromaclub.md', 'office@laromaclub.md', 'office@laromaclub.md'),
(123, 48, 3, 'Str. Albisoara, 40/1', 'Str. Albisoara, 40/1', 'Str. Albisoara, 40/1'),
(124, 48, 4, '21-00 : 07-00', '21-00 : 07-00', '21-00 : 07-00'),
(125, 49, 1, '', '', ''),
(126, 49, 2, '', '', ''),
(127, 49, 3, '', '', ''),
(128, 49, 4, '', '', ''),
(129, 50, 1, '', '', ''),
(130, 50, 2, '', '', ''),
(131, 50, 3, '', '', ''),
(132, 50, 4, '', '', ''),
(133, 51, 1, '0795 55 552', '0795 55 552', '0795 55 552'),
(134, 51, 2, 'Office@veranda.md', 'Office@veranda.md', 'Office@veranda.md'),
(135, 51, 3, 'bd. Negruzzi 2/4', 'bd. Negruzzi 2/4', 'bd. Negruzzi 2/4'),
(136, 51, 4, '21-00 : 05-00', '21-00 : 05-00', '21-00 : 05-00'),
(137, 52, 1, '0783 14 314', '0783 14 314', '0783 14 314'),
(138, 52, 2, '', '', ''),
(139, 52, 3, 'Мирча чел Бэтрын 7', 'Mircea cel Batrin 7', 'Mircea cel Batrin 7'),
(140, 52, 4, '10-00 : 6-30', '10-00 : 6-30', '10-00 : 6-30'),
(141, 53, 1, '0793 33 000', '0793 33 000', '0793 33 000'),
(142, 53, 2, '', '', ''),
(143, 53, 3, 'Ренаштерей 5', 'Renasterii 5', 'Renasterii 5'),
(144, 53, 4, 'Круглосуточно', '', ''),
(145, 54, 1, '0792 22 222', '0792 22 222', '0792 22 222'),
(146, 54, 2, 'denis.tcaci@gmail.com', 'denis.tcaci@gmail.com', 'denis.tcaci@gmail.com'),
(147, 54, 3, 'Ул. Tăbăcăria Veche, 23', 'Str. Tăbăcăria Veche, 23', 'Str. Tăbăcăria Veche, 23'),
(148, 54, 4, '18-00 : 6-00', '18-00 : 6-00', '18-00 : 6-00'),
(149, 55, 1, '+373 022 664120\r\n+373 079 959033', '+373 022 664120\r\n+373 079 959033', '+373 022 664120\r\n+373 079 959033'),
(150, 55, 2, '', '', ''),
(151, 55, 3, 'Бл. Дачия 18/1', 'bd. Dacia 18/1', 'bd. Dacia 18/1'),
(152, 55, 4, '21-00 : 6-00', '21-00 : 6-00', '21-00 : 6-00'),
(153, 56, 1, '+373 78287486 \r\n  022884488', '+373 78287486 \r\n  022884488', '+373 78287486 \r\n  022884488'),
(154, 56, 2, 'info.karaokeatrium@gmail.com', 'info.karaokeatrium@gmail.com', 'info.karaokeatrium@gmail.com'),
(155, 56, 3, 'Ул. Албишоара 4', 'Str. Albişoara 4', 'Str. Albişoara 4'),
(156, 56, 4, '21-00 : 6-00', '21-00 : 6-00', '21-00 : 6-00'),
(157, 57, 1, ' 079 79 44 44\r\n 068 10 44 44', ' 079 79 44 44\r\n 068 10 44 44', ' 079 79 44 44\r\n 068 10 44 44'),
(158, 57, 2, '44@44.md', '44@44.md', '44@44.md'),
(159, 57, 3, 'Ул.Sarmizegetusa 18/5', 'Str.Sarmizegetusa 18/5', 'Str.Sarmizegetusa 18/5'),
(160, 57, 4, '24/24', '24/24', '24/24'),
(161, 58, 1, '0600 30 779', '0600 30 779', '0600 30 779'),
(162, 58, 2, '', '', ''),
(163, 58, 3, 'Ул. Constantin Brâncuși 3', 'Str. Constantin Brâncuși 3', 'Str. Constantin Brâncuși 3'),
(164, 58, 4, '21-00 : 05-00', '21-00 : 05-00', '21-00 : 05-00'),
(165, 59, 1, '079889989', '079889989', '079889989'),
(166, 59, 2, 'graur.svetlana@gmail.com', 'graur.svetlana@gmail.com', 'graur.svetlana@gmail.com'),
(167, 59, 3, 'Ул. Mircea cel Batrin 3A', 'Str. Mircea cel Batrin 3A', 'Str. Mircea cel Batrin 3A'),
(168, 59, 4, '17-00 : 06-00', '17-00 : 06-00', '17-00 : 06-00'),
(169, 60, 1, '0604 35 949', '0604 35 949', '0604 35 949'),
(170, 60, 2, '', '', ''),
(171, 60, 3, 'Ул. Дечебал 80/1', 'Str. Decebal 80/1', 'Str. Decebal 80/1'),
(172, 60, 4, '20-00 : 06-00', '20-00 : 06-00', '20-00 : 06-00'),
(173, 61, 1, '0699 59 959', '0699 59 959', '0699 59 959'),
(174, 61, 2, '', '', ''),
(175, 61, 3, 'Ул. Штефан Чел Маре 6', 'Str. Stefan cel Mare 6', 'Str. Stefan cel Mare 6'),
(176, 61, 4, '21-00 : 06-00', '21-00 : 06-00', '21-00 : 06-00'),
(177, 62, 1, '0682 27 997', '0682 27 997', '0682 27 997'),
(178, 62, 2, 'marketing@blinoff.md', 'marketing@blinoff.md', 'marketing@blinoff.md'),
(179, 62, 3, 'Ул.Измаил 84\r\nУл.К. Брынкуш 110', 'Str. Ismail 84\r\nStr. K. Brinkus 110', 'Str. Ismail 84\r\nStr. K. Brinkus 110'),
(180, 62, 4, '09-30 : 22-00', '09-30 : 22-00', '09-30 : 22-00'),
(181, 63, 1, '0685 75 575', '0685 75 575', '0685 75 575'),
(182, 63, 2, 'ala.gurman@gmail.com', 'ala.gurman@gmail.com', 'ala.gurman@gmail.com'),
(183, 63, 3, 'Ул. Арборилор, 17/2', 'Str. Arborilor, 17/2', 'Str. Arborilor, 17/2'),
(184, 63, 4, '10-00 : 02-00', '10-00 : 02-00', '10-00 : 02-00'),
(185, 64, 1, '0697 44 744', '0697 44 744', '0697 44 744'),
(186, 64, 2, '', '', ''),
(187, 64, 3, 'ул. Киев, 6/6', 'Str. Kiev 6/6', 'Str. Kiev 6/6'),
(188, 64, 4, '11-00 : 00-00', '11-00 : 00-00', '11-00 : 00-00'),
(189, 65, 1, '0793 97 979', '0793 97 979', '0793 97 979'),
(190, 65, 2, 'patri-riscani@mail.ru', 'patri-riscani@mail.ru', 'patri-riscani@mail.ru'),
(191, 65, 3, 'Ул. Студенческая, 7/5', 'Str. Studenților, 7/5', 'Str. Studenților, 7/5'),
(192, 65, 4, '10-00 : 02-00', '10-00 : 02-00', '10-00 : 02-00'),
(193, 66, 1, '060 800 400', '060 800 400', '060 800 400'),
(194, 66, 2, '', '', ''),
(195, 66, 3, 'Ул. А. матеевич 113А', 'Str. A. Mateevici 113A', 'SЫtr. A. Mateevici 113A'),
(196, 66, 4, '24/24', '24/24', '24/24'),
(197, 67, 1, '076705000', '076705000', '076705000'),
(198, 67, 2, 'megustomd@gmail.com', 'megustomd@gmail.com', 'megustomd@gmail.com'),
(199, 67, 3, 'Ул. Михай Еминеску, 56', 'Str.Mihai Eminescu, 56', 'Str.Mihai Eminescu, 56'),
(200, 67, 4, '11-00 : 23-00', '11-00 : 23-00', '11-00 : 23-00'),
(201, 68, 1, '0608 67 788', '0608 67 788', '0608 67 788'),
(202, 68, 2, 'ciudina1984@mail.ru', 'ciudina1984@mail.ru', 'ciudina1984@mail.ru'),
(203, 68, 3, 'Ул. Албишоара, 4 ТЦ \"Atrium\"', 'Str. Albosoara, 4 \"Atrium\"', 'Str. Albosoara, 4 \"Atrium\"'),
(204, 68, 4, '10-00 : 02-00', '10-00 : 02-00', '10-00 : 02-00'),
(205, 69, 1, '0793 03 033', '0793 03 033', '0793 03 033'),
(206, 69, 2, 'pianooobar@gmail.com', 'pianooobar@gmail.com', 'pianooobar@gmail.com'),
(207, 69, 3, 'Ул. Гагарина 14', 'Str. Gagarin 14', 'Str. Gagarin 14'),
(208, 69, 4, '15-00 : 03-00', '15-00 : 03-00', '15-00 : 03-00'),
(209, 70, 1, '0604 33 433', '0604 33 433', '0604 33 433'),
(210, 70, 2, 'office@gadenpalace.md', 'office@gadenpalace.md', 'office@gadenpalace.md'),
(211, 70, 3, 'Ул. Василе Александри, 8', 'Str. Vasile Alecsandri, 8', 'Str. Vasile Alecsandri, 8'),
(212, 70, 4, '24/24', '24/24', '24/24'),
(213, 71, 1, '022 574 080', '022 574 080', '022 574 080'),
(214, 71, 2, 'hotel@clubroyalpark.md', 'hotel@clubroyalpark.md', 'hotel@clubroyalpark.md'),
(215, 71, 3, 'Улица Роз 6/2', 'Str. Trandafirilor 6/2', 'Str. Trandafirilor 6/2'),
(216, 71, 4, '07-00 : 23-00', '07-00 : 23-00', '07-00 : 23-00'),
(217, 72, 1, '0695 00 900', '0695 00 900', '0695 00 900'),
(218, 72, 2, 'office@select.md', 'office@select.md', 'office@select.md'),
(219, 72, 3, 'Ул. мирча чел Бэтрын, 21', 'Str. Mircea cel Batrin, 21', 'Str. Mircea cel Batrin, 21'),
(220, 72, 4, '09-00 : 21-00', '09-00 : 21-00', '09-00 : 21-00'),
(221, 73, 1, '0605 71 919', '0605 71 919', '0605 71 919'),
(222, 73, 2, 'caciuc.ilie123@gmail.com', 'caciuc.ilie123@gmail.com', 'caciuc.ilie123@gmail.com'),
(223, 73, 3, 'Бульвар Дачия, 58/5', 'Bul.Dacia 58/5', 'Bul.Dacia 58/5'),
(224, 73, 4, '24/24', '24/24', '24/24'),
(225, 74, 1, '069185862', '069185862', '069185862'),
(226, 74, 2, 'marryme.hall@mail.ru', 'marryme.hall@mail.ru', 'marryme.hall@mail.ru'),
(227, 74, 3, 'Ул. Флорилор, 15', 'Str. Florilor, 15', 'Str. Florilor,15'),
(228, 74, 4, '', '', ''),
(229, 75, 1, '079007800', '079007800', '079007800'),
(230, 75, 2, 'bp.restaurant.office@gmail.com', 'bp.restaurant.office@gmail.com', 'bp.restaurant.office@gmail.com'),
(231, 75, 3, 'Московский бульвар, 11/1', 'Bd. Moscova, 11/1', 'Bd. Moscova, 11/1'),
(232, 75, 4, '09-00 : 20-00', '09-00 : 20-00', '09-00 : 20-00'),
(233, 76, 1, '0697 73 339', '0697 73 339', '0697 73 339'),
(234, 76, 2, 'info@acasalamama.md', 'info@acasalamama.md', 'info@acasalamama.md'),
(235, 76, 3, 'Ул. Петру Рареш, 59', 'Str. Petru Rares, 59', 'Str. Petru Rares, 59'),
(236, 76, 4, '10-00 : 23-00', '10-00 : 23-00', '10-00 : 23-00'),
(237, 77, 1, '0606 36 969', '0606 36 969', '0606 36 969'),
(238, 77, 2, 'montreisrl@hotmail.com', 'montreisrl@hotmail.com', 'montreisrl@hotmail.com'),
(239, 77, 3, 'Ул. Михай Еминеску, 44/1', 'Str. Mihai Eminescu, 44/1', 'Str. Mihai Eminescu, 44/1'),
(240, 77, 4, '', '', ''),
(241, 78, 1, '069 15 46 36', '069 15 46 36', '069 15 46 36'),
(242, 78, 2, 'vikont-hall@mail.ru', 'vikont-hall@mail.ru', 'vikont-hall@mail.ru'),
(243, 78, 3, 'Ул. Независимости, 6/1', 'Str. Independentei, 6/1', 'Str. Independentei, 6/1'),
(244, 78, 4, '', '', ''),
(245, 79, 1, '079 44 37 98', '079 44 37 98', '079 44 37 98'),
(246, 79, 2, 'restaurant@vega-l.com', 'restaurant@vega-l.com', 'restaurant@vega-l.com'),
(247, 79, 3, 'Ул. Алба Юлия, 206', 'Str. Alba Iulia, 206', 'Str. Alba Iulia, 206'),
(248, 79, 4, '10-00 : 00-00', '10-00 : 00-00', '10-00 : 00-00'),
(253, 81, 1, '078 151 151', '078 151 151', '078 151 151'),
(254, 81, 2, 'fotoland@bk.ru', 'fotoland@bk.ru', 'fotoland@bk.ru'),
(255, 81, 3, ' Переулок 2 Львов, 5', 'Str. Lvov 2, 5', 'Str. Lvov 2, 5'),
(256, 81, 4, '9-30 : 19-00', '9-30 : 19-00', '9-30 : 19-00'),
(257, 82, 1, '068 88 85 67', '068 88 85 67', '068 88 85 67'),
(258, 82, 2, 'picpro.md@gmail.com', 'picpro.md@gmail.com', 'picpro.md@gmail.com'),
(259, 82, 3, 'Ул. Алексей Щусев, 82', 'Str. Alexei Şciusev, 82', 'Str. Alexei Şciusev, 82'),
(260, 82, 4, '09-00 : 20-00', '09-00 : 20-00', '09-00 : 20-00'),
(261, 83, 1, '079 89 12 40', '079 89 12 40', '079 89 12 40'),
(262, 83, 2, 'welyon.studio@icloud.com', 'welyon.studio@icloud.com', 'welyon.studio@icloud.com'),
(263, 83, 3, '', '', ''),
(264, 83, 4, '', '', ''),
(265, 84, 1, '078 23 34 42', '078 23 34 42', '078 23 34 42'),
(266, 84, 2, 'victor@pasio-studio.com', 'victor@pasio-studio.com', 'victor@pasio-studio.com'),
(267, 84, 3, '', '', ''),
(268, 84, 4, '', '', ''),
(269, 85, 1, '069 57 58 18', '069 57 58 18', '069 57 58 18'),
(270, 85, 2, 'vipstudio.md@mail.ru', 'vipstudio.md@mail.ru', 'vipstudio.md@mail.ru'),
(271, 85, 3, '', '', ''),
(272, 85, 4, '', '', ''),
(281, 16, 1, '060 84 08 40', '060 84 08 40', '060 84 08 40'),
(282, 16, 2, 'chocolateclubmd@gmail.com', 'chocolateclubmd@gmail.com', 'chocolateclubmd@gmail.com'),
(283, 16, 3, 'Бул. Дечебал, 80/1', 'Bul. Decebal, 80/1', 'Bul. Decebal, 80/1'),
(284, 16, 4, '20-00 : 06-00', '20-00 : 06-00', '20-00 : 06-00'),
(285, 17, 1, '069 64 64 64', '069 64 64 64', '069 64 64 64'),
(286, 17, 2, 'office@driveclub.md', 'office@driveclub.md', 'office@driveclub.md'),
(287, 17, 3, 'Ул. Мария Чеботарь, 18', 'Str. Maria Cebotari, 18', 'Str. Maria Cebotari, 18'),
(288, 17, 4, '22-00 : 05-00', '22-00 : 05-00', '22-00 : 05-00'),
(289, 23, 1, '078 11 31 13', '078 11 31 13', '078 11 31 13'),
(290, 23, 2, 'famousclub.moldova@gmail.com', 'famousclub.moldova@gmail.com', 'famousclub.moldova@gmail.com'),
(291, 23, 3, 'Str. Bucuriei, 1/6', 'Str. Bucuriei, 1/6', 'Str. Bucuriei, 1/6'),
(292, 23, 4, '23-00 : 05-00', '23-00 : 05-00', '23-00 : 05-00'),
(293, 86, 1, '+373 69 129261 ', '+373 69 129261 ', '+373 69 129261 '),
(294, 86, 2, 'thelivebeat@gmail.com', 'thelivebeat@gmail.com', 'thelivebeat@gmail.com'),
(295, 86, 3, '', '', ''),
(296, 86, 4, '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `products_links`
--

CREATE TABLE `products_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `link_id` int(10) UNSIGNED NOT NULL,
  `disabled` tinyint(1) NOT NULL,
  `sort` int(11) NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `products_links`
--

INSERT INTO `products_links` (`id`, `product_id`, `link_id`, `disabled`, `sort`, `type`) VALUES
(1, 8, 1, 0, 1, '1'),
(2, 8, 4, 0, 2, '1'),
(3, 8, 5, 1, 0, '1'),
(4, 8, 6, 0, 0, '2'),
(5, 8, 9, 0, 1, '2'),
(6, 8, 1, 0, 1, '3'),
(7, 8, 2, 0, 2, '3'),
(8, 8, 4, 0, 0, '3'),
(9, 8, 6, 0, 5, '3'),
(10, 8, 8, 0, 3, '3'),
(11, 8, 9, 0, 4, '3');

-- --------------------------------------------------------

--
-- Структура таблицы `products_news`
--

CREATE TABLE `products_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products_users`
--

CREATE TABLE `products_users` (
  `id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `products_id` int(10) NOT NULL,
  `edited` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `products_users`
--

INSERT INTO `products_users` (`id`, `users_id`, `products_id`, `edited`) VALUES
(1, 7, 16, 0),
(2, 7, 17, 0),
(3, 7, 23, 0),
(4, 7, 21, 0),
(5, 8, 41, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `top` tinyint(1) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `visibility` tinyint(1) NOT NULL DEFAULT '1',
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `created_at`, `updated_at`, `name`, `name_ro`, `name_en`, `top`, `enabled`, `visibility`, `slug`) VALUES
(1, NULL, '2017-01-20 09:28:46', 'Спорт', 'Sport', 'Sport', 1, 1, 1, 'sport'),
(2, '2016-06-26 09:08:16', '2017-01-20 09:29:07', 'Музыка', 'Muzica', 'Music', 1, 1, 1, 'music'),
(6, '2017-01-20 10:09:48', '2017-01-20 10:09:48', 'новый тег', 'tag nou', 'new tag', 1, 1, 1, 'novyj-teg');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(11) NOT NULL,
  `key` varchar(50) NOT NULL,
  `value` text NOT NULL,
  `value_ro` text NOT NULL,
  `value_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `key`, `value`, `value_ro`, `value_en`) VALUES
(2, 'header_menu_news', 'Новости', 'Ştiri', 'News'),
(3, 'header_menu_reports', 'Отчеты', 'Rapoarte', 'Reports'),
(4, 'header_menu_promo', 'Акции', 'Acțiuni', 'Promo'),
(5, 'header_menu_about', 'Об Allevents', 'Despre Allevents', 'About Allevents'),
(6, 'header_button_getevent', 'Организуйте мне Event', 'Organizați-Mi un Eveniment', 'Organize Me a Event'),
(7, 'header_button_auth', 'Войти / Регистрация', 'Conectare / Inregistrare', 'Log in / Register'),
(8, 'valute', 'Лей', 'Lei', 'MDL'),
(9, 'placeholder_search', 'Поиск', 'Cautare', 'Search'),
(10, 'modal_getevent_title', 'Оставте завку на организацию ивента, наши специалисты с вами свяжутся', 'Lăsați o cerere pentru organizarea evenimentului, experții noștri vă vor contacta', 'Leave us a request for a Event organization, our experts will contact you'),
(11, 'modal_placeholder_name', 'Ваше имя', 'Numele Dvs.', 'Your name'),
(12, 'modal_placeholder_phone', 'Ваш телефон', 'Telefonul Dvs.', 'Your phone number'),
(13, 'modal_placeholder_message', 'Сообщение', 'Mesaj', 'Message'),
(14, 'modal_validation_required', 'Это поле обязательное.', 'Acest câmp este obligatoriu.', 'This field is required.'),
(15, 'modal_placeholder_email', 'Ваш Email', 'E-mail Dvs.', 'Your Email'),
(16, 'modal_placeholder_password', 'Ваш пароль', 'Parola Dvs.', 'Your password'),
(17, 'modal_validation_name', 'Имя должно содержать больше 2 символов.', 'Numele trebuie să conțină mai mult de 2 caractere.', 'The name must contain more than 2 characters.'),
(18, 'modal_validation_email', 'Ваш email должен содержать не менее 4 символов и должен быть достоверным ', 'Email-ul trebuie să conțină cel puțin 4 caractere, și trebuie să fie fiabil', 'Email must contain at least 4 characters, and must be valid'),
(19, 'modal_validation_email_pattern', 'Email должен быть достоверным.', 'E-mail-ul trebuie să fie valabil.', 'Email must be valid.'),
(20, 'modal_validation_message_pattern', 'Сообщение должно содержать больше 5 символов.', 'Mesajul trebuie să conțină mai mult de 5 caractere.', 'The message should contain more than 5 characters.'),
(21, 'modal_button_send_request', 'Отправить заявку', 'Trimite solicitarea', 'Send request'),
(22, 'modal_validation_phone', 'Телефон должен содержать не менее 4 символов.', 'Numărul de telefon trebuie să conțină cel puțin 4 caractere.', 'Phone number must contain at least 4 characters.'),
(23, 'modal_validation_phone_pattern', 'Телефон должно содержать только цифры.', 'Numărul de telefon trebuie să conțină numai cifre.', 'Phone number must contain only numbers.'),
(24, 'modal_putevent_title', 'Сообщите нам о событие! Если его нет на нашем сайте мы с радостью его добавим ', 'Raportează-ne despre un eveniment. Dacă el nu este pe site, noi îl vom adăuga cu plăcere.', 'Tell us about an upcoming event .If it\'s not on the site we will add it with pleasure'),
(25, 'modal_contact_title', 'Напишите нам что вас интересует и наши специалисты с вами свяжутся', 'Scrieți-ne ce vă interesează și specialiștii noștri vă vor contacta', 'Write to us what interests you and our specialists will contact you'),
(26, 'modal_auth_title', 'Войти в свой аккаунт', 'Conectare la contul dvs.', 'Login to your account'),
(27, 'modal_register_title', 'Зарегистрируйте новый аккаунт', 'Inregistreaza un cont nou', 'Register a new account'),
(28, 'modal_auth_button', 'Войти', 'Conectați-vă', 'Enter'),
(29, 'modal_getevent_message_placeholder', 'Пример: Хочу заказать организацию свадьбы на 01.09.2017. Необходим фотограф, ресторан и пр...', 'Exemplu: Vreau sa comand organizarea nuntii pe 09/01/2017. Am nevoie de un fotograf, restaurant, etc ...', 'Example: I want to order a wedding organization on 09/01/2017. I\'ll need a photographer, restaurant, etc ...'),
(30, 'modal_putevent_message_placeholder', 'Пример: 25 числа возле театра оперы состоится концерт CONCERT CARLA’S DREAMS. ACASĂ ÎN INIMA MOLDOVEI прошу добавить к вам на сайт.', 'Exemplu: pe data de 25, lângă Teatrul de Opera si Balet  va avea loc un concertul CARLA\'S DREAMS. ACASĂ ÎN INIMA MOLDOVEI va rog sa-l publicati pe site-ul dvs.', 'Example: on the 25th, near the Opera and Ballet theatre will be a CARLA\'S DREAMS concert. ACASĂ ÎN INIMA MOLDOVEI please publish it on your website'),
(31, 'modal_contact_message_placeholder', 'Пример: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, deleniti.', 'Exemplu: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, deleniti.', 'Example: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, deleniti.'),
(32, 'modal_validation_password', 'Пароль должен содержать не меньше 2 символов.', 'Parola trebuie să conțină cel puțin 2 caractere.', 'The password must contain at least 2 characters.'),
(33, 'modal_register_button', 'Зарегистрироваться', 'Sign up', 'Înregistrează-te'),
(34, 'modal_auth_register', 'Регистрация', 'Înregistrare', 'Sign Up'),
(35, 'modal_auth_social', 'Или с помощью', 'Sau cu ajutorul', 'Or via'),
(36, 'modal_register_new_password', 'Новый пароль', 'Parolă nouă', 'New password'),
(37, 'modal_register_repeat_password', 'Повторите пароль', 'Repetaţi parola', 'Confirm password'),
(38, 'footer_description', 'Allevents – это многофункциональный проект, который расскажет Вам о самых значимых ивентах (событиях) нашей страны, и познакомит Вас с лучшими компаниями в индустрии праздника и развлечений! Если Вы хотите организовать свой праздник самостоятельно, то на нашем сайте Вы с легкостью найдете всё необходимое для вашего ивента (события)! Мы познакомим Вас с лучшими ресторанами и клубами страны! Так же сможете отслеживать самые модные тренды в сфере праздника и развлечений!', 'Allevents - este un proiect multifuncțional, care vă va face cunoștință cu cele mai importante evenimente a țării noastre. De asemenea, veți face cunoștință cu liderii din domeniul organizării festivităților și divertisment! În cazul în care doriți să organizați festivitatea desinestătător, pe site-ul nostru veți putea găsi cu ușurință tot de ce aveți nevoie pentru un eveniment inclusiv și cele mai tari restaurante și cluburi din țară. Puteți urmări ultimele tendințe ale modei în sfera de organizare a festivităților și di vertisment!', 'Allevents - is a multifunctional project, which will tell you about the most important of Events in our country, and will help  you get in toch with the best companies in the holiday and entertainment service! If you want to organize a party yourself, on our site you can easily find everything you need for your upcoming Events! We will introduce you to the best restaurants and clubs of the country! You can follow the latest fashion trends in the area of ​​holiday and entertainment service!'),
(39, 'footer_getevent_application', 'Оставить заявку', 'Expedia o cerere', 'Submit application'),
(40, 'footer_social_share', 'Хочешь поделиться порталом allevents с друзьями? Жми: кнопки соц сетей:', 'Doriți să permiteți accesul prietenilor allevents portal? Apăsat: butoane de rețele sociale:', 'Want to share with friends the portal allevents? Hold: social networks buttons:'),
(41, 'footer_contact_title', 'По любым вопросам, в том числе по вопросам рекламы и сотрудничества обращаться:', 'Pentru orice întrebări, inclusiv cele privind publicitatea și cooperarea, vă rugăm să contactați:', 'For any questions, including those concerning advertising and cooperation, please contact:'),
(42, 'footer_contact_title_email_title', 'на email', 'prin e-mail', 'to email'),
(43, 'contact_email', 'contact@allevents.md', 'contact@allevents.md', 'contact@allevents.md'),
(44, 'footer_contact_form_title', 'или через форму', 'sau prin form', 'or through the form'),
(45, 'footer_contact_form', 'обратной связи', 'de feedback', 'of feedback'),
(46, 'footer_social_links', 'Мы в соц. сетях:', 'Suntem în rețele sociale:', 'We are in the social networks:'),
(47, 'footer_copyright', '© AllEvents.md', '© AllEvents.md', '© AllEvents.md'),
(48, 'footer_mailer_title', 'Новости, Скидки, Эвенты Кишинева', 'Știri, Reduceri, Evenimente in Chișinău', 'News, Discounts, Events in Chisinau'),
(49, 'mailer_subscribe', 'Подписаться', 'subscrie', 'Subscribe'),
(50, 'footer_button_putevent', 'Сообщи об ивенте', 'Anunță un eveniment', 'Report an event'),
(51, 'footer_copyright_title', 'Перепечатка материалов, незави­симо от их формы и даты размеще­ния, возможна только с установкой ссылки на портал www.allevents.md', 'Reproducerea oricăror materiale, indiferent de forma lor și data de plasare, fiind posibilă numai instalarea de link-uri către portalul www.allevents.md', 'Reproduction of any materials, regardless of their shape and the placement date, only possible with the installation of links to the portal www.allevents.md'),
(52, 'footer_links_about', 'О проекте', 'Descriere', 'About'),
(53, 'footer_links_contacts', 'Контакты', 'Contacte', 'Contacts'),
(54, 'footer_links_advert', 'Реклама', 'Publicitate', 'Advertising'),
(55, 'footer_links_rights', 'Права', 'Drepturile', 'Rights'),
(56, 'footer_links_sitemap', 'Карта сайта', 'Sitemap', 'Sitemap'),
(57, 'footer_links_news', 'Новости', 'Ştiri', 'News'),
(58, 'footer_links_reports', 'Отчеты', 'Rapoarte', 'Reports'),
(59, 'footer_links_promo', 'Акции', 'Acțiuni', 'Shares'),
(60, 'footer_links_exlusive', 'Экслюзив', 'Exclusiv', 'Exclusive'),
(61, 'footer_links_categories', 'Все категории', 'Categoriile', 'All categories'),
(62, 'sidebar_button_auth', 'Войти в аккаунт', 'Conectați-vă la contul dvs.', 'Sign in to your account'),
(63, 'sidebar_menu_title', 'Разделы портала:', 'Secțiunile portalului:', 'Sections of the portal:'),
(64, 'sidebar_categories_title', 'Посмотреть также:', 'A se vedea asemenea:', 'See also:'),
(65, 'sidebar_mailer_title', 'Новости, Скидки, Эвенты Кишинева', 'Știri, Reduceri, Evenimente in Chișinău', 'News, Discounts, Events in Chisinau'),
(66, 'sidebar_news_title', 'Новости :', 'Noutăţi:', 'News :'),
(67, 'sidebar_news_button_readmore', 'Читать далее', 'Mai mult', 'Read more'),
(68, 'sidebar_categories_button', 'Все категории', 'Toate categoriile', 'All categories'),
(69, 'banner_right_title', 'Рекламное место свободно', 'Spațiu publicitar disponibil', 'Advertising space available'),
(70, 'banner_right_email_title', 'для информации обращаться на email', 'pentru informații, vă rugăm să contactați prin e-mail', 'for information, please contact to email'),
(71, 'index_recommend_section_title', 'Рекомендуем', 'Recomandăm', 'We recommend'),
(72, 'index_report_section_title', 'Отчеты', 'Rapoarte', 'Reports'),
(73, 'index_news_section_title', 'Новости', 'Noutati', 'News'),
(74, 'index_recommend_section_product_button', 'Посмотреть', 'Mai mult', 'See more'),
(75, 'index_news_section_news_button', 'Читать далее...', 'Citește mai mult ...', 'Read more...'),
(76, 'index_menu_category_button', 'Посмотреть все', 'Mai mult', 'View all'),
(77, 'categories_title', 'Категории', 'Categorii', 'Categories'),
(78, 'news_object_button', 'Читать далее', 'Citește mai mult', 'Read more'),
(79, 'news_detail_share', 'Поделиться с друзьями:', 'Distribuiți prietenilor:', 'Share with friends:'),
(80, 'news_detail_tags', 'Теги:', 'Tag-uri:', 'Tags:'),
(81, 'news_detail_comment', 'Оставте комментарий', 'Lasă un comentariu', 'Leave a comment'),
(82, 'products_object_button', 'Посмотреть', 'Mai mult', 'See more'),
(83, 'gallery_other_galleries', 'Другие фотоотчеты', 'Mai multe reportaje foto', 'More photo reports'),
(84, 'product_reservation_title', 'Оставьте заявку на резервацию, наши специалисты с вами свяжутся', 'Lăsați o cerere de rezervare, specialiștii noștri vă va contacta', 'Leave a request for reservation, our specialists will contact you'),
(85, 'product_reservation_breadcrumbs', 'Резервирование', 'Rezervare', 'Reservation'),
(86, 'product_reservation_form_message', 'Пример: Хочу заказать заказ на 01.01.2017. Краткое описание пожеланий', 'Exemplu: Vreau sa comand o comanda pentru 01/01/2017. Scurtă descriere a dorințelor', 'Example: I want to order an order for 01/01/2017. Brief description of wishes'),
(87, 'product_plan_breadcrumbs', 'План зала', 'Planul de hol', 'Hall plan'),
(88, 'product_menu_breadcrumbs', 'Продукция', 'Produse', 'Production'),
(89, 'product_photo_breadcrumbs', 'Фото', 'Photo', 'Photo'),
(90, 'product_video_breadcrumbs', 'Видео', 'Video', 'Video'),
(91, 'product_promo_breadcrumbs', 'Акции', 'Acțiuni', 'Posts'),
(92, 'product_promo_title', 'Акции', 'Acțiuni', 'Posts'),
(93, 'product_promo_post_button', 'Читать далее', 'Mai mult', 'Read more'),
(94, 'topmenu_photo', 'Фото', 'Fotografii', 'Photo'),
(95, 'topmenu_video', 'Видео', 'Video', 'Video'),
(96, 'topmenu_promo', 'Акции', 'Acțiuni', 'Posts'),
(97, 'topmenu_production', 'Продукция', 'Produse', 'Production'),
(98, 'topmenu_reservation', 'Резервирование', 'Rezervare', 'Reservation'),
(99, 'topmenu_plan', 'План зала', 'Planul de hol', 'Hall plan'),
(100, 'product_contact_title', 'Контакты', 'Contacte', 'Contacts'),
(101, 'cart_title', 'Корзина', 'Coșul', 'Cart'),
(102, 'cart_text_empty', 'Ваша корзина пустая', 'Coșul de cumpărături este gol', 'Your shopping cart is empty'),
(103, 'cart_button', 'Отправить', 'Confirmați', 'Submit'),
(104, 'cart_total', 'Всего', 'Total', 'Total'),
(105, 'cart_price', 'Цена', 'Prețul', 'Price'),
(106, 'cart_qty', 'Количество', 'Număr', 'Amount'),
(107, 'cart_order_title', 'Ваш заказ', 'Comanda dvs.', 'Your order'),
(108, 'modal_placeholder_address', 'Адрес', 'Adresa', 'Address'),
(109, 'modal_validation_address_pattern', 'Адрес должно содержать не меньше 3 символов.', 'Adresa trebuie să conțină cel puțin 3 caractere.', 'Address must contain at least 3 characters.'),
(110, 'cart_contact_message_placeholder', 'Пример: Хочу что бы на моем мероприятии было...', 'Exemplu: Aș dori ca la evenimentul meu a fost ...', 'Example: I would want that on my event was ...'),
(111, 'search_title', 'Поиск по запросу', 'Cererea de căutare', 'Search request'),
(112, 'search_allcategories', 'Все результаты', 'Toate rezultatele', 'All results'),
(113, 'search_news', 'Новости', 'Noutati', 'News'),
(114, 'search_reports', 'Отчеты', 'Rapoarte', 'Reports'),
(115, 'search_poster', 'Афиша', 'Afișa', 'Poster'),
(116, 'search_objects', 'Заведения', 'Obiecte', 'Objects');

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id`, `name`, `name_ro`, `name_en`, `slug`) VALUES
(1, 'Новости', 'Știri', 'News', 'news'),
(2, 'Отчеты', 'Rapoarte', 'Reports', 'reports'),
(3, 'Акции', 'Promo', 'Promo', 'promo'),
(4, 'Афиша', 'Evenimente', 'Events', 'afisha');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rights` tinyint(4) NOT NULL,
  `top` tinyint(4) NOT NULL DEFAULT '1',
  `enabled` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `password`, `open_password`, `comment`, `rights`, `top`, `enabled`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Xsort', '', 'support@xsort.md', '$2y$10$twmlb5YlgimkrTIwnKqeauX9JusORUAVWnjjK1jBhM0AQwJW/3RIy', '', '', 1, 1, 1, '2zbiz45Cr2bTlfJtgCCGRmPu5VT52XlVNOurSpF4tOw2oPqreiUPx5rky88W', NULL, '2017-01-16 06:51:56'),
(6, 'Administrator', '', 'yubordeniuk5@mail.ru', '$2y$10$U/xOmBoncUSMpv2nRy6.nesLrGtOH2oANtJuh8giRv5WzkEl35Xe6', '', '', 1, 1, 1, '4Y9KVZ17PRpAa50YP9YhLRNxSbVhJD157huZ0T4HIpdAjbEuusAE7N6t36g0', NULL, '2017-01-16 06:49:46'),
(7, 'test_manager', '+373999999', 'manager@allevents.md', '$2y$10$CP7EPnYQ3Jo9YoFQfvW50.n9QRkfZ5xf0BLK0ih9Y4IhxZKGUdeHC', 'Change21', 'Главный менеджер', 2, 1, 1, 'ej7fkYP0XGPwmSsOOVDCxgkM8BOaZfyVkMn3jbmmnXUjAttis6VIlRQULpm9', '2017-01-11 08:55:47', '2017-01-16 06:48:44'),
(8, 'Sky Bar Test Manager', '078974647', 'alexzc@mail.ru', '$2y$10$/A1tmYRFRMBmPfV4lVUSkOAp7DANaLHZlYoKtS02F9ID3mf2us1Vi', '2771564', 'Test manager', 2, 1, 1, 'mSdgf8DHlsMV5STbBbk3rB1NNShnIPM2ZL5iThGDQ8e7YSAvsPk5tp1dBILH', '2017-01-16 06:49:39', '2017-01-16 07:33:00'),
(9, 'test', '', 'pokabudki@gmail.com', '$2y$10$Nte9o93ra3piNfDnd3hLCuTN7O7bEH0SnaKTj06Fhwl8rtIFNo5Fq', '123456', '', 0, 1, 1, NULL, '2017-01-16 09:39:47', '2017-01-16 09:39:53');

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_short_en` text COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `name`, `name_ro`, `name_en`, `description`, `description_ro`, `description_en`, `description_short`, `description_short_ro`, `description_short_en`, `source`, `enabled`, `views`, `sort`, `created_at`, `updated_at`) VALUES
(1, '123', '', '', '', '', '', '', '', '', '123', 1, 0, 0, '2016-07-21 21:00:00', '2016-07-22 04:54:49'),
(2, 'Фестивал', 'Festivalul', '', '<p>123</p>\r\n', '<p>456</p>\r\n', '', '', '', '', 'https://www.youtube.com/watch?v=D5bF7U-mjAA', 1, 0, 0, '2016-08-16 21:00:00', '2016-08-17 04:10:13'),
(3, '11', '111', '', '<p>1111</p>\n', '', '', '', '', '', 'https://www.youtube.com/watch?v=D5bF7U-mjAA', 1, 0, 0, '2016-08-21 21:00:00', '2016-08-22 07:36:21'),
(5, '', '', '', '', '', '', '', '', '', 'https://www.youtube.com/embed/7n7kh0xBoCM', 1, 0, 0, '2016-08-23 21:00:00', '2016-08-24 04:46:38'),
(6, 'KRYSHA GRAND OPENING TERRACE', 'KRYSHA GRAND OPENING TERRACE', 'KRYSHA GRAND OPENING TERRACE', '<h1>KRYSHA GRAND OPENING TERRACE</h1>\n', '<h1>KRYSHA GRAND OPENING TERRACE</h1>\n', '<h1>KRYSHA GRAND OPENING TERRACE</h1>\n', '', '', '', 'https://www.youtube.com/embed/7n7kh0xBoCM', 1, 0, 0, '2016-08-23 21:00:00', '2016-08-24 04:49:21'),
(7, 'Magic Boogie Night @ Krysha, Chisinau', 'Magic Boogie Night @ Krysha, Chisinau', 'Magic Boogie Night @ Krysha, Chisinau', '\n', '', '', '', '', '', 'https://www.youtube.com/embed/voEE-bzEHFs', 1, 0, 0, '2016-08-23 21:00:00', '2016-08-24 04:52:33'),
(8, 'test', 'test', 'test', '', '', '', '', '', '', 'test', 1, 0, 0, '2017-01-11 21:00:00', '2017-01-12 20:55:41'),
(9, 'test', 'test', 'test', '<p>testtes</p>\n', '<p>test</p>\n', '<p>test</p>\n', '', '', '', 'test', 1, 0, 0, '2017-01-11 21:00:00', '2017-01-12 20:58:25');

-- --------------------------------------------------------

--
-- Структура таблицы `videos_xref`
--

CREATE TABLE `videos_xref` (
  `id` int(10) UNSIGNED NOT NULL,
  `videos_id` int(10) UNSIGNED NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `videos_xref`
--

INSERT INTO `videos_xref` (`id`, `videos_id`, `table_id`, `table`) VALUES
(1, 2, 7, 'products'),
(3, 6, 8, 'products'),
(4, 7, 8, 'products');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Индексы таблицы `categories_xref`
--
ALTER TABLE `categories_xref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_parent_id` (`parent_id`),
  ADD KEY `idx_child_id` (`child_id`);

--
-- Индексы таблицы `constants`
--
ALTER TABLE `constants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `constants_key_unique` (`key`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_sort_index` (`sort`);

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Индексы таблицы `galleries_xref`
--
ALTER TABLE `galleries_xref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_table_id` (`table_id`),
  ADD KEY `idx_table` (`table`);

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `links_product_id_index` (`product_id`);

--
-- Индексы таблицы `menu_categories`
--
ALTER TABLE `menu_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Индексы таблицы `menu_products`
--
ALTER TABLE `menu_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_table_id` (`table_id`),
  ADD KEY `idx_table` (`table`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Индексы таблицы `news_tags`
--
ALTER TABLE `news_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_tags_news_id_foreign` (`news_id`),
  ADD KEY `news_tags_tags_id_foreign` (`tags_id`);

--
-- Индексы таблицы `news_types`
--
ALTER TABLE `news_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_types_news_id_foreign` (`news_id`),
  ADD KEY `news_types_types_id_foreign` (`types_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_table_id` (`table_id`),
  ADD KEY `idx_table` (`table`),
  ADD KEY `idx_sort` (`sort`),
  ADD KEY `photos_token_index` (`token`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`);

--
-- Индексы таблицы `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categories_products_id_foreign` (`products_id`),
  ADD KEY `products_categories_categories_id_foreign` (`categories_id`);

--
-- Индексы таблицы `products_contacts`
--
ALTER TABLE `products_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_contacts_product_id_foreign` (`product_id`),
  ADD KEY `products_contacts_contact_id_foreign` (`contact_id`);

--
-- Индексы таблицы `products_links`
--
ALTER TABLE `products_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_links_product_id_foreign` (`product_id`),
  ADD KEY `products_links_link_id_foreign` (`link_id`);

--
-- Индексы таблицы `products_news`
--
ALTER TABLE `products_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_news_products_id_foreign` (`products_id`),
  ADD KEY `products_news_news_id_foreign` (`news_id`);

--
-- Индексы таблицы `products_users`
--
ALTER TABLE `products_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `products_id` (`products_id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD KEY `idx_slug` (`slug`),
  ADD KEY `name_ro` (`name_ro`),
  ADD KEY `name_en` (`name_en`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `key` (`key`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `videos_xref`
--
ALTER TABLE `videos_xref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_table_id` (`table_id`),
  ADD KEY `idx_table` (`table`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT для таблицы `categories_xref`
--
ALTER TABLE `categories_xref`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT для таблицы `constants`
--
ALTER TABLE `constants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `galleries_xref`
--
ALTER TABLE `galleries_xref`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `menu_categories`
--
ALTER TABLE `menu_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `menu_products`
--
ALTER TABLE `menu_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `news_types`
--
ALTER TABLE `news_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=542;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT для таблицы `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;
--
-- AUTO_INCREMENT для таблицы `products_contacts`
--
ALTER TABLE `products_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;
--
-- AUTO_INCREMENT для таблицы `products_links`
--
ALTER TABLE `products_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `products_news`
--
ALTER TABLE `products_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `products_users`
--
ALTER TABLE `products_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `videos_xref`
--
ALTER TABLE `videos_xref`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `news_tags`
--
ALTER TABLE `news_tags`
  ADD CONSTRAINT `news_tags_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  ADD CONSTRAINT `news_tags_tags_id_foreign` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`);

--
-- Ограничения внешнего ключа таблицы `news_types`
--
ALTER TABLE `news_types`
  ADD CONSTRAINT `news_types_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  ADD CONSTRAINT `news_types_types_id_foreign` FOREIGN KEY (`types_id`) REFERENCES `types` (`id`);

--
-- Ограничения внешнего ключа таблицы `products_categories`
--
ALTER TABLE `products_categories`
  ADD CONSTRAINT `products_categories_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_categories_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `products_contacts`
--
ALTER TABLE `products_contacts`
  ADD CONSTRAINT `products_contacts_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`),
  ADD CONSTRAINT `products_contacts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `products_links`
--
ALTER TABLE `products_links`
  ADD CONSTRAINT `products_links_link_id_foreign` FOREIGN KEY (`link_id`) REFERENCES `links` (`id`),
  ADD CONSTRAINT `products_links_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `products_news`
--
ALTER TABLE `products_news`
  ADD CONSTRAINT `products_news_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  ADD CONSTRAINT `products_news_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
