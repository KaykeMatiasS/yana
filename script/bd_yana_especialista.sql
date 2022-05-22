-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_yana
-- ------------------------------------------------------
-- Server version	5.5.28-log

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
-- Table structure for table `especialista`
--

DROP TABLE IF EXISTS `especialista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `especialista` (
  `ID_Esp` int(11) NOT NULL AUTO_INCREMENT,
  `CNPJ_Clinica` varchar(18) DEFAULT NULL,
  `CPF_Esp` varchar(14) NOT NULL,
  `Nome_Esp` varchar(100) NOT NULL,
  `Nome_Social_Esp` varchar(50) DEFAULT NULL,
  `Genero_Esp` varchar(25) NOT NULL,
  `Idade_Esp` int(2) NOT NULL,
  `Email_Esp` varchar(100) NOT NULL,
  `Senha_Esp` varchar(50) NOT NULL,
  `Contato_Esp` varchar(100) NOT NULL,
  `Instituicao` varchar(80) NOT NULL,
  `Formacao_Academica` varchar(50) NOT NULL,
  `Biografia_Esp` text NOT NULL,
  PRIMARY KEY (`ID_Esp`),
  UNIQUE KEY `UQ_CPF_Esp` (`CPF_Esp`),
  UNIQUE KEY `UQ_Contato_Esp` (`Contato_Esp`),
  UNIQUE KEY `UQ_Email_Esp` (`Email_Esp`),
  UNIQUE KEY `UQ_Senha_Esp` (`Senha_Esp`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especialista`
--

LOCK TABLES `especialista` WRITE;
/*!40000 ALTER TABLE `especialista` DISABLE KEYS */;
INSERT INTO `especialista` VALUES (7,NULL,'222.222.222-22','aaaa','aaaaa','Feminino',10,'a@gmail.com','34324234324','999999999','unicid','a','weqwe'),(9,NULL,'233.433.233-22','aaaaaa','aaaaaaaa','Outros',10,'aaaaaaa@ddfsasdffds','43432432423','322323232','unicid','a','23232323'),(10,NULL,'263.433.233-22','aaaaaa','','Outros',10,'aa@gmail.com','34342343243','34324324234323','unicid','a','32432'),(12,NULL,'233.433.239-22','aaaaaa','aaaaaaaa','Feminino',11,'aaa@gmail.com','5435342343','2342343423','unicid','a',''),(13,NULL,'233.403.233-22','aaaaaa','aaaaa','Feminino',10,'aaaa@gmail.com','34234432343','32423423423','unicid','a',''),(14,NULL,'222.222.202-22','aaaaaa','aaaaa','Feminino',10,'aaaaa@gmail.com','34234234234243','343242432432','unicid','a',''),(15,NULL,'222.222.222-20','leozinho','aaaaa','Feminino',10,'leo@gmail.com','3q3432423423','32423432422','unicid','a',''),(16,NULL,'111.111.111-11','Leofinal','','Masculino',10,'leoFInal@aa.com','42342342432','343243243243','unicid','a','');
/*!40000 ALTER TABLE `especialista` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-30 19:31:26
