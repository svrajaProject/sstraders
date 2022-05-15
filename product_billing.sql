-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2022 at 10:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance_details`
--

CREATE TABLE `balance_details` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `load_id` int(11) NOT NULL,
  `product_name_baseunite` varchar(50) NOT NULL,
  `collecting_amount` varchar(200) NOT NULL,
  `collected_date` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balance_details`
--

INSERT INTO `balance_details` (`id`, `customer_id`, `product_id`, `load_id`, `product_name_baseunite`, `collecting_amount`, `collected_date`) VALUES
(1, 1, 1, 0, 'Marshal 100 ml', '1000', '2022-03-01'),
(2, 1, 1, 0, 'Marshal 100 ml', '1000', '2022-03-02'),
(3, 2, 1, 0, 'Marshal 100 ml', '1000', '2022-03-03'),
(4, 1, 1, 3, 'Marshal 100 ml', '200', '2022-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(25) NOT NULL,
  `added_date` datetime NOT NULL,
  `is_Active` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `added_date`, `is_Active`) VALUES
(1, 'SUN FLOWER', '2022-02-19 13:33:24', 1),
(2, 'PARASHOOT', '2022-02-19 13:33:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers_bills`
--

CREATE TABLE `customers_bills` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `balance` varchar(150) NOT NULL,
  `Is_paid` tinyint(2) NOT NULL DEFAULT 0,
  `paid_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers_detail`
--

CREATE TABLE `customers_detail` (
  `id` int(5) NOT NULL,
  `customer_code` varchar(50) NOT NULL,
  `customer_fname` varchar(30) CHARACTER SET latin1 NOT NULL,
  `customer_lname` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `customer_email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `customer_mobile1` varchar(45) CHARACTER SET latin1 NOT NULL,
  `customer_mobile2` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `customer_store_name` varchar(45) CHARACTER SET latin1 NOT NULL,
  `customer_store_address` varchar(150) CHARACTER SET latin1 NOT NULL,
  `GST_number` varchar(120) DEFAULT NULL,
  `added_date_time` varchar(150) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_removed` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_detail`
--

INSERT INTO `customers_detail` (`id`, `customer_code`, `customer_fname`, `customer_lname`, `customer_email`, `customer_mobile1`, `customer_mobile2`, `customer_store_name`, `customer_store_address`, `GST_number`, `added_date_time`, `is_active`, `is_removed`) VALUES
(1, 'RA007', 'Raja', '', '', '9626768339', '', 'Raja Departmental Store', 'Saravanampatti', '', '2022-03-28 04:48:49 PM', 1, 0),
(2, 'T23', 'tinku', '', '', '78923698745', '', 'tinkustore', 'chennai', '', '2022-03-28 04:55:05 PM', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `load_detail`
--

CREATE TABLE `load_detail` (
  `id` int(11) NOT NULL,
  `load_id` int(2) DEFAULT NULL,
  `product_id` tinyint(1) DEFAULT NULL,
  `customer_id` tinyint(1) DEFAULT NULL,
  `brand_id` int(2) DEFAULT NULL,
  `product_name_baseunite` varchar(55) DEFAULT NULL,
  `container_id` int(2) DEFAULT NULL,
  `liter_price` varchar(50) DEFAULT NULL,
  `total_liters` varchar(25) DEFAULT NULL,
  `per_container_price` varchar(170) DEFAULT NULL,
  `total_container_price` varchar(200) DEFAULT NULL,
  `collected_amount` varchar(25) DEFAULT NULL,
  `balance_amount` varchar(25) DEFAULT NULL,
  `total_containers` int(11) DEFAULT NULL,
  `loading_date` varchar(70) DEFAULT NULL,
  `added_date_time` varchar(70) DEFAULT NULL,
  `is_enabeld` tinyint(1) DEFAULT 1,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `load_detail`
--

INSERT INTO `load_detail` (`id`, `load_id`, `product_id`, `customer_id`, `brand_id`, `product_name_baseunite`, `container_id`, `liter_price`, `total_liters`, `per_container_price`, `total_container_price`, `collected_amount`, `balance_amount`, `total_containers`, `loading_date`, `added_date_time`, `is_enabeld`, `status`) VALUES
(1, 1, 1, 1, 1, 'Marshal 100 ml', 1, '200', '20', '2000', '4000', '2000', '2000', 2, '2022-03-28', '2022-03-28 04:58:51 PM', 1, 1),
(2, 2, 1, 2, 1, 'Marshal 100 ml', 1, '200', '30', '2000', '6000', '1000', '5000', 3, '2022-03-29', '2022-03-28 04:59:09 PM', 1, 1),
(3, 3, 1, 1, 1, 'Marshal 100 ml', 1, '200', '10', '2000', '2000', '300', '1700', 1, '2022-03-29', '2022-03-28 05:04:43 PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `load_type`
--

CREATE TABLE `load_type` (
  `id` int(11) NOT NULL,
  `load_name` varchar(20) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `weekdays` varchar(20) NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `load_type`
--

INSERT INTO `load_type` (`id`, `load_name`, `shift`, `weekdays`, `status`) VALUES
(1, 'Load1', 'Forenoon', 'Tuesday', 1),
(2, 'Load2', 'Forenoon', 'Wednesday', 1),
(3, 'Load3', 'afternoon', 'Thursday', 1),
(4, 'Counter  Sale', 'No shift bases', 'No days base', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products_detail`
--

CREATE TABLE `products_detail` (
  `id` int(20) NOT NULL,
  `product_code` varchar(55) CHARACTER SET latin1 DEFAULT NULL,
  `brand_id` int(2) NOT NULL,
  `product_name_baseunite` varchar(55) CHARACTER SET latin1 DEFAULT NULL,
  `container_id` int(2) DEFAULT NULL,
  `per_container_price` float DEFAULT NULL,
  `GST_rate` float DEFAULT NULL,
  `product_total_GST_amount` float DEFAULT NULL,
  `added_date_time` varchar(70) DEFAULT NULL,
  `updated_date_time` varchar(70) CHARACTER SET latin1 DEFAULT NULL,
  `is_enabled` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_detail`
--

INSERT INTO `products_detail` (`id`, `product_code`, `brand_id`, `product_name_baseunite`, `container_id`, `per_container_price`, `GST_rate`, `product_total_GST_amount`, `added_date_time`, `updated_date_time`, `is_enabled`) VALUES
(1, NULL, 1, 'Marshal 100 ml', 1, 2000, NULL, NULL, '2022-03-28 04:57:23 PM', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_container`
--

CREATE TABLE `product_container` (
  `id` int(11) NOT NULL,
  `container_type_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_container`
--

INSERT INTO `product_container` (`id`, `container_type_name`) VALUES
(1, 'Box'),
(2, 'Tin');

-- --------------------------------------------------------

--
-- Table structure for table `product_import`
--

CREATE TABLE `product_import` (
  `id` int(11) NOT NULL,
  `brand_id` int(2) NOT NULL,
  `product_name_baseunite` varchar(55) CHARACTER SET latin1 NOT NULL,
  `container_id` int(2) NOT NULL,
  `liter_price` varchar(50) CHARACTER SET latin1 NOT NULL,
  `total_liters` varchar(25) CHARACTER SET latin1 NOT NULL,
  `per_container_price` varchar(170) CHARACTER SET latin1 NOT NULL,
  `total_container_price` varchar(200) CHARACTER SET latin1 NOT NULL,
  `total_containers` int(11) NOT NULL,
  `product_id` int(2) NOT NULL,
  `Updated_date_time` varchar(70) DEFAULT NULL,
  `imported_date_time` varchar(70) NOT NULL,
  `Is_active` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_import`
--

INSERT INTO `product_import` (`id`, `brand_id`, `product_name_baseunite`, `container_id`, `liter_price`, `total_liters`, `per_container_price`, `total_container_price`, `total_containers`, `product_id`, `Updated_date_time`, `imported_date_time`, `Is_active`) VALUES
(1, 1, 'Marshal 100 ml', 1, '200', '0', '2000', '0', 0, 1, '2022-03-28 04:59:09 PM', '2022-03-28 04:57:35 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_price`
--

CREATE TABLE `product_price` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `container_id` int(2) DEFAULT NULL,
  `product_name_baseunite` varchar(55) NOT NULL,
  `liter_price` varchar(50) NOT NULL,
  `container_liter` varchar(50) NOT NULL,
  `container_count` varchar(100) NOT NULL,
  `per_container_price` varchar(170) NOT NULL,
  `total_liters` varchar(25) NOT NULL,
  `total_price` varchar(200) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_price`
--

INSERT INTO `product_price` (`id`, `product_id`, `container_id`, `product_name_baseunite`, `liter_price`, `container_liter`, `container_count`, `per_container_price`, `total_liters`, `total_price`) VALUES
(1, 1, 1, 'Marshal 100 ml', '200', '10L', '1', '2000', '10', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `mobil_number`, `role_id`, `photo_name`, `created_date_time`, `created_by`, `address`, `street_name`, `city_name`, `user_status`) VALUES
(1, 'Raja', '', 'raja@gmail.com', '9234567891', 1, 'raja.jpg', '2021-11-24 12:37:11', 'Admin', 'Saravanampatti', 'Coimbatore-North', 'Coimbatore', 1),
(2, 'John', 'Suthan', 'john@gmail.com', '9597534682', 2, 'john.jpg', '2021-11-30 00:00:00', 'Admin', '72/C', 'Kulaiyan karaisal street', 'Tutucorin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_authentication`
--

CREATE TABLE `user_authentication` (
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
-- Dumping data for table `user_authentication`
--

INSERT INTO `user_authentication` (`log_id`, `user_name`, `encrypted_password`, `decrypted_password`, `login_date_time`, `loged_count`, `logout_date_time`, `is_active`) VALUES
(1, 'raja@gmail.com', '12345', '12345', '2021-11-24 12:38:49', 1, '2021-11-24 12:38:49', 1),
(2, 'john@gmail.com', '12345', '12345', '2021-11-30 00:00:00', 1, '2021-11-30 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_authorization`
--

CREATE TABLE `user_authorization` (
  `role_id` int(5) NOT NULL,
  `role_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `created_date_time` datetime NOT NULL,
  `role_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_authorization`
--

INSERT INTO `user_authorization` (`role_id`, `role_name`, `created_date_time`, `role_status`) VALUES
(1, 'Admin', '2021-11-24 12:36:00', 1),
(2, 'Users', '2021-11-24 12:36:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance_details`
--
ALTER TABLE `balance_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_bills`
--
ALTER TABLE `customers_bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_detail`
--
ALTER TABLE `customers_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `load_detail`
--
ALTER TABLE `load_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `load_type`
--
ALTER TABLE `load_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_detail`
--
ALTER TABLE `products_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_container`
--
ALTER TABLE `product_container`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_import`
--
ALTER TABLE `product_import`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_price`
--
ALTER TABLE `product_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `UserId` (`user_id`),
  ADD UNIQUE KEY `EmailId` (`email`);

--
-- Indexes for table `user_authentication`
--
ALTER TABLE `user_authentication`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `logId` (`log_id`),
  ADD UNIQUE KEY `username` (`user_name`);

--
-- Indexes for table `user_authorization`
--
ALTER TABLE `user_authorization`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `RoleId` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balance_details`
--
ALTER TABLE `balance_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers_bills`
--
ALTER TABLE `customers_bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers_detail`
--
ALTER TABLE `customers_detail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `load_detail`
--
ALTER TABLE `load_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `load_type`
--
ALTER TABLE `load_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_detail`
--
ALTER TABLE `products_detail`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_container`
--
ALTER TABLE `product_container`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_import`
--
ALTER TABLE `product_import`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_price`
--
ALTER TABLE `product_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_authentication`
--
ALTER TABLE `user_authentication`
  MODIFY `log_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_authorization`
--
ALTER TABLE `user_authorization`
  MODIFY `role_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
