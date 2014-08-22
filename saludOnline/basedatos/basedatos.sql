CREATE DATABASE  IF NOT EXISTS `proyecto` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `proyecto`;
-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: proyecto
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.14.04.1

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
-- Table structure for table `consultamedica`
--

DROP TABLE IF EXISTS `consultamedica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consultamedica` (
  `codconsultamedica` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `observaciones` text,
  `medico` int(11) DEFAULT NULL,
  `tratamiento` int(11) DEFAULT '0',
  `historiaclinica` int(11) DEFAULT NULL,
  PRIMARY KEY (`codconsultamedica`),
  KEY `fk_consulta_medica_1_idx` (`tratamiento`),
  KEY `fk_consultamedica_2_idx` (`historiaclinica`),
  KEY `fk_consultamedica_idx` (`medico`),
  CONSTRAINT `fk_consultamedica` FOREIGN KEY (`medico`) REFERENCES `medico` (`codmedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_consultamedica_2` FOREIGN KEY (`historiaclinica`) REFERENCES `historiaclinica` (`codhistoriaclinica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_consulta_medica_1` FOREIGN KEY (`tratamiento`) REFERENCES `tratamiento` (`cod_tratamiento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultamedica`
--

LOCK TABLES `consultamedica` WRITE;
/*!40000 ALTER TABLE `consultamedica` DISABLE KEYS */;
/*!40000 ALTER TABLE `consultamedica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especialidad`
--

DROP TABLE IF EXISTS `especialidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `especialidad` (
  `codespecialidad` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codespecialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especialidad`
--

LOCK TABLES `especialidad` WRITE;
/*!40000 ALTER TABLE `especialidad` DISABLE KEYS */;
INSERT INTO `especialidad` VALUES (1,'odontologo'),(2,'ginecologo'),(3,'pediatria'),(4,'general'),(5,'xxxx');
/*!40000 ALTER TABLE `especialidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historiaclinica`
--

DROP TABLE IF EXISTS `historiaclinica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historiaclinica` (
  `codhistoriaclinica` int(11) NOT NULL,
  `paciente` int(11) DEFAULT NULL,
  `codtratamiento` int(11) DEFAULT NULL,
  PRIMARY KEY (`codhistoriaclinica`),
  KEY `fk_historiaclinica_1_idx` (`paciente`),
  CONSTRAINT `fk_historiaclinica_1` FOREIGN KEY (`paciente`) REFERENCES `paciente` (`codpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historiaclinica`
--

LOCK TABLES `historiaclinica` WRITE;
/*!40000 ALTER TABLE `historiaclinica` DISABLE KEYS */;
/*!40000 ALTER TABLE `historiaclinica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horarioatencion`
--

DROP TABLE IF EXISTS `horarioatencion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horarioatencion` (
  `codhorario` int(11) NOT NULL,
  `horainicio` time DEFAULT NULL,
  `horafin` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`codhorario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horarioatencion`
--

LOCK TABLES `horarioatencion` WRITE;
/*!40000 ALTER TABLE `horarioatencion` DISABLE KEYS */;
/*!40000 ALTER TABLE `horarioatencion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medico`
--

DROP TABLE IF EXISTS `medico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medico` (
  `codmedico` int(11) NOT NULL,
  `persona` int(11) DEFAULT NULL,
  `especialidad` int(11) DEFAULT NULL,
  `horario` int(11) DEFAULT NULL,
  `registro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codmedico`),
  KEY `fk_medico_1_idx` (`persona`),
  KEY `fk_medico_2_idx` (`especialidad`),
  KEY `fk_medico_3_idx` (`horario`),
  CONSTRAINT `fk_medico_1` FOREIGN KEY (`persona`) REFERENCES `persona` (`codpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_medico_2` FOREIGN KEY (`especialidad`) REFERENCES `especialidad` (`codespecialidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_medico_3` FOREIGN KEY (`horario`) REFERENCES `horarioatencion` (`codhorario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medico`
--

LOCK TABLES `medico` WRITE;
/*!40000 ALTER TABLE `medico` DISABLE KEYS */;
/*!40000 ALTER TABLE `medico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `codpaciente` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incremento id de cada paciente, indice unico',
  `persona` int(11) DEFAULT NULL,
  `email` varchar(64) NOT NULL COMMENT 'email del paciente, unico',
  `usuarioid` varchar(64) NOT NULL COMMENT 'nombre del usuario, unico',
  `clavehash` varchar(255) NOT NULL COMMENT 'clave del usuario con algoritmo hash',
  PRIMARY KEY (`codpaciente`),
  UNIQUE KEY `usuarioid` (`usuarioid`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_paciente_1_idx` (`persona`),
  CONSTRAINT `fk_paciente_1` FOREIGN KEY (`persona`) REFERENCES `persona` (`codpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (1,1,'o+','jamp91','jamp3212'),(2,2,'a+','xxx','xxx'),(50,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `codpersona` int(11) NOT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `fechanac` datetime DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `direccion` text,
  `telefono` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codpersona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,'xxx',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'zxxqw','qweqwe','f',NULL,NULL,NULL,NULL,NULL),(50,'xxx23',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tratamiento`
--

DROP TABLE IF EXISTS `tratamiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tratamiento` (
  `cod_tratamiento` int(11) NOT NULL,
  `autorizacion` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `receta` text,
  `comentario` text,
  PRIMARY KEY (`cod_tratamiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tratamiento`
--

LOCK TABLES `tratamiento` WRITE;
/*!40000 ALTER TABLE `tratamiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tratamiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `codusuario` int(11) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `persona` int(11) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `passw` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codusuario`),
  KEY `fk_usuario_1_idx` (`persona`),
  CONSTRAINT `fk_usuario_1` FOREIGN KEY (`persona`) REFERENCES `persona` (`codpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'3212','1',1,'jamp91','jamp3212');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-07  9:53:41
