-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: db_journey
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_indicador`
--

DROP TABLE IF EXISTS `tb_indicador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_indicador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `id_uc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_indicadores_tb_uc_FK` (`id_uc`),
  CONSTRAINT `tb_indicadores_tb_uc_FK` FOREIGN KEY (`id_uc`) REFERENCES `tb_uc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_indicador`
--

LOCK TABLES `tb_indicador` WRITE;
/*!40000 ALTER TABLE `tb_indicador` DISABLE KEYS */;
INSERT INTO `tb_indicador` VALUES (1,'Planeja e organiza a utilização dos recursos conforme as necessidades da demanda do ',3),(2,'Realiza as etapas do processo de segurança e restauração (backup erestore) dos dados ',3),(3,'Verifica o funcionamento do hardware, utilizando ferramentas e técnicas para ',3),(4,'Verifica o funcionamento do software, utilizando técnicas para diagnóstico de falhas, ',3),(5,'Verifica e corrige problemas físicos, lógicos e de conectividade de acordo com as ',3),(6,'Instala os pacotes de atualização do sistema operacional corrigindo falhas, assegurando ',3),(7,'Testa o funcionamento do computador, dos periféricos e a conectividade da rede por ',3),(8,'Constrói diagramas de dados aferindo a modelagem e estrutura do banco de dados, de ',8),(9,'Realiza a instalação e configuração de sistema gerenciador de banco de dados (SGBD), ',8),(10,'Elabora scripts SQL de construção, inserção e manipulação dos dados conforme ',8),(11,'Realiza importação e exportação de dados, conforme regras do sistema gerenciador de ',8),(12,'Planeja rotinas de backup erestore da base de dados, conforme especificações técnicas ',8);
/*!40000 ALTER TABLE `tb_indicador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_uc`
--

DROP TABLE IF EXISTS `tb_uc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_uc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_uc`
--

LOCK TABLES `tb_uc` WRITE;
/*!40000 ALTER TABLE `tb_uc` DISABLE KEYS */;
INSERT INTO `tb_uc` VALUES (1,'UC1:  Planejar e executar a montagem de computadores.'),(2,'UC2:  Planejar e executar a instalação de hardware e software '),(3,'UC3:  Planejar e executar a manutenção de computadores. '),(4,'UC5:  Planejar e executar a instalação de redes locais de '),(5,'UC6:  Planejar e executar a manutenção de redes locais de '),(6,'UC7:  Planejar e executar a instalação, a configuração e o '),(7,'UC9:  Desenvolver Algoritmos.'),(8,'UC10:  Desenvolver banco de dados.'),(9,'UC11:  Executar teste e implantação de aplicativos computacionais. '),(10,'UC12:  Executar os processos de codificação, manutenção e '),(11,'UC13:  Executar os processos de codificação, manutenção e '),(12,'UC14:  Manipular e otimizar imagens vetoriais, bitmaps gráficos e '),(13,'UC15: Desenvolver e organizar elementos estruturais de sites.');
/*!40000 ALTER TABLE `tb_uc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_journey'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-09 23:07:10
