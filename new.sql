-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for phonebook
CREATE DATABASE IF NOT EXISTS `phonebook` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `phonebook`;

-- Dumping structure for table phonebook.grp_test
IF NOT EXISTS ;

-- Dumping data for table phonebook.grp_test: ~1 rows (approximately)

-- Dumping database structure for phonebook
CREATE DATABASE IF NOT EXISTS `phonebook` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `phonebook`;

-- Dumping structure for table phonebook.stored_contacts
CREATE TABLE IF NOT EXISTS `stored_contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cnt_title` varchar(100) NOT NULL,
  `cnt_firstname` varchar(100) NOT NULL,
  `cnt_lastname` varchar(100) NOT NULL,
  `cnt_address` varchar(100) NOT NULL,
  `cnt_gender` varchar(100) NOT NULL,
  `cnt_email` varchar(100) NOT NULL,
  `cnt_number` varchar(100) NOT NULL,
  `cnt_CreatedBy` varchar(100) NOT NULL,
  `cnt_day` varchar(100) NOT NULL,
  `cnt_month` varchar(100) NOT NULL,
  `cnt_year` varchar(100) NOT NULL,
  `LastUpdatedBy` varchar(100) NOT NULL,
  `bg1` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table phonebook.stored_contacts: ~1 rows (approximately)
REPLACE INTO `stored_contacts` (`id`, `cnt_title`, `cnt_firstname`, `cnt_lastname`, `cnt_address`, `cnt_gender`, `cnt_email`, `cnt_number`, `cnt_CreatedBy`, `cnt_day`, `cnt_month`, `cnt_year`, `LastUpdatedBy`, `bg1`) VALUES
	(21, 'Mr.', 'Olufemi', 'Timothy', 'Somewhere on Earth', 'Male', 'noobster@gmail.com', '2093102390', '', '17', '04', '2024', '', 'bg-dark');

-- Dumping structure for table phonebook.stored_groups
CREATE TABLE IF NOT EXISTS `stored_groups` (
  `id` int NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table phonebook.stored_groups: ~1 rows (approximately)
REPLACE INTO `stored_groups` (`id`, `group_name`) VALUES
	(9, 'timi');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
