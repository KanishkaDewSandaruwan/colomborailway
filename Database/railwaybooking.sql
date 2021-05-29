-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 08:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railwaybooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`image`, `title`, `description`) VALUES
('download (2).jpg', 'White Catchers Gift Wall decor', '<p>fgfgf</p>');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `sch_id` int(255) NOT NULL,
  `booking_date` date NOT NULL,
  `traveller` int(255) NOT NULL,
  `total_amount` int(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `sch_id`, `booking_date`, `traveller`, `total_amount`, `payment`, `status`, `trndate`, `user_id`) VALUES
(5, 2, '2021-05-01', 2, 110, 'Pending', 'Accept', '2021-04-27 04:18:02', 1),
(6, 4, '2021-05-01', 2, 700, 'Pending', 'Accept', '2021-04-27 04:19:03', 1),
(22, 4, '2021-05-01', 3, 1950, 'Pending', 'Pending', '2021-04-28 04:07:38', 1),
(23, 4, '2021-05-03', 3, 1950, 'Pending', 'Pending', '2021-04-28 04:07:54', 1),
(24, 4, '2021-05-01', 2, 1300, 'Pending', 'Pending', '2021-04-28 04:07:13', 1),
(25, 2, '2021-05-04', 4, 80, 'Pending', 'Pending', '2021-04-30 04:19:34', 1),
(26, 5, '2021-05-08', 6, 2700, 'Pending', 'Pending', '2021-04-30 04:19:48', 1),
(27, 5, '2021-05-06', 3, 1050, 'Pending', 'Pending', '2021-04-30 04:19:23', 1),
(28, 5, '2021-05-05', 4, 1400, 'Pending', 'Pending', '2021-04-30 04:19:08', 1),
(29, 5, '2021-05-04', 4, 1400, 'Pending', 'Pending', '2021-04-30 04:19:36', 1),
(30, 2, '2021-05-05', 6, 60, 'Paid', 'Accept', '2021-04-30 04:19:59', 1),
(31, 4, '2021-05-18', 2, 1300, 'Paid', 'Pending', '2021-05-15 05:08:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `header_image` varchar(255) NOT NULL,
  `header_title` varchar(255) NOT NULL,
  `header_desc` varchar(255) NOT NULL,
  `subpage_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`header_image`, `header_title`, `header_desc`, `subpage_image`) VALUES
('post-06.jpg', 'White Catchers Gift Wall decor', 'Order your foods', 'slide2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `full_name`, `address`, `phone_number`, `email`, `gender`, `password`, `username`, `trndate`) VALUES
(2, '', '', 0, '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '2020-11-22 11:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `accept` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `feedback`, `accept`, `trn_date`) VALUES
(1, 'Kanishka Dew', 'kanishkadewsandaruwan@gmail.com', 'hhghghghgh', 'Accept', '2021-04-27 04:20:14'),
(3, 'Kanishka Dew', 'kanishkadewsandaruwan@gmail.com', 'hhghghghgh', 'No', '2021-04-28 04:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `galary`
--

CREATE TABLE `galary` (
  `image_id` int(11) NOT NULL,
  `galary_image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galary`
--

INSERT INTO `galary` (`image_id`, `galary_image`, `title`) VALUES
(14, 'download (2).jpg', 'Handmade Dream  Catchers  medium Gift Wall deco '),
(15, 'download.jpg', 'Logitec Keyboard'),
(16, 'download (2).jpg', 'Prone Rice'),
(17, 'download (1).jpg', 'White Catchers Gift Wall decor');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sch_id` int(11) NOT NULL,
  `train_id` int(255) NOT NULL,
  `depature_time` time NOT NULL,
  `to_station` int(255) NOT NULL,
  `arrive_time` time NOT NULL,
  `distance` varchar(255) NOT NULL,
  `available` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `one_class_price` int(255) NOT NULL,
  `two_class_price` int(255) NOT NULL,
  `tree_class_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sch_id`, `train_id`, `depature_time`, `to_station`, `arrive_time`, `distance`, `available`, `trn_date`, `one_class_price`, `two_class_price`, `tree_class_price`) VALUES
(2, 1, '11:37:00', 3, '16:47:00', '196', 'Yes', '2021-04-26 04:05:38', 55, 20, 10),
(4, 3, '11:35:00', 3, '22:34:00', '123', 'Yes', '2021-04-26 04:19:34', 650, 350, 120),
(5, 1, '11:25:00', 4, '23:25:00', '123', 'Yes', '2021-04-26 04:19:25', 450, 350, 100),
(6, 3, '09:25:00', 3, '09:25:00', '10', 'Yes', '2021-04-27 04:17:04', 350, 120, 10);

-- --------------------------------------------------------

--
-- Table structure for table `seats_calculate`
--

CREATE TABLE `seats_calculate` (
  `seats_calculate_id` int(11) NOT NULL,
  `sch_id` int(255) NOT NULL,
  `book_date` date NOT NULL,
  `one_class_seats` int(255) NOT NULL,
  `two_class_seats` int(255) NOT NULL,
  `tree_class_seats` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats_calculate`
--

INSERT INTO `seats_calculate` (`seats_calculate_id`, `sch_id`, `book_date`, `one_class_seats`, `two_class_seats`, `tree_class_seats`) VALUES
(1, 2, '2021-04-29', 8, 0, 3),
(2, 2, '2021-05-01', 4, 29, 12),
(13, 4, '2021-05-03', 6, 0, 0),
(14, 4, '2021-05-01', 4, 0, 0),
(15, 2, '2021-05-04', 0, 8, 0),
(16, 5, '2021-05-08', 12, 0, 0),
(17, 5, '2021-05-06', 0, 6, 0),
(18, 5, '2021-05-05', 0, 8, 12),
(19, 5, '2021-05-04', 0, 8, 0),
(20, 2, '2021-05-05', 0, 0, 12),
(21, 4, '2021-05-18', 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider_banner`
--

CREATE TABLE `slider_banner` (
  `slider_banner_id` int(11) NOT NULL,
  `slider_banner_01` varchar(255) NOT NULL,
  `slider_banner_02` varchar(255) NOT NULL,
  `slider_banner_03` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_banner`
--

INSERT INTO `slider_banner` (`slider_banner_id`, `slider_banner_01`, `slider_banner_02`, `slider_banner_03`, `title`, `description`) VALUES
(25, '22.jpg', 'dark_bg_img.png', 'post-08.jpg', 'dsdsdsd', 'ssdsdsdsdsdsds');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `station_id` int(11) NOT NULL,
  `Station_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`station_id`, `Station_name`) VALUES
(1, 'Colombo Fort'),
(3, 'Mathara'),
(4, 'Maradana');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `train_id` int(11) NOT NULL,
  `train_name` varchar(255) NOT NULL,
  `one_class_seats` int(255) NOT NULL,
  `two_class_seats` int(255) NOT NULL,
  `tree_class_seats` int(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_id`, `train_name`, `one_class_seats`, `two_class_seats`, `tree_class_seats`, `details`) VALUES
(1, 'Udarata Manike', 50, 30, 10, '<p>asfsfdfafas</p>'),
(3, 'Ruhunu Kumari', 10, 20, 120, '<p>Hello</p><ul><li>Wifi</li><li>Canteen</li><li>AC</li><li>Fan</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `unavailable`
--

CREATE TABLE `unavailable` (
  `un_id` int(11) NOT NULL,
  `sch_id` int(255) NOT NULL,
  `un_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unavailable`
--

INSERT INTO `unavailable` (`un_id`, `sch_id`, `un_date`) VALUES
(1, 2, '2021-04-20'),
(2, 2, '2021-04-15'),
(3, 2, '2021-04-15'),
(6, 2, '2021-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `phone`, `email`, `address`, `password`, `nic`) VALUES
(1, 'Kanishka Dew', 713664075, 'kanishkadewsandaruwan@gmail.com', 'Banwalgodalla, Kosmulla, Galle', 'e10adc3949ba59abbe56e057f20f883e', '962670423V');

-- --------------------------------------------------------

--
-- Table structure for table `user_backup`
--

CREATE TABLE `user_backup` (
  `backup_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `galary`
--
ALTER TABLE `galary`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sch_id`);

--
-- Indexes for table `seats_calculate`
--
ALTER TABLE `seats_calculate`
  ADD PRIMARY KEY (`seats_calculate_id`);

--
-- Indexes for table `slider_banner`
--
ALTER TABLE `slider_banner`
  ADD PRIMARY KEY (`slider_banner_id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`station_id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`train_id`);

--
-- Indexes for table `unavailable`
--
ALTER TABLE `unavailable`
  ADD PRIMARY KEY (`un_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_backup`
--
ALTER TABLE `user_backup`
  ADD PRIMARY KEY (`backup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galary`
--
ALTER TABLE `galary`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seats_calculate`
--
ALTER TABLE `seats_calculate`
  MODIFY `seats_calculate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `slider_banner`
--
ALTER TABLE `slider_banner`
  MODIFY `slider_banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `train_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unavailable`
--
ALTER TABLE `unavailable`
  MODIFY `un_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_backup`
--
ALTER TABLE `user_backup`
  MODIFY `backup_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
