-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 02:51 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shelongs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `admin_user` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_status` varchar(255) NOT NULL,
  `admin_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_user`, `admin_password`, `admin_status`, `admin_create`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '0', '2018-10-28'),
(5, 'admin1', '21232f297a57a5a743894a0e4a801fc3', '1', '2018-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_no` varchar(255) NOT NULL,
  `bank_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bridge_make_up`
--

CREATE TABLE `bridge_make_up` (
  `bridge_make_up` int(255) NOT NULL,
  `cs_id` int(255) NOT NULL,
  `make_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bridge_make_up`
--

INSERT INTO `bridge_make_up` (`bridge_make_up`, `cs_id`, `make_id`) VALUES
(1, 8, 8),
(2, 8, 9),
(3, 8, 10),
(4, 8, 2),
(5, 8, 3),
(6, 8, 4),
(7, 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bridge_skin_problem`
--

CREATE TABLE `bridge_skin_problem` (
  `bridge_id` int(255) NOT NULL,
  `cs_id` int(255) NOT NULL,
  `pr_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bridge_skin_problem`
--

INSERT INTO `bridge_skin_problem` (`bridge_id`, `cs_id`, `pr_id`) VALUES
(1, 8, 1),
(2, 8, 2),
(3, 8, 3),
(4, 8, 2),
(5, 8, 3),
(6, 8, 4),
(7, 14, 1),
(8, 14, 2),
(9, 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cs_id` int(255) NOT NULL,
  `cs_email` varchar(255) NOT NULL,
  `cs_password` varchar(255) NOT NULL,
  `cs_no` varchar(255) NOT NULL,
  `cs_fname` varchar(255) DEFAULT NULL,
  `cs_lname` varchar(255) DEFAULT NULL,
  `cs_age` int(10) DEFAULT NULL,
  `cs_gender` varchar(255) DEFAULT NULL,
  `cs_tel` varchar(255) DEFAULT NULL,
  `cs_house_no` varchar(255) DEFAULT NULL,
  `cs_buliding` varchar(255) DEFAULT NULL,
  `cs_soi` varchar(255) DEFAULT NULL,
  `cs_road` varchar(255) DEFAULT NULL,
  `cs_sub_district` varchar(255) DEFAULT NULL,
  `cs_district` varchar(255) DEFAULT NULL,
  `cs_province` varchar(255) DEFAULT NULL,
  `cs_zipcode` varchar(255) DEFAULT NULL,
  `cs_budget` varchar(255) DEFAULT NULL,
  `cs_status` varchar(255) DEFAULT NULL,
  `skin_color` varchar(255) NOT NULL,
  `skin_type` varchar(255) NOT NULL,
  `cs_create_date` date NOT NULL,
  `cs_point` int(100) NOT NULL,
  `cs_dayend` date NOT NULL,
  `cs_expired` date NOT NULL,
  `cs_verify` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cs_id`, `cs_email`, `cs_password`, `cs_no`, `cs_fname`, `cs_lname`, `cs_age`, `cs_gender`, `cs_tel`, `cs_house_no`, `cs_buliding`, `cs_soi`, `cs_road`, `cs_sub_district`, `cs_district`, `cs_province`, `cs_zipcode`, `cs_budget`, `cs_status`, `skin_color`, `skin_type`, `cs_create_date`, `cs_point`, `cs_dayend`, `cs_expired`, `cs_verify`) VALUES
(8, 'test@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', 'test', 'test', 26, 'ชาย', '089-0314648', '322', '-', '-', '-', 'feqf', 'erwgwer', 'rwgre', '211457', '1,500 - 3,000 บาท', 'wait', 'สองสี', 'มัน', '2018-10-28', 0, '0000-00-00', '0000-00-00', 0),
(9, 'Testtt@gamil.com', '25d55ad283aa400af464c76d713c07ad', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wait', '', '', '0000-00-00', 0, '0000-00-00', '0000-00-00', 0),
(14, 'jirachot23@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'SHELONGS-1542192909', 'test', 'test', 25, 'ชาย', '086-5199930', '302', '-', '-', '-', '-', '-', 'กรุงเทพมหานคร', '271650', 'ต่ำกว่า 1,500 บาท', 'wait', 'สองสี', 'มัน', '2018-11-14', 0, '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `make_up`
--

CREATE TABLE `make_up` (
  `make_id` int(255) NOT NULL,
  `make_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `make_up`
--

INSERT INTO `make_up` (`make_id`, `make_name`) VALUES
(1, 'รองพื้น'),
(2, 'แป้ง'),
(3, 'บลิชออน'),
(4, 'อายแชโดว์'),
(5, 'ไฮไลท์'),
(6, 'คอนทัวร์และเฉดดิ้ง'),
(7, 'ลิปสติก'),
(8, 'มาสคาร่า'),
(9, 'อายไลเนอร์'),
(10, 'ผลิตภัณฑ์คิ้ว');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(255) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `cs_id` int(255) NOT NULL,
  `package_id` int(255) NOT NULL,
  `order_fname` varchar(255) NOT NULL,
  `order_lname` varchar(255) NOT NULL,
  `order_house_no` varchar(255) NOT NULL,
  `order_building` varchar(255) NOT NULL,
  `order_soi` varchar(255) NOT NULL,
  `order_road` varchar(255) NOT NULL,
  `order_sub_district` varchar(255) NOT NULL,
  `order_district` varchar(255) NOT NULL,
  `order_province` varchar(255) NOT NULL,
  `order_zipcode` varchar(255) NOT NULL,
  `order_payment` varchar(255) NOT NULL,
  `order_create` date DEFAULT NULL,
  `order_totalprice` int(100) NOT NULL,
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_no`, `cs_id`, `package_id`, `order_fname`, `order_lname`, `order_house_no`, `order_building`, `order_soi`, `order_road`, `order_sub_district`, `order_district`, `order_province`, `order_zipcode`, `order_payment`, `order_create`, `order_totalprice`, `order_status`) VALUES
(15, 'OD-1545053822', 14, 1, 'test', 'test', '302', '-', '-', '-', '-', '-', 'กรุงเทพมหานคร', '271650', 'โอนเงินผ่านธนาคาร', '2018-12-17', 415, 'Wait for payment');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_price` varchar(255) NOT NULL,
  `package_des` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `package_price`, `package_des`) VALUES
(1, 'test', '350', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(255) NOT NULL,
  `bank_id` int(255) NOT NULL,
  `cs_id` int(255) NOT NULL,
  `pay_tel` varchar(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `pay_price` int(255) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_time` varchar(255) NOT NULL,
  `pay_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `bank_id`, `cs_id`, `pay_tel`, `order_id`, `pay_price`, `pay_date`, `pay_time`, `pay_image`) VALUES
(1, 1, 14, '086-5199930', 15, 500, '2018-12-26', '20:50', '1545141032-thumb-1920-84631.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_code`
--

CREATE TABLE `promotion_code` (
  `code_id` int(100) NOT NULL,
  `code_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `promotion_code`
--

INSERT INTO `promotion_code` (`code_id`, `code_name`) VALUES
(107, 'k8jj'),
(108, 'x4LR'),
(109, '7SgF'),
(110, 'qjWc'),
(111, 'llkX'),
(112, 'M8Cp'),
(113, '6qbe'),
(114, 'Hy7Q'),
(115, 'uJRO'),
(116, 'O1JB'),
(117, 'u4qY'),
(118, 'pGBP'),
(119, 'u2mY'),
(120, 'XoTS'),
(121, 'AXm7'),
(122, 'mvW8'),
(123, '5HiV'),
(124, 'j3WH'),
(125, 'l4Z7'),
(126, 'Xiod'),
(127, 'UXwQ'),
(128, 'kDv7'),
(129, '3MRv'),
(130, 'f0pr'),
(131, 'xJNf'),
(132, '4Pwm'),
(133, 'w3c3'),
(134, 'uq9A'),
(135, 'qOLz'),
(136, 'LKHg'),
(137, 'mbTR'),
(138, 'VBFa'),
(139, 'DZ9Y'),
(140, 'lzW9'),
(141, 'EtFH'),
(142, 'p4bE'),
(143, 'd1JX'),
(144, '1EkO'),
(145, 'hApW'),
(146, 'ccC1'),
(147, 'CPvF'),
(148, 'Chpj'),
(149, 'YvkM'),
(150, 'h3e3');

-- --------------------------------------------------------

--
-- Table structure for table `skin_problem`
--

CREATE TABLE `skin_problem` (
  `pr_id` int(255) NOT NULL,
  `pr_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skin_problem`
--

INSERT INTO `skin_problem` (`pr_id`, `pr_name`) VALUES
(1, 'ผิวหน้าหม่นหมอง'),
(2, 'ริ้วรอย'),
(3, 'กระ/จุดด่างดำ'),
(4, 'ฝ้า'),
(5, 'รูขุมขนกว้าง'),
(6, 'ผิวมัน'),
(7, 'ผิวแพ้ง่าย'),
(8, 'ผิวแห้งลอก'),
(9, 'ผิวขาดน้ำ'),
(10, 'สิว');

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `web_id` int(255) NOT NULL,
  `web_title` varchar(255) NOT NULL,
  `web_keyword` varchar(255) NOT NULL,
  `web_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`web_id`, `web_title`, `web_keyword`, `web_description`) VALUES
(1, 'test1', 'test1', 'test1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `bridge_make_up`
--
ALTER TABLE `bridge_make_up`
  ADD PRIMARY KEY (`bridge_make_up`);

--
-- Indexes for table `bridge_skin_problem`
--
ALTER TABLE `bridge_skin_problem`
  ADD PRIMARY KEY (`bridge_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cs_id`);

--
-- Indexes for table `make_up`
--
ALTER TABLE `make_up`
  ADD PRIMARY KEY (`make_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `promotion_code`
--
ALTER TABLE `promotion_code`
  ADD PRIMARY KEY (`code_id`);

--
-- Indexes for table `skin_problem`
--
ALTER TABLE `skin_problem`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`web_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bridge_make_up`
--
ALTER TABLE `bridge_make_up`
  MODIFY `bridge_make_up` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bridge_skin_problem`
--
ALTER TABLE `bridge_skin_problem`
  MODIFY `bridge_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cs_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `make_up`
--
ALTER TABLE `make_up`
  MODIFY `make_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `promotion_code`
--
ALTER TABLE `promotion_code`
  MODIFY `code_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `skin_problem`
--
ALTER TABLE `skin_problem`
  MODIFY `pr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `web_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
