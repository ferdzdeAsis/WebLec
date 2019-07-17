-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: quiz
-- ------------------------------------------------------
-- Server version	5.7.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `css_quiz`
--

DROP TABLE IF EXISTS `css_quiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `css_quiz` (
  `idcss_quiz` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `Answer` varchar(45) NOT NULL,
  `Choices` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcss_quiz`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `css_quiz`
--

LOCK TABLES `css_quiz` WRITE;
/*!40000 ALTER TABLE `css_quiz` DISABLE KEYS */;
INSERT INTO `css_quiz` VALUES (1,'What is the meaning of CSS','Cascading Style Sheet',''),(2,'Variables which can be incremented by rules of CSS that inspector track how many times the variable has been used','counters',NULL),(3,'A score or rank that decides which style declaration has to be used to an element.','specificity',NULL),(4,'A class which is used to define a special state of an HTML element.','Pseudo class',NULL),(5,'What is the default position state in css','Static',NULL),(6,'Which HTML tag is used to define an internal style sheet?','<style>',NULL),(7,'When using the padding property; are you allowed to use negative values?','no',NULL),(8,'How do you select an id element?','#',NULL),(9,'How do you select class element?','*',NULL),(10,'What is RWD','Responsive Website Design',NULL),(11,'What Defines a measurement in centimeters?','cm',NULL),(12,'What property is used to increase or decrease how bold or light a font appears?','font-Weight',NULL),(13,'Which of the following selector matches a element based on its class attribute?','Class Selector',NULL),(14,'Type of css that are written in separate files.','External',NULL),(15,'Type of css that are written beside the html texts','Inline',NULL),(16,'Type of css that are cited at the head section of the html file.','Internal',NULL),(17,'Which of the following property is used as a shorthand to specify a number of other background properties?','Background',NULL),(18,'Which of the following property of a anchor element signifies visited hyperlinks?','visited',NULL),(19,'Which of the following value of cursor shows it as the \'I\' bar?','move',NULL),(20,'In CSS rule of precedence what is the first one by resolution?','Origin',NULL),(21,'In CSS rule of precedence what is the second one by resolution?','Specificity',NULL),(22,'In CSS rule of precedence what is the last by resolution?','order',NULL),(23,'Generates CSS using a custom language syntax that typically includes features that don\'t exist in pure CSS','Preprocessors',NULL),(24,'Provides predefined CSS design functionality that can be reused, extended, or','Framworks',NULL),(25,'Provides features that developers expect browsers to provide natively','polyfills',NULL),(26,'Universal selector','*',NULL),(27,'Which of the following is NOT an absolute CSS length unit?','ms',NULL),(28,'Ruleset\'s first part','Selector',NULL),(29,'Symbol of single line comment in CSS','//',NULL),(30,'Percentage Suffix','%',NULL);
/*!40000 ALTER TABLE `css_quiz` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-17 23:35:29
