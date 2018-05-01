--user:user@app.com pw:'password'
--admin:administrator@app.com pw:'password'

-- MySQL dump 10.13  Distrib 5.7.20, for osx10.11 (x86_64)
--
-- Host: localhost    Database: capstone
-- ------------------------------------------------------
-- Server version	5.7.20

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
-- Table structure for table `businesses`
--

DROP TABLE IF EXISTS `businesses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `businesses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `business_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_maps_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `businesses`
--

LOCK TABLES `businesses` WRITE;
/*!40000 ALTER TABLE `businesses` DISABLE KEYS */;
INSERT INTO `businesses` VALUES (1,'Bywater','796 Riverside Dr','Asheville','NC','28801','828-555-5555','http://www.bywater.bar/','https://goo.gl/maps/1uwLgdtp23L2',NULL,NULL),(2,'Desoto Lounge','504 Haywood Rd','Asheville','NC','28806','828-255-1109','http://www.desotolounge.com/','https://goo.gl/maps/3px2fQCTrzo',NULL,NULL),(3,'Ole Shakeys','790 Riverside Dr','Asheville','NC','28801','828-545-6985','https://www.oleshakeys.com/','https://goo.gl/maps/C1hq4jVXB8p',NULL,NULL),(4,'Lazy Diamond','4 Woodfin St','Asheville','NC','28801','828-575-9676','https://www.facebook.com/TheLazyDiamondBar/','https://goo.gl/maps/8ykwiJR7BDS2',NULL,NULL),(5,'Adam Dalton Distillery','251 Biltmore Ave','Asheville','NC','28801','828-785-1499','https://www.daltondistillery.com/','https://goo.gl/maps/HTV2uFEqk6x',NULL,NULL),(6,'Crucible Bar','140A Roberts St','Asheville','NC','28801','828-575-9995','https://www.facebook.com/cruciblebaravl/','https://goo.gl/maps/aXTdUQBZydu',NULL,NULL),(7,'Asheville Yacht Club','87 Patton Ave','Asheville','NC','28801','828-255-8454','http://ashevilleyachtclub.com/','https://goo.gl/maps/KB4UN1viRGQ2',NULL,NULL),(8,'Broadways','120 N Lexington Ave','Asheville','NC','28801','828-285-0400','https://www.facebook.com/pages/Broadways/1677256582488651','https://goo.gl/maps/uhjqZKK9Mnp',NULL,NULL),(9,'The Double Crown','375 Haywood Rd','Asheville','NC','28806','828-412-5491','http://www.thedoublecrown.com/','https://goo.gl/maps/ijvzh2ZWhHy',NULL,NULL),(10,'The Prospect','11 Buxton Ave','Asheville','NC','28801','828-505-0766','https://www.facebook.com/The-Prospect-300957522257/','https://goo.gl/maps/zz8jUFPZhns',NULL,NULL);
/*!40000 ALTER TABLE `businesses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cards`
--

DROP TABLE IF EXISTS `cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `business_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `valid_date` date NOT NULL,
  `expiration_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cards_business_id_foreign` (`business_id`),
  CONSTRAINT `cards_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards`
--

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
INSERT INTO `cards` VALUES (1,1,1,'2018-04-19','2019-04-19',NULL,NULL),(2,1,4,'2018-04-03','2019-04-03','2018-05-01 01:33:09','2018-05-01 01:33:09'),(3,6,4,'2017-05-18','2018-05-18','2018-05-01 01:47:08','2018-05-01 01:47:08'),(4,2,4,'2018-04-06','2019-04-06','2018-05-01 02:01:20','2018-05-01 02:01:20'),(5,10,4,'2018-04-19','2019-04-19','2018-05-01 02:03:34','2018-05-01 02:03:34'),(6,3,4,'2018-04-05','2019-04-05','2018-05-01 02:03:40','2018-05-01 02:03:40'),(7,7,4,'2018-04-12','2019-04-12','2018-05-01 02:03:52','2018-05-01 02:03:52'),(8,5,1,'2018-04-10','2019-04-10','2018-05-01 02:13:47','2018-05-01 02:13:47');
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (191,'2018_02_22_233243_create_hours_table',1),(194,'2014_10_12_000000_create_users_table',2),(195,'2014_10_12_100000_create_password_resets_table',2),(196,'2018_02_22_233236_create_businesses_table',2),(197,'2018_02_22_233249_create_cards_table',2),(198,'2018_04_06_175424_laratrust_setup_tables',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(5,2),(6,2);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_user` (
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_user`
--

LOCK TABLES `permission_user` WRITE;
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
INSERT INTO `permission_user` VALUES (5,3,'App\\User'),(6,3,'App\\User'),(7,3,'App\\User');
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'create-users','Create Users','Create Users','2018-05-01 01:32:20','2018-05-01 01:32:20'),(2,'read-users','Read Users','Read Users','2018-05-01 01:32:20','2018-05-01 01:32:20'),(3,'update-users','Update Users','Update Users','2018-05-01 01:32:20','2018-05-01 01:32:20'),(4,'delete-users','Delete Users','Delete Users','2018-05-01 01:32:20','2018-05-01 01:32:20'),(5,'read-profile','Read Profile','Read Profile','2018-05-01 01:32:20','2018-05-01 01:32:20'),(6,'update-profile','Update Profile','Update Profile','2018-05-01 01:32:20','2018-05-01 01:32:20'),(7,'create-profile','Create Profile','Create Profile','2018-05-01 01:32:20','2018-05-01 01:32:20');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,1,'App\\User'),(1,4,'App\\User'),(2,2,'App\\User');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'administrator','Administrator','Administrator','2018-05-01 01:32:20','2018-05-01 01:32:20'),(2,'user','User','User','2018-05-01 01:32:20','2018-05-01 01:32:20');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','administrator@app.com','$2y$10$aSymmVKyLLF87z1lJQI/a.BuaSNBGsIUX1R.FOK6PTwwSQzup2oA.',NULL,'2018-05-01 01:32:20','2018-05-01 01:32:20'),(2,'User','user@app.com','$2y$10$Jcsr6fzX4pfLT8fuJyHow.FlDqcNSCl1FakAp6cl/.fExHNjGWKfK','FzyW6RndYNLn1bvLFG2fqxMQ7KLskLHYxZ1v3isPk3pBvtIk2dhq5r9NwMJ9','2018-05-01 01:32:20','2018-05-01 01:32:20'),(3,'Cru User','cru_user@app.com','$2y$10$coYxgZKSr4gPxwJ6Zxmm8ed8h0rAehfdRoZImfLPQ8iFuKyDhSstW','reShOJZHI4','2018-05-01 01:32:20','2018-05-01 01:32:20'),(4,'Rob','rob@rob.com','$2y$10$17TZYwxK9C9Dwo1tUcYnjObDz/4QBVACHa7/QgK3PGWkHPa29V1cG','BLAmRsoJNVHT58daN5Z9Z5FCQtwk6Ew26pNCbumDe9nijnsYlsJGovZ0WHk9','2018-05-01 01:33:01','2018-05-01 01:33:01'),(5,'Daphnee Mann','carlee.gutmann@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','s7c54PZFwV','2018-05-01 01:38:11','2018-05-01 01:38:11'),(6,'Daphney Rogahn','ndaugherty@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','44wdtWKzDF','2018-05-01 01:38:11','2018-05-01 01:38:11'),(7,'Brannon Nienow','mollie61@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','JZwQuseh75','2018-05-01 01:38:11','2018-05-01 01:38:11'),(8,'Aurore Bradtke','gust.nolan@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','TIYsxwA5fn','2018-05-01 01:38:11','2018-05-01 01:38:11'),(9,'Dedrick Reichel','lboehm@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','7DbpVDFYlK','2018-05-01 01:38:11','2018-05-01 01:38:11'),(10,'Dr. Stan Lemke','carter.jed@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','YGMD86UZDi','2018-05-01 01:38:11','2018-05-01 01:38:11'),(11,'Amber Reynolds','kkutch@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','IWiJu9YBFj','2018-05-01 01:38:11','2018-05-01 01:38:11'),(12,'Mr. Easton Jast','aurelie59@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','8Ml9IsTWtB','2018-05-01 01:38:11','2018-05-01 01:38:11'),(13,'Prof. Fatima Haag IV','swunsch@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','tpaAJZudRn','2018-05-01 01:38:11','2018-05-01 01:38:11'),(14,'Mrs. Judy Harber','ebert.alden@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','W5cfz2aWTA','2018-05-01 01:38:11','2018-05-01 01:38:11'),(15,'Judson Sipes','mckenna.lubowitz@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','xYWDE8SbW9','2018-05-01 01:38:11','2018-05-01 01:38:11'),(16,'Domingo Little I','donnelly.adalberto@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','uruA8IBgpw','2018-05-01 01:38:11','2018-05-01 01:38:11'),(17,'Mr. Dejon Fadel','nola03@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','KoqGX2PTMa','2018-05-01 01:38:11','2018-05-01 01:38:11'),(18,'Jed Leffler','alvena.nader@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','qtkbvgoZtM','2018-05-01 01:38:11','2018-05-01 01:38:11'),(19,'Alana Torp II','pquigley@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','bn1GUGIu4d','2018-05-01 01:38:11','2018-05-01 01:38:11'),(20,'Gennaro Ruecker','keeling.deven@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','HE7ysqTHqm','2018-05-01 01:38:11','2018-05-01 01:38:11'),(21,'Jaleel Mann','ubergstrom@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','j9eeiGuEcK','2018-05-01 01:38:11','2018-05-01 01:38:11'),(22,'Ramiro Rodriguez','thad.franecki@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','k85SrQIePw','2018-05-01 01:38:11','2018-05-01 01:38:11'),(23,'Jo Heaney','bsanford@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','npto0GdaYP','2018-05-01 01:38:11','2018-05-01 01:38:11'),(24,'Cade Hudson','eabernathy@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','lp671v0HWb','2018-05-01 01:38:11','2018-05-01 01:38:11'),(25,'Prof. Judson Tromp III','justyn.greenfelder@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','MGir7Awppm','2018-05-01 01:38:11','2018-05-01 01:38:11'),(26,'Ms. Bernita Pagac I','garnet.heathcote@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','FLzgZ3dVzZ','2018-05-01 01:38:11','2018-05-01 01:38:11'),(27,'Morgan Herzog','tiara.kling@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','USpvw8o5vB','2018-05-01 01:38:11','2018-05-01 01:38:11'),(28,'Mrs. Alvena Tremblay','sabrina08@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','XcR3ulFUkB','2018-05-01 01:38:11','2018-05-01 01:38:11'),(29,'Prof. Amiya Thompson','fritsch.randall@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','bldSdFvfrT','2018-05-01 01:38:11','2018-05-01 01:38:11'),(30,'Barrett Wisozk DDS','ankunding.vern@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','HOdiviwSbR','2018-05-01 01:38:11','2018-05-01 01:38:11'),(31,'Mr. Eliezer Upton II','bernardo83@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','y4AgsdLJ1F','2018-05-01 01:38:11','2018-05-01 01:38:11'),(32,'Pascale Homenick Sr.','shaniya41@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','I64u8bzgc4','2018-05-01 01:38:11','2018-05-01 01:38:11'),(33,'Matilde Murphy','nschneider@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','Tnm3KUQrHz','2018-05-01 01:38:11','2018-05-01 01:38:11'),(34,'Miss Daphnee Lebsack II','kkris@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','pcl2YjAMzN','2018-05-01 01:38:11','2018-05-01 01:38:11'),(35,'Karley Hamill DDS','bcorwin@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','GEGaq4JPVN','2018-05-01 01:38:11','2018-05-01 01:38:11'),(36,'Prof. Malachi Graham II','watson10@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','llrd9yisSJ','2018-05-01 01:38:11','2018-05-01 01:38:11'),(37,'Sheila Koss','rocio77@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','ztNFvoCsoi','2018-05-01 01:38:11','2018-05-01 01:38:11'),(38,'Enrique Medhurst','reyna68@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','BOQzRxl0Ig','2018-05-01 01:38:11','2018-05-01 01:38:11'),(39,'Efren Toy','quitzon.zackery@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','2i74Xg7pDv','2018-05-01 01:38:11','2018-05-01 01:38:11'),(40,'Gideon Crist','khettinger@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','YCuPu6l6uL','2018-05-01 01:38:11','2018-05-01 01:38:11'),(41,'Clark Romaguera PhD','charley92@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','i31NpCkBaW','2018-05-01 01:38:11','2018-05-01 01:38:11'),(42,'Caterina Bosco','shakira.dubuque@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','uhC9o4FLfa','2018-05-01 01:38:11','2018-05-01 01:38:11'),(43,'Johnathon Cronin','deion.zemlak@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','iwQ79awQfc','2018-05-01 01:38:11','2018-05-01 01:38:11'),(44,'Michaela Botsford Sr.','swaniawski.ruth@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','C9qKbuPgTU','2018-05-01 01:38:11','2018-05-01 01:38:11'),(45,'Miss Sonia Hessel','dahlia61@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','bcAx02hDMQ','2018-05-01 01:38:11','2018-05-01 01:38:11'),(46,'Zander Bode MD','botsford.bridgette@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','8NrRgcdVwl','2018-05-01 01:38:11','2018-05-01 01:38:11'),(47,'Zetta Stamm','powlowski.otho@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','WijsSW9M3q','2018-05-01 01:38:11','2018-05-01 01:38:11'),(48,'Taya Nitzsche','murray.gislason@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','hJCnPfQ9Nz','2018-05-01 01:38:11','2018-05-01 01:38:11'),(49,'Mr. Johathan Turcotte','rhea39@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','1NegXuoYSY','2018-05-01 01:38:11','2018-05-01 01:38:11'),(50,'Waylon Pollich','eino.mclaughlin@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','PK75556R9t','2018-05-01 01:38:11','2018-05-01 01:38:11'),(51,'Dr. Arlo Kohler','nbosco@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','wMff031enm','2018-05-01 01:38:11','2018-05-01 01:38:11'),(52,'Domenick Harris','wade.senger@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','suQsKWSOTb','2018-05-01 01:38:11','2018-05-01 01:38:11'),(53,'Nestor Gutmann','billie55@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','WnovEUqOA0','2018-05-01 01:38:11','2018-05-01 01:38:11'),(54,'Ms. Dahlia Feest','mharber@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','V9iYZAI76y','2018-05-01 01:38:11','2018-05-01 01:38:11'),(55,'Rickie Kessler','mccullough.lavada@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','8wChNgKCYh','2018-05-01 01:38:11','2018-05-01 01:38:11'),(56,'Prof. Courtney Adams','efrain51@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','HU6GiYUUYG','2018-05-01 01:38:11','2018-05-01 01:38:11'),(57,'Christine Connelly','alexandria49@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','pTn0Y3dFGc','2018-05-01 01:38:11','2018-05-01 01:38:11'),(58,'Dr. Brianne Moen','lkeebler@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','8QldD7iRjd','2018-05-01 01:38:11','2018-05-01 01:38:11'),(59,'Mr. Jessie Kuhlman MD','eula10@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','DwTwAoQeGI','2018-05-01 01:38:11','2018-05-01 01:38:11'),(60,'Colton Schulist','eve45@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','QqBpfeJEW1','2018-05-01 01:38:11','2018-05-01 01:38:11'),(61,'Kaitlin Lindgren','shirley44@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','cNcivczdhz','2018-05-01 01:38:11','2018-05-01 01:38:11'),(62,'Ms. Jenifer Swift DDS','irving.nikolaus@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','cvt4eoHyZK','2018-05-01 01:38:11','2018-05-01 01:38:11'),(63,'Darian Pollich','ofelia68@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','7PnLSaPOUn','2018-05-01 01:38:11','2018-05-01 01:38:11'),(64,'Cullen Kulas','grayson70@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','jPsCgowAYM','2018-05-01 01:38:11','2018-05-01 01:38:11'),(65,'Mitchel Jones','vstark@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','ePL3WFppY5','2018-05-01 01:38:11','2018-05-01 01:38:11'),(66,'Chloe Mills III','sauer.bianka@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','xyytgE9unF','2018-05-01 01:38:11','2018-05-01 01:38:11'),(67,'Mr. Otto Pacocha Jr.','consuelo.schroeder@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','QcxTMobTcy','2018-05-01 01:38:11','2018-05-01 01:38:11'),(68,'Guy Crooks IV','lorine60@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','UP5l2iOEtC','2018-05-01 01:38:11','2018-05-01 01:38:11'),(69,'Hudson Hayes III','hilario.barton@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','p0drB1tzaz','2018-05-01 01:38:11','2018-05-01 01:38:11'),(70,'Ignatius Nolan','reese45@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','MsPHYDFJc9','2018-05-01 01:38:11','2018-05-01 01:38:11'),(71,'Prof. Luella Keebler','greg48@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','F0JzRrCAXt','2018-05-01 01:38:11','2018-05-01 01:38:11'),(72,'Eva Wyman','camila55@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','AN97eWnOS7','2018-05-01 01:38:11','2018-05-01 01:38:11'),(73,'Clyde Ullrich','gorczany.nakia@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','6zH0TtpF9H','2018-05-01 01:38:11','2018-05-01 01:38:11'),(74,'Elisabeth Bahringer','pollich.kaylah@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','44JDJBxk6L','2018-05-01 01:38:11','2018-05-01 01:38:11'),(75,'Hans Howell IV','jovany.bernier@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','ATlDJGFqs8','2018-05-01 01:38:11','2018-05-01 01:38:11'),(76,'Minnie Bruen','serena90@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','y3A9wtQjJx','2018-05-01 01:38:11','2018-05-01 01:38:11'),(77,'Mrs. Bella Haley I','tad78@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','cFmwrlT37A','2018-05-01 01:38:11','2018-05-01 01:38:11'),(78,'Carmelo Parker','kling.trace@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','Lkp54t1i53','2018-05-01 01:38:11','2018-05-01 01:38:11'),(79,'Florine McCullough','mlarkin@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','eZkVCOaMJg','2018-05-01 01:38:11','2018-05-01 01:38:11'),(80,'Joana Tromp','mann.vincenzo@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','j9a34Kq478','2018-05-01 01:38:11','2018-05-01 01:38:11'),(81,'Miss Fanny Gottlieb Jr.','tsmith@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','HouwiH9uN6','2018-05-01 01:38:11','2018-05-01 01:38:11'),(82,'Ali Prohaska','glenda.torp@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','AAUOL3ai0n','2018-05-01 01:38:11','2018-05-01 01:38:11'),(83,'Marie Hickle','bailey.kamren@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','gP6Mb7ZYAR','2018-05-01 01:38:11','2018-05-01 01:38:11'),(84,'Miss Hettie Bartoletti V','raina.schiller@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','3cLESX5TbO','2018-05-01 01:38:11','2018-05-01 01:38:11'),(85,'Theo Torphy','heath82@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','8cDdiC7bdN','2018-05-01 01:38:11','2018-05-01 01:38:11'),(86,'Willy Hudson','kovacek.garnett@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','FBw21HGZ6g','2018-05-01 01:38:11','2018-05-01 01:38:11'),(87,'Ms. Ophelia Smith DVM','moen.kody@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','2QeYuasI9u','2018-05-01 01:38:11','2018-05-01 01:38:11'),(88,'Nakia Johnson','maybelle.dickens@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','35dlC6oDKn','2018-05-01 01:38:11','2018-05-01 01:38:11'),(89,'Rickey Kozey','fay.jude@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','yn9uW7EfAX','2018-05-01 01:38:11','2018-05-01 01:38:11'),(90,'Orland Schamberger','olakin@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','SQTA0tZASh','2018-05-01 01:38:11','2018-05-01 01:38:11'),(91,'Dr. Audreanne Adams IV','stevie37@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','bKq3puIk3n','2018-05-01 01:38:11','2018-05-01 01:38:11'),(92,'Dillan Ankunding Jr.','pkris@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','KOpQUM5xtF','2018-05-01 01:38:11','2018-05-01 01:38:11'),(93,'Dr. Johnpaul Reichel','tobin.legros@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','CrU472A0MP','2018-05-01 01:38:11','2018-05-01 01:38:11'),(94,'Hillary Rosenbaum MD','uklein@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','5kbIfnUCR9','2018-05-01 01:38:11','2018-05-01 01:38:11'),(95,'Miss Aylin Davis','bednar.lonzo@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','EowP2uz4xR','2018-05-01 01:38:11','2018-05-01 01:38:11'),(96,'Josh Wuckert','delmer.orn@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','iPjAP2eR34','2018-05-01 01:38:11','2018-05-01 01:38:11'),(97,'Dr. Maryse Ryan I','fkshlerin@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','UZENtzBuDM','2018-05-01 01:38:11','2018-05-01 01:38:11'),(98,'Kaylee Leuschke','madaline.buckridge@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','qohKVxNnYk','2018-05-01 01:38:11','2018-05-01 01:38:11'),(99,'Rocio Carroll PhD','wunsch.deion@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','URuiSkmri8','2018-05-01 01:38:11','2018-05-01 01:38:11'),(100,'Grace Kuhn','sebastian.bruen@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','xEZbYIBOYV','2018-05-01 01:38:11','2018-05-01 01:38:11'),(101,'Joanne Nitzsche','cdooley@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','Um03GB1cTS','2018-05-01 01:38:11','2018-05-01 01:38:11'),(102,'Jordyn Franecki','jamaal.kuvalis@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','pKTq9xRvLF','2018-05-01 01:38:11','2018-05-01 01:38:11'),(103,'Nathanael Bernhard','tjacobson@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','imTWY2UZAM','2018-05-01 01:38:11','2018-05-01 01:38:11'),(104,'Anabelle Greenfelder DVM','bartell.kaleb@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','0NBlHAWRDU','2018-05-01 01:38:11','2018-05-01 01:38:11');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-30 19:05:02
