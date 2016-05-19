-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 05 月 18 日 16:32
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `lab527`
--

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(20) NOT NULL,
  `sex` int(10) NOT NULL DEFAULT '1',
  `name` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `hobby` int(15) NOT NULL,
  `sleep` int(15) NOT NULL,
  `environment` int(15) NOT NULL,
  `weight` int(15) NOT NULL,
  `room` int(15) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `sex`, `name`, `hobby`, `sleep`, `environment`, `weight`, `room`) VALUES
(1, 1, '鲍一', 4, 2, 1, 0, 0),
(2, 1, '鲍二', 2, 2, 2, 0, 0),
(3, 1, '鲍三', 3, 1, 1, 0, 0),
(4, 1, '鲍四', 1, 2, 2, 0, 0),
(5, 1, '鲍五', 2, 1, 2, 0, 0),
(6, 1, '鲍六', 1, 1, 1, 0, 0),
(7, 1, '鲍七', 4, 1, 1, 0, 0),
(8, 1, '鲍八', 1, 2, 2, 0, 0),
(9, 2, '鲍九', 3, 1, 1, 0, 0),
(10, 2, '鲍十', 2, 1, 1, 0, 0),
(11, 2, '镕一', 3, 1, 2, 0, 0),
(12, 2, '镕二', 1, 2, 2, 0, 0),
(13, 2, '镕三', 4, 1, 2, 0, 0),
(14, 2, '镕四', 1, 2, 1, 0, 0),
(15, 2, '镕五', 2, 1, 1, 0, 0),
(16, 2, '镕六', 1, 1, 2, 0, 0),
(17, 2, '镕七', 3, 2, 1, 0, 0),
(18, 2, '镕八', 4, 1, 1, 0, 0),
(19, 2, '镕九', 1, 1, 2, 0, 0),
(20, 2, '镕十', 4, 1, 1, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
