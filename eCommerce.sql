-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: eCommerce
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
<<<<<<< HEAD
  PRIMARY KEY (`id`)
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
=======
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
=======
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
>>>>>>> parent of b82c19f... finished all view page templates
>>>>>>> 51eaf43062155de3f21d680b21957cd6935f6ab7
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'plphan206@hotmail.com','eggs6767'),(2,'a@a.com','a');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
<<<<<<< HEAD
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (21,'candy','2015-09-03 00:54:58','2015-09-03 00:54:58'),(22,'fruit','2015-09-03 00:59:03','2015-09-03 00:59:03'),(23,'stuff','2015-09-03 08:33:36','2015-09-03 08:33:36'),(24,'','2015-09-03 21:46:11','2015-09-03 21:46:11'),(25,'','2015-09-03 21:46:24','2015-09-03 21:46:24'),(26,'','2015-09-03 21:46:39','2015-12-08 11:12:19'),(27,'','2015-11-18 11:58:05','2015-11-18 11:58:05'),(28,'Electronics','2015-12-04 11:04:45','2015-12-08 11:14:27'),(29,'Coffee','2015-12-04 11:27:00','2015-12-04 11:27:00'),(30,'Phones','2015-12-04 11:28:12','2015-12-04 11:28:12'),(31,'Sandwich','2015-12-04 11:29:39','2015-12-04 11:29:39'),(32,'','2015-12-04 11:29:51','2015-12-04 11:29:51'),(33,'','2015-12-04 11:29:58','2015-12-04 11:29:58'),(34,'','2015-12-04 11:30:06','2015-12-04 11:30:06'),(35,'','2015-12-04 11:30:18','2015-12-04 11:30:18'),(36,'','2015-12-04 11:30:28','2015-12-04 11:30:28');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
=======
>>>>>>> parent of b82c19f... finished all view page templates
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
<<<<<<< HEAD
  `total_price` decimal(8,2) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `ship_first_name` varchar(45) DEFAULT NULL,
  `ship_last_name` varchar(45) DEFAULT NULL,
  `ship_address` varchar(45) DEFAULT NULL,
  `address2` varchar(45) DEFAULT NULL,
  `ship_city` varchar(45) DEFAULT NULL,
  `ship_state` varchar(2) DEFAULT NULL,
  `ship_zipcode` int(11) DEFAULT NULL,
  `bill_first_name` varchar(45) DEFAULT NULL,
  `bill_address` varchar(45) DEFAULT NULL,
  `bill_last_name` varchar(45) DEFAULT NULL,
  `bill_city` varchar(45) DEFAULT NULL,
  `bill_state` varchar(2) DEFAULT NULL,
  `bill_zipcode` int(11) DEFAULT NULL,
=======
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
>>>>>>> parent of b82c19f... finished all view page templates
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,25.00,NULL,'Legion','Commander',NULL,NULL,NULL,NULL,NULL,NULL,'Dota 2',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL),(2,29.97,'pending','','','','','','',0,'','','','','',0,'2015-11-19 14:20:58','2015-11-19 14:20:58');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_images_items1_idx` (`item_id`),
  CONSTRAINT `fk_images_items1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'./uploads/IMG_0153.JPG','2015-09-03 00:54:58','2015-09-03 00:54:58',21),(2,'./uploads/IMG_0891.JPG','2015-09-03 00:59:03','2015-09-03 00:59:03',22),(3,'./uploads/IMG_0887.JPG','2015-09-03 08:33:36','2015-09-03 08:33:36',23),(4,'./uploads/','2015-09-03 21:46:11','2015-09-03 21:46:11',24),(5,'./uploads/','2015-09-03 21:46:24','2015-09-03 21:46:24',25),(6,'./uploads/','2015-09-03 21:46:39','2015-12-08 11:12:19',26),(7,'./uploads/pee_stain.png','2015-11-18 11:58:05','2015-11-18 11:58:05',27),(8,'./uploads/','2015-12-04 11:04:45','2015-12-08 11:14:27',28),(9,'./uploads/','2015-12-04 11:27:00','2015-12-04 11:27:00',29),(10,'./uploads/','2015-12-04 11:28:12','2015-12-04 11:28:12',30),(11,'./uploads/','2015-12-04 11:29:39','2015-12-04 11:29:39',31),(12,'./uploads/','2015-12-04 11:29:51','2015-12-04 11:29:51',32),(13,'./uploads/','2015-12-04 11:29:58','2015-12-04 11:29:58',33),(14,'./uploads/','2015-12-04 11:30:06','2015-12-04 11:30:06',34),(15,'./uploads/','2015-12-04 11:30:18','2015-12-04 11:30:18',35),(16,'./uploads/','2015-12-04 11:30:28','2015-12-04 11:30:28',36);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
<<<<<<< HEAD
  `description` text,
  `price` decimal(4,2) DEFAULT NULL,
  `inventory` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_items_categories1_idx` (`category_id`),
  CONSTRAINT `fk_items_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
=======
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
=======
  `description` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `inventory_count` int(11) DEFAULT NULL,
  `image` longblob,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
>>>>>>> parent of b82c19f... finished all view page templates
>>>>>>> 51eaf43062155de3f21d680b21957cd6935f6ab7
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (21,'Cotton Candy','candy',20.00,7,'2015-09-03 00:54:58','2015-09-03 00:54:58',21),(22,'apples','green and appley',5.00,NULL,'2015-09-03 00:59:03','2015-09-03 00:59:03',22),(23,'blah','blah ',0.00,NULL,'2015-09-03 08:33:36','2015-09-03 08:33:36',23),(24,'banan','cup',12.00,1,'2015-09-03 21:46:11','2015-09-03 21:46:11',24),(25,'hello hat','what',99.00,1,'2015-09-03 21:46:24','2015-09-03 21:46:24',25),(26,'cup phone','cool stuff',15.00,2,'2015-09-03 21:46:39','2015-12-08 11:12:19',26),(27,'Preston\'s Cheese','Stankey',9.99,-1,'2015-11-18 11:58:05','2015-11-18 11:58:05',27),(28,'Samsung Tv','4K DAWG',99.99,2,'2015-12-04 11:04:45','2015-12-08 11:14:27',28),(29,'Coffee','Starbucks',4.99,2,'2015-12-04 11:27:00','2015-12-04 11:27:00',29),(30,'iPhone 10','virtual reality PHONE WHUT',99.99,2,'2015-12-04 11:28:12','2015-12-04 11:28:12',30),(31,'Cheese Sandwich','MmMm good',2.99,1,'2015-12-04 11:29:39','2015-12-04 11:29:39',31),(32,'product 1','1',11.00,1,'2015-12-04 11:29:51','2015-12-04 11:29:51',32),(33,'product 2','1',1.00,1,'2015-12-04 11:29:58','2015-12-04 11:29:58',33),(34,'product 3','11',1.00,1,'2015-12-04 11:30:06','2015-12-04 11:30:06',34),(35,'product 4','4',4.00,4,'2015-12-04 11:30:18','2015-12-04 11:30:18',35),(36,'product 5','4',5.00,4,'2015-12-04 11:30:28','2015-12-04 11:30:28',36);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
<<<<<<< HEAD
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `items_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`items_id`,`customers_id`),
  KEY `fk_items_has_customers_customers1_idx` (`customers_id`),
  KEY `fk_items_has_customers_items1_idx` (`items_id`),
  CONSTRAINT `fk_items_has_customers_customers1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_items_has_customers_items1` FOREIGN KEY (`items_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
=======
=======
  `customer_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`customer_id`,`item_id`),
  KEY `fk_customers_has_items_items1_idx` (`item_id`),
  KEY `fk_customers_has_items_customers_idx` (`customer_id`),
  CONSTRAINT `fk_customers_has_items_customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_customers_has_items_items1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
>>>>>>> parent of b82c19f... finished all view page templates
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
>>>>>>> 51eaf43062155de3f21d680b21957cd6935f6ab7
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,21,1,6),(2,23,1,7),(3,27,2,3);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

<<<<<<< HEAD
-- Dump completed on 2015-12-08 15:35:08
=======
<<<<<<< HEAD
-- Dump completed on 2015-09-03 10:53:37
=======
-- Dump completed on 2015-08-31 15:26:06
>>>>>>> parent of b82c19f... finished all view page templates
>>>>>>> 51eaf43062155de3f21d680b21957cd6935f6ab7
