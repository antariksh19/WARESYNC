-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2025 at 06:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warehouse_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `type` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `rating` decimal(6,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`type`, `location`, `rating`, `stock`) VALUES
('Fiction', 'Paris, France', 4.80, 690),
('Non-Fiction', 'New York, USA', 4.80, 420),
('Comics', 'London, UK', 4.90, 1005),
('Research', 'Frankfurt, Germany', 4.90, 703),
('Kids', 'Tokyo, Japan', 4.70, 950),
('Study', 'Buenos Aires, Argentina', 4.80, 1222);

-- --------------------------------------------------------

--
-- Table structure for table `clothes_and_accessories`
--

CREATE TABLE `clothes_and_accessories` (
  `type` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `rating` decimal(6,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clothes_and_accessories`
--

INSERT INTO `clothes_and_accessories` (`type`, `location`, `rating`, `stock`) VALUES
('Jackets', 'Paris, France', 4.90, 899),
('Tshirts', 'New York, USA', 4.60, 1532),
('Shirts', 'London, UK', 4.50, 755),
('Pants', 'London, UK', 4.70, 914),
('Hoodies | Sweatshirts', 'Kyoto, Japan', 4.80, 833),
('Shoes', 'Paris, France', 4.70, 2025),
('Coats | Blazers', 'Paris, France', 4.60, 234);

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `type` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `rating` decimal(6,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`type`, `location`, `rating`, `stock`) VALUES
('Mobile Phones', 'Silicon Valley, USA', 4.80, 2034),
('Tablets', 'Shenzhen, China', 4.80, 752),
('Laptops', 'Tokyo, Japan', 4.70, 3200),
('Gamestations', 'Seoul, South Korea', 4.90, 267),
('VRs', 'Taipei, Taiwan', 4.50, 55),
('Tvs', 'Munich, Germany', 4.90, 1013),
('Speakers', 'Bangalore, India', 4.70, 456),
('Earphones', 'Guadalajara, Mexico', 4.80, 3678);

-- --------------------------------------------------------

--
-- Table structure for table `furnitures_and_homedecor`
--

CREATE TABLE `furnitures_and_homedecor` (
  `type` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `rating` decimal(6,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furnitures_and_homedecor`
--

INSERT INTO `furnitures_and_homedecor` (`type`, `location`, `rating`, `stock`) VALUES
('Chairs', 'Milan, Italy', 4.90, 834),
('Tables', 'Copenhagen, Denmark', 4.90, 482),
('Beds', 'Shenzhen, China', 4.70, 369),
('Sofas', 'Istanbul, Turkey', 4.80, 241),
('Fans', 'London, UK', 4.80, 642),
('Lamps', 'North Carolina, USA', 4.70, 156),
('Closets', 'Paris, France', 4.90, 234);

-- --------------------------------------------------------

--
-- Table structure for table `groceries`
--

CREATE TABLE `groceries` (
  `type` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `rating` decimal(6,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groceries`
--

INSERT INTO `groceries` (`type`, `location`, `rating`, `stock`) VALUES
('Vegetables', 'Tokyo, Japan', 4.70, 2314),
('Fruits', 'Barcelona, Spain', 4.80, 1163),
('Dry Fruits', 'London, UK', 4.70, 820),
('Proteins', 'Istanbul, Turkey', 4.90, 699),
('Carbohydrates', 'Seattle, USA', 4.60, 987),
('Fats', 'Mexico City, Mexico', 4.50, 1552),
('Oils', 'Melbourne, Australia', 4.60, 757);

-- --------------------------------------------------------

--
-- Table structure for table `health_and_grooming`
--

CREATE TABLE `health_and_grooming` (
  `type` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `rating` decimal(6,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health_and_grooming`
--

INSERT INTO `health_and_grooming` (`type`, `location`, `rating`, `stock`) VALUES
('Trimmers', 'Paris, France', 4.90, 159),
('Razors', 'New York, USA', 4.80, 421),
('Perfumes', 'London, UK', 4.80, 4008),
('Medicines', 'London, UK', 4.50, 1092),
('Deodorants', 'London, UK', 4.70, 1527);

-- --------------------------------------------------------

--
-- Table structure for table `miscellaneous`
--

CREATE TABLE `miscellaneous` (
  `type` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `rating` decimal(6,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `miscellaneous`
--

INSERT INTO `miscellaneous` (`type`, `location`, `rating`, `stock`) VALUES
('Bottles', 'Buenos Aires, Argentina', 4.60, 2253),
('Pen and Pencils', 'New York, USA', 4.80, 1111),
('Bags', 'London, UK', 4.70, 3542),
('Suitcases', 'Melbourne, Australia', 4.70, 1341),
('Containers', 'Mumbai, India', 4.90, 4670);

-- --------------------------------------------------------

--
-- Table structure for table `sports_gear`
--

CREATE TABLE `sports_gear` (
  `type` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `rating` decimal(6,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports_gear`
--

INSERT INTO `sports_gear` (`type`, `location`, `rating`, `stock`) VALUES
('Cleats', 'Herzogenaurach, Germany', 4.80, 899),
('Footballs', 'Portland, USA', 4.90, 344),
('Cricket Bats', 'Dongguan, China', 4.70, 1561),
('Basketballs', 'Tokyo, Japan', 4.80, 1002),
('Jerseys', 'São Paulo, Brazil', 4.60, 3228),
('Racquets', 'Paris, France', 4.70, 478),
('Shuttles', 'Melbourne, Australia', 4.80, 540),
('Volleyballs', 'London, UK', 4.60, 789);

-- --------------------------------------------------------

--
-- Table structure for table `toiletries`
--

CREATE TABLE `toiletries` (
  `type` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `rating` decimal(6,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toiletries`
--

INSERT INTO `toiletries` (`type`, `location`, `rating`, `stock`) VALUES
('Soaps', 'Paris, France', 4.90, 1430),
('Shampoo', 'Seoul, South Korea', 4.80, 753),
('Body Wash', 'London, UK', 4.90, 3152),
('Toilet Paper', 'Guangzhou, China', 4.60, 193),
('Moisturizers', 'New York City, USA', 4.70, 867),
('Detergents', 'London, UK', 4.60, 2345);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`) VALUES
('colin', 'colin@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
