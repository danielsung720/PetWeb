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
  `route_path` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `nav`
--

INSERT INTO `nav` (`id`, `field`, `icon_path`, `route_path`, `parent`) VALUES
(1, '關於我們', 'images/navIcon/title/about.png', '#', NULL),
(2, '最新消息', 'images/navIcon/title/news.png', '#', NULL),
(3, '銷售排行', 'images/navIcon/title/top.png', '#', NULL),
(4, '狗狗專區', 'images/navIcon/title/dog.png', '#', NULL),
(5, '貓咪專區', 'images/navIcon/title/cat.png', '#', NULL),
(6, '鼠兔專區', 'images/navIcon/title/rabbit.png', '#', NULL),
(7, '毛孩知識', 'images/navIcon/title/knowledge.png', '#', NULL),
(8, '交友系統', 'images/navIcon/title/friend.png', '#', NULL),
(9, '認養連結', 'images/navIcon/title/collar.png', '#', NULL),
(10, '新品上市', 'images/navIcon/sub/newarrival.png', '#', '最新消息'),
(11, '優惠活動', 'images/navIcon/sub/discount.png', '#', '最新消息'),
(12, '乾糧專區', 'images/navIcon/sub/dogdryfood.png', '#', '狗狗專區'),
(13, '罐頭專區', 'images/navIcon/sub/dogcan.png', '#', '狗狗專區'),
(14, '生食專區', 'images/navIcon/sub/dograwfood.png', '#', '狗狗專區'),
(15, '營養保健', 'images/navIcon/sub/medicine.png', '#', '狗狗專區'),
(16, '零嘴專區', 'images/navIcon/sub/snacks.png', '#', '狗狗專區'),
(17, '寶貝服飾', 'images/navIcon/sub/cloth.png', '#', '狗狗專區'),
(18, '其他用品', 'images/navIcon/sub/something.png', '#', '狗狗專區'),
(19, '乾糧專區', 'images/navIcon/sub/catdryfood.png', '#', '貓咪專區'),
(20, '罐頭專區', 'images/navIcon/sub/catcan.png', '#', '貓咪專區'),
(21, '生食專區', 'images/navIcon/sub/catrawfood.png', '#', '貓咪專區'),
(22, '營養保健', 'images/navIcon/sub/medicine.png', '#', '貓咪專區'),
(23, '零嘴專區', 'images/navIcon/sub/snacks.png', '#', '貓咪專區'),
(24, '寶貝服飾', 'images/navIcon/sub/cloth.png', '#', '貓咪專區'),
(25, '其他用品', 'images/navIcon/sub/something.png', '#', '貓咪專區'),
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user_data`
--

INSERT INTO `user_data` (`id`, `email`, `password`, `name`, `identity`, `created_at`, `updated_at`, `active`) VALUES
(6, 'user0001@yahoo.com.tw', '7c27acc4d937f432669130f9d290214ed4ee74023dc70d882081a61f001918ef', '周星馳', 'user', '2020-03-21 03:47:32', '2020-03-22 01:10:00', '1'),
(7, 'user0002@yahoo.com.tw', 'c3f175ebbc3caffac0e506458f349f8fba90d11556de75271c40d677c8c7a762', '陳小春', 'user', '2020-03-21 05:05:43', '2020-03-22 01:19:10', '1'),
(8, 'admin@petweb.com.tw', 'b59ee8ea18c7118be4a4f839f306dc3d8ae4e9a6da958cc1ddb5828c7918876d', '超帥的管理者', 'admin', '2020-03-21 07:55:04', '2020-03-22 01:32:24', '1'),
(9, 'user0005@yahoo.com.tw', '5b91f2b06968cad5259a49cc571fca5913c8bee6a4182ce729589875f2a14eeb', '周杰倫', 'user', '2020-03-22 00:43:03', '2020-03-22 00:43:03', '1'),
(10, 'user0006@yahoo.com.tw', '560e228d5f743a89d9fb3caa0c5ea0f33ff32fc1b53b5277ecf64dea49983c3c', '蔡依林', 'user', '2020-03-22 00:43:22', '2020-03-22 00:43:22', '1'),
(11, 'user0007@yahoo.com.tw', '37ba2fec0804864cce2b90faafffb23b8b41d265d22a08f225b39a8a5e7490b2', '陳冠希', 'user', '2020-03-22 00:43:40', '2020-03-22 00:43:40', '1'),
(12, 'user0008@yahoo.com.tw', '1af442f89f235cd6d00331a55cf1260f228a1ed21b42b3534ff6bf1e4ab2dc56', '周潤發', 'user', '2020-03-22 00:43:56', '2020-03-22 00:43:56', '1'),
(13, 'user0009@yahoo.com.tw', '7728fdcc77169bc71bba009ae0a4b9813458b38b8b9b4594056da644e11c2556', '吳宗憲', 'user', '2020-03-22 00:44:12', '2020-03-22 01:41:51', '1'),
(14, 'user0010@yahoo.com.tw', 'ea3aaccf0f97fbc10f971ae7d394f9b5f1b0a4c200717f9edb8574b18f1573e8', '王心凌', 'user', '2020-03-22 00:44:30', '2020-03-22 00:44:30', '1'),
(15, 'user0011@yahoo.com.tw', 'e995a7c6bb962f4cba724bb99d77fd9602853bba54b52068f20a7828f219ea06', '楊丞琳', 'user', '2020-03-22 00:44:43', '2020-03-22 00:44:43', '1'),
(16, 'user0012@yahoo.com.tw', 'd3c61cc43914e392a35481b4990335aae76b9beed5c5bf5cc68bbfe2eff22c42', '周子瑜', 'user', '2020-03-22 01:44:43', '2020-03-22 01:44:43', '1'),
(17, 'user0013@yahoo.com.tw', 'f4055571ee8c1b7faf3389e4461b3d50c5d45989bba1e9823dcbfd2035156950', '林書豪', 'user', '2020-03-22 01:45:21', '2020-03-22 01:45:21', '1'),
(18, 'user0014@yahoo.com.tw', '5ec7298ffad740c0922b950fed5c449b40360882d3e0561c9c784920682b6c5d', '李逍遙', 'user', '2020-03-22 01:45:44', '2020-03-22 01:45:44', '1'),
(19, 'user0015@yahoo.com.tw', 'fabfa6a3a27481f3f6ee840e2b614b8bb703d41a5f84799081eba0f87a32d085', '林月如', 'user', '2020-03-22 01:45:58', '2020-03-22 01:45:58', '1'),
(20, 'user0016@yahoo.com.tw', '8cb37e213c599a5194a8d5afe49a0c1bda9ad885884c59ddce97075389a0b646', '趙靈兒', 'user', '2020-03-22 01:46:21', '2020-03-22 01:46:21', '1'),
(21, 'user0017@yahoo.com.tw', '4a570f3e74d70d017e59093b7939e3bca6cbd0d6a275922be1c08fc43700c0dc', '卡羅特', 'user', '2020-03-22 01:46:57', '2020-03-22 04:09:46', '1'),
(22, 'user0018@yahoo.com.tw', '9f099020c3633b70e26e65fab6bc0167e07b435b94e72837b30d9a9f85abe91a', '貝基塔', 'user', '2020-03-22 01:47:16', '2020-03-22 01:47:16', '1'),
(23, 'user0019@yahoo.com.tw', '731ead5ef75ce2aedfc8e4675b591107a9dbe80e6f0e7ad7e463a848f764a6ea', '比克', 'user', '2020-03-22 01:47:29', '2020-03-22 01:47:29', '1'),
(24, 'user0020@yahoo.com.tw', '25d54223a92353722012e6ff9191ef10941a9c6d10de38977342f77e47020d4e', '孫悟飯', 'user', '2020-03-22 01:47:44', '2020-03-22 01:47:44', '1'),
(25, 'user0021@yahoo.com.tw', '16135ba04ba40fc5b56a4680644ad73cb7d7d838513fd843b79badc30c00575b', '特蘭克斯', 'user', '2020-03-22 01:48:06', '2020-03-22 01:48:06', '1'),
(26, 'user0022@yahoo.com.tw', 'afb303334104bef8bca997bd375a7b0f839e219cf1281e4a8f8cae24c72c591c', '天津飯', 'user', '2020-03-22 01:48:20', '2020-03-22 01:48:20', '1'),
(27, 'user0023@yahoo.com.tw', '446cc05f1426c7eccc2c5565414c51c91ddf1d93313e07c3d15912cff6b4a79a', '魔人普烏', 'user', '2020-03-22 01:48:39', '2020-03-22 01:48:39', '1'),
(28, 'user0024@yahoo.com.tw', '8f6632ff2da032a9219dd7b0ab818cc20cac4a12cd48186c0ddcd40001e03abf', '西魯', 'user', '2020-03-22 01:48:53', '2020-03-22 01:48:53', '1'),
(29, 'user0025@yahoo.com.tw', 'eef0d5af7aa5ec7496360b24e52980d768c7774f7fb280e9b42652e0f2c400fe', '佛利沙', 'user', '2020-03-22 01:49:11', '2020-03-22 01:49:11', '1'),
(30, 'user0026@yahoo.com.tw', '0ad64bd97a030cb703cbd903f21e7516db463a3d28ef911423ca47bc2d3daafa', '楊過', 'user', '2020-03-22 01:49:23', '2020-03-22 01:49:23', '1'),
(31, 'user0027@yahoo.com.tw', 'e470dc7f75b8cf1d2006b73423804e3e4beb8185d77eb8fa9d494fddc9feca4a', '小龍女', 'user', '2020-03-22 01:49:35', '2020-03-22 01:49:35', '1'),
(32, 'user0028@yahoo.com.tw', '2c86619049641f45b058216ce1376cf5214fac60173575f611a6ca9532bb868a', '金輪法王', 'user', '2020-03-22 01:49:52', '2020-03-22 01:49:52', '1'),
(33, 'user0029@yahoo.com.tw', '79f7ccda0395ea781f7b6170fd94f47e1448bf4ef5a973766309bb3078eb9ed6', '郭襄', 'user', '2020-03-22 01:50:11', '2020-03-22 01:50:11', '1'),
(34, 'user0030@yahoo.com.tw', '62da238d424450b79f8cd83b494304eeeeef4457d6377e37d07d3a27f9abccb6', '郭靖', 'user', '2020-03-22 01:50:35', '2020-03-22 01:50:35', '1'),
(35, 'user0031@yahoo.com.tw', '58804263c51b33cdd16fbcee8b57170f595c558e12fc9e986acbc5c0db0ab271', '周伯通', 'user', '2020-03-22 01:51:15', '2020-03-22 01:51:15', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(10) NOT NULL,
  `field` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_path` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `route_path` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `user_menu`
--

INSERT INTO `user_menu` (`id`, `field`, `icon_path`, `route_path`, `parent`, `type`) VALUES
(1, '首頁', 'images/userMenu/index.png', '/', NULL, '5'),
(2, '購物說明', 'images/userMenu/description.png', '#', NULL, '5'),
(3, '登入 | 加入會員', 'images/userMenu/login.png', '/login', NULL, NULL),
(4, '購物車', 'images/userMenu/scar.png', '#', NULL, '5'),
(5, '會員管理', 'images/userMenu/member.png', '/user', NULL, 'user'),
(6, '後台管理', 'images/userMenu/adm.png', '#', NULL, 'admin'),
(7, '登出', 'images/userMenu/logout.png', '/logout', NULL, '4'),
(8, '功能選單管理', 'images/userMenu/function.png', '#', '後台管理', 'admin'),
(9, '一般選單管理', 'images/userMenu/hamburger.png', '#', '後台管理', 'admin'),
(10, '會員名單管理', 'images/userMenu/member.png', '/admin_user', '後台管理', 'admin');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
