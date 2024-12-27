-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2024 at 07:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jain_business_forums`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_master`
--

CREATE TABLE `banner_master` (
  `bannerId` int(11) NOT NULL,
  `bannerName` varchar(500) DEFAULT NULL,
  `bannerimg` varchar(2000) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner_master`
--

INSERT INTO `banner_master` (`bannerId`, `bannerName`, `bannerimg`, `status`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'BANNER1', '1985595442.jpg', NULL, NULL, NULL, 1, '2023-09-20 11:20:29', 1, '2023-09-24 14:45:44', 1, NULL, NULL, NULL, NULL),
(2, 'banner2', '1697032805.jpg', NULL, NULL, NULL, 1, '2023-09-20 11:20:49', 1, '2023-09-24 14:45:51', 1, NULL, NULL, NULL, NULL),
(3, 'Banner 3', 'mahavir_images.jpeg', NULL, NULL, NULL, 1, '2024-11-28 08:09:18', 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bloodgropup_master`
--

CREATE TABLE `bloodgropup_master` (
  `bgroupId` int(11) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodgropup_master`
--

INSERT INTO `bloodgropup_master` (`bgroupId`, `bloodgroup`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'A+', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'A-', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'B+', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'B-', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'AB+', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'AB-', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'O+', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'O-', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branch_master`
--

CREATE TABLE `branch_master` (
  `branchId` bigint(50) NOT NULL,
  `branchName` varchar(100) DEFAULT NULL,
  `branchManagerName` varchar(200) DEFAULT NULL,
  `branchAddress` varchar(50) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `branch_master`
--

INSERT INTO `branch_master` (`branchId`, `branchName`, `branchManagerName`, `branchAddress`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Branch 1', 'Sumit bhakare', 'kolhapur', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-30 07:45:32'),
(2, 'Branch 2', 'Abhi', 'pune', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-30 07:45:32'),
(3, 'branch3', 'Pratik', 'mumbai', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-18 08:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `businesscategory_master`
--

CREATE TABLE `businesscategory_master` (
  `businessId` int(11) NOT NULL,
  `businessName` varchar(50) NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `businesscategory_master`
--

INSERT INTO `businesscategory_master` (`businessId`, `businessName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Doctor', NULL, NULL, 1, '2023-08-21 10:44:20', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Dairy', NULL, NULL, 1, '2023-08-21 10:44:31', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Hardware', NULL, NULL, 1, '2023-08-21 10:44:55', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Chemical Supplier', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Builder', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Building Contractor and material suppliers ', NULL, NULL, 1, NULL, NULL, '2024-01-22 15:57:01', NULL, NULL, NULL, NULL, NULL),
(7, 'Food Supplier', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Grocery  Supplier', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Sanitary Tiles sup', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Electrical', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Old and new car Dealer', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Car repairs', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Cement Articles', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Cement and steel supplier', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Water suppliers', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Electrician', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Interior decorators', NULL, NULL, 1, NULL, NULL, '2024-01-19 18:23:09', 1, NULL, NULL, NULL, NULL),
(18, 'Transporters', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Architect and interior decorators', NULL, NULL, 1, '2024-01-19 16:37:47', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Computers and hardware', NULL, NULL, 1, '2024-01-19 16:47:52', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Electronics equipment', NULL, NULL, 1, '2024-01-19 16:48:14', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Cctv ', NULL, NULL, 1, '2024-01-19 16:48:22', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Doctors', NULL, NULL, 1, '2024-01-19 16:48:37', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'CA and tax consultant', NULL, NULL, 1, '2024-01-19 16:50:10', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Home decor and furnishing', NULL, NULL, 1, '2024-01-19 17:20:55', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Grapic designer and printing', NULL, NULL, 1, '2024-01-19 17:33:47', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Manufacturing industry ', NULL, NULL, 1, '2024-01-20 10:40:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Medical services and supplements', NULL, NULL, 1, '2024-01-20 11:35:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Tourism and travel bookings', NULL, NULL, 1, '2024-01-20 11:36:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Super markets', NULL, NULL, 1, '2024-01-20 12:06:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Home appliances sales and repair', NULL, NULL, 1, '2024-01-20 18:15:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'IT SOFTWARE', NULL, NULL, 1, '2024-01-20 18:26:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Photo graphy video shooting', NULL, NULL, 1, '2024-01-20 20:27:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Hotel and food industry', NULL, NULL, 1, '2024-01-21 00:13:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Loans ', NULL, NULL, 1, '2024-01-21 10:40:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Insurance ', NULL, NULL, 1, '2024-01-21 10:40:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Industrial electrical suppliers', NULL, NULL, 1, '2024-01-22 13:21:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Electrical contarctor', NULL, NULL, 1, '2024-01-22 13:29:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Painting contractor', NULL, NULL, 1, '2024-01-22 13:29:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Cattle feed Manufacturer and suppliers', NULL, NULL, 1, '2024-01-22 13:31:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Plumbing material', NULL, NULL, 1, '2024-01-22 13:31:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Automobile dealers', NULL, NULL, 1, '2024-01-22 13:31:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Placement services', NULL, NULL, 1, '2024-01-22 13:32:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Solar equipments', NULL, NULL, 1, '2024-01-22 15:50:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Event managers', NULL, NULL, 1, '2024-01-22 16:32:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'Fabric ,clothing ,garments', NULL, NULL, 1, '2024-01-22 18:25:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Jewellery ', NULL, NULL, 1, '2024-01-22 19:05:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Gifts ', NULL, NULL, 1, '2024-01-22 19:06:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Steel utensil and articles', NULL, NULL, 1, '2024-01-22 19:07:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Msme consultants', NULL, NULL, 1, '2024-01-25 19:10:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'software development', NULL, NULL, 1, '2024-07-29 16:59:38', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Hardware', NULL, NULL, 1, '2024-08-02 18:49:28', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'software developing', NULL, NULL, 1, '2024-08-02 18:50:40', 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `businessregistration_master`
--

CREATE TABLE `businessregistration_master` (
  `Id` int(11) NOT NULL,
  `firmName` varchar(50) DEFAULT NULL,
  `mobileNo` varchar(12) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `officeAddress` varchar(250) DEFAULT NULL,
  `officemobileNo` varchar(12) DEFAULT NULL,
  `residenceAddress` varchar(250) DEFAULT NULL,
  `wpmobileNo` varchar(12) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `taluka` varchar(100) DEFAULT NULL,
  `village` varchar(50) NOT NULL,
  `pinCode` int(11) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `firmCategory` int(11) DEFAULT NULL,
  `firmType` int(11) DEFAULT NULL,
  `partner` int(11) DEFAULT NULL,
  `ownerName` varchar(50) DEFAULT NULL,
  `bloodgroup` int(11) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `aadhaarCard` varchar(250) DEFAULT NULL,
  `panCard` varchar(250) DEFAULT NULL,
  `gstCertificate` varchar(250) DEFAULT NULL,
  `udyogCertifcate` varchar(250) DEFAULT NULL,
  `farmdescription` varchar(2000) DEFAULT NULL,
  `termcondition` varchar(250) DEFAULT NULL,
  `services` varchar(2000) NOT NULL,
  `visitingCard` varchar(250) NOT NULL,
  `status` int(11) DEFAULT 0,
  `profile` varchar(250) NOT NULL,
  `navId` int(11) NOT NULL DEFAULT 1,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `businessregistration_master`
--

INSERT INTO `businessregistration_master` (`Id`, `firmName`, `mobileNo`, `password`, `email`, `officeAddress`, `officemobileNo`, `residenceAddress`, `wpmobileNo`, `state`, `district`, `taluka`, `village`, `pinCode`, `website`, `firmCategory`, `firmType`, `partner`, `ownerName`, `bloodgroup`, `birthdate`, `aadhaarCard`, `panCard`, `gstCertificate`, `udyogCertifcate`, `farmdescription`, `termcondition`, `services`, `visitingCard`, `status`, `profile`, `navId`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(14, 'M/s.S.F.Chougule ', '1234567899', '123', 'Sureshchougulesangli@gmail.com', '347/6, Near birnale Medical College, Neminathnagar, Sangli  ', '9850881617', '21, Shantiban colony, Neminathnagar, Sangli  ', '9850881617', 'Maharashtra', 'Sangli', 'Miraj', 'Sangli', 416416, '', 6, 2, 2, 'Suresh Chougule ', 7, '1972-10-02', '1929767435.jpg', '1121184636.jpg', NULL, NULL, 'Government REGISTERED Road and building Contractor.  ', '1', '', '', 0, '', 1, NULL, NULL, 1, '2024-07-17', NULL, '2024-01-19', 14, NULL, NULL, NULL, NULL),
(15, 'Nabhiraj Nemanna Chougule', '9423868711', '123', 'nnchougule9929@gmail.com', 'Plot No 270, Vasant Dada Market Yard, Sangli. ', '9423868711', 'Plot No 270, Vasant Dada Market Yard, Sangli. ', '9423868711', 'Maharashtra ', 'Sangli', 'Miraj', 'Sangli', 416416, 'www.nncspices.co.in', 7, 1, 0, 'Sourabh Chougule', 5, '1993-04-23', '347238677.jpeg', '1488129214.jpeg', NULL, NULL, 'All Varieties of Turmeric Raw Material & Powder \r\n\r\nMajor Curcumin based supplier', '1', 'TURMERIC FINGER\r\nTURMERIC BULB\r\nTURMERIC KOCHA\r\nTURMERIC POWDER\r\n\r\nAll Turmeric polish & unpolish Varieties ', '1858024124.jpeg', 1, '', 1, NULL, NULL, 1, '2024-07-19', NULL, '2024-01-21', NULL, NULL, NULL, NULL, NULL),
(16, 'Padmini Engineering Works ', '9096667406', '123', 'pewsangli2021@gmail.com', 'Plot no. 842, S no. 451 Behind Om Kiran Hotel, Ratnagiri Nagpur Highway, Inam Dhamni, Sangli', '', 'Flat no 1 Trupti Apartment, Gulmohar Colony, Sangli', '9096667406', 'Maharashatra', 'Sangli', 'Miraj', 'Dhamni', 416416, '', 6, 1, 1, 'Pritam Bharat Pachore', 7, '1995-11-19', '1367305634.pdf', '261501410.jpeg', NULL, NULL, 'All Types of Fabrication Work', '1', '', '', 0, '', 1, NULL, NULL, 1, '2024-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Mahaveer udyog ', '9511254859', '123', 'suhaspatil1929@gmail.com', 'Sangli kolhapur road patil mala ankali ', '9511254859', 'Ankali', '9511254859', 'Maharashtra ', 'Sangli', 'Miraj', 'Ankali', 416416, 'suhas patil', 6, 1, 0, 'suhas patil', 1, '1996-10-19', '1635211260.jpg', '1915264038.jpg', '1301607881.jpg', NULL, 'Mahaveer udyog\r\nWe do all type of alluminium and  fabrication work \r\n\"Aluminium windows\r\n*Domal windows \r\n*Pleted mosquito mesh \r\n*S.S railing/ glass railing\r\n*Aluminium wooden coated    railing \r\n*Slim partition \r\n *Modular Kitchen trolley\r\n*Structure glazing\r\n*12mm glass work \r\n* ACP panel work\r\nFor all type of architectural works', '1', '', '', 0, '', 1, NULL, NULL, 1, '2024-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'SHANTINATH UPADHYE AND ASSOCAITES', '8793662285', '123', 'shantinathupadhye@gmail.com', 'SHANTINATH UPADHYE AND ASSOCIATES\r\nFLAT NO- 102 , 1 ST FLOOR ,  ALPHINE APPARTMENT, NEAR CHETANA PETROLPUMP , 100 FT ROAD , SANGLI', '2333563134', 'PLOT NO- 08 ,PADMADEEP BUNGLOW, GALLI NO- 06,\r\nDATTANAGAR, VISHRAMBHAG, SANGLI', '8793662285', 'MAHARASHTRA', 'SANGLI', 'MIRAJ', 'SANGLI', 416416, '', 24, 1, 0, 'SHANTINATH PRADIP UPADHYE', 1, '1988-09-28', '1524085405.pdf', '1053736783.PDF', NULL, '1751775963.pdf', 'ACCOUNTING , INCOME TAX , GST CONSULTANT', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-19', NULL, '2024-01-19', NULL, NULL, NULL, NULL, NULL),
(19, 'J d thote dairy', '9822132222', '123', 'jdthotedairy@yahoo.com', 'Sangli islampur  road ', '8380899799', 'Payas bunglow market yard sangli', '9325005599', 'Maharastra', 'Sangli', 'Walwa', 'Ashta', 416301, 'www.jdthotedairy.com', 2, 2, 0, 'Sheetall thote', 5, '1971-11-14', '376774414.jpg', '1926529900.jpg', NULL, NULL, 'Manufacturers of milk and milk products', '1', ' Dairy and dairy product wholesalers and retialers we take bulk orders of all products', '1688881211.jpg', 1, '', 1, NULL, NULL, 1, '2024-07-19', NULL, '2024-01-22', NULL, NULL, NULL, NULL, NULL),
(21, 'Urban Home Decor ', '7744014326', '1551', 'omcolours@gmail.com', '5th lane, Near Siddheshwar Mandir.\r\nLaxmi Road JAYSINGPUR ', '9422414326', '7744014326', '7744014326', 'MAHARASHTRA', 'Kolhapur ', 'Shirol', 'Jaysingpur ', 416101, '', 25, 1, 0, 'Mahaveer Neminath Bastawade ', 4, '1981-04-18', '1944807348.jpg', '1319160388.jpg', NULL, NULL, 'Wallpapers, Window Blinds & Curtains, customised SOFA, Mattresses, Bed & Bath accessories ', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-20', NULL, '2024-01-20', NULL, NULL, NULL, NULL, NULL),
(22, 'A T MAGDUM AND COMPANY', '9422406991', 'Sp638141#', 'atmagdum@gmail.com', '26/A, Mudis House, Mahaveer Nagar,', '', 'Plot Number 5, Rajmata Grugh Nirman Sanshta, Pushparaj Chowk, Sangli, Maharastra 416416', '9422406991', 'Maharastra', 'Sangli', 'Miraj', 'Sangli', 416416, 'www.atmagdum.com', 8, 2, 3, 'Siddharth Magdum', 1, '1977-12-12', '1333755941.pdf', '315142772.pdf', '58680094.pdf', '1680388613.pdf', 'TEA AND COFFEE, WHOLESELLERS AND Retailrs', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-20', NULL, '2024-01-20', NULL, NULL, NULL, NULL, NULL),
(23, 'Suresh Patil', '9823280777', 'SKdesigners', 'sureshpatil44@gmail.com', 'Sangli', '9823280777', 'Opp grampanchyat,Inam Dhamani.tal Miraj .dist sangli 413416', '9823280777', 'Maharashtra ', 'Sangli', 'Miraj', 'Inam Dhamani ', 416416, 'No', 17, 1, 0, 'Suresh Patil', 3, '2024-01-07', '1082662829.jpg', '882555809.jpg', NULL, NULL, 'All type of planing and interior work', '1', '', '', 1, '1996918807.jpg', 1, NULL, NULL, 1, '2024-07-20', NULL, '2024-01-23', 1, NULL, NULL, NULL, NULL),
(24, 'Patil Tea Depot', '9767199991', 'Ptd9333', 'Patilteadepotsangli42@gmail.com', 'Sangli Maruti Road Patil Tea Depot Near Anand Talkies Tal Miraj Dist Sangli', '9767199991', 'Sangli Maruti Road Patil Tea Depot Near Anand Talkies Tal Miraj Dist Sangli', '9767199991', 'Maharashtra ', 'Sangli', 'Miraj', 'Sangli', 416416, '', 8, 1, 0, 'Shailesh Patil', 5, '1990-01-17', '2041969478.jpeg', '562675401.jpeg', '908419767.jpg', '908976997.jpg', 'Tea retail and wholesale supplier & grocery store ', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-20', NULL, '2024-01-20', NULL, NULL, NULL, NULL, NULL),
(25, 'Mahaveer udyog ', '9881425401', 'r!mc@T2@0MT7YFX', 'suhaspatil1929@gmail.com', 'Ankali near chowgule industries ankali  ', '9511254859', 'Kolhapur road ankali ', '9511254859', 'Maharashtra ', 'Sangli ', 'Miraj', 'Ankali', 416416, 'suhas patil', 17, 1, 0, 'suhas patil', 1, '1996-10-19', '16950092.jpg', '428108345.jpg', '914939860.jpg', NULL, 'Mahaveer udyog\r\nWe do all type of alluminium and  fabrication work \r\n\"Aluminium windows\r\n*Domal windows \r\n*Pleted mosquito mesh \r\n*S.S railing/ glass railing\r\n*Aluminium wooden coated    railing \r\n*Slim partition \r\n *Modular Kitchen trolley\r\n*Structure glazing\r\n*12mm glass work \r\n* ACP panel work\r\nFor all type of architectural works ', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-20', NULL, '2024-04-04', 25, NULL, NULL, NULL, NULL),
(26, 'UTKARSH ', '8087288402', 'Nanotally9', 'tallycare@yahoo.com', 'G3, Basveshwar Complex,  Opp. Market Yard,  Near ICICI Bank,  Sangli Miraj Road ', '9370771728', 'Vardhaman, Dattanagar,  Vishrambag Area, Sangli ', '9370771728', 'Maharashtra', 'Sangli ', 'Miraj', 'Vishrambag ', 416415, '', 33, 1, 0, 'UTKARSH ', 5, '1982-03-11', '602002413.pdf', '1723184986.pdf', NULL, NULL, 'Tally Software Channel Partner \r\nQuick Heal Software Channel Partner \r\nBiz Mobile App Channel Partner \r\nPrivate Cloud Solution Provider\r\nTally Customization Services ', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-06-20', NULL, '2024-01-20', 26, NULL, NULL, NULL, NULL),
(27, 'Swabhimani dairy.shriom agency', '9404418038', '121972', 'Jbchougule72@gmail.com', 'Spurti chowk vishrambhag sangli ', '09850550661', 'Inam Dhamani ', '9404418038', 'India', 'Sangli ', 'Miraj ', 'Inam Dhamani', 416416, '', 2, 3, 0, 'Jitendra chougule ', 6, '1972-11-12', '736635704.jpg', '106359852.jpg', NULL, NULL, 'Swabhimani dairy products', '1', '', '', 0, '', 1, NULL, NULL, 1, '2024-07-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Vedant Electricals and Refrigeration ', '9730759222', 'Vedant1123', 'vedantelectricals091@gmali.com', 'Abhaynagar, sangli  ', '9730759222', 'Abhaynagar, sangli  ', '9730759222', 'Maharashtra ', 'Sangli ', 'Miraj ', 'Sangli ', 416416, '', 32, 1, 0, 'Jeevan Herle ', 5, '1991-06-11', '590226856.jpg', '358728937.jpg', NULL, NULL, 'All types of Airconditioner (Ac), Freeze, Deep freeze, Central AC, washing machine, ohan etc Home appliances repair  ', '1', ' Refrigeration and Air conditioning (AC) repair services\r\nHome ???? appliance repair services ', '', 1, '', 1, NULL, NULL, 1, '2024-07-20', NULL, '2024-01-21', 1, NULL, NULL, NULL, NULL),
(29, 'Amol Ajit patil', '9370501555', 'amol@123', '05amolpatil@gmail.com', 'Sangles dairy, sweets and dryfruits \r\nRoyal bekary samor vishram bag ganpati mandir chouk sangli ', '09370501555', 'Shahunagar', '9370501555', 'Maharashtra', 'Kolhapur ', 'Shirol ', 'Nimshirgaon', 416101, '', 2, 3, 0, 'Amol Ajit patil ', 7, '1993-07-11', '449861609.jpg', '1543623703.jpg', NULL, NULL, 'Dairy products, sweets, rabadi and dryfruits\r\nHolsel and retail ', '1', '', '', 0, '', 1, NULL, NULL, 1, '2024-06-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Vasant Cement Pipe Industries', '8805931008', 'sejalm@995', 'milind_nandine@yahoo.co.in', 'Plot No C 60, MIDC Miraj Block, Miraj 416410', '8805931008', 'Sejal plot no 28 Parashanath nager, kupwad road, sangli', '8805931008', 'Maharashtra ', 'Sangli', 'Miraj', 'Miraj', 416410, '', 13, 1, 0, 'N. M. Choudhari', 1, '1972-09-16', '1371034621.jpg', '537329902.jpg', NULL, NULL, 'Manufacturing Spigot socket rcc pipe, frame and cover, chamber and cement articals', '1', '', '', 0, '', 1, NULL, NULL, 1, '2024-07-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'LOAN SHOPPEE', '9890210222', 'Shital@260505', 'Manojpatil1970@gmail.com', 'LOAN SHOPPEE\r\nSignature Building, Near Pudhari Bhawan \r\nBehind Dominoz Pizza, Miraj Road\r\nSangli ', '9890210222', 'MANOJ PATIL\r\nNeeraj, Krantinagar, Wanlesswadi\r\nNear New Court\r\nSangli ', '9890210222', 'Maharashtra ', 'Sangli', 'Miraj', 'Sangli ', 416416, '', 11, 1, 0, 'MANOJ PATIL ', 1, '1969-06-12', '661064760.jpg', '1187559770.jpg', NULL, NULL, 'We are largest and most trusted authorized service provides for car and home loan services for many nationalized and major private sector banks...\r\nWe provide loan services for new and used car purchase loan and refinace.. ', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-20', NULL, '2024-01-21', NULL, NULL, NULL, NULL, NULL),
(32, 'Namo tiles and Grenaite ', '9730826767', 'Suraj9092', 'Namotilesind@gmail.com', 'Near gajanan maharaj mandir math \r\nSangali Kolhapur road, ankali ', '', 'Ligade mala ichalkaranji', '9730826767', 'Maharashtra ', 'Sangali ', 'Miraj ', 'Ankali ', 416416, '', 9, 1, 0, 'Suraj ligade', 5, '1988-04-19', '1682565755.pdf', '240544386.jpeg', '2110894371.pdf', NULL, 'Namo tiles and Grenaite \r\nAll types of tiles and sanitary and Grenite available in our shop', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-20', NULL, '2024-01-22', NULL, NULL, NULL, NULL, NULL),
(33, 'BVM Co.', '7741851300', 'Vijusam@6875', 'bvmco15@gmail.com', 'Plot:56, Yashvant Housing Society, Behind Post Office, JAYSINGPUR 416101.', '7741851300', 'Plot:57, Yashvant Housing Society, Behind Post Office, JAYSINGPUR 416101.', '7741851300', 'Maharastra', 'Kolhapur', 'Shirol', 'JAYSINGPUR', 416101, '', 38, 1, 0, 'VIJAY B. KHURPE.', 7, '1968-08-28', '69152193.jpg', '215361677.jpg', NULL, NULL, 'Firm start Date :2015. \r\nSupplies all types of industrial electrical & Electronics materials.\r\nManufacturer of Electrical Control panels , APFC panels, Automation control panels etc.', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-06-22', NULL, '2024-01-22', NULL, NULL, NULL, NULL, NULL),
(34, 'Namo tiles and Grenaite ', '9370010093', 'Push90', 'namotilesind@gmail.com', 'Near gajanan maharaj mandir math ankali', '', 'Ligade mala ichalkaranji', '9730826767', 'Maharashtra ', 'Sangali ', 'Miraj ', 'Ankali ', 416416, '', 9, 1, 0, 'Suraj ligade', 5, '1988-04-19', '367120975.pdf', '1220141221.jpeg', '450816722.pdf', NULL, 'All types of tiles Grenite and sanitary ware available ', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-22', NULL, '2024-01-22', NULL, NULL, NULL, NULL, NULL),
(35, 'Bandu chougule ', '9323101101', 'Jaygirnari1000@', 'mangalstonecrusher101@gmail.com', 'Miraj pandharpur road \r\nKalambi ', '9325305050', 'Near maheshwari garden dhamni road\r\nSamarth kuti\r\nSangli ', '9323101101', 'Maharashtra ', 'Sangli', 'Sangli', 'Sangli', 416416, '', 6, 1, 0, 'Bandu chougule ', 3, '2024-01-22', '59684832.jpg', '11320052.jpg', '580124278.jpg', NULL, 'Mangal Stone crusher\r\nAll types of material ', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-22', NULL, '2024-01-22', NULL, NULL, NULL, NULL, NULL),
(36, 'Shree Enterprises ', '9561537311', '10081008', 'shreeenterprises8805@gmail.com', 'Shree Enterprises\r\nThe Midtown basement shop no B1 opp military canteen', '8669080498', 'A/p inam dhamani tal miraj dist sangli', '9561537311', 'Maharashtra', 'Sangli', 'Miraj', 'In8669080498am dhamani', 416416, '', 6, 1, 0, 'Shraman patil', 1, '1991-01-01', '883610776.jpg', '166650130.jpg', '565821116.jpg', NULL, 'Construction waterproofing chemicals, Tile adhesive, and all type of construction hardware material available ', '1', ' All type of construction waterproofing chemicals, Tile adhesive, construction hardware, all type of waterproofing work. ', '796943078.jpg', 1, '907991342.jpg', 1, NULL, NULL, 1, '2024-06-22', NULL, '2024-01-22', 1, NULL, NULL, NULL, NULL),
(37, 'vimal cement pipe industries', '9822026171', 'Atul@123', 'vimal.cementpipe@gmail.com', 'plot no A14 old kupwad road near godrej factory midc area miraj', '7038826171', 'shivganga south shivaji nagar near mali theater sangli', '9822026171', 'maharashtra', 'sangli', 'miraj', 'miraj', 416410, 'www.vimalcementpipe@gmail.com', 28, 2, 3, 'atul babasaheb patil', 5, '2024-09-10', '1055107104.jpg', '425313611.jpg', NULL, '1704510595.jpg', 'manufacturer of rcc cement pipe septick tank  water tank  and articales', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-22', NULL, '2024-01-22', NULL, NULL, NULL, NULL, NULL),
(38, 'Sanjay Mahaveer Patil ', '9850808484', 'Arihant@1008', 'sanjay@frevolt.co', 'arihant plot no 43\r\ndhananjay housing society\r\nsouth of civil hospital sangli', '9850808484', 'arihant plot no 43\r\ndhananjay housing society\r\nsouth of civil hospital sangli', '9850808484', 'Maharashtra', 'Sangli ', 'Miraj', 'Sangli', 416416, 'www.frevolt.co', 39, 3, 4, 'Sanjay Patil ', 3, '2024-01-22', '2057045939.pdf', '1564688537.jpg', NULL, NULL, 'We work in the rooftop solar system. ', '1', '', '', 0, '', 1, NULL, NULL, 1, '2024-07-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, ' VIJAYA INSURANCE PRIME CONSULTANCY ', '7997771177', 'ashok@1008', 'Vipconsultancysangli@yahoo.com', 'Block no.11 shreeram plaza opp pariwar bekari \r\nRammandir corner sangli', '7997771177', '371/72 ADINATH BANGLOW  PADAMAVATI  COLONY  DHAMANI  ROAD SANGLI', '7997771177', 'Maharashtra ', 'Sangli', 'Miraj', 'Sangli', 416416, '', 37, 1, 0, 'Ashok chigteri ', 7, '1954-01-24', '1518120011.jpg', '541200660.jpg', NULL, NULL, 'General insurance', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-22', NULL, '2024-01-22', NULL, NULL, NULL, NULL, NULL),
(40, 'A', '9422619863', 'Ttr', 'jgd.sunilashtekar@gmail.com', 'K 13 MIDC, Kupwad', '9422619863', 'G', '9422619863', 'Maharashtra', 'S', 'M', 'K', 416436, 'WWW.bhagyalaxmiengineers.com', 28, 1, 0, 'S', 7, '2024-01-22', '268383934.jpg', '1449013063.jpg', NULL, NULL, 'manufacturing of heavy material', '1', '', '', 0, '', 1, NULL, NULL, 1, '2024-07-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Sandeep Dhanchandra Sakale', '9890850257', 'sdsakale@4876', 'sandeepsakale@gmail.com', 'Celebrations Gifts Home Decor\r\n\"Bhirangi Landmark\" Near Aditya Hospital,Vishrambag Chowk, ', '', 'Flat No 5 Shiv Ornate,Near Apta Police Chowki,Shivaji Nagar Sangli 416416 ', '', 'Maharashtra', 'Sangli', 'Miraj', 'Sangli', 416415, '', 49, 1, 0, 'Sandeep Sakale', 5, '1976-08-04', '1742869103.jpg', '89072824.jpg', NULL, NULL, 'हॅलो!गेल्या दोन दशकांहून अधिक काळ, आम्ही आमच्या ग्राहकांना उत्कृष्ट निवडक भेटवस्तूंच्या मार्फत समाधानी  करत आहोत.\r\n\r\n कॉर्पोरेट गिफ्टींगपासून ते पर्सनालाईजड् गिफ्टस् ,\r\n\r\n ट्रॉफी ते परफ्युम \r\n\r\nब्रांडेड खेळण्यापासुन पार्टी\r\n डेकोरेशन मटेरीयल \r\nआणि \r\nआकर्षक गृह सजावटीसाठी आम्ही अनेक पर्याय उपलब्ध करतो. \r\n\r\nआमच्या दुकानातील प्रत्येक वस्तू काळजीपूर्वक आणि विचारपूर्वक निवडली जाते. जी तुमच्या प्रिय जणांपर्यंत तुमच्या भावना पोहचवण्याचे काम करतात .\r\n\r\n तेव्हा आजच सेलीब्रेशनस् गिफ्ट शॉप, विश्रामबाग येथे भेट द्या!\"\r\n\r\n \"So let\'s celebrate your every moment of life with Celebrations Gifts.\" ', '1', '', '1675198346.jpg', 1, '106089261.jpg', 1, NULL, NULL, 1, '2024-06-22', NULL, '2024-01-24', 41, NULL, NULL, NULL, NULL),
(42, 'Chougule And Company ', '8007711008', '1968@Pravin', 'chouguleandcompany@yahoo.co.in', 'Chougule AndCompany\r\n612 B, ANANDI CHEMBER SHOP NO 6 , 2 ND LANE SHAHUPURI OPP.BANK OF INDIA KOLHAPUR.416001\r\nMob No - 8007711008 / 9422408262\r\n\r\nChougule And Company \r\nG- 2/ A, Capital Crown, \r\nNear Hotel Chinar\r\nVishrambag, Sangli \r\n416416\r\n ', '8500681008', 'Chougule And Company \r\nG- 2/ A, Capital Crown, \r\nNear Hotel Chinar\r\nVishrambag, Sangli \r\n416416 ', '8007711008', 'Maharashtra ', 'Sangli', 'Sangli ', 'Sangli', 416415, 'www.chouguleandcompany.com', 4, 1, 0, 'Pravin Chougule', 5, '1968-01-24', '758097131.jpeg', '292698196.jpeg', NULL, NULL, 'Distributer \r\nFosroc Chemicals India Private Limited\r\nPenetron India Private limited \r\nStp Limited ', '1', ' All Types of Waterproofing  Work', '1953138981.jpeg', 1, '1569682673.jpeg', 1, NULL, NULL, 1, '2024-07-22', NULL, '2024-01-22', 42, NULL, NULL, NULL, NULL),
(43, 'J R Patil Jewellers', '9890830669', 'Gallop_5182', 'jrpatiljewellers@gmail.com', 'Floreat, shop no 5, Harbhat road, near Arwade high school, Sangli', '9860931008', 'Bhakti, opp market yard, south Shivaji Nagar Kisan chowk, Sangli', '9890830669', 'Maharashtra ', 'Sangli ', 'Miraj', 'Sangli', 416416, '', 48, 2, 0, 'Sushant Kalpraj', 3, '2024-01-22', '1545522074.jpeg', '411961893.jpeg', '152927304.pdf', NULL, 'wholesale and retail in gold & silver jewellery bullion , silver utensils, gift articles.', '1', '', '1122553148.jpeg', 1, '', 1, NULL, NULL, 1, '2024-07-22', NULL, '2024-01-22', 1, NULL, NULL, NULL, NULL),
(44, 'BHAGYALAXMI ENGINEERS', '9011049863', 'arihant23', 'jgd.sunilashtekar@gmail.com', 'K 13 MIDC, Kupwad', '9422619863', 'SNEHKUNJ, Behind New Jain Mandir, Dattanagar, Vishrambag, Sangli', '9422619863', 'Maharashtra', 'Sangli', 'Miraj', 'Kupwad', 416436, 'www.bhagyalaxmiengineers.com', 28, 1, 0, 'Sunil Bapu Ashtekar', 7, '1969-10-23', '1230126355.jpg', '1207121206.jpg', NULL, NULL, 'Design, manufacturing and supply of Sugar machinery, EOT cranes, and all types of heavy fabrication. Also ID, FD,Fans manufacturing and Balancing. Supply of Jaggery Machinery Plant. ', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-22', NULL, '2024-01-22', NULL, NULL, NULL, NULL, NULL),
(45, 'Hotel Aditi Pure Veg', '9759759996', 'avish123', 'hoteladitipureveg@gmail.com', 'Near Doordarshan Kendra Kolhapur Road Sangli ', '9759759996', 'Latthe Nagar Sangli', '9759759996', 'Maharashtra', 'Sangli', 'Miraj', 'Sangli', 416416, '', 35, 1, 0, 'Swati Siddharth Patul', 1, '1977-02-06', '601029364.jpg', '80629195.jpg', NULL, NULL, 'Pure Vegetarian restaurant with fine dining', '1', '', '', 0, '', 1, NULL, NULL, 1, '2024-07-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Sangli Properties ', '7385077033', 'Sangli@555', 'rajeshtunge@gmail.com', 'Rajesh Bungalow LIC colony vishrambag Sangli ', '9146636555', 'Rajesh Bungalow LIC colony vishrambag Sangli ', '7385077033', 'Maharashtra ', 'Sangli ', 'Miraj ', 'Vishrambag ', 416415, 'www.sangliproperties.com', 5, 1, 0, 'Rajesh Tunge', 7, '1968-04-22', '1860296588.jpg', '1407900250.jpg', NULL, NULL, 'Real Estate consultant in sangli', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-23', NULL, '2024-01-23', NULL, NULL, NULL, NULL, NULL),
(47, 'AJVA FinTech Private Limited', '7304276032', 'Ajvaemsme@2024', 'info@emsme.com', '407, Lodha Supremus, Off Mahakali Caves Road, Andheri East Mumbai   ', '', '1A, A wing Sidhivinayakpuram, Vishrambag, Sangli - 416415  ', '', 'Maharashtra', 'Mumbai', 'Mumbai', 'NA', 400069, 'https://emsme.com/', 51, 3, 0, 'CA Sachin Shetti', 7, '2024-01-22', '1007276066.pdf', '619844670.pdf', NULL, NULL, 'eMSME is a brand under AJVA Fintech Private Limited, which is a self-sustaining Fintech startup. With a vision of becoming \r\n“MSME Bazaar” that will make MSMEs digital, credible, and bankable, eMSME aims to make life of MSMEs easier when it \r\ncomes to any kind of regulatory and statutory compliances and end to end support in discovery and availment of government \r\nschemes, with help of our professional and scheme experts network.\r\nWe, a team of 90 eMSME members including 5 highly experienced co-founders who bring extensive knowledge from \r\nBFSI and MSME sector, have embarked on the journey of aggregating all the relevant aggregators, whose support is and \r\nwould be required to any MSME in the entire life cycle and 6 important phases from incorporation till scale-up.  ', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-23', NULL, '2024-01-29', 47, NULL, NULL, NULL, NULL),
(48, 'HDFC LIFE INSURANCE CO LTD', '9922111108', 'Aarav@2024', 'abhi4333@gmail.com', 'HDFC Life ,\r\n2nd floor, Shiv Pavilion,\r\nRam Mandir Chowk,\r\nSangli ', '', 'Omkar 302, Anand Chintamani Housing Society, Opposite Awati Motors , Dhamani Road, Vishrambag,\r\nSangli ', '9922111108', 'Maharashtra ', 'Sangli', 'Sangli', 'Sangli', 416416, '', 37, 5, 0, 'Mr Abhinandan Patil', 2, '1984-07-31', '1194154376.pdf', '1745628974.jpg', NULL, NULL, 'All types of Investment, Insurance & Mediclaim services are available ,\r\nThose who wants to work part time & want to earn extra income are welcome  ', '1', ' Fghhg', '', 1, '1812452888.avif', 1, NULL, NULL, 1, '2024-06-23', NULL, '2024-08-01', 1, NULL, NULL, NULL, NULL),
(49, 'Aadi sales corporation ', '9021905968', '902190', 'Patilmithuna@gmail.com', 'Near new circuit house ,appasaheb patil nagar, infront of ayukta bunglow,sangli', '9021905968', 'Sidhant bunglow ,near new circuit house,appasaheb patil nagar,sangli', '9021905968', 'Maharashtra ', 'Sangli', 'Miraj', 'Sangli', 416416, '', 3, 1, 0, 'Mithun patil', 3, '1988-07-28', '2014053285.jpg', '1073993358.jpg', NULL, NULL, 'Wholesale trading of hardware material', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-07-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'S.P. Associates ', '9860556751', '12345678', 'sspatil751.sp@gmail.com', 'Bhaskar apartment gulmohar colony sangli', '7720900751', 'Khare hausing sosaity dhamni road sangli', '7720900751', 'Maharashtra ', 'Sangli', 'Miraj', 'Sangli', 416415, '', 5, 1, 0, 'Sujit sunil patil', 5, '1998-06-15', '1803510101.jpg', '195041371.jpg', NULL, NULL, 'Contractor & consulting ', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-08-06', NULL, '2024-02-07', NULL, NULL, NULL, NULL, NULL),
(51, 'SS Mobile', '9921554567', 'pankaj3739', 'pankaj.comu@gmail.com', 'Kranti chowk, near old court\r\nSangli-kolhapur road\r\nJaysingpur', '9921554567', 'A/p chinchwad', '9921554567', 'Maharashtra ', 'Kolhapur ', 'Shirol', 'Jaysingpur', 416101, '', 21, 3, 0, 'Pankaj chougule', 1, '1987-07-03', '661416607.jpeg', '383655954.jpeg', NULL, NULL, 'All type of mobiles\r\nBranded accessories \r\nN smart Tv available ', '1', '', '', 0, '', 1, NULL, NULL, 1, '2024-08-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'Suhas Patil  Unique Pipe ', '9371592810', 'ryvPyz-soxsiz-9nuntu', 'suhasg5@rediffmail.com', 'suhas sv Patil Unique cement pipe industries vasantdada industrial estate sangli ', '0233231045', 'Miraj', '9371592810', 'Maharashtra ', 'Sangli', 'Miraj ', 'Sangli', 416416, '', 6, 2, 0, 'Suhas Patil  ', 1, '2024-02-07', '1883134816.jpeg', '502248131.jpeg', NULL, NULL, 'Manufacturing cement pipe septic tank and water tank ,design water supply scheme ', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-08-07', NULL, '2024-02-07', NULL, NULL, NULL, NULL, NULL),
(53, 'SHRI BAHUBALI TRANSPORT CO', '9822554677', '9822554677@Ms', 'mahesh.bahubali@gmail.com', '85, VAKHARBHAG\r\nNEAR SAHYOG STEEL\r\nSANGLI 416416', '9822554677', 'PLOT NO 29 JIJAMATA HOUSING SOCIETY NEAR RAILWAY GATE VISHRAMBHAG SANGLI 416415', '9822554677', 'MAHARASHTRA', 'SANGLI', 'MIRAJ', 'SANGLICITY', 416416, 'https://bahubalitransport.business.site/', 18, 1, 0, 'MAHESH SURESH PATIL', 5, '2024-02-07', '654583600.jpg', '5212331.jpg', NULL, NULL, 'TRANSPORT CONTRACTOR, C&F AGENT', '1', '', '', 0, '', 1, NULL, NULL, 1, '2024-08-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Vishal Enterprises', '9860001353', 'Vishal1!', 'vishalenterprisessangli@gmail.com', 'Plot no.14, Shop No 1&3,Swapnshilp Residency,Balaji Nagar, Kupwad Road,Sangli', '9422407488', 'Plot no.39,Vishal Bunglow,Parshwanath Nagar, Kupwad Road,Sangli', '9860001353', 'Maharashtra', 'Sangli', 'Miraj', 'Kupwad', 416436, 'www.vishalenterprises.org', 28, 1, 0, 'Vishal Sanjay Patil', 7, '2024-02-07', '56909088.jpeg', '888584926.jpeg', '116007125.pdf', '860631498.jpeg', 'Manufacturer and Traders of PVC Fabricated Fittings and Plumbing Fittings', '1', '', '', 1, '', 1, NULL, NULL, 1, '2024-08-08', NULL, '2024-02-08', NULL, NULL, NULL, NULL, NULL),
(55, 'OM MEDICALS', '9644199171', 'Rajveer@15', 'Xtremeharshu8001@gmail.com', 'C.S No.151/152,1st floor OM CHEMBERS,DR.PUROHIT ENT HOSPITAL OPPOSITE CANARA BANK,RAM MANDIR CHOWK,SANGLI', '', '469/2A Padmavati near Krishna hospital Patrakar nagar sangli ', '9644199171', 'MAHARASHTRA ', 'SANGLI', 'MIRAJ', 'SANGLI', 416416, '', 29, 1, 0, 'Harshvardhan patil ', 7, '2024-03-05', '1590826515.jpg', '508014395.jpg', '1702236202.pdf', NULL, 'Medical Shop', '1', '', '', 0, '', 1, NULL, NULL, 1, '2024-06-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Akash', '9689361942', 'akash', 'akash@gmail.com', 'kolhapur', '9689361942', 'sangli', '9689361942', 'maharastra', 'sangli', 'walwa', 'yelur', 415411, '', 2, 1, 0, 'akash', 3, '2002-09-19', '1428292565.pdf', '1645724367.pdf', NULL, NULL, 'dairy products', '1', '', '', 1, '553436228.jpg', 1, NULL, NULL, 1, '2024-07-25', NULL, '2024-07-27', 1, NULL, NULL, NULL, NULL),
(57, 'iSoftware Business Lmt , Islampur', '9876543210', 'admin', 'admin@gmail.com', 'A.P. Islampur, Savkar colony,  Near SBI bank, Raj building - 50,\r\nPin-416315', '9876543210', 'A.P. Islampur, Savkar colony,  Near SBI bank, Raj building - 50,\r\nPin-416315', '9876543210', 'Maharashtra', 'Sangli', 'walwa', 'Islampur', 416315, 'https://www.isoftware.com', 33, 3, 5, 'Adarsh', 3, '2024-07-27', '1391478564.jpg', '1103846120.jpg', '1890340597.jpg', '1548373173.jpg', 'We can develop the software which as required the clients.', '1', '', '', 1, '524485896.jpeg', 1, NULL, NULL, 1, '2024-07-27', NULL, '2024-07-31', NULL, NULL, NULL, NULL, NULL),
(66, 'ugfhgvhj', '4541515313', '51515151', 'AdminAdmin@gmail.com', 'hbkjhbhjb', '1111111111', 'nbbmnb n', '1111111111', 'giuyguy', 'jkhgjgh', 'jhghjghjgh', 'jhbvhjbv', 111111, 'hjbhjbjbjb', 1, 5, 2, 'bkjhbnb ', 1, '2024-08-07', NULL, NULL, NULL, NULL, 'gkgyuhg', NULL, '', '', 0, '', 1, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `businessrule_master`
--

CREATE TABLE `businessrule_master` (
  `ruleId` int(11) NOT NULL,
  `businessRule` varchar(2000) NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `businessrule_master`
--

INSERT INTO `businessrule_master` (`ruleId`, `businessRule`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Per year fees 1000/- Non-refundable.', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'The membership will not be transferable.', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'The Membership will be for one firm and one partner.', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'No other member of the form can attend any of the meeting or function.', NULL),
(4, 'No other member of the form can attend any of the meeting or function.', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Members should follow all business ethics with other Business owners. The forum is not responsible for any transactions or disputes.', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'It is mandatory for forum members to attend all meetings.', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Members should follow all business ethics with other Business owners. The forum is not responsible for any transactions or disputes.', NULL, NULL, 1, '2023-09-26 16:52:47', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Membership non transfarable', NULL, NULL, 1, '2024-01-19 17:51:38', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Fees are non refundable', NULL, NULL, 1, '2024-01-19 17:51:58', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Jbf is not responsible for any transactions done by members ', NULL, NULL, 1, '2024-01-19 17:52:55', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Do not share id and password ', NULL, NULL, 1, '2024-01-19 17:53:28', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Membership acceptance and denieing is on hands of admin ', NULL, NULL, 1, '2024-01-19 17:54:39', 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `businesstype_master`
--

CREATE TABLE `businesstype_master` (
  `businesstypeId` int(11) NOT NULL,
  `businesstypeName` varchar(50) NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `businesstype_master`
--

INSERT INTO `businesstype_master` (`businesstypeId`, `businesstypeName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Sole proprietorship', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Partnership', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Private Limited Company', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Limited Liability Partnership', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Publcily Listed Company', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'developing', NULL, NULL, 1, '2024-08-02 18:51:18', 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `cityId` smallint(50) NOT NULL,
  `cityName` varchar(50) DEFAULT NULL,
  `cityCode` varchar(5) DEFAULT NULL,
  `fkStateId` int(50) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `city_master`
--

INSERT INTO `city_master` (`cityId`, `cityName`, `cityCode`, `fkStateId`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Kolhapur r', '8', 1, 0, 1, 1, '2023-02-02 16:20:09', 1, '2023-08-18 15:09:29', 1, NULL, NULL, NULL, '2023-02-02 10:50:09'),
(2, 'KERUR', '10', 2, 0, 1, 1, '2023-02-10 19:40:07', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-10 14:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `district_master`
--

CREATE TABLE `district_master` (
  `districtId` bigint(20) NOT NULL,
  `districtName` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `districtCode` bigint(20) NOT NULL,
  `districtShortName` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fkCountryId` bigint(200) NOT NULL,
  `fkStateId` bigint(200) NOT NULL,
  `fkCityId` int(11) DEFAULT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_on` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `district_master`
--

INSERT INTO `district_master` (`districtId`, `districtName`, `districtCode`, `districtShortName`, `fkCountryId`, `fkStateId`, `fkCityId`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Akola', 123, 'nag', 1, 1, 1, 0, 1, 1, '2021-09-22 09:22:42', NULL, '2021-09-22 09:22:42', NULL, '2021-09-22 09:22:42', NULL, NULL, '2021-09-22 07:25:06'),
(2, 'Amravati', 345, 'Amar', 2, 2, 2, 0, 1, 1, '2021-09-22 09:22:42', NULL, '2021-09-22 09:22:42', NULL, '2021-09-22 09:22:42', NULL, NULL, '2021-09-22 07:25:06'),
(3, 'Sangli', 0, '', 0, 0, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Satara', '2023-09-06 06:01:33'),
(4, 'Satara', 0, '', 0, 0, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-06 06:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `employeerule_master`
--

CREATE TABLE `employeerule_master` (
  `ruleId` int(11) NOT NULL,
  `EmployeeRule` varchar(2000) NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeerule_master`
--

INSERT INTO `employeerule_master` (`ruleId`, `EmployeeRule`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Per year fees 500/- Non-refundable.', NULL, NULL, 1, '2023-09-26 16:51:38', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'The membership will not be transferable.', NULL, NULL, 1, '2023-09-26 16:52:03', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Members should follow all business ethics with other Business owners. The forum is not responsible for any transactions or disputes.', NULL, NULL, 1, '2023-09-26 16:53:39', 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experience_master`
--

CREATE TABLE `experience_master` (
  `experienceId` int(10) NOT NULL,
  `experienceName` varchar(50) NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience_master`
--

INSERT INTO `experience_master` (`experienceId`, `experienceName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, '6 month', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '1 year', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '1.5 year', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2 year', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '5 year', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `help_master`
--

CREATE TABLE `help_master` (
  `helpId` int(11) NOT NULL,
  `helpdescription` varchar(500) NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help_master`
--

INSERT INTO `help_master` (`helpId`, `helpdescription`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'I need help for  updating my profile', NULL, NULL, 0, '2023-08-25 13:26:05', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'I forget my password', NULL, NULL, 1, '2023-08-25 13:43:49', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'I want to change my mobile number', NULL, NULL, 1, '2023-08-25 13:45:12', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'I want to enquiry about my business', NULL, NULL, 1, '2023-08-29 08:19:45', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'I want to change my user name', NULL, NULL, 0, '2023-08-29 08:24:42', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'gfcvbcbxv', NULL, NULL, 0, '2023-09-01 12:56:17', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'ggdfdf', NULL, NULL, 1, '2023-09-01 12:56:44', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'sdfa', NULL, NULL, 0, '2023-09-01 12:58:56', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Help', NULL, NULL, 1, '2023-09-02 06:05:18', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'need help\r\n', NULL, NULL, 1, '2023-08-12 07:08:23', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'dffdfdfd', NULL, NULL, 1, '2023-09-24 09:28:10', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Just testing 1', NULL, NULL, 1, '2023-08-25 09:23:33', 28, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Help ', NULL, NULL, 1, '2023-09-27 04:26:06', 20, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Vjhf7', NULL, NULL, 1, '2023-09-27 06:10:10', 21, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Hft', NULL, NULL, 1, '2023-09-27 06:10:16', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Help ', NULL, NULL, 1, '2023-09-27 06:11:50', 24, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Requirements hardware', NULL, NULL, 1, '2023-11-04 06:22:27', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Hello', NULL, NULL, 1, '2023-11-04 06:59:38', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'I can\'t understand how this website works', NULL, NULL, 1, '2024-07-27 03:50:40', 56, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'uhk', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'I need a job', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'hello', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'hello w\r\ns', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'll', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'I need help \r\nabout material', NULL, NULL, 1, '2024-08-10 07:08:23', 7, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '.', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '.', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'ok', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'll', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'll', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'll;', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobcategory_master`
--

CREATE TABLE `jobcategory_master` (
  `jobcatergoryId` smallint(50) NOT NULL,
  `jobcatergoryName` varchar(50) DEFAULT NULL,
  `cityCode` varchar(5) DEFAULT NULL,
  `fkStateId` int(50) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `jobcategory_master`
--

INSERT INTO `jobcategory_master` (`jobcatergoryId`, `jobcatergoryName`, `cityCode`, `fkStateId`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'UX Designer', NULL, NULL, 0, 1, 1, '2023-08-22 15:12:20', 1, NULL, NULL, NULL, NULL, NULL, '2023-08-22 09:42:20'),
(2, 'UI Designer', NULL, NULL, 0, 1, 1, '2023-08-22 15:12:31', 1, NULL, NULL, NULL, NULL, NULL, '2023-08-22 09:42:31'),
(3, 'Web development', NULL, NULL, 0, 1, 1, '2023-08-22 15:12:42', 1, NULL, NULL, NULL, NULL, NULL, '2023-08-22 09:42:42'),
(4, 'Painter', NULL, NULL, 0, 1, 1, '2023-08-22 15:12:52', 1, NULL, NULL, NULL, NULL, NULL, '2023-08-22 09:42:52'),
(5, 'Salesman', NULL, NULL, 0, 1, 1, '2024-10-20 00:27:19', 1, NULL, NULL, NULL, NULL, NULL, '2024-10-20 04:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost_master`
--

CREATE TABLE `jobpost_master` (
  `jobpostId` int(11) NOT NULL,
  `jobpostName` varchar(50) DEFAULT NULL,
  `jobdescription` varchar(2000) DEFAULT NULL,
  `mobileNo` varchar(20) DEFAULT NULL,
  `jobtype` varchar(20) DEFAULT NULL,
  `jobcategory` varchar(20) DEFAULT NULL,
  `jobde` int(11) NOT NULL,
  `experiencelevel` varchar(20) DEFAULT NULL,
  `salaryMin` varchar(20) DEFAULT NULL,
  `salaryMax` int(20) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `languages` int(11) NOT NULL,
  `skills` varchar(250) DEFAULT NULL,
  `uploadfile` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobpost_master`
--

INSERT INTO `jobpost_master` (`jobpostId`, `jobpostName`, `jobdescription`, `mobileNo`, `jobtype`, `jobcategory`, `jobde`, `experiencelevel`, `salaryMin`, `salaryMax`, `location`, `qualification`, `languages`, `skills`, `uploadfile`, `status`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Female Software Executive ', ' Tally Software Support Executive \r\nFemale post', '8087288402', '1', NULL, 0, '1', '5000', 10000, 'Sangli', 'Bcom, BCA, BCS, BBA, Tally Completed ', 0, '1', NULL, 1, NULL, NULL, 1, '2024-01-20 13:24:17', 26, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Office Manege ', ' Real Estate consultant company, public relation manager ', '7385077033', '1', NULL, 0, '3', '8000', 15000, 'Vishrambag sangli', 'Graduate ', 0, '1', NULL, 1, NULL, NULL, 1, '2024-01-25 06:42:39', 46, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'manager', ' I need a manager who can manage my office and my employees.', '9854761230', '1', NULL, 0, '4', '50000', 150000, 'sangli', 'Post Graduate', 0, '1', '1123280640.jpg', 1, NULL, NULL, 1, '2024-07-27 03:44:06', 56, '2024-07-27 03:45:50', NULL, NULL, NULL, NULL, NULL),
(4, 'Require typeist', ' Require the typeist for the typing the document of the papers', '1234567891', '2', NULL, 0, '5', '10000', 15000, 'mumbai', '10th pass', 0, '1', NULL, 1, NULL, NULL, 1, '2024-07-27 04:01:30', 15, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Software Developer', 'We require the software developer', '9876543210', '1', NULL, 0, '1', '120000', 500000, 'Dubai', 'Phd M.phill', 0, '1', '1369847043.jpg', 1, NULL, NULL, 1, '2024-07-27 04:18:50', 57, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Gyy', ' Yyuu', '9623510789', '2', NULL, 0, '1', '58', 555, 'Kol', 'Gg', 0, '1', NULL, 1, NULL, NULL, 1, '2024-08-01 07:36:47', 48, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobskill_master`
--

CREATE TABLE `jobskill_master` (
  `jobskillId` smallint(50) NOT NULL,
  `fkjobskillId` int(50) DEFAULT NULL,
  `fkjobpostId` varchar(5) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `jobskill_master`
--

INSERT INTO `jobskill_master` (`jobskillId`, `fkjobskillId`, `fkjobpostId`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 2, '8', 0, 1, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-08-23 06:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `jobtype_master`
--

CREATE TABLE `jobtype_master` (
  `jobtypeId` int(11) NOT NULL,
  `jobtypeName` varchar(50) NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobtype_master`
--

INSERT INTO `jobtype_master` (`jobtypeId`, `jobtypeName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Full Time', NULL, NULL, 1, '2023-08-22 15:06:31', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Part Time', NULL, NULL, 1, '2023-08-22 15:06:38', 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keyskill_master`
--

CREATE TABLE `keyskill_master` (
  `keyId` smallint(50) NOT NULL,
  `keyName` varchar(50) DEFAULT NULL,
  `cityCode` varchar(5) DEFAULT NULL,
  `fkStateId` int(50) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `keyskill_master`
--

INSERT INTO `keyskill_master` (`keyId`, `keyName`, `cityCode`, `fkStateId`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Teamwork skills', NULL, NULL, 0, 1, 1, '2023-08-23 11:48:14', 1, NULL, NULL, NULL, NULL, NULL, '2023-08-23 06:18:14'),
(2, 'Communication', NULL, NULL, 0, 1, 1, '2024-10-20 00:58:53', 1, NULL, NULL, NULL, NULL, NULL, '2024-10-20 04:58:53'),
(3, 'Multitasking', NULL, NULL, 0, 1, 1, '2024-10-20 00:59:23', 1, NULL, NULL, NULL, NULL, NULL, '2024-10-20 04:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `kyc_master`
--

CREATE TABLE `kyc_master` (
  `kycId` int(11) NOT NULL,
  `kycName` varchar(50) NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kyc_master`
--

INSERT INTO `kyc_master` (`kycId`, `kycName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Aadhar Card', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Pan Card', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Birth Certificate', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `language_master`
--

CREATE TABLE `language_master` (
  `langId` int(11) NOT NULL,
  `langName` varchar(50) NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language_master`
--

INSERT INTO `language_master` (`langId`, `langName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'English', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Marathi', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Hindi', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loginregistration`
--

CREATE TABLE `loginregistration` (
  `userId` bigint(50) NOT NULL,
  `fkUserPassword` bigint(10) DEFAULT NULL,
  `fkUserName` bigint(50) DEFAULT NULL,
  `userName` varchar(150) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fkBranchId` bigint(20) DEFAULT NULL,
  `mobileNo` bigint(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `OTP` varchar(100) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `loginregistration`
--

INSERT INTO `loginregistration` (`userId`, `fkUserPassword`, `fkUserName`, `userName`, `password`, `fkBranchId`, `mobileNo`, `email`, `OTP`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 5, 1, 'admin', 'admin', 2, 123456789, 'demo@gmail.com', '9794', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-16 10:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `material_master`
--

CREATE TABLE `material_master` (
  `materialId` int(11) NOT NULL,
  `materialdescription` varchar(2000) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `material_master`
--

INSERT INTO `material_master` (`materialId`, `materialdescription`, `status`, `date`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Required प्लास्टिक bag suppliers', 1, '2020-01-24', NULL, NULL, 1, '2024-01-20 12:06:27', 19, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Saint Gobain Chryso SBR latex. ', 1, '2022-01-24', NULL, NULL, 1, '2024-01-22 12:45:57', 36, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Saint Gobain Chryso armourcete acrylic polymer based waterproofing chemicals ', 1, '2022-01-24', NULL, NULL, 1, '2024-01-22 12:46:22', 36, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Saint Gobain Chryso Excel 100 concrete admixture ', 1, '2022-01-24', NULL, NULL, 1, '2024-01-22 12:46:51', 36, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'need paper bag makers', 1, '2024-01-24', NULL, NULL, 1, '2024-01-24 12:41:28', 41, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Required cash counting machine', 1, '2025-01-24', NULL, NULL, 1, '2024-01-25 06:15:30', 19, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'I need 25 Hp New Laptops for my company. I need i5 12th gen 512 SSD config. and in affortable price required.', 1, '2027-07-24', NULL, NULL, 1, '2024-07-27 03:48:54', 56, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Dhufhhh', 1, '2001-08-24', NULL, NULL, 1, '2024-08-01 07:18:10', 48, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'सॉ्टवेअर ', 1, '2001-08-24', NULL, NULL, 1, '2024-08-01 07:38:50', 48, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, 1, '2001-08-24', NULL, NULL, 1, '2024-08-01 12:19:31', 48, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'hjkhbkj', 0, '0000-00-00', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'need cement', 1, '2024-09-20', NULL, NULL, 1, '2024-09-20 08:15:13', 35, '2024-09-20 08:15:13', 0, NULL, NULL, NULL, NULL),
(15, 'need cement', 1, '2024-09-20', NULL, NULL, 1, '2024-09-20 08:15:13', 35, '2024-09-20 08:15:13', 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_master`
--

CREATE TABLE `patient_master` (
  `patientId` int(11) NOT NULL,
  `userName` varchar(20) DEFAULT NULL,
  `mobileNo` bigint(22) DEFAULT NULL,
  `email` varchar(22) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fkgenderId` bigint(22) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `AttachFile` varchar(20) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `patient_master`
--

INSERT INTO `patient_master` (`patientId`, `userName`, `mobileNo`, `email`, `password`, `fkgenderId`, `dateOfBirth`, `AttachFile`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'admin', 9999999999, 'sk@gmail.com', '12', 1, '2022-03-02', '1986652895.jpg', 0, 1, 1, '2022-03-03 17:14:42', 1, '2023-04-10 12:13:25', 1, NULL, NULL, NULL, '2022-03-03 16:14:42'),
(2, 'sk', 1122334455, 'sk@gmail.com', '12', 1, '2022-03-23', '851057993.jpg', 0, 1, 1, '2022-03-04 17:02:26', 1, '2022-03-05 13:14:42', 1, NULL, NULL, NULL, '2022-03-04 16:02:26'),
(3, 'snehal', 123456788, 'sk@gmail.com', '12', 2, '2022-01-18', '1179170610.png', 0, 1, 1, '2022-03-05 09:54:55', 1, '2022-03-05 11:38:16', 1, NULL, NULL, NULL, '2022-03-05 08:54:55'),
(4, 'nikita', 1234567890, 'nk@gmail.com', '12', 2, '2020-06-19', '930261496.jpg', 0, 1, 1, '2022-03-06 08:06:30', 1, '2022-03-06 08:11:15', 1, NULL, NULL, NULL, '2022-03-06 07:06:30'),
(5, 'sk', 1234567890, 'sk@gmail.com', '12', 1, '2022-03-10', NULL, 0, 1, 1, '2022-03-06 10:59:48', 1, NULL, NULL, NULL, NULL, NULL, '2022-03-06 09:59:48'),
(6, 'admin', 123456789, 'sk@gmail.com', '12', 1, '2022-03-03', '679948404.jpg', 0, 1, 1, '2022-03-06 11:01:18', 1, '2022-09-13 08:32:24', 1, NULL, NULL, NULL, '2022-03-06 10:01:18'),
(7, 'sk', 1122339999, 'sk@gmail.com', '12', 1, '2022-03-07', NULL, 0, 1, 1, '2022-03-07 07:33:56', 1, NULL, NULL, NULL, NULL, NULL, '2022-03-07 06:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_master`
--

CREATE TABLE `qualification_master` (
  `qualificationId` int(11) NOT NULL,
  `qualificationName` varchar(50) NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qualification_master`
--

INSERT INTO `qualification_master` (`qualificationId`, `qualificationName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'BTech', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'BSc', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Any Bachlor Degree', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Any Master Degree', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'MTech', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_master`
--

CREATE TABLE `role_master` (
  `roleId` smallint(50) NOT NULL,
  `roleName` varchar(50) DEFAULT NULL,
  `cityCode` varchar(5) DEFAULT NULL,
  `fkStateId` int(50) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `role_master`
--

INSERT INTO `role_master` (`roleId`, `roleName`, `cityCode`, `fkStateId`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Employee', NULL, NULL, 0, 1, 1, '2023-08-18 15:23:37', 1, NULL, NULL, NULL, NULL, NULL, '2023-08-18 09:53:37'),
(2, 'Employee twomdfsfa', NULL, NULL, 0, 1, 1, '2023-08-18 15:23:46', 1, '2023-08-18 18:19:49', 1, NULL, NULL, NULL, '2023-08-18 09:53:46'),
(3, 'dfasfaf', NULL, NULL, 0, 1, 1, '2023-08-18 18:19:38', 1, NULL, NULL, NULL, NULL, NULL, '2023-08-18 12:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `stateId` smallint(50) NOT NULL,
  `stateName` varchar(20) NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_on` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`stateId`, `stateName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Andhra Pradesh', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-09 08:23:51'),
(2, 'Arunachal Pradesh', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-09 08:23:51'),
(3, 'Assam', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-09 08:24:14'),
(4, 'Bihar ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-09 08:24:14'),
(5, 'Chhattisgarh', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:14:18'),
(6, 'Goa', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:14:18'),
(7, 'Gujarat ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:14:18'),
(8, 'Haryana', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:14:18'),
(9, 'Himachal Pradesh', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:14:18'),
(10, 'Jharkhand ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:15:46'),
(11, 'Karnataka', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:15:46'),
(12, 'Kerala', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:15:46'),
(13, 'Madhya Pradesh', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:15:46'),
(14, 'Maharashtra ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:15:46'),
(15, 'Manipur ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:16:48'),
(16, 'Meghalaya', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:16:48'),
(17, 'Mizoram ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:16:48'),
(18, 'Nagaland', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:16:48'),
(19, 'Odisha', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:16:48'),
(20, 'Punjab ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:17:53'),
(21, 'Rajasthan ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:17:53'),
(22, 'Sikkim ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:17:53'),
(23, 'Tamil Nadu ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:17:53'),
(24, 'Telangana ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:17:53'),
(25, 'Tripura ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:18:16'),
(26, 'Uttarakhand', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:18:16'),
(27, 'Uttar Pradesh ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:18:47'),
(28, 'West Bengal', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration_master`
--

CREATE TABLE `studentregistration_master` (
  `Id` int(11) NOT NULL,
  `studentName` varchar(50) DEFAULT NULL,
  `mobileNo` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `bloodgroup` int(11) NOT NULL,
  `jobProfile` varchar(100) DEFAULT NULL,
  `jobdescription` varchar(2000) DEFAULT NULL,
  `experience` int(11) NOT NULL,
  `aadhaarCard` varchar(250) DEFAULT NULL,
  `panCard` varchar(250) DEFAULT NULL,
  `resume` varchar(250) DEFAULT NULL,
  `termcondition` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `profile` varchar(250) NOT NULL,
  `navId` int(11) NOT NULL DEFAULT 2,
  `activejob` int(50) NOT NULL DEFAULT 0,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_on` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentregistration_master`
--

INSERT INTO `studentregistration_master` (`Id`, `studentName`, `mobileNo`, `password`, `email`, `address`, `gender`, `bloodgroup`, `jobProfile`, `jobdescription`, `experience`, `aadhaarCard`, `panCard`, `resume`, `termcondition`, `status`, `profile`, `navId`, `activejob`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Aditya ', '8182811212', 'Adi8112', 'aditya@gmail.com', 'a/p-sangli', '1', 1, NULL, 'new member s', 1, '474238899.jpg', '1692294406.jpg', '217604534.jpg', '1', 1, '1261108877.jpg', 2, 0, NULL, NULL, 1, '2024-07-27', 1, '2024-07-27 04:02:16', 1, NULL, NULL, NULL, NULL),
(2, 'Adarsh', '9874563210', 'Ada9810', 'adarsh@gmail.com', 'A.P. Kolhapur', '1', 3, NULL, 'Manager', 5, '1220042017.jpg', '1162677495.jpg', '355179189.jpg', '1', 1, '', 2, 0, NULL, NULL, 1, '2024-07-27', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Rajvardhan Shete', '9607167715', '12345', 'Raj@gmail.com', 'kjhk ok f', '1', 1, NULL, 'trfch ', 1, '827963232.jpg', '1159559772.jpg', '1588008883.jpg', '1', 1, '', 2, 0, NULL, NULL, 1, '2024-08-01', 1, '2024-08-01 09:54:15', 3, NULL, NULL, NULL, NULL),
(4, 'Akash Shingare', '9689361942', 'Aka9642', 'akash@gmail.com', 'okg', '1', 3, NULL, 'ok jj', 2, NULL, NULL, NULL, NULL, 1, '', 2, 0, NULL, NULL, NULL, '2024-07-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Pratik walekar', '9874563210', 'admin', 'adbce@gmail.com', 'dubai ok\r\n', '1', 3, NULL, 'ceo king', 2, NULL, NULL, NULL, NULL, 1, '', 2, 0, NULL, NULL, NULL, '2024-07-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Sudarshan Patil', '8605608536', 'Sud8636', 'Admin@gmail.com', 'Dubai', '1', 7, NULL, 'CEO', 4, NULL, NULL, NULL, NULL, 1, '', 2, 0, NULL, NULL, NULL, '2024-07-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Omkar Magdum', '7261937461', '12345', 'omkar@gmail.com', 'klasdjf', '1', 1, NULL, 'alsdkfj', 1, NULL, NULL, NULL, NULL, 1, '', 2, 0, NULL, NULL, NULL, '2024-07-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Abhijeet Mali', '8767247878', '1234', 'abhi@gmail.com', 'sdfs', '1', 1, NULL, 'asdsdf', 1, NULL, NULL, NULL, NULL, 0, '', 2, 0, NULL, NULL, NULL, '2024-07-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Prathmesh Suryavanshi', '7709361130', '1234', 'prathmesh@gmail.com', 'sdf', '1', 1, NULL, 'dsfaf', 1, NULL, NULL, NULL, NULL, 1, '', 2, 0, NULL, NULL, NULL, '2024-08-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Kedar Salokhe', '7989566631', '1234', 'sdf@gmail.com', 'asdfsdf', '1', 1, NULL, 'rgsg', 1, NULL, NULL, NULL, NULL, 0, '', 2, 0, NULL, NULL, NULL, '2024-08-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Atharv Vibhute', '9999999999', 'ssdfgsg', 'atharv@gmail.com', 'dsfgs', '1', 1, NULL, 'dfga', 1, NULL, NULL, NULL, NULL, 0, '', 2, 0, NULL, NULL, NULL, '2024-08-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Akash', '9999999999', '12345', 'Admin@gmail.com', 'sangli', '1', 1, NULL, 'employee', 1, NULL, NULL, NULL, NULL, 0, '', 2, 0, NULL, NULL, NULL, '2024-08-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Vishwajeet Chavan', '8698956262', 'asdf', 'vishu@gmail.com', 'sdfs', '1', 1, NULL, 'asdsdf', 1, NULL, NULL, NULL, NULL, 0, '', 2, 0, NULL, NULL, NULL, '2024-08-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taluka_master`
--

CREATE TABLE `taluka_master` (
  `talukaId` bigint(20) NOT NULL,
  `talukaName` varchar(255) NOT NULL,
  `talukaShortName` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `talukaCode` int(50) NOT NULL,
  `fkCountryId` bigint(20) NOT NULL,
  `fkStateId` bigint(20) NOT NULL,
  `fkCityId` int(11) DEFAULT NULL,
  `fkDistrictId` bigint(20) NOT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `taluka_master`
--

INSERT INTO `taluka_master` (`talukaId`, `talukaName`, `talukaShortName`, `talukaCode`, `fkCountryId`, `fkStateId`, `fkCityId`, `fkDistrictId`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Khandesh', 'Khan', 213, 1, 1, 1, 1, 0, 1, 1, '2021-09-22 09:26:12', NULL, '2021-09-22 09:26:12', NULL, '2021-09-22 09:26:12', NULL, NULL, '2021-09-22 07:27:22'),
(2, 'Savantvadi', 'Sa', 456, 2, 2, 2, 2, 0, 1, 1, '2021-09-22 09:26:12', NULL, '2021-09-22 09:26:12', NULL, '2021-09-22 09:26:12', NULL, NULL, '2021-09-22 07:27:22'),
(3, 'Palus ', '', 0, 0, 0, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-06 06:05:34'),
(4, 'Walwa ', '', 0, 0, 0, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-06 06:05:34'),
(5, 'Shirala ', '', 0, 0, 0, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-06 06:05:34'),
(6, 'Miraj ', '', 0, 0, 0, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-06 06:05:34'),
(7, 'Tasgaon ', '', 0, 0, 0, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-06 06:05:34'),
(8, 'Atpadi ', '', 0, 0, 0, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-06 06:05:34'),
(9, 'Khanapur ', '', 0, 0, 0, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Kadegaon ', '2023-09-06 06:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `usertype_master`
--

CREATE TABLE `usertype_master` (
  `userTypeId` bigint(20) NOT NULL,
  `userTypeName` varchar(100) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `usertype_master`
--

INSERT INTO `usertype_master` (`userTypeId`, `userTypeName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Consigner', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-26 06:59:08'),
(2, 'Consignee', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-26 06:59:08'),
(3, 'Driver', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-26 07:00:12'),
(4, 'Employee', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-26 07:00:12'),
(5, 'Admin', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-26 07:00:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_master`
--
ALTER TABLE `banner_master`
  ADD PRIMARY KEY (`bannerId`);

--
-- Indexes for table `bloodgropup_master`
--
ALTER TABLE `bloodgropup_master`
  ADD PRIMARY KEY (`bgroupId`);

--
-- Indexes for table `branch_master`
--
ALTER TABLE `branch_master`
  ADD PRIMARY KEY (`branchId`);

--
-- Indexes for table `businesscategory_master`
--
ALTER TABLE `businesscategory_master`
  ADD PRIMARY KEY (`businessId`);

--
-- Indexes for table `businessregistration_master`
--
ALTER TABLE `businessregistration_master`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `firmCategory` (`firmCategory`),
  ADD KEY `businessregistration_master_ibfk_1` (`firmType`);

--
-- Indexes for table `businessrule_master`
--
ALTER TABLE `businessrule_master`
  ADD PRIMARY KEY (`ruleId`);

--
-- Indexes for table `businesstype_master`
--
ALTER TABLE `businesstype_master`
  ADD PRIMARY KEY (`businesstypeId`);

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`cityId`);

--
-- Indexes for table `district_master`
--
ALTER TABLE `district_master`
  ADD PRIMARY KEY (`districtId`);

--
-- Indexes for table `employeerule_master`
--
ALTER TABLE `employeerule_master`
  ADD PRIMARY KEY (`ruleId`);

--
-- Indexes for table `experience_master`
--
ALTER TABLE `experience_master`
  ADD PRIMARY KEY (`experienceId`);

--
-- Indexes for table `help_master`
--
ALTER TABLE `help_master`
  ADD PRIMARY KEY (`helpId`);

--
-- Indexes for table `jobcategory_master`
--
ALTER TABLE `jobcategory_master`
  ADD PRIMARY KEY (`jobcatergoryId`);

--
-- Indexes for table `jobpost_master`
--
ALTER TABLE `jobpost_master`
  ADD PRIMARY KEY (`jobpostId`);

--
-- Indexes for table `jobskill_master`
--
ALTER TABLE `jobskill_master`
  ADD PRIMARY KEY (`jobskillId`);

--
-- Indexes for table `jobtype_master`
--
ALTER TABLE `jobtype_master`
  ADD PRIMARY KEY (`jobtypeId`);

--
-- Indexes for table `keyskill_master`
--
ALTER TABLE `keyskill_master`
  ADD PRIMARY KEY (`keyId`);

--
-- Indexes for table `kyc_master`
--
ALTER TABLE `kyc_master`
  ADD PRIMARY KEY (`kycId`);

--
-- Indexes for table `language_master`
--
ALTER TABLE `language_master`
  ADD PRIMARY KEY (`langId`);

--
-- Indexes for table `loginregistration`
--
ALTER TABLE `loginregistration`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `material_master`
--
ALTER TABLE `material_master`
  ADD PRIMARY KEY (`materialId`);

--
-- Indexes for table `patient_master`
--
ALTER TABLE `patient_master`
  ADD PRIMARY KEY (`patientId`);

--
-- Indexes for table `qualification_master`
--
ALTER TABLE `qualification_master`
  ADD PRIMARY KEY (`qualificationId`);

--
-- Indexes for table `role_master`
--
ALTER TABLE `role_master`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`stateId`);

--
-- Indexes for table `studentregistration_master`
--
ALTER TABLE `studentregistration_master`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `bloodgroup` (`bloodgroup`),
  ADD KEY `studentregistration_master_ibfk_1` (`experience`);

--
-- Indexes for table `taluka_master`
--
ALTER TABLE `taluka_master`
  ADD PRIMARY KEY (`talukaId`);

--
-- Indexes for table `usertype_master`
--
ALTER TABLE `usertype_master`
  ADD PRIMARY KEY (`userTypeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_master`
--
ALTER TABLE `banner_master`
  MODIFY `bannerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bloodgropup_master`
--
ALTER TABLE `bloodgropup_master`
  MODIFY `bgroupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `branch_master`
--
ALTER TABLE `branch_master`
  MODIFY `branchId` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `businesscategory_master`
--
ALTER TABLE `businesscategory_master`
  MODIFY `businessId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `businessregistration_master`
--
ALTER TABLE `businessregistration_master`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `businessrule_master`
--
ALTER TABLE `businessrule_master`
  MODIFY `ruleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `businesstype_master`
--
ALTER TABLE `businesstype_master`
  MODIFY `businesstypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `cityId` smallint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `district_master`
--
ALTER TABLE `district_master`
  MODIFY `districtId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employeerule_master`
--
ALTER TABLE `employeerule_master`
  MODIFY `ruleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experience_master`
--
ALTER TABLE `experience_master`
  MODIFY `experienceId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `help_master`
--
ALTER TABLE `help_master`
  MODIFY `helpId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `jobcategory_master`
--
ALTER TABLE `jobcategory_master`
  MODIFY `jobcatergoryId` smallint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobpost_master`
--
ALTER TABLE `jobpost_master`
  MODIFY `jobpostId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobskill_master`
--
ALTER TABLE `jobskill_master`
  MODIFY `jobskillId` smallint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobtype_master`
--
ALTER TABLE `jobtype_master`
  MODIFY `jobtypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keyskill_master`
--
ALTER TABLE `keyskill_master`
  MODIFY `keyId` smallint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kyc_master`
--
ALTER TABLE `kyc_master`
  MODIFY `kycId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `language_master`
--
ALTER TABLE `language_master`
  MODIFY `langId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loginregistration`
--
ALTER TABLE `loginregistration`
  MODIFY `userId` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `material_master`
--
ALTER TABLE `material_master`
  MODIFY `materialId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `patient_master`
--
ALTER TABLE `patient_master`
  MODIFY `patientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `qualification_master`
--
ALTER TABLE `qualification_master`
  MODIFY `qualificationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_master`
--
ALTER TABLE `role_master`
  MODIFY `roleId` smallint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `stateId` smallint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `studentregistration_master`
--
ALTER TABLE `studentregistration_master`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `taluka_master`
--
ALTER TABLE `taluka_master`
  MODIFY `talukaId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usertype_master`
--
ALTER TABLE `usertype_master`
  MODIFY `userTypeId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentregistration_master`
--
ALTER TABLE `studentregistration_master`
  ADD CONSTRAINT `studentregistration_master_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `help_master` (`helpId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
