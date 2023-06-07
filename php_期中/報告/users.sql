-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2023-06-06 11:08:32
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
-- 表的结构 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS users (
  c_id int UNSIGNED NOT NULL AUTO_INCREMENT,
  c_account varchar(50) NOT NULL,
  c_password varchar(50) NOT NULL,
  c_name varchar(50) NOT NULL,
  c_phone varchar(20) NOT NULL,
  c_email varchar(50) NOT NULL,
  c_address varchar(100) NOT NULL,
  c_join_date date NOT NULL,
  c_cart text,
  c_purchase_count int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 轉存表中的數據 users
--

INSERT INTO users (`c_id`, `c_account`, `c_password`, `c_name`, `c_phone`, `c_email`, `c_address`, `c_join_date`, `c_cart`, `c_purchase_count`) VALUES
(1, 'AAA', 'AAA', 'sasd', 'asdsa', 'sda@asdsad', 'asd', '2023-06-02', 'a:2:{s:3:\"qwe\";s:1:\"3\";s:2:\"AA\";s:1:\"3\";}', NULL),
(2, 'BBB', 'BBB', 'asda', 'sada', 'asd@asd', 'asd', '2023-06-06', NULL, NULL),
(3, 'BBB', 'BBB', 'asda', 'sada', 'asd@asd', 'asd', '2023-06-10', NULL, NULL),
(4, 'BBB', 'BBB', 'asda', 'sada', 'asd@asd', 'asd', '2023-06-06', NULL, NULL),
(5, 'BBB', 'BBB', 'asda', 'sada', 'asd@asd', 'asd', '2023-06-06', NULL, NULL),
(6, 'BBB', 'BBB', 'asda', 'sada', 'asd@asd', 'asd', '2023-06-06', NULL, NULL),
(7, 'AAAASD', 'DADAD', 'DD', 'CCCC', 'DD@DD', 'DD', '2023-06-06', NULL, NULL),
(8, 'AAAASDDSD', 'SADSD', 'DD', 'CCCC', 'DD@DD', 'DD', '2023-06-06', NULL, NULL),
(9, 'DADAD', 'SDSD', 'asdasd', 'asdasd', 'asdas@asd', 'asd', '2023-06-06', NULL, NULL),
(10, 'sadas', 'asd', 'asd', 'asd@', 'asd@ads', 'ad', '2023-06-06', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
