-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-12-13 03:58:59
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `js_basketball_sc`
--

-- --------------------------------------------------------

--
-- 資料表結構 `gameday`
--

CREATE TABLE `gameday` (
  `id` int(11) NOT NULL,
  `Winningteam` varchar(45) DEFAULT NULL,
  `Winscore` int(10) NOT NULL,
  `Loseingteam` varchar(45) DEFAULT NULL,
  `Losescore` int(10) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `gameday`
--

INSERT INTO `gameday` (`id`, `Winningteam`, `Winscore`, `Loseingteam`, `Losescore`, `Date`) VALUES
(1, '高雄師大', 78, '義守大學', 75, '2022-12-12'),
(2, '政治大學', 90, '輔仁大學', 81, '2022-12-13'),
(3, '健行科大', 78, '萬能科大', 54, '2022-12-14'),
(4, '健行科大', 87, '文化大學', 81, '2022-12-15'),
(5, '政治大學', 81, '義守大學', 72, '2022-12-16'),
(6, '政治大學', 90, '輔仁大學', 63, '2022-12-17'),
(7, '文化大學', 78, '健行科大', 72, '2022-12-18'),
(8, '健行科大', 102, '萬能科大', 75, '2022-12-19');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `gameday`
--
ALTER TABLE `gameday`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `gameday`
--
ALTER TABLE `gameday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
