-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: db_pixel
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `pixel`
--

DROP TABLE IF EXISTS `pixel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pixel` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `agente` varchar(30) NOT NULL,
  `mapa` varchar(30) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `mapa_img` varchar(70) NOT NULL,
  `agente_img` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pixel`
--

LOCK TABLES `pixel` WRITE;
/*!40000 ALTER TABLE `pixel` DISABLE KEYS */;
INSERT INTO `pixel` VALUES (32,'Killjoy','Ascent','Ult retake na A da Ascent','633ae352ca3af.html','icones/Ascent.png','icones/Killjoy.png'),(33,'Viper','Breeze','Orbe de Veneno no janelão','633ae399edfcf.html','icones/Breeze.png','icones/Viper.png'),(34,'Raze','Bind','Pulo no Aladim pra fazer o entry','633ae3eb5d6c6.html','icones/Bind.png','icones/Raze.png'),(35,'Fade','Haven','Spot A jogando da B','633ae45755fc7.html','icones/Haven.png','icones/Fade.png'),(36,'Viper','Pearl','One-way na DD','633ae48fc9fc9.html','icones/Pearl.png','icones/Viper.png'),(37,'Brimstone','Bind','tocando uma moly no caminhão','633ae4d8c4835.html','icones/Bind.png','icones/Brimstone.png'),(38,'Brimstone','Bind','tocando uma moly no defuse da B','633ae5224ffab.html','icones/Bind.png','icones/Brimstone.png'),(39,'Kayo','Icebox','Faca no Amarelo','633ae595e14fa.html','icones/Icebox.png','icones/Kayo.png'),(40,'Sage','Icebox','Parede para um pick diferenciado no camarote','633ae89785e49.html','icones/Icebox.png','icones/Sage.png'),(41,'Fade','Pearl','Setup para fazer um entry no bomb B','633aea1c2903d.html','icones/Pearl.png','icones/Fade.png'),(42,'Jett','Icebox','Pulos de para pegar picks com a ult','633aeb7a5bf65.html','icones/Icebox.png','icones/Jett.png'),(53,'Sova','Fracture','Spot B','63580a9685522.html','icones/Fracture.png','icones/Sova.png');
/*!40000 ALTER TABLE `pixel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_pixel'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-25 13:21:20
