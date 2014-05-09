-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2014 at 08:47 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

--
-- Exported on - 15 April 2014
--
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c&tbags_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE IF NOT EXISTS `admin_tb` (
  `ADMIN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(15) NOT NULL,
  `LAST_NAME` varchar(15) NOT NULL,
  `E-MAIL` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  PRIMARY KEY (`ADMIN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `billing_info_tb`
--

CREATE TABLE IF NOT EXISTS `billing_info_tb` (
  `BILLING_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CARD_ID` int(11) NOT NULL,
  `BILLING_ADDR` varchar(30) NOT NULL,
  `BILLING_DATE` date NOT NULL,
  `CARD_NO` varchar(16) NOT NULL,
  `CARD_EXP_DATE` date NOT NULL,
  `CARD_PIN` int(5) NOT NULL,
  PRIMARY KEY (`BILLING_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cart_tb`
--

CREATE TABLE IF NOT EXISTS `cart_tb` (
  `CART_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRODUCTS_NO` int(11) NOT NULL,
  `TOTAL_PRICE` double NOT NULL,
  PRIMARY KEY (`CART_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

CREATE TABLE IF NOT EXISTS `category_tb` (
  `CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CATEGORY_NAME` varchar(30) NOT NULL,
  `DESCRIPTION` varchar(30) NOT NULL,
  `PICTURE` text NOT NULL,
  PRIMARY KEY (`CATEGORY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_details_tb`
--

CREATE TABLE IF NOT EXISTS `order_details_tb` (
  `ORDER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRODUCT_ID` int(11) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `ORDER_NO` int(11) NOT NULL,
  `UNIT_PRICE` double NOT NULL,
  `DISCOUNT` double NOT NULL,
  PRIMARY KEY (`ORDER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_tb`
--

CREATE TABLE IF NOT EXISTS `order_tb` (
  `ORDER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ORDER_NUM` int(11) NOT NULL,
  `ORDER_DATE` date NOT NULL,
  `REQUIRED_DATE` date NOT NULL,
  `SHIPPED_DATE` date NOT NULL,
  `SHIPPER_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  PRIMARY KEY (`ORDER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE IF NOT EXISTS `product_tb` (
  `PRODUCT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRODUCT_NAME` varchar(50) NOT NULL,
  `PRODUCT_DESCR` varchar(50) NOT NULL,
  `QUANTITY_PER_UNIT` int(11) NOT NULL,
  `UNIT_PRICE` decimal(10,0) NOT NULL,
  `UNIT_IN_STOCK` int(11) NOT NULL,
  `UNITS_ON_ORDER` int(11) NOT NULL,
  `DISCOUNT` decimal(10,0) NOT NULL,
  `PICTURE` text NOT NULL,
  `SUPPLIER_ID` int(11) NOT NULL,
  PRIMARY KEY (`PRODUCT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_tb`
--

CREATE TABLE IF NOT EXISTS `supplier_tb` (
  `SUPPLIER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(5) NOT NULL,
  `FIRST_NAME` varchar(15) NOT NULL,
  `LAST_NAME` varchar(15) NOT NULL,
  `COMP_NAME` varchar(20) NOT NULL,
  `POSTAL_ADDR` varchar(30) NOT NULL,
  `PHYSICAL_ADDR` varchar(30) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PHONE` varchar(10) NOT NULL,
  `FAX` varchar(10) NOT NULL,
  `COUNTRY` varchar(15) NOT NULL,
  `CITY` varchar(15) NOT NULL,
  PRIMARY KEY (`SUPPLIER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE IF NOT EXISTS `user_tb` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(15) NOT NULL,
  `LAST_NAME` varchar(15) NOT NULL,
  `CELL_NUM` varchar(10) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `COUNTRY` varchar(15) NOT NULL,
  `CITY` varchar(15) NOT NULL,
  `PHYSICAL_ADDR` varchar(20) NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
