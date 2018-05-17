<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2018-05-17 11:19:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-17 11:19:29 --> Compile Error - Cannot declare class Fuel\Migrations\Recetas, because the name is already in use in /var/www/html/coctelTV/fuel/app/migrations/005_filtros.php on line 5
WARNING - 2018-05-17 11:21:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-17 11:21:25 --> Compile Error - Cannot declare class Fuel\Migrations\Recetas, because the name is already in use in /var/www/html/coctelTV/fuel/app/migrations/005_filtros.php on line 5
WARNING - 2018-05-17 11:21:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-17 11:21:54 --> Compile Error - Cannot declare class Fuel\Migrations\Recetas, because the name is already in use in /var/www/html/coctelTV/fuel/app/migrations/005_filtros.php on line 5
WARNING - 2018-05-17 11:32:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-17 11:32:13 --> Compile Error - Cannot declare class Fuel\Migrations\Recetas, because the name is already in use in /var/www/html/coctelTV/fuel/app/migrations/005_filtros.php on line 5
WARNING - 2018-05-17 11:32:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-17 11:32:17 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails with query: "DROP TABLE IF EXISTS `Users`" in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2018-05-17 11:32:17 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 220
WARNING - 2018-05-17 12:26:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-17 12:26:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-17 12:26:45 --> Compile Error - Cannot declare class Fuel\Migrations\Recetas, because the name is already in use in /var/www/html/coctelTV/fuel/app/migrations/005_filtros.php on line 5
WARNING - 2018-05-17 12:27:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-17 12:27:08 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1072 Key column 'id_user' doesn't exist in table with query: "CREATE TABLE `Filtros` (
	`id` int(100) NOT NULL AUTO_INCREMENT,
	`name` varchar(500) NOT NULL,
	PRIMARY KEY (`id`), 
	CONSTRAINT `ForeingKeyFiltrosToUser` FOREIGN KEY (`id_user`) REFERENCES `Users` (`id`) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE = InnoDB DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_unicode_ci;" in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2018-05-17 12:27:08 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1072 Key column 'id_user' doesn't exist in table in /var/www/html/coctelTV/fuel/core/classes/database/pdo/connection.php on line 220
WARNING - 2018-05-17 12:27:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-17 12:28:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-17 12:28:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-17 12:28:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-17 12:28:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-17 12:28:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-17 12:28:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-17 12:28:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-17 15:24:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-17 15:24:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-17 15:24:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-17 15:24:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-05-17 15:24:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-17 15:24:48 --> Error - Signature verification failed in /var/www/html/coctelTV/fuel/vendor/firebase/php-jwt/src/JWT.php on line 112
WARNING - 2018-05-17 15:26:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-05-17 15:26:14 --> Error - Signature verification failed in /var/www/html/coctelTV/fuel/vendor/firebase/php-jwt/src/JWT.php on line 112
