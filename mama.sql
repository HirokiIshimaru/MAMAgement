-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2020 年 1 月 09 日 06:04
-- サーバのバージョン： 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mama`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `mama_met`
--

CREATE TABLE `mama_met` (
  `id` int(10) UNSIGNED NOT NULL,
  `userName` varchar(128) DEFAULT NULL,
  `material` varchar(128) DEFAULT NULL,
  `years` varchar(128) DEFAULT NULL,
  `month` varchar(128) DEFAULT NULL,
  `day` varchar(128) DEFAULT NULL,
  `upYear` varchar(128) DEFAULT NULL,
  `upMonth` varchar(128) DEFAULT NULL,
  `upDay` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `mama_met`
--

INSERT INTO `mama_met` (`id`, `userName`, `material`, `years`, `month`, `day`, `upYear`, `upMonth`, `upDay`) VALUES
(19, '1', 'きゅうり,yasai', '2020', '01', '01', '2020', '01', '[07]'),
(20, '1', 'ねぎ,yasai', '2020', '01', '01', '2020', '01', '[07]'),
(21, '1', 'きゅうり,yasai', '2020', '01', '01', '2020', '01', '[07]'),
(22, '1', 'とうもろこし,yasai', '2020', '01', '01', '2020', '01', '[07]'),
(23, '1', 'キャベツ,yasai', '2020', '02', '11', '2020', '01', '[07]'),
(24, '1', '牛肉,nikuk', '2020', '08', '11', '2020', '01', '[07]'),
(25, '1', 'みかん,kudam', '2020', '01', '01', '2020', '01', '[07]'),
(26, '1', 'とうもろこし,yasai', '2020', '01', '01', '2020', '01', '[07]'),
(27, '1', 'りんご,kudam', '2020', '01', '01', '2020', '01', '[07]'),
(28, '1', 'たまねぎ,yasai', '2020', '09', '13', '2020', '01', '[08]'),
(29, '1', '牛肉,nikuk', '2020', '08', '12', '2020', '01', '[08]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mama_met`
--
ALTER TABLE `mama_met`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mama_met`
--
ALTER TABLE `mama_met`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;