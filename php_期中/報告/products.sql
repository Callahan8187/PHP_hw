-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2023-06-06 11:08:29
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
-- 表的结构 `products`
--

--
-- 表的结构 products
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS products (
  pp_id int UNSIGNED NOT NULL AUTO_INCREMENT,
  pp_SKU varchar(255) NOT NULL,
  pp_name varchar(255) NOT NULL,
  pp_price decimal(10,0) NOT NULL,
  pp_description text,
  pp_stock int UNSIGNED DEFAULT NULL,
  pp_cost decimal(10,2) DEFAULT NULL,
  pp_manufacturer varchar(255) DEFAULT NULL,
  pp_image varchar(255) DEFAULT NULL,
  pp_clicks int DEFAULT '0',
  PRIMARY KEY (`pp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 轉存表中的數據 products
--

INSERT INTO products (`pp_id`, `pp_SKU`, `pp_name`, `pp_price`, `pp_description`, `pp_stock`, `pp_cost`, `pp_manufacturer`, `pp_image`, `pp_clicks`) VALUES
(1, '1', '加厚拾便袋', '8', '【產品介紹】\r\n\r\n名稱｜加厚狗便袋 1.5絲\r\n\r\n編號｜C078\r\n\r\n顏色｜綠色\r\n\r\n尺寸｜單張33*23 cm\r\n\r\n　　　一卷6*3 cm\r\n\r\n規格｜一卷15張\r\n\r\n材質｜HDPE+EPI可降解料\r\n\r\n適用｜貓、狗', 100, '5.00', '1', '10001.jpg', 20),
(2, 'qwe', '寵物飲水器', '8', '8', 8, '8.00', '8', '10004.jpg', 2),
(3, 'AA', '寵物洗腳氣', '100', 'A', 231, '231.00', '231', '10013.jpg', 6),
(4, 'AA', '寵物指甲剪', '100', 'A', 231, '231.00', '231', '10007.jpg', 6);
--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`pp_id`, `pp_SKU`, `pp_name`, `pp_price`, `pp_description`, `pp_stock`, `pp_cost`, `pp_manufacturer`, `pp_image`, `pp_clicks`) VALUES
(19, '1', '加厚拾便袋', '8', '【產品介紹】\r\n\r\n名稱｜加厚狗便袋 1.5絲\r\n\r\n編號｜C078\r\n\r\n顏色｜綠色\r\n\r\n尺寸｜單張33*23 cm\r\n\r\n　　　一卷6*3 cm\r\n\r\n規格｜一卷15張\r\n\r\n材質｜HDPE+EPI可降解料\r\n\r\n適用｜貓、狗', 100, '5.00', '1', '10001.jpg', 13),
(22, 'qwe', '寵物飲水器', '8', '8', 8, '8.00', '8', '10004.jpg', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
