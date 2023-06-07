-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2023-06-06 11:08:20
-- 服务器版本： 8.0.31
-- PHP 版本： 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `pet_shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

--
-- 表的结构 orders
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS orders (
  o_id int NOT NULL AUTO_INCREMENT,
  user_id int DEFAULT NULL,
  name varchar(100) DEFAULT NULL,
  phone varchar(20) DEFAULT NULL,
  store varchar(100) DEFAULT NULL,
  payment varchar(50) DEFAULT NULL,
  notes text,
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`o_id`),
  KEY user_id (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 轉存表中的數據 orders
--

INSERT INTO orders (`o_id`, `user_id`, `name`, `phone`, `store`, `payment`, `notes`, `created_at`) VALUES
(1, 652, 'A先生', '0966666666', '樂民門市', 'cash_on_delivery', '幫我加強包裝', '2023-06-07 12:20:40'),
(2, 652, 'AAA', 'AAA', 'AAA', 'cash_on_delivery', 'AAA', '2023-06-06 19:12:38');
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
