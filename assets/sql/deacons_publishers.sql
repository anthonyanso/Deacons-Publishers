-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2025 at 12:00 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deacons_publishers`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`) VALUES
(1, 'Anthony Anso', 'anthonyanso@outlook.com', 'this '),
(2, 'Elizabeth', 'eli76@gmail.com', '.....'),
(3, 'Eminike', 'eminike@gmail.com', '....'),
(4, 'Amos dauda', 'amosdauda007@gmail.com', 'Please I need this \nI have been out of school since 2019 and I don’t have any book to read neither past question only the lekki head master please can you help me and I am having exam tomorrow '),
(5, 'Charles S', 'rachel@oval9.com', 'Do you need help with graphic design - brochures, banners, flyers, advertisements, social media posts, logos etc.? \n\nWe charge a low fixed monthly fee. Let me know if you\'re interested and would like to see our portfolio.'),
(6, 'deacons_publishers', 'c00465157@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `digitalmarketing`
--

DROP TABLE IF EXISTS `digitalmarketing`;
CREATE TABLE IF NOT EXISTS `digitalmarketing` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `currentAddress` text NOT NULL,
  `position` varchar(100) NOT NULL,
  `workLocation` varchar(50) NOT NULL,
  `startDate` date NOT NULL,
  `education` varchar(255) NOT NULL,
  `experience` int NOT NULL,
  `skills` text NOT NULL,
  `cv` varchar(255) NOT NULL,
  `coverLetter` varchar(255) NOT NULL,
  `whyWork` text NOT NULL,
  `impactfulCampaign` text NOT NULL,
  `submissionDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

DROP TABLE IF EXISTS `marketing`;
CREATE TABLE IF NOT EXISTS `marketing` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('Intern','Junior','Middle','Senior','Lead','Head','Chief') NOT NULL,
  `englishLevel` enum('Beginner','Elementary','Intermediate','Upper Intermediate','Advanced','Proficient') NOT NULL,
  `description` text NOT NULL,
  `salary` int NOT NULL,
  `startDate` date NOT NULL,
  `relocation` enum('Relocate','Remote') NOT NULL,
  `additionalInfo` text,
  `offerSource` varchar(255) NOT NULL,
  `cvPath` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mobileappapplications`
--

DROP TABLE IF EXISTS `mobileappapplications`;
CREATE TABLE IF NOT EXISTS `mobileappapplications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `coverLetter` varchar(255) NOT NULL,
  `location` varchar(50) NOT NULL,
  `submission_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachingapp`
--

DROP TABLE IF EXISTS `teachingapp`;
CREATE TABLE IF NOT EXISTS `teachingapp` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `teachingLevel` varchar(50) NOT NULL,
  `teachingExperience` int NOT NULL,
  `startDate` date NOT NULL,
  `educationLevel` varchar(255) NOT NULL,
  `joinReason` text NOT NULL,
  `cv` varchar(255) NOT NULL,
  `applicationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videoediting`
--

DROP TABLE IF EXISTS `videoediting`;
CREATE TABLE IF NOT EXISTS `videoediting` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `coverLetter` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
