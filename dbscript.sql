CREATE DATABASE  IF NOT EXISTS `recomdb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `recomdb`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: recomdb
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `applications_register`
--

DROP TABLE IF EXISTS `applications_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applications_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `college_id` int(11) DEFAULT NULL,
  `stream_id` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications_register`
--

LOCK TABLES `applications_register` WRITE;
/*!40000 ALTER TABLE `applications_register` DISABLE KEYS */;
/*!40000 ALTER TABLE `applications_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `college`
--

DROP TABLE IF EXISTS `college`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `college` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(400) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_person` varchar(45) DEFAULT NULL,
  `website` varchar(450) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `college`
--

LOCK TABLES `college` WRITE;
/*!40000 ALTER TABLE `college` DISABLE KEYS */;
INSERT INTO `college` VALUES (1,'PCP','pcp@gmail.com','Aditya','www.pcp.com','Pcp123','Pune','9021902190','Maharashtra',411033);
/*!40000 ALTER TABLE `college` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `college_rating`
--

DROP TABLE IF EXISTS `college_rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `college_rating` (
  `college_id` int(11) NOT NULL,
  `fee_rating` float DEFAULT NULL,
  `overall_rating` float DEFAULT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `college_rating`
--

LOCK TABLES `college_rating` WRITE;
/*!40000 ALTER TABLE `college_rating` DISABLE KEYS */;
/*!40000 ALTER TABLE `college_rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `college_stream_details`
--

DROP TABLE IF EXISTS `college_stream_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `college_stream_details` (
  `college_id` int(11) NOT NULL,
  `stream_id` int(11) DEFAULT NULL,
  `total_intake` int(11) DEFAULT NULL,
  `availability` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `college_stream_details`
--

LOCK TABLES `college_stream_details` WRITE;
/*!40000 ALTER TABLE `college_stream_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `college_stream_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `college_stream_reservation_details`
--

DROP TABLE IF EXISTS `college_stream_reservation_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `college_stream_reservation_details` (
  `college_id` int(11) NOT NULL,
  `stream_id` int(11) DEFAULT NULL,
  `reservation_id` int(11) DEFAULT NULL,
  `allocated_seats` int(11) DEFAULT NULL,
  `available_seats` int(11) DEFAULT NULL,
  `cut_off` float DEFAULT NULL,
  `fees` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `college_stream_reservation_details`
--

LOCK TABLES `college_stream_reservation_details` WRITE;
/*!40000 ALTER TABLE `college_stream_reservation_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `college_stream_reservation_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_register`
--

DROP TABLE IF EXISTS `login_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_register`
--

LOCK TABLES `login_register` WRITE;
/*!40000 ALTER TABLE `login_register` DISABLE KEYS */;
INSERT INTO `login_register` VALUES (1,'pcp@gmail.com','Pcp123','college'),(2,'aditya@gmail.com','Aditya123','student'),(3,'aditya1@gmail.com','Aditya123','student');
/*!40000 ALTER TABLE `login_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` float DEFAULT NULL,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `purchase)token` varchar(450) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(450) DEFAULT NULL,
  `female_per` float DEFAULT NULL,
  `allocation_per` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (1,'General',33,50),(2,'SEBC',33,20),(3,'EBFC',33,10),(4,'SC/ST',33,20);
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `streams`
--

DROP TABLE IF EXISTS `streams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `streams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stream_name` varchar(100) DEFAULT NULL,
  `major` varchar(200) DEFAULT NULL,
  `specialization` varchar(200) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `streams`
--

LOCK TABLES `streams` WRITE;
/*!40000 ALTER TABLE `streams` DISABLE KEYS */;
INSERT INTO `streams` VALUES (1,'B.S.C','Science','Science','3 years'),(2,'B.S.C','Science','Computers','3 Years'),(3,'B.Com.','Commerce','Commerce','3 Years'),(4,'B.B.A','Commerce','Business Adminstration','3 Years'),(5,'B.A.','Arts','Arts','3 Years'),(6,'B.Ed.','Arts','Education','3 Years');
/*!40000 ALTER TABLE `streams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_documents`
--

DROP TABLE IF EXISTS `student_documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_documents` (
  `student_id` int(11) NOT NULL,
  `document_name` varchar(450) DEFAULT NULL,
  `document_abs_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_documents`
--

LOCK TABLES `student_documents` WRITE;
/*!40000 ALTER TABLE `student_documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_register`
--

DROP TABLE IF EXISTS `student_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `dob` varchar(45) DEFAULT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `rid` int(11) DEFAULT NULL,
  `max_qualification` varchar(400) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `major` varchar(400) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_register`
--

LOCK TABLES `student_register` WRITE;
/*!40000 ALTER TABLE `student_register` DISABLE KEYS */;
INSERT INTO `student_register` VALUES (1,'Aditya','aditya@gmail.com','Male','21-Jan-1994','9021280829','Aditya123',1,NULL,NULL,NULL,'Pune','Maharashtra',411033),(2,'Aditya','aditya1@gmail.com','Male','21-Jan-1994','9021280828','Aditya123',1,NULL,NULL,NULL,'Pune','Maharashtra',411033);
/*!40000 ALTER TABLE `student_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'recomdb'
--
/*!50003 DROP PROCEDURE IF EXISTS `login` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `login`(in usernamei varchar(400),in passwordi varchar(100))
BEGIN

if exists(select * from login_register where username=usernamei and password=passwordi and type='college') then
select *,'college' as type from college where email=usernamei and password=passwordi;
elseif exists(select * from login_register where username=usernamei and password=passwordi and type='student') then
select *, 'student' as type from student_register where email=usernamei and password=passwordi;
else
select 'User Not Found' as reply;
end if;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `signup_college` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `signup_college`(in namei varchar(100), in emaili varchar(100), in passwordi varchar(45), in phone varchar(45), in contactp varchar(100), in websitei varchar(100), in cityi varchar(45),in statei varchar(45), in zipi int)
BEGIN
if exists(select * from college where email=emaili or contact=phone) then
select 'College with email or phone already exists' as reply;
elseif exists(select * from college where name=namei) then
select 'College with this name already exists' as reply;
else
INSERT INTO `recomdb`.`college` (`name`,`email`,`contact_person`,`website`,`password`,`city`,`contact`,`state`,`zip`) VALUES(namei,emaili,contactp,websitei,passwordi,cityi,phone,statei,zipi);


INSERT INTO `recomdb`.`login_register` (`username`,`password`,`type`) VALUES(emaili,passwordi,'college');


select 'Profile Registered Successfully' as reply;
end if;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `signup_student` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `signup_student`(in namei varchar(45), in emaili varchar(100), in passwordi varchar(45), in phone varchar(45), in genderi varchar(45), in dobi varchar(45),in ridi int, in cityi varchar(45),in statei varchar(45), in zipi int)
BEGIN
if exists(select * from student_register where email=emaili or contact=phone) then
select 'User with email or phone already exists' as reply;
else
INSERT INTO `recomdb`.`student_register`
(`name`,
`email`,
`gender`,
`dob`,
`contact`,
`password`,
`rid`,
`city`,
`state`,
`zip`)
VALUES
(namei,
emaili,
genderi,
dobi,
phone,
passwordi,
ridi,
cityi,
statei,
zipi);

INSERT INTO `recomdb`.`login_register`
(`username`,
`password`,
`type`)
VALUES
(emaili,
passwordi,
'student');


select 'Profile Registered Successfully' as reply;
end if;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-10 15:39:37
