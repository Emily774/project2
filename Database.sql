<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
	<key>ContentFilters</key>
	<dict/>
	<key>auto_connect</key>
	<true/>
	<key>data</key>
	<dict>
		<key>connection</key>
		<dict>
			<key>database</key>
			<string>Timelord</string>
			<key>host</key>
			<string>127.0.0.1</string>
			<key>name</key>
			<string>localhost</string>
			<key>rdbms_type</key>
			<string>mysql</string>
			<key>sslCACertFileLocation</key>
			<string></string>
			<key>sslCACertFileLocationEnabled</key>
			<integer>0</integer>
			<key>sslCertificateFileLocation</key>
			<string></string>
			<key>sslCertificateFileLocationEnabled</key>
			<integer>0</integer>
			<key>sslKeyFileLocation</key>
			<string></string>
			<key>sslKeyFileLocationEnabled</key>
			<integer>0</integer>
			<key>type</key>
			<string>SPTCPIPConnection</string>
			<key>useSSL</key>
			<integer>0</integer>
			<key>user</key>
			<string>root</string>
		</dict>
		<key>session</key>
		<dict>
			<key>connectionEncoding</key>
			<string>latin1</string>
			<key>contentFilter</key>
			<dict/>
			<key>contentPageNumber</key>
			<integer>1</integer>
			<key>contentSelection</key>
			<data>
			YnBsaXN0MDDUAQIDBAUGBwpYJHZlcnNpb25ZJGFyY2hpdmVyVCR0
			b3BYJG9iamVjdHMSAAGGoF8QD05TS2V5ZWRBcmNoaXZlctEICVRk
			YXRhgAGtCwwZGhscHSEoLDA1OlUkbnVsbNMNDg8QFBhXTlMua2V5
			c1pOUy5vYmplY3RzViRjbGFzc6MREhOAAoADgASjFRYXgAWABoAI
			gAxUdHlwZVRyb3dzVGtleXNfECZTZWxlY3Rpb25EZXRhaWxUeXBl
			UHJpbWFyeUtleWVkRGV0YWlsc9MNDg8eHyCgoIAH0iIjJCVaJGNs
			YXNzbmFtZVgkY2xhc3Nlc18QE05TTXV0YWJsZURpY3Rpb25hcnmj
			JCYnXE5TRGljdGlvbmFyeVhOU09iamVjdNIODykroSqACYAL0g8t
			Li9ZTlMuc3RyaW5ngApSaWTSIiMxMl8QD05TTXV0YWJsZVN0cmlu
			Z6MxMzRYTlNTdHJpbmdYTlNPYmplY3TSIiM2N15OU011dGFibGVB
			cnJheaM2ODlXTlNBcnJheVhOU09iamVjdNIiIyY7oiY8WE5TT2Jq
			ZWN0AAgAEQAaACQAKQAyADcASQBMAFEAUwBhAGcAbgB2AIEAiACM
			AI4AkACSAJYAmACaAJwAngCjAKgArQDWAN0A3gDfAOEA5gDxAPoB
			EAEUASEBKgEvATEBMwE1AToBRAFGAUkBTgFgAWQBbQF2AXsBigGO
			AZYBnwGkAacAAAAAAAACAQAAAAAAAAA9AAAAAAAAAAAAAAAAAAAB
			sA==
			</data>
			<key>contentSortColIsAsc</key>
			<true/>
			<key>contentViewport</key>
			<string>{{0, 0}, {891, 318}}</string>
			<key>isToolbarVisible</key>
			<true/>
			<key>queries</key>
			<string>SELECT `name` FROM `forgallifrey`;
INSERT INTO `forgallifrey`("Name", "Travel") VALUES ("the castellan", 9);


# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: Timelord
# Generation Time: 2021-02-08 16:25:39 +0000
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
  `name` varchar(11) DEFAULT NULL,
  `Travel` int(11) DEFAULT NULL,
  `Wisdom` int(11) DEFAULT NULL,
  `Inventiveness` int(11) DEFAULT NULL,
  `Combatt` int(11) DEFAULT NULL,
  `Strategy` int(11) DEFAULT NULL,
  `Mind Control` int(11) DEFAULT NULL,
  `Knowledge` int(11) DEFAULT NULL,
  `Users` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `forgallifrey` WRITE;
/*!40000 ALTER TABLE `forgallifrey` DISABLE KEYS */;

INSERT INTO `forgallifrey` (`id`, `name`, `Travel`, `Wisdom`, `Inventiveness`, `Combatt`, `Strategy`, `Mind Control`, `Knowledge`, `Users`)
VALUES
	(1,'The Doctor',13,10,13,9,12,2,12,NULL),
	(2,'The Master',12,4,13,13,8,12,9,NULL),
	(3,'Rassilon',6,11,12,13,13,13,13,NULL),
	(4,'Omega',7,9,12,11,6,5,9,NULL),
	(5,'The Monk',8,5,4,7,5,4,8,NULL),
	(6,'Susan',10,10,2,4,3,6,5,NULL),
	(7,'River Song',12,10,9,12,7,6,6,NULL),
	(8,'Rani',11,9,13,12,8,4,12,NULL);

/*!40000 ALTER TABLE `forgallifrey` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


</string>
			<key>table</key>
			<string>forgallifrey</string>
			<key>view</key>
			<string>SP_VIEW_CUSTOMQUERY</string>
			<key>windowVerticalDividerPosition</key>
			<real>214</real>
		</dict>
	</dict>
	<key>encrypted</key>
	<false/>
	<key>format</key>
	<string>connection</string>
	<key>queryFavorites</key>
	<array/>
	<key>queryHistory</key>
	<array>
		<string>INSERT INTO `deleted-deleted-items` SELECT * FROM `frogallifrey`WHERE `Name`= 'the castellan'</string>
		<string>INSERT INTO `Timelords`SELECT * FROM `frogallifrey`WHERE `Name`= 'the castellan'</string>
		<string>INSERT INTO `forgallifrey`(`name`, `Travel`) VALUES ('theoctopus', 12)</string>
		<string>INSERT INTO `forgallifrey`(`name`, `Travel`) VALUES ('the castellan', 9)</string>
		<string>INSERT INTO `forgallifrey`(`name`, `Travel`) VALUES (`the castellan`, 9)</string>
		<string>the castellan</string>
		<string>INSERT INTO `forgallifrey`(`name`, `Travel`) VALUES (the castellan, 9)</string>
		<string>'INSERT INTO `forgallifrey`(`name`, `travel`) VALUES (the castellan, 9);'



# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: Timelord
# Generation Time: 2021-02-08 16:25:39 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */</string>
		<string>'INSERT INTO `forgallifrey`(`Name`, `Travel`) VALUES (the castellan, 9);'



# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: Timelord
# Generation Time: 2021-02-08 16:25:39 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */</string>
		<string>`INSERT INTO `forgallifrey`(`Name`, `Travel`) VALUES (the castellan, 9);`



# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: Timelord
# Generation Time: 2021-02-08 16:25:39 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */</string>
		<string>"INSERT INTO `forgallifrey`(`Name`, `Travel`) VALUES (the castellan, 9);"



# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: Timelord
# Generation Time: 2021-02-08 16:25:39 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */</string>
		<string>INSERT INTO `forgallifrey`(`Name`, `Travel`) VALUES (the castellan, 9)</string>
		<string>INSERT INTO `forgallifrey`(`Name`, `Travel`) VALUES ("the castellan", 9)</string>
		<string>INSERT INTO `forgallifrey` (`Name`, `Travel`) VALUES ("the castellan", 9)</string>
		<string>INSERT INTO forgallifrey (`Name`, `Travel`) VALUES ("the castellan", 9)</string>
		<string>INSERT INTO forgallifrey` (`Name`, `Travel`) VALUES ("the castellan", 9);</string>
		<string>INSERT INTO `forgallifrey` (`Name`, `Travel`) VALUES (the castellan, 9)</string>
		<string>INSERT INTO forgallifrey (Name, Travel) VALUES (the castellan, 9)</string>
		<string>INSERT INTO forgallifrey (Name, Travel) VALUES ("the castellan", 9)</string>
		<string>INSERT INTO `forgallifrey`("Name", "Travel") VALUES ("the castellan", 9)</string>
	</array>
	<key>rdbms_type</key>
	<string>mysql</string>
	<key>rdbms_version</key>
	<string>5.7.33</string>
	<key>version</key>
	<integer>1</integer>
</dict>
</plist>
