-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2014 at 02:14 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c&tbags_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`) VALUES
(1, '0001', 'nike', 'sportsbag', '270005_1_3.jpg', '255.00'),
(2, '0002', 'guess', 'handbag', '274325_2_1.jpg', '455.00'),
(3, 'PD1001', 'Reebok', 'travelling bag', '107842_8_1.jpg', '250.00'),
(4, 'TYUT', 'Eagle', 'bagpack', '203051_1_1.jpg', '250.00'),
(5, '908', 'Guess', 'handbag', '273085_1_1.jpg', '350.00'),
(6, '9086', 'Reebok', 'luggage bags', '20131021_LG-cert-b3s1.jpg', '1250.00'),
(7, '90586', 'sissyboy', 'handbag', '273621_2_1.jpg', '250.00'),
(8, '9T86', 'sissyboy', 'travel bag', '273517_3_1.jpg', '450.00'),
(9, '9T866', 'Guess', 'handbag', '274427_3_1.jpg', '355.00'),
(10, '9866', 'Kway', 'sports bag', '260641_3_1.jpg', '250.00'),
(11, '98T66', 'Gucci', 'luggage bagbag', '213188_7_1.jpg', '1550.50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
