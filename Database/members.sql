-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 06:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysite`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(15) NOT NULL,
  `fname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'John', 'Smith', 'john@test3.com', '$2y$12$.Tv/Cn55yl0lMa1OJBG0H.s/EAHei.5B.09r5VEgMw6VJx2dCn/b2'),
(3, 'Jo', 'Bob', 'jb@gmail.com', '$2y$12$i2t2T46owP4H2kCgLxvZ0uRm3tt8HZHHSC5fFvib/AZYcWM0EnBda'),
(4, 'jo', 'bo', 'jbt@gmail.com', '$2y$12$Jwd8Di8XO1rbiLoWo6qChOL4UxAXvCWo4WhTqQEmVnPdt61Db8Rm.'),
(5, 'Naushad', 'Alam', 'vikram@gmail.com', '$2y$12$nMk5XOSo6mUA7Uly7NomP..k4braoxiU8uUUazpECJZJPK3Ni1Fv.'),
(6, 'xyz', 'yxz', 'xyz@gmail.com', '$2y$12$LRadQSF04.2YyalZiQtKteyIknYFT489S4w9hgK/A84QcNYj3FFsm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
