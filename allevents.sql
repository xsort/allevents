-- MySQL dump 10.16  Distrib 10.1.10-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: allevents
-- ------------------------------------------------------
-- Server version	10.1.10-MariaDB-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (5,'Клубы','Сluburi','Clubs','<p>Все лучшие клубы Кишинева и вся информация о них: адреса, расписание работы, отзывы,&nbsp;фотографии, цены,&nbsp;рейтинг, карта проезда.</p>\r\n','<p>Toate cele mai bune cluburi din Chisinau si toate informatiile despre ei: adresa, programul de lucru, comentarii, fotografii, preturi, ratinguri, hartă.</p>\r\n','<p>All the best clubs of Chisinau and all information about them: address, work schedule, reviews, photos, prices, ratings, map.</p>\r\n','','','',1,1,1,0,0,'kluby','2016-06-24 21:00:00','2016-06-29 08:17:45'),(6,'Свадьбы','Nunți','Weddings','<p>Организация и проведение свадеб в Кишиневе. У нас вы найдете все необходимое&nbsp;для свадебы:&nbsp;декор, флористика, а также&nbsp;поиск помещений, подбор персонала для обслуживания.&nbsp;</p>\r\n','<p>Organizarea si desfasurarea de nunti la Chișinău. Aici vei gasi tot ce ai nevoie pentru nunti: decor, florale și sedii de căutare, servicii de personal.</p>\r\n','<p>The organization and carrying out of weddings in Chisinau. Here you will find everything you need for weddings: decor, floral and search premises, personnel services.</p>\r\n','','','',1,1,1,0,0,'svadiby',NULL,'2016-06-21 20:14:21'),(7,'Корпоративы','Evenimente corporative','Corporate events','<p>Хотите заказать незабываемый&nbsp;корпоратив?&nbsp;Поможем организовать и провести любой&nbsp;корпоратив&nbsp;профессионально и по высшему разряду.</p>\r\n','<p>Doriți să comandați un eveniment corporate memorabil? Vă putem ajuta să vă organizați și să efectueze orice clasă de corporație și profesional.</p>\r\n','<p>You want to order a memorable corporate event? We can help you organize and carry out any corporate and professional class.</p>\r\n','','','',1,1,1,0,0,'korporativy',NULL,'2016-06-21 20:15:32'),(8,'Рестораны \\ Кафе','Restaurant \\ Cafenea','Restaurant \\ Cafe','<p>Перечень ресторанов,&nbsp;кафе, баров и пабов города (меню , цены , фото , отзывы , описание). Возможность быстрого заказа столика или&nbsp;банкета.</p>\r\n','<p>Lista de restaurante, cafenele, baruri și pub-uri din oraș (meniu, preturi, fotografii, recenzii, descrieri). Posibilitatea de a comanda rapid o masă sau banchet.</p>\r\n','<p>The list of restaurants, cafes, bars and pubs of the city (menu, prices, photos, reviews, descriptions). The ability to quickly order a table or banquet.</p>\r\n','','','',1,1,1,0,0,'restorany-kafe',NULL,'2016-06-21 20:15:55'),(9,'Крестины','Botezuri','Christening','<p>Крестины, крещение ребенка. Мы готова оказать вам квалифицированную и профессиональную помощь в&nbsp;организации&nbsp;и проведении</p>\r\n','<p>Botez, copil botez. Suntem pregătiți să vă ofere asistență calificată și profesională &icirc;n organizarea și desfășurarea</p>\r\n','<p>Christening, baby baptism. We are ready to provide you with qualified and professional assistance in organizing and conducting</p>\r\n','','','',0,1,1,0,0,'krestiny','2016-06-10 07:51:22','2016-06-21 20:34:02'),(10,'Выпускной','Absolvire','High school graduation','<p>Организация лучших выпускных вечеров в Кишиневе. Мы поможем вам выбрать все необходимое, для успешного проведения выпускного вечера.</p>\r\n','<p>Organizarea celor mai bune proms din Chișinău pentru studenți. Vă vom ajuta să alegeți tot ce ai nevoie pentru un bal de succes.</p>\r\n','<p>Organization of the best proms in Chisinau for students. We will help you to choose everything you need for a successful prom.</p>\r\n','','','',0,1,1,0,0,'vypusknoj','2016-06-09 21:00:00','2016-06-30 07:48:37'),(11,'День рождения','Zi de naștere','Birthday','<p>Не знаете где и как отпраздновать&nbsp;день рождение?&nbsp;Мы поможем вам в&nbsp;организации праздника. У нас вы найдете все необходимые услуги, нужные для проведения дня рождения.</p>\r\n','<p>Tu nu știi unde și cum pentru a sărbători ziua de nastere? Vă vom ajuta să vă organizați evenimentul. Aici veti gasi toate serviciile necesare necesare pentru a efectua aniversari.</p>\r\n','<p>You do not know where and how to celebrate a birthday? We will help you organize the event. Here you will find all the necessary services needed to conduct birthdays.</p>\r\n','','','',0,1,1,0,0,'deni-rojdenia','2016-06-17 04:50:36','2016-06-21 20:16:19'),(12,'Детские праздники','Petrecerile copiilor','Children holidays','<p>Организация&nbsp;проведения&nbsp;детских праздников.&nbsp;Мы поможем организовать незабываемый&nbsp;праздник&nbsp;для Вашего ребенка. Большой выбор программ, конкурсов и аниматоров.</p>\r\n','<p>Organizare de festivitati pentru copii. Vă vom ajuta să vă organizați o vacanță de neuitat pentru copilul tau. O gamă largă de programe, concursuri și divertisment.</p>\r\n','<p>Organization of children&#39;s holiday. We will help you organize an unforgettable holiday for your child. A wide range of programs, competitions and entertainment.</p>\r\n','','','',0,1,1,0,0,'detskie-prazdniki','2016-06-17 04:54:52','2016-06-21 20:16:41'),(13,'Акции \\ Скидки','Promotii \\ Reduceri','Promotions \\ Discounts','<p>Список&nbsp;акций&nbsp;и скидок заведений&nbsp;в Кишиневе.&nbsp;Будьте в курсе всех&nbsp;акций&nbsp;и специальных предложений проходящих в&nbsp;заведениях&nbsp;города Кишинева.</p>\r\n','<p>Lista promoții și a instituțiilor de reduceri &icirc;n Chișinău. Să fie conștienți de toate acțiunile și ofertele speciale care au loc &icirc;n instituții ale orașului Chișinău.</p>\r\n','<p>The list of promotions and discounts institutions in Chisinau. Be aware of all the shares and special offers taking place in Chisinau city institutions.</p>\r\n','','','',0,1,1,0,0,'akczii-skidki','2016-06-21 04:58:24','2016-06-21 20:17:03'),(14,'Event менеджер \\ Организатор','Event Manager \\ Organizator','Event Manager \\ Organizer','','','','','','',0,1,0,0,0,'event-menedzher-organizator','2016-06-21 05:10:43','2016-06-21 06:41:51'),(15,'ЗАГСы \\ Церкви','Saloane de Înregistrare \\ Bisericii','Registry offices \\ Church','','','','','','',0,1,0,0,0,'zagsy-czerkvi','2016-06-21 05:12:38','2016-06-21 06:42:24'),(16,'Свадебная обувь и аксессуары','Pantofi de nunta si accesorii','Wedding shoes and accessories','','','','','','',0,1,0,0,0,'svadebnaya-obuvi-i-aksessuary','2016-06-21 05:13:09','2016-06-21 06:42:46'),(17,'Свадебные и вечерние платья','Nunta si rochii de seara','Wedding & Evening Dresses','','','','','','',0,1,0,0,0,'svadebnye-i-vechernie-platiya','2016-06-20 21:00:00','2016-06-29 09:34:03'),(18,'Мужские костюмы','Costume pentru bărbați','Men\'s suits','','','','','','',0,1,0,0,0,'muzhskie-kostyumy','2016-06-21 05:15:45','2016-06-21 06:40:46'),(19,'Свадебный танец','Dans de nunta','A wedding dance','','','','','','',0,1,0,0,0,'svadebnyj-tanecz','2016-06-21 05:17:21','2016-06-21 06:44:14'),(20,'Фото \\ Видео','Fotografie \\ Video','Photo \\ Video','','','','','','',0,1,0,0,0,'foto-video','2016-06-21 05:18:01','2016-06-21 06:44:34'),(21,'Рестораны \\ Банкетные залы \\ Открытые площадки','Restaurante \\ Facilități pentru banchete \\ Zone deschise','Restaurants \\ Banquet Facilities \\ Open areas','','','','','','',0,1,0,0,0,'restorany-banketnye-zaly-otkrytye-ploshhadki','2016-06-21 05:18:45','2016-06-21 06:45:13'),(22,'Торты \\ Калачи \\ Вкусняшки','Torturi \\ Kalachi \\ Gustări','Cakes \\ Kalachi \\ Snacks','','','','','','',0,1,0,0,0,'torty-kalachi-vkusnyashki','2016-06-21 05:20:05','2016-06-21 06:46:04'),(23,'Ведущий \\ Тамада','Conducător \\ Tamada','Leading \\ Tamada','','','','','','',0,1,0,0,0,'vedushhij-tamada','2016-06-21 05:21:51','2016-06-21 06:46:27'),(24,'Dj \\ Артисты \\ Шоу программа','Dj \\ Artisti \\ Program Afișare','Dj \\ Artists \\ Show program','','','','','','',0,1,0,0,0,'dj-artisty-shou-programma','2016-06-21 05:22:41','2016-06-21 06:46:48'),(25,'Световое \\ Звуковое оборудование','Lumina \\ Audio echipament','Light \\ Audio Equipment','','','','','','',0,1,0,0,0,'svetovoe-zvukovoe-oborudovanie','2016-06-21 05:23:56','2016-06-21 06:47:37'),(26,'Фейерверки','Focuri de artificii','Fireworks','','','','','','',0,1,0,0,0,'fejerverki','2016-06-21 05:24:50','2016-06-21 06:47:55'),(27,'Флористы','Florari','Florists','','','','','','',0,1,0,0,0,'floristy','2016-06-21 05:25:25','2016-06-21 06:49:38'),(28,'Ювелиры','Bijutierii','Jewellers','','','','','','',0,1,0,0,0,'yuveliry','2016-06-21 05:25:52','2016-06-21 06:49:48'),(29,'Оформление торжеств \\ Декорации','Luare de sărbători \\ Decor','Making celebrations \\ Scenery','','','','','','',0,1,0,0,0,'oformlenie-torzhestv-dekoraczii','2016-06-21 05:26:29','2016-06-21 06:50:13'),(30,'Транспорт','Transport','Transport','','','','','','',0,1,0,0,0,'transport','2016-06-21 05:27:02','2016-06-21 06:50:51'),(31,'Салон красоты \\ Косметологии и Spa','Frumusete \\ Cosmetică și spa','Beauty \\ Cosmetology and Spa','','','','','','',0,1,0,0,0,'salon-krasoty-kosmetologii-i-spa','2016-06-21 05:27:48','2016-06-21 06:51:12'),(32,'Стилисты и визажисты','Stilisti și artiști machiaj','Stylists and makeup artists','','','','','','',0,1,0,0,0,'stilisty-i-vizazhisty','2016-06-21 05:28:20','2016-06-21 06:51:34'),(33,'Напитки','Băuturi','Beverages','','','','','','',0,1,0,0,0,'napitki','2016-06-21 05:28:49','2016-06-21 06:52:17'),(34,'Турагентства \\ Гостиницы','Agenție de turism \\ Hoteluri','Travel \\ Hotels','','','','','','',0,1,0,0,0,'turagentstva-gostiniczy','2016-06-21 05:30:20','2016-06-21 05:30:20'),(35,'Пригласительные \\ Подарки \\ Аксессуары','Invitație de \\ Cadouri \\ Accesorii','Invitation \\ Gifts \\ Accessories','','','','','','',0,1,0,0,0,'priglasitelinye-podarki-aksessuary','2016-06-21 05:31:21','2016-06-21 06:53:05'),(36,'Бармены \\ Официанты \\ Шеф повар','Barmanii \\ Chelnerii \\ Chef','Bartenders \\ Waiters \\ Chef','','','','','','',0,1,0,0,0,'barmeny-oficzianty-shef-povar','2016-06-21 05:31:55','2016-06-21 06:54:06'),(37,'Кейтеринг \\ Шатры','Catering \\ Corturi','Catering \\ Tents','','','','','','',0,1,0,0,0,'kejtering-shatry','2016-06-21 05:32:43','2016-06-21 06:57:41'),(38,'Организация предложения руки и сердца','Organizația oferă mâini și inimi','The organization offers hands and hearts','','','','','','',0,1,0,0,0,'organizacziya-predlozheniya-ruki-i-serdcza','2016-06-21 05:33:19','2016-06-21 06:54:28'),(39,'Фитнес центр','Centru de fitness','Fitness center','','','','','','',0,1,0,0,0,'fitnes-czentr','2016-06-21 05:34:12','2016-06-21 06:55:07');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_xref`
--

DROP TABLE IF EXISTS `categories_xref`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_xref` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_parent_id` (`parent_id`),
  KEY `idx_child_id` (`child_id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_xref`
--

LOCK TABLES `categories_xref` WRITE;
/*!40000 ALTER TABLE `categories_xref` DISABLE KEYS */;
INSERT INTO `categories_xref` VALUES (20,0,5),(21,0,6),(22,6,18),(23,7,18),(24,10,18),(25,11,18),(26,6,14),(27,7,14),(28,9,14),(29,10,14),(30,11,14),(31,12,14),(32,6,15),(33,9,15),(34,6,16),(35,6,17),(36,6,19),(37,6,20),(38,7,20),(39,9,20),(40,10,20),(41,11,20),(42,12,20),(43,6,21),(44,7,21),(45,10,21),(46,11,21),(47,12,21),(48,6,22),(49,7,22),(50,10,22),(51,11,22),(52,12,22),(53,6,23),(54,7,23),(55,10,23),(56,11,23),(57,12,23),(58,6,24),(59,7,24),(60,10,24),(61,11,24),(62,12,24),(63,6,25),(64,7,25),(65,10,25),(66,11,25),(67,6,26),(68,10,26),(69,11,26),(70,12,26),(71,6,27),(72,10,27),(73,11,27),(74,12,27),(75,6,28),(76,6,29),(77,7,29),(78,10,29),(79,11,29),(80,12,29),(81,6,30),(82,10,30),(83,11,30),(84,6,31),(85,10,31),(86,11,31),(87,6,32),(88,10,32),(89,11,32),(90,6,33),(91,7,33),(92,10,33),(93,11,33),(94,12,33),(95,6,35),(96,7,35),(97,9,35),(98,10,35),(99,11,35),(100,12,35),(101,6,36),(102,6,38),(103,6,39),(104,6,37),(105,10,37),(106,11,37),(108,0,13),(109,0,12),(110,0,11),(111,0,10),(112,0,9),(113,0,8);
/*!40000 ALTER TABLE `categories_xref` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `constants`
--

DROP TABLE IF EXISTS `constants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `constants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `constants_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `constants`
--

LOCK TABLES `constants` WRITE;
/*!40000 ALTER TABLE `constants` DISABLE KEYS */;
/*!40000 ALTER TABLE `constants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contacts_sort_index` (`sort`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (3,'Об Allevents','Об Allevents','Об Allevents','<p>Здесь будет описание о сайте Allevents</p>\r\n','<p>Здесь будет описание о сайте Allevents</p>\r\n','<p>Здесь будет описание о сайте Allevents</p>\r\n',1,0,'about','2016-06-26 21:00:00','2016-06-29 08:18:15'),(4,'Отчеты','','','<p>Здесь будут отчеты</p>\r\n','<p>Здесь будут отчеты</p>\r\n','<p>Здесь будут отчеты</p>\r\n',1,0,'reports','2016-06-26 09:59:26','2016-06-26 09:59:26'),(5,'Акции','','','<p>Здесь будут акции</p>\r\n','<p>Здесь будут акции</p>\r\n','<p>Здесь будут акции</p>\r\n',1,0,'promo','2016-06-26 10:00:07','2016-06-26 10:00:07'),(6,'Экслюзив','Экслюзив','Экслюзив','<p>Здесь будет выводиться экслюзив</p>\r\n','<p>Здесь будет выводиться экслюзив</p>\r\n','<p>Здесь будет выводиться экслюзив</p>\r\n',1,0,'exclusive','2016-06-26 10:00:55','2016-06-26 10:00:55'),(7,'Контакты','Контакты','Контакты','<p>Здесь будет информация наши&nbsp;контакты</p>\r\n','<p>Здесь будет информация наши&nbsp;контакты</p>\r\n','<p>Здесь будет информация наши&nbsp;контакты</p>\r\n',1,0,'contacts','2016-06-26 10:04:29','2016-06-26 10:04:29'),(8,'Реклама','Реклама','Реклама','<p>Сдесь будет реклама</p>\r\n','<p>Сдесь будет реклама</p>\r\n','<p>Сдесь будет реклама</p>\r\n',1,0,'advert','2016-06-26 10:04:56','2016-06-26 10:04:56'),(9,'Права','Права','Права','<p>здесь будут права</p>\r\n','<p>здесь будут права</p>\r\n','<p>здесь будут права</p>\r\n',1,0,'copyright','2016-06-26 10:06:19','2016-06-26 10:06:19');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'Галерея 1','Галерея 1','Галерея 1','','','','','','',1,0,0,'galereya','2016-07-21 21:00:00','2016-07-22 04:12:58'),(2,'Фотогаллерея','Foto','','','','','','','',1,0,0,'fotogallereya','2016-08-16 21:00:00','2016-08-17 04:10:13'),(3,'123','123','','<p>123</p>\r\n','','','','','',1,0,0,'123','2016-08-16 21:00:00','2016-08-17 04:11:11'),(4,'123','123','123','<p>123</p>\r\n','','','','','',1,0,0,'123','2016-08-16 21:00:00','2016-08-17 04:11:11'),(5,'ss','sss','','','','','','','',1,0,0,'ss','2016-08-21 21:00:00','2016-08-22 07:35:10'),(6,'dsd','dsds','dsada','<p>dsad</p>\r\n','<p>dasdas</p>\r\n','<p>dasdas</p>\r\n','','','',1,10,0,'dsd','2016-08-21 21:00:00','0000-00-00 00:00:00'),(7,'Weekend','Weekend','Weekend','<p>Krysha добавил(-а) 68 новых фото от 22 июля в альбом &laquo;22-23 Weekend&raquo; &mdash; с Victoria Popa-Condrea и еще 4 в Krysha.</p>\r\n','<p>Krysha добавил(-а) 68 новых фото от 22 июля в альбом &laquo;22-23 Weekend&raquo; &mdash; с Victoria Popa-Condrea и еще 4 в Krysha.</p>\r\n','<p>Krysha добавил(-а) 68 новых фото от 22 июля в альбом &laquo;22-23 Weekend&raquo; &mdash; с Victoria Popa-Condrea и еще 4 в Krysha.</p>\r\n','','','',1,15,0,'weekend','2016-08-25 21:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries_xref`
--

DROP TABLE IF EXISTS `galleries_xref`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries_xref` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `galleries_id` int(10) unsigned NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_table_id` (`table_id`),
  KEY `idx_table` (`table`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries_xref`
--

LOCK TABLES `galleries_xref` WRITE;
/*!40000 ALTER TABLE `galleries_xref` DISABLE KEYS */;
INSERT INTO `galleries_xref` VALUES (1,6,8,'products'),(2,7,8,'products');
/*!40000 ALTER TABLE `galleries_xref` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_categories`
--

DROP TABLE IF EXISTS `menu_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_categories`
--

LOCK TABLES `menu_categories` WRITE;
/*!40000 ALTER TABLE `menu_categories` DISABLE KEYS */;
INSERT INTO `menu_categories` VALUES (1,'Холодные закуски','','','','','','','','',0,1,0,0,'xolodnye-zakuski','2016-07-22 21:00:00','2016-07-23 05:21:06'),(2,'Супы','','','','','','','','',0,1,0,0,'supy','2016-07-22 21:00:00','2016-07-23 05:26:57'),(3,'Закуска','Закуска','Закуска','<p>Закуска</p>\r\n','<p>Закуска</p>\r\n','<p>Закуска</p>\r\n','','','',1,1,0,0,'zakuska','2016-08-24 21:00:00','2016-08-25 04:56:40');
/*!40000 ALTER TABLE `menu_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_products`
--

DROP TABLE IF EXISTS `menu_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_slug` (`slug`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_products`
--

LOCK TABLES `menu_products` WRITE;
/*!40000 ALTER TABLE `menu_products` DISABLE KEYS */;
INSERT INTO `menu_products` VALUES (1,'вцувцуцу','вцувцув','цувцу','<p>вувц</p>\r\n','<p>вцувцувцу</p>\r\n','<p>вцувцувцу</p>\r\n','','','',1,7,420.00,1,0,0,'','2016-07-22 21:00:00','2016-07-23 06:58:15'),(2,'вцувцуцу','вцувцув','цувцу','<p>вувц</p>\r\n','<p>вцувцувцу</p>\r\n','<p>вцувцувцу</p>\r\n','','','',1,1,0.00,1,0,0,'','2016-07-22 21:00:00','2016-07-23 06:49:27'),(3,'лапша 2','','','','','','','','',2,7,500.00,1,0,0,'','2016-07-22 21:00:00','2016-07-23 06:58:34'),(4,'dasdas','dsad','dsada','<p>sada</p>\r\n','<p>dsad</p>\r\n','<p>dasd</p>\r\n','','','',2,8,122.00,1,0,0,'','2016-08-21 21:00:00','2016-08-22 07:53:37');
/*!40000 ALTER TABLE `menu_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta`
--

DROP TABLE IF EXISTS `meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_table_id` (`table_id`),
  KEY `idx_table` (`table`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta`
--

LOCK TABLES `meta` WRITE;
/*!40000 ALTER TABLE `meta` DISABLE KEYS */;
INSERT INTO `meta` VALUES (1,'meta свадьбы','','','','','','','','',6,'categories'),(2,'','','','','','','','','',5,'categories'),(3,'','','','','','','','','',7,'categories'),(4,'','','','','','','','','',9,'categories'),(5,'','','','','','','','','',10,'categories'),(6,'','','','','','','','','',11,'categories'),(7,'','','','','','','','','',12,'categories'),(8,'','','','','','','','','',8,'categories'),(9,'','','','','','','','','',13,'categories'),(10,'','','','','','','','','',14,'categories'),(11,'','','','','','','','','',15,'categories'),(12,'','','','','','','','','',16,'categories'),(13,'','','','','','','','','',17,'categories'),(14,'','','','','','','','','',18,'categories'),(15,'','','','','','','','','',19,'categories'),(16,'','','','','','','','','',20,'categories'),(17,'','','','','','','','','',21,'categories'),(18,'','','','','','','','','',22,'categories'),(19,'','','','','','','','','',23,'categories'),(20,'','','','','','','','','',24,'categories'),(21,'','','','','','','','','',25,'categories'),(22,'','','','','','','','','',26,'categories'),(23,'','','','','','','','','',27,'categories'),(24,'','','','','','','','','',28,'categories'),(25,'','','','','','','','','',29,'categories'),(26,'','','','','','','','','',30,'categories'),(27,'','','','','','','','','',31,'categories'),(28,'','','','','','','','','',32,'categories'),(29,'','','','','','','','','',33,'categories'),(30,'','','','','','','','','',34,'categories'),(31,'','','','','','','','','',35,'categories'),(32,'','','','','','','','','',36,'categories'),(33,'','','','','','','','','',37,'categories'),(34,'','','','','','','','','',38,'categories'),(35,'','','','','','','','','',39,'categories'),(36,'123','','','245','','','','','',1,'products'),(37,'','','','','','','','','',2,'products'),(38,'','','','','','','','','',3,'products'),(39,'','','','','','','','','',4,'products'),(40,'','','','','','','','','',5,'products'),(41,'','','','','','','','','',6,'products'),(42,'','','','','','','','','',7,'products'),(43,'','','','','','','','','',8,'products'),(44,'','','','','','','','','',9,'products'),(45,'','','','','','','','','',10,'products'),(46,'','','','','','','','','',11,'products'),(47,'','','','','','','','','',12,'products'),(48,'','','','','','','','','',13,'products'),(49,'','','','','','','','','',14,'products'),(50,'','','','','','','','','',15,'products'),(51,'','','','','','','','','',16,'products'),(52,'','','','','','','','','',17,'products'),(53,'','','','','','','','','',18,'products'),(54,'123','123','789','456','456','346','890','678','789',1,'news'),(55,'','','','','','','','','',2,'news'),(56,'','','','','','','','','',3,'news'),(57,'','','','','','','','','',4,'news'),(58,'','','','','','','','','',5,'news'),(59,'','','','','','','','','',6,'news'),(60,'','','','','','','','','',7,'news'),(61,'','','','','','','','','',2,'content'),(62,'123','','','','245','','','','234',3,'content'),(63,'','','','','','','','','',4,'content'),(64,'','','','','','','','','',5,'content'),(65,'','','','','','','','','',6,'content'),(66,'','','','','','','','','',7,'content'),(67,'','','','','','','','','',8,'content'),(68,'','','','','','','','','',9,'content'),(69,'','','','','','','','','',10,'content'),(70,'','','','','','','','','',19,'products'),(71,'','','','','','','','','',20,'products'),(72,'','','','','','','','','',21,'products'),(73,'ввв','','','вввв','','','вввв','','',1,'galleries'),(74,'','','','','','','','','',1,'videos'),(75,'g','545','3453','g','4534','534','g','5435','534',1,'menu_categories'),(76,'','','','','','','','','',2,'menu_categories'),(77,'вцувцу','','','вцувцу','','','вцувцу','','',1,'menu_products'),(78,'вцувцу','','','вцувцу','','','вцувцу','','',2,'menu_products'),(79,'','','','','','','','','',3,'menu_products'),(80,'','','','','','','','','',2,'videos'),(81,'','','','','','','','','',2,'galleries'),(82,'','','','','','','','','',3,'galleries'),(83,'','','','','','','','','',4,'galleries'),(84,'','','','','','','','','',5,'galleries'),(85,'','','','','','','','','',3,'videos'),(86,'1','1','1','2','2','2','3','3','3',4,'videos'),(87,'','','','','','','','','',6,'galleries'),(88,'','','','','','','','','',8,'news'),(89,'','','','','','','','','',4,'menu_products'),(90,'','','','','','','','','',5,'videos'),(91,'','','','','','','','','',6,'videos'),(92,'','','','','','','','','',7,'videos'),(93,'','','','','','','','','',8,'videos'),(94,'','','','','','','','','',9,'videos'),(95,'','','','','','','','','',3,'menu_categories'),(96,'','','','','','','','','',9,'news'),(97,'das','das','das','das','d','d','das','asd','asd',10,'news'),(98,'1','1','1','2','2','2','2','3','3',7,'galleries');
/*!40000 ALTER TABLE `meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_23_074721_products_categories',2),('2016_07_23_062337_create_videos_xref',3),('2016_07_29_073204_create_contacts',4),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_23_074721_products_categories',2),('2016_07_23_062337_create_videos_xref',3),('2016_07_29_073204_create_contacts',4),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_23_074721_products_categories',2),('2016_07_23_062337_create_videos_xref',3),('2016_07_29_073204_create_contacts',4),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_23_074721_products_categories',2),('2016_07_23_062337_create_videos_xref',3),('2016_07_29_073204_create_contacts',4),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_06_080747_update_photos_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_125704_create_news',1),('2016_04_08_084345_create_content_table',1),('2016_04_20_120053_create_tag_table',1),('2016_04_20_120306_create_news_tag_table',1),('2016_04_21_071344_create_constants',1),('2016_04_28_122305_create_photos_table',1),('2016_05_25_092458_create_products',1),('2016_05_25_103543_create_products_news',1),('2016_05_25_111243_create_meta',1),('2016_05_25_112336_create_types',1),('2016_05_25_112545_create_news_types',1),('2016_05_25_113258_create_galleries',1),('2016_05_25_113907_create_galleries_xref',1),('2016_05_25_115447_create_categories',1),('2016_05_25_120511_create_categories_xref',1),('2016_05_25_121927_create_videos',1),('2016_05_25_122240_menu_products',1),('2016_05_25_122425_menu_categories',1),('2016_06_23_074721_products_categories',2),('2016_07_23_062337_create_videos_xref',3),('2016_07_29_073204_create_contacts',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Voice Vocal Club Karaoke приглашает принять участие в проекте AntiProfy','123','123','<p><strong>Каждый четверг в Voice Vocal Club Karaoke вас ждут звездные гости, а самые активные любители караоке могут проявить свой талант и артистичность, приняв участие в проекте AntiProfy. Правила просты: для участия в конкурсе приглашаются 3 гостя из зала, которые исполнят по 2 песни, а остальные посетители отдают свои голоса понравившемуся исполнителю. Звездный гость выбирает своего фаворита и отдает ему 5 баллов. Победитель с максимальным количеством баллов получает главный приз вечера &mdash; трофей конкурса AntiProfy .</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://cdn.allfun.md/2016/06/23/10/576b94a5c41e9.jpg\" style=\"height:289px; width:620px\" /></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>На этот раз, 23 июня, специальным гостем проекта станет молодая исполнительница&nbsp; Stela Botez. Все участники получат приятные призы от партнеров проекта.</p>\r\n\r\n<p>Voice Vocal Club ждет вас каждый четверг!</p>\r\n\r\n<p>Sing Different - be Anti Profy!</p>\r\n\r\n<p>Начало в 22:00.</p>\r\n\r\n<p>Московский пр-т 15/4, 022 43 93 93, 79409266<br />\r\n<a href=\"http://www.facebook.com/VVCK.MD/\" target=\"_blank\">www.facebook.com/VVCK.MD/</a>,<a href=\"http://www.voiceclub.md/\" target=\"_blank\">www.voiceclub.md</a></p>\r\n','<p>123</p>\r\n','<p>456</p>\r\n','Каждый четверг в Voice Vocal Club Karaoke вас ждут звездные гости, а самые активные любители караоке могут проявить свой талант и артистичность, приняв участие в проекте AntiProfy.','Рум описание','Англ описание',1,1,73,0,'voice-vocal-club-karaoke-priglashaet-prinyati-uchastie-v-proekte-antiprofy','2016-06-23 21:00:00','0000-00-00 00:00:00'),(4,'Несколько учебных заведений будут реорганизованы или ликвидированы','','','<h3>По предложению Министерства просвещения, несколько профессионально-технических учебных заведений будут ликвидированы, реорганизованы или переименованы.</h3>\r\n\r\n<p><br />\r\nСоответствующее решение было утверждено сегодня на заседании правительства, сообщает NOI.md.<br />\r\n<br />\r\nТак, путем реорганизации Кишиневского политехнического колледжа и Кишиневского колледжа микроэлектроники и вычислительной техники будет создан Центр передового опыта в области энергетики и электроники. На базе Финансово-банковского колледжа будет создан Центр передового опыта в области экономики и финансов.<br />\r\n<br />\r\nВ соответствии с другим решением кабмина, Каларашский педагогический колледж имени Александру чел Бун будет ликвидирован. Из названия шести учебных заведений будет исключено название &laquo;педагогический&raquo;. Это Кишиневский колледж имени Алексея Матеевича, Липканского колледжа имени Георгия Асаки, Оргеевский колледж имени Василия Лупу и т.д.<br />\r\n<br />\r\nПо словам руководства Министерства просвещения, реорганизация данных учебных заведений осуществляется в рамках реформы профессионально-технического образования. По словам властей, создание 10 центров передового опыта является обязательством правительства по модернизации профессионально-технического образования. В 2015 году было создано пять центров передового опыта в строительстве, транспорте, информатике, легкой промышленности и пищевой промышленности.</p>\r\n','','','По предложению Министерства просвещения, несколько профессионально-технических учебных заведений будут ликвидированы, реорганизованы или переименованы.','','',1,1,34,0,'neskoliko-uchebnyx-zavedenij-budut-reorganizovany-ili-likvidirovany','2016-06-26 09:15:06','0000-00-00 00:00:00'),(5,'Black & White Party @ Versenz Cafe','Black & White Party @ Versenz Cafe','Black & White Party @ Versenz Cafe','<p>Правильный субботний вечер - это отдых, большая компания друзей, любимые напитки и отличная атмосфера. Если вам это по душе, то Versenz Cafe ждет вас в 21:00.</p>\r\n\r\n<p>Для вас и ваших друзей в эту субботу зажжет DJ DEN DI.<br />\r\nБронируем столики по телефону 060 224422.</p>\r\n\r\n<p>Подробности на страничке Versenz в&nbsp;<a href=\"http://www.facebook.com/versenzcafe\" target=\"_blank\">www.facebook.com</a></p>\r\n','','','Правильный субботний вечер - это отдых, большая компания друзей, любимые напитки и отличная атмосфера. Если вам это по душе, то Versenz Cafe ждет вас в 21:00.','','',1,1,26,0,'black-white-party-versenz-cafe','2016-06-26 09:30:16','0000-00-00 00:00:00'),(6,'С песней по жизни: Voice Vocal Club - 8 лет','С песней по жизни: Voice Vocal Club - 8 лет','С песней по жизни: Voice Vocal Club - 8 лет','<p><strong>В воскресенье, 29 мая, Voice Vocal Club отмечает свой VIII день рождения. К знаменательной дате клуб подошел, основательно подготовившись. За это время он обзавелся широким кругом постоянных гостей, в числе которых много звездных персонажей, для которых пение - не просто хобби.&nbsp;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Voice Vocal Club&quot; славится своей душевной атмосферой и настроением, ну а зрелища здесь всегда на высоком уровне.&nbsp;<br />\r\nДень своего рождения&nbsp; Voice Vocal Club решил отметить с друзьями.</p>\r\n\r\n<p>Приглашенные гости : Max Zavidia и Broono SB.</p>\r\n\r\n<p>В программе вечера: &laquo;Танец персонала&raquo; и исполнение всем коллективом гимна &quot;Voice Vocal Club&quot;, клубный фотограф, бесплатное шампанское и, конечно же, праздничный торт для всех гостей клуба!</p>\r\n\r\n<p>8 лет мы работаем для вас: тысячи караокеров, сотни звездных гостей, десятки победителей в караоке чемпионатах и МИЛЛИОН исполненных песен.&nbsp;</p>\r\n\r\n<p>Начало в 21.00.</p>\r\n\r\n<p>&quot;Voice Vocal Club&quot;: с песней по жизни!</p>\r\n','','','\"Voice Vocal Club\" славится своей душевной атмосферой и настроением, ну а зрелища здесь всегда на высоком уровне. \r\nДень своего рождения  Voice Vocal Club решил отметить с друзьями.','','',1,1,11,0,'s-pesnej-po-zhizni-voice-vocal-club-let','2016-06-26 06:52:35','0000-00-00 00:00:00'),(7,'Самир Логин в проекте AntiProfy в Voice Vocal Club Karaoke','','','<p>Проект AntiProfy с бессменной ведущей Алиной Дабижа в Voice Vocal Club Karaoke набирает обороты. Каждый четверг здесь вас ждут звездные гости, а самые активные любители караоке могут проявить свой талант и артистичность, приняв участие в проекте.&nbsp;</p>\r\n\r\n<p>На этот раз, 26 мая, специальным гостем проекта станет талантливый исполнитель Самир Логин.&nbsp;&nbsp; Все участники получат приятные призы от партнеров проекта.</p>\r\n\r\n<p>Voice Vocal Club ждет вас каждый четверг!</p>\r\n\r\n<p>Sing Different - be Anti Profy!</p>\r\n\r\n<p>Начало в 22:00.</p>\r\n\r\n<p>Московский пр-т 15/4, 022 43 93 93, 79409266</p>\r\n','','','На этот раз, 26 мая, специальным гостем проекта станет талантливый исполнитель Самир Логин.   Все участники получат приятные призы от партнеров проекта.','','',1,1,14,0,'samir-login-v-proekte-antiprofy-v-voice-vocal-club-karaoke','2016-06-26 06:54:09','0000-00-00 00:00:00'),(8,'dfafd','dsad','dsad','<p>dsad</p>\r\n','<p>dsad</p>\r\n','<p>dsad</p>\r\n','dasd','dasdas','dasdas',1,1,8,0,'dfafd','2016-08-21 21:00:00','0000-00-00 00:00:00'),(9,'asdd','dasd','asd','<p>11</p>\r\n','<p>11</p>\r\n','<p>11</p>\r\n','11','11','111',1,0,0,0,'asdd','2016-08-25 21:00:00','2016-08-26 05:43:09'),(10,'dasd','Desd','asdas','<p>asd</p>\r\n','<p>dasd</p>\r\n','<p>dasd</p>\r\n','das','asd','das',1,1,3,0,'dasd','2016-08-25 21:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_tags`
--

DROP TABLE IF EXISTS `news_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_id` int(10) unsigned NOT NULL,
  `tags_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `news_tags_news_id_foreign` (`news_id`),
  KEY `news_tags_tags_id_foreign` (`tags_id`),
  CONSTRAINT `news_tags_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  CONSTRAINT `news_tags_tags_id_foreign` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_tags`
--

LOCK TABLES `news_tags` WRITE;
/*!40000 ALTER TABLE `news_tags` DISABLE KEYS */;
INSERT INTO `news_tags` VALUES (2,1,2),(4,4,1),(5,4,2),(6,5,2),(7,10,2);
/*!40000 ALTER TABLE `news_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_types`
--

DROP TABLE IF EXISTS `news_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_id` int(10) unsigned NOT NULL,
  `types_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `news_types_news_id_foreign` (`news_id`),
  KEY `news_types_types_id_foreign` (`types_id`),
  CONSTRAINT `news_types_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  CONSTRAINT `news_types_types_id_foreign` FOREIGN KEY (`types_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_types`
--

LOCK TABLES `news_types` WRITE;
/*!40000 ALTER TABLE `news_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `news_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `source` text COLLATE utf8_unicode_ci NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `token` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_table_id` (`table_id`),
  KEY `idx_table` (`table`),
  KEY `idx_sort` (`sort`),
  KEY `photos_token_index` (`token`)
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (3,'clubs_3.png',5,'categories',0,''),(4,'weddings_4.png',6,'categories',0,''),(5,'corporate-events_5.png',7,'categories',5,''),(6,'krestini_6.png',9,'categories',6,''),(7,'vipusknoi_7.png',10,'categories',7,''),(8,'5763b58f58043.png',0,'products',8,'97d1a4fbda2add5f15a91464694c84b44e22d2b8'),(9,'5763bb286b276.png',0,'products',9,'1c9a2d29f743583c5a003c7db74f943611e9a1e0'),(10,'restorany-kafe_10.png',8,'categories',10,''),(11,'deni-rojdenia_11.png',11,'categories',11,''),(12,'detskie-prazdniki_12.png',12,'categories',12,''),(13,'akczii-skidki_13.png',13,'categories',13,''),(14,'event-menedzher-organizator_14.png',14,'categories',14,''),(15,'zagsy-czerkvi_15.png',15,'categories',15,''),(16,'svadebnaya-obuvi-i-aksessuary_16.png',16,'categories',16,''),(17,'muzhskie-kostyumy_17.png',18,'categories',17,''),(18,'svadebnyj-tanecz_18.png',19,'categories',18,''),(19,'foto--video_19.png',20,'categories',19,''),(20,'restorany-banketnye-zaly-otkrytye-ploshhadki_20.png',21,'categories',20,''),(21,'torty--kalachi--vkusnyashki_21.png',22,'categories',21,''),(22,'vedushhij--tamada_22.png',23,'categories',22,''),(23,'dj--artisty--shou-programma_23.png',24,'categories',23,''),(24,'svetovoe--zvukovoe-oborudovanie_24.png',25,'categories',24,''),(25,'fejerverki_25.png',26,'categories',25,''),(26,'floristy_26.png',27,'categories',26,''),(27,'yuveliry_27.png',28,'categories',27,''),(28,'oformlenie-torzhestv--dekoraczii_28.png',29,'categories',28,''),(29,'transport_29.png',30,'categories',29,''),(30,'salon-krasoty--kosmetologii-i-spa_30.png',31,'categories',30,''),(31,'stilisty-i-vizazhisty_31.png',32,'categories',31,''),(32,'napitki_32.png',33,'categories',32,''),(33,'turagentstva--gostiniczy_33.png',34,'categories',33,''),(34,'priglasitelinye--podarki--aksessuary_34.png',35,'categories',34,''),(35,'barmeny--oficzianty--shef-povar_35.png',36,'categories',35,''),(36,'kejtering--shatry_36.png',37,'categories',36,''),(37,'organizacziya-predlozheniya-ruki-i-serdcza_37.png',38,'categories',37,''),(38,'fitnes-czentr_38.png',39,'categories',38,''),(39,'svadebnye-i-vechernie-platiya_39.png',17,'categories',39,''),(40,'svadebnye-i-vechernie-platiya_40.png',17,'categories',40,''),(41,'svadebnye-i-vechernie-platiya_41.png',17,'categories',41,''),(42,'drive_42.png',1,'products',0,''),(43,'krysha_43.png',2,'products',43,''),(44,'576bb1ed13fc3.jpg',0,'products',44,'2a917165591994c2cfb202d624f9f1ee604c6f9c'),(45,'s_45.jpg',4,'products',45,''),(46,'576bc2ab70a4a.jpg',0,'products',46,'478e1d866ec79da71f664f5e9c74ab6ae87e14b4'),(47,'576bc2ba4ea7a.jpg',0,'products',47,'f5f857c8c7a5f6ac6e960d6d53abe3931ad2620a'),(48,'576bc2caf15ba.jpg',0,'products',48,'b53c7c24e8e260a42d9b50fb88928fe36daa53f7'),(49,'driveeddd_49.jpg',5,'products',49,''),(50,'the--club_50.png',6,'products',50,''),(51,'krysha_51.jpg',2,'products',51,''),(52,'krysha_52.jpg',2,'products',52,''),(53,'s_53.jpg',4,'products',53,''),(54,'s_54.jpg',4,'products',54,''),(55,'driveeddd_55.jpg',5,'products',55,''),(56,'drivee_56.png',3,'products',56,''),(57,'andys-pizza_57.png',7,'products',57,''),(58,'krysha_58.png',8,'products',58,''),(59,'576bd8676fd77.jpg',0,'products',59,'8555b7254a762dbb9a615f252508adeb9812af02'),(60,'mojito_60.jpg',9,'products',60,''),(61,'mojito-terasarestaurant_61.png',10,'products',61,''),(62,'caffe-graffiti_62.jpg',11,'products',62,''),(63,'club-luxor_63.png',12,'products',63,''),(64,'la-plcinte_64.png',13,'products',64,''),(65,'paradyse-club_65.jpg',14,'products',65,''),(66,'576bdca04ed00.jpg',0,'products',66,'c45d721d94d8fa994b09a012b3f4ea77682dbbab'),(67,'cocos-priv_67.jpg',15,'products',67,''),(68,'chocolate-karaoke-club_68.jpg',16,'products',68,''),(69,'drive_69.jpg',17,'products',69,''),(70,'cocos-prive_70.jpg',18,'products',70,''),(71,'test-novosti_71.png',1,'categories',71,''),(72,'576d6dfeed8de.png',0,'categories',72,'45fc5bb8fc72c0fed947891c17086c52ea4bde64'),(73,'123_73.png',2,'news',73,''),(74,'test-novosti_74.jpg',1,'news',74,''),(75,'neskoliko-uchebnyx-zavedenij-budut-reorganizovany-ili-likvidirovany_75.jpg',4,'news',75,''),(76,'576fa3238d7d2.jpg',0,'news',76,'fceb471460d21c2999d8fce09cb7932774b02e2c'),(77,'black--white-party--versenz-cafe_77.jpg',5,'news',77,''),(78,'s-pesnej-po-zhizni-voice-vocal-club---let_78.jpg',6,'news',78,''),(79,'samir-login-v-proekte-antiprofy-v-voice-vocal-club-karaoke_79.jpg',7,'news',79,''),(80,'57737769d5684.png',0,'products',80,'6f71517191b2898d7b3457e2fa8c19c73d2f7282'),(81,'levis_81.png',19,'products',81,''),(82,'sample-club_82.jpg',20,'products',82,''),(86,'barhat_86.png',21,'products',86,''),(89,'andys-pizza_89.jpg',7,'products',89,''),(91,'andys-pizza_91.jpg',7,'products',91,''),(92,'andys-pizza_92.jpg',7,'products',92,''),(94,'5776156331143.jpg',0,'products',94,'dd39c3d6257e6794a85918238de7ac42321b59d1'),(96,'57761b3778610.jpg',0,'products',96,'0e573ee5cb92c26e2064a38bfdcaf9a35079143f'),(97,'57761b3e53d52.png',0,'products',97,'50197850e059b19e294d64cb8175f24fb37c677f'),(98,'57761b4595cc3.jpg',0,'products',98,'360d532d8a1cb3dcb78f4321cf445deed321c7ea'),(99,'57761b4aaf1ca.jpg',0,'products',99,'027090e92beee659600cfe9e083e59e940dc3358'),(100,'57761b4f8364b.jpg',0,'products',100,'26480a1c8faaa727f7f6b77e7274c266a6c46f1d'),(101,'57761b816df16.jpg',0,'products',101,'8e0e7c90540f16f8c92d6de150869fb08df3a519'),(102,'57761b859e76a.png',0,'products',102,'040991315dabfccbaa6b9b36d299f5b3d89f7cc0'),(103,'57761b8bb2448.jpg',0,'products',103,'cf4308c701fd2b1e303bccd6356b1dddcfbb9a40'),(104,'57761b8f4b313.jpg',0,'products',104,'0feff1e2c90a5d0385042bc0229b796aaa4e8344'),(105,'577622893709f.jpg',0,'products',105,'16ccc3439675a89d785217d91b06deb7b9cff16b'),(106,'577622923f0ac.png',0,'products',106,'e262b71125e7baecb400ab0671ad1f862f44a415'),(107,'5776234f9ae51.jpg',0,'products',107,'4522e0f0b304b34d089781343a03d6fe6e30003e'),(108,'577623531e1b7.jpg',0,'products',108,'61c4d04d520acd728bcc67315fd0469ca3fd4e9e'),(109,'577624e670ae4.jpg',0,'products',109,'1272a745afe166313800d4d1e78cfc58ba49eb53'),(110,'577624e9d96cc.png',0,'products',110,'cd3f24a9be0bb4b0f852971b96122924e4a53a11'),(111,'5776258b2a78e.jpg',0,'products',111,'f1c8f55e1080781ba0eab5290e60ed06bfb6d590'),(112,'5776258f6af95.jpg',0,'products',112,'e4acd382abf86d23310235c13274858615da14b2'),(113,'5776259229dd6.jpg',0,'products',113,'ec4766cffcf25a4394dce39da8376de3ad649491'),(114,'57762721a4b5d.jpg',0,'products',114,'dab50726ae5b756007238f93a2b6f9f666b7d86a'),(115,'577627249ef0e.png',0,'products',115,'97882bfa07ccec281c3d20c330b1c74a0e8abd91'),(116,'577643466c6e1.jpg',0,'products',116,'8e9f51819b53484a8616876681cbade38b9f0012'),(117,'mojito_117.jpg',10,'products',117,''),(119,'5789fe7f31e18.jpg',0,'products',119,'c35f537e054e665778e8f226159c21231545370e'),(121,'578a042cefabc.jpg',0,'hall_plan',120,'03e3f38165fe5f2344b76850c188600e226d1d18'),(123,'578a04768c255.png',0,'products',123,'0d73ac624693c4c7b35ce1d3d058e7c6e2a0a76b'),(124,'578a04823df8b.png',0,'products',124,'092f4fa541547d369a54070843365faffbf6e4a6'),(125,'578a048e0e2d6.png',0,'products',125,'3fe914c0dd12d98b5c76698a1d7700f75a288eb1'),(129,'galereya-_129.jpg',1,'galleries',129,''),(130,'galereya-_130.jpg',1,'galleries',130,''),(131,'galereya-_131.jpg',1,'galleries',131,''),(132,'galereya-_132.jpg',1,'galleries',132,''),(133,'galereya-_133.jpg',1,'galleries',133,''),(136,'andys-pizza_136.jpg',7,'background',136,''),(137,'57933da1e4a43.jpg',2,'menu_products',137,''),(138,'57933da1b5c6d.jpg',2,'menu_products',138,''),(139,'57933da199672.jpg',2,'menu_products',139,''),(140,'57933ed4f24d2.jpg',3,'menu_products',140,''),(141,'andys-pizza_141.jpg',7,'hall_plan',134,''),(142,'andys-pizza_142.png',7,'hall_plan',142,''),(145,'andys-pizza_145.png',7,'hall_plan',145,''),(146,'andys-pizza_146.jpg',7,'hall_plan',146,''),(147,'andys-pizza_147.jpg',7,'hall_plan',147,''),(148,'fotogallereya_148.jpg',2,'galleries',148,''),(149,'fotogallereya_149.jpg',2,'galleries',149,''),(150,'fotogallereya_150.jpg',2,'galleries',150,''),(151,'fotogallereya_151.jpg',2,'galleries',151,''),(152,'57b40ded46305.jpg',0,'galleries',152,'b3e38911bf170c7ac82929d84990f4a2bdf3940b'),(153,'57b40ded3cb1f.jpg',0,'galleries',153,'c0a8761200fe2f3a74a2db729e8a41c30a7a953b'),(154,'57b40ded42e19.jpg',0,'galleries',154,'0632a48f6ebc2bb93f9517d02fd5afed4e860288'),(155,'57b40ded3f25d.jpg',0,'galleries',155,'d73d20daafb35584da69d66770fc899715ed80e9'),(156,'57b40ded709eb.jpg',0,'galleries',156,'89a29ed286a17f6b350d1f3bf81d63e37f8a20f9'),(157,'123_157.jpg',4,'galleries',157,''),(158,'123_158.jpg',4,'galleries',158,''),(159,'123_159.jpg',4,'galleries',159,''),(160,'123_160.jpg',4,'galleries',160,''),(161,'123_161.jpg',3,'galleries',161,''),(162,'123_162.jpg',3,'galleries',162,''),(163,'123_163.jpg',3,'galleries',163,''),(165,'ss_165.jpg',5,'galleries',165,''),(166,'dsd_166.jpg',6,'galleries',166,''),(167,'dfafd_167.jpg',8,'news',167,''),(168,'57bad9aee6ac3.jpg',4,'menu_products',168,''),(172,'krysha_172.jpg',8,'background',172,''),(173,'asdd_173.jpg',9,'news',173,''),(174,'dasd_174.jpg',10,'news',174,''),(176,'krysha_176.jpg',8,'hall_plan',179,''),(177,'krysha_177.jpg',8,'hall_plan',177,''),(178,'krysha_178.jpg',8,'hall_plan',178,''),(179,'krysha_179.jpg',8,'hall_plan',176,''),(181,'krysha_181.jpg',8,'hall_plan',181,''),(182,'weekend_182.jpg',7,'galleries',188,''),(183,'weekend_183.jpg',7,'galleries',183,''),(184,'weekend_184.jpg',7,'galleries',184,''),(185,'weekend_185.jpg',7,'galleries',185,''),(186,'weekend_186.jpg',7,'galleries',186,''),(187,'weekend_187.jpg',7,'galleries',187,''),(188,'weekend_188.jpg',7,'galleries',182,''),(189,'weekend_189.jpg',7,'galleries',189,''),(190,'weekend_190.jpg',7,'galleries',190,''),(191,'weekend_191.jpg',7,'galleries',191,''),(194,'krysha_194.jpg',8,'products',192,''),(195,'krysha_195.jpg',8,'products',195,'');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `top` tinyint(1) NOT NULL,
  `views` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (7,'Andy\'s Pizza','Andy\'s Pizza','Andy\'s Pizza','<p>В меню&nbsp;Andys Pizza&nbsp;самые вкусные блюда! Закажите еду в офис, на дом или оформите предварительный заказ. Приятного аппетита!</p>\r\n','','','Andy\'s Pizza - самый вкусный заказ еды онлайн! Быстрая доставка днем и ночью!','Andys Pizza - comanda online cele mai delicioase bucate! Livrarea rapidă ziua și noaptea!','Andys Pizza - the most delicious food order online! Fast delivery day and night!',0.00,'',1,1,0,0,'andys-pizza','2016-06-24 21:00:00','2016-08-17 04:05:13'),(8,'Krysha','Krysha','Krysha','<p>Отдельного внимания заслуживает наша терраса под открытым небом. Уникальная терраса&nbsp;<strong>LOUNGE-CAF&Eacute; &laquo;KRYSHA&raquo;</strong>, которая располагается на пятом этаже коммерческого центра&nbsp;<strong>&laquo;Sun City&raquo;</strong>, позволит Вам полюбоваться уникальными пейзажами городского центрального парка и ночными огнями столицы. Уютные диванные зоны, легкая музыка, стильный интерьер и свежий воздух &ndash; поистине отдых &laquo;НА ВЫСОТЕ&raquo;.<br />\r\n<br />\r\nК организации праздничного вечера в&nbsp;<strong>LOUNGE-CAF&Eacute; &laquo;KRYSHA&raquo;</strong>&nbsp;подойдут профессионально: разработают план мероприятия, подберут ведущего, составят шоу-программу, пригласят артистов, оформят зал, продумают и разработают меню для фуршета и подарят массу приятных впечатлений.</p>\r\n','<p>O atenție specială merită terasa noastră &icirc;n aer liber. Unice Terasa LOUNGE-CAF&Eacute; &laquo;Krysha&raquo;, care este situat la etajul cinci al &laquo;Sun City&raquo; centru comercial vă va permite să se bucure de peisajul unic al parcului central de oraș și luminile de noapte ale capitalei. zonă confortabilă canapea, muzica usoara, aer curat interior si elegant - cu adevărat o vacanță de &quot;sus&quot;.</p>\r\n\r\n<p>Prin organizarea unei seri festive &icirc;n LOUNGE-CAF&Eacute; &laquo;Krysha&raquo; profesionale adecvate: artiștii să elaboreze un plan de acțiune, se va ridica la conducere, face un program de spectacol, invitați vor desena o cameră, cred că peste și de a lucra din meniul pentru bufet și va da o mulțime de experiențe plăcute.</p>\r\n','<p>Special attention deserves our terrace in the open air. Unique terrace LOUNGE-CAF&Eacute; &laquo;KRYSHA&raquo;, which is located on the fifth floor of &laquo;Sun City&raquo; shopping center, will allow you to enjoy the unique scenery of the city central park and the night lights of the capital. Cozy sofa area, light music, stylish interior and fresh air - truly a vacation &quot;on high&quot;.</p>\r\n\r\n<p>By organizing a festive evening in the LOUNGE-CAF&Eacute; &laquo;KRYSHA&raquo; suitable professional: develop an action plan, will pick up the lead, make a show program, invited artists will draw room, think over and work out the menu for the buffet and will give a lot of pleasant experiences.</p>\r\n','Атмосфера в стиле LOUNGE-CAFÉ «KRYSHA» не отвлекает от повседневности, а скорее украшает её.','Atmosfera din stilul LOUNGE-CAFÉ «Krysha» nu distrage de la viața de zi cu zi, ci mai degrabă o împodobește.','The atmosphere in the style LOUNGE-CAFÉ «KRYSHA» does not distract from everyday life, but rather adorns it.',0.00,'',1,1,0,0,'krysha','2016-06-08 21:00:00','2016-06-29 06:12:48'),(10,'Mojito','Mojito','Mojito','<p>Если вы в поиске места для романтического ужина при свете фонарей, или пре-пати с друзьями, вы его найдете здесь, в&nbsp;<strong>MOJITO</strong>, около Театра Оперы и Балета.<br />\r\n<br />\r\n<strong>Мы очень ценим наших клиентов, поэтому всегда предлагаем только самое лучшее:</strong></p>\r\n\r\n<ul>\r\n	<li>Рабочее время&nbsp;<strong>24/24</strong></li>\r\n	<li>Аргентинская и Японская кухня</li>\r\n	<li>Самый большой выбор коктейлей Мохито:&nbsp; алкогольных и безалкогольных</li>\r\n	<li>Терраса в тени для курящих и некурящих</li>\r\n	<li>Живая музыка каждую пятницу и воскресенье</li>\r\n	<li>Комфортабельный ресторан&nbsp; с расслабляющей атмосферой</li>\r\n	<li>Быстрое и&nbsp; качественное обслуживание</li>\r\n</ul>\r\n\r\n<p><br />\r\nЗайдите к нам, чтобы расслабиться&nbsp; на мягких креслах с чашечкой кофе или чая на завтрак, отведав&nbsp; мисо-суп или стейк на обед, либо коктейль на ужин.<br />\r\n<br />\r\nШагните на территорию, где сочетаются вкусное с&nbsp; приятным, прохлада с удовольствием &ndash; на территорию</p>\r\n','','','Если вы в поиске места для романтического ужина при свете фонарей, или пре-пати с друзьями, вы его найдете здесь.','','',0.00,'',1,1,0,0,'mojito','2016-01-04 22:00:00','2016-06-29 07:11:59'),(11,'Caffe Graffiti','Caffe Graffiti','Caffe Graffiti','','','','Caffe Graffiti ждет \"Филе форели на пару с овощами и соусом из Tartaro\" и желаем Вам приятного аппетита!','Caffe Graffiti va asteapta cu \"Fileu de păstrăv la abur cu legume și sos tartaro\" si va ureaza POFTA BUNA!','Caffe Graffiti awaits \"Trout fillet steamed with vegetables and sauce Tartaro\" and wish you bon appétit!',0.00,'',1,1,0,0,'caffe-graffiti','2016-06-23 09:46:56','2016-06-23 09:46:56'),(12,'CLUB LUXOR','CLUB LUXOR','CLUB LUXOR','','','','','','',0.00,'',1,1,0,0,'club-luxor','2016-06-23 09:49:42','2016-06-23 09:49:42'),(13,'La Plăcinte','La Plăcinte','La Plăcinte','','','','','','',0.00,'',1,1,0,0,'la-plcinte','2016-06-23 09:51:18','2016-06-23 09:51:18'),(14,'PARADYSE CLUB','PARADYSE CLUB','PARADYSE CLUB','','','','','','',0.00,'',1,1,0,0,'paradyse-club','2016-06-23 09:52:36','2016-06-23 09:52:36'),(16,'Chocolate Karaoke Club','Chocolate Karaoke Club','Chocolate Karaoke Club','','','','','','',0.00,'',1,1,0,0,'chocolate-karaoke-club','2016-06-23 10:01:44','2016-06-23 10:01:44'),(17,'Drive','Drive','Drive','','','','','','',0.00,'',1,1,0,0,'drive','2016-06-23 10:02:21','2016-06-23 10:02:21'),(18,'Cocos Prive','Cocos Prive','Cocos Prive','','','','','','',0.00,'',1,1,0,0,'cocos-prive','2016-06-23 10:03:04','2016-06-23 10:03:04'),(21,'BARHAT','BARHAT','BARHAT','<p>В отличии от других салонов, Ваrhat предоставляет платье в прокат на два дня,а не на сутки. Если вы берёте в прокат вечернее платье,все аксессуары к нему:бижутерия,сумочка,шубка,будут предоставлены вам,бесплатно. Цены у нас очень демократичные,на любой бюджет,выбор платьев,огромный,практически на любой размер,а если учесть,что мы постоянно,шьем что-то новенькое,то вполне понятно,что у нас сложно, не найти себе платье. Опытные консультанты помогут вам в выборе платья для вашего торжества. Будь то свадьба или крестины,выпускной или корпоративная вечеринка,даже тематическая,мы непременно, подберём вам платье,в котором вы будите неотразимы.&nbsp;</p>\r\n','<p>Spre deosebire de alte saloane, Varhat oferă rochie pentru &icirc;nchiriere de două zile, nu pe zi. Dacă ați luat &icirc;ntr-o rochie de seara de &icirc;nchiriere, toate accesoriile sale: bijuterii, geantă de m&acirc;nă, paltoane, va fi furnizat &icirc;n mod gratuit. Prețurile s-au foarte accesibile cu privire la orice buget, selecție de rochii, un imens, aproape orice dimensiune, dar atunci c&acirc;nd considerați că suntem &icirc;n mod constant, coase ceva nou, este destul de clar că avem o problemă dificilă, nu pentru a găsi o rochie. consultanți cu experiență vă va ajuta &icirc;n alegerea rochiei pentru celebrarea ta. Fie ca este vorba de o nunta sau un botez, absolvire sau petrecere corporate, chiar și de actualitate, vom cu siguranță, vă va ridica o rochie in care vei fi irezistibil.</p>\r\n','<p>Unlike other salons, Varhat provides Dress for two days rental, not per day. If you take in an evening dress rental, all its accessories: jewelry, handbag, coat, will be provided to you free of charge. Prices have very affordable on any budget, selection of dresses, a huge, virtually any size, but when you consider that we are constantly, sew something new, it is quite clear that we have a difficult, not to find a dress. Experienced consultants will help you in choosing the dress for your celebration. Whether it is a wedding or a christening, graduation or corporate party, even topical, we will certainly, you will pick up a dress in which you&#39;ll be irresistible.</p>\r\n','Салон BARHAT предлагает уникальные платья,авторской работы.Здесь вы найдёте платье на любой вкус. Мы поможем создать вам неповторимый образ, о котором вы мечтали!','BARHAT Salonul ofera rochii unice, autor raboty.Zdes găsiți o rochie pentru a se potrivi cu fiecare gust. Vă vom ajuta să creați o imagine unică, care ai visat!','BARHAT Salon offers unique dresses, author raboty.Zdes you find a dress to suit every taste. We will help you create a unique image of which you dreamed!',0.00,'',1,1,0,0,'barhat','2016-06-28 21:00:00','2016-07-01 05:23:05');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_categories`
--

DROP TABLE IF EXISTS `products_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `products_id` int(10) unsigned NOT NULL,
  `categories_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_categories_products_id_foreign` (`products_id`),
  KEY `products_categories_categories_id_foreign` (`categories_id`),
  CONSTRAINT `products_categories_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `products_categories_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_categories`
--

LOCK TABLES `products_categories` WRITE;
/*!40000 ALTER TABLE `products_categories` DISABLE KEYS */;
INSERT INTO `products_categories` VALUES (1,21,6),(2,21,10),(3,21,17);
/*!40000 ALTER TABLE `products_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_contacts`
--

DROP TABLE IF EXISTS `products_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `contact_id` int(10) unsigned NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_contacts_product_id_foreign` (`product_id`),
  KEY `products_contacts_contact_id_foreign` (`contact_id`),
  CONSTRAINT `products_contacts_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`),
  CONSTRAINT `products_contacts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_contacts`
--

LOCK TABLES `products_contacts` WRITE;
/*!40000 ALTER TABLE `products_contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_news`
--

DROP TABLE IF EXISTS `products_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `products_id` int(10) unsigned NOT NULL,
  `news_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_news_products_id_foreign` (`products_id`),
  KEY `products_news_news_id_foreign` (`news_id`),
  CONSTRAINT `products_news_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  CONSTRAINT `products_news_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_news`
--

LOCK TABLES `products_news` WRITE;
/*!40000 ALTER TABLE `products_news` DISABLE KEYS */;
INSERT INTO `products_news` VALUES (1,8,8),(2,8,10);
/*!40000 ALTER TABLE `products_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `top` tinyint(1) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_name_unique` (`name`),
  KEY `idx_slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,NULL,NULL,'Спорт',1,''),(2,'2016-06-26 09:08:16','2016-06-26 09:08:16','Музыка',0,'');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rights` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Xsort','support@xsort.md','$2y$10$twmlb5YlgimkrTIwnKqeauX9JusORUAVWnjjK1jBhM0AQwJW/3RIy',1,'jgghAHl1pmDVBpG30EwA4YxDkmfhyLaXoqrIEVlwuSliGiFfrsZ9iHnd5LjO',NULL,'2016-09-13 05:41:40'),(4,'Administrator','yubordeniuk5@mail.ru','$2y$10$5TqRizy/cw7rvN0R7GYk1e6usd/vICTNaJBSV.1mShWpR5/gJ5m/6',1,'zojOcyVy2lTv72mZnxAK2QdlfaLckqUGqYrRKcfT7338iOaNXLiWDDKB6cr9',NULL,'2016-09-13 05:42:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'123','','','','','','','','','123',1,0,0,'2016-07-21 21:00:00','2016-07-22 04:54:49'),(2,'Фестивал','Festivalul','','<p>123</p>\r\n','<p>456</p>\r\n','','','','','https://www.youtube.com/watch?v=D5bF7U-mjAA',1,0,0,'2016-08-16 21:00:00','2016-08-17 04:10:13'),(3,'11','111','','<p>1111</p>\n','','','','','','https://www.youtube.com/watch?v=D5bF7U-mjAA',1,0,0,'2016-08-21 21:00:00','2016-08-22 07:36:21'),(5,'','','','','','','','','','https://www.youtube.com/embed/7n7kh0xBoCM',1,0,0,'2016-08-23 21:00:00','2016-08-24 04:46:38'),(6,'KRYSHA GRAND OPENING TERRACE','KRYSHA GRAND OPENING TERRACE','KRYSHA GRAND OPENING TERRACE','<h1>KRYSHA GRAND OPENING TERRACE</h1>\n','<h1>KRYSHA GRAND OPENING TERRACE</h1>\n','<h1>KRYSHA GRAND OPENING TERRACE</h1>\n','','','','https://www.youtube.com/embed/7n7kh0xBoCM',1,0,0,'2016-08-23 21:00:00','2016-08-24 04:49:21'),(7,'Magic Boogie Night @ Krysha, Chisinau','Magic Boogie Night @ Krysha, Chisinau','Magic Boogie Night @ Krysha, Chisinau','\n','','','','','','https://www.youtube.com/embed/voEE-bzEHFs',1,0,0,'2016-08-23 21:00:00','2016-08-24 04:52:33');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos_xref`
--

DROP TABLE IF EXISTS `videos_xref`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos_xref` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `videos_id` int(10) unsigned NOT NULL,
  `table_id` int(11) NOT NULL,
  `table` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_table_id` (`table_id`),
  KEY `idx_table` (`table`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos_xref`
--

LOCK TABLES `videos_xref` WRITE;
/*!40000 ALTER TABLE `videos_xref` DISABLE KEYS */;
INSERT INTO `videos_xref` VALUES (1,2,7,'products'),(3,6,8,'products'),(4,7,8,'products'),(5,8,8,'products');
/*!40000 ALTER TABLE `videos_xref` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-13 11:46:20
