-- MySQL dump 10.15  Distrib 10.0.28-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.0.28-MariaDB

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
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `owner_id` int(9) NOT NULL,
  `path` varchar(51) NOT NULL,
  `small_photo` varchar(107) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (0,1,'/images/layer_2.jpg',''),(1,1,'/images/layer_3.jpg',''),(2,1,'/images/photos/b_ag63jsv5ghf5g.jpg','/images/photos/s_ag63jsv5ghf5g.jpg'),(3,1,'/images/photos/b_ag63trv5ghf5g.jpg','/images/photos/s_ag63trv5ghf5g.jpg'),(4,1,'/images/photos/b_ag67hg0ghf5g.jpg','/images/photos/s_ag67hg0ghf5g.jpg'),(5,1,'/images/photos/b_qg63jsv5ghf5gn.jpg','/images/photos/s_qg63jsv5ghf5gn.jpg'),(6,1,'/files/b_ba251da30d3d26.jpg',''),(7,1,'/files/b_11a67b9576a97f.jpg',''),(8,1,'/files/b_8660e177a35cdb.jpg','');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;

--
-- Table structure for table `questbook`
--

DROP TABLE IF EXISTS `questbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questbook` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `owner_name` varchar(32) NOT NULL,
  `date_created` int(23) NOT NULL,
  `text` varchar(67) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questbook`
--

/*!40000 ALTER TABLE `questbook` DISABLE KEYS */;
INSERT INTO `questbook` VALUES (1,'Тимур',1489404349,'Добрый день'),(2,'Петро',1490349540,'Шо там?');
/*!40000 ALTER TABLE `questbook` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-25 12:15:02
