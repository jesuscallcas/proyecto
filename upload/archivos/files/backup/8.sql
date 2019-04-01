-- MySQL dump 10.13  Distrib 5.5.27, for Win32 (x86)
--
-- Host: localhost    Database: bella
-- ------------------------------------------------------
-- Server version	5.5.27

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
-- Table structure for table `academico`
--

DROP TABLE IF EXISTS `academico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `academico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estudiante` int(11) NOT NULL,
  `periodo` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `observacion` text COLLATE utf8_spanish_ci NOT NULL,
  `tipoobs` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `academico`
--

LOCK TABLES `academico` WRITE;
/*!40000 ALTER TABLE `academico` DISABLE KEYS */;
/*!40000 ALTER TABLE `academico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `academico_sexto_a_am_2013`
--

DROP TABLE IF EXISTS `academico_sexto_a_am_2013`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `academico_sexto_a_am_2013` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estudiante` int(11) NOT NULL,
  `periodo` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `observacion` text COLLATE utf8_spanish_ci NOT NULL,
  `tipoobs` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `academico_sexto_a_am_2013`
--

LOCK TABLES `academico_sexto_a_am_2013` WRITE;
/*!40000 ALTER TABLE `academico_sexto_a_am_2013` DISABLE KEYS */;
INSERT INTO `academico_sexto_a_am_2013` VALUES (26,123457051,'2','Segundo periodo Nucleo ComÃºn','NC'),(25,123457051,'1','Primer periodo Nucleo ComÃºn','NC'),(27,123457051,'3','Tercer periodo Nucleo ComÃºn','NC'),(28,123457051,'4','Cuarto periodo Nucleo ComÃºn','NC'),(29,123457051,'1','Primer periodo Especialidad y/o Media TÃ©cnica','EP'),(30,123457051,'2','Segundo periodo Especialidad y/o Media TÃ©cnica','EP'),(31,123457051,'3','Tercer periodo Especialidad y/o Media TÃ©cnica','EP'),(32,123457051,'4','Cuarto periodo Especialidad y/o Media TÃ©cnica','EP');
/*!40000 ALTER TABLE `academico_sexto_a_am_2013` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ajustes_instalacion`
--

DROP TABLE IF EXISTS `ajustes_instalacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ajustes_instalacion` (
  `idajuste` int(11) NOT NULL AUTO_INCREMENT,
  `servidor` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombredb` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `usuariodb` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `passdb` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `anio_lectivo` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `periodos` int(1) NOT NULL,
  `nom_escuela` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idajuste`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ajustes_instalacion`
--

LOCK TABLES `ajustes_instalacion` WRITE;
/*!40000 ALTER TABLE `ajustes_instalacion` DISABLE KEYS */;
INSERT INTO `ajustes_instalacion` VALUES (1,'localhost','bella','root','joe_rj45','2013',3,'I.E. JosÃ© Manuel RodrÃ­guez Torices - INEM');
/*!40000 ALTER TABLE `ajustes_instalacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asignatura`
--

DROP TABLE IF EXISTS `asignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignatura` (
  `idasignatura` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idasignatura`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignatura`
--

LOCK TABLES `asignatura` WRITE;
/*!40000 ALTER TABLE `asignatura` DISABLE KEYS */;
INSERT INTO `asignatura` VALUES (33,'Matematicas','Nucleo Comun'),(34,'Ciencias Sociales','Nucleo Comun'),(35,'Tecnologia e Informatica','Nucleo Comun'),(36,'Ciencias Naturales','Nucleo Comun'),(37,'Fisica','Nucleo Comun'),(39,'Filosofia','Nucleo Comun'),(40,'Etica','Nucleo Comun'),(41,'Religion','Nucleo Comun'),(42,'Artistica','Nucleo Comun'),(45,'Castellano','Nucleo Comun'),(46,'Frances','Nucleo Comun'),(50,'Mecanica Automotriz','Especialidad y/o Media Tecnica..'),(51,'Contabilidad','Especialidad y/o Media Tecnica'),(52,'Patrimonio Cultural y Turismo','Especialidad y/o Media Tecnica'),(54,'Comercial','Especialidad y/o Media Tecnica'),(55,'Quimica','NÃºcleo ComÃºn');
/*!40000 ALTER TABLE `asignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casos_estudio`
--

DROP TABLE IF EXISTS `casos_estudio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casos_estudio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idrem` int(11) NOT NULL,
  `idest` int(11) NOT NULL,
  `creadopor` varchar(200) NOT NULL,
  `creado` varchar(20) NOT NULL,
  `observacion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casos_estudio`
--

LOCK TABLES `casos_estudio` WRITE;
/*!40000 ALTER TABLE `casos_estudio` DISABLE KEYS */;
/*!40000 ALTER TABLE `casos_estudio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `control_disciplinario`
--

DROP TABLE IF EXISTS `control_disciplinario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `control_disciplinario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estudiante` int(11) NOT NULL,
  `curso` int(11) NOT NULL,
  `fecha` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `soporte` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `control_disciplinario`
--

LOCK TABLES `control_disciplinario` WRITE;
/*!40000 ALTER TABLE `control_disciplinario` DISABLE KEYS */;
INSERT INTO `control_disciplinario` VALUES (35,123457053,89,'01/09/2013','prueba','backup.jpg'),(34,123457052,83,'04/09/2013','prueba','backup.jpg'),(31,123457051,83,'02/10/2013','Prueba2','bDRslhakApc3rq09W8P67yBmZ.jpg'),(33,123457051,83,'01/10/2013','Prueba1','bK6U0m3EYwpkHB7CGV2AsqFyP.png'),(36,123457054,88,'30/09/2013','prueba','backup.jpg');
/*!40000 ALTER TABLE `control_disciplinario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `convivencia`
--

DROP TABLE IF EXISTS `convivencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `convivencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idjuicio` int(11) NOT NULL,
  `estudiante` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convivencia`
--

LOCK TABLES `convivencia` WRITE;
/*!40000 ALTER TABLE `convivencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `convivencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `convivencia_sexto_a_am_2013`
--

DROP TABLE IF EXISTS `convivencia_sexto_a_am_2013`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `convivencia_sexto_a_am_2013` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idjuicio` int(11) NOT NULL,
  `estudiante` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convivencia_sexto_a_am_2013`
--

LOCK TABLES `convivencia_sexto_a_am_2013` WRITE;
/*!40000 ALTER TABLE `convivencia_sexto_a_am_2013` DISABLE KEYS */;
INSERT INTO `convivencia_sexto_a_am_2013` VALUES (13,58,123457051),(12,55,123457051),(11,53,123457051);
/*!40000 ALTER TABLE `convivencia_sexto_a_am_2013` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `correctivos`
--

DROP TABLE IF EXISTS `correctivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `correctivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idjuicio` int(11) NOT NULL,
  `estudiante` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correctivos`
--

LOCK TABLES `correctivos` WRITE;
/*!40000 ALTER TABLE `correctivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `correctivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `correctivos_sexto_a_am_2013`
--

DROP TABLE IF EXISTS `correctivos_sexto_a_am_2013`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `correctivos_sexto_a_am_2013` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idjuicio` int(11) NOT NULL,
  `estudiante` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correctivos_sexto_a_am_2013`
--

LOCK TABLES `correctivos_sexto_a_am_2013` WRITE;
/*!40000 ALTER TABLE `correctivos_sexto_a_am_2013` DISABLE KEYS */;
INSERT INTO `correctivos_sexto_a_am_2013` VALUES (5,78,123457051);
/*!40000 ALTER TABLE `correctivos_sexto_a_am_2013` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `idcurso` int(11) NOT NULL AUTO_INCREMENT,
  `grado` int(11) NOT NULL,
  `seccion` int(11) NOT NULL,
  `dirgrupo` int(11) NOT NULL,
  `coordinador` int(11) NOT NULL,
  `tsocial` int(11) NOT NULL,
  `jornada` int(11) NOT NULL,
  PRIMARY KEY (`idcurso`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (83,6,0,32,24,29,1);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entrevistas_pa`
--

DROP TABLE IF EXISTS `entrevistas_pa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entrevistas_pa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estudiante` int(11) NOT NULL,
  `curso` int(11) NOT NULL,
  `fecha` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `situacion` text COLLATE utf8_spanish_ci NOT NULL,
  `compromiso` text COLLATE utf8_spanish_ci NOT NULL,
  `soporte` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrevistas_pa`
--

LOCK TABLES `entrevistas_pa` WRITE;
/*!40000 ALTER TABLE `entrevistas_pa` DISABLE KEYS */;
/*!40000 ALTER TABLE `entrevistas_pa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estimulos`
--

DROP TABLE IF EXISTS `estimulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estimulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idjuicio` int(11) NOT NULL,
  `estudiante` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estimulos`
--

LOCK TABLES `estimulos` WRITE;
/*!40000 ALTER TABLE `estimulos` DISABLE KEYS */;
/*!40000 ALTER TABLE `estimulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estimulos_sexto_a_am_2013`
--

DROP TABLE IF EXISTS `estimulos_sexto_a_am_2013`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estimulos_sexto_a_am_2013` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idjuicio` int(11) NOT NULL,
  `estudiante` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estimulos_sexto_a_am_2013`
--

LOCK TABLES `estimulos_sexto_a_am_2013` WRITE;
/*!40000 ALTER TABLE `estimulos_sexto_a_am_2013` DISABLE KEYS */;
INSERT INTO `estimulos_sexto_a_am_2013` VALUES (16,69,123457051),(15,68,123457051),(14,67,123457051),(13,66,123457051),(12,65,123457051);
/*!40000 ALTER TABLE `estimulos_sexto_a_am_2013` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiante` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tipoidentificacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `identificacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombres_apellidos` varchar(200) CHARACTER SET utf8 NOT NULL,
  `lugnacimiento` varchar(30) CHARACTER SET utf8 NOT NULL,
  `genero` varchar(15) CHARACTER SET utf8 NOT NULL,
  `fechanac` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `edad` varchar(10) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `direccion` varchar(200) CHARACTER SET utf8 NOT NULL,
  `telefono` int(15) NOT NULL,
  `grado` int(11) NOT NULL,
  `seccion` int(11) NOT NULL,
  `jornada` varchar(20) CHARACTER SET utf8 NOT NULL,
  `sangre` varchar(5) CHARACTER SET utf8 NOT NULL,
  `padre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ocupacionpadre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `telpadre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `madre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ocupacionmadre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `acudiente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ocupaacu` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telacu` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `telmadre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `mailacu` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `vivepadres` int(2) NOT NULL,
  `vivecon` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `tipoest` int(2) NOT NULL,
  `ieanterior` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'unknown.png',
  `creado` varchar(25) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=123457055 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiante`
--

LOCK TABLES `estudiante` WRITE;
/*!40000 ALTER TABLE `estudiante` DISABLE KEYS */;
INSERT INTO `estudiante` VALUES (123457051,'2','124566579965','Maria del Pilar Bolivar Paternina','Cartagena','1','07/15/1999','14 aÃ±o(s)','maria@gmail.com','Los Corales',6454578,6,0,'1','B+','Roberto Bolivar Jimenez','AlbaÃ±il','3004578954','Maria Concepcion Paternina Gomez','Cajera','Roberto Bolivar Jimenez','AlbaÃ±il','3004578954','3004785468','rbolivar@gmail.com',3,'Seleccionar...',1,'Isabel La Catolica','124566579965.jpeg','09/08/2013'),(123457052,'3','73148877','Leonardo Reyes Hernandes','Cartagena','2','01/10/1982','31 aÃ±o(s)','lreyes@hotmail.com','Socorro Mz 10 Lt 21 Plan 220',6457845,6,0,'1','B+','Nombre del Padre','Docente Primaria','6456458','Nombre de la Madre','Docente Primaria','Jose Ramos','Acudiente','6456458','6456458','joe_rj45@yahoo.com',3,'Seleccionar...',2,'CASD - Manuela Beltran','unknown.png','14/11/2012');
/*!40000 ALTER TABLE `estudiante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intentos_login`
--

DROP TABLE IF EXISTS `intentos_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intentos_login` (
  `ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `intentos` int(1) NOT NULL,
  `maximo_intentos` int(1) NOT NULL DEFAULT '3',
  `ultimo_fallo` int(11) NOT NULL,
  `conectado` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `idusuario` int(25) NOT NULL,
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intentos_login`
--

LOCK TABLES `intentos_login` WRITE;
/*!40000 ALTER TABLE `intentos_login` DISABLE KEYS */;
INSERT INTO `intentos_login` VALUES ('127.0.0.1',0,3,1383150419,'No',73185762),('::1',0,3,1389241580,'Si',73185762);
/*!40000 ALTER TABLE `intentos_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jqcalendar`
--

DROP TABLE IF EXISTS `jqcalendar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jqcalendar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(1000) DEFAULT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `StartTime` datetime DEFAULT NULL,
  `EndTime` datetime DEFAULT NULL,
  `IsAllDayEvent` smallint(6) NOT NULL,
  `Color` varchar(200) DEFAULT NULL,
  `RecurringRule` varchar(500) DEFAULT NULL,
  `creado` datetime NOT NULL,
  `creadopor` varchar(200) NOT NULL,
  `editado` datetime NOT NULL,
  `editadopor` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jqcalendar`
--

LOCK TABLES `jqcalendar` WRITE;
/*!40000 ALTER TABLE `jqcalendar` DISABLE KEYS */;
INSERT INTO `jqcalendar` VALUES (38,'Prueba',NULL,NULL,'2013-10-24 00:00:00','2013-10-24 00:00:00',1,NULL,NULL,'2013-10-13 13:59:10','Juan Carlos Tuiran Garcia','2013-10-24 14:09:15','Jose D. Ramos Garces'),(39,'ReuniÃ³n',NULL,NULL,'2013-10-24 16:00:00','2013-10-24 17:00:00',0,NULL,NULL,'2013-10-18 15:32:54','Jose D. Ramos Garces','2013-10-24 14:09:13','Jose D. Ramos Garces'),(40,'hola','','hola','2013-12-20 16:00:00','2013-12-21 17:00:00',0,'1',NULL,'2013-12-01 11:31:54','Jose D. Ramos Garces','2013-12-20 15:41:16','Jose D. Ramos Garces');
/*!40000 ALTER TABLE `jqcalendar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juicios`
--

DROP TABLE IF EXISTS `juicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `juicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desempeno` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `juicio` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `creado_por` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_edicion` date NOT NULL,
  `editado_por` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juicios`
--

LOCK TABLES `juicios` WRITE;
/*!40000 ALTER TABLE `juicios` DISABLE KEYS */;
INSERT INTO `juicios` VALUES (53,'Convivencia Social','Asiste puntualmente a clases','Convivencia Social','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(54,'Convivencia Social','Porta correctamente el uniforme','Convivencia Social','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(55,'Convivencia Social','Acata las ordenes de sus superiores y amigos','Convivencia Social','2013-02-04','Jose D. Ramos Garces','2013-02-21','Jose D. Ramos Garces'),(56,'Convivencia Social','Posee los elementos de trabajo necesarios en clase','Convivencia Social','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(57,'Convivencia Social','Es amable con sus compaÃ±eros y demÃ¡s personas de la instituciÃ³n','Convivencia Social','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(58,'Convivencia Social','Hace peticiones de forma respetuosa','Convivencia Social','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(59,'Convivencia Social','Invita al diÃ¡logo y a la concertaciÃ³n','Convivencia Social','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(60,'Convivencia Social','Acepta sus errores y trata de enmendarlos','Convivencia Social','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(61,'Convivencia Social','Cumple con los acuerdos pactados en el aula y fuera de esta','Convivencia Social','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(62,'Convivencia Social','Goza de buena aceptaciÃ³n entre sus compaÃ±eros','Convivencia Social','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(63,'Convivencia Social','Se destaca por su gran sentido de solidaridad','Convivencia Social','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(64,'Convivencia Social','Posee liderazgo entre sus compaÃ±eros','Convivencia Social','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(65,'Estimulos','Fue proclamado entre los diez (10) mejores estudiantes del curso','Estimulos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(66,'Estimulos','RecibiÃ³ disticiÃ³n deportiva','Estimulos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(67,'Estimulos','Fue condecorado en izada de bandera','Estimulos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(68,'Estimulos','Fue seleccionad@ para asistir a eventos en otras instituciones','Estimulos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(69,'Estimulos','Algunos docentes reconocen su desempeÃ±o integral','Estimulos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(70,'Estimulos','Fue elegido como representante del curso','Estimulos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(71,'Estimulos','Hace parte de la junta directiva del consejo estudiantil','Estimulos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(72,'Estimulos','Es integrante de un club deportivo, banda de paz, orquesta o conjunto musical','Estimulos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(73,'Estimulos','Hace las veces de monitor del curso','Estimulos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(74,'Estimulos','Frecuentemente se le asignan tareas y misiones especiales','Estimulos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(75,'Correctivos','En una o varias ocaciones fue retirad@ del aula de clases','Correctivos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(76,'Correctivos','Fue suspendid@ del colegio por uno (1) o mÃ¡s dÃ­as','Correctivos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(77,'Correctivos','Fue remitid@ a Bienestar Estudiantil por problemas de convivencia y/o bajo rendimiento acadÃ©mico','Correctivos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(78,'Correctivos','En varias ocaciones se le ha llamado la atenciÃ³n por problemas disciplinarios','Correctivos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(79,'Correctivos','Ha recibido asesorÃ­a constante del Director de Grupo y/o Coordinador','Correctivos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(80,'Correctivos','Se ha entrevistado una (1) o mÃ¡s veces con el Coordinador por bajo rendimiento acadÃ©mico','Correctivos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(81,'Correctivos','Se le ha sitado al acudiente una (1) o mÃ¡s veces para firmar compromiso acadÃ©mico y/o disciplinario','Correctivos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(82,'Correctivos','Ha recibido sanciones formativas por sugerencia del Director de Grupo u otro docente','Correctivos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(83,'Correctivos','Se le realizo visita domiciliaria por problemÃ¡tica familiar','Correctivos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(84,'Correctivos','FirmÃ³ matrÃ­cula de Ãºltima oportunidad en presencia de su acudiente','Correctivos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(85,'Correctivos','Se le sugiriÃ³ cambio de ambiente escolar por bajo rendimiento acadÃ©mico o por mal comportamiento','Correctivos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces'),(86,'Correctivos','Por ser repitente durante dos (2) aÃ±os consecutivos, no es acetad@ en la instituciÃ³n','Correctivos','2013-02-04','Jose D. Ramos Garces','2013-02-04','Jose D. Ramos Garces');
/*!40000 ALTER TABLE `juicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mp`
--

DROP TABLE IF EXISTS `mp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mp` (
  `idmp` int(11) NOT NULL AUTO_INCREMENT,
  `asunto` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `leido` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `remitente` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_envio` datetime NOT NULL,
  `mensaje` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `destinatario` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `papelera` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  PRIMARY KEY (`idmp`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mp`
--

LOCK TABLES `mp` WRITE;
/*!40000 ALTER TABLE `mp` DISABLE KEYS */;
INSERT INTO `mp` VALUES (23,'jk','Si','Jose D. Ramos Garces','2012-12-02 16:15:23','yiyt','Karina P. Mejia Espitia','No'),(26,'Prueba','Si','Karina P. Mejia Espitia','2012-12-03 13:24:08','fykltykl','Jose D. Ramos Garces','No'),(30,'Prueba','Si','Karina P. Mejia Espitia','2012-12-03 14:21:55','prueba','Jose D. Ramos Garces','No'),(31,'Respuesta','Si','Jose D. Ramos Garces','2012-12-03 15:06:48','fbffbgfbfbf\r\nffr\r\nfggr','Karina P. Mejia Espitia','No'),(32,'otro','Si','Karina P. Mejia Espitia','2012-12-03 15:09:35','otro','Jose D. Ramos Garces','No'),(33,'Re: otro','Si','Jose D. Ramos Garces','2012-12-03 16:51:01','esta es la respuesta','Karina P. Mejia Espitia','No'),(34,'Respuesta','Si','Karina P. Mejia Espitia','2012-12-03 16:55:00','Ya estoy respondiendo','Jose D. Ramos Garces','No'),(35,'Re: Respuesta','Si','Jose D. Ramos Garces','2012-12-04 15:25:17','esta es mi respuesta','Karina P. Mejia Espitia','No'),(36,'Re: Re: Respuesta','Si','Karina P. Mejia Espitia','2012-12-09 16:36:47','hola papi','Jose D. Ramos Garces','No'),(37,'Reporte de disciplina Isabella Sofia','Si','Karina P. Mejia Espitia','2013-01-05 14:28:44','Isabella en mi clase se comio la merienda de otro niÃ±o','Jose D. Ramos Garces','No'),(38,'Ojo','Si','Jose D. Ramos Garces','2013-05-20 18:40:44','kjglkjbcfÃ±','Juan Carlos Tuiran Garcia','No'),(39,'Re: Ojo','Si','Juan Carlos Tuiran Garcia','2013-05-20 18:42:17','Prueba','Jose D. Ramos Garces','No'),(40,'Reporte de indisciplina en clase','Si','Jose D. Ramos Garces','2013-08-02 17:42:59','prueba','Juan Carlos Tuiran Garcia','No'),(41,'Re: Reporte de indisciplina en clase','Si','Juan Carlos Tuiran Garcia','2013-08-02 17:47:40','Ok','Jose D. Ramos Garces','No'),(42,'Prueba','Si','Juan Carlos Tuiran Garcia','2013-08-27 21:50:10','Prueba','Jose D. Ramos Garces','No'),(43,'Prueba','Si','Juan Carlos Tuiran Garcia','2013-08-29 19:02:11','prueba','Jose D. Ramos Garces','No'),(44,'Te Amo','Si','Jose D. Ramos Garces','2013-09-10 20:57:51','Te amo mucho mi amor','Karina P. Mejia Espitia','No');
/*!40000 ALTER TABLE `mp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodos`
--

DROP TABLE IF EXISTS `periodos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodos` (
  `periodo` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  PRIMARY KEY (`periodo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodos`
--

LOCK TABLES `periodos` WRITE;
/*!40000 ALTER TABLE `periodos` DISABLE KEYS */;
INSERT INTO `periodos` VALUES (1,'2013-02-01','2013-02-02'),(2,'2013-02-03','2013-02-04'),(3,'2013-02-05','2013-02-06');
/*!40000 ALTER TABLE `periodos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `remitirts`
--

DROP TABLE IF EXISTS `remitirts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `remitirts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idest` int(11) NOT NULL,
  `nomest` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `idcur` int(11) NOT NULL,
  `curso` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `iddirgrupo` int(11) NOT NULL,
  `dirgrupo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `idtsocial` int(11) NOT NULL,
  `nomts` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `observacion` text COLLATE utf8_spanish_ci NOT NULL,
  `ecaso` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `remitirts`
--

LOCK TABLES `remitirts` WRITE;
/*!40000 ALTER TABLE `remitirts` DISABLE KEYS */;
INSERT INTO `remitirts` VALUES (22,123457051,'Maria del Pilar Bolivar Paternina',83,'Sexto-A AM',32,'Juan Carlos Tuiran Garcia',29,'Ney Lilia Espitia Morillo','prueba',0),(23,123457051,'Maria del Pilar Bolivar Paternina',83,'Sexto-A AM',32,'Juan Carlos Tuiran Garcia',29,'Ney Lilia Espitia Morillo','Problemas familiares',0);
/*!40000 ALTER TABLE `remitirts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `identificacion` int(25) NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nivel` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT 'Docente',
  `genero` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fechanac` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'dd/mm/aaaa',
  `direccion` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Incompleto',
  `telefono` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Incompleto',
  `asignatura` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No aplica',
  `jornada` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Incompleto',
  `foto` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'unknown.png',
  `activado` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `ip_acceso` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '000.000.000.000',
  `ultimo_acceso` datetime NOT NULL,
  `conectado` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `creacion` datetime NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (23,'Jose D. Ramos Garces',73185762,'administrador@inem-ctg.edu.co','7adadc458a07795317dc0e24c7c068be','Administrador','Masculino','10/01/1982','Portales de San Fernando Torre 9 Apto 136','6456458','No aplica','Tarde','73185762.png','Si','::1','2014-01-09 05:28:34','Si','2012-09-04 00:00:00'),(24,'Karina P. Mejia Espitia',45541542,'karo.patri@gmail.com','7d4f863dbd12958bd4cf31c2428f458e','Coordinador','Femenino','06/03/2012','incompleto','3008284890','No aplica','Incompleto','45541542.png','Si','000.000.000.000','2013-09-18 11:35:15','No','0000-00-00 00:00:00'),(29,'Ney Lilia Espitia Morillo',45542478,'joe_rj45@yahoo.com','d41d8cd98f00b204e9800998ecf8427e','Trabajador Social','Femenino','23/10/2012','incompleto','6572754','No aplica','MaÃ±ana','45542478.jpeg','Si','000.000.000.000','2013-10-28 18:15:24','No','2012-09-28 00:00:00'),(32,'Juan Carlos Tuiran Garcia',73145745,'jctuiran@hotmail.com','e10adc3949ba59abbe56e057f20f883e','Docente','Masculino','02/10/2012','Mirador de Zaragocilla','3104578945','Tecnologia e Informatica','Tarde','73145745.jpeg','Si','000.000.000.000','2014-01-09 05:28:05','No','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios_online`
--

DROP TABLE IF EXISTS `usuarios_online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_online` (
  `id_conexion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_ultima_conexion` int(15) NOT NULL DEFAULT '0',
  `ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_conexion`)
) ENGINE=MyISAM AUTO_INCREMENT=1761 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_online`
--

LOCK TABLES `usuarios_online` WRITE;
/*!40000 ALTER TABLE `usuarios_online` DISABLE KEYS */;
INSERT INTO `usuarios_online` VALUES (1760,1389244634,'::1',73185762);
/*!40000 ALTER TABLE `usuarios_online` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitasdom`
--

DROP TABLE IF EXISTS `visitasdom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitasdom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idrem` int(11) NOT NULL,
  `idest` int(11) NOT NULL,
  `creadopor` varchar(200) NOT NULL,
  `creado` varchar(20) NOT NULL,
  `observacion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitasdom`
--

LOCK TABLES `visitasdom` WRITE;
/*!40000 ALTER TABLE `visitasdom` DISABLE KEYS */;
/*!40000 ALTER TABLE `visitasdom` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-09  0:17:16
