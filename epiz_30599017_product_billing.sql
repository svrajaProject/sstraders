-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql310.epizy.com
-- Generation Time: Feb 13, 2022 at 07:18 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30599017_product_billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills_detail`
--

CREATE TABLE `bills_detail` (
  `bill_id` int(5) NOT NULL,
  `product_id` tinyint(1) NOT NULL,
  `customer_id` tinyint(1) NOT NULL,
  `product_total_GST_amount` varchar(65) CHARACTER SET latin1 DEFAULT NULL,
  `delivery_date` date NOT NULL,
  `delivery_time` time NOT NULL,
  `uploaded_date` date DEFAULT NULL,
  `uploaded_time` time NOT NULL,
  `current_year` int(11) NOT NULL,
  `user_id` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `is_enabeld` tinyint(1) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills_detail`
--

INSERT INTO `bills_detail` (`bill_id`, `product_id`, `customer_id`, `product_total_GST_amount`, `delivery_date`, `delivery_time`, `uploaded_date`, `uploaded_time`, `current_year`, `user_id`, `is_deleted`, `is_enabeld`, `status`) VALUES
(1, 19, 1, '473.55', '2021-12-14', '09:12:07', '2021-12-18', '12:12:10', 2021, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers_detail`
--

CREATE TABLE `customers_detail` (
  `customer_id` int(5) NOT NULL,
  `customer_fname` varchar(30) CHARACTER SET latin1 NOT NULL,
  `customer_lname` varchar(45) CHARACTER SET latin1 NOT NULL,
  `customer_email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `customer_mobile1` varchar(45) CHARACTER SET latin1 NOT NULL,
  `customer_mobile2` varchar(45) CHARACTER SET latin1 NOT NULL,
  `customer_store_name` varchar(45) CHARACTER SET latin1 NOT NULL,
  `customer_store_contactnumber` varchar(45) CHARACTER SET latin1 NOT NULL,
  `customer_store_address` varchar(150) CHARACTER SET latin1 NOT NULL,
  `customer_store_street` varchar(45) CHARACTER SET latin1 NOT NULL,
  `customer_store_district` varchar(45) CHARACTER SET latin1 NOT NULL,
  `customer_store_city` varchar(45) CHARACTER SET latin1 NOT NULL,
  `customer_store_state` varchar(45) CHARACTER SET latin1 NOT NULL,
  `customer_store_pincode` varchar(45) CHARACTER SET latin1 NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_detail`
--

INSERT INTO `customers_detail` (`customer_id`, `customer_fname`, `customer_lname`, `customer_email`, `customer_mobile1`, `customer_mobile2`, `customer_store_name`, `customer_store_contactnumber`, `customer_store_address`, `customer_store_street`, `customer_store_district`, `customer_store_city`, `customer_store_state`, `customer_store_pincode`, `is_active`) VALUES
(1, 'Jeevi', 'Prakash', 'jeeva@gmail.com', '9638527415', '987456321', 'Jeeva Departmental store', '044 223366', '11/2', 'Nehru Street', 'Thirunelveli', 'Thirunelveli', 'Tamil Nadu', '600007', 1),
(2, 'Vijay', 'Antony', 'vijay001y@gmail.com', '852369741', '912365478', 'Vijay Deparmental store', '044 244558', '12/4', 'Gandhi Street', 'Tiruvallur', 'Tiruvallur', 'Tamil Nadu', '600059', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_detail`
--

CREATE TABLE `products_detail` (
  `product_id` int(5) NOT NULL,
  `product_code` varchar(55) CHARACTER SET latin1 DEFAULT NULL,
  `product_name` varchar(55) CHARACTER SET latin1 DEFAULT NULL,
  `product_quantity` varchar(20) DEFAULT NULL,
  `litre` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `product_price` float NOT NULL,
  `GST_rate` float NOT NULL,
  `product_total_GST_amount` float NOT NULL,
  `stock` int(11) NOT NULL,
  `added_date_time` datetime DEFAULT NULL,
  `updated_date_time` datetime DEFAULT NULL,
  `is_enabled` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_detail`
--

INSERT INTO `products_detail` (`product_id`, `product_code`, `product_name`, `product_quantity`, `litre`, `product_price`, `GST_rate`, `product_total_GST_amount`, `stock`, `added_date_time`, `updated_date_time`, `is_enabled`) VALUES
(4, NULL, 'Groundnut Oil', '1000 ml', '1', 2300, 3, 2369, 50, '2021-12-09 07:56:42', '2021-12-16 06:22:17', 1),
(19, NULL, 'Coconut Oil', '1000 ml', '1', 3800, 2, 3876, 25, '2021-12-11 01:07:51', '2021-12-15 06:36:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `log_id` int(5) NOT NULL,
  `user_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `encrypted_password` varchar(45) CHARACTER SET latin1 NOT NULL,
  `decrypted_password` varchar(45) CHARACTER SET latin1 NOT NULL,
  `login_date_time` datetime NOT NULL,
  `loged_count` int(5) NOT NULL,
  `logout_date_time` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`log_id`, `user_name`, `encrypted_password`, `decrypted_password`, `login_date_time`, `loged_count`, `logout_date_time`, `is_active`) VALUES
(1, 'raja@gmail.com', '12345', '12345', '2021-11-24 12:38:49', 1, '2021-11-24 12:38:49', 1),
(2, 'john@gmail.com', '12345', '12345', '2021-11-30 00:00:00', 1, '2021-11-30 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(5) NOT NULL,
  `role_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `created_date_time` datetime NOT NULL,
  `role_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role_name`, `created_date_time`, `role_status`) VALUES
(1, 'Admin', '2021-11-24 12:36:00', 1),
(2, 'Users', '2021-11-24 12:36:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(5) UNSIGNED NOT NULL,
  `fname` varchar(30) CHARACTER SET latin1 NOT NULL,
  `lname` varchar(45) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `mobil_number` varchar(45) CHARACTER SET latin1 NOT NULL,
  `role_id` int(10) NOT NULL,
  `photo_name` varchar(15) NOT NULL,
  `created_date_time` datetime NOT NULL,
  `created_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `address` varchar(45) CHARACTER SET latin1 NOT NULL,
  `street_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `city_name` varchar(20) CHARACTER SET latin1 NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `fname`, `lname`, `email`, `mobil_number`, `role_id`, `photo_name`, `created_date_time`, `created_by`, `address`, `street_name`, `city_name`, `user_status`) VALUES
(1, 'Raja', '', 'raja@gmail.com', '9234567891', 1, 'raja.jpg', '2021-11-24 12:37:11', 'Admin', 'Saravanampatti', 'Coimbatore-North', 'Coimbatore', 1),
(2, 'John', 'Suthan', 'john@gmail.com', '9597534682', 2, 'john.jpg', '2021-11-30 00:00:00', 'Admin', '72/C', 'Kulaiyan karaisal street', 'Tutucorin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills_detail`
--
ALTER TABLE `bills_detail`
  ADD PRIMARY KEY (`bill_id`),
  ADD UNIQUE KEY `ProductId` (`product_id`),
  ADD UNIQUE KEY `CustomerId` (`customer_id`),
  ADD UNIQUE KEY `UserId` (`user_id`),
  ADD UNIQUE KEY `BillId` (`bill_id`);

--
-- Indexes for table `customers_detail`
--
ALTER TABLE `customers_detail`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products_detail`
--
ALTER TABLE `products_detail`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `logId` (`log_id`),
  ADD UNIQUE KEY `username` (`user_name`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `RoleId` (`role_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `UserId` (`user_id`),
  ADD UNIQUE KEY `EmailId` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills_detail`
--
ALTER TABLE `bills_detail`
  MODIFY `bill_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers_detail`
--
ALTER TABLE `customers_detail`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products_detail`
--
ALTER TABLE `products_detail`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `log_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
