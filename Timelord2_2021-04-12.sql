# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: Timelord2
# Generation Time: 2021-04-12 11:31:02 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table forgallifrey
# ------------------------------------------------------------

DROP TABLE IF EXISTS `forgallifrey`;

CREATE TABLE `forgallifrey` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) DEFAULT NULL,
  `Travel` tinyint(11) DEFAULT NULL,
  `Wisdom` tinyint(11) DEFAULT NULL,
  `Inventiveness` tinyint(11) DEFAULT NULL,
  `Combatt` tinyint(11) DEFAULT NULL,
  `Strategy` tinyint(11) DEFAULT NULL,
  `Mind Control` tinyint(11) DEFAULT NULL,
  `Knowledge` tinyint(11) DEFAULT NULL,
  `No. of Adds` tinyint(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `forgallifrey` WRITE;
/*!40000 ALTER TABLE `forgallifrey` DISABLE KEYS */;

INSERT INTO `forgallifrey` (`id`, `Name`, `Travel`, `Wisdom`, `Inventiveness`, `Combatt`, `Strategy`, `Mind Control`, `Knowledge`, `No. of Adds`)
VALUES
	(1,'The Doctor',13,10,13,9,12,2,12,NULL),
	(2,'The Master',12,4,13,13,8,13,9,NULL),
	(3,'Rassilon',6,11,12,13,13,13,13,NULL),
	(4,'Omega',7,9,12,11,6,5,9,NULL),
	(5,'The Meddling Monk',8,5,4,7,5,4,8,NULL),
	(6,'Susan',10,10,2,4,3,6,5,NULL),
	(7,'River Song',12,10,9,12,7,6,6,NULL),
	(8,'The Rani',11,9,13,12,8,4,12,NULL),
	(9,'The Castyellan',12,12,11,12,12,12,12,NULL);

/*!40000 ALTER TABLE `forgallifrey` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
