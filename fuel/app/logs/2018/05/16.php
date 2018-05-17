<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2018-05-16 13:54:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-16 13:54:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-16 13:54:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-16 13:54:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-16 13:54:09 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails with query: "DROP TABLE IF EXISTS `Users`" in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2018-05-16 13:54:09 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 220
WARNING - 2018-05-16 13:54:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-16 13:54:11 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails with query: "DROP TABLE IF EXISTS `Users`" in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2018-05-16 13:54:11 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 220
WARNING - 2018-05-16 13:55:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-16 13:55:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-16 13:55:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-16 13:55:23 --> 1005 - SQLSTATE[HY000]: General error: 1005 Can't create table `coctelTV`.`Locals` (errno: 150 "Foreign key constraint is incorrectly formed") with query: "CREATE TABLE `Locals` (
	`id` int(100) NOT NULL AUTO_INCREMENT,
	`name` varchar(500) NOT NULL,
	`direction` varchar(300) NOT NULL,
	`CP` varchar(300) NOT NULL,
	`localTelephone` varchar(300) NOT NULL,
	`daysL` varchar(300) NOT NULL,
	`holidays` varchar(300) NOT NULL,
	`morning` varchar(300) NOT NULL,
	`evening` varchar(300) NOT NULL,
	`profilePicture` varchar(500) NOT NULL,
	`city` varchar(300) NOT NULL,
	`city2` varchar(300) NOT NULL,
	`x` varchar(100) NOT NULL,
	`y` varchar(100) NOT NULL,
	`id_user` int(100) NOT NULL,
	PRIMARY KEY (`id`), 
	CONSTRAINT `ForeingKeyLocalsToUser` FOREIGN KEY (`id_user`) REFERENCES `Users` (`id`) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE = InnoDB DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_unicode_ci;" in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2018-05-16 13:55:23 --> HY000 - SQLSTATE[HY000]: General error: 1005 Can't create table `coctelTV`.`Locals` (errno: 150 "Foreign key constraint is incorrectly formed") in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 220
WARNING - 2018-05-16 13:56:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-16 13:56:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-16 13:56:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-16 13:56:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-16 13:56:40 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails with query: "DROP TABLE IF EXISTS `Users`" in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2018-05-16 13:56:40 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 220
WARNING - 2018-05-16 13:56:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-16 13:56:40 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails with query: "DROP TABLE IF EXISTS `Users`" in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2018-05-16 13:56:40 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 220
