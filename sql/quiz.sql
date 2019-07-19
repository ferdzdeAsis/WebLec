-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: quiz
-- ------------------------------------------------------
-- Server version	5.7.24

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
  `answer` longtext NOT NULL,
  PRIMARY KEY (`idcss_quiz`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `css_quiz`
--

LOCK TABLES `css_quiz` WRITE;
/*!40000 ALTER TABLE `css_quiz` DISABLE KEYS */;
INSERT INTO `css_quiz` VALUES (1,'What is the meaning of CSS','Cascading Style Sheet'),(2,'Variables which can be incremented by rules of CSS that inspector track how many times the variable has been used','counters'),(3,'A score or rank that decides which style declaration has to be used to an element.','specificity'),(4,'A class which is used to define a special state of an HTML element.','Pseudo class'),(5,'What is the default position state in css','Static'),(6,'Which HTML tag is used to define an internal style sheet?','<style>'),(7,'When using the padding property; are you allowed to use negative values?','no'),(8,'How do you select an id element?','#'),(9,'How do you select class element?','*'),(10,'What is RWD','Responsive Website Design'),(11,'What Defines a measurement in centimeters?','cm'),(12,'What property is used to increase or decrease how bold or light a font appears?','font-Weight'),(13,'Which of the following selector matches a element based on its class attribute?','Class Selector'),(14,'Type of css that are written in separate files.','External'),(15,'Type of css that are written beside the html texts','Inline'),(16,'Type of css that are cited at the head section of the html file.','Internal'),(17,'Which of the following property is used as a shorthand to specify a number of other background properties?','Background'),(18,'Which of the following property of a anchor element signifies visited hyperlinks?','visited'),(19,'Which of the following value of cursor shows it as the \'I\' bar?','move'),(20,'In CSS rule of precedence what is the first one by resolution?','Origin'),(21,'In CSS rule of precedence what is the second one by resolution?','Specificity'),(22,'In CSS rule of precedence what is the last by resolution?','order'),(23,'Generates CSS using a custom language syntax that typically includes features that don\'t exist in pure CSS','Preprocessors'),(24,'Provides predefined CSS design functionality that can be reused, extended, or','Framworks'),(25,'Provides features that developers expect browsers to provide natively','polyfills'),(26,'Universal selector','*'),(27,'Which of the following is NOT an absolute CSS length unit?','ms'),(28,'Ruleset\'s first part','Selector'),(29,'Symbol of single line comment in CSS','//'),(30,'Percentage Suffix','%');
/*!40000 ALTER TABLE `css_quiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `html_quiz`
--

DROP TABLE IF EXISTS `html_quiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `html_quiz` (
  `idhtml_quiz` int(11) NOT NULL,
  `question` longtext,
  `answer` longtext,
  PRIMARY KEY (`idhtml_quiz`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `html_quiz`
--

LOCK TABLES `html_quiz` WRITE;
/*!40000 ALTER TABLE `html_quiz` DISABLE KEYS */;
INSERT INTO `html_quiz` values (1,'What does HTTP Stand for?','Hypertext Transfer Protocol'),(2,'It is a standard set of rules that allow electronic devices to communicate with each other.','Protocol'),(3,'It provides a standard set of rules for sending and receiving data over the Internet.','Internet Protocol'),(4,'It is a small amount of data sent over a network, such as a LAN or the Internet.','Packet'),(5,'What is the status code for \"successful request\"?','200'),(6,'What is the status code for \"moved permanently\"?','301'),(7,'What is the status code for \"unauthorized request\"?','401'),(8,'What is the status code for \"forbidden\"?','403'),(9,'What is the status code for \"internal server error\"?','500'),(10,'It is an architecture that is common in both local and wide area networks.','Client-Server Architecture'),(11,'It is a computer that provides data to other computers.','Server'),(12,'What does LAN stand for?','Local Area Network'),(13,'What does WAN stand for?','Wide Area Network'),(14,'It is a secure protocol developed for sending information securely over the Internet.','Secure Sockets Layer'),(15,'It is a protocol used for sending e-mail over the Internet.','SMTP'),(16,'What does SMTP stand for?','Simple Mail Transfer Protocol'),(17,'It is the standard way to connect computers on a network over a wired connection.','Ethernet'),(18,'It is similar to HTTP but uses the SSL.','HTTPS'),(19,'It is a file installed on a secure Web server that identifies a website.','Secure Certificate'),(20,'It is the process that is commonly used to protect sensitive information so that only authorized parties can view it.','Encryption'),(21,'It is a security protocol designed to create secure wireless networks.','Wi-Fi Protected Access'),(22,'What does Wi-Fi stand for?','Wireless Fidelity'),(23,'It is a security protocol for Wi-Fi networks.','Wired Equivalent Privacy'),(24,'It is a hardware identification number that uniquely identifies each device on a network?','MAC Address'),(25,'It is a fundamental protocol within the Internet protocol suite','Transmission Control Protocol'),(26,'It is part of the TCP/IP suite of protocols used for data transferring','User Datagram Protocol'),(27,'It is a global wide area network that connects computer systems across the world.','Internet'),(28,'It consists of multiple devices that communicate with one another.','Network'),(29,'It is a device, such as a wireless router, that allows wireless devices to connect to a network.','Access Point'),(30,'What is the default port for HTTP?','80');
/*!40000 ALTER TABLE `html_quiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `http_quiz`
--

DROP TABLE IF EXISTS `http_quiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `http_quiz` (
  `idhttp_quiz` int(11) NOT NULL,
  `question` longtext,
  `answer` longtext,
  PRIMARY KEY (`idhttp_quiz`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `http_quiz`
--

LOCK TABLES `http_quiz` WRITE;
/*!40000 ALTER TABLE `http_quiz` DISABLE KEYS */;
INSERT INTO `http_quiz` VALUES (1,'What does HTTP Stand for?','Hypertext Transfer Protocol'),(2,' It is a standard set of rules that allow electronic devices to communicate with each other.','Protocol'),(3,'It provides a standard set of rules for sending and receiving data over the Internet.','Internet Protocol'),(4,'It is a small amount of data sent over a network, such as a LAN or the Internet.','Packet'),(5,'What is the status code for \"successful request\"?','200'),(6,'What is the status code for \"moved permanently\"?','301'),(7,'What is the status code for \"unauthorized request\"?','401'),(8,'What is the status code for \"forbidden\"?','403'),(9,'What is the status code for \"internal server error\"?','500'),(10,'It is an architecture that is common in both local and wide area networks.','Client-Server Architecture'),(11,'It is a computer that provides data to other computers.','Server'),(12,'What does LAN stand for?','Local Area Network'),(13,'What does WAN stand for?','Wide Area Network'),(14,'It is a secure protocol developed for sending information securely over the Internet.','Secure Sockets Layer'),(15,'It is a protocol used for sending e-mail over the Internet.','SMTP'),(16,'What does SMTP stand for?','Simple Mail Transfer Protocol'),(17,'It is the standard way to connect computers on a network over a wired connection.','Ethernet'),(18,'It is similar to HTTP but uses the SSL.','HTTPS'),(19,'It is a file installed on a secure Web server that identifies a website.','Secure Certificate'),(20,'It is the process that is commonly used to protect sensitive information so that only authorized parties can view it.','Encryption'),(21,'It is a security protocol designed to create secure wireless networks.','Wi-Fi Protected Access'),(22,'What does Wi-Fi stand for?','Wireless Fidelity'),(23,'It is a security protocol for Wi-Fi networks.','Wired Equivalent Privacy'),(24,'It is a hardware identification number that uniquely identifies each device on a network?','MAC Address'),(25,'It is a fundamental protocol within the Internet protocol suite.','TCP'),(26,'It is part of the TCP/IP suite of protocols used for data transferring.','User Datagram Protocol'),(27,'It is a global wide area network that connects computer systems across the world.','Internet'),(28,'It consists of multiple devices that communicate with one another.','Network'),(29,'It is a device, such as a wireless router, that allows wireless devices to connect to a network.','Access Point'),(30,'What is the default port for HTTP?','80');
/*!40000 ALTER TABLE `http_quiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `javascript_quiz`
--

DROP TABLE IF EXISTS `javascript_quiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `javascript_quiz` (
  `idjavascript_quiz` int(11) NOT NULL,
  `question` longtext,
  `answer` longtext,
  PRIMARY KEY (`idjavascript_quiz`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `javascript_quiz`
--

LOCK TABLES `javascript_quiz` WRITE;
/*!40000 ALTER TABLE `javascript_quiz` DISABLE KEYS */;
INSERT INTO `javascript_quiz` VALUES (1,'It is the programming languageof HTML and the web','JavaScript'),(2,'It is a general set of rules for words and sentences should be structured','Syntax'),(3,'It is what makes up the world wide web','Web page'),(4,'What is the the right term for for a javascript file?','.js file'),(5,'It is an HTML-embedded Web scripting language','PHP'),(6,'It is a company or organization that provides software applications to customers over the Internet','Application Service Provider'),(7,'It is defined as a relationship between defined values and one or more variables','Functions'),(8,'It refers to a data generated by a computer','Output'),(9,'It is a JavaScript library that allows web developers to add extra functionality to their websites','jQuery'),(10,'It is a set of commands, instructions, and other syntax use to create a software program','Programming Language'),(11,'It contains variable declarations, instructions, functions, loops, and other statements that tell the program how to function','Source Code'),(12,'It is a list of commands that are executed by a certain program','Script'),(13,'It is a computer system that hosts websites','Web Server'),(14,'It is a function that’s invoked when something happens','Callback'),(15,'It is an approach when you tell the machine what you need to do and you let it figure out the details','Declarative'),(16,'It is used to provide a good experience when a user hasn’t access to a particular functionality','Fallback'),(17,'It s a way to provide new functionality available in modern JavaScript or a modern browser API to older browsers','Polyfill'),(18,'It is a variable when its value cannot change after it’s created','Immutability'),(19,'It is the set of variables that’s visible to a part of the program','Scope'),(20,'It is the set of rules that’s defined in a programming language to determine the value of a variable','Scoping'),(21,'It is is a kind of scoping which means that the value of a variable is defined by its position when it’s written','Lexical Scoping'),(22,'It is a kind of scoping that defines any variable in a function is visible and accessible from inside the whole function','Function Scoping'),(23,'It is a little wrapper around a functionality','Shim'),(24,'A feature which causes the JavaScript runtime to catch more errors','Strict Mode'),(25,'It removes “dead code” from the bundle you ship to your users','Tree Shaking'),(26,'It is when a function interacts with some other function or object outside it','Side Effect'),(27,'It usually comes into play when talking about components','State'),(28,'A function or class manages its own state','Stateful'),(29,'A function or class is also called dumb because it’s incapable of having its own data to make decisions','Stateless'),(30,'A function that has no side effects and its output is only determined by the arguments.','Pure Functions');
/*!40000 ALTER TABLE `javascript_quiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serverside_quiz`
--

DROP TABLE IF EXISTS `serverside_quiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `serverside_quiz` (
  `idserverside_quiz` int(11) NOT NULL,
  `question` longtext,
  `answer` longtext,
  PRIMARY KEY (`idserverside_quiz`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serverside_quiz`
--

LOCK TABLES `serverside_quiz` WRITE;
/*!40000 ALTER TABLE `serverside_quiz` DISABLE KEYS */;
/*!40000 ALTER TABLE `serverside_quiz` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-18 22:27:25
