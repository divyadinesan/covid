-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 01:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hosipital_id` int(10) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `h_email_id` varchar(50) NOT NULL,
  `h_password` varchar(50) NOT NULL,
  `h_phone_number` varchar(30) NOT NULL,
  `h_city` varchar(50) NOT NULL,
  `h_address` varchar(50) NOT NULL,
  `h_exp` varchar(50) NOT NULL,
  `h_exp_certificate` varchar(30) NOT NULL,
  `h_image` varchar(30) NOT NULL,
  `h_status` varchar(40) NOT NULL,
  `h_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hosipital_id`, `h_name`, `h_email_id`, `h_password`, `h_phone_number`, `h_city`, `h_address`, `h_exp`, `h_exp_certificate`, `h_image`, `h_status`, `h_type`) VALUES
(2, 'Unity Hospital', 'unity@gmail.com', '123', ' 04885 222 811', 'Thrissur District, Kunnamkulam', 'J3PJ+6P3, Thrissur-Kunnamkulam Road, Kanipayyur Po', '12', '1681967931.pdf', '1681967931.jpg', 'Approved', 'Admin'),
(4, 'jubilee hospital', 'jubilee@gmail.com', '12345', '9856773421', 'wayanad', 'jhg jhkjhkj', '8', '1681973758.jpg', '1681973758.jpg', 'Approved', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `Patient_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `email`, `password`, `phone_number`, `city`, `address`, `Patient_img`) VALUES
(1, 'Sangeeth K S', 'sangeeth@gmail.com', 'sangeeth', '9446815641', 'Thrissur', 'Christopher Nagar, ollur Thris', '1681966814.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_id` int(15) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `card_name` varchar(50) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `cvc` varchar(30) NOT NULL,
  `expire` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `patient_id` varchar(30) NOT NULL,
  `hospital_id` varchar(30) NOT NULL,
  `patient_email` varchar(30) NOT NULL,
  `hospital_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_id`, `booking_id`, `card_name`, `card_number`, `cvc`, `expire`, `amount`, `patient_id`, `hospital_id`, `patient_email`, `hospital_email`) VALUES
(1, 1, 'sangeeth k', '1122334455667788', '127', '12/27', '500', '1', '2', 'sangeeth@gmail.com', 'unity@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `vaccination_id` int(15) NOT NULL,
  `hospital_id` int(15) NOT NULL,
  `h_email` varchar(50) NOT NULL,
  `V_name` varchar(50) NOT NULL,
  `V_img` varchar(30) NOT NULL,
  `V_description` varchar(500) NOT NULL,
  `V_amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`vaccination_id`, `hospital_id`, `h_email`, `V_name`, `V_img`, `V_description`, `V_amount`) VALUES
(1, 1, 'hitech@gmail.com', 'COVAXIN', '1677567042.jpg', 'COVAXIN®, India\'s indigenous C', '800'),
(2, 1, 'hitech@gmail.com', 'covishield', '1677567385.jpg', 'Covishield is the brand name u', '1000'),
(3, 1, 'hitech@gmail.com', 'sputnik', '1677567452.jpg', 'The Sputnik V vaccine is based', '1200'),
(4, 2, 'mother@gmail.com', 'sinovac', '1677567993.jpg', 'here is currently no substanti', '900'),
(5, 2, 'mother@gmail.com', 'novavax', '1677568441.jpg', 'The Novavax vaccine is a vacci', '500'),
(6, 1, 'hitech@gmail.com', 'sputnik', '1679899166.jpg', 'good', '500');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_booking`
--

CREATE TABLE `vaccine_booking` (
  `booking_id` int(15) NOT NULL,
  `hospital_id` varchar(50) NOT NULL,
  `vaccination_id` varchar(50) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `usr_email` varchar(30) NOT NULL,
  `Vaccine_name` varchar(30) NOT NULL,
  `Booking_date` varchar(30) NOT NULL,
  `Booking_time` varchar(30) NOT NULL,
  `Booking_status` varchar(30) NOT NULL,
  `Payment_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine_booking`
--

INSERT INTO `vaccine_booking` (`booking_id`, `hospital_id`, `vaccination_id`, `user_id`, `usr_email`, `Vaccine_name`, `Booking_date`, `Booking_time`, `Booking_status`, `Payment_status`) VALUES
(1, '2', '5', '1', 'sangeeth@gmail.com', 'Unity Hospital', '2023-04-21', '9:00AM - 10:30AM', 'Approved', 'Payed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hosipital_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`vaccination_id`);

--
-- Indexes for table `vaccine_booking`
--
ALTER TABLE `vaccine_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hosipital_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `vaccination_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vaccine_booking`
--
ALTER TABLE `vaccine_booking`
  MODIFY `booking_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
