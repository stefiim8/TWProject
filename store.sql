-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 11:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Apothic Red', 30),
(2, 'Apothic Rose', 35),
(3, 'Bolla Chianti', 45),
(4, 'Cavit Pinot Grigio', 40),
(5, 'Chateau Ste Michelle Sauvignon Blanc', 60),
(6, 'La Vieille Ferme Rouge', 55),
(7, 'Josh Cellars Cabernet Sauvignon', 50),
(8, 'Josh Cellars Chardonnay', 45),
(9, 'Kim Crawford Sauvignon Blanc', 30),
(10, 'La Vieille Ferme Rose', 40),
(11, 'Moet & Chandon Imperial Brut Champagne', 200),
(12, 'Matua Rose', 80),
(13, 'Dark Hores Pinot Noir', 60),
(14, 'Josh Cellars Rose', 40),
(15, 'Meiomi Pinot Noir', 90),
(16, 'Whispering Angel Rose', 75),
(17, 'Bacardi Black Rum', 50),
(18, 'Bacardi Gold Rum', 50),
(19, 'Bacardi Limon', 60),
(20, 'Bacardi Superior Rum', 70),
(21, 'Captain Morgan', 80),
(22, 'Diplomatico Rum', 70),
(23, 'Flor De Cana', 100),
(24, 'Goslings Black Rum', 70),
(25, 'Malibu Coconut ', 90),
(26, 'Zacapa', 70),
(27, 'Sailor Jerry', 60),
(28, 'The Kraken', 80),
(29, 'Cohiba White', 20),
(30, 'Cigaronne Slims', 25),
(31, 'Davidoff Classic', 20),
(32, 'Davidoff Blue', 20),
(33, 'Davidoff Shape Evolved Blue', 20),
(34, 'Davidoff Silver Classic', 20),
(35, 'Davidoff Superslim Silver', 20),
(36, 'Davidoff Superslim Rose', 20),
(37, 'Brass Red 100\'s', 20),
(38, 'Davidoff Classic Slim', 20),
(39, 'Davidoff Gold Classic', 20),
(40, 'Davidoff Reach Silver', 20),
(41, 'Davidoff Shape Evolved Red', 20),
(42, 'Davidoff Superslim Gold', 20),
(43, 'Davidoff Superslim Magneta', 20),
(44, 'King Original Red 100\'s', 20),
(45, 'Angels Envy', 60),
(46, 'Basil Hayden', 70),
(47, 'Blantons Single', 90),
(48, 'Buffalo Trace', 70),
(49, 'Bulleit Bourbon', 70),
(50, 'Elijah Craig', 100),
(51, 'Evan Williams', 70),
(52, 'Four Roses', 70),
(53, 'High West', 80),
(54, 'Jack Daniel\'s', 90),
(55, 'Jim Bean', 70),
(56, 'Knob Creek', 50),
(57, 'Legent Bourbon', 60),
(58, 'Makers Mark', 80),
(59, 'Wild Turkey', 70),
(60, 'Woodfort Reserve', 90),
(61, 'Absolut Vodka', 70),
(62, 'Amsterdam Vodka', 60),
(63, 'Belvedere Vodka', 80),
(64, 'Ciroc Vodka', 80),
(65, 'Eddy Vodka', 90),
(66, 'Georgi Vodka', 50),
(67, 'Grey Vodka', 80),
(68, 'Ketel Vodka', 90),
(69, 'Pinnacle Vodka', 60),
(70, 'Platinum Vodka', 90),
(71, 'Skyy Vodka', 70),
(72, 'Smirnoff Vodka', 100),
(73, 'Stoli Vodka', 90),
(74, 'Svedka Vodka', 60),
(75, 'Taaka Vodka', 80),
(76, 'Tito Vodka', 60),
(77, 'Amsterdam Gin', 80),
(78, 'Aviation Gin', 90),
(79, 'Beefater Gin', 60),
(80, 'Bombay Saphire', 90),
(81, 'Botanist Gin', 60),
(82, 'Empress Gin', 80),
(83, 'Fords Gin', 90),
(84, 'George Gin', 60),
(85, 'Gordon Gin', 80),
(86, 'Hendrick\'s Gin', 100),
(87, 'Monkey Gin', 80),
(88, 'Playmouth Gin', 50),
(89, 'Roku Gin', 80),
(90, 'Seagram', 90),
(91, 'Sipsmith', 70),
(92, 'Tanqueray Gin', 90);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(5, 'Test', 'asdf2@asdf.ra', 'ac5698c5b11c8baf5a6ff86dc449d791', 'asdf', 'asdf', 'asdf'),
(6, 'asdf', 'test@test.com', 'a332430f6502c3a99e2b0d5a42e0db8f', 'asdf', 'asdf', 'asdf'),
(7, 'asdf2', 'test2@test.com', 'dd44cdc68dd2ca30d640f868885f1ebc', 'asdfasdf', 'asdf', 'asdf'),
(8, 'Test', 'test3@test.com', 'dd44cdc68dd2ca30d640f868885f1ebc', 'asdf', 'asdf', 'asdf'),
(9, 'Test', 'test4@test.com', '14e1b600b1fd579f47433b88e8d85291', 'asdf', 'asdf', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(18, 5, 1, 'Confirmed'),
(19, 5, 7, 'Confirmed'),
(20, 5, 3, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
