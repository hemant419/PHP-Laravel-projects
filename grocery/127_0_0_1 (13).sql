-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 09:45 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--
CREATE DATABASE IF NOT EXISTS `grocery` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `grocery`;

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `cart_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `totalamunt` varchar(50) NOT NULL,
  `c_statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`cart_id`, `product_id`, `user_id`, `qty`, `totalamunt`, `c_statas`, `reg_date`) VALUES
(20, 1, 2, '01', '22', 'Active', '2020-06-07 05:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`id`, `name`, `last_name`, `email`, `password`, `mobile`, `gender`, `address`, `city`, `state`, `country`, `pincode`, `image`) VALUES
(5, 'mukesh', 'maurya', 'mukesh@gmail.com', '123', '867675675675', 'male', 'surat', 'surat', 'gujarat', 'india', '394210', '7421b577e01a13a76f8c43e592927199.jpg'),
(6, 'Suraj', 'Bhatt', 'thesurajbhatt@gmail.com', '7990', '7990573362', 'male', '182,kailash', 'surat', 'guj', 'india', '394210', '2c79e3fd772674eefff9106fc639f79d.png');

-- --------------------------------------------------------

--
-- Table structure for table `area_master`
--

CREATE TABLE `area_master` (
  `area_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `area_name` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `area_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `area_statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_master`
--

INSERT INTO `area_master` (`area_id`, `state_id`, `city_id`, `area_name`, `pincode`, `area_date`, `area_statas`) VALUES
(8, 2, 13, 'Udhna', '394210', '2020-03-24 15:05:43', 'Active'),
(9, 4, 15, 'MIRA ROAD', '436646', '2020-02-22 15:12:25', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(10) NOT NULL,
  `s_id` int(11) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `brand_image` varchar(60) NOT NULL,
  `brand_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `brand_statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `s_id`, `brand_name`, `brand_image`, `brand_date`, `brand_statas`) VALUES
(1, 0, 'Patanjali', 'a309e0f36be020195babe02ea8a8055a.jpg', '2020-03-19 18:03:50', 'Active'),
(2, 0, 'Dettol', '94b4374fda83fd6b137341d48eae9c0f.jpg', '2020-03-19 18:09:25', 'Active'),
(3, 0, 'Parle', '240a142c65b71adda0f586a9cff0f437.jpg', '2020-03-19 18:09:41', 'Active'),
(4, 0, 'cocacola', '425dde03bd090ede5cf7be8dede17baf.jpg', '2020-03-19 18:10:11', 'Active'),
(5, 0, 'Mamaearth', '26af358317426608788052986e97b7af.jpg', '2020-03-19 18:10:42', 'Active'),
(6, 2, 'fresh', '62bd47cc72402c9b4be3dae5368b63a8.jpg', '2020-06-10 07:12:16', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `categery_master`
--

CREATE TABLE `categery_master` (
  `categery_id` int(10) NOT NULL,
  `categery_name` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categery_master`
--

INSERT INTO `categery_master` (`categery_id`, `categery_name`, `date`, `statas`) VALUES
(1, 'Fruits & Vegetables', '2020-03-19 17:16:14', 'Active'),
(2, 'Foodgrains,Oil & Masala', '2020-03-19 17:33:41', 'Active'),
(3, 'Dairy', '2020-03-19 17:19:43', 'Active'),
(4, 'Beverages', '2020-03-19 17:20:25', 'Active'),
(5, 'Meat & Fish', '2020-03-19 17:20:54', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `city_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `city_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `city_statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_master`
--

INSERT INTO `city_master` (`city_id`, `state_id`, `city_name`, `city_date`, `city_statas`) VALUES
(1, 2, 'fhbjhf', '2018-03-01 07:43:56', 'Active'),
(4, 2, 'khihb', '2018-02-19 13:56:42', 'Active'),
(5, 2, 'gdgdgddg', '2020-03-24 15:05:51', 'Active'),
(6, 2, 'xxxxxxxxxxxxx', '2018-02-21 13:22:29', 'Active'),
(7, 3, 'eguufe', '2018-02-21 14:25:14', 'Active'),
(8, 3, 'fihfy', '2018-02-21 14:25:22', 'Active'),
(11, 3, 'Pune', '2018-02-26 12:35:20', 'Active'),
(12, 3, 'Mumbai', '2018-02-26 12:35:30', 'Active'),
(13, 2, 'Surat', '2018-02-26 12:35:40', 'Active'),
(14, 2, 'Vapi', '2018-02-26 12:35:55', 'Active'),
(15, 4, 'NOIDA', '2020-02-22 14:35:36', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `contact_master`
--

CREATE TABLE `contact_master` (
  `id` int(10) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_message` varchar(50) NOT NULL,
  `contect_no` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_master`
--

INSERT INTO `contact_master` (`id`, `contact_name`, `contact_email`, `contact_message`, `contect_no`, `date`, `statas`) VALUES
(1, 'Sanjay', 'patil9998@hotmail.com', 'Hello', '7041935727', '2020-04-01 15:21:08', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `cuponcodes`
--

CREATE TABLE `cuponcodes` (
  `cupon_id` int(10) NOT NULL,
  `cupon_code` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_code` varchar(50) NOT NULL,
  `cupon_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cupon_statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuponcodes`
--

INSERT INTO `cuponcodes` (`cupon_id`, `cupon_code`, `email`, `user_code`, `cupon_date`, `cupon_statas`) VALUES
(1, '333', 'satish@gmail.com', '333', '2018-02-24 10:29:26', 'Active'),
(2, '1420', 'rahul@gmail.com', 'ucode', '2018-02-07 14:03:14', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `d_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `d_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `d_statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_master`
--

CREATE TABLE `feedback_master` (
  `feedback_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `reviews` varchar(50) NOT NULL,
  `statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offres`
--

CREATE TABLE `offres` (
  `offer_id` int(10) NOT NULL,
  `offer_img` varchar(200) NOT NULL,
  `offer_title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `startingdate` date NOT NULL,
  `endingdate` date NOT NULL,
  `offer_statas` enum('Active','Deactive') NOT NULL,
  `offer_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offres`
--

INSERT INTO `offres` (`offer_id`, `offer_img`, `offer_title`, `description`, `startingdate`, `endingdate`, `offer_statas`, `offer_date`) VALUES
(2, '1bcff172759fa1a423a6fa1cbad74f2c.jpg', 'Big sell', 'offers this product', '2018-02-01', '2018-02-17', 'Active', '2018-04-09 06:42:19'),
(4, '705ede57d408c26a331539876c13ad33.jpg', 'big offer', '30% discount offer', '2018-04-09', '2018-04-20', 'Active', '2018-04-09 06:27:34'),
(7, '39dde891226bda9769351945569d5ada.jpg', '', '', '0000-00-00', '0000-00-00', 'Active', '2018-03-01 08:10:36'),
(8, '72c9ad961f3e578b26106618689bbef1.png', '', '', '0000-00-00', '0000-00-00', 'Active', '2018-02-20 14:43:13'),
(9, '042fd4ccb90a74396681557648e2083d.jpg', '', '', '0000-00-00', '0000-00-00', 'Active', '2018-02-20 14:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `userfname` varchar(50) NOT NULL,
  `userlname` varchar(50) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `paramanentaddress` varchar(200) NOT NULL,
  `shippingaddress` varchar(200) NOT NULL,
  `orderno` varchar(50) NOT NULL,
  `paymenteethod` varchar(100) NOT NULL,
  `deliverycharg` varchar(50) NOT NULL,
  `cuponamount` varchar(50) DEFAULT NULL,
  `date_register` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `o_statas` enum('Pending','Confirm','Dispatch','Delivered') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_id`, `user_id`, `userfname`, `userlname`, `useremail`, `contactno`, `paramanentaddress`, `shippingaddress`, `orderno`, `paymenteethod`, `deliverycharg`, `cuponamount`, `date_register`, `o_statas`) VALUES
(15, 2, 'Vishal Rajput', 'vishal', 'satish@gmail.com', '09876543210', 'surat!surat!394210!Gujarat!India', 'surat!surat!394210!Gujarat!India', '3101', 'cod', '25', NULL, '2020-06-05 07:01:13', 'Delivered'),
(16, 2, 'dsas', 'adsa', 'satish@gmail.com', '465321231', 'surat!surat!86544!Gujarat!India', 'surat!surat!86544!Gujarat!India', '3629', 'cod', '75', NULL, '2020-06-05 07:44:42', 'Delivered'),
(19, 6, 'Vishal Rajput', 'vishal', 'neeraj@gmail.com', '0987654321', 'surat!surat!394210!Gujarat!India', 'surat!surat!394210!Gujarat!India', '5721', 'cod', '0', NULL, '2020-06-10 06:56:34', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `prisription`
--

CREATE TABLE `prisription` (
  `p_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `shipping` varchar(200) NOT NULL,
  `prisriptionfile` varchar(200) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `orderno` varchar(10) NOT NULL,
  `p_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `p_status` enum('Active','Deactive','Pending','Confirm','Dispatch','Delivered') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisription`
--

INSERT INTO `prisription` (`p_id`, `name`, `email`, `contact`, `shipping`, `prisriptionfile`, `qty`, `price`, `orderno`, `p_date`, `p_status`) VALUES
(1, 'patil', 'satish@gmail.com', '9913853504', '37 nilknth nagar navagam', 'admin.sql', '', '', '', '2018-04-19 17:48:58', 'Active'),
(2, 'patil', 'satish@gmail.com', '9913853504', '37 nilknth nagar navagam', 'admin.sql', '', '', '', '2018-04-19 17:52:03', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `productimage`
--

CREATE TABLE `productimage` (
  `productimage_id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productimage`
--

INSERT INTO `productimage` (`productimage_id`, `product_id`, `image`) VALUES
(2, 1, 'e167271cae1cc57f3695bda119072f49.jpg'),
(3, 2, 'f4133e33b56b8b85fe7b911f24e6435a.jpg'),
(4, 2, '930fc6c4a549b36400e8f03286c1e8c4.jpg'),
(5, 3, '9cb7b3a5e3aa2353240f42c9dbfb5152.jpg'),
(6, 4, '39155ac2bae80024745c006d92387c9d.jpg'),
(7, 5, 'e522d50d66883d94a7c8fe14e3715745.jpg'),
(8, 5, '6370fa63b2c8f0f52894b419b4adedec.jpg'),
(9, 6, 'cfdd6a2a88cb57c03f263421aa2e47a9.jpg'),
(10, 7, '308a363c726f41e5deea1e42e82e6181.png'),
(11, 7, '4a43b66368aa83ae121d39cecd85b256.jpg'),
(12, 8, 'd3d8ea7f20db07a147d3ef09f053dae8.jpg'),
(13, 9, '76be79bae0c2a44e286da311c51c250f.jpg'),
(14, 9, '0487153d8f343151720929fd1f00fe24.jpg'),
(15, 10, 'd9f933fc1b101a090f88ccec0e737a01.jpg'),
(16, 10, 'cc56ad0e111023e22079077c090c4cd1.jpg'),
(17, 11, '048240954269b7d1b9bfa3275fcfb36c.jpg'),
(18, 11, '184d6bc8b48c2ff96e7759d2a1fed3c8.jpg'),
(19, 12, '197c8025259770aab3e47bac8f7799e9.jpg'),
(20, 12, '1cbb3771c88b8f62e616ccc7e01b41e9.jpg'),
(21, 12, 'b8bc820ed86857b31b12b4c11ec8e4ea.jpg'),
(22, 13, 'ecc51096bfe19c370171a51f588c7eb8.jpg'),
(23, 13, '378a2445081fc50cf855d526b5c52156.jpg'),
(24, 13, '68dea0ac0636701cdd2744749b6e56da.jpg'),
(25, 14, 'b17734adfb3e667c5bd4ecf4e445af1f.jpg'),
(26, 14, '93fdce78737f4483972963d43f952fc7.jpg'),
(27, 15, '0a9d3dffad81efde7f5c907c0bf2197c.jpg'),
(28, 16, 'c915306f52f914ffa308d1eea9553ffb.jpg'),
(29, 16, '687b77629e0f41d2e35360acfb08baea.jpg'),
(30, 16, '512397afc6f5e717b820cfc97379333a.jpg'),
(31, 17, 'c9e1de1c071703d02f6c96fcab80fe6f.jpg'),
(32, 18, '6a26f0bd66b463a36192c0f6006b7ddc.jpg'),
(33, 18, '4226e31b2f0dbfdabd64b6c400b9df59.jpg'),
(34, 19, '5ac766025791dee6815b81fe57cb7330.jpg'),
(35, 19, '6a49581216ebf9b95d0c4e4652f32517.jpg'),
(36, 20, 'f34ba590bc45380d9260610ed4304d88.jpg'),
(37, 20, '8fea80b5683dbc7dd25e0370fa485bfa.jpg'),
(38, 21, '41e3c263f7cf538ee0e28fbbdef7efde.jpg'),
(39, 21, 'fb81bbf39cba7a0e894179247315fe53.jpg'),
(40, 22, '7f768d04f84ecf69dcbee47fde673d17.jpg'),
(41, 23, '73766ed4ad31ead5dfd614b193f1e4f1.jpg'),
(42, 23, 'c2867ff3c019a20f2b7ac7cd478a468b.jpg'),
(43, 24, 'e4ba9904a66dbcb60525bbbe4d85cc2f.jpg'),
(44, 24, '592d7bad85ea7861cc2ca8902eace9b1.jpg'),
(45, 24, 'a156372e91726466aaddc52bf62b78ce.jpg'),
(46, 25, 'e40a460e515fc08ad74ca45f5b5425b4.jpg'),
(47, 25, '68e64dd84d1c193fc8460f36629bacf7.jpg'),
(48, 26, '13fbe992656d1b8dfc79b8692e1c2935.jpg'),
(49, 26, 'd052c8859da3de369b2439ead227597d.jpg'),
(50, 27, '4f82cb0c248560a05ceb8cd19e7e03ce.jpg'),
(51, 27, '1ae8f4f8dc29f9b21b8a95dc0a40592b.jpg'),
(52, 28, '3b0e2495cbaa677ba0725f1f2768a85e.jpg'),
(53, 28, 'a1de535727a61b72983861b56f8f90d1.jpg'),
(54, 29, '5f4322a0925d766b375a835bf0403e37.jpg'),
(55, 29, '12d50879d40215bb31d123643170242a.jpg'),
(56, 30, '1edf5c64000ec27b50e46ce29e2819c7.jpg'),
(57, 30, 'e8332ce1b890ed6807484336d3c0e1fa.jpg'),
(58, 30, '5c69c15d083577c3f890e032b3d558f3.jpg'),
(59, 31, '76f4972df6af7d8b4dac9ae759690e7b.jpg'),
(60, 31, 'f5b364a88fc2afde3d99c1d36bb1c49d.jpg'),
(61, 31, '910fee8477aac445f25e794a66352623.jpg'),
(62, 32, '55a88daf187f36b39755f1d4f768b8de.jpg'),
(63, 32, '070c574a1d012f6d6c001f9ebf24ccb6.jpg'),
(64, 33, '5f5cd71e935eea216d6c0edf83a93c8d.jpg'),
(65, 33, '33538921942519b64eb2b4ae9961dfcc.jpg'),
(66, 34, '1a0041f72e9a05c70f925b8e1cb900e0.jpg'),
(67, 34, '80d5d051d6661f59bd56c3b6a73e5920.jpg'),
(68, 35, '1fa637fdb1405cf92c457cd7ebf4bbae.jpg'),
(69, 35, '5996ce4fb1396539dfba8f230ddbf264.jpg'),
(70, 36, '12be53de2f216100e82cbf5d7911c127.jpg'),
(71, 36, 'c0cb47a3905a736577108588bbb04190.jpg'),
(72, 37, 'd63abccec501aec62d23c4c7d6fbb80b.jpg'),
(73, 37, '2041163fb18ba65225abd7d386800095.jpg'),
(74, 39, '829fd582f9af342f95ec4e11878ee7a7.jpg'),
(75, 39, '27f5e6b8ae2a9d663b5feeb888734155.jpg'),
(76, 40, '54bde8abae1c2cb857116db5058cd983.jpg'),
(77, 40, '4cd71220a9e43df423669eb57d3b592f.jpg'),
(78, 42, '016f55c9d2b90417c0af6a8a5bbd5743.jpg'),
(79, 42, '8a666adeaa03a1ee72bb430a79890aba.jpg'),
(80, 43, '5e0650f5840d22739e793e9165d08c5d.jpg'),
(81, 43, '778f883b5b7aad9f1849756ad63f5524.jpg'),
(82, 44, '5e56e002abcf18e15e49a6c07c1cc93a.jpg'),
(83, 44, '594c75acba5f1bc06549b1449e63cb31.jpg'),
(84, 45, '36864fc063009f216aebd6bc1553c39b.jpg'),
(85, 45, '2d1419a6255dc931f19ef81c5a05dc4f.jpg'),
(86, 46, '00c0a4bbc1fd47aca92485e1d1640e24.jpg'),
(87, 46, '648645e954210775715a60454f3a4c59.jpg'),
(88, 47, 'e02b57896805d5c080746f9ecaf3fa70.jpg'),
(89, 47, '14494c53b47bcd632705764f4b77a165.jpg'),
(90, 48, '8e05f788f0720f2e5eef57fc9800e1e4.jpg'),
(91, 48, '70ce4e48a2d3b1cfc0cd662fd7474d9a.jpg'),
(92, 49, 'e1c194c18893c2726706701e2c5e3a36.jpg'),
(93, 49, 'c8dbbc8fd2833261976ded98ed8a998e.jpg'),
(94, 50, '23b9e41ca52b40893dc838d953890149.jpg'),
(95, 50, '893943d4e17fcd7327c9ee1b2fa42ceb.jpg'),
(96, 51, '37912cad6cb28a0f8ff295f4a33241a4.jpg'),
(97, 51, '8e2cba7371c5153d0a2588ed7fe31195.jpg'),
(98, 52, '3d73985e4961fe48cb2d94d98be5a213.jpg'),
(99, 52, '7cd804fda4d1d5e0c155feb9976b9ef7.jpg'),
(100, 53, '116e399c9ee7f222bd12a98d84289f09.jpg'),
(101, 53, '4f805d06949f20cf8b886eed9f8b5d4c.jpg'),
(102, 54, '3afd767e5a5c24e6652833d4b6f9e83d.jpg'),
(103, 54, '5b468f1964a5cb11a22602d0e244ead8.jpg'),
(104, 55, '0f6399a889100fd0ea7d2b2b737a124f.jpg'),
(105, 55, '9ffbba6cca62669b62610eaea308832b.jpg'),
(106, 56, 'da2730c7a454b1ee1d8df0dae017d20c.jpg'),
(107, 56, '5fd886d9ac5a64d5c6fc8412855068f5.jpg'),
(108, 57, '954f73b33bb2c6324816f098fe906d65.jpg'),
(109, 58, 'd404c4a68887e190cd955db58e43ba27.jpg'),
(110, 58, '0489a5a506f88643953b3b202b55fd93.jpg'),
(111, 59, '268ec4d91dc3b380fc428cd23efd79dc.jpg'),
(112, 59, '3a2db03a822c0bc963a3e3ebd10b7b09.jpg'),
(113, 60, '6468df5cd4bc56581fb2824e0911952a.jpg'),
(114, 60, 'c3e91b719272264d4735dca30c41aafe.jpg'),
(115, 61, 'a07f841ca34a39fb4b091aebd53e19f8.jpg'),
(116, 61, 'e97340fd35f92dd3699d104dcf36f248.jpg'),
(117, 62, '81920c45f3ad53b27b7c0ad531025f4c.jpg'),
(118, 62, 'f58cf7d9940ef60b49fc630588cb3feb.jpg'),
(119, 63, 'd751f2c02e74477d6c2df738681f9724.jpg'),
(120, 63, 'fced3171cdb53c08293e187679426c05.jpg'),
(121, 64, '65e1497b2eee12e14d85aade534bbf1a.jpg'),
(122, 64, '9a1ad0aff25287577ce255b03ffd6361.jpg'),
(123, 65, 'd1e197708d4cd58e3e28bb3e591af7a0.jpg'),
(124, 66, 'a7edbacbf619c7c3b3023c74e7f83154.jpg'),
(125, 66, '94d18a512f0dbf8d12c577abb7e23293.jpg'),
(126, 67, '89a47bd50088beffb7956ec2c94df0c1.jpg'),
(127, 67, '5c146dfeb35e40999813951555dc4b6d.jpg'),
(128, 67, 'bc961ca5f6d709cf0adcfaf5dec0b4b6.jpg'),
(129, 68, '2366c8f6dd9df4c9f1682173739f742a.jpg'),
(130, 69, '982e1e28063a21a6558ffda00835439a.jpg'),
(131, 70, '94015b6b9102c2a69fd7bd8e3a0cd2eb.jpg'),
(132, 71, '8385fa9a88f40bba4b11e80efe77165b.jpg'),
(133, 72, '634714f6ab3061b4f860691ac6aa0a4b.jpg'),
(134, 72, '9fa58d0c99e6494a1dad06a4de32e00a.jpg'),
(135, 73, 'ffaf8cd6b35150cd6d2cb50a537d64cb.jpg'),
(136, 73, '4eb37bad9235086ab35b046a03b5fc1f.jpg'),
(137, 74, 'd939f36238262b3670f40dd630e15077.jpg'),
(138, 74, '08be79575f0b7b2c47121ea96cca9b12.jpg'),
(139, 75, 'b383a8eff0242753da09000ebeef6ea0.jpg'),
(140, 75, '21543366688741d61d47da25ebb988ec.jpg'),
(141, 76, '502334c0ba3b538bb6a03b87ed482528.jpg'),
(142, 76, '7f885fbd433465cadbd681dde5dd38ec.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `product_id` int(10) NOT NULL,
  `categery_id` int(10) NOT NULL,
  `s_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` float NOT NULL,
  `product_discount` float NOT NULL,
  `product_peateched` text NOT NULL,
  `product_description` text NOT NULL,
  `stating_date` datetime NOT NULL,
  `endig_date` datetime NOT NULL,
  `status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `stock` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`product_id`, `categery_id`, `s_id`, `brand_id`, `product_name`, `product_price`, `product_discount`, `product_peateched`, `product_description`, `stating_date`, `endig_date`, `status`, `stock`) VALUES
(1, 1, 2, 0, 'Onion, 1 kg', 22, 0, 'Fresh Onion', 'Onion is a vegetable which is almost like a staple in Indian food. This is also known to be one of the essential ingredients of raw salads. They come in different colours like white, red or yellow and are quite in demand in cold salads and hot soups. You can dice, slice or cut it in rings and put it in burgers and sandwiches. Onions emit a sharp flavour and fragrance once they are fried; it is due to the sulphur compound in the vegetable.', '2020-05-12 00:00:00', '2020-05-28 00:00:00', 'Active', '-4'),
(2, 1, 2, 0, 'Tomato ', 25, 0, 'fresh', 'Tomato Hybrids are high-quality fruits compared to desi, local tomatoes. They contain numerous edible seeds and are red in colour due to lycopene, an anti-oxidant. ', '2020-05-05 00:00:00', '2020-05-30 00:00:00', 'Active', '-3'),
(3, 1, 2, 0, 'Potato, 1 kg', 15, 0, 'fresh', ' Potatoes are nutrient-dense, non-fattening and have reasonable amount of calories. Include them in your regular meals so that the body receives a good supply of carbohydrates, dietary fibers and essential minerals such as copper, magnesium, and iron. In India, potatoes are probably the second-most consumed vegetables after onions.', '2020-05-20 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(4, 1, 2, 0, ' Mixed Capsicum, 500 g', 75, 0, 'fresh', 'Capsicum is wealthy in several photonutrients especially antioxidants, nutritional fiber and minerals like potassium, manganese, copper and magnesium. It is wealthy in Vitamin A, K, C, E, B6 and small amounts of Niacin, Thiamin and Folate. It adds a dynamic personality to your food owing to vibrant colors. It mixes into any dish and gets out a certain zing and taste. ', '2020-05-12 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(5, 1, 2, 0, 'Cucumber - White, 1 kg', 25, 0, 'fresh', 'With an ivory coloured edible skin, white cucumbers have high water content and a crispy texture.', '2020-05-13 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(6, 1, 2, 0, 'Ladies Finger - Organically Gr', 22, 0, 'fresh', 'It is organically grown and handpicked from farm ', '2020-05-18 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(7, 1, 3, 0, 'Apple - Red Delicious, Regular', 125, 0, 'fresh/juicy', 'The bright red coloured and heart shaped Red Delicious apples are crunchy, juicy and slightly sweet. Red Delicious Apples are a natural source of fibre and are fat free. They contain a wide variety of anti-oxidants and polynutrients. ', '2020-05-14 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(8, 1, 3, 0, 'Pear - Green, Imported, 4 pc', 79, 0, 'fresh', 'Pears are grown throughout the world, but none matches the ideal growing conditions and climate of the Pacific Northwest states of USA â€“ Washington & Oregon. USA Pears are recognized worldwide for their unsurpassed quality. They are good any time of the day â€“ from mid-morning to pre bed time, easy to digest with only 100 calories.Â  It contains no cholesterol, no sodium, free from saturated fat, an excellent source of fiber and a good source of vitamin C. USA Pears are a good source of potassium, which can help in lowering blood pressure and reduce risk of cancer. They have a large amount of natural fructose and glucose, making them a quick source of healthy energy. USA Pears are ready to eat when they yield to the gentle thumb test. ', '2020-05-22 00:00:00', '2020-05-25 00:00:00', 'Active', ''),
(9, 1, 3, 0, 'Sapota, 1 kg', 55, 0, 'fresh/juicy', 'Brown skinned sapotas are smooth to grainy textured, musky-scented and deliciously sweet in taste. The flesh generally contains 2-3 large and inedible black seeds. Fresho sapotas are freshly plucked by our farmers and the best quality is delivered to you. ', '2020-05-13 00:00:00', '2020-06-05 00:00:00', 'Active', ''),
(10, 1, 3, 0, 'Pomegranate - Small, 1 kg', 45, 0, 'fresh/juicy', 'With ruby color and an intense floral, sweet-tart flavor, the pomegranate delivers both taste and beauty. You can remove the skin and the membranes to get at the delicious fruit with nutty seeds. Fresho Pomegranates are finely sorted and graded to deliver the best tasting pomegranates to you. ', '2020-05-12 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(11, 1, 3, 0, 'Orange - Imported, Regular, 4 ', 109, 10, 'fresh/juicy', 'brings you an assortment of 4 imported oranges, which make for an ideal gift during the festive season or even for making desserts and juices. These imported oranges are much bigger in size as compared to the Indian counterpart. You will notice their skin is much brighter and vibrant too. Easy to peel, these oranges are a healthy snack alternative. ', '2020-05-14 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(12, 1, 1, 0, 'Ginger - Organically Grown, 25', 39, 10, 'fresh', 'It is organically grown and handpicked from farm ', '2020-05-11 00:00:00', '2020-06-03 00:00:00', 'Active', ''),
(13, 1, 1, 0, 'Cabbage - Organically Grown, 1', 13, 0, 'fresh', 'It is organically grown and handpicked from farm ', '2020-05-03 00:00:00', '2020-06-06 00:00:00', 'Active', '-4'),
(14, 1, 1, 0, 'Watermelon - Organically Grown', 25, 0, 'fresh/juicy', 'With greenish black to smooth dark green surface, we selectively pick organically grown watermelons from the best farms  These watermelons have juicy, sweet and grainy textured flesh filled with 12-14% of sugar content, making it a healthy alternative to sugary carbonated drinks. Flesh colour of these are pink to red with dark brown/black seeds. ', '2020-05-15 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(15, 1, 1, 0, ' Muskmelon - Organically Grown', 55, 0, 'fresh/juicy', 'Fresho Organic products are organically grown and handpicked by expert. ', '2020-05-21 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(16, 1, 5, 0, 'Garlic - Organically Grown, 25', 45, 10, 'fresh', 'Organic products are organically grown and handpicked by expert. ', '2020-05-13 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(17, 1, 5, 0, ' Chilli - Hybrid, 100 g', 10, 0, 'fresh', 'Chilli Hybrid contains viscous, sharp and pungent taste; however the sharpness can differ depending on the variety of chilly. It is a staple of Indian diets. They get their hot flavor from the compound capsaicin, which happens naturally in chillies. It is wealthy in Vitamin A & C and includes Vitamin E, some B vitamins, potassium & iron. ', '2020-05-13 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(18, 1, 5, 0, 'Lemon, 250 g', 25, 0, 'fresh', 'With a segmented flesh that has a unique pleasant aroma and a strong sour taste, lemons are round/oval and have a yellow, texturized external peel. ', '2020-05-06 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(19, 1, 4, 0, 'Lettuce - Iceberg, 500 g', 55, 0, 'fresh/crunchy', 'Iceberg lettuce is a variety of lettuce with crisp leaves which grows in a spherical head resembling a cabbage. The leaves on the outside tend to be green and the leaves in the center go from pale yellow to nearly whitish as you move closer and closer to the center of the head with the sweetest leaves in the center of the head.', '2020-05-12 00:00:00', '2020-05-30 00:00:00', 'Active', ''),
(20, 1, 4, 0, 'Mushrooms - Button, 200 g', 75, 0, 'fresh', 'Buttom mushrooms are very small sized mushrooms with smooth round caps and short stems. They have a mild flavour with a good texture that becomes more fragrant and meaty when cooked. ', '2020-05-03 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(21, 1, 4, 0, 'Zucchini - Yellow, 500 g', 45, 10, 'fresh', 'Yellow zucchini is a long and slightly fat vegetable, also known as squash. Yellow variant has comparatively softer flesh and tastes sweeter than the green one. ', '2020-05-14 00:00:00', '2020-06-06 00:00:00', 'Active', '-8'),
(22, 1, 5, 0, 'Tulsi - Leaves, Organically Gr', 32, 0, 'fresh', 'Tulsi Leaves are a heavily branched small shrub which is widely grown in India for medicinal as well as religious purposes. It is widely used in Ayurveda for medicinal purposes. The phytochemicals present in tulsi offer antioxidant as well as immune-enhancing behavior. It also has adaptogenic properties, that is, it enhances the body\'s capability to adapt to stress. It acts mainly as antimicrobial properties. It is a very good source of Vitamin-C, A, phytonutrients. ', '2020-05-11 00:00:00', '2020-05-30 00:00:00', 'Active', ''),
(23, 1, 4, 0, ' Aloe Vera - Organically grown', 13, 0, 'fresh', 'Product image shown is for representation purpose only, the actually product may vary based on season, produce & availability.', '2020-05-06 00:00:00', '2020-05-30 00:00:00', 'Active', ''),
(24, 1, 4, 0, 'Sweet Tamarind, 200 g', 36, 0, 'fresh/crunchy', 'Sweet Tamarind flesh is brown remove the bark and likes wonderfully sweet & slightly bitter taste. Tamarinds include small amounts of a mixture of vitamins, including vitamins A, C, E and K. ', '2020-05-11 00:00:00', '2020-06-05 00:00:00', 'Active', ''),
(25, 2, 6, 0, 'Aashirvaad Atta - Whole Wheat,', 237, 0, 'fresh', 'Aashirvaad Whole Wheat Atta has 0% maida and 100% atta. This means you serve soft, fluffy rotis and a whole lot of health and happiness. ', '2020-05-04 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(26, 2, 6, 0, 'bb Royal Maida, 1 kg Pouch', 53, 0, 'fresh', ' The BB Royal Maida or white flour is an ideal part of any cuisine, including Indian, Chinese and Italian. The maida is sourced from the best of wheat grains, trying to retain optimal fibre value so that you are able to get quality flour, especially with self-rising benefits. ', '2020-05-04 00:00:00', '2020-05-21 00:00:00', 'Active', ''),
(27, 2, 6, 0, 'Tata Sampann Besan - 100% Chan', 55, 0, 'fresh', 'It is organically grown and handpicked', '2020-05-04 00:00:00', '2020-06-06 00:00:00', 'Active', '-3'),
(28, 2, 6, 0, 'bb Royal Sooji Ordinary/Bombay', 45, 0, 'fresh', 'Ordinary Sooji is very tasty to prepare and enjoy it. It comes to use as the key ingredient in different Indian dishes. It is utilized widely in the kitchen for preparing a number of dishes. It is rich in fiber and very wholesome. It makes a very healthful and is very strong and good for people who are on diet. It is hygienically processed and is guaranteed for rich flavor and taste. ', '2020-04-26 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(29, 2, 6, 0, 'bb Royal Organic - Jowar Flour', 66, 0, 'fresh', 'war flour is a healthy atta and gluten free. It has higher content of protein. It is high in anti-oxidants, Vitamin E & B complex. Rotis made by jowar flour are soft. In India, it is used to make jowar ki roti in villages as well as urban areas. It is high in magnesium, calcium and calories. It is free from synthetic chemicals and pesticides.', '2020-05-14 00:00:00', '2020-05-04 00:00:00', 'Active', ''),
(30, 2, 7, 0, 'bb Popular Toor/Arhar Dal, 5 k', 600, 0, 'fresh', 'Toor Dal is processed with the most superior technology so that the original protein value is kept at its best; each grain of toor dal is the treasure of flavor of finest quality. It allows you with the dual richness of nutrition and appetizing taste for your family. It is fat free and nature contains designed it to absorb various mixtures of seasonings and spices. ', '2020-05-05 00:00:00', '2020-06-05 00:00:00', 'Active', ''),
(31, 2, 7, 0, 'bb Popular Kabuli Channa, 1 kg', 65, 0, 'fresh', 'Kabuli chana is believed to be one of the earliest cultivated legumes. It looks kind of like a wrinkled hazelnut. This is one of the versatile dishes of Indian cuisine, having a nutty and creamy flavor. White chickpeas are one of the most famous edible legumes of firm texture. It is a rich source of minerals such as iron, potassium, magnesium, calcium, phosphorous and importantly, molybdenum. ', '2020-04-27 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(32, 2, 7, 0, 'bb Royal Moong Dal, 1 kg Pouch', 90, 10, 'fresh', ' Moong dal is one of the most popular lentils eaten across India. Packed with protein, BB Royal moong dal packs deliver the finest selection of lentils which is evident from the shine on the lentils. The dal, sourced directly from farmers, is packed in a way that it retains the maximum nutrient value. ', '2020-05-12 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(33, 2, 7, 0, 'bb Royal Masoor Dal, 200 g', 45, 0, 'fresh', ' Masoor dal Red helps you lose weight. It helps in cleansing your skin by removing impurities. The high amounts of fiber in the red lentils help in lowering cholesterol while the potassium helps in lowering high blood pressure. Red lentils have low glycemic index, which makes them an ideal food for people with diabetes. It boosts the immune power. ', '2020-05-22 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(34, 2, 7, 0, 'bb Royal Green Moong Whole/Sab', 147, 10, 'fresh', 'BB Royal whole green moong are procured from reliable and high quality sources, and are extremely beneficial for your health. The moong dal is easy to digest, has a pleasant sugary flavour and feels soft. The beans are best consumed after being sprouted, since the sprouts are rich in vitamin C. ', '2020-05-13 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(35, 2, 8, 0, 'bb Popular Almond/Badam - Cali', 470, 0, 'fresh/crunchy', ' Almonds are light brown skinned, tough, edible seeds of the almond fruit. They have a wealthy yet subtle bitter-sweet flavor. These are assets of nutrients, especially protein, dietary fibre, mono-unsaturated fatty acids and B complex vitamins. Also, it is wealthy in vitamin E and minerals such as potassium, calcium, manganese, zinc, iron and selenium. ', '2020-05-05 00:00:00', '2020-06-06 00:00:00', 'Active', ''),
(36, 2, 8, 0, 'bb Popular Cashew/Kaju - Whole', 1045, 10, 'fresh/crunchy', 'Cashew contains a rich flavour making it the most delicious nut. It is off-white in colour and is soft with a mild taste', '2020-05-03 00:00:00', '2020-05-28 00:00:00', 'Active', ''),
(37, 2, 8, 0, 'bb Royal Walnut Kernels/Akharo', 910, 10, 'fresh/crunchy', 'Walnuts are a yummy way to add additional nutrition, taste and crunch to a meal. It consists of two bumpy lobes which are off-white in colour and coated by a thin, light brown skin. They are rich in vitamins and dietary fibre in addition to minerals such as potassium, iron, copper and calcium.', '2020-04-26 00:00:00', '2020-05-29 00:00:00', 'Active', ''),
(39, 2, 8, 0, 'bb Popular Raisins/Kishmish - ', 330, 0, 'fresh', 'Indian Raisins has delicious taste, high nutritional value and freshness. These raisins are used in cuisines and palatable dishes all over the globe. It is rich in phosphorus and calcium that helps to fight against various diseases. ', '2020-05-03 00:00:00', '2020-05-21 00:00:00', 'Active', ''),
(40, 2, 8, 0, 'bb Royal Anjeer - Figs, 500 g', 999, 10, 'fresh/juicy', 'Figs are bell shaped fruits with wrinkled and tough skin. They are one of the sweetest fruits and also have a very sugary scent. Fig is logically rich in much wellbeing benefiting anti-oxidants, phytonutrients and vitamins.   Dried figs, indeed, are an extremely concentrated supply of minerals and vitamins. An entirely developed fig features bell or pear shape with moist flesh inside. Figs control many essential minerals and vitamins like vitamin A, B1, B2, and also contain a mixture of antioxidants and omega fatty acids. Dried figs are mainly consumed raw and are used as sweeteners in desserts and baked goods.', '2020-05-06 00:00:00', '2020-05-30 00:00:00', 'Active', ''),
(42, 2, 9, 0, 'Parsi Dairy Farm Cow Ghee, 1 L', 990, 10, 'healthy', 'Parsi Cow Ghee is made from the purest and richest of creams using a manual technique that helps obtain maximum flavour and a grainy textured traditional ghee. It is packed in hygienic conditions to keep intact the freshness of pure, authentic ghee. Use it to cook your daily meals and experience the enhanced flavours this ghee brings to your dishes.', '2020-06-01 00:00:00', '2020-07-03 00:00:00', 'Active', ''),
(43, 2, 9, 0, 'Saffola Gold - Pro Healthy Lif', 750, 10, 'healthy', 'Are you pushing for a healthy lifestyle even amongst the hustles of the modern days? Today our food habits, stress & activity level affect both our health and heart. But health can also be a part of your life when you find your own way of being healthy. Choose Saffola Gold cooking oil, which partners your journey for a healthy lifestyle so that you have a healthy heart.  Saffola Gold, Pro Healthy Lifestyle Edible Oil, takes care of you and your family by bringing together the benefits of natural Antioxidant, MUFA, PUFA and Vitamins A and D, thus the power of blended cooking oil offers Improved nutritional profile, with Losorb technology which ensures 20% less oil absorption in your food, hence blended oils give you a convenient way of getting the better of two oils in one.', '2020-07-03 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(44, 2, 9, 0, 'Fortune Kachi Ghani Mustard Oi', 81, 0, 'fresh', 'Fortune Kachi Ghani Mustard Oil, traditionally extracted from the first press of mustard seeds, comes with a high pungency level and strong aroma. Being pure, our cooking oil retains its natural properties and mustard oil benefits. Its strong aroma and pungency spice up your cooking.', '2020-05-31 00:00:00', '2020-07-10 00:00:00', 'Active', ''),
(45, 2, 9, 0, 'Emami Healthy & Tasty - Rice B', 75, 0, 'healthy', 'Rice bran oil is extracted from the brown husk, the outer layer of the rice grain is called bran. It has a mild flavour and is neutral in taste. It is notable for its high smoke point and its mild flavor, making it suitable for high-temperature cooking methods such as stir frying and deep frying.', '2020-06-03 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(46, 2, 9, 0, 'Saffola Tasty - Pro Fitness Co', 125, 0, 'healthy', 'When you do so much to take care of your family’s fitness, is your oil working hard enough for you? Complement your fitness efforts with healthy choices! Saffola Tasty blended cooking oil absorbs up to 17% lesser fat as compared to other single seed oils, hence making it the right choice of the Fitness Conscious.', '2020-06-03 00:00:00', '2020-06-24 00:00:00', 'Active', ''),
(47, 2, 10, 0, 'Everest Garam Masala, 100 g Ca', 78, 0, 'fresh', 'Everest Garam Masala has been an evergreen taste enhancer for several years in India. It is a combine of 13 spices, with chilli powder as the support zest. The masala known for adding the savor to dishes also gives thick red colour to the ever unusual Indian dishes.', '2020-06-15 00:00:00', '2020-07-10 00:00:00', 'Active', ''),
(48, 2, 10, 0, 'Everest Powder - Turmeric, 200', 55, 0, 'fresh', 'Turmeric Powder is one along with those spices to be proved as a best result of Everest. The part of Turmeric powder is very much necessary to make our eating stuffs or dishes scented and colored. Turmeric has a soft, earthy and woody aroma. It stimulates protein digestion, and is a superb blood purifier. It is a accepted variety in India, where turmeric is used as a solution coloring agent in \'curries\'.', '2020-06-25 00:00:00', '2020-06-26 00:00:00', 'Active', ''),
(49, 2, 10, 0, 'Everest Tikhalal Chilli Powder', 185, 0, 'fresh', 'The spicy taste of Indian food can be likened with the Paprika bearing Mexican cuisine that sets your palate on appetising fire! Everest is a brand that has been well known for qualitative spices and spice mixes as well. This spice blend is one that brings in the fiery magic of red chillies, well known in India!', '2020-06-18 00:00:00', '2020-07-02 00:00:00', 'Active', ''),
(50, 2, 10, 0, ' Everest Powder - Cumin, 100 g', 51, 0, 'fresh', 'Sourced from the well drained, loamy regions of Gujarat and Rajasthan. This type is much valued for its high percentage of essential oil content that gives it an intense flavor. Cumin seeds has a penetrating musty, earthy flavor. Its a cooling spice. In the middle ages, cumin was believed to keep lovers faithful and chicken from straying. More recently, cumin has become popular because of its use in Mexican cooking. A native of Egypt and the Mediterranean, cumin is now mostly produced in India. Gujarat, Rajasthan and Uttar Pradesh are the prominent producers.', '2020-06-16 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(51, 2, 10, 0, 'Everest Chicken Masala, 50 g C', 38, 0, 'fresh', 'Everest Masala - Chicken this blend, the flavoring agents slightly predominate the flavor elements. Consequently the blend is fewer steeped in spiciness. For chicken curry, this gives the correct balance between the other ingredients and spice-elements in the dish.', '2020-06-08 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(52, 3, 11, 0, ' Fresho Multigrain Bread - Saf', 50, 0, 'fresh', 'Freshly baked bread is one of life\'s greatest pleasures. Our breads are made using the finest ingredients. We make this bread extra special, so we hope you will enjoy eating it as much as we enjoyed baking it. Our Multigrain Bread is the perfect option for a healthy meal. Topped with seeds and oats, we bring to you a mixture of various healthy ingredients. Make your sandwiches more interesting using these!', '2020-06-19 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(53, 3, 11, 0, 'Theobroma Multi Grain, 400 g', 75, 0, 'fresh', 'Soft & spongy bread made with homemade & multi-grain flour & covered with multi-seed. Our Multigrain Bread is the perfect option for a healthy meal. Topped with seeds and oats, we bring to you a mixture of various healthy ingredients. Make your sandwiches more interesting using these!', '2020-06-01 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(54, 3, 11, 0, 'Theobroma White Pizza Base, 17', 63, 0, 'fresh', 'Our Pizza Base is made with the finest wheat flour sourced across the country. It is made keeping in mind the authentic textures of traditional Italian pizza. Our White Pizza base is the perfect crust for all your favourite toppings!', '2020-06-02 00:00:00', '2020-07-03 00:00:00', 'Active', ''),
(55, 3, 11, 0, 'Theobroma Whole Wheat Burger B', 45, 0, 'fresh', 'Soft buns with a sprinkling of sesame seeds on top. Kids will love the burgers made with these burger buns. Use different fillings to create interesting anytime snack options.', '2020-06-09 00:00:00', '2020-07-04 00:00:00', 'Active', ''),
(56, 3, 11, 0, 'Fresho Sandwich Bread - Safe, ', 25, 0, 'fresh', 'Fresho bread is one of life\'s greatest pleasures. Our breads are made using the finest ingredients. We make this bread extra special, so we hope you will enjoy eating it as much as we enjoyed baking it. Soft and delicious bread, perfect for all types of sandwiches!', '2020-06-11 00:00:00', '2020-07-04 00:00:00', 'Active', ''),
(57, 3, 12, 0, 'Fresho Signature Muffin/Cup Ca', 125, 0, 'fresh', 'These classic muffins have a delicious twist: chocolate chips, instant coffee and a crunchy brown topping. They are great first thing in the morning or served as a coffee break snack. Made with premium quality ingredients, the taste is surely going to tame your tastebuds.   Enjoy this sweet delight and say bye to small hunger pangs.  ', '2020-06-02 00:00:00', '2020-07-04 00:00:00', 'Active', ''),
(58, 3, 12, 0, 'The Finishing Touch Belgium Ch', 300, 0, 'fresh/juicy', 'Our delicious Belgium Chocolate Cheesecake is made with a buttery oreo biscuit base and a layer of deliciously smooth and richly indulgent Belgium dark chocolate cheesecake. It is not only a visual delight but also a treat for your taste buds.', '2020-06-02 00:00:00', '2020-07-10 00:00:00', 'Active', ''),
(59, 3, 12, 0, 'The Finishing Touch Raspberry ', 600, 10, 'fresh', 'Our delicious Raspberry & Vanilla Cheesecake is made with a buttery sweet digestive biscuit base and a layer of deliciously smooth vanilla flavoured cheesecake. It\'s topped with a layer of juicy raspberry sauce. It is not only a visual delight but also a treat for your taste buds.', '2020-06-11 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(60, 3, 12, 0, ' The Finishing Touch Chocolate', 400, 10, 'fresh', 'Our Chocolate Fudge Cake is a feast for the eye. It is made of three layers of rich, moist chocolate sponge- each layer is separated with a deep layer of chocolate ganache. The whole cake then being covered in a glaze of dark chocolate ganache.', '2020-06-25 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(61, 3, 12, 0, 'Fresho Signature Fruit Tea Cak', 125, 0, 'fresh', 'Fabulous flavour, simply stated, for anytime enjoyment.  A great accompaniment to bond over tea. Enjoy it all by yourself or with family and friends. Made with premium quality ingredients, the taste is surely going to tame your tastebuds.   Enjoy this sweet delight and say bye to small hunger pangs.  ', '2020-06-11 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(62, 3, 13, 0, 'Cadbury Chocobakes Choc Filled', 25, 0, 'fresh', ' Experience the new exciting chocolatey centre filled cookie from Cadbury. Perfect as an indulgent \"me time\" treat or to relish happy moments with your loved ones and friends. Indulge in the taste of this amazing combination of delicious cookies that enrobe a smooth Chocolatey centre.', '2020-06-10 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(63, 3, 13, 0, 'Parle Rusk Real Elaichi, 273 g', 45, 0, 'fresh/crunchy', 'Real elaichi premium rusk tastes good for tea time and crispy time. Parle Rusk is a crunchy, crispy toast which is every family’s teatime essential. ', '2020-06-10 00:00:00', '2020-07-04 00:00:00', 'Active', ''),
(64, 3, 13, 0, 'Puffmaster Jeera Butter, 200 g', 75, 0, 'fresh/crunchy', 'The traditional bakery snack.', '2020-06-10 00:00:00', '2020-07-03 00:00:00', 'Active', ''),
(65, 3, 13, 0, 'The Bake Shop Kharis - Methi, ', 55, 0, 'fresh/crunchy', 'The Bake Shop Methi Khari is a baked \'puff pastry\' consumed as a snack and as an accompaniment with tea. It is literally means salty. It is a salty rough puff pastry which people have between meals in India, particularly during tea time. It is a new development that people enjoy because of the slight bitter taste that accompanies the khari. These layered Khari, golden-brown biscuits are always served with tea and coffee.', '2020-06-26 00:00:00', '2020-07-09 00:00:00', 'Active', ''),
(66, 3, 13, 0, 'Baker Boy Cookies - Jam Cashew', 75, 0, 'fresh/crunchy', 'A perfect combination of cashewnuts and fruit Jam ceates a unique fruity experince', '2020-06-04 00:00:00', '2020-07-04 00:00:00', 'Active', ''),
(67, 3, 14, 0, 'Amul Taaza Homogenised Toned M', 75, 10, 'healthy', ' Amul Taaza Homogenized Toned Milk is fully wholesome and entirely luscious. It has a low-fat, low-carb, low-calorie and standard protein content. It continues fresh for 2 days after opening if kept in refrigerator. No water or powder added, no preservative / chemical, easy to carry and use on traveling. It does not have germs as it is pasteurized and therefore hygienic.', '2020-06-08 00:00:00', '2020-07-03 00:00:00', 'Active', ''),
(68, 3, 14, 0, 'Amul Butter - Pasteurised, 100', 45, 0, 'fresh', 'Pasteurized Amul butter is a delicious bread spread, an essential ingredient of baking and a known enhancer for many food items. This smooth creamy chunk from the house of Amul can be added to sauce, Indian gravy and baked products.', '2020-06-10 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(69, 3, 14, 0, 'Amul Masti Buttermilk - Spice,', 75, 0, 'healthy', 'Amul Masti Buttermilk is a refreshing milk based natural drink. It is easy to use a low-calorie drink that refreshes you immediately with the goodness of nature.   To be taken directly on move (small pack) or at home, parties, picnics etc. (family pack). it is tasted best when chilled.', '2020-06-19 00:00:00', '2020-07-03 00:00:00', 'Active', ''),
(70, 3, 14, 0, 'Amul Masti Dahi, 2x 200 gm Mul', 45, 0, 'fresh', 'Amul Masti Dahi is prepared from freshest, purest pasteurized milk and it is free from added sugar. It is high on taste and nutrition. It doesn\'t contain any preservatives. Dahi will balance your digestive system, provides a strong immune system, and provides healthy skin and hair.', '2020-06-03 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(71, 3, 14, 0, 'PUNJAB SIND Malai Paneer - Pre', 125, 0, 'fresh', 'Premium Malai Panner is made from Pure Buffalo Milk with high fat and protein and also rich source of calcium, vitamins and minerals.', '2020-06-09 00:00:00', '2020-07-04 00:00:00', 'Active', ''),
(72, 3, 15, 0, 'Yo Zone Matka Kulfi - Paan, 10', 75, 10, 'fresh', 'Made from 100% natural ingrediants, store in pure earthern pot, a delicious Indian sweetdish.', '2020-06-16 00:00:00', '2020-07-04 00:00:00', 'Active', ''),
(73, 3, 15, 0, 'Papacream Vegan French Vanilla', 400, 10, 'fresh', 'Rich and creamy dairy-free vegan dessert made using real french vanilla seeds, a perfect pick for a vegan ice cream lover. It is dairy-free and gluten-free and has an aromatic & smooth texture, marking tones of real vanilla in every bite you take.', '2020-06-10 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(74, 3, 15, 0, ' Yo Zone Matka Kulfi - Kala Ja', 75, 0, 'fresh', 'Made from 100% natural ingrediants, store in pure earthern pot, a delicious Indian sweetdish.', '2020-06-16 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(75, 3, 15, 0, 'Yo Zone Matka Kulfi - Gulkand,', 75, 0, 'fresh', 'Made from 100% natural ingrediants, store in pure earthern pot, a delicious Indian sweetdish.', '2020-06-15 00:00:00', '2020-07-11 00:00:00', 'Active', ''),
(76, 3, 15, 0, 'mother dairy Ice Cream Cake - ', 450, 10, 'fresh', 'It is a Â Chocolate cake layer with French Vanilla ice cream and cherries with cashew and chocolate coating.', '2020-06-01 00:00:00', '2020-06-17 00:00:00', 'Active', ''),
(77, 1, 2, 6, 'gujarat', 19, 10, '81699', 'Get a Gift Voucher worth 5% of order value when order size is between 1,00,000 & 2,00,000 and 7.5% of order value when order is above 2,00,000', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active', '5'),
(78, 1, 2, 6, 'gujarat', 300000, 10, '10', 'dsasdas', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active', '1'),
(79, 1, 2, 6, 'gujarat', 300000, 10, '10', 'dsasdas', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active', '1'),
(80, 1, 2, 6, 'gujarat', 19, 10, '81699', 'Get a Gift Voucher worth 5% of order value when order size is between 1,00,000 & 2,00,000 and 7.5% of order value when order is above 2,00,000', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active', '1'),
(81, 1, 2, 6, 'gujarat', 19, 10, '81699', 'Get a Gift Voucher worth 5% of order value when order size is between 1,00,000 & 2,00,000 and 7.5% of order value when order is above 2,00,000', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active', '1'),
(82, 1, 2, 6, 'gujarat', 19, 10, '81699', 'Get a Gift Voucher worth 5% of order value when order size is between 1,00,000 & 2,00,000 and 7.5% of order value when order is above 2,00,000', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active', '1'),
(83, 1, 2, 6, 'gujarat', 19, 10, '81699', 'Get a Gift Voucher worth 5% of order value when order size is between 1,00,000 & 2,00,000 and 7.5% of order value when order is above 2,00,000', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active', '1'),
(84, 1, 2, 6, 'gujarat', 19, 10, '81699', 'Get a Gift Voucher worth 5% of order value when order size is between 1,00,000 & 2,00,000 and 7.5% of order value when order is above 2,00,000', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_replace`
--

CREATE TABLE `product_replace` (
  `r_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `order_id` int(11) NOT NULL,
  `resion` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `r_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `r_statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_replace`
--

INSERT INTO `product_replace` (`r_id`, `product_id`, `user_id`, `order_id`, `resion`, `description`, `r_date`, `r_statas`) VALUES
(7, 297, 2, 15, 'dont want it', 'sdfdfs', '2020-06-05 07:32:58', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(10) NOT NULL,
  `slider_image` varchar(200) NOT NULL,
  `slider_title` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `slider_title`, `date`, `statas`) VALUES
(21, '553b9c25a62858a598a700ae2f6cbd2a.jpg', 'Recliner', '2020-06-06 06:33:33', 'Deactive'),
(22, 'bb86e768daa5caa86c45e50e69dfc9a5.jpg', 'Bed', '2020-06-06 06:21:22', 'Active'),
(23, '67d44d3062aed147eca1b51d7d0bc748.jpg', 'Furniture', '2020-06-06 06:33:31', 'Deactive'),
(24, 'b2f96db86d0743cfc78ebbaef5765144.jpg', 'Sofa', '2020-06-01 10:26:39', 'Deactive'),
(25, '4b768e6ce06838bc7e7a655334fced0a.jpg', 'fsd', '2020-06-06 06:32:57', 'Active'),
(26, '8a2ca960300b0c9155acd39c8e948752.jpg', 'brand4', '2020-06-06 06:34:21', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `state_id` int(10) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `state_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `state_statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`state_id`, `state_name`, `state_date`, `state_statas`) VALUES
(2, 'Gujarat', '2018-02-26 12:34:57', 'Active'),
(3, 'Maharashtra', '2020-03-24 15:06:00', 'Active'),
(4, 'DELHI', '2020-03-24 15:06:04', 'Deactive'),
(5, 'U.P', '2020-03-23 06:44:58', 'Active'),
(6, 'BIHAR', '2020-03-23 06:45:59', 'Active'),
(7, 'HIMACHAL', '2020-03-23 06:47:06', 'Active'),
(8, 'BANGAAL', '2020-03-23 06:47:32', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `storecart`
--

CREATE TABLE `storecart` (
  `sc_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `orderno` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `totalamount` varchar(50) NOT NULL,
  `sc_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sc_statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storecart`
--

INSERT INTO `storecart` (`sc_id`, `product_id`, `user_id`, `orderno`, `qty`, `totalamount`, `sc_date`, `sc_statas`) VALUES
(3, 297, 2, '3101', '01', '15000', '2020-06-05 06:48:54', 'Active'),
(4, 255, 2, '3629', '01', '10000', '2020-06-05 07:39:36', 'Active'),
(5, 265, 2, '3629', '01', '5000', '2020-06-05 07:39:36', 'Active'),
(8, 1, 5, '8671', '3', '66', '2020-06-06 14:17:57', 'Active'),
(9, 2, 5, '8671', '3', '75', '2020-06-06 14:17:57', 'Active'),
(10, 27, 6, '5721', '3', '165', '2020-06-10 06:52:49', 'Active'),
(11, 1, 6, '5721', '1', '22', '2020-06-10 06:52:50', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categery_master`
--

CREATE TABLE `sub_categery_master` (
  `s_id` int(10) NOT NULL,
  `categery_id` int(10) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `s_statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categery_master`
--

INSERT INTO `sub_categery_master` (`s_id`, `categery_id`, `s_name`, `s_date`, `s_statas`) VALUES
(1, 1, 'Organic Fruits & Vegetables', '2020-03-19 17:23:14', 'Active'),
(2, 1, 'Fresh vegetables', '2020-03-19 17:23:47', 'Active'),
(3, 1, 'Fresh Fruits', '2020-03-19 17:24:25', 'Active'),
(4, 1, 'Exotic Fruits & Veggies', '2020-03-19 17:24:49', 'Active'),
(5, 1, 'Herbs & Seasoning', '2020-03-19 17:27:40', 'Active'),
(6, 2, 'Atta, Flours & Sooji', '2020-03-19 17:34:14', 'Active'),
(7, 2, 'Dals & Pulses', '2020-03-19 17:34:35', 'Active'),
(8, 2, 'Dry Fruits', '2020-03-19 17:34:56', 'Active'),
(9, 2, 'Edible Oils & Ghee', '2020-03-19 17:35:38', 'Active'),
(10, 2, 'Masalas & Spices', '2020-03-19 17:36:00', 'Active'),
(11, 3, 'Breads & Buns', '2020-03-19 17:51:26', 'Active'),
(12, 3, 'Cakes & Pastries', '2020-03-19 17:51:46', 'Active'),
(13, 3, 'Cookies,Rusk & Khari', '2020-03-19 17:52:09', 'Active'),
(14, 3, 'Dairy', '2020-03-19 17:53:03', 'Active'),
(15, 3, 'Ice Creams & Desserts', '2020-03-19 17:53:23', 'Active'),
(16, 4, 'Coffee', '2020-03-19 17:53:55', 'Active'),
(17, 4, 'Energy And Soft Drinks', '2020-03-19 17:54:18', 'Active'),
(18, 4, 'Fruit Juice And Drinks', '2020-03-19 17:54:38', 'Active'),
(19, 4, 'Health Drink & supplement', '2020-03-19 17:54:58', 'Active'),
(20, 4, 'Tea', '2020-03-19 17:55:19', 'Active'),
(21, 5, ' Fresh Chicken', '2020-03-19 17:59:09', 'Active'),
(22, 5, 'Eggs', '2020-03-19 17:59:42', 'Active'),
(23, 5, 'FISH & SEAFOOD', '2020-03-19 18:00:59', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contect` varchar(12) NOT NULL,
  `statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `lastname`, `email`, `password`, `gender`, `address`, `contect`, `statas`, `date`) VALUES
(1, 'Sanjay', 'Patil', 'srp9998@gmail.com', 'sanjay12322', 'male', '80 dattakootir udhna', '7041935727', 'Active', '2020-03-23 06:37:02'),
(2, 'satish', 'patil', 'satish@gmail.com', '123', 'male', 'surat', '7894561235', 'Deactive', '2020-04-20 13:55:38'),
(6, 'neeraj', 'rajput', 'neeraj@gmail.com', '123', '', '', '', 'Active', '2020-06-07 06:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `w_id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `prd_price` varchar(50) NOT NULL,
  `w_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `w_statas` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`w_id`, `product_id`, `user_id`, `prd_price`, `w_date`, `w_statas`) VALUES
(8, 14, 2, '25', '2020-06-07 05:58:44', 'Active'),
(9, 13, 2, '13', '2020-06-07 05:58:50', 'Active'),
(10, 1, 6, '22', '2020-06-07 06:00:44', 'Active'),
(11, 2, 6, '25', '2020-06-10 06:50:47', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_master`
--
ALTER TABLE `area_master`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `categery_master`
--
ALTER TABLE `categery_master`
  ADD PRIMARY KEY (`categery_id`);

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `contact_master`
--
ALTER TABLE `contact_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuponcodes`
--
ALTER TABLE `cuponcodes`
  ADD PRIMARY KEY (`cupon_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `feedback_master`
--
ALTER TABLE `feedback_master`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `prisription`
--
ALTER TABLE `prisription`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `productimage`
--
ALTER TABLE `productimage`
  ADD PRIMARY KEY (`productimage_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`categery_id`),
  ADD KEY `subcategory_id` (`s_id`);

--
-- Indexes for table `product_replace`
--
ALTER TABLE `product_replace`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `storecart`
--
ALTER TABLE `storecart`
  ADD PRIMARY KEY (`sc_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sub_categery_master`
--
ALTER TABLE `sub_categery_master`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `category_id` (`categery_id`),
  ADD KEY `category_id_2` (`categery_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `area_master`
--
ALTER TABLE `area_master`
  MODIFY `area_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categery_master`
--
ALTER TABLE `categery_master`
  MODIFY `categery_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `city_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact_master`
--
ALTER TABLE `contact_master`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cuponcodes`
--
ALTER TABLE `cuponcodes`
  MODIFY `cupon_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_master`
--
ALTER TABLE `feedback_master`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offres`
--
ALTER TABLE `offres`
  MODIFY `offer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `prisription`
--
ALTER TABLE `prisription`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productimage`
--
ALTER TABLE `productimage`
  MODIFY `productimage_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `product_replace`
--
ALTER TABLE `product_replace`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `state_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `storecart`
--
ALTER TABLE `storecart`
  MODIFY `sc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_categery_master`
--
ALTER TABLE `sub_categery_master`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD CONSTRAINT `addtocart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `addtocart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_master` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `area_master`
--
ALTER TABLE `area_master`
  ADD CONSTRAINT `area_master_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city_master` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `area_master_ibfk_2` FOREIGN KEY (`state_id`) REFERENCES `state_master` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city_master`
--
ALTER TABLE `city_master`
  ADD CONSTRAINT `city_master_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state_master` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discount`
--
ALTER TABLE `discount`
  ADD CONSTRAINT `discount_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_master` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback_master`
--
ALTER TABLE `feedback_master`
  ADD CONSTRAINT `feedback_master_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_master` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_master`
--
ALTER TABLE `order_master`
  ADD CONSTRAINT `order_master_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_master`
--
ALTER TABLE `product_master`
  ADD CONSTRAINT `product_master_ibfk_1` FOREIGN KEY (`categery_id`) REFERENCES `categery_master` (`categery_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_master_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `sub_categery_master` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categery_master`
--
ALTER TABLE `sub_categery_master`
  ADD CONSTRAINT `sub_categery_master_ibfk_1` FOREIGN KEY (`categery_id`) REFERENCES `categery_master` (`categery_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
