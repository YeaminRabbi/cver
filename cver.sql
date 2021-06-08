-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 10:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cver`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `care_giver_users`
--

CREATE TABLE `care_giver_users` (
  `id` int(11) NOT NULL,
  `cg_username` varchar(255) NOT NULL,
  `cg_email` varchar(255) NOT NULL,
  `cg_dob` date NOT NULL,
  `cg_nid` varchar(255) NOT NULL,
  `cg_experience` varchar(255) NOT NULL,
  `cg_phone` varchar(255) NOT NULL,
  `cg_blood_group` varchar(255) NOT NULL,
  `cg_address` varchar(255) NOT NULL,
  `cg_resume` varchar(255) NOT NULL,
  `approve_status` varchar(255) NOT NULL,
  `cg_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `care_giver_users`
--

INSERT INTO `care_giver_users` (`id`, `cg_username`, `cg_email`, `cg_dob`, `cg_nid`, `cg_experience`, `cg_phone`, `cg_blood_group`, `cg_address`, `cg_resume`, `approve_status`, `cg_image`, `created_at`) VALUES
(29, 'raisul', 'raisulislam@hagumutu.com', '1995-03-18', '', '10', '12345678', 'A+', 'bosti area', 'cg_resume/', '1', 'cg_profile_picture/182856249_609093117151128_6612734002236610243_n.jpg', '2021-05-04 22:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `cg_hiring`
--

CREATE TABLE `cg_hiring` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cg_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cg_hiring`
--

INSERT INTO `cg_hiring` (`id`, `user_id`, `cg_id`, `start_date`, `end_date`, `created_at`) VALUES
(16, 6, 27, '2021-05-12', '2021-05-15', '2021-05-12 14:41:51'),
(17, 8, 18, '2021-05-25', '2021-05-29', '2021-05-17 19:38:55'),
(18, 9, 24, '2021-06-29', '2021-07-03', '2021-05-17 19:39:10'),
(19, 7, 29, '2021-06-10', '2021-06-26', '2021-06-08 13:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `cylinder`
--

CREATE TABLE `cylinder` (
  `id` int(11) NOT NULL,
  `os_id` int(11) NOT NULL,
  `cylinder_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cylinder`
--

INSERT INTO `cylinder` (`id`, `os_id`, `cylinder_name`, `type`, `quantity`, `price`) VALUES
(1, 6, 'TOTO cylinder', '1500', 5, '1000'),
(2, 6, 'TOTO cylinder 2', '1700', 15, '2000'),
(3, 6, 'AFA rr', '2400', 15, '10002'),
(6, 5, 'China Cylinder', '1700', 25, '5500'),
(7, 5, 'TOTO cylinder 2', '2400', 5, '1000');

-- --------------------------------------------------------

--
-- Table structure for table `os_users`
--

CREATE TABLE `os_users` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_license_date` date NOT NULL,
  `company_phone` varchar(255) NOT NULL,
  `company_location` varchar(255) NOT NULL,
  `company_license` varchar(255) NOT NULL,
  `approve_status` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL DEFAULT '123'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `os_users`
--

INSERT INTO `os_users` (`id`, `company_name`, `company_email`, `company_license_date`, `company_phone`, `company_location`, `company_license`, `approve_status`, `password`) VALUES
(2, 'TOTO 2', 'lonesurvivor201755@gmail.com', '2021-05-13', '01768002727', 'asdasd', 'os_license/my resume.pdf', 1, '123'),
(5, 'TOTO 4\r\n', 'munnaf91@gmail.com', '2021-05-11', '01950845204', 'asdasdasd', 'os_license/my resume22.pdf', 1, '123'),
(6, 'test', 'test@gmail.com', '2021-06-18', '01950845204', 'Mohammadpur', 'os_license/Final Assignment -2 (Queue Model) (1).pdf', 1, '123');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `nid` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `patient_type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `dob`, `nid`, `phone`, `blood_group`, `address`, `patient_type`, `password`, `created_at`) VALUES
(7, 'Israt Jahan', 'isujahanmoni@gmail.com', '1998-03-27', '111222333444555', '01979135717', 'A+', 'old town,milbarack police line', 'MENTAL_DISORDER', '123456', '2021-05-04 15:42:45'),
(8, 'Raisul ', 'lonesurvivor201755@gmail.com', '1998-03-27', '3761271067', '1799654724', 'B+', 'Mohammadpur Housing limited 1,house-30', 'CANCER', '123456', '2021-05-04 15:43:07'),
(9, 'Mirza', 'cantrememberpasshelp@gmai.com', '1991-12-24', '8888888888888888888', '16546400666', 'B+', 'dhanmondi', 'Lungs', '8888888888888888888', '2021-05-04 15:46:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `care_giver_users`
--
ALTER TABLE `care_giver_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cg_hiring`
--
ALTER TABLE `cg_hiring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cylinder`
--
ALTER TABLE `cylinder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `os_users`
--
ALTER TABLE `os_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `care_giver_users`
--
ALTER TABLE `care_giver_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cg_hiring`
--
ALTER TABLE `cg_hiring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cylinder`
--
ALTER TABLE `cylinder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `os_users`
--
ALTER TABLE `os_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
