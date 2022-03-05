-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 05:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `number` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `Service_date` date NOT NULL,
  `Service_requirment` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `password`, `number`, `date_of_birth`, `address`, `Service_date`, `Service_requirment`, `message`) VALUES
(44, 'gyanesh', 'gyanesh.rana07@gmail.com', '123456', '9302730086', '0000-00-00', 'balaghat', '0000-00-00', 'TV Repair', 'Configuration kya h call me 9165454997'),
(45, 'SHEETAL KAMDI', 'sheetalkamdi22@gmail.com', '12345', '9753515364', '0000-00-00', 'WARD NO 16 AT CHHINDGAON POST RAJEGAON TAH KIRNAPUR DIST BALAGHAT', '0000-00-00', 'Desktop Repair', 'Configuration kya h call me 9165454997'),
(46, 'Prashant gader', 'rohitdigitalonebox86@gmail.com', 'prashant123', '7747991393', '0000-00-00', 'villege-sawri ,Post- katedra Tah-tirodi Dis-balaghat(MP)', '0000-00-00', 'ac repair', 'null'),
(47, 'umesh', 'khileshtembhare28@gmail.com', 'rohit10@', '7747991393', '2021-05-14', 'balaghat mp', '2021-04-30', 'Cooler Repair', 'null'),
(49, 'Rahul rahangdale', 'rahul13838@gmail.com', 'rahul1020', '1233441232', '2021-06-26', 'villege-sawri ,Post- katedra Tah-tirodi Dis-balaghat(MP)', '2021-07-09', 'Waching Machine Repair', 'no'),
(50, 'kapil gupta', 'gupta123@gmail.com', 'kapil123', '7747991393', '2021-06-11', 'balaghat mp', '2021-06-26', 'Desktop Repair', 'kdkkdkdkd'),
(51, 'PRIYA', 'priya.balley34@gmail.com', 'priya123', '7747991393', '2021-06-01', 'villege-sawri ,Post- katedra Tah-tirodi Dis-balaghat(MP)', '2021-06-18', 'Desktop Repair', 'getting homre '),
(54, 'uma  lilhare', 'uma123@gmail.com', 'uma123', '2123344444', '2000-01-05', 'balaghat mp', '2021-06-09', 'TV Repair', 'Led tv not display');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `subject`, `status`) VALUES
(1, 'dfdf', 'hgfhf', 1),
(2, 'dfdf', 'hgfhf', 1),
(3, 'Hello Rana', 'gyanesh rana', 1),
(4, 'Hello Rana', 'gyanesh rana', 1),
(5, 'jkhkj kjhkj kjh ', 'gyanesh rana', 1),
(6, 'kljkl lkjlkjlk', 'gggg', 1),
(7, ',khl lkj lkj l', 'hkjh', 1),
(8, ',khl lkj lkj l', 'hkjh', 1),
(9, ',khl lkj lkj l', 'hkjh', 1),
(10, ',khl lkj lkj l', 'hkjh', 1),
(11, ',mk', 'gyanesh rana', 1),
(12, ',mk', 'gyanesh rana', 1),
(13, ',jlk', 'gyanesh rana', 1),
(14, ',jlk', 'gyanesh rana', 1),
(15, ',jlk', 'gyanesh rana', 1),
(16, ',jlk', 'gyanesh rana', 1),
(17, ',jlk', 'gyanesh rana', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fname`, `lname`, `email`, `mobile`, `msg`, `status`) VALUES
(1, 'SHEETAL', 'KAMDI', 'sheetalkamdi22@gmail.com', '9753515364', 'fdsfsdf', 1),
(2, 'SHEETAL', 'KAMDI', 'sheetalkamdi22@gmail.com', '9753515364', '', 1),
(3, 'ABHILASH', 'YADAV', 'abhilashyadav402@gmail.com', '7723984930', 'hello', 1),
(4, 'GAYTRI', 'YADAV', 'basiccomputer448@gmail.com', '9302730086', 'hhh', 1),
(5, 'Linchi', 'Thakre', 'linchithakre2911@gmail.com', '7247421267', 'hello', 1),
(6, 'rohit', 'rahangdale', 'rahangdaler098@gmail.com', '7747991393', ' helo give your no.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `token` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`) VALUES
(1, 'gyanesh.rana07@gmail.com', '516275'),
(2, 'gyanesh.rana07@gmail.com', '131170'),
(3, 'gyanesh.rana07@gmail.com', '177572'),
(4, 'gyanesh.rana07@gmail.com', '992195'),
(5, 'gyanesh.rana07@gmail.com', '140214'),
(6, 'gyanesh.rana07@gmail.com', '952555'),
(7, 'gyanesh.rana07@gmail.com', '513021'),
(8, 'gyanesh.rana07@gmail.com', '940732'),
(9, 'gyanesh.rana07@gmail.com', '677740'),
(10, 'gyanesh.rana07@gmail.com', '276117'),
(11, 'gyanesh.rana07@gmail.com', '888367');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `name`, `email`, `mobile`, `address`) VALUES
(1, 'ROHIT RAHANGDALE ', 'rahangdaler098@gmail.com', '7747991393', 'balaghat');

-- --------------------------------------------------------

--
-- Table structure for table `repairman`
--

CREATE TABLE `repairman` (
  `id` int(225) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `ragistrationdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repairman`
--

INSERT INTO `repairman` (`id`, `name`, `email`, `mobile`, `address`, `service`, `ragistrationdate`) VALUES
(3, 'ROHIT RAHANGDALE', 'deshmukhprashant896@gmail.com', '7747991393', 'wwwww', 'RO/Water Repair', '2021-06-19'),
(7, 'sushma', 'suman123@gmail.com', '7747991393', 'balaghat', 'Waching Machine Repair', '2021-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mobile`, `password`) VALUES
(1, 'Rohit', 'rahangdaler098@gmail.com', '9165454997', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `email_id`, `password`) VALUES
(1, 'gyan', 'gyanesh.rana07@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repairman`
--
ALTER TABLE `repairman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `repairman`
--
ALTER TABLE `repairman`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
