-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 08:32 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `cart_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_prd_qty` int(11) NOT NULL,
  `cart_prd_color` varchar(50) DEFAULT NULL,
  `cart_prd_size` varchar(50) DEFAULT NULL,
  `cart_totalamount` int(11) NOT NULL,
  `cart_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `cart_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_mstr`
--

CREATE TABLE `admin_mstr` (
  `aid` int(11) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `alastname` varchar(50) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `aalterEmail` varchar(50) NOT NULL,
  `acontact` varchar(15) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `agender` varchar(50) NOT NULL,
  `aaddress` varchar(100) NOT NULL,
  `acity` varchar(50) NOT NULL,
  `azip` varchar(50) NOT NULL,
  `astate` varchar(100) NOT NULL,
  `acountry` varchar(50) NOT NULL,
  `apic` varchar(5000) NOT NULL,
  `aquite` varchar(500) NOT NULL,
  `astatus` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  `alastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_mstr`
--

INSERT INTO `admin_mstr` (`aid`, `aname`, `alastname`, `aemail`, `aalterEmail`, `acontact`, `apass`, `agender`, `aaddress`, `acity`, `azip`, `astate`, `acountry`, `apic`, `aquite`, `astatus`, `alastlogin`) VALUES
(1, 'Rahul', 'Borse', 'rahulborse@gmail.com', 'rahul@borse.yog', '85134684654', 'rahul', 'Male', '67 Ranchhod Nagar', 'Surat', '394210', 'Gujarat', 'India', '999ea50b684ba7006ff977e0a3412b63.jpg', '					  					  					  					  					  																														', 'Active', '2018-03-19 05:00:53'),
(5, 'abcd', 'efgh', 'abcde@efg.com', 'abc@abc.com', '6555555555', 'rahul', '', '', '', '', '', '', '', '', 'Deactive', '2018-02-28 06:40:28'),
(7, 'xyz', 'pqr', 'xyz@xyz.com', '', '', 'rahul', 'Male', '67 Ranchhod Nagar', '', '', '', '', '8441fe5894a47fd2542f9bdf3b6397b1.jpg', '					  						', 'Active', '2018-02-28 06:40:28'),
(8, 'gulab', 'nandanvar', 'gn@gmail.com', '', '', 'rahul', '', '', '', '', '', '', '', '', '', '2018-02-28 06:40:28'),
(9, '', '', '', '', '', 'rahul', '', '', '', '', '', '', '', '', 'Deactive', '2018-02-28 06:40:28'),
(10, 'Rajesh', '', 'rajesh@gmai.com', '', '', 'rahul', '', '', '', '', '', '', 'R', '', 'Deactive', '2018-02-28 06:40:28'),
(11, 'Nitin', '', 'nitin@gmail.com', '', '', 'rahul', '', '', '', '', '', '', 'N', '', 'Deactive', '2018-02-28 06:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `area_name` varchar(50) NOT NULL,
  `area_pincode` int(50) NOT NULL,
  `areastatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `areadate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `city_id`, `state_id`, `area_name`, `area_pincode`, `areastatus`, `areadate`) VALUES
(2, 4, 4, 'Udhna', 394210, 'Active', '2018-02-21 19:34:11'),
(3, 4, 4, 'Dindoli', 394210, 'Active', '2018-03-18 10:17:53'),
(4, 4, 4, 'Dumasgam', 394120, 'Active', '2018-03-18 10:18:36'),
(5, 4, 5, 'Adajan', 394215, 'Active', '2018-03-18 10:09:08'),
(6, 4, 4, 'Navagam', 394185, 'Active', '2018-03-18 10:20:19'),
(7, 4, 4, 'Nanpura', 395001, 'Active', '2018-03-18 10:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `askfor_available`
--

CREATE TABLE `askfor_available` (
  `ask_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `ask_status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  `ask_regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `askfor_available`
--

INSERT INTO `askfor_available` (`ask_id`, `prd_id`, `user_email`, `ask_status`, `ask_regdate`) VALUES
(6, 20, 'koriavinash@gmail.com', 'Deactive', '2018-03-25 13:56:30'),
(7, 20, 'koriavinash123@gmail.com', 'Deactive', '2018-03-25 13:57:29'),
(8, 20, 'koriavinash567@gmail.com', 'Deactive', '2018-03-25 14:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `brand_img` varchar(50) NOT NULL,
  `branddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `brand_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `cat_id`, `subcat_id`, `brand_name`, `brand_img`, `branddate`, `brand_status`) VALUES
(54, 25, 46, 'Raymond', '2da9aa7053e797176222ac149021b1ca.png', '2018-03-16 19:46:12', 'Active'),
(55, 25, 46, 'United-Colors-of-benetton', '59055d185f67a4f51142ff39dc095ed6.jpg', '2018-03-16 19:46:30', 'Active'),
(56, 25, 46, 'Wranger', 'a211a3d612f181f71bedbc57eb50cc5a.png', '2018-03-16 19:46:48', 'Active'),
(57, 25, 47, 'Reebok', '6f02021f8a142d3b753d33388a8bae04.png', '2018-03-16 19:47:17', 'Active'),
(58, 27, 49, 'Lee', 'e247b53799c7f399c2acbae38b1e9127.png', '2018-03-16 19:47:33', 'Active'),
(59, 25, 46, 'Levis', 'ce78ec327dfdfd673d4d0a6875a620a5.png', '2018-03-16 19:45:29', 'Active'),
(60, 24, 36, 'LAVA', '83336fbd4e9bf5e0f47fea3f6a0d9e39.jpeg', '2018-03-16 19:45:52', 'Active'),
(61, 24, 28, 'Acer', '5ae5bd3deab07aa8755b3693e9f28f49.jpg', '2018-03-16 19:45:00', 'Active'),
(62, 24, 36, 'VIVO', 'ed4962f60cbefe21f149a20bf3293f77.png', '2018-03-16 19:44:47', 'Active'),
(63, 24, 30, 'Adidas', '74558b4dd2ac0527af88c0b639f616b3.png', '2018-03-16 19:44:20', 'Active'),
(64, 24, 28, 'Dell', 'daabd24a747ed75103c7bb28b3407e9a.png', '2018-03-16 19:48:16', 'Active'),
(65, 24, 28, 'Lenovo', '134c04d5d1084950fd2137fce4a4f10f.png', '2018-03-16 19:48:46', 'Active'),
(66, 24, 28, 'H P', 'd7b7d4c95795d1d170c8c42bb3254129.png', '2018-03-16 19:49:07', 'Active'),
(67, 24, 36, 'HTC', '24e555f8d3ab37a081f03f4e293059e2.png', '2018-03-16 19:49:45', 'Active'),
(68, 24, 36, 'Panasonic', '2de45b29b68fc0efe756b6b49d259249.jpg', '2018-03-16 19:50:20', 'Active'),
(69, 24, 36, 'Assus', '256854b1ae264e0b7f16a626afe8006e.png', '2018-03-16 19:50:50', 'Active'),
(70, 27, 49, 'Wranger', 'b6a26910f4e8df2386cdcd6ce7c4bb7a.png', '2018-03-16 19:51:30', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `cetegory`
--

CREATE TABLE `cetegory` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  `cat_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cetegory`
--

INSERT INTO `cetegory` (`cat_id`, `cat_name`, `cat_status`, `cat_date`) VALUES
(24, 'Electronics', 'Active', '2018-02-28 10:01:25'),
(25, 'Mens', 'Active', '2018-03-07 13:28:42'),
(27, 'Woomen', 'Active', '2018-03-07 07:14:51'),
(28, 'Furniture', 'Active', '2018-03-16 04:33:35'),
(30, 'Baby & Kids', 'Active', '2018-03-05 13:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `citystatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `citydate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`, `citystatus`, `citydate`) VALUES
(4, 4, 'Surat', 'Active', '2018-03-18 10:02:13'),
(5, 5, 'Mumbai', 'Active', '2018-02-21 19:40:22'),
(6, 6, 'nc mcx ', 'Deactive', '2018-02-22 10:13:50'),
(7, 4, 'Navasari', 'Active', '2018-02-26 17:10:13'),
(8, 4, 'Vapi', 'Active', '2018-02-26 17:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_msg` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `contact_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `contact_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_msg`, `contact_no`, `contact_status`, `contact_date`) VALUES
(2, 'Dinesh', 'dinesh@borse.com', 'ghchgchc hgchh hhyvhv hfhvbjkbj hvhvh hvhvh hvhvhvvjhhj hvhjjh hvhjj jhvjhj nvjhjb  vjhvjhhvjhj jhhh', '8140503406', 'Deactive', '2018-02-22 09:36:29'),
(3, 'Nikhil', 'nikhil@hotmail.com', 'bhbdgfjgbjf jbfjbgbfg bbfhgfuhgffg hgu hguitrg jgurg jhgfu kjhgkhd jggfdfkhfhuhthgurtt j', '9558158131', 'Active', '2018-02-22 10:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `cupon_code`
--

CREATE TABLE `cupon_code` (
  `cupon_id` int(11) NOT NULL,
  `cupon_code` varchar(50) NOT NULL,
  `cupon_email` varchar(50) NOT NULL,
  `cupon_use_code` varchar(50) NOT NULL,
  `status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cupon_code`
--

INSERT INTO `cupon_code` (`cupon_id`, `cupon_code`, `cupon_email`, `cupon_use_code`, `status`, `date`) VALUES
(1, '12345', 'rahulborse@gmail.com', '1', 'Deactive', '2018-03-25 16:47:41'),
(2, '2610', 'rahulborsei@gmail.com', '0', 'Active', '2018-03-25 09:40:05'),
(3, '1997', 'rahulborse@gmail.com', '1', 'Deactive', '2018-03-25 10:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `discount_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `discount_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `discount_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `feedby_name` varchar(50) NOT NULL,
  `feedby_email` varchar(50) NOT NULL,
  `feed_rating` varchar(50) NOT NULL,
  `feed_reviews` varchar(50) NOT NULL,
  `feed_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `feed_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `prd_id`, `feedby_name`, `feedby_email`, `feed_rating`, `feed_reviews`, `feed_status`, `feed_date`) VALUES
(1, 17, 'Rakesh', 'rahulborse@gmail.com', '4', 'vigyyyyuyu', 'Active', '2018-03-26 04:10:56'),
(2, 17, 'Rakesh', 'rahulborse@gmail.com', '4', 'vigyyyyuyu', 'Active', '2018-03-26 04:11:57'),
(3, 17, 'Rakesh', 'rahulborse@gmail.com', '4', 'Good Product', 'Active', '2018-03-26 04:18:53'),
(4, 17, 'Rakesh', 'rahulborse@gmail.com', '4', 'Good Product', 'Active', '2018-03-26 04:19:14'),
(16, 17, 'Rakesh', 'rahulborse@gmail.com', '4', 'b kjck j kjfbkj fs fk ls nclkndfnvdos kdlnbldsdnln', 'Active', '2018-03-26 04:22:11'),
(17, 17, 'Rakesh', 'rahulborse@gmail.com', '5', 'sdshvdjsv djkvkjfv ddjkvbfdk fddjkv dkjav dsk kdsv', 'Active', '2018-03-26 04:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offer_id` int(11) NOT NULL,
  `offer_img1` varchar(200) NOT NULL,
  `offer_img2` varchar(200) NOT NULL,
  `offer_title` varchar(100) NOT NULL,
  `offer_description` varchar(200) NOT NULL,
  `offer_startdate` date NOT NULL,
  `offer_enddate` date NOT NULL,
  `offerstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  `offerdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offer_id`, `offer_img1`, `offer_img2`, `offer_title`, `offer_description`, `offer_startdate`, `offer_enddate`, `offerstatus`, `offerdate`) VALUES
(7, '05591230250bebb0acac6a523ff2013c.png', '', 'Holi Special', 'Bumper Offer', '2018-03-19', '2018-03-22', 'Active', '2018-03-22 17:18:04'),
(8, '8c182ee8f2846cd6d977bd721ef1af49.png', '', 'Freindship Special', 'Bumper Offer', '2018-03-19', '2018-04-05', 'Active', '2018-03-19 05:30:48'),
(9, 'b965d7d031b90a84025408dc0b3b48e3.png', '', 'Discount And Offer', 'Discount And Offer', '2018-03-16', '2018-03-21', 'Active', '2018-03-21 13:19:47'),
(10, '9a1f5d9887178a7e1c1af93bc71a4eee.png', '', 'Lenovo Offer Exclusive Now', 'Lenovo Offer Exclusive Now On Webmart', '2018-03-16', '2018-04-15', 'Active', '2018-03-16 06:04:09'),
(11, 'd9810679b3b878c97144eca646781681.png', '', 'Mens T-shirts offer', 'Mens T-shirts offer', '2018-03-16', '2018-03-22', 'Active', '2018-03-22 17:18:04'),
(17, '082fdf76d6a6d598b471edfc0f13ffd3.png', '', 'Mens Watch Offer', 'Mens Watch Offer hvfjv jbvbf kfvbfkv', '2018-03-16', '2018-05-16', 'Active', '2018-03-16 06:05:30'),
(18, 'e53611cd627b0a69496c7e9e84bf9839.jpg', '', 'hhhjj', 'nhjjk jjjkk jjknklnkln', '2018-03-07', '2018-03-14', 'Active', '2018-03-14 12:40:27'),
(19, '8549fc9cc514d52947a6c2486d9700a0.jpg', '', 'fjhjhjjh jhhjjhv', 'bfvjbjkb', '2018-03-07', '2018-03-14', 'Active', '2018-03-14 12:40:27'),
(20, 'dc51c35f82caa7bb4ee002c67e2d8b61.jpg', '', 'Diwali', 'hvbhdbv dvbjvbfdv djfvbfdjkvbf jdfvjdfvbdfv ffvhjv', '2018-03-07', '2018-03-24', 'Active', '2018-03-24 12:54:42'),
(21, 'feb213af741cfdf7f7a3a6e69b88848a.png', '', 'Offer For limited Time', 'nvbfhv jvfdvb kjbf vvjvkbiub kjbuvibv jkbifudb kfbidfb dfdbuivfd', '2018-03-07', '2018-03-20', 'Active', '2018-03-20 17:12:15'),
(22, '195aec019dc9445aac47c55ee73ab16c.jpg', '', 'abc', 'abc', '2018-03-09', '2018-03-23', 'Deactive', '2018-03-23 12:48:08'),
(23, 'c744c38487f6e07ec9cd2b08f758f7c3.png', '', 'efg', 'efg', '2018-03-09', '2018-03-23', 'Deactive', '2018-03-23 12:48:08'),
(24, 'eee010cbd445b60703535fd42d341890.jpg', '', 'ghi', 'ghi', '2018-03-09', '2018-03-23', 'Deactive', '2018-03-23 12:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_mstr`
--

CREATE TABLE `order_mstr` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `shipping_address` varchar(200) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `deliver_charg` varchar(50) NOT NULL,
  `cupon_amount` varchar(50) NOT NULL,
  `order_status` enum('Pending','Confirm','Dispatch','Delivered') NOT NULL DEFAULT 'Pending',
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_mstr`
--

INSERT INTO `order_mstr` (`order_id`, `user_id`, `user_name`, `user_lastname`, `user_email`, `user_contact`, `user_address`, `shipping_address`, `order_no`, `payment_method`, `deliver_charg`, `cupon_amount`, `order_status`, `order_date`) VALUES
(1, 9, 'Rahul', 'Borse', 'rahulborse@gmail.com', '9558158131', '67 Ranchhod Nagar Dindoli Surat-Gujarat-India', '67 Ranchhod Nagar Dindoli Surat-Gujarat-India', '25/03/1644', 'COD', '50', '9220', 'Pending', '2018-03-25 11:12:56'),
(2, 9, 'Rahul', 'Borse', 'rahulborse@gmail.com', '9558158131', '67 Ranchhod Nagar Dindoli Surat-Gujarat-India', '67 Ranchhod Nagar Dindoli Surat-Gujarat-India', '25/03/7687', 'COD', '50', '0', 'Pending', '2018-03-25 11:23:28'),
(3, 9, 'Rahul', 'Borse', 'rahulborse@gmail.com', '9558158131', '67 Ranchhod Nagar Dumasgam Surat-Gujarat-India', '67 Ranchhod Nagar Dumasgam Surat-Gujarat-India', '25/03/9866', 'COD', '50', '99220', 'Pending', '2018-03-25 16:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prd_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `ptype_id` int(11) DEFAULT NULL,
  `offer_id` int(11) NOT NULL,
  `prd_name` varchar(50) NOT NULL,
  `prd_price` varchar(50) NOT NULL,
  `prd_discount` varchar(50) NOT NULL,
  `prd_stock` varchar(50) NOT NULL,
  `prd_color` varchar(50) NOT NULL,
  `prd_size` varchar(50) DEFAULT NULL,
  `prd_description` varchar(200) NOT NULL,
  `prd_feature` varchar(200) NOT NULL,
  `prd_img1` varchar(200) NOT NULL,
  `prd_img2` varchar(200) NOT NULL,
  `prd_img3` varchar(200) NOT NULL,
  `prd_img4` varchar(200) NOT NULL,
  `prd_stars` int(11) DEFAULT NULL,
  `prd_startdate` date NOT NULL,
  `prd_enddate` date NOT NULL,
  `prd_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `prd_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prd_id`, `cat_id`, `subcat_id`, `brand_id`, `ptype_id`, `offer_id`, `prd_name`, `prd_price`, `prd_discount`, `prd_stock`, `prd_color`, `prd_size`, `prd_description`, `prd_feature`, `prd_img1`, `prd_img2`, `prd_img3`, `prd_img4`, `prd_stars`, `prd_startdate`, `prd_enddate`, `prd_status`, `prd_date`) VALUES
(17, 24, 28, 61, NULL, 8, 'Acer Notebok', '45000', '15', '10', 'White-Black', '', 'Model Number	 :	A315-51\r\nPart Number	 :	NX.GNPSI.002\r\nSeries	 	 :	Aspire 3\r\nType		 :	Notebook\r\nSuitable For	 :	Processing & Multitasking, Travel & Business\r\nBattery Backup	 :	Upto 6.5 hours\r\nPower Sup', 'Intel Core i3 Processor (6th Gen)\r\n4 GB DDR4 RAM\r\nLinux/Ubuntu Operating System\r\n500 GB HDD\r\n15.6 inch Display\r\n', 'f2fb0c86338a37c316cdce54d0d193c6.jpg', '7c3273adecbfe025916bff09105e782f.jpg', '44faffe6eaa36caf3761310e0f01924f.jpg', '', 4, '2018-03-25', '2018-03-31', 'Active', '2018-03-26 04:22:11'),
(18, 24, 28, 61, NULL, 8, 'Dell Inspiron 3467', '45000', '5', '25', 'White-Silver', '', '				 				  				  Sales Package	:	Laptop, Battery, Power Adaptor, User Guide, Warranty Documents\r\nModel Number	:	3467\r\nPart Number	:	A566513UIN9/A561201UIN9\r\nModel Name	:	Inspiron 3467\r\nSeries		:	Inspi', '				 				  				  Intel Core i3 Processor (6th Gen)\r\n4 GB DDR4 RAM\r\nLinux/Ubuntu Operating System\r\n1 TB HDD\r\n14 inch Display\r\n', 'a096c04582e89770f9a558488785dcb9.jpg', '53513609c6a1e263adc7a75d7324c980.jpg', 'c84139962f72afbf7f8e17f934430641.jpg', '', 0, '2018-03-25', '2018-04-30', 'Active', '2018-03-25 09:15:40'),
(20, 25, 46, 59, 35, 9, 'Levi\'s Printed Men\'s Round Neck ', '1100', '5', '0', 'Blue-Orange', 'M,L,XL', 'o	Pack of		:	1\r\no	Style Code	:	16960-0170Red\r\no	Neck Type	:	Round Neck\r\no	Ideal For		:	Men\'s\r\no	Pattern		:	Printed\r\no	Sleeve		:	Half Sleeve\r\no	Suitable For	:	Western Wear\r\no	Brand Fit		:	Regular\r\n', '•	Fabric: Cotton\r\n•	Regular Fit Round Neck T-shirt\r\n•	Pattern: Printed\r\n•	Half Sleeve\r\n', 'bbfed26dac344e070e541d7afa2ece0e.jpg', '9e968da2652ee054cbeb21c011c78fb5.jpg', '662a127e69435577239e45e5c9f466ae.jpg', '', 0, '2018-03-25', '2018-05-01', 'Active', '2018-03-25 13:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_replace`
--

CREATE TABLE `product_replace` (
  `replace_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `replace_resion` varchar(100) NOT NULL,
  `replace_description` varchar(100) NOT NULL,
  `replace_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `replace_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `ptype_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `ptype_name` varchar(150) NOT NULL,
  `ptype_status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  `ptype_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`ptype_id`, `cat_id`, `subcat_id`, `ptype_name`, `ptype_status`, `ptype_date`) VALUES
(31, 25, 46, 'Jacket', 'Active', '2018-03-16 04:24:02'),
(32, 25, 46, 'Jeans', 'Active', '2018-03-16 04:24:00'),
(33, 25, 46, 'Kurtas', 'Active', '2018-03-16 04:24:58'),
(34, 25, 46, 'Shirts', 'Active', '2018-03-16 04:25:00'),
(35, 25, 46, 'T-Shirts', 'Active', '2018-03-16 04:25:03'),
(36, 25, 46, 'Suit & Blazer', 'Active', '2018-03-16 04:26:38'),
(37, 25, 46, 'Trausers', 'Active', '2018-03-16 04:26:36'),
(38, 25, 47, 'Causal Shoes', 'Active', '2018-03-16 04:26:33'),
(39, 25, 47, 'Formal Shoes', 'Active', '2018-03-16 04:26:31'),
(40, 25, 47, 'Sandal & Floaters', 'Active', '2018-03-16 04:27:23'),
(41, 25, 47, 'Sport Boot', 'Active', '2018-03-16 04:27:25'),
(42, 27, 49, 'Dress', 'Active', '2018-03-16 04:28:56'),
(43, 27, 49, 'Sarees', 'Active', '2018-03-16 04:28:54'),
(44, 27, 49, 'Kurtass', 'Active', '2018-03-16 04:28:49'),
(45, 27, 50, 'Causal Shoes', 'Active', '2018-03-16 04:30:00'),
(46, 27, 50, 'Formal Shoes', 'Active', '2018-03-16 04:30:03'),
(47, 27, 50, 'Sport Boot', 'Active', '2018-03-16 04:30:24'),
(48, 27, 51, 'Bangles', 'Active', '2018-03-16 04:31:16'),
(49, 27, 51, 'Braslets', 'Active', '2018-03-16 04:31:13'),
(50, 27, 51, 'Neckless', 'Active', '2018-03-16 04:31:37'),
(51, 27, 51, 'Rings', 'Active', '2018-03-16 04:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(50) NOT NULL,
  `slider_img` varchar(500) NOT NULL,
  `sliderstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `sliderdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_img`, `sliderstatus`, `sliderdate`) VALUES
(12, 'Slider 3', 'a49bfa6d097ac4c07b0f9ff0c86e5b96.jpg', 'Deactive', '2018-02-27 18:00:09'),
(13, 'Special', '51f01022351e6f5560a80658824edd61.jpg', 'Deactive', '2018-02-27 18:00:12'),
(14, 'Welcome', '5df8ccc290b514808f43fc016a356734.jpg', 'Active', '2018-02-27 18:08:28'),
(15, 'Frieday Sale', 'cd23d4bb7f8aca6812a320d0f43eb1d7.jpg', 'Active', '2018-02-27 17:32:42'),
(16, 'Welcome To Yog ValleY', '0b084fd78130b2cd085fefb07eae96b4.jpg', 'Active', '2018-02-27 17:59:45'),
(17, 'Flash Sale Is Live', 'c1db9d229e8873efd8271e5c06e81bb0.jpg', 'Active', '2018-02-27 17:59:13'),
(18, 'New Arrivels', '00ef21bdaac7a87afd77c153ba6cad55.jpg', 'Active', '2018-02-27 18:04:49'),
(19, 'Summer Sale', '245aa75fd58ad56191b7001114cd9fb0.jpg', 'Deactive', '2018-02-28 06:42:01'),
(20, 'Summer Special', '5586e858e4c1acb594014012f41be5be.jpg', 'Active', '2018-03-04 13:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `statestatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `statedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `statestatus`, `statedate`) VALUES
(4, 'Gujarat', 'Active', '2018-02-22 10:11:05'),
(5, 'Maharashtra', 'Deactive', '2018-02-22 10:11:00'),
(6, 'UP', 'Deactive', '2018-03-18 10:01:49'),
(7, 'dvdhvbjhds', 'Deactive', '2018-03-18 10:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `store_cart`
--

CREATE TABLE `store_cart` (
  `store_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `Qty` int(11) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `total_amt` int(50) NOT NULL,
  `storestatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `storedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_cart`
--

INSERT INTO `store_cart` (`store_id`, `prd_id`, `user_id`, `order_no`, `Qty`, `color`, `size`, `total_amt`, `storestatus`, `storedate`) VALUES
(1, 20, 9, '25/03/1644', 1, NULL, NULL, 1100, 'Active', '2018-03-25 11:12:56'),
(2, 18, 9, '25/03/1644', 1, NULL, NULL, 45000, 'Active', '2018-03-25 11:12:56'),
(3, 18, 9, '25/03/7687', 1, NULL, NULL, 45000, 'Active', '2018-03-25 11:23:28'),
(4, 20, 9, '25/03/7687', 1, NULL, NULL, 1100, 'Active', '2018-03-25 11:23:29'),
(5, 20, 9, '25/03/9866', 1, NULL, NULL, 1100, 'Active', '2018-03-25 16:48:47'),
(6, 18, 9, '25/03/9866', 6, NULL, NULL, 270000, 'Active', '2018-03-25 16:48:47'),
(7, 17, 9, '25/03/9866', 5, NULL, NULL, 225000, 'Active', '2018-03-25 16:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_name` varchar(50) NOT NULL,
  `subcatstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  `subcatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `cat_id`, `subcat_name`, `subcatstatus`, `subcatdate`) VALUES
(28, 24, 'Laptops', 'Active', '2018-02-28 10:16:20'),
(30, 24, 'Televisons', 'Active', '2018-02-28 10:16:29'),
(31, 24, 'Smart Watches', 'Active', '2018-02-28 10:17:03'),
(36, 24, 'Mobile', 'Active', '2018-02-27 17:13:51'),
(46, 25, 'Clothes', 'Active', '2018-03-16 04:21:32'),
(47, 25, 'Footwear', 'Active', '2018-03-16 04:21:57'),
(48, 25, 'Watch', 'Active', '2018-03-16 04:21:52'),
(49, 27, 'Clothes', 'Active', '2018-03-16 04:21:48'),
(50, 27, 'Footwear', 'Active', '2018-03-16 04:21:42'),
(51, 27, 'Jwellery', 'Active', '2018-03-16 04:21:37'),
(52, 27, 'Watch', 'Active', '2018-03-16 04:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_contact` varchar(15) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `userstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `userdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_lastname`, `user_email`, `user_contact`, `user_password`, `userstatus`, `userdate`) VALUES
(1, 'Rahul', 'Borse', 'rahul@gmail.com', '9558158131', 'rahul', 'Deactive', '2018-03-09 10:35:27'),
(2, 'Avinash', 'Kori', 'avi@gmail.com', '8140503406', 'avinash', 'Deactive', '2018-03-09 10:35:39'),
(3, 'Dharmesh', 'Jadhav', 'dharmesh@gmail.com', '9978490413', 'dharmesh', 'Active', '2018-03-09 10:35:47'),
(4, 'Satish', 'Patil', 'satish@gmail.com', '9099606365', 'satish', 'Deactive', '2018-03-09 10:36:20'),
(8, 'Rakesh', 'Borse', 'rakesh@gmail.com', '9140900971', 'rakesh', 'Active', '2018-03-09 10:36:44'),
(9, 'Rakesh', 'Borse', 'rahulborse@gmail.com', '8140503407', '123456', 'Active', '2018-03-09 10:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wishlist_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `wishlist_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `prd_id`, `user_id`, `wishlist_status`, `wishlist_date`) VALUES
(9, 20, 9, 'Active', '2018-03-25 11:36:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `prd_id` (`prd_id`),
  ADD KEY `use_id` (`user_id`);

--
-- Indexes for table `admin_mstr`
--
ALTER TABLE `admin_mstr`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `askfor_available`
--
ALTER TABLE `askfor_available`
  ADD PRIMARY KEY (`ask_id`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `subcat_id` (`subcat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `cetegory`
--
ALTER TABLE `cetegory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `cupon_code`
--
ALTER TABLE `cupon_code`
  ADD PRIMARY KEY (`cupon_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`discount_id`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `order_mstr`
--
ALTER TABLE `order_mstr`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `subcat_id` (`subcat_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `ptype_id` (`ptype_id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `product_replace`
--
ALTER TABLE `product_replace`
  ADD PRIMARY KEY (`replace_id`),
  ADD KEY `prd_id` (`prd_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`ptype_id`),
  ADD KEY `cat_id` (`subcat_id`),
  ADD KEY `cat_id_2` (`cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `store_cart`
--
ALTER TABLE `store_cart`
  ADD PRIMARY KEY (`store_id`),
  ADD KEY `prd_id` (`prd_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `prd_id` (`prd_id`),
  ADD KEY `use_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_mstr`
--
ALTER TABLE `admin_mstr`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `askfor_available`
--
ALTER TABLE `askfor_available`
  MODIFY `ask_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `cetegory`
--
ALTER TABLE `cetegory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cupon_code`
--
ALTER TABLE `cupon_code`
  MODIFY `cupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `order_mstr`
--
ALTER TABLE `order_mstr`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `product_replace`
--
ALTER TABLE `product_replace`
  MODIFY `replace_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `ptype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `store_cart`
--
ALTER TABLE `store_cart`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD CONSTRAINT `addtocart_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `product` (`prd_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `addtocart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `area_ibfk_2` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `askfor_available`
--
ALTER TABLE `askfor_available`
  ADD CONSTRAINT `askfor_available_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `product` (`prd_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `brand_ibfk_1` FOREIGN KEY (`subcat_id`) REFERENCES `subcategory` (`subcat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `brand_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `cetegory` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discount`
--
ALTER TABLE `discount`
  ADD CONSTRAINT `discount_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `product` (`prd_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `product` (`prd_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_mstr`
--
ALTER TABLE `order_mstr`
  ADD CONSTRAINT `order_mstr_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `cetegory` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`subcat_id`) REFERENCES `subcategory` (`subcat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_5` FOREIGN KEY (`ptype_id`) REFERENCES `product_type` (`ptype_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_6` FOREIGN KEY (`offer_id`) REFERENCES `offer` (`offer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_replace`
--
ALTER TABLE `product_replace`
  ADD CONSTRAINT `product_replace_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `product` (`prd_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_replace_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_replace_ibfk_3` FOREIGN KEY (`order_id`) REFERENCES `order_mstr` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_type`
--
ALTER TABLE `product_type`
  ADD CONSTRAINT `product_type_ibfk_1` FOREIGN KEY (`subcat_id`) REFERENCES `subcategory` (`subcat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_type_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `cetegory` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `store_cart`
--
ALTER TABLE `store_cart`
  ADD CONSTRAINT `store_cart_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `product` (`prd_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `store_cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `cetegory` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `product` (`prd_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
