-- MySQL dump 10.13  Distrib 5.5.55, for debian-linux-gnu (armv7l)
--
-- Host: localhost    Database: donnees
-- ------------------------------------------------------

--
-- Table structure for table `measures`
--

DROP TABLE IF EXISTS `measures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `measures` (
  `date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `temperature` float DEFAULT NULL,
  `luminosity` float DEFAULT NULL,
  `humidity` float DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `battery_status` char(32) DEFAULT NULL
  `sapflow` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
