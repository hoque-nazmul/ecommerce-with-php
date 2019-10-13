-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 10:41 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soft_delete` tinyint(1) DEFAULT NULL,
  `is_draft` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `soft_delete`, `is_draft`, `created_at`, `modified_at`) VALUES
(1, 'Towhid Ahmed', 'nazmul@gmail.com', '121344', '0178965678', 0, 1, '2019-08-02 00:00:00', '2019-08-02 11:19:00'),
(2, 'Anayet Ullah', 'anayet@gmail.com', '12345', '015437879789', NULL, NULL, '2019-08-02 00:00:00', '2019-08-03 01:22:10'),
(13, 'Mostafa Mohsin', 'mostafa@gmail.com', '3453456', '01567896745', NULL, NULL, '2019-08-03 00:01:50', '2019-08-03 01:24:30'),
(14, 'Nazmul Hoque', 'nazmul.hoque@gmail.com', '345345', '3275758080', NULL, NULL, '2019-08-03 00:02:06', '2019-08-03 01:25:14'),
(17, 'Elias Hosain', 'hosain@gmail.com', '3453457', '01678790463', NULL, NULL, '2019-08-03 00:07:13', '2019-08-03 01:24:58'),
(22, 'Towhid Afridi', 'touhid123@gmail.com', '1245788', '0184839586934', NULL, NULL, '2019-08-06 14:29:59', '2019-08-06 14:29:59'),
(24, 'Nazmul Hoque Jabed', 'nazmul.hoquectg125@gmail.com', '345345', '354353', NULL, NULL, '2019-08-06 15:20:18', '2019-08-07 12:17:23'),
(25, 'fdsfdsf', 'nazmul.hoquectg125@gmail.com', '345345', '53245325', NULL, NULL, '2019-08-06 15:27:05', '2019-08-06 15:27:05'),
(27, 'Anayet Ullah', 'sakilmahmud360@gmail.com', '12345', '0165789865447', NULL, NULL, '2019-08-06 15:40:17', '2019-08-06 15:41:32'),
(28, 'Anayet Ullah', 'nazmul.hoquectg125@gmail.com', 'yt9w9535', '29573892570', NULL, NULL, '2019-08-07 12:54:08', '2019-08-07 12:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promotional_message` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `html_banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_draft` tinyint(1) DEFAULT NULL,
  `soft_delete` tinyint(1) DEFAULT NULL,
  `max_display` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `picture`, `link`, `promotional_message`, `html_banner`, `is_active`, `is_draft`, `soft_delete`, `max_display`, `created_at`, `modified_at`) VALUES
(50, 'Smart & Gorgeous Collection for Girls', 'IMG_1567317703_banner3.png', 'https://www.testing.com', 'Have a Good day with us', '<p>This is HTML Banner.</p>', 1, 1, NULL, NULL, '2019-09-01 12:00:17', '2019-09-01 12:01:43'),
(51, 'Latest Collection for Woman', 'IMG_1567317855_banner2.png', 'https://testtitle.com', 'Up to 60% Off Now', '<p>This is testing HTML Banner.</p>', 1, 1, NULL, NULL, '2019-09-01 12:04:15', '2019-09-01 12:04:15'),
(52, 'Latest Ladies Dress Collection', 'IMG_1567318020_banner.png', 'https://hello.com', 'Spend Your Quality Time with us.', '<p>This is testing Banner.</p>', 1, 1, NULL, NULL, '2019-09-01 12:07:00', '2019-09-01 12:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_draft` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `soft_delete` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `link`, `is_draft`, `is_active`, `soft_delete`, `created_at`, `modified_at`) VALUES
(7, 'Hello title, What\'s Up', 'https://www.helloman.com', 1, 1, NULL, '2019-08-06 14:56:21', '2019-08-06 17:05:59'),
(8, 'Hello title', 'https://www.hellotitle.com', 0, 1, NULL, '2019-08-06 15:10:04', '2019-08-06 16:56:34'),
(10, 'It\'s a testing title', 'https://brands.com ', 1, 1, NULL, '2019-08-06 15:23:44', '2019-08-06 16:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `sId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `total_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `sId`, `product_id`, `picture`, `product_title`, `qty`, `price`, `total_price`) VALUES
(42, '0aju3l27052iaipqleauhh6sep', 18, 'IMG_1567331846_tech2.jpg', 'Rear Television Screen', 2, 5020.88, 10041.8),
(43, 'pj21pp3ffptunlbob1t813ugqh', 18, 'IMG_1567331846_tech2.jpg', 'Rear Television Screen', 2, 5020.88, 10041.8),
(44, 'pj21pp3ffptunlbob1t813ugqh', 14, 'IMG_1567329603_products11.png', 'Block Striped T Shirts ', 2, 340.9, 681.8),
(45, 'pj21pp3ffptunlbob1t813ugqh', 19, 'IMG_1567331993_tech3.jpg', 'Fiber Mini Transmitter', 2, 1577.55, 3155.1),
(46, 'pj21pp3ffptunlbob1t813ugqh', 27, 'IMG_1567334812_show 2.jpg', 'Crocband II Sandal', 2, 201.45, 402.9);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soft_delete` int(11) DEFAULT NULL,
  `is_draft` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `soft_delete`, `is_draft`, `created_at`, `modified_at`) VALUES
(1, 'PHP', 1, 1, '2019-08-07 00:35:36', '2019-08-07 00:49:07'),
(2, 'Python ', 0, 1, '2019-08-07 00:36:10', '2019-08-07 00:49:21'),
(3, 'JavaScript', 1, 0, '2019-08-07 00:36:59', '2019-08-07 00:49:43'),
(4, 'JAVA', 1, 0, '2019-08-07 00:37:50', '2019-08-07 00:37:50'),
(5, 'Node.js', 1, 1, '2019-08-07 00:50:14', '2019-08-07 00:50:14'),
(7, 'Ruby', 1, 0, '2019-08-07 00:51:46', '2019-08-07 00:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `soft_delete` tinyint(1) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subjects`, `comment`, `status`, `soft_delete`, `date`) VALUES
(1, 'Nazmul Hoque', 'nazmul.hoquecu98@gmail.com', 'Learning PHP', 'Hello dear, I want to learn PHP programming language.', 'Has not opened', 0, '2019-08-07 01:34:39'),
(2, 'Towhid Ahmed', 'touhid123@gmail.com', 'Learning Python', 'Hey madam, I want to learn python from you.', 'Has clicked', 1, '2019-08-07 01:35:41'),
(3, 'Anayet Ullah', 'admin@onirbaan.com', 'How to learn web design', 'I want to learn web design', 'Has Open', 0, '2019-08-07 01:37:16'),
(4, 'Towhid Afridi', 'towhid@gmail.com', 'How to learn web design', 'Web design is foundation of web development.', 'Has replied', 1, '2019-08-07 01:41:19'),
(5, 'Anayet Ullah', 'admin@onirbaan.com', 'How to learn web design', 'I am eagerly waiting for your web design courses.', 'Has Open', 0, '2019-08-07 01:42:45'),
(15, 'Nazmul Hoque', 'nazmul98@gmail.com', 'comment for testing', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, '2019-09-03 02:04:10'),
(17, 'Mostafa Mohsin', 'mostafa@gmail.com', 'For learning PHP', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, '2019-09-03 02:21:36'),
(18, 'Towhid Ahmed', 'info@towhid.com', 'comment for testing', ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, '2019-09-03 02:24:47'),
(19, 'Lotifur Rahman', 'Lotif@gmail.com', 'For Delivery His Product', ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, '2019-09-03 02:41:19'),
(20, 'Nazmul Hoque', 'info@nazmul.com', 'hello for testing', 'hello for testinghello for testinghello for testinghello for testinghello for testing', NULL, NULL, '2019-09-03 18:47:32'),
(21, 'Anayet Ullah', 'info@anayet.com', 'testing purpose', 'testing purposetesting purposetesting purposetesting purposetesting purpose', NULL, NULL, '2019-09-04 02:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `city`, `country`, `zipcode`, `phone`, `email`, `password`) VALUES
(1, 'Nazmul Hoque', 'Halishahar, Chittagong', 'Chittagong', 'Bangladesh', 4300, 1632476125, 'nazmul@gmail.com', '123456'),
(2, 'Anayet Ullah', 'Halishahar', 'Chittagong', 'Bangladesh', 4322, 1346778989, 'anayet@gmail.com', '123456'),
(3, 'Towhid Ahmed', 'Agrabad', 'Chittagong', 'Bangladesh', 4226, 1986767676, 'touhid123@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

CREATE TABLE `labels` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `labels`
--

INSERT INTO `labels` (`id`, `title`, `picture`) VALUES
(1, 'It\'s a First Label', 'uploads/78d30a149c.png'),
(2, 'Hello title, What\'s Up', 'uploads/2c6c9053d4.png'),
(3, 'What\'s Up Title', 'uploads/f7a51af0b2.png'),
(4, 'It\'s title for testings', 'uploads/cc307d00ba.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product`, `qty`) VALUES
(1, 'Computer', 20),
(2, 'Mobile Phon', 20),
(3, 'Leptop', 12);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `description`, `link`) VALUES
(1, 'PHP is Beauty', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque ', 'https://www.hellotitle.com/php '),
(2, 'Hello title, What\'s Up', 'm dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoqueLorem ipsum', 'https://www.hellotitle.com/title');

-- --------------------------------------------------------

--
-- Table structure for table `popular_tag`
--

CREATE TABLE `popular_tag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT NULL,
  `is_draft` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `popular_tag`
--

INSERT INTO `popular_tag` (`id`, `name`, `link`, `is_active`, `is_delete`, `is_draft`, `created_at`, `modified_at`) VALUES
(1, 'TegName', 'https://www.TagName.com', 1, 0, 1, '2019-08-19 00:32:57', '2019-08-19 00:45:43'),
(2, 'PHP', 'https://www.hellotitle.com', 1, 1, 1, '2019-08-19 00:34:36', '2019-08-19 00:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `label_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_sales` int(11) DEFAULT NULL,
  `product_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_new` tinyint(4) DEFAULT NULL,
  `cost` float DEFAULT NULL,
  `mrp` float DEFAULT NULL,
  `special_price` float DEFAULT NULL,
  `soft_delete` tinyint(1) DEFAULT NULL,
  `is_draft` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `brand_id`, `label_id`, `title`, `picture`, `short_description`, `description`, `total_sales`, `product_type`, `is_new`, `cost`, `mrp`, `special_price`, `soft_delete`, `is_draft`, `is_active`, `created_at`, `modified_at`) VALUES
(9, NULL, NULL, 'Block Casual T Shirts', 'IMG_1567325066_products12.png', 'Poulax Women\'s Color Block Casual T Shirts Loose Twist Knot Tunics Tops ', '<p>Plain annealed Flexible stranded Copper conductor, PVC Insulated, single / Multi cores laid up with filling compound if necessary & PVC sheathed overall. Suitable for use in single / three-phase connections, electric connection for cranes, hoists or any mobile overhead power-driven equipment.</p><p>Plain annealed Flexible stranded Copper conductor, PVC Insulated, single / Multi cores laid up with filling compound if necessary & PVC sheathed overall. Suitable for use in single / three-phase connections, electric connection for cranes, hoists or any mobile overhead power-driven equipment.</p>', 112, 'feature', NULL, 122.12, 121.12, 120, NULL, NULL, 1, '2019-09-01 13:54:51', '2019-09-01 17:46:10'),
(10, NULL, NULL, 'Loose Fit Tank Top', 'IMG_1567325805_products3.jpeg', 'MBJ Womens Basic Wide Armhole Loose Fit Tank Top - Made in USA', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 1, 'feature', NULL, 234.55, 234.55, 234, NULL, NULL, 1, '2019-09-01 14:16:45', '2019-09-01 17:47:46'),
(11, NULL, NULL, 'Printed Cami Tank Tops ', 'IMG_1567325926_products9.png', 'Women\'s Summer Sleeveless Halter Floral Printed Cami Tank Tops ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 2, 'feature', NULL, 503.22, 503.22, 503.22, NULL, NULL, 1, '2019-09-01 14:18:46', '2019-09-01 17:48:25'),
(12, NULL, NULL, 'Short Sleeve Shirts', 'IMG_1567326004_products1.jpeg', 'Color Block Side Twist Knotted Short Sleeve Shirts Casual Blouse', '<p>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 3, 'feature', NULL, 563.11, 563, 563, NULL, NULL, 1, '2019-09-01 14:20:04', '2019-09-01 17:49:05'),
(13, NULL, NULL, 'Knot Waffle Knit Shirts', 'IMG_1567329216_products2.jpeg', 'Womens Casual Tops Sleeveless Cute Twist Knot Waffle Knit Shirts', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 'new', NULL, 420.55, 420.55, 420.55, NULL, NULL, 1, '2019-09-01 15:13:36', '2019-09-01 15:15:57'),
(14, NULL, NULL, 'Block Striped T Shirts ', 'IMG_1567329603_products11.png', 'Spadehill Women Short Sleeve Color Block Striped T Shirts ', 'Aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sit amet porttitor eget dolor morbi. Accumsan lacus vel facilisis volutpat est. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Lorem ipsum dolor sit amet. Habitasse platea dictumst quisque sagittis purus.', 0, 'new', NULL, 340.9, 340.9, 340.87, NULL, NULL, 1, '2019-09-01 15:20:03', '2019-09-01 15:20:03'),
(15, NULL, NULL, 'Short Sleeve Shirt Blouse', 'IMG_1567329760_products10.png', 'Round Neck Tunic Tops Casual Long Sleeve and Short Sleeve Shirt Blouse', 'Quam pellentesque nec nam aliquam. Euismod nisi porta lorem mollis aliquam ut porttitor leo a. A diam sollicitudin tempor id eu nisl nunc mi. Id aliquet risus feugiat in ante metus dictum. Volutpat est velit egestas dui id ornare arcu odio ut. Tellus orci ac auctor augue mauris augue neque gravida in. Orci eu lobortis elementum nibh tellus molestie. ', 0, 'new', NULL, 520.22, 520.22, 520.22, NULL, NULL, 1, '2019-09-01 15:22:40', '2019-09-01 15:25:32'),
(16, NULL, NULL, 'Cute Sleeveless Shirts', 'IMG_1567329869_products7.jpeg', 'Round Neck Twist Knot Front Waffle Knit Cute Sleeveless Shirts ', 'Nullam vehicula ipsum a arcu cursus vitae. Vitae tortor condimentum lacinia quis vel. Neque convallis a cras semper auctor neque vitae. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Et netus et malesuada fames. Morbi tristique senectus et netus et. Aliquet lectus proin nibh nisl.', 0, 'new', NULL, 810.32, 810.32, 810.32, NULL, NULL, 1, '2019-09-01 15:24:29', '2019-09-01 15:24:29'),
(17, NULL, NULL, 'Camera with HD DFA', 'IMG_1567331615_tech1.jpg', 'SLR Camera with HD DFA 24-70 mm Lens - Black ', 'Et pharetra pharetra massa massa ultricies mi. Ac tincidunt vitae semper quis lectus. Nam at lectus urna duis. Congue quisque egestas diam in. Id donec ultrices tincidunt arcu. Tristique senectus et netus et malesuada fames ac turpis egestas. Sit amet massa vitae tortor condimentum. A cras semper auctor neque vitae tempus.', 0, 'product_tech', NULL, 8000.2, 8000.2, 8000.2, NULL, NULL, 1, '2019-09-01 15:53:35', '2019-09-01 16:06:45'),
(18, NULL, NULL, 'Rear Television Screen', 'IMG_1567331846_tech2.jpg', 'Projector Screen 100inch 16:9 Front and Rear Projection Screen ', 'Fames ac turpis egestas maecenas. Orci porta non pulvinar neque laoreet suspendisse interdum consectetur libero. Massa tempor nec feugiat nisl pretium fusce id. Bibendum arcu vitae elementum curabitur vitae. Iaculis nunc sed augue lacus.', 0, 'product_tech', NULL, 5020.88, 5020.88, 5020.88, NULL, NULL, 1, '2019-09-01 15:57:26', '2019-09-01 15:57:26'),
(19, NULL, NULL, 'Fiber Mini Transmitter', 'IMG_1567331993_tech3.jpg', 'PacSatSales CATV Fiber Mini Transmitter - 10mW FTTX', 'Eget velit aliquet sagittis id. Faucibus vitae aliquet nec ullamcorper. Vel quam elementum pulvinar etiam. Integer enim neque volutpat ac tincidunt vitae semper. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Cras tincidunt lobortis feugiat vivamus.', 0, 'product_tech', NULL, 1577.55, 1577.55, 1577.55, NULL, NULL, 1, '2019-09-01 15:59:53', '2019-09-01 15:59:53'),
(20, NULL, NULL, 'Compact Laundry Dryer', 'IMG_1567332304_tech4.png', 'Laundry Dryer - Capacity Portable Clothes Dryer with 10W Drying Power', 'Vitae turpis massa sed elementum tempus egestas sed. Ut venenatis tellus in metus vulputate eu scelerisque felis. Fusce id velit ut tortor. A iaculis at erat pellentesque adipiscing commodo elit. At elementum eu facilisis sed odio morbi quis commodo odio. Morbi enim nunc faucibus a. Vitae ultricies leo integer malesuada nunc vel risus commodo viverra.', 0, 'product_tech', NULL, 2245.21, 2245.21, 2245.21, NULL, NULL, 1, '2019-09-01 16:05:04', '2019-09-01 16:06:29'),
(21, NULL, NULL, 'T-Shirt Tops with Pocket', 'IMG_1567332895_products7.jpeg', 'Color Block Striped Short Sleeve Loose Fit T-Shirt Tops with Pocket', 'Eget velit aliquet sagittis id. Faucibus vitae aliquet nec ullamcorper. Vel quam elementum pulvinar etiam. Integer enim neque volutpat ac tincidunt vitae semper. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Cras tincidunt lobortis feugiat vivamus.', 0, 'product_ladies', NULL, 232.33, 232.33, 232.33, NULL, NULL, 1, '2019-09-01 16:14:55', '2019-09-01 16:14:55'),
(22, NULL, NULL, 'Casual Loose T-Shirts', 'IMG_1567333100_products1.jpeg', 'Qearal Women\'s Summer Basic Short Sleeve Tops Casual Loose T-Shirts', 'Neque volutpat ac tincidunt vitae semper. Fermentum iaculis eu non diam phasellus. Non diam phasellus vestibulum lorem sed risus ultricies tristique. Augue mauris augue neque gravida in fermentum et sollicitudin. Enim diam vulputate ut pharetra sit amet aliquam id diam. Vitae turpis massa sed elementum tempus egestas sed. ', 0, 'product_ladies', NULL, 765.44, 765.44, 765.44, NULL, NULL, 1, '2019-09-01 16:18:20', '2019-09-01 16:18:20'),
(23, NULL, NULL, 'Blouse T Shirt Tops ', 'IMG_1567333425_products11.png', 'Womens Striped Color Block Short Sleeve Casual Blouse T Shirt Tops ', 'Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Lorem ipsum dolor sit amet. Habitasse platea dictumst quisque sagittis purus. Quam pellentesque nec nam aliquam. Euismod nisi porta lorem mollis aliquam ut porttitor leo a. A diam sollicitudin tempor id eu nisl nunc mi. Id aliquet risus feugiat in ante metus dictum.', 0, 'product_ladies', NULL, 1232.32, 1232.32, 1232.32, NULL, NULL, 1, '2019-09-01 16:20:41', '2019-09-01 16:23:45'),
(24, NULL, NULL, 'Sleeve T Shirts Tunic', 'IMG_1567333339_products8.jpg', 'Casual Tops Round Neck Color Block Floral Short Sleeve T Shirts Tunic', 'Id aliquet risus feugiat in ante metus dictum. Volutpat est velit egestas dui id ornare arcu odio ut. Tellus orci ac auctor augue mauris augue neque gravida in. Orci eu lobortis elementum nibh tellus molestie. Sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Quam lacus suspendisse faucibus interdum posuere lorem.', 0, 'product_ladies', NULL, 324.56, 324.56, 324.54, NULL, NULL, 1, '2019-09-01 16:22:19', '2019-09-01 16:22:19'),
(25, NULL, NULL, 'Ballet Shoe', 'IMG_1567334570_show 1.jpg', 'Capezio Daisy 205 Ballet Shoe (Toddler/Little Kid) ', 'Felis donec et odio pellentesque diam volutpat commodo. Viverra nam libero justo laoreet sit. Lobortis scelerisque fermentum dui faucibus in ornare quam. Vitae turpis massa sed elementum tempus egestas sed sed. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus.', 0, 'brandShoe', NULL, 212.22, 212.22, 212.22, NULL, NULL, 1, '2019-09-01 16:42:50', '2019-09-01 16:42:50'),
(26, NULL, NULL, 'Capezio Toddler/Little', 'IMG_1567334678_show 3.jpg', 'Capezio Toddler/Little Kid Jr.Tyette N625C Tap Shoe (Toddler/Little Kid)', 'Accumsan lacus vel facilisis volutpat est. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Lorem ipsum dolor sit amet. Habitasse platea dictumst quisque sagittis purus. Quam pellentesque nec nam aliquam. Euismod nisi porta lorem mollis aliquam ut porttitor leo a. A diam sollicitudin tempor id eu nisl nunc mi. Id aliquet risus feugiat in ante metus dictum.', 0, 'brandShoe', NULL, 232.26, 232.26, 232.26, NULL, NULL, 1, '2019-09-01 16:44:38', '2019-09-01 16:44:38'),
(27, NULL, NULL, 'Crocband II Sandal', 'IMG_1567334812_show 2.jpg', 'Crocs Kid\'s Boys and Girls Crocband II Sandal | Pre School (Boys and Girls)', 'Orci eu lobortis elementum nibh tellus molestie. Sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Quam lacus suspendisse faucibus interdum posuere lorem. Adipiscing at in tellus integer feugiat scelerisque varius morbi. Condimentum vitae sapien pellentesque habitant morbi tristique. Amet volutpat consequat mauris nunc congue.', 0, 'brandShoe', NULL, 201.45, 201.45, 201.42, NULL, NULL, 1, '2019-09-01 16:46:52', '2019-09-01 16:46:52'),
(28, NULL, NULL, 'Salt Water Sandals', 'IMG_1567334913_show 4.jpg', 'Salt Water Sandals by Hoy Shoe The Original Sandal (Toddler/Little)', 'Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Et netus et malesuada fames. Morbi tristique senectus et netus et. Aliquet lectus proin nibh nisl. Ut enim blandit volutpat maecenas volutpat blandit. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Cursus risus at ultrices mi tempus imperdiet.', 0, 'brandShoe', NULL, 158.78, 158.78, 158.78, NULL, NULL, 1, '2019-09-01 16:48:33', '2019-09-01 16:48:33'),
(30, NULL, NULL, 'FITT Belts', 'IMG_1567424502_belts-823257_1920-540x500.jpg', 'Lorem ipsum dolor sit amet', '<p>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>\r\n<p>ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 0, 'most', NULL, 35.11, 35.11, 35.11, NULL, NULL, 1, '2019-09-02 17:41:42', '2019-09-02 17:41:42'),
(31, NULL, NULL, 'Magnolia Dress', 'IMG_1567424722_fashion-731827_1920-540x500.jpg', 'quis nostrud exercitation ullamco', '<p>Leo vel fringilla est ullamcorper eget. Suspendisse interdum consectetur libero id faucibus nisl tincidunt eget. Ultricies mi eget mauris pharetra et ultrices neque ornare aenean. Sed enim ut sem viverra. Ipsum faucibus vitae aliquet nec ullamcorper sit amet.</p><p>Phasellus faucibus scelerisque eleifend donec. Dignissim diam quis enim lobortis scelerisque fermentum dui. Mollis aliquam ut porttitor leo a diam sollicitudin. Enim ut sem viverra aliquet eget.</p>', 2, 'most', NULL, 25.22, 25.22, 25.22, NULL, NULL, 1, '2019-09-02 17:45:22', '2019-09-02 17:45:22'),
(32, NULL, NULL, 'Rocadi Jeans', 'IMG_1567424889_jeans-428614_1920-540x500.jpg', 'Ultricies mi eget mauris pharetra et ultrices neque ornare', '<p>Faucibus et molestie ac feugiat sed lectus vestibulum. Id interdum velit laoreet id donec ultrices tincidunt. Pharetra massa massa ultricies mi quis hendrerit dolor magna eget. Ac placerat vestibulum lectus mauris ultrices.</p><p>Morbi tristique senectus et netus et malesuada fames ac turpis. Duis convallis convallis tellus id interdum velit laoreet id. Fringilla urna porttitor rhoncus dolor purus non enim praesent elementum. </p>', 0, 'most', NULL, 43.66, 43.66, 43.66, NULL, NULL, 1, '2019-09-02 17:48:09', '2019-09-02 17:48:09'),
(33, NULL, NULL, 'Istwic Scarf', 'IMG_1567425295_a-neckerchief-1315912_1920-540x500.jpg', 'Id interdum velit laoreet id donec ultrices tincidunt.', '<p>Pellentesque dignissim enim sit amet venenatis urna cursus eget. Tellus at urna condimentum mattis. A lacus vestibulum sed arcu non. Aliquet nec ullamcorper sit amet risus nullam. </p><p> Eget aliquet nibh praesent tristique magna sit amet purus. At in tellus integer feugiat scelerisque varius morbi enim nunc.  </p>', 1, 'scarf', NULL, 32.32, 32.32, 32.32, NULL, NULL, 1, '2019-09-02 17:54:55', '2019-09-02 17:54:55'),
(34, NULL, NULL, 'Jennifer Scarf', 'IMG_1567425459_a-neckerchief-1315916_1920-540x500.jpg', 'A lacus vestibulum sed arcu non. Aliquet nec ullamcorper sit amet.', '<p>Convallis a cras semper auctor neque. Aenean euismod elementum nisi quis eleifend. Amet tellus cras adipiscing enim eu turpis egestas pretium aenean. At auctor urna nunc id. </p><p> Aenean euismod elementum nisi quis eleifend. Amet tellus cras adipiscing enim eu turpis egestas pretium aenean. At auctor urna nunc id. Vulputate ut pharetra sit amet aliquam id diam maecenas. Vel turpis nunc eget lorem dolor.</p>', 2, 'scarf', NULL, 44.32, 44.32, 44.32, NULL, NULL, 1, '2019-09-02 17:57:39', '2019-09-02 17:57:39'),
(35, NULL, NULL, 'Andora Scarf', 'IMG_1567425573_a-neckerchief-1317830_1920-540x500.jpg', 'Pretium quam vulputate dignissim suspendisse in. Tellus in metus', '<p>Pretium quam vulputate dignissim suspendisse in. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Pellentesque diam volutpat commodo sed egestas egestas. Commodo viverra maecenas accumsan lacus vel facilisis volutpat est velit. Nec ultrices dui sapien eget mi proin sed libero enim. .</p><p>Aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer. Condimentum lacinia quis vel eros donec ac odio. Tortor at auctor urna nunc id cursus. Ac odio tempor orci dapibus ultrices in iaculis nunc sed. Pellentesque elit eget gravida cum. Est ultricies integer quis auctor. </p>', 1, 'scarf', NULL, 243.43, 243.43, 243.42, NULL, NULL, 1, '2019-09-02 17:59:33', '2019-09-02 17:59:33'),
(36, NULL, NULL, 'Marina Style', 'IMG_1567426180_woman-1484279_1920-540x500.jpg', 'Nec ultrices dui sapien eget mi proin sed libero enim. ', '<p> Aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer. Condimentum lacinia quis vel eros donec ac odio. Tortor at auctor urna nunc id cursus. Ac odio tempor orci dapibus ultrices in iaculis nunc sed. </p><p>Pellentesque elit eget gravida cum. Est ultricies integer quis auctor. Quis enim lobortis scelerisque fermentum dui faucibus in ornare. Rhoncus urna neque viverra justo nec.</p>\r\n', 1, 'onSale', NULL, 40.32, 40.32, 40.32, NULL, NULL, 1, '2019-09-02 18:09:40', '2019-09-02 18:09:40'),
(37, NULL, NULL, 'Jennifer Scarf', 'IMG_1567426345_key-692199_1920-540x500.jpg', 'Ac odio tempor orci dapibus ultrices in iaculis nunc sed. ', '<p>Nisi porta lorem mollis aliquam ut. Vitae auctor eu augue ut lectus arcu bibendum. Eget nullam non nisi est sit amet facilisis magna. Ac ut consequat semper viverra nam libero.</p><p>Ut sem nulla pharetra diam sit. Odio ut sem nulla pharetra. Ullamcorper eget nulla facilisi etiam dignissim diam. Scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam. </p>', 1, 'onSale', NULL, 50.44, 50.44, 50.44, NULL, NULL, 1, '2019-09-02 18:12:25', '2019-09-02 18:12:25'),
(38, NULL, NULL, 'Manago Shirt', 'IMG_1567426463_cute-955782_1920-540x500.jpg', 'Eget nullam non nisi est sit amet facilisis magna.Ac ut consequat', '<p>Scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam. Amet volutpat consequat mauris nunc congue nisi. Aliquam id diam maecenas ultricies mi eget mauris pharetra et. A cras semper auctor neque. Enim facilisis gravida neque convallis a cras semper auctor. </p><p>Nisi porta lorem mollis aliquam ut. Vitae auctor eu augue ut lectus arcu bibendum. Eget nullam non nisi est sit amet facilisis magna. Ac ut consequat semper viverra nam libero. Ut sem nulla pharetra diam sit. Odio ut sem nulla pharetra.</p>', 2, 'onSale', NULL, 44.21, 44.21, 44.21, NULL, NULL, 1, '2019-09-02 18:14:23', '2019-09-02 18:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `sponsores`
--

CREATE TABLE `sponsores` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promotional_message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `html_banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_draft` tinyint(1) NOT NULL,
  `soft_delete` tinyint(1) NOT NULL,
  `created_at` date NOT NULL,
  `modified_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sponsores`
--

INSERT INTO `sponsores` (`id`, `title`, `picture`, `link`, `promotional_message`, `html_banner`, `is_active`, `is_draft`, `soft_delete`, `created_at`, `modified_at`) VALUES
(1, 'It\'s a testing title', 'uploads/4d40fe9372.png', 'https://www.nicetitle.com', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum ', '<p>Hello World, I am Here!</>', 1, 0, 0, '0000-00-00', '0000-00-00'),
(2, 'What\'s Up Title', 'uploads/5d7df07cc2.png ', 'https://www.testing.com', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum', 'testing html banner', 1, 0, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_subscribed` tinyint(4) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reason` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `is_subscribed`, `created_at`, `modified_at`, `reason`) VALUES
(1, 'nazmul.hoquectg125@gmail.com', 0, '2019-08-19 02:13:31', '2019-08-19 02:22:53', 'For Creating valuable post about PHP ');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`) VALUES
(1, 'Programming Languages');

-- --------------------------------------------------------

--
-- Table structure for table `testimona`
--

CREATE TABLE `testimona` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_draft` tinyint(1) NOT NULL,
  `soft_delete` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimona`
--

INSERT INTO `testimona` (`id`, `picture`, `body`, `name`, `designation`, `is_active`, `is_draft`, `soft_delete`, `created_at`, `modified_at`) VALUES
(1, 'uploads/b2db2418cd.jpg ', 'PHP is a world class programming Language.', 'Nazmul Hoque', 'PHP Learner', 1, 0, NULL, '2019-08-19 02:47:06', '2019-08-19 02:47:06'),
(2, 'uploads/c294b3f916.png', 'Lorem ipsum dolor sit amet, consectetuer adipisci', 'Anayet Ullah', 'PHP Learner', 1, 0, NULL, '2019-08-19 02:48:25', '2019-08-19 03:01:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labels`
--
ALTER TABLE `labels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_tag`
--
ALTER TABLE `popular_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsores`
--
ALTER TABLE `sponsores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimona`
--
ALTER TABLE `testimona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `labels`
--
ALTER TABLE `labels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `popular_tag`
--
ALTER TABLE `popular_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `sponsores`
--
ALTER TABLE `sponsores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimona`
--
ALTER TABLE `testimona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
