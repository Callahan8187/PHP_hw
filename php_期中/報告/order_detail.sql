-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2023-06-06 11:08:26
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
-- 表的结构 `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE IF NOT EXISTS order_detail (
  id int NOT NULL AUTO_INCREMENT,
  o_id varchar(20) NOT NULL,
  user_id int NOT NULL,
  SKU varchar(10) NOT NULL,
  quantity int NOT NULL,
  PRIMARY KEY (`id`),
  KEY order_id (`o_id`),
  KEY user_id (`user_id`),
  KEY SKU (`SKU`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 轉存表中的數據 order_detail
--

INSERT INTO order_detail (`id`, `o_id`, `user_id`, `SKU`, `quantity`) VALUES
(1, 'ORD8899', 652, '1', 4),
(2, 'ORD7201', 652, 'qwe', 3),
(3, 'ORD7201', 652, 'AA', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
