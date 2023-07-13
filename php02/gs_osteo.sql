-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 7 月 13 日 16:08
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db2`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_osteo`
--

CREATE TABLE `gs_osteo` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `birthday` date NOT NULL,
  `sex` enum('男性','女性') NOT NULL,
  `pmh` text NOT NULL,
  `pfx` text NOT NULL,
  `posteo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_osteo`
--

INSERT INTO `gs_osteo` (`id`, `name`, `birthday`, `sex`, `pmh`, `pfx`, `posteo`) VALUES
(1, '山田太郎', '1990-01-01', '男性', '高血圧 高脂血症\r\n', '椎体骨折', 'テリボン'),
(2, '織田信長', '1967-01-02', '男性', '痛風', '上腕骨骨折', 'ボナロン'),
(3, '樋口一葉', '1954-01-03', '女性', '脳梗塞', '大腿骨転子部骨折', 'プラリア'),
(4, 'テスト名前', '2000-01-01', '男性', 'テスト既往歴', 'テスト骨折歴', 'テスト治療歴'),
(7, 'つげの', '1992-09-09', '男性', 'sio', 'aiu', 'osteo'),
(9, 'トニー・スターク', '1980-05-03', '男性', 'アルコール依存症 肝硬変', '全身骨折', 'なし');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_osteo`
--
ALTER TABLE `gs_osteo`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_osteo`
--
ALTER TABLE `gs_osteo`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
