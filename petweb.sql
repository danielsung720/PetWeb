-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.8-MariaDB
-- PHP 版本： 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `petweb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_03_17_112610_create_user_data_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `nav`
--

CREATE TABLE `nav` (
  `id` int(10) NOT NULL,
  `field` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_path` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `route_name` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `nav`
--

INSERT INTO `nav` (`id`, `field`, `icon_path`, `route_name`, `parent`) VALUES
(1, '關於我們', 'images/navIcon/title/about.png', NULL, NULL),
(2, '最新消息', 'images/navIcon/title/news.png', NULL, NULL),
(3, '銷售排行', 'images/navIcon/title/top.png', NULL, NULL),
(4, '狗狗專區', 'images/navIcon/title/dog.png', NULL, NULL),
(5, '貓咪專區', 'images/navIcon/title/cat.png', NULL, NULL),
(6, '鼠兔專區', 'images/navIcon/title/rabbit.png', NULL, NULL),
(7, '毛孩知識', 'images/navIcon/title/knowledge.png', NULL, NULL),
(8, '交友系統', 'images/navIcon/title/friend.png', NULL, NULL),
(9, '認養連結', 'images/navIcon/title/collar.png', NULL, NULL),
(10, '新品上市', 'images/navIcon/sub/newarrival.png', NULL, '最新消息'),
(11, '優惠活動', 'images/navIcon/sub/discount.png', NULL, '最新消息'),
(12, '乾糧專區', 'images/navIcon/sub/dogdryfood.png', NULL, '狗狗專區'),
(13, '罐頭專區', 'images/navIcon/sub/dogcan.png', NULL, '狗狗專區'),
(14, '生食專區', 'images/navIcon/sub/dograwfood.png', NULL, '狗狗專區'),
(15, '營養保健', 'images/navIcon/sub/medicine.png', NULL, '狗狗專區'),
(16, '零嘴專區', 'images/navIcon/sub/snacks.png', NULL, '狗狗專區'),
(17, '寶貝服飾', 'images/navIcon/sub/cloth.png', NULL, '狗狗專區'),
(18, '其他用品', 'images/navIcon/sub/something.png', NULL, '狗狗專區'),
(19, '乾糧專區', 'images/navIcon/sub/catdryfood.png', NULL, '貓咪專區'),
(20, '罐頭專區', 'images/navIcon/sub/catcan.png', NULL, '貓咪專區'),
(21, '生食專區', 'images/navIcon/sub/catrawfood.png', NULL, '貓咪專區'),
(22, '營養保健', 'images/navIcon/sub/medicine.png', NULL, '貓咪專區'),
(23, '零嘴專區', 'images/navIcon/sub/snacks.png', NULL, '貓咪專區'),
(24, '寶貝服飾', 'images/navIcon/sub/cloth.png', NULL, '貓咪專區'),
(25, '其他用品', 'images/navIcon/sub/something.png', NULL, '貓咪專區'),
(26, '兔兒飼料', 'images/navIcon/sub/rabbitfood.png', NULL, '鼠兔專區'),
(27, '小鼠飼料', 'images/navIcon/sub/mousefood.png', NULL, '鼠兔專區'),
(28, '鼠兔零食', 'images/navIcon/sub/snacks.png', NULL, '鼠兔專區'),
(29, '其他用品', 'images/navIcon/sub/something.png', NULL, '鼠兔專區');

-- --------------------------------------------------------

--
-- 資料表結構 `user_data`
--

CREATE TABLE `user_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity` enum('user','admin') COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user_data`
--

INSERT INTO `user_data` (`id`, `email`, `password`, `name`, `identity`, `created_at`, `updated_at`) VALUES
(6, 'user0001@yahoo.com.tw', '7c27acc4d937f432669130f9d290214ed4ee74023dc70d882081a61f001918ef', 'user0001', 'user', '2020-03-21 03:47:32', '2020-03-21 03:47:32'),
(7, 'user0002@yahoo.com.tw', 'a8d96181dcb8f155a07e8cc74645d37724d6f4879c51ae1cec68f254d5197122', 'user0002', 'user', '2020-03-21 05:05:43', '2020-03-21 07:57:25'),
(8, 'admin@petweb.com.tw', 'b59ee8ea18c7118be4a4f839f306dc3d8ae4e9a6da958cc1ddb5828c7918876d', '管理者', 'admin', '2020-03-21 07:55:04', '2020-03-21 07:58:39');

-- --------------------------------------------------------

--
-- 資料表結構 `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(10) NOT NULL,
  `field` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_path` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `route_name` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `user_menu`
--

INSERT INTO `user_menu` (`id`, `field`, `icon_path`, `route_name`, `parent`, `type`) VALUES
(1, '首頁', 'images/userMenu/index.png', 'index', NULL, '5'),
(2, '購物說明', 'images/userMenu/description.png', 'index', NULL, '5'),
(3, '登入 | 加入會員', 'images/userMenu/login.png', 'login', NULL, NULL),
(4, '購物車', 'images/userMenu/scar.png', 'index', NULL, '5'),
(5, '會員管理', 'images/userMenu/member.png', 'user', NULL, 'user'),
(6, '後台管理', 'images/userMenu/adm.png', 'index', NULL, 'admin'),
(7, '登出', 'images/userMenu/logout.png', 'logout', NULL, '4'),
(8, '功能選單管理', 'images/userMenu/function.png', 'index', '後台管理', 'admin'),
(9, '一般選單管理', 'images/userMenu/hamburger.png', 'index', '後台管理', 'admin'),
(10, '會員名單管理', 'images/userMenu/member.png', 'index', '後台管理', 'admin');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
