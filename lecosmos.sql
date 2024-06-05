-- MySQL dump 10.13  Distrib 8.0.34, for macos13 (arm64)
--
-- Host: localhost    Database: lecosmos
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `CinemaSchedule`
--

DROP TABLE IF EXISTS `CinemaSchedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CinemaSchedule` (
  `ScheduleID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `IMDbID` varchar(20) DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Room` int(11) DEFAULT NULL,
  PRIMARY KEY (`ScheduleID`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CinemaSchedule`
--

LOCK TABLES `CinemaSchedule` WRITE;
/*!40000 ALTER TABLE `CinemaSchedule` DISABLE KEYS */;
INSERT INTO `CinemaSchedule` VALUES (1,'2024-05-01','tt0110912','19:00:00',1),(2,'2024-05-01','tt0246578','19:00:00',2),(3,'2024-05-02','tt0118715','19:00:00',1),(4,'2024-05-02','tt0074486','19:00:00',2),(5,'2024-05-03','tt0137523','19:00:00',1),(6,'2024-05-03','tt0066921','19:00:00',2),(7,'2024-05-04','tt0083658','19:00:00',1),(8,'2024-05-04','tt0105236','19:00:00',2),(9,'2024-05-05','tt0133093','19:00:00',1),(10,'2024-05-05','tt0209144','19:00:00',2),(11,'2024-05-06','tt0110912','19:00:00',1),(12,'2024-05-06','tt0180093','19:00:00',2),(13,'2024-05-07','tt0118715','19:00:00',1),(14,'2024-05-07','tt0075314','19:00:00',2),(15,'2024-05-08','tt0137523','19:00:00',1),(16,'2024-05-08','tt0110912','19:00:00',2),(17,'2024-05-09','tt0246578','19:00:00',1),(18,'2024-05-09','tt0083658','19:00:00',2),(19,'2024-05-10','tt0118715','19:00:00',1),(20,'2024-05-10','tt0137523','19:00:00',2),(21,'2024-05-11','tt0133093','19:00:00',1),(22,'2024-05-11','tt0105236','19:00:00',2),(23,'2024-05-12','tt0066921','19:00:00',1),(24,'2024-05-12','tt0209144','19:00:00',2),(25,'2024-05-13','tt0110912','19:00:00',1),(26,'2024-05-13','tt0246578','19:00:00',2),(27,'2024-05-14','tt0118715','19:00:00',1),(28,'2024-05-14','tt0074486','19:00:00',2),(29,'2024-05-15','tt0137523','19:00:00',1),(30,'2024-05-15','tt0083658','19:00:00',2),(31,'2024-05-16','tt0110912','19:00:00',1),(32,'2024-05-16','tt0066921','19:00:00',2),(33,'2024-05-17','tt0246578','19:00:00',1),(34,'2024-05-17','tt0105236','19:00:00',2),(35,'2024-05-18','tt0118715','19:00:00',1),(36,'2024-05-18','tt0133093','19:00:00',2),(37,'2024-05-19','tt0137523','19:00:00',1),(38,'2024-05-19','tt0075314','19:00:00',2),(39,'2024-05-20','tt0110912','19:00:00',1),(40,'2024-05-20','tt0209144','19:00:00',2),(41,'2024-05-21','tt0246578','19:00:00',1),(42,'2024-05-21','tt0180093','19:00:00',2),(43,'2024-05-22','tt0118715','19:00:00',1),(44,'2024-05-22','tt0133093','19:00:00',2),(45,'2024-05-23','tt0137523','19:00:00',1),(46,'2024-05-23','tt0074486','19:00:00',2),(47,'2024-05-24','tt0110912','19:00:00',1),(48,'2024-05-24','tt0066921','19:00:00',2),(49,'2024-05-25','tt0246578','19:00:00',1),(50,'2024-05-25','tt0105236','19:00:00',2),(51,'2024-05-26','tt0118715','19:00:00',1),(52,'2024-05-26','tt0083658','19:00:00',2),(53,'2024-05-27','tt0137523','19:00:00',1),(54,'2024-05-27','tt0133093','19:00:00',2),(55,'2024-05-28','tt0110912','19:00:00',1),(56,'2024-05-28','tt0209144','19:00:00',2),(57,'2024-05-29','tt0246578','19:00:00',1),(58,'2024-05-29','tt0180093','19:00:00',2),(59,'2024-05-30','tt0118715','19:00:00',1),(60,'2024-05-30','tt0075314','19:00:00',2),(61,'2024-05-31','tt0137523','19:00:00',1),(62,'2024-05-31','tt0074486','19:00:00',2),(63,'2024-06-01','tt0110912','19:00:00',1),(64,'2024-06-01','tt0083658','19:00:00',2),(65,'2024-06-02','tt0118715','19:00:00',1),(66,'2024-06-02','tt0105236','19:00:00',2),(67,'2024-06-03','tt0137523','19:00:00',1),(68,'2024-06-03','tt0133093','19:00:00',2),(69,'2024-06-04','tt0110912','19:00:00',1),(70,'2024-06-04','tt0066921','19:00:00',2),(71,'2024-06-05','tt0246578','19:00:00',1),(72,'2024-06-05','tt0209144','19:00:00',2),(73,'2024-06-06','tt0118715','19:00:00',1),(74,'2024-06-06','tt0180093','19:00:00',2),(75,'2024-06-07','tt0137523','19:00:00',1),(76,'2024-06-07','tt0075314','19:00:00',2),(77,'2024-06-08','tt0110912','19:00:00',1),(78,'2024-06-08','tt0133093','19:00:00',2),(79,'2024-06-09','tt0246578','19:00:00',1),(80,'2024-06-09','tt0074486','19:00:00',2),(81,'2024-06-10','tt0118715','19:00:00',1),(82,'2024-06-10','tt0083658','19:00:00',2),(83,'2024-06-11','tt0137523','19:00:00',1),(84,'2024-06-11','tt0066921','19:00:00',2),(85,'2024-06-12','tt0110912','19:00:00',1),(86,'2024-06-12','tt0105236','19:00:00',2),(87,'2024-06-13','tt0246578','19:00:00',1),(88,'2024-06-13','tt0133093','19:00:00',2),(89,'2024-06-14','tt0118715','19:00:00',1),(90,'2024-06-14','tt0209144','19:00:00',2),(91,'2024-06-15','tt0137523','19:00:00',1),(92,'2024-06-15','tt0180093','19:00:00',2),(93,'2024-06-16','tt0110912','19:00:00',1),(94,'2024-06-16','tt0075314','19:00:00',2),(95,'2024-06-17','tt0246578','19:00:00',1),(96,'2024-06-17','tt0133093','19:00:00',2),(97,'2024-06-18','tt0118715','19:00:00',1),(98,'2024-06-18','tt0074486','19:00:00',2),(99,'2024-06-19','tt0137523','19:00:00',1),(100,'2024-06-19','tt0083658','19:00:00',2),(101,'2024-06-20','tt0110912','19:00:00',1),(102,'2024-06-20','tt0066921','19:00:00',2),(103,'2024-06-21','tt0246578','19:00:00',1),(104,'2024-06-21','tt0105236','19:00:00',2),(105,'2024-06-22','tt0118715','19:00:00',1),(106,'2024-06-22','tt0133093','19:00:00',2),(107,'2024-06-23','tt0137523','19:00:00',1),(108,'2024-06-23','tt0209144','19:00:00',2),(109,'2024-06-24','tt0110912','19:00:00',1),(110,'2024-06-24','tt0180093','19:00:00',2),(111,'2024-06-25','tt0246578','19:00:00',1),(112,'2024-06-25','tt0075314','19:00:00',2),(113,'2024-06-26','tt0118715','19:00:00',1),(114,'2024-06-26','tt0133093','19:00:00',2),(115,'2024-06-27','tt0137523','19:00:00',1),(116,'2024-06-27','tt0074486','19:00:00',2),(117,'2024-06-28','tt0110912','19:00:00',1),(118,'2024-06-28','tt0083658','19:00:00',2),(119,'2024-06-29','tt0246578','19:00:00',1),(120,'2024-06-29','tt0105236','19:00:00',2),(121,'2024-06-30','tt0118715','19:00:00',1),(122,'2024-06-30','tt0133093','19:00:00',2);
/*!40000 ALTER TABLE `CinemaSchedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(200) DEFAULT NULL,
  `film` varchar(20) DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'Amazing movie!','tt0110912','john_doe','2024-05-01'),(2,'A must-watch classic.','tt0246578','jane_smith','2024-05-01'),(3,'Really makes you think.','tt0118715','alice_jones','2024-05-02'),(4,'A bit too surreal for me.','tt0074486','bob_brown','2024-05-02'),(5,'Loved every minute of it!','tt0137523','charlie_davis','2024-05-03'),(6,'Timeless and thought-provoking.','tt0066921','john_doe','2024-05-03'),(7,'A visual masterpiece.','tt0083658','jane_smith','2024-05-04'),(8,'Incredibly intense!','tt0105236','alice_jones','2024-05-04'),(9,'An all-time favorite.','tt0133093','bob_brown','2024-05-05'),(10,'Brilliantly confusing.','tt0209144','charlie_davis','2024-05-05'),(11,'film pazzesco','tt0180093','ciao','2024-05-22'),(12,'non so bene','tt0075314','ciao','2024-05-22'),(13,'J\'aime!!','tt0074486','Rose','2024-05-22'),(14,'questo film è molto bello','tt0105236','Alice','2024-05-22'),(15,'lol','tt0083658','fede','2024-05-22'),(16,'uyvtijo','tt0067023','fede','2024-05-22'),(17,'qus','tt0074486','federica','2024-06-04'),(18,'ciao','tt0110912','ciao','2024-06-04'),(19,'Film disturbante!!','tt0246578','ciao','2024-06-05'),(20,'WOOOOW','tt0246578','ciao','2024-06-05'),(21,'Donnie Darko è il mio nuovo film preferito!!','tt0246578','ciao','2024-06-05'),(22,'Da vedere assolutamente!','tt0209144','rose','2024-06-05'),(23,'Ancora oggi ci penso!','tt0209144','rose','2024-06-05'),(24,'WOOW!','tt0209144','rose','2024-06-05'),(25,'WOOW!','tt0209144','rose','2024-06-05'),(26,'Erano uno o due?','tt0137523','rose','2024-06-05'),(27,'WOW','tt0137523','rose','2024-06-05'),(28,'qual è la prima regola del fight club?','tt0137523','rose','2024-06-05'),(29,'prova','tt0137523','rose','2024-06-05'),(30,'Non ci ho capito proprio niente!','tt0137523','Andrea Giglio','2024-06-05');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `towatch`
--

DROP TABLE IF EXISTS `towatch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `towatch` (
  `username` varchar(20) NOT NULL,
  `IMDbID` varchar(20) NOT NULL,
  PRIMARY KEY (`username`,`IMDbID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `towatch`
--

LOCK TABLES `towatch` WRITE;
/*!40000 ALTER TABLE `towatch` DISABLE KEYS */;
INSERT INTO `towatch` VALUES ('Alice','tt0105236'),('Alice','tt0133093'),('Andrea Giglio','tt0137523'),('fede','tt0083658'),('federica','tt0074486'),('federica','tt0118715'),('Rose','tt0110912');
/*!40000 ALTER TABLE `towatch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('',''),('AlexanderYoung','password12'),('Alice','ciao123'),('AliceJohnson','password1'),('alice_jones','password789'),('Andrea','prova123'),('Andrea Giglio','prova123'),('AvaThomas','password9'),('bob_brown','password321'),('charlie_davis','password654'),('CharlotteLopez','password15'),('ciao','ciao123'),('ciaoprova','CiAo123'),('DavidSmith','password2'),('EmmaBrown','password3'),('EthanRodriguez','password14'),('fede','ciao123'),('federica','ciao1234!'),('IsabellaHernandez','password11'),('JamesTaylor','password8'),('jane_smith','password456'),('john_doe','password123'),('LiamWilson','password6'),('MiaGarcia','password13'),('MichaelDavis','password4'),('OliviaAnderson','password7'),('Pierre','ciao123'),('prova2','ciao123'),('provaaa','ciao123'),('PROVAAAA','ciao123'),('Rose','ciao123'),('SophiaMartinez','password5'),('WilliamClark','password10');
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

-- Dump completed on 2024-06-05 20:20:43
