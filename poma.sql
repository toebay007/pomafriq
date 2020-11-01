-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2020 at 10:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poma`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminReg`
--

CREATE TABLE `adminReg` (
  `id` int(11) NOT NULL,
  `finame` varchar(50) NOT NULL,
  `laname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwordz` varchar(50) NOT NULL,
  `emails` varchar(50) NOT NULL,
  `phoneN0` varchar(20) NOT NULL,
  `statuses` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminReg`
--

INSERT INTO `adminReg` (`id`, `finame`, `laname`, `username`, `passwordz`, `emails`, `phoneN0`, `statuses`) VALUES
(1, 'chidera', 'chidera', 'chidera', 'a3c6092195a54146236d84e75a750bf8', 'chidera', '08038112001', 'Admin'),
(2, 'to', 'to', 'chi', '12345', 'got@we.com', '908765453221', ''),
(3, 'Toebay', 'Amadi', 'Amadi', '827ccb0eea8a706c4c34a16891f84e7b', 'toebay@ghn.com', '08038112001', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `Topic` varchar(100) NOT NULL,
  `intro` text NOT NULL,
  `details` mediumtext NOT NULL,
  `photos` mediumblob NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `Topic`, `intro`, `details`, `photos`, `created`) VALUES
(1, 'Lets try this out', 'Beth Atkinson died. She was one of the best first dates', 'Beth Atkinson died. She was one of the best first dates I ever had.\r\nIt was a long time ago, so we met the old-fashioned way, on Match.com. We had coffee at Mercury Cafe on Chicago Avenue. We laughed so loudly we made the other patrons blush. You could tell they were merely pretending to study or work, peering up from their books and laptops to witness the splendor of a first date gone well.\r\nAfter that, we rode our bikes to a taco place and talked about our dreams. She wanted to move to France someday. I did this thing I sometimes do where I look at someone I’ve just met, and mentally picture what they might look like in 30 years. Where will the wrinkles settle around that smile? Then we went to my place and made out on my couch.', 0x70726f64756374732f6666343430613930363736346165326662376138656631386434383061323438494d475f32303139303232375f3038343434315f3932342e4a5047, '2020-08-11'),
(2, 'Lets try this out', 'Beth Atkinson died. She was one of the best first dates I ever had.\r\nIt was a long time ago, so we met the old-fashioned way, on Match.com.', 'Beth Atkinson died. She was one of the best first dates I ever had.\r\nIt was a long time ago, so we met the old-fashioned way, on Match.com. We had coffee at Mercury Cafe on Chicago Avenue. We laughed so loudly we made the other patrons blush. You could tell they were merely pretending to study or work, \r\n\r\n\r\n\r\npeering up from their books and laptops to witness the splendor of a first date gone well.\r\nAfter that, we rode our bikes to a taco place and talked about our dreams. She wanted to move to France someday. \r\nI did this thing I sometimes do where I look at someone                   I’ve just met, and mentally picture what they might \r\n\r\nlook like in 30 years. Where will the wrinkles settle around that smile? Then we went to my place and made out on my couch.', 0x70726f64756374732f663233313633623761373336323635323130373666626239626533653333303753637265656e73686f7420283434292e706e67, '2020-08-11'),
(3, 'Third News Last', 'While removing a biscotto from a jar, tongs in hand, Julia froze and turned ghost white. “You didn’t hear about Beth?”', 'Beth’s roommate, Julia, happened to be a barista at a cafe I frequented. “I haven’t seen you for a few weeks, did you take a vacation?,” I inquired. I fought through the embarrassment that Julia probably knew I had gone out with Beth, and that she knew what horrible thing I must have said or did — or what gaping personality flaw or physical deformity I must have had — to make her stop returning my messages.\r\n\r\nWhile removing a biscotto from a jar, tongs in hand, Julia froze and turned ghost white. “You didn’t hear about Beth?”\r\n\r\nI hardly knew Beth. But, I knew her in ways that her closest friends didn’t know her.\r\nNormally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth. The funeral had passed. It seemed perverse to try to talk to Julia, as she had been riding with Beth during the bicycle accident. It felt selfish to seek solace from a near stranger who had known her so deeply, and experienced the tragedy so closely.', 0x70726f64756374732f3539633165323462353639366534333232646137643230623365343534343563696d677365732e6a7067, '2020-08-11'),
(4, 'fourth section', 'While removing a biscotto from a jar, tongs in hand, Julia froze and turned ghost white. “You didn’t hear about Beth?”', 'After that, we rode our bikes to a taco place and talked about our dreams. She wanted to move to France someday. I did this thing I sometimes do where I look at someone I’ve just met, and mentally picture what they might look like in 30 years. Where will the wrinkles settle around that smile? Then we went to my place and made out on my couch.\r\n“When can I see you again?” This was what I liked about Beth. Most people were too busy protecting themselves to be direct. Beth made unflinching eye contact when she spoke to you. I envied the congruence she conveyed between her internal and external worlds.\r\nI was moving to another apartment in a couple of days. So, we’d have to wait until after that.\r\nWe exchanged text messages for a couple of weeks, delaying our second date due to minor inconveniences and somewhat-full schedules. Then, Beth stopped responding.\r\nBeth’s roommate, Julia, happened to be a barista at a cafe I frequented. “I haven’t seen you for a few weeks, did you take a vacation?,” I inquired. I fought through the embarrassment that Julia probably knew I had gone out with Beth, and that she knew what horrible thing I must have said or did — or what gaping personality flaw or physical deformity I must have had — to make her stop returning my messages.\r\nWhile removing a biscotto from a jar, tongs in hand, Julia froze and turned ghost white. “You didn’t hear about Beth?”\r\nI hardly knew Beth. But, I knew her in ways that her closest friends didn’t know her.\r\nNormally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth. The funeral had passed. It seemed perverse to try to talk to Julia, as she had been riding with Beth during the bicycle accident. It felt selfish to seek solace from a near stranger who had known her so deeply, and experienced the tragedy so closely.\r\nAs I sat in my dark apartment with a glass of gin by my side, I read Beth’s mother’s wailing Facebook updates. The contrast in loss was cartoonish. How much of my grief was for Beth, and how much of it was just grief for myself?\r\nI wrote to Match.com to let them know what had happened to Beth. Her profile was gone within 30 minutes. I wondered about the other guys who might be disappointed to see her disappear.\r\nWhen I see people treat each other flippantly, like e-commerce items they can customize with a swipe, I wish they could learn what I learned from Beth: Whenever I’m tempted — by what I think I want from the world — to forget someone’s humanity, or to fool myself into shying away from a real connection, I remember Beth’s blazing blue eyes, patiently locked with mine, awaiting my response.', 0x70726f64756374732f36653561666330353262616266306161656434306236653963303561333235662e6a7067, '2020-08-12'),
(5, 'fifth Blog for no reason', 'After that, we rode our bikes to a taco place and talked about our dreams', 'After that, we rode our bikes to a taco place and talked about our dreams. She wanted to move to France someday. I did this thing I sometimes do where I look at someone I’ve just met, and mentally picture what they might look like in 30 years. Where will the wrinkles settle around that smile? Then we went to my place and made out on my couch.\r\n“When can I see you again?” This was what I liked about Beth. Most people were too busy protecting themselves to be direct. Beth made unflinching eye contact when she spoke to you. I envied the congruence she conveyed between her internal and external worlds.\r\nI was moving to another apartment in a couple of days. So, we’d have to wait until after that.\r\nWe exchanged text messages for a couple of weeks, delaying our second date due to minor inconveniences and somewhat-full schedules. Then, Beth stopped responding.\r\nBeth’s roommate, Julia, happened to be a barista at a cafe I frequented. “I haven’t seen you for a few weeks, did you take a vacation?,” I inquired. I fought through the embarrassment that Julia probably knew I had gone out with Beth, and that she knew what horrible thing I must have said or did — or what gaping personality flaw or physical deformity I must have had — to make her stop returning my messages.\r\nWhile removing a biscotto from a jar, tongs in hand, Julia froze and turned ghost white. “You didn’t hear about Beth?”\r\nI hardly knew Beth. But, I knew her in ways that her closest friends didn’t know her.\r\nNormally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth. The funeral had passed. It seemed perverse to try to talk to Julia, as she had been riding with Beth during the bicycle accident. It felt selfish to seek solace from a near stranger who had known her so deeply, and experienced the tragedy so closely.\r\nAs I sat in my dark apartment with a glass of gin by my side, I read Beth’s mother’s wailing Facebook updates. The contrast in loss was cartoonish. How much of my grief was for Beth, and how much of it was just grief for myself?\r\nI wrote to Match.com to let them know what had happened to Beth. Her profile was gone within 30 minutes. I wondered about the other guys who might be disappointed to see her disappear.\r\nWhen I see people treat each other flippantly, like e-commerce items they can customize with a swipe, I wish they could learn what I learned from Beth: Whenever I’m tempted — by what I think I want from the world — to forget someone’s humanity, or to fool myself into shying away from a real connection, I remember Beth’s blazing blue eyes, patiently locked with mine, awaiting my response.', 0x70726f64756374732f346139643335366630303638303934356261613938653437623234393632316453637265656e73686f7420283236292e706e67, '2020-08-12'),
(6, 'A new Format', 'Normally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth.', 'I was moving to another apartment in a couple of days. So, we’d have to wait until after that.\r\nWe exchanged text messages for a couple of weeks, delaying our second date due to minor inconveniences and somewhat-full schedules. Then, Beth stopped responding.\r\n\r\nBeth’s roommate, Julia, happened to be a barista at a cafe I frequented. “I haven’t seen you for a few weeks, did you take a vacation?,” I inquired. I fought through the embarrassment that Julia probably knew I had gone out with Beth, and that she knew what horrible thing I must have said or did — or what gaping personality flaw or physical deformity I must have had — to make her stop returning my messages.\r\nWhile removing a biscotto from a jar, tongs in hand, Julia froze and turned ghost white. “You didn’t hear about Beth?”\r\nI hardly knew Beth. But, I knew her in ways that her closest friends didn’t know her.\r\n\r\nNormally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth. The funeral had passed. It seemed perverse to try to talk to Julia, as she had been riding with Beth during the bicycle accident. It felt selfish to seek solace from a near stranger who had known her so deeply, and experienced the tragedy so closely.\r\nAs I sat in my dark apartment with a glass of gin by my side, I read Beth’s mother’s wailing Facebook updates. The contrast in loss was cartoonish. How much of my grief was for Beth, and how much of it was just grief for myself?', 0x70726f64756374732f6666343430613930363736346165326662376138656631386434383061323438494d475f32303139303232375f3038343434315f3932342e4a5047, '2020-08-12'),
(7, 'A new Daay', 'In MySQL the LIMIT clause is used with the SELECT statement to restrict the number of rows in the result set. The Limit Clause accepts one or two arguments which are offset and count.The value of both the parameters can be zero or positive integers.', 'In MySQL the LIMIT clause is used with the SELECT statement to restrict the number of rows in the result set. The Limit Clause accepts one or two arguments which are offset and count.The value of both the parameters can be zero or positive integers.\r\nOffset:It is used to specify the offset of the first row to be returned.\r\nCount:It is used to specify the maximum number of rows to be returned.\r\n\r\nThe Limit clause accepts one or two parameters, whenever two parameters are specified, the first is the offset and the second denotes the count whereas whenever only one parameter is specified, it denotes the number of rows to be returned from the beginning of the result set.', 0x70726f64756374732f386237633262323530666237633066393564616462633734663565663265366553637265656e73686f7420283439292e706e67, '2020-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `category_pic` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_pic`) VALUES
(1, 'Soap', 0x63617465676f72792f6138333331313132326566393737636635363630626433366534363132343731494d475f32303139303232375f3038343434315f3932342e4a5047),
(2, 'Oil Based Products', 0x63617465676f72792f6138333331313132326566393737636635363630626433366534363132343731494d475f32303139303232375f3038343434315f3932342e4a5047),
(3, 'Disinfectants', 0x63617465676f72792f6138333331313132326566393737636635363630626433366534363132343731494d475f32303139303232375f3038343434315f3932342e4a5047),
(4, 'Fragrance', 0x63617465676f72792f663233313633623761373336323635323130373666626239626533653333303753637265656e73686f7420283434292e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `con_id` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `emails` varchar(50) NOT NULL,
  `subjects` varchar(50) NOT NULL,
  `messages` text NOT NULL,
  `statuses` varchar(50) DEFAULT NULL,
  `created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`con_id`, `names`, `emails`, `subjects`, `messages`, `statuses`, `created`) VALUES
(1, 'Chidinma Onyeka', 'onyeka.chidinma@gmail.com', 'First of', 'After that, we rode our bikes to a taco place and talked about our dreams. She wanted to move to France someday. I did this thing I sometimes do where I look at someone I’ve just met, and mentally picture what they might look like in 30 years. Where will the wrinkles settle around that smile? Then we went to my place and made out on my couch.', 'Resolved', '2020-09-14'),
(2, 'Chidinma Onyeka', 'amadichidinmac@gmail.com', 'First of', 'After that, we rode our bikes to a taco place and talked about our dreams. She wanted to move to France someday. I did this thing I sometimes do where I look at someone I’ve just met, and mentally picture what they might look like in 30 years. Where will the wrinkles settle around that smile? Then we went to my place and made out on my couch.', 'Resolved', '2020-09-14'),
(3, 'Chidinma Chinyelu Amadi', 'toebaY@JHE.GJ', 'JHBK HIJ', 'JBHKKKBK IHBIB I IBHIB HIHIBUI JIO IHB IIUVB', NULL, '2020-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `customerorders`
--

CREATE TABLE `customerorders` (
  `orders_id` int(11) NOT NULL,
  `orders_status` varchar(50) DEFAULT NULL,
  `orders_sn` varchar(100) DEFAULT NULL,
  `orders_type` varchar(50) DEFAULT NULL,
  `orders_amt` float DEFAULT NULL,
  `orders_date` date NOT NULL DEFAULT current_timestamp(),
  `users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerorders`
--

INSERT INTO `customerorders` (`orders_id`, `orders_status`, `orders_sn`, `orders_type`, `orders_amt`, `orders_date`, `users_id`) VALUES
(2, 'Received', 'POMAFRIQ/2020/200', NULL, 33500, '2020-08-28', 1),
(3, 'Delivered', 'POMAFRIQ/2020/300', NULL, 135000, '2020-08-28', 1),
(7, 'Received', 'POMAFRIQ/2020/700', NULL, 46000, '2020-08-28', 1),
(8, 'Delivered', 'POMAFRIQ/2020/800', NULL, 33000, '2020-08-28', 1),
(9, 'Received', 'POMAFRIQ/2020/900', NULL, 1200, '2020-08-28', 1),
(10, 'Delivered', 'POMAFRIQ/2020/100', NULL, 45000, '2020-08-29', 3),
(11, 'Received', 'POMAFRIQ/2020/110', NULL, 4000, '2020-08-29', 3),
(12, 'Delivered', 'POMAFRIQ/2020/120', NULL, 25000, '2020-08-29', 3),
(13, 'Received', 'POMAFRIQ/2020/130', NULL, 54000, '2020-08-30', 1),
(14, 'Received', 'POMAFRIQ/2020/140', NULL, 440000, '2020-08-30', 1),
(15, 'Delivered', 'POMAFRIQ/2020/150', NULL, 7000, '2020-09-01', 1),
(16, 'Received', 'POMAFRIQ/2020/160', NULL, 71800, '2020-09-02', 1),
(17, 'Delivered', 'POMAFRIQ/2020/170', NULL, 52000, '2020-09-02', 1),
(18, 'Delivered', 'POMAFRIQ/2020/180', NULL, 250000, '2020-09-02', 1),
(19, 'Delivered', 'POMAFRIQ/2020/190', NULL, 231000, '2020-09-02', 5),
(20, NULL, 'POMAFRIQ/2020/200', NULL, 4500, '2020-09-05', 1),
(21, 'Received', 'POMAFRIQ/2020/210', NULL, 27000, '2020-09-13', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orddetails_id` int(11) NOT NULL,
  `orddetails_qty` varchar(50) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `orders_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orddetails_id`, `orddetails_qty`, `products_id`, `orders_id`) VALUES
(1, '1', 14, 2),
(2, '1', 12, 2),
(3, '1', NULL, 2),
(4, '1', 12, 3),
(5, '1', 13, 3),
(6, '3', 5, 3),
(7, '3', NULL, 3),
(8, '1', 12, 4),
(9, '1', 13, 4),
(10, '3', 5, 4),
(11, '3', NULL, 4),
(12, '1', 12, 5),
(13, '1', 13, 5),
(14, '3', 5, 5),
(15, '3', NULL, 5),
(16, '1', 12, 6),
(17, '1', 13, 6),
(18, '3', 5, 6),
(19, '3', NULL, 6),
(20, '2', NULL, 7),
(21, '4', 7, 7),
(22, '2', 7, 8),
(23, '1', NULL, 8),
(24, '1', 6, 9),
(25, '10', 11, 10),
(26, '1', 7, 11),
(27, '1', NULL, 12),
(28, '1', 7, 13),
(29, '2', NULL, 13),
(30, '10', NULL, 14),
(31, '10', 7, 14),
(32, '10', NULL, 14),
(33, '2', 14, 15),
(34, '4', 6, 16),
(35, '3', 13, 16),
(36, '2', NULL, 16),
(37, '7', 7, 16),
(38, '1', NULL, 17),
(39, '2', 5, 17),
(40, '3', 13, 17),
(41, '10', NULL, 18),
(42, '1', 7, 19),
(43, '8', NULL, 19),
(44, '6', 11, 19),
(45, '1', 11, 20),
(46, '1', 16, 21),
(47, '1', 12, 21);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_amt` float DEFAULT NULL,
  `payment_txtref` int(11) DEFAULT NULL,
  `orders_id` int(11) DEFAULT NULL,
  `payment_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_amt`, `payment_txtref`, `orders_id`, `payment_status`) VALUES
(2, 46000, 2004140047, 7, 'success'),
(3, 33000, 1802857520, 8, 'success'),
(4, 1200, 1740081044, 9, 'success'),
(5, 45000, 1111104260, 10, 'success'),
(6, 4000, 1648839008, 11, 'success'),
(7, 25000, 359334525, 12, 'Paid on delivery'),
(8, 54000, 1134896715, 13, 'success'),
(9, 440000, 1323223439, 14, 'Paid with transfer'),
(10, 7000, 740007682, 15, 'Paid with transfer'),
(11, 71800, 687275827, 16, 'success'),
(12, 52000, 1634625583, 17, 'success'),
(13, 250000, 268357803, 18, 'Paid with transfer'),
(14, 231000, 1429469557, 19, 'success'),
(15, 4500, 1168333258, 20, 'success'),
(16, 27000, 765979901, 21, 'success');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `products_name` varchar(100) DEFAULT NULL,
  `products_category` int(11) DEFAULT NULL,
  `products_short` varchar(100) DEFAULT NULL,
  `products_price` float DEFAULT NULL,
  `products_long` text DEFAULT NULL,
  `products_img` varchar(100) DEFAULT NULL,
  `created` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_name`, `products_category`, `products_short`, `products_price`, `products_long`, `products_img`, `created`) VALUES
(5, 'randss', 3, 'Cleans and leaves all sparkling clkean likeeee', 14000, 'I hardly knew Beth. But, I knew her in ways that her closest friends didn’t know her.\r\nNormally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth. The funeral had passed. It seemed perverse to try to talk to Julia, as she had been riding with Beth during the bicycle accident. It felt selfish to seek solace from a near stranger who had known her so deeply, and experienced the tragedy so closely.\r\nAs I sat in my dark apartment with a glass of gin by my side, I read Beth’s mother’s wailing Facebook updates. The contrast in loss was cartoonish. How much of my grief was for Beth, and how much of it was just grief for myself?', 'products/samsung-850evo.jpg', '2020-08-16'),
(6, 'Another', 1, 'a ver cleand like that thingy', 1200, 'I hardly knew Beth. But, I knew her in ways that her closest friends didn’t know her.\r\nNormally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth. The funeral had passed. It seemed perverse to try to talk to Julia, as she had been riding with Beth during the bicycle accident. It felt selfish to seek solace from a near stranger who had known her so deeply, and experienced the tragedy so closely.\r\nAs I sat in my dark apartment with a glass of gin by my side, I read Beth’s mother’s wailing Facebook updates. The contrast in loss was cartoonish. How much of my grief was for Beth, and how much of it was just grief for myself?', 'products/nzxth700i.jpg', '2020-08-16'),
(7, 'Wellness thingy', 2, 'hmmm...i gat you', 4000, 'I hardly knew Beth. But, I knew her in ways that her closest friends didn’t know her.\r\nNormally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth. The funeral had passed. It seemed perverse to try to talk to Julia, as she had been riding with Beth during the bicycle accident. It felt selfish to seek solace from a near stranger who had known her so deeply, and experienced the tragedy so closely.\r\nAs I sat in my dark apartment with a glass of gin by my side, I read Beth’s mother’s wailing Facebook updates. The contrast in loss was cartoonish. How much of my grief was for Beth, and how much of it was just grief for myself?', 'products/Corsair-Gaming-SCIMITAR-PRO-RGB.jpg', '2020-08-16'),
(8, 'Wellness thingy', 2, 'a ver cleand like that thingy part 2', 25000, 'I hardly knew Beth. But, I knew her in ways that her closest friends didn’t know her.\r\nNormally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth. The funeral had passed. It seemed perverse to try to talk to Julia, as she had been riding with Beth during the bicycle accident. It felt selfish to seek solace from a near stranger who had known her so deeply, and experienced the tragedy so closely.\r\nAs I sat in my dark apartment with a glass of gin by my side, I read Beth’s mother’s wailing Facebook updates. The contrast in loss was cartoonish. How much of my grief was for Beth, and how much of it was just grief for myself?', 'products/59c1e24b5696e4322da7d20b3e45445cimgses.jpg', '2020-08-16'),
(10, 'you knowwww', 2, 'What am i writing self', 4500, 'I hardly knew Beth. But, I knew her in ways that her closest friends didn’t know her.\r\nNormally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth. The funeral had passed. It seemed perverse to try to talk to Julia, as she had been riding with Beth during the bicycle accident. It felt selfish to seek solace from a near stranger who had known her so deeply, and experienced the tragedy so closely.\r\nAs I sat in my dark apartment with a glass of gin by my side, I read Beth’s mother’s wailing Facebook updates. The contrast in loss was cartoonish. How much of my grief was for Beth, and how much of it was just grief for myself?', 'products/razer-blackwidow.jpg', '2020-08-16'),
(11, 'i think this ', 2, 'i think so too', 4500, 'I hardly knew Beth. But, I knew her in ways that her closest friends didn’t know her.\r\nNormally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth. The funeral had passed. It seemed perverse to try to talk to Julia, as she had been riding with Beth during the bicycle accident. It felt selfish to seek solace from a near stranger who had known her so deeply, and experienced the tragedy so closely.\r\nAs I sat in my dark apartment with a glass of gin by my side, I read Beth’s mother’s wailing Facebook updates. The contrast in loss was cartoonish. How much of my grief was for Beth, and how much of it was just grief for myself?', 'products/ryzen7.jpg', '2020-08-16'),
(12, 'Ama flexx', 3, 'ama ammama ammamama aa ma', 15000, 'I hardly knew Beth. But, I knew her in ways that her closest friends didn’t know her.\r\nNormally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth. The funeral had passed. It seemed perverse to try to talk to Julia, as she had been riding with Beth during the bicycle accident. It felt selfish to seek solace from a near stranger who had known her so deeply, and experienced the tragedy so closely.\r\nAs I sat in my dark apartment with a glass of gin by my side, I read Beth’s mother’s wailing Facebook updates. The contrast in loss was cartoonish. How much of my grief was for Beth, and how much of it was just grief for myself?', 'products/Corsair-Gaming-SCIMITAR-PRO-RGB.jpg', '2020-08-16'),
(13, 'Soaps and All', 1, 'iyiyiyiy iyiyiyiy iyyiyiyi iyiyiiyyi', 15000, 'I hardly knew Beth. But, I knew her in ways that her closest friends didn’t know her.\r\nNormally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth. The funeral had passed. It seemed perverse to try to talk to Julia, as she had been riding with Beth during the bicycle accident. It felt selfish to seek solace from a near stranger who had known her so deeply, and experienced the tragedy so closely.\r\nAs I sat in my dark apartment with a glass of gin by my side, I read Beth’s mother’s wailing Facebook updates. The contrast in loss was cartoonish. How much of my grief was for Beth, and how much of it was just grief for myself?', 'products/59c1e24b5696e4322da7d20b3e45445cimgses.jpg', '2020-08-16'),
(14, 'Air wick', 4, 'Air fresher for the entire fam', 3500, 'I hardly knew Beth. But, I knew her in ways that her closest friends didn’t know her.\r\nNormally, when someone you care about passes away, you have friends and family in common to commiserate with about the departed. I didn’t have those outlets as I grieved Beth. The funeral had passed. It seemed perverse to try to talk to Julia, as she had been riding with Beth during the bicycle accident. It felt selfish to seek solace from a near stranger who had known her so deeply, and experienced the tragedy so closely.\r\nAs I sat in my dark apartment with a glass of gin by my side, I read Beth’s mother’s wailing Facebook updates. The contrast in loss was cartoonish. How much of my grief was for Beth, and how much of it was just grief for myself?', 'products/59c1e24b5696e4322da7d20b3e45445cimgses.jpg', '2020-08-16'),
(15, 'Another randss', 4, 'a ver cleand like that thingy', 30000, 'It was a long time ago, so we met the old-fashioned way, on Match.com. We had coffee at Mercury Cafe on Chicago Avenue. We laughed so loudly we made the other patrons blush. You could tell they were merely pretending to study or work, peering up from their books and laptops to witness the splendor of a first date gone well.', 'products/8b7c2b250fb7c0f95dadbc74f5ef2e6eScreenshot (49).png', '2020-08-16'),
(16, 'Parfufu', 2, 'hmmm...i gat you', 12000, 'Microsoft and Sony want owners of their current consoles to play upcoming games at launch and when their respective new hardware hits, which should ease the transition into next-gen. Microsoft is unifying its Xbox One and Xbox Series X physical discs by offering one &quot;Xbox&quot; version that is compatible with both platforms.', 'products/a83311122ef977cf5660bd36e4612471IMG_20190227_084441_924.JPG', '2020-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `subcribe`
--

CREATE TABLE `subcribe` (
  `sub_id` int(11) NOT NULL,
  `emails` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcribe`
--

INSERT INTO `subcribe` (`sub_id`, `emails`) VALUES
(1, 'onyeka.chidinma@gmail.com'),
(2, 'tobay@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `users_id` int(11) NOT NULL,
  `firstnames` varchar(50) NOT NULL,
  `lastnames` varchar(50) NOT NULL,
  `passwords` varchar(50) NOT NULL,
  `emails` varchar(50) NOT NULL,
  `phoneNumbers` varchar(50) NOT NULL,
  `registered` date NOT NULL DEFAULT current_timestamp(),
  `username` varchar(50) NOT NULL,
  `Addresses` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`users_id`, `firstnames`, `lastnames`, `passwords`, `emails`, `phoneNumbers`, `registered`, `username`, `Addresses`) VALUES
(1, 'Chidera', 'Onyeka', 'fcea920f7412b5da7be0cf42b8c93759', 'toebay005@gmail.com', '+2348038112001', '2020-08-18', 'chidera', NULL),
(2, 'Chidinma', 'Onyeka', 'fcea920f7412b5da7be0cf42b8c93759', 'onyeka.chidinma@gmail.com', '+2348038112001', '2020-08-22', 'chi', NULL),
(3, 'Chidinma', 'Onyeka', 'fcea920f7412b5da7be0cf42b8c93759', 'onyeka.chidinma@gmail.com', '+2348038112001', '2020-08-29', 'Chi Love', NULL),
(4, 'kh k k', 'Onyeka', 'fcea920f7412b5da7be0cf42b8c93759', 'onyeka.chidinma@gmail.com', '08038112001', '2020-08-30', 'Admin', NULL),
(5, 'Rac', 'Rachel', '25d55ad283aa400af464c76d713c07ad', 'go@go.com', '08095453433', '2020-09-02', 'Akpos', NULL),
(6, 'Chidinma', 'Onyeka', 'e70d98dcd76a47ddafc9d30942e12f8f', 'onyeka.chidinma@gmail.com', '08038112001', '2020-09-13', 'chidera', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlistz`
--

CREATE TABLE `wishlistz` (
  `wishz_id` int(11) NOT NULL,
  `wish_pro_name` varchar(50) DEFAULT NULL,
  `wish_pro_img` varchar(200) DEFAULT NULL,
  `wish_pro_price` float DEFAULT NULL,
  `wish_usersId` int(11) DEFAULT NULL,
  `wish_pro_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminReg`
--
ALTER TABLE `adminReg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `customerorders`
--
ALTER TABLE `customerorders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `user` (`users_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orddetails_id`),
  ADD KEY `order` (`orders_id`),
  ADD KEY `pk` (`products_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `ork` (`orders_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`),
  ADD KEY `mk1` (`products_category`);

--
-- Indexes for table `subcribe`
--
ALTER TABLE `subcribe`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `wishlistz`
--
ALTER TABLE `wishlistz`
  ADD PRIMARY KEY (`wishz_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminReg`
--
ALTER TABLE `adminReg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customerorders`
--
ALTER TABLE `customerorders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orddetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subcribe`
--
ALTER TABLE `subcribe`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlistz`
--
ALTER TABLE `wishlistz`
  MODIFY `wishz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customerorders`
--
ALTER TABLE `customerorders`
  ADD CONSTRAINT `user` FOREIGN KEY (`users_id`) REFERENCES `user` (`users_id`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `order` FOREIGN KEY (`orders_id`) REFERENCES `customerorders` (`orders_id`),
  ADD CONSTRAINT `pk` FOREIGN KEY (`products_id`) REFERENCES `products` (`products_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `ork` FOREIGN KEY (`orders_id`) REFERENCES `customerorders` (`orders_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
