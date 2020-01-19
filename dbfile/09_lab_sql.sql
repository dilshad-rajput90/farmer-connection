/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.3.16-MariaDB : Database - farmer_connection
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`farmer_connection` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `farmer_connection`;

/*Table structure for table `attachments` */

DROP TABLE IF EXISTS `attachments`;

CREATE TABLE `attachments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `mime_type_id` bigint(20) unsigned DEFAULT NULL,
  `path` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_main_thumbnail` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `attachments_post_id_foreign` (`post_id`),
  KEY `attachments_mime_type_id_foreign` (`mime_type_id`),
  CONSTRAINT `attachments_mime_type_id_foreign` FOREIGN KEY (`mime_type_id`) REFERENCES `mime_type` (`id`) ON DELETE CASCADE,
  CONSTRAINT `attachments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `attachments` */

insert  into `attachments`(`id`,`post_id`,`mime_type_id`,`path`,`is_main_thumbnail`,`created_at`,`updated_at`) values 
(4,37,2,'logo2',0,'2020-01-08 19:13:49','2020-01-08 19:13:49'),
(5,39,1,'dr2.jpg',0,'2020-01-08 20:38:25','2020-01-08 20:38:25'),
(6,40,1,'Sample-png-image-500kb.png',0,'2020-01-08 20:39:59','2020-01-09 05:30:33');

/*Table structure for table `carts` */

DROP TABLE IF EXISTS `carts`;

CREATE TABLE `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_customer_id_foreign` (`customer_id`),
  KEY `carts_product_id_foreign` (`product_id`),
  CONSTRAINT `carts_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `carts` */

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`category`,`parent_id`,`created_at`,`updated_at`) values 
(1,'Rise',0,NULL,NULL),
(2,'Wheat',0,NULL,NULL);

/*Table structure for table `category_post` */

DROP TABLE IF EXISTS `category_post`;

CREATE TABLE `category_post` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_categories_post_id_foreign` (`post_id`),
  KEY `post_categories_category_id_foreign` (`category_id`),
  CONSTRAINT `post_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `post_categories_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `category_post` */

insert  into `category_post`(`id`,`post_id`,`category_id`,`created_at`,`updated_at`) values 
(35,37,1,NULL,NULL);

/*Table structure for table `cities` */

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `state_id` bigint(20) unsigned NOT NULL,
  `city` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cities_state_id_foreign` (`state_id`),
  CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cities` */

insert  into `cities`(`id`,`state_id`,`city`,`created_at`,`updated_at`) values 
(1,1,'karachi',NULL,NULL),
(2,1,'hydrabad',NULL,NULL),
(3,2,'pishwar',NULL,NULL);

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `status_id` bigint(20) unsigned NOT NULL,
  `comment_parent` bigint(20) NOT NULL DEFAULT 0,
  `comment` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_post_id_foreign` (`post_id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_status_id_foreign` (`status_id`),
  CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `comments` */

/*Table structure for table `consultant_category` */

DROP TABLE IF EXISTS `consultant_category`;

CREATE TABLE `consultant_category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `consultant_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consultant_category_consultant_id_foreign` (`consultant_id`),
  KEY `consultant_category_category_id_foreign` (`category_id`),
  CONSTRAINT `consultant_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `consultant_category_consultant_id_foreign` FOREIGN KEY (`consultant_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `consultant_category` */

/*Table structure for table `consultant_messages` */

DROP TABLE IF EXISTS `consultant_messages`;

CREATE TABLE `consultant_messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` bigint(20) unsigned NOT NULL,
  `reciever_id` bigint(20) unsigned NOT NULL,
  `parent_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `message` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consultant_messages_sender_id_foreign` (`sender_id`),
  KEY `consultant_messages_reciever_id_foreign` (`reciever_id`),
  CONSTRAINT `consultant_messages_reciever_id_foreign` FOREIGN KEY (`reciever_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `consultant_messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `consultant_messages` */

/*Table structure for table `consultant_ratings` */

DROP TABLE IF EXISTS `consultant_ratings`;

CREATE TABLE `consultant_ratings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `consultant_id` bigint(20) unsigned NOT NULL,
  `rator_id` bigint(20) unsigned NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consultant_ratings_consultant_id_foreign` (`consultant_id`),
  KEY `consultant_ratings_rator_id_foreign` (`rator_id`),
  CONSTRAINT `consultant_ratings_consultant_id_foreign` FOREIGN KEY (`consultant_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `consultant_ratings_rator_id_foreign` FOREIGN KEY (`rator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `consultant_ratings` */

/*Table structure for table `consultant_reviews` */

DROP TABLE IF EXISTS `consultant_reviews`;

CREATE TABLE `consultant_reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `consultant_id` bigint(20) unsigned NOT NULL,
  `reviewer_id` bigint(20) unsigned NOT NULL,
  `review` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consultant_reviews_consultant_id_foreign` (`consultant_id`),
  KEY `consultant_reviews_reviewer_id_foreign` (`reviewer_id`),
  CONSTRAINT `consultant_reviews_consultant_id_foreign` FOREIGN KEY (`consultant_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `consultant_reviews_reviewer_id_foreign` FOREIGN KEY (`reviewer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `consultant_reviews` */

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `countries` */

insert  into `countries`(`id`,`country`,`created_at`,`updated_at`) values 
(1,'pakistan',NULL,NULL),
(2,'china',NULL,NULL);

/*Table structure for table `expertises` */

DROP TABLE IF EXISTS `expertises`;

CREATE TABLE `expertises` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `expertise` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `expertises` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `likes` */

DROP TABLE IF EXISTS `likes`;

CREATE TABLE `likes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `post_id` bigint(20) unsigned NOT NULL,
  `is_like` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `likes_user_id_foreign` (`user_id`),
  KEY `likes_post_id_foreign` (`post_id`),
  CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `likes` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_31_224525_create_cities_table',1),
(5,'2019_12_31_224550_create_states_table',1),
(6,'2019_12_31_224613_create_countries_table',1),
(7,'2019_12_31_224652_create_professions_table',1),
(8,'2019_12_31_224726_create_expertises_table',1),
(9,'2019_12_31_225019_create_categories_table',1),
(10,'2019_12_31_225041_create_posts_table',1),
(11,'2019_12_31_225147_create_comments_table',1),
(12,'2020_01_01_004959_create_products_table',1),
(13,'2020_01_01_015200_create_orderdetails_table',1),
(14,'2020_01_01_160755_create_status_table',1),
(15,'2020_01_01_162951_create_attachments_table',1),
(16,'2020_01_01_163248_create_mime_type_table',1),
(17,'2020_01_01_165645_create_consultant_category_table',1),
(18,'2020_01_01_171050_create_consultant_reviews_table',1),
(19,'2020_01_01_171115_create_consultant_ratings_table',1),
(20,'2020_01_02_003748_create_product_reviews_table',1),
(21,'2020_01_02_003920_create_product_ratings_table',1),
(22,'2020_01_02_004004_create_carts_table',1),
(23,'2020_01_02_010049_create_payment_methods_table',1),
(24,'2020_01_02_010855_create_likes_table',1),
(25,'2020_01_02_011301_create_consultant_messages_table',1),
(26,'2020_01_02_012429_add_foreign_key_country_id_to_states',1),
(27,'2020_01_02_012640_add_foreign_key_state_id_to_cities',1),
(28,'2020_01_02_015140_add_foreign_key_profession_id_expertise_id_and_location_id_to_users',1),
(29,'2020_01_02_015526_create_post_types_table',1),
(30,'2020_01_02_015631_add_foreign_key_author_id_and_post_type_id_to_posts',1),
(31,'2020_01_02_015849_add_foreign_key_post_id_and_user_id_to_comments',1),
(32,'2020_01_02_020416_add_foreign_key_post_id_and_status_id_to_products',1),
(33,'2020_01_02_020746_add_foreign_key_customer_id_cart_id_status_id_and_payment_method_id_to_orderdetails',1),
(34,'2020_01_02_021148_add_foreign_key_post_id_and_user_id_to_likes',1),
(35,'2020_01_02_021502_add_foreign_key_sender_id_and_reciever_id_to_consultant_messages',1),
(36,'2020_01_02_081808_add_foreign_key_consultant_id_and_category_id_to_consultant_category',1),
(37,'2020_01_02_082540_add_foreign_key_post_id_and_mime_type_id_to_attachments',1),
(38,'2020_01_02_124153_add_foreign_key_consultant_id_and_reviewer_id_to_consultant_reviews',1),
(39,'2020_01_02_124337_add_foreign_key_consultant_id_and_rator_id_to_consultant_ratings',1),
(40,'2020_01_02_132543_add_foreign_key_product_id_and_user_id_to_product_reviews',1),
(41,'2020_01_02_132612_add_foreign_key_product_id_and_user_id_to_product_ratings',1),
(42,'2020_01_02_134544_create_post_categories_table',1),
(43,'2020_01_02_134656_add_foreign_key_post_id_and_category_id_to_post_categories',1),
(44,'2020_01_02_140641_add_foreign_key_customer_id_and_product_id_to_carts',1),
(45,'2020_01_02_144315_create_related_products_table',1),
(46,'2020_01_02_144513_add_foreign_key_product_id_and_related_product_id_to_related_products',1);

/*Table structure for table `mime_type` */

DROP TABLE IF EXISTS `mime_type`;

CREATE TABLE `mime_type` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mime_type` */

insert  into `mime_type`(`id`,`type`,`created_at`,`updated_at`) values 
(1,'jpeg',NULL,NULL),
(2,'png',NULL,NULL),
(3,'ppt',NULL,NULL),
(4,'mp4',NULL,NULL),
(5,'bmp',NULL,NULL);

/*Table structure for table `orderdetails` */

DROP TABLE IF EXISTS `orderdetails`;

CREATE TABLE `orderdetails` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `cart_id` bigint(20) unsigned NOT NULL,
  `status_id` bigint(20) unsigned NOT NULL,
  `payment_method_id` bigint(20) unsigned NOT NULL,
  `address` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orderdetails_customer_id_foreign` (`customer_id`),
  KEY `orderdetails_cart_id_foreign` (`cart_id`),
  KEY `orderdetails_status_id_foreign` (`status_id`),
  KEY `orderdetails_payment_method_id_foreign` (`payment_method_id`),
  CONSTRAINT `orderdetails_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orderdetails_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orderdetails_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orderdetails_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `orderdetails` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `payment_methods` */

DROP TABLE IF EXISTS `payment_methods`;

CREATE TABLE `payment_methods` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `method_type` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `payment_methods` */

/*Table structure for table `post_types` */

DROP TABLE IF EXISTS `post_types`;

CREATE TABLE `post_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_types` */

insert  into `post_types`(`id`,`type`,`created_at`,`updated_at`) values 
(1,'knowledge_base',NULL,NULL),
(2,'discussion',NULL,NULL);

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` bigint(20) unsigned DEFAULT NULL,
  `post_type_id` bigint(20) unsigned DEFAULT NULL,
  `status_id` bigint(20) unsigned DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_success_story` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_author_id_foreign` (`author_id`),
  KEY `posts_post_type_id_foreign` (`post_type_id`),
  KEY `posts_status_id_foreign` (`status_id`),
  CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `posts_post_type_id_foreign` FOREIGN KEY (`post_type_id`) REFERENCES `post_types` (`id`) ON DELETE CASCADE,
  CONSTRAINT `posts_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `posts` */

insert  into `posts`(`id`,`author_id`,`post_type_id`,`status_id`,`title`,`summary`,`post_content`,`is_success_story`,`created_at`,`updated_at`) values 
(37,1,1,NULL,'asfhasgf','sfgsjhfg','sfgsjdhfg',NULL,'2020-01-08 19:13:49','2020-01-08 19:13:49'),
(38,NULL,NULL,NULL,'asfhasgf','3242342sfgsjhfg','353453454sfgsjdhfg',NULL,'2020-01-08 20:29:17','2020-01-08 20:29:17'),
(39,1,1,NULL,'sdhaksj','hdaskjhdkj','shdkasjdhk',NULL,'2020-01-08 20:38:24','2020-01-08 20:38:24'),
(40,1,1,NULL,'working42342fdsd','423423          sdfsf','34234              sdfsd',NULL,'2020-01-08 20:39:59','2020-01-09 05:30:33'),
(41,NULL,NULL,NULL,'sdhaksj','hdaskjhdkj','shdkasjdhk',NULL,'2020-01-09 04:51:45','2020-01-09 04:51:45'),
(42,NULL,NULL,NULL,'sdhaksj','hdaskjhdkj','shdkasjdhk',NULL,'2020-01-09 04:51:59','2020-01-09 04:51:59'),
(43,NULL,NULL,NULL,'sdhaksj','hdaskjhdkj','shdkasjdhk',NULL,'2020-01-09 04:59:01','2020-01-09 04:59:01'),
(44,NULL,NULL,NULL,'sdhaksj','hdaskjhdkj','shdkasjdhk',NULL,'2020-01-09 05:04:45','2020-01-09 05:04:45'),
(45,NULL,NULL,NULL,'sdhaksj','hdaskjhdkj','shdkasjdhk',NULL,'2020-01-09 05:05:32','2020-01-09 05:05:32'),
(46,NULL,NULL,NULL,'sdhaksj','hdaskjhdkj','shdkasjdhk',NULL,'2020-01-09 05:05:57','2020-01-09 05:05:57'),
(47,NULL,NULL,NULL,'sdhaksj','hdaskjhdkj','shdkasjdhk',NULL,'2020-01-09 05:06:52','2020-01-09 05:06:52'),
(48,NULL,NULL,NULL,'42342fdsd','423423          sdfsf','34234              sdfsd',NULL,'2020-01-09 05:08:27','2020-01-09 05:08:27'),
(49,NULL,NULL,NULL,'42342fdsd','423423          sdfsf','34234              sdfsd',NULL,'2020-01-09 05:09:24','2020-01-09 05:09:24'),
(50,NULL,NULL,NULL,'42342fdsd','423423          sdfsf','34234              sdfsd',NULL,'2020-01-09 05:09:50','2020-01-09 05:09:50');

/*Table structure for table `product_ratings` */

DROP TABLE IF EXISTS `product_ratings`;

CREATE TABLE `product_ratings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `rating` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_ratings_product_id_foreign` (`product_id`),
  KEY `product_ratings_user_id_foreign` (`user_id`),
  CONSTRAINT `product_ratings_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `product_ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_ratings` */

/*Table structure for table `product_reviews` */

DROP TABLE IF EXISTS `product_reviews`;

CREATE TABLE `product_reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `review` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_reviews_product_id_foreign` (`product_id`),
  KEY `product_reviews_user_id_foreign` (`user_id`),
  CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_reviews` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `product_location_id` bigint(20) unsigned NOT NULL,
  `status_id` bigint(20) unsigned NOT NULL,
  `price` bigint(20) NOT NULL,
  `sale` bigint(20) NOT NULL DEFAULT 0,
  `stock` bigint(20) NOT NULL,
  `is_featured` int(11) NOT NULL DEFAULT 0,
  `shipping_charges` int(11) NOT NULL,
  `post_expire_date` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_post_id_foreign` (`post_id`),
  KEY `products_product_location_id_foreign` (`product_location_id`),
  KEY `products_status_id_foreign` (`status_id`),
  CONSTRAINT `products_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_product_location_id_foreign` FOREIGN KEY (`product_location_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

/*Table structure for table `professions` */

DROP TABLE IF EXISTS `professions`;

CREATE TABLE `professions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `profession` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `professions` */

insert  into `professions`(`id`,`profession`,`created_at`,`updated_at`) values 
(1,'admin',NULL,NULL),
(2,'consultant',NULL,NULL),
(3,'academic',NULL,NULL),
(4,'farmer',NULL,NULL),
(5,'general',NULL,NULL);

/*Table structure for table `related_products` */

DROP TABLE IF EXISTS `related_products`;

CREATE TABLE `related_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `related_product_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `related_products_product_id_foreign` (`product_id`),
  KEY `related_products_related_product_id_foreign` (`related_product_id`),
  CONSTRAINT `related_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `related_products_related_product_id_foreign` FOREIGN KEY (`related_product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `related_products` */

/*Table structure for table `states` */

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` bigint(20) unsigned NOT NULL,
  `state` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `states_country_id_foreign` (`country_id`),
  CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `states` */

insert  into `states`(`id`,`country_id`,`state`,`created_at`,`updated_at`) values 
(1,1,'sindh',NULL,NULL),
(2,1,'kpk',NULL,NULL),
(3,2,'chicago',NULL,NULL),
(4,2,'bijing',NULL,NULL);

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `status` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `profession_id` bigint(20) unsigned DEFAULT NULL,
  `expertise_id` bigint(20) unsigned DEFAULT NULL,
  `location_id` bigint(20) unsigned DEFAULT NULL,
  `status_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(151) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture_path` varchar(151) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_profession_id_foreign` (`profession_id`),
  KEY `users_expertise_id_foreign` (`expertise_id`),
  KEY `users_location_id_foreign` (`location_id`),
  KEY `users_status_id_foreign` (`status_id`),
  CONSTRAINT `users_expertise_id_foreign` FOREIGN KEY (`expertise_id`) REFERENCES `expertises` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_profession_id_foreign` FOREIGN KEY (`profession_id`) REFERENCES `professions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`profession_id`,`expertise_id`,`location_id`,`status_id`,`name`,`email`,`mobile_number`,`picture_path`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,1,NULL,NULL,NULL,'dilshad','dilshad@gmail.com',NULL,NULL,NULL,'$2y$10$UX91Q.SP7og5MQlT4xz.4.hS7n88cgtY3wTojoaS7tEdMe6SWDv92',NULL,'2020-01-07 13:27:32','2020-01-07 13:27:32');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
