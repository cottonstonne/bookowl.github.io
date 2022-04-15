-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2021 at 08:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookowl`
--

-- --------------------------------------------------------

--
-- Table structure for table `pick`
--

CREATE TABLE `pick` (
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `rent` int(20) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `language` varchar(30) DEFAULT NULL,
  `library` varchar(50) DEFAULT NULL,
  `genre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pick`
--

INSERT INTO `pick` (`title`, `author`, `rating`, `rent`, `price`, `image`, `city`, `language`, `library`, `genre`) VALUES
('harry potter and the deathly hallows', 'jk rowling', '4.8', 60, 700, 'harry.jpg', 'vijayawada', 'english', 'library', 'fantasy'),
('lost symbol', 'dan brown', '4.6', 40, 220, 'lostsymbol.jpg', 'tirupati', 'english', 'Ocorner', 'mystery');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
