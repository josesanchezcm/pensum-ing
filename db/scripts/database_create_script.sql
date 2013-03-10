CREATE DATABASE  IF NOT EXISTS `pensum_ingenieria` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pensum_ingenieria`;
-- MySQL dump 10.13  Distrib 5.5.29, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: pensum_ingenieria
-- ------------------------------------------------------
-- Server version	5.5.29-1

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
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `material` (
  `material_id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_publicacion` datetime NOT NULL,
  `autor_id` int(11) DEFAULT NULL,
  `fuente_id` int(11) DEFAULT NULL,
  `tipo_material_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`material_id`),
  KEY `fk_material_1` (`autor_id`),
  KEY `fk_material_2` (`fuente_id`),
  KEY `fk_material_3` (`tipo_material_id`),
  CONSTRAINT `fk_material_1` FOREIGN KEY (`autor_id`) REFERENCES `autor` (`autor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_material_2` FOREIGN KEY (`fuente_id`) REFERENCES `fuente` (`fuente_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_material_3` FOREIGN KEY (`tipo_material_id`) REFERENCES `tipo_material` (`tipo_material_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material`
--

LOCK TABLES `material` WRITE;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
/*!40000 ALTER TABLE `material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagen`
--

DROP TABLE IF EXISTS `imagen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagen` (
  `imagen_id` int(11) NOT NULL,
  `imagen_url` varchar(150) NOT NULL,
  `material_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`imagen_id`),
  KEY `fk_imagen_1` (`material_id`),
  CONSTRAINT `fk_imagen_1` FOREIGN KEY (`material_id`) REFERENCES `material` (`material_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagen`
--

LOCK TABLES `imagen` WRITE;
/*!40000 ALTER TABLE `imagen` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Area`
--

DROP TABLE IF EXISTS `Area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Area` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_area` varchar(45) NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Area`
--

LOCK TABLES `Area` WRITE;
/*!40000 ALTER TABLE `Area` DISABLE KEYS */;
/*!40000 ALTER TABLE `Area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso` (
  `curso_id` int(11) NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `curso_nombre` varchar(45) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `curso_prerrequisito_id` int(11) DEFAULT NULL,
  `curso_postrequisito_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`curso_id`),
  KEY `curso_prerrequisito_id` (`curso_prerrequisito_id`),
  KEY `curso_postrequisito_id` (`curso_postrequisito_id`),
  CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`curso_prerrequisito_id`) REFERENCES `curso` (`curso_id`),
  CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`curso_postrequisito_id`) REFERENCES `curso` (`curso_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posgrado_has_carrera`
--

DROP TABLE IF EXISTS `posgrado_has_carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posgrado_has_carrera` (
  `posgrado_has_carrera_id` int(11) NOT NULL,
  `carrera_id` int(11) NOT NULL,
  `posgrado_id` int(11) NOT NULL,
  PRIMARY KEY (`posgrado_has_carrera_id`),
  KEY `fk_posgrado_has_carrera_1` (`carrera_id`),
  KEY `fk_posgrado_has_carrera_2` (`posgrado_id`),
  CONSTRAINT `fk_posgrado_has_carrera_1` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`carrera_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_posgrado_has_carrera_2` FOREIGN KEY (`posgrado_id`) REFERENCES `posgrado` (`posgrado_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posgrado_has_carrera`
--

LOCK TABLES `posgrado_has_carrera` WRITE;
/*!40000 ALTER TABLE `posgrado_has_carrera` DISABLE KEYS */;
/*!40000 ALTER TABLE `posgrado_has_carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrera_has_curso`
--

DROP TABLE IF EXISTS `carrera_has_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera_has_curso` (
  `carrera_has_curso_id` int(11) NOT NULL AUTO_INCREMENT,
  `carrera_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  PRIMARY KEY (`carrera_has_curso_id`),
  KEY `fk_carrera_has_curso_1` (`curso_id`),
  KEY `fk_carrera_has_curso_2` (`carrera_id`),
  CONSTRAINT `fk_carrera_has_curso_1` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`curso_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_carrera_has_curso_2` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`carrera_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrera_has_curso`
--

LOCK TABLES `carrera_has_curso` WRITE;
/*!40000 ALTER TABLE `carrera_has_curso` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrera_has_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `autor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autor` (
  `autor_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_autor` varchar(100) NOT NULL,
  `apellido_autor` varchar(100) NOT NULL,
  PRIMARY KEY (`autor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autor`
--

LOCK TABLES `autor` WRITE;
/*!40000 ALTER TABLE `autor` DISABLE KEYS */;
/*!40000 ALTER TABLE `autor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `area_has_escuela`
--

DROP TABLE IF EXISTS `area_has_escuela`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `area_has_escuela` (
  `area_has_escuela_id` int(11) NOT NULL AUTO_INCREMENT,
  `escuela_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  PRIMARY KEY (`area_has_escuela_id`),
  KEY `fk_area_has_escuela_1` (`area_id`),
  KEY `fk_area_has_escuela_2` (`escuela_id`),
  CONSTRAINT `fk_area_has_escuela_1` FOREIGN KEY (`area_id`) REFERENCES `Area` (`area_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_area_has_escuela_2` FOREIGN KEY (`escuela_id`) REFERENCES `escuela` (`escuela_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area_has_escuela`
--

LOCK TABLES `area_has_escuela` WRITE;
/*!40000 ALTER TABLE `area_has_escuela` DISABLE KEYS */;
/*!40000 ALTER TABLE `area_has_escuela` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fuente`
--

DROP TABLE IF EXISTS `fuente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fuente` (
  `fuente_id` int(11) NOT NULL AUTO_INCREMENT,
  `fuente_nombre` varchar(45) DEFAULT NULL,
  `fuente_url` varchar(150) NOT NULL,
  PRIMARY KEY (`fuente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fuente`
--

LOCK TABLES `fuente` WRITE;
/*!40000 ALTER TABLE `fuente` DISABLE KEYS */;
/*!40000 ALTER TABLE `fuente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrera`
--

DROP TABLE IF EXISTS `carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera` (
  `carrera_id` int(11) NOT NULL AUTO_INCREMENT,
  `carrera_nombre` varchar(45) NOT NULL,
  `pensum_url` varchar(150) NOT NULL,
  `escuela_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`carrera_id`),
  KEY `fk_carrera_1` (`escuela_id`),
  CONSTRAINT `fk_carrera_1` FOREIGN KEY (`escuela_id`) REFERENCES `escuela` (`escuela_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `carne` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_has_curso`
--

DROP TABLE IF EXISTS `usuario_has_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_has_curso` (
  `usuario_has_curso_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  PRIMARY KEY (`usuario_has_curso_id`),
  KEY `fk_usuario_has_curso_1` (`usuario_id`),
  KEY `fk_usuario_has_curso_2` (`curso_id`),
  CONSTRAINT `fk_usuario_has_curso_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_curso_2` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`curso_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_has_curso`
--

LOCK TABLES `usuario_has_curso` WRITE;
/*!40000 ALTER TABLE `usuario_has_curso` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_has_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_material`
--

DROP TABLE IF EXISTS `tipo_material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_material` (
  `tipo_material_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_nombre` enum('EJEMPLO','LIBRO') NOT NULL,
  PRIMARY KEY (`tipo_material_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_material`
--

LOCK TABLES `tipo_material` WRITE;
/*!40000 ALTER TABLE `tipo_material` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posgrado`
--

DROP TABLE IF EXISTS `posgrado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posgrado` (
  `posgrado_id` int(11) NOT NULL AUTO_INCREMENT,
  `posgrado_nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`posgrado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posgrado`
--

LOCK TABLES `posgrado` WRITE;
/*!40000 ALTER TABLE `posgrado` DISABLE KEYS */;
/*!40000 ALTER TABLE `posgrado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `escuela`
--

DROP TABLE IF EXISTS `escuela`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `escuela` (
  `escuela_id` int(11) NOT NULL AUTO_INCREMENT,
  `escuela_nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`escuela_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escuela`
--

LOCK TABLES `escuela` WRITE;
/*!40000 ALTER TABLE `escuela` DISABLE KEYS */;
/*!40000 ALTER TABLE `escuela` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-03-10  0:16:29
