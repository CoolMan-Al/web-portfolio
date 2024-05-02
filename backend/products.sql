-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2024 at 05:34 PM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c3634134`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int NOT NULL,
  `productName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `productPrice` double NOT NULL,
  `productImageName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `category`, `productPrice`, `productImageName`) VALUES
(1, 'Mug', 'home', 3.99, 'mug.png'),
(2, 'T-Shirt', 'clothes', 11.99, 'tshirt.png'),
(3, 'Book', 'stationary', 6.99, 'book.png'),
(4, 'Calendar', 'home', 11.99, 'calendar.png'),
(5, 'Cap', 'clothes', 6.99, 'cap.png'),
(15, 'Plate', 'home', 3.99, 'plate.png'),
(16, 'Cutlery', 'home', 2.99, 'cutlery.png'),
(17, 'Coffee', 'food', 5.99, 'coffee.png'),
(18, 'Tissue', 'home', 3.99, 'tissue.png'),
(19, 'Butter', 'food', 1.49, 'butter.png'),
(20, 'Chocolate', 'food', 2.49, 'chocolate.png'),
(21, 'Milk', 'food', 1.99, 'milk.png'),
(22, 'Chicken', 'food', 6.99, 'chicken.png'),
(23, 'Jeans', 'clothes', 14.99, 'jeans.png'),
(24, 'Hoodie', 'clothes', 32.99, 'hoodie.png'),
(25, 'Trainers', 'clothes', 129.99, 'shoes.png'),
(26, 'Keyboard', 'computer', 64.99, 'keyboard.png'),
(27, 'Mouse', 'computer', 24.99, 'mouse.png'),
(28, 'Speakers', 'computer', 32.99, 'speaker.png'),
(29, 'Monitor', 'computer', 120.99, 'monitor.png'),
(30, 'Headphones', 'computer', 32.99, 'headphones.png'),
(31, 'Pen', 'stationary', 1.99, 'pen.png'),
(32, 'Ruler', 'stationary', 0.99, 'ruler.png'),
(33, 'Pencil', 'stationary', 0.99, 'pencil.png'),
(34, 'Rubber', 'stationary', 1.99, 'rubber.png'),
(35, 'Calculator', 'stationary', 15.99, 'calculator.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
