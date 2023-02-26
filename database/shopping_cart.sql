-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 12:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `member_id` int(11) NOT NULL,
  `m_user` varchar(20) NOT NULL,
  `m_pass` varchar(20) NOT NULL,
  `m_level` varchar(50) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `m_tel` varchar(20) NOT NULL,
  `m_address` varchar(200) NOT NULL,
  `m_img` varchar(250) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`member_id`, `m_user`, `m_pass`, `m_level`, `m_name`, `m_email`, `m_tel`, `m_address`, `m_img`, `date_save`) VALUES
(1, 'admin', 'admin', 'admin', 'admin_dev', 'devtai@gmail.com', '0983738651', 'กรุงเทพมหานคร', '92306749720210628_000204.png', '2021-06-01 19:04:28'),
(2, 'member', '55', 'member', 'member', 'waiyawoot@gmail.com', '0931294710', 'กรุงเทพมหานคร', '145010926420210602_090554.png', '2021-06-01 19:05:54'),
(3, 'member41', '11', 'member', 'wootsaro', 'devtai2@gmail.com', '0852134657', 'กรุงเทพมหานคร', '99698979420210626_224421.png', '2021-06-01 19:06:39'),
(4, 'admino', '15634568456', 'admin', 'admin somi', 'devtai410@gmail.com', '0897444124', 'กรุงเทพมหานคร', '171855469020210602_090904.png', '2021-06-01 19:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `p_detail` text NOT NULL,
  `p_img` varchar(200) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_qty` varchar(11) NOT NULL,
  `p_unit` varchar(20) NOT NULL,
  `p_view` int(10) NOT NULL DEFAULT '0',
  `datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `p_name`, `type_id`, `p_detail`, `p_img`, `p_price`, `p_qty`, `p_unit`, `p_view`, `datesave`) VALUES
(1, 'เค้กบราวนี่หน้านิ่ม', 2, ' มีลักษณะเนื้อฉ่ำแน่น รสชาติเข้มข้น มีสัดส่วนของช็อกโกแลตสูงและสัดส่วนของแป้งจะน้อยกว่าแบบอื่น หน้ามีความกรอบ หรืออาจเรียกได้ว่า บราวนี่หน้ากรอบ ', '57506687220210626_233828.jpg', 120, '12', 'ชิ้น', 0, '2021-06-26 16:38:28'),
(2, 'เค้กบราวนี่หน้านิ่ม', 1, 'มีลักษณะเนื้อฉ่ำแน่น รสชาติเข้มข้น มีสัดส่วนของช็อกโกแลตสูงและสัดส่วนของแป้งจะน้อยกว่าแบบอื่น หน้ามีความกรอบ หรืออาจเรียกได้ว่า บราวนี่หน้ากรอบ', '103563202620210626_234613.jpg', 200, '10', 'กล่อง', 0, '2021-06-26 16:46:13'),
(3, 'เค้กบราวนี่หน้านิ่ม', 3, 'มีลักษณะเนื้อฉ่ำแน่น รสชาติเข้มข้น มีสัดส่วนของช็อกโกแลตสูงและสัดส่วนของแป้งจะน้อยกว่าแบบอื่น หน้ามีความกรอบ หรืออาจเรียกได้ว่า บราวนี่หน้ากรอบ', '66496319120210626_234635.jpg', 100, '10', 'อัน', 0, '2021-06-26 16:46:35'),
(4, 'เค้กบราวนี่หน้านิ่ม', 4, 'มีลักษณะเนื้อฉ่ำแน่น รสชาติเข้มข้น มีสัดส่วนของช็อกโกแลตสูงและสัดส่วนของแป้งจะน้อยกว่าแบบอื่น หน้ามีความกรอบ หรืออาจเรียกได้ว่า บราวนี่หน้ากรอบ', '184682101020210628_164258.jpg', 120, '15', 'กล่อง', 0, '2021-06-26 16:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(1, 'อุปกรณ์เครื่องใช้'),
(2, 'อาหารและเครื่องดื่ม'),
(3, 'เครื่องตกแต่งภายใน'),
(4, 'อุปกรณ์เทคโนโลยี');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
