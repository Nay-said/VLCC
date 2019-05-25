-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 03:56 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vlcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `productname` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`name`, `email`, `message`) VALUES
('colin', '123@abc', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `usertitle` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `suburb` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `postcode` int(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `usertitle`, `email`, `phone`, `gender`, `password`, `city`, `suburb`, `address`, `postcode`, `dob`) VALUES
(1, 'Nay_said', 'Colin', 'Weber', 'A', 'Lonie-walker@outlook.com', 1684428, 'A', '123', '12', 'Birkenhead', '13c Felstead Street', 626, '2018-08-08'),
(2, 'Nay-said', 'Colin', 'Weber', 'A', 'Lonie-walker@outlook.com', 1684428, 'A', '123', '12', 'Birkenhead', '13c Felstead Street', 626, '2018-08-08'),
(3, 'Jing_Li', 'Colin', 'Weber', 'A', 'Lonie-walker@outlook.com', 1684428, 'A', '123', '12', 'Birkenhead', '13c Felstead Street', 626, '2018-08-08'),
(4, '1509351', 'Colin', 'Weber', 'A', 'Lonie-walker@outlook.com', 1684428, 'A', '123', '12', 'Birkenhead', '13c Felstead Street', 626, '2018-08-08'),
(5, 'Nay_said96', 'Colin', 'Weber', 'A', 'Lonie-walker@outlook.com', 1684428, 'A', '123', '12', 'Birkenhead', '13c Felstead Street', 626, '2018-08-08'),
(6, '1509351', 'Colin', 'Weber', 'A', 'Lonie-walker@outlook.com', 1684428, 'A', '123', '12', 'Birkenhead', '13c Felstead Street', 626, '2018-08-08'),
(7, 'Is_this_a_name', 'Colin', 'Weber', 'A', 'Lonie-walker@outlook.com', 1684428, 'A', '123', '12', 'Birkenhead', '13c Felstead Street', 626, '2018-08-08'),
(8, 'colin', 'Colin', 'Weber', 'A', 'Lonie-walker@outlook.com', 1684428, 'A', '123', '12', 'Birkenhead', '13c Felstead Street', 626, '2018-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `invoice` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `cardnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
