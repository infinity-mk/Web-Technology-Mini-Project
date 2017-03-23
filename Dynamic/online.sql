-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2016 at 11:38 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`id` int(11) NOT NULL,
  `usern` varchar(30) NOT NULL,
  `item` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
('1', 'MOBILES'),
('2', 'LAPTOPS'),
('3', 'ACCESSORIES');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `pass`) VALUES
('pierce', 'pierceman');

-- --------------------------------------------------------

--
-- Table structure for table `fdbk`
--

CREATE TABLE IF NOT EXISTS `fdbk` (
  `name` varchar(30) NOT NULL,
  `phone no` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subj` varchar(30) NOT NULL,
  `mesg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fdbk`
--

INSERT INTO `fdbk` (`name`, `phone no`, `email`, `subj`, `mesg`) VALUES
('Mohnish', '8888888888', 'mohnish.katware@ves.ac.in', 'Service Info', 'Need More Information');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `catg` varchar(40) NOT NULL,
  `subcatg` varchar(40) NOT NULL,
  `img` varchar(30) NOT NULL,
  `itemno` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `desca` varchar(500) NOT NULL,
  `info` varchar(500) NOT NULL,
  `dat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`catg`, `subcatg`, `img`, `itemno`, `price`, `desca`, `info`, `dat`) VALUES
('1', 'sam', 'A:xampp	mpphp127B.tmp', 'sam5', '10490', 'SAMSUNG Galaxy J5 (Black, 8 GB)', '1.5 GB RAM | 8 GB ROM | Expandable Upto 128 GB\r\n5 inch HD Display\r\n13MP Primary Camera | 5MP Front\r\n2600 mAh Battery\r\nQualcomm MSM8916 Processor', '14-10-16 02-10-44'),
('1', 'len', 'A:xampp	mpphp177D.tmp', 'lm4', '5199', 'Lenovo A2010 (Black, 8 GB)', '1 GB RAM | 8 GB ROM | Expandable Upto 32\r\n4.5 inch FWVGA Display\r\n5MP Primary Camera | 2MP Front\r\n2000 mAh Battery\r\nMediaTek MT6735M 64-bit Processor', '14-10-16 02-31-30'),
('1', 'len', 'A:xampp	mpphp19FB.tmp', 'lm6', '10499', 'Lenovo K3 Note Music Edition (Yellow, 16 GB)', '2 GB RAM | 16 GB ROM | Expandable Upto 32 GB\r\n5.5 inch Full HD Display\r\n13MP Primary Camera | 5MP Front\r\n2900 mAh Li-Ion Battery\r\nARM Cortex A-53 MediaTek MT6752 64-bit Processor', '14-10-16 02-32-37'),
('1', 'sam', 'A:xampp	mpphp37B.tmp', 'sam7', '34900', 'SAMSUNG Galaxy S6 Edge (White Pearl, 32 GB)', '3 GB RAM | 32 GB ROM |\r\n5.1 inch Quad HD Display\r\n16MP Primary Camera | 5MP Front\r\n2600 mAh Battery', '14-10-16 02-13-57'),
('1', 'sam', 'A:xampp	mpphp38DC.tmp', 'sam6', '34900', 'SAMSUNG Galaxy S6 Edge (Black Sapphire, 32 GB)', '3 GB RAM | 32 GB ROM |\r\n5.1 inch Quad HD Display\r\n16MP Primary Camera | 5MP Front\r\n2600 mAh Battery', '14-10-16 02-11-59'),
('1', 'moto', 'A:xampp	mpphp3ED6.tmp', 'moto2', '15499', 'Moto X Play(With Turbo Charger) (Black, 16 GB)', '2 GB RAM | 16 GB ROM | Expandable Upto 128 GB\r\n5.5 inch Full HD Display\r\n21MP Primary Camera | 5MP Front\r\n3630 mAh Li-Ion Battery\r\nQualcomm Snapdragon 615 Processor', '14-10-16 02-24-02'),
('1', 'moto', 'A:xampp	mpphp40B.tmp', 'moto3', '17499', 'Moto X Play(With Turbo Charger) (Black, 32 GB)', '2 GB RAM | 32 GB ROM | Expandable Upto 128 GB\r\n5.5 inch Full HD Display\r\n21MP Primary Camera | 5MP Front\r\n3630 mAh Li-Ion Battery\r\nQualcomm Snapdragon 615 Processor', '14-10-16 02-24-52'),
('1', 'moto', 'A:xampp	mpphp5361.tmp', 'moto5', '10999', 'Moto G Turbo Edition (White, 16 GB)', '2 GB RAM | 16 GB ROM | Expandable Upto 32 GB\r\n5 inch HD Display\r\n13MP Primary Camera | 5MP Front\r\n2470 mAh Li-Ion Battery\r\nQualcomm Snapdragon Processor', '14-10-16 02-26-18'),
('1', 'len', 'A:xampp	mpphp646B.tmp', 'lm1', '11999', 'Lenovo Vibe K5 Note (Silver, 32 GB)  (With 3 GB RAM)', '3 GB RAM | 32 GB ROM | Expandable Upto 128 GB\r\n5.5 inch Full HD Display\r\n13MP Primary Camera | 8MP Front\r\n3500 mAh Li-Ion Polymer Battery\r\nHelio P10 64-bit Processor', '14-10-16 02-29-39'),
('1', 'sam', 'A:xampp	mpphp6B59.tmp', 'sam1', '15900', 'SAMSUNG Galaxy On8 (Gold, 16 GB)', '3 GB RAM | 16 GB ROM | Expandable Upto 128 GB\r\n5.5 inch Full HD Display\r\n13MP Primary Camera | 5MP Front\r\n3300 mAh Li-Ion Battery\r\nS5E7580 (Exynos 7580) Processor', '14-10-16 01-55-49'),
('1', 'len', 'A:xampp	mpphp8FFD.tmp', 'lm3', '9199', 'Lenovo K3 Note (Black, 16 GB)', '2 GB RAM | 16 GB ROM | Expandable Upto 32 GB\r\n5.5 inch Full HD Display\r\n13MP Primary Camera | 5MP Front\r\n2900 mAh Li-Ion Battery\r\nCortex-A53 (MediaTek MT6752 64-bit 4G LTE) Processor', '14-10-16 02-30-56'),
('1', 'len', 'A:xampp	mpphp9D68.tmp', 'lm5', '25500', 'Lenovo Vibe Shot (Grey, 32 GB)', '3 GB RAM | 32 GB ROM | Expandable Upto 128 GB\r\n5 inch Full HD Display\r\n16MP Primary Camera | 8MP Front\r\n2900 mAh Li-Polymer Battery\r\nQualcomm Snapdragon 615 Processor', '14-10-16 02-32-05'),
('1', 'moto', 'A:xampp	mpphpB57A.tmp', 'moto4', '31999', 'Moto Turbo (Black, 64 GB)', '3 GB RAM | 64 GB ROM |\r\n5.2 inch Quad HD Display\r\n21MP Primary Camera | 2MP Front\r\n3900 mAh Battery\r\nQualcomm Snapdragon 805 QSC 8084 Processor', '14-10-16 02-25-38'),
('1', 'sam', 'A:xampp	mpphpC637.tmp', 'sam2', '13490', 'SAMSUNG Galaxy J7 (Gold, 16 GB)', '1.5 GB RAM | 16 GB ROM | Expandable Upto 128 GB\r\n5.5 inch HD Display\r\n13MP Primary Camera | 5MP Front\r\n3000 mAh Battery\r\nExynos 7580 Processor', '14-10-16 01-57-18'),
('1', 'len', 'A:xampp	mpphpD5E.tmp', 'lm2', '6999', 'Lenovo VIBE P1m (White, 16 GB)', '2 GB RAM | 16 GB ROM | Expandable Upto 32 GB\r\n5 inch HD Display\r\n8MP Primary Camera | 5MP Front\r\n3900 mAh Li-Polymer Battery\r\nMediaTek MT6735P 64-bit Processor', '14-10-16 02-30-22'),
('1', 'sam', 'A:xampp	mpphpDF8A.tmp', 'sam8', '43400', 'SAMSUNG Galaxy S7 (Black Onyx, 32 GB)', '4 GB RAM | 32 GB ROM | Expandable Upto 200 GB\r\n5.1 inch Quad HD Display\r\n12MP Primary Camera | 5MP Front\r\n3000 mAh Li-Ion Battery\r\nExynos 8890 Processor', '14-10-16 02-17-04'),
('1', 'moto', 'A:xampp	mpphpE06F.tmp', 'moto6', '26999', 'Moto X Style (Black, 16 GB)', '3 GB RAM | 16 GB ROM | Expandable Upto 128 GB\r\n5.7 inch Quad HD Display\r\n21MP Primary Camera | 5MP Front\r\n3000 mAh Li-Ion Battery\r\nQualcomm Snapdragon 808 MSM8992 Processor', '14-10-16 02-26-54'),
('1', 'moto', 'A:xampp	mpphpE8A0.tmp', 'moto1', '7999', 'Moto E3 Power (Black, 16 GB)', '2 GB RAM | 16 GB ROM | Expandable Upto 32 GB\r\n5 inch HD Display\r\n8MP Primary Camera | 5MP Front\r\n3500 mAh Battery\r\nMT6735p 64-bit Processor', '14-10-16 02-21-29'),
('2', 'hp', 'C:xampp	mpphp1B0B.tmp', 'h3', '26490', 'HP APU Quad Core A8', 'AMD APU Quad Core A8 Processor ( 5th Gen )\r\n4 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n15.6 inch Display', '18-10-16 11-49-40'),
('2', 'hp', 'C:xampp	mpphp1D23.tmp', 'h5', '96000', 'HP Envy Core i7', 'Intel Core i7 Processor ( 6th Gen )\r\n12 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n14 inch Display', '18-10-16 11-56-14'),
('2', 'hp', 'C:xampp	mpphp1F52.tmp', 'h6', '104990', 'HP Elite X2 Core i5 ', 'Intel Core i5 Processor ( 6th Gen )\r\n8 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n256 GB SSD\r\n12 inch Touchscreen Display', '18-10-16 11-57-20'),
('3', 'head', 'C:xampp	mpphp23B8.tmp', 'he2', '819', 'Sennheiser CX 180 Street II In-ear-canalphone', 'Design: Canalphone\r\nCompatible With: Mobile, Tablet\r\nBluetooth Support: No | Wired\r\nHeadphone Jack: 3.5 mm', '20-10-16 01-51-33'),
('3', 'power', 'C:xampp	mpphp23E9.tmp', 'pb4', '1399', 'Ambrane P-2080 16000 mAh Power Bank', 'For Mobile\r\nLithium-ion Battery\r\nMicro Connector\r\nCapacity: 16000 mAh\r\nPower Source: AC Adapter', '20-10-16 01-42-49'),
('3', 'head', 'C:xampp	mpphp38C6.tmp', 'he6', '1899', 'Skullcandy Uproar S5URHT-456 Stereo Headphone Wired Headphones', 'Design: Over the Head | Type: Stereo Headphone\r\nCompatible With: Mobile, Tablet\r\nBluetooth Support: No | Wired\r\nHeadphone Jack: 3.5 Flatwire', '20-10-16 01-56-01'),
('2', 'dell', 'C:xampp	mpphp40C2.tmp', 'd2', '28990', 'Dell Inspiron Core i3', 'Intel Core i3 Processor ( 5th Gen )\r\n4 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n500 GB HDD\r\n15.6 inch Display', '18-10-16 11-37-49'),
('2', 'dell', 'C:xampp	mpphp458F.tmp', 'd5', '36990', 'Dell Inspiron Core i3', 'Intel Core i3 Processor ( 4th Gen )\r\n4 GB DDR3 RAM\r\nWindows 10 Operating System\r\n500 GB HDD\r\n11.6 inch Touchscreen Display\r\n', '18-10-16 11-43-18'),
('2', 'acer', 'C:xampp	mpphp45F0.tmp', 'a4', '23990', 'Acer Aspire R3 Pentium Quad Core', 'Intel Pentium Quad Core Processor ( 5th Gen )\r\n4 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n500 GB HDD\r\n11.6 inch Touchscreen Display', '18-10-16 11-30-12'),
('3', 'spk', 'C:xampp	mpphp4914.tmp', 'spk6', '2999', 'Philips MMS 1400 Laptop/Desktop Speaker ', 'General\r\nModel Name\r\nMMS 1400\r\nType Laptop/Desktop Speaker\r\nConfiguration 2.1', '20-10-16 02-08-06'),
('3', 'head', 'C:xampp	mpphp513C.tmp', 'he3', '499', 'Philips SHP1900/97 Wired Headphones', 'Design: Over the Head\r\nCompatible With: Mobile, Tablet\r\nBluetooth Support: No | Wired\r\nHeadphone Jack: 3.5 mm', '20-10-16 01-52-50'),
('2', 'dell', 'C:xampp	mpphp564C.tmp', 'd4', '22990', 'Dell 3000 APU Quad Core E2', 'AMD APU Quad Core E2 Processor ( )\r\n4 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n500 GB HDD\r\n15.6 inch Display', '18-10-16 11-42-17'),
('2', 'lenp', 'C:xampp	mpphp5ED.tmp', 'l2', '87290', 'Lenovo Y50-70 Core i7 ', 'Intel Core i7 Processor ( 4th Gen )\r\n8 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD|8 GB SSD\r\n15.6 inch Display', '18-10-16 12-01-36'),
('3', 'head', 'C:xampp	mpphp603C.tmp', 'he4', '500', 'Sony MDR-AS200 Wired Headphones Wired Headphones', 'Design: Ear Clip\r\nCompatible With: Mobile, Tablet\r\nBluetooth Support: No | Wired', '20-10-16 01-54-00'),
('3', 'power', 'C:xampp	mpphp60FE.tmp', 'pb5', '799', 'Ambrane P-1122 White & Blue 10000 mAh Power Bank', 'For Mobile\r\nLithium-ion Battery\r\nMicro Connector\r\nCapacity: 10000 mAh\r\nPower Source: AC Adapter', '20-10-16 01-44-10'),
('2', 'acer', 'C:xampp	mpphp6E83.tmp', 'a5', '15990', 'Acer ES 11 Celeron Dual Core', 'Intel Celeron Dual Core Processor ( 4th Gen )\r\n2 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n500 GB HDD\r\n11.6 inch Display', '18-10-16 11-31-28'),
('2', 'acer', 'C:xampp	mpphp6ED1.tmp', 'a2', '18990', 'Acer Pentium Quad Core ', 'Intel Pentium Quad Core Processor ( )\r\n4 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n500 GB HDD\r\n14 inch Display', '18-10-16 11-27-06'),
('2', 'dell', 'C:xampp	mpphp793.tmp', 'd6', '68990', 'Dell Inspiron 7000 Core i5 ', 'Intel Core i5 Processor ( 7th Gen )\r\n8 GB DDR4 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n15.6 inch Display', '18-10-16 11-45-13'),
('2', 'acer', 'C:xampp	mpphp896A.tmp', 'a3', '13990', 'Acer Gateway Pentium Dual Core ', 'Intel Pentium Dual Core Processor ( )\r\n2 GB DDR3 RAM\r\n64 bit Linux/Ubuntu Operating System\r\n320 GB HDD\r\n14 inch Display', '18-10-16 11-28-18'),
('2', 'dell', 'C:xampp	mpphp9BDE.tmp', 'd3', '37990', 'Dell Inspiron APU Quad Core A10 ', 'AMD APU Quad Core A10 Processor ( )\r\n8 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n15.6 inch Display', '18-10-16 11-39-18'),
('2', 'acer', 'C:xampp	mpphp9F36.tmp', 'a1', '13990', 'Acer One 10 Atom ', 'Intel Atom Processor ( 5th Gen )\r\n2 GB DDR3 RAM\r\n32 bit Windows 10 Operating System\r\n10.1 inch Touchscreen Display', '18-10-16 11-24-02'),
('2', 'acer', 'C:xampp	mpphpA33B.tmp', 'a6', '45,990', 'Acer E15 Core i7', 'Intel Core i7 Processor ( )\r\n8 GB DDR3 RAM\r\nLinux/Ubuntu Operating System\r\n1 TB HDD\r\n15.6 inch Display', '18-10-16 11-32-47'),
('2', 'lenp', 'C:xampp	mpphpA5FF.tmp', 'l5', '64490', 'Lenovo U41-70 Core i7', 'Intel Core i7 Processor ( 5th Gen )\r\n4 GB DDR3 RAM\r\n64 bit Windows 8 Operating System\r\n1 TB HDD|8 GB SSD\r\n14 inch Display', '18-10-16 12-04-28'),
('2', 'lenp', 'C:xampp	mpphpAC06.tmp', 'l6', '62590', 'Lenovo Ideapad 500 Core i7', 'Intel Core i7 Processor ( 6th Gen )\r\n8 GB DDR3 RAM\r\n64 bit DOS Operating System\r\n1 TB HDD\r\n15.6 inch Display', '18-10-16 12-05-35'),
('3', 'spk', 'C:xampp	mpphpACA9.tmp', 'spk2', '6999', 'Philips HTL1041 Bluetooth Soundbar', 'Frequency: 150 - 15000 Hz\r\nPower Output: 40 W\r\nPower Source: Power Adapter\r\nBluetooth', '20-10-16 02-01-58'),
('3', 'power', 'C:xampp	mpphpB0EF.tmp', 'pb6', '999', 'Intex NA IT-PB10.4K 10400 mAh Power Bank', 'For Mobile\r\nLithium-ion Battery\r\nMicro Connector\r\nCapacity: 10400 mAh\r\nPower Source: AC Adapter', '20-10-16 01-45-36'),
('3', 'spk', 'C:xampp	mpphpB56F.tmp', 'spk3', '9999', 'Envent Deejay 301 M Portable Home Audio Speaker ', 'Frequency: 20 - 20000Hz\r\nPower Output: 8 W\r\nPower Source: AC Adapter', '20-10-16 02-03-06'),
('3', 'head', 'C:xampp	mpphpB914.tmp', 'he1', '849', 'JBL T250SI On-the-ear Headphone', 'Design: Over the Head | Type: Stereo\r\nCompatible With: Mobile, Tablet\r\nBluetooth Support: No | Wired\r\nHeadphone Jack: 3.5 mm', '20-10-16 01-47-49'),
('3', 'spk', 'C:xampp	mpphpC13E.tmp', 'spk1', '2099', 'Zebronics 2.1 Multimedia SW2490 RUCF Home Audio Speaker', 'Memory Card Slot\r\nPower Source: AC Adapter', '20-10-16 02-00-58'),
('2', 'lenp', 'C:xampp	mpphpC300.tmp', 'l4', '69990', 'Lenovo Yoga 500 Core i7', 'Intel Core i7 Processor ( 6th Gen )\r\n8 GB RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n14 inch Touchscreen Display', '18-10-16 12-03-30'),
('3', 'power', 'C:xampp	mpphpD0E3.tmp', 'pb1', '1099', 'Lenovo PA10400 PowerBank 10400 mAh Power Bank', '\r\nFor Mobile\r\nLithium-ion Battery\r\nMicro Connector\r\nCapacity: 10400 mAh\r\nPower Source: AC Adapter', '20-10-16 01-39-11'),
('2', 'lenp', 'C:xampp	mpphpD27D.tmp', 'l1', '97990', 'Lenovo Y Series Core i7', 'Intel Core i7 Processor ( 6th Gen )\r\n16 GB DDR4 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD|128 GB SSD\r\n15.6 inch Display', '18-10-16 12-00-17'),
('2', 'hp', 'C:xampp	mpphpD39A.tmp', 'h4', '105000', 'HP Spectre Core i5', 'Intel Core i5 Processor ( 5th Gen )\r\n8 GB RAM\r\n64 bit Windows 10 Operating System\r\n256 GB SSD\r\n13.3 inch Display', '18-10-16 11-51-33'),
('2', 'lenp', 'C:xampp	mpphpDC58.tmp', 'l3', '83490', 'Lenovo ThinkPad T440 Core i5 ', 'Intel Core i5 Processor ( 4th Gen )\r\n4 GB DDR3 RAM\r\n64 bit Windows 8 Operating System\r\n500 GB HDD\r\n14 inch Display', '18-10-16 12-02-31'),
('2', 'hp', 'C:xampp	mpphpE3E2.tmp', 'h2', '39990', 'HP Core i5 ', 'Intel Core i5 Processor ( 5th Gen )\r\n4 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n15.6 inch Display', '18-10-16 11-48-21'),
('3', 'spk', 'C:xampp	mpphpE4D8.tmp', 'spk4', '2199', 'Philips MMS2030F Home Audio Speaker ', 'Memory Card Slot\r\nPower Output: 30 W\r\nPower Source: AC Adapter', '20-10-16 02-04-23'),
('3', 'spk', 'C:xampp	mpphpE82F.tmp', 'spk5', '2999', 'Zebronics BT3440 RUCF Bluetooth Home Audio Speaker', 'Memory Card Slot\r\nFrequency: 35 - 200 Hz\r\nPower Output: 15W + 6W x 2\r\nPower Source: AC Adapter\r\nBluetooth', '20-10-16 02-05-30'),
('3', 'power', 'C:xampp	mpphpEA43.tmp', 'pb2', '1099', 'Intex Na IT-PB12.5K 12500 mAh Power Bank', 'For Mobile\r\nLithium-ion Battery\r\nMicro Connector\r\nCapacity: 12500 mAh\r\nPower Source: AC Adapter', '20-10-16 01-40-23'),
('2', 'hp', 'C:xampp	mpphpEDD9.tmp', 'h1', '23990', 'HP APU Quad Core A8', 'AMD APU Quad Core A8 Processor ( 5th Gen )\r\n4 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n15.6 inch Display', '18-10-16 11-47-18'),
('3', 'power', 'C:xampp	mpphpEFFC.tmp', 'pb3', '1499', 'Ambrane P-2000 20800 mAh Power Bank', 'For Mobile\r\nLithium-ion Battery\r\nMicro Connector\r\nCapacity: 20800 mAh\r\nPower Source: AC Adadpter, USB', '20-10-16 01-41-30'),
('2', 'dell', 'C:xampp	mpphpF43C.tmp', 'd1', '26990', 'Dell Inspiron Core i3 ', 'Intel Core i3 Processor ( 5th Gen )\r\n4 GB DDR3 RAM\r\n64 bit Linux/Ubuntu Operating System\r\n1 TB HDD\r\n15.6 inch Display', '18-10-16 11-36-24'),
('3', 'head', 'C:xampp mpphpD99B.tmp', 'he5', '1798', 'Sony MDR-XB450 On-the-ear Headphone', 'Design: Over the Head | Type: Extra Bass\r\nCompatible With: Mobile, Tablet\r\nBluetooth Support: No | Wired', '20-10-16 01-54-59');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`order_no` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `amt` int(11) NOT NULL,
  `debit_no` int(20) NOT NULL,
  `till` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_no`, `username`, `bank`, `amt`, `debit_no`, `till`) VALUES
(10, 'mohnish123', 'PNB', 10490, 1546, '2016-10-27'),
(15, 'mohnish123', 'CAN', 28498, 14656, '2016-10-27'),
(16, 'piercemorgans', 'CAN', 10490, 79899, '2016-10-27'),
(17, 'piercemorgans', 'IOB', 34900, 7979, '2016-10-27'),
(20, 'piercemorgans', 'SBI', 34900, 2342, '2016-10-28'),
(25, 'piercemorgans', 'SBI', 10490, 4323242, '2016-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gen` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `addr` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `username`, `pass`, `dob`, `gen`, `phone`, `addr`) VALUES
('Mohnish katware', 'mohnish@gmail.com', 'mohnish123', '12345678', '96-01-12', 'm', '9876543210', 'VES HOSTEL CHEMBUR'),
('Pierce Morgan', 'pierce.man@gmail.com', 'piercemorgans', 'pierce123', '94-01-21', 'm', '9874561230', '804,SABARI SHAAN, MAROLI CHURCH, CHEMBUR, MUMBAI');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `cat_id` varchar(30) NOT NULL,
  `subcategory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`cat_id`, `subcategory`) VALUES
('2', 'acer'),
('2', 'dell'),
('3', 'head'),
('2', 'hp'),
('1', 'len'),
('2', 'lenp'),
('1', 'moto'),
('3', 'power'),
('1', 'sam'),
('3', 'spk');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE IF NOT EXISTS `trash` (
  `catg` varchar(50) NOT NULL,
  `subcatg` varchar(50) NOT NULL,
  `img` varchar(60) NOT NULL,
  `itemno` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `desca` varchar(300) NOT NULL,
  `dat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD UNIQUE KEY `cat_id` (`cat_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
 ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `fdbk`
--
ALTER TABLE `fdbk`
 ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD UNIQUE KEY `img` (`img`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_no`), ADD UNIQUE KEY `debit_no` (`debit_no`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
 ADD UNIQUE KEY `subcategory` (`subcategory`);

--
-- Indexes for table `trash`
--
ALTER TABLE `trash`
 ADD UNIQUE KEY `img` (`img`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
