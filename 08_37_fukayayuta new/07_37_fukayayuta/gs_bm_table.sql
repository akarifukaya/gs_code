-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 9 朁E27 日 14:05
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `jan` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `actor` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `views` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `eva` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `story` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `jan`, `actor`, `views`, `eva`, `story`, `indate`) VALUES
(4, 'トトロ', 'アニメ', 'トトロ', '1000', '100', '優しいオバケのお話し', '2018-09-27 20:38:36'),
(5, 'アイアンマン', 'アクション', 'ロバート・ダウニーjr', '5', '100', '金持ちがヒーロースーツを発明しヒーローに！！', '2018-09-27 20:46:33'),
(6, 'プライベート・ライアン', '戦争', 'トム・ハンクス', '8', '80', '第二次世界大戦中、アメリカ兵がライアンを探す！', '2018-09-27 20:50:45'),
(7, 'グットウィルハンティング', '青春', 'マット・デイモン', '12', '90', '孤児の不良少年が数学の才能を開花し…', '2018-09-27 20:55:01'),
(8, '君に読む物語', '恋愛', 'レイチェル・アン・マクアダムス', '3', '80', '貧乏の男が金持ちの女と恋に落ちる話し', '2018-09-27 20:58:40'),
(9, '晴天の霹靂', '青春', '大泉　洋', '2', '85', '母親を亡くし、父親と別れ、孤独に生活をしていたマジシャンが雷に打たれ、自分が産まれる過去に行くお話し', '2018-09-27 21:02:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
